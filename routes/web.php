<?php

use App\Http\Controllers\AbonamentController;
use App\Http\Controllers\CancelTrainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchController;


Route::prefix("search")->group(function(){
    Route::get('/searchResult', [SearchController::class, "show"])->name('resultSearch');
Route::get("/search-result",[SearchController::class, "search"])->name("SearchResult");
Route::get("/return-search",[SearchController::class, "show"])->name("return");
});


Route::prefix('biletes')->group(function () {
Route::get("/home", [AppController::class, "index"])->name("biletes-home");
});


Route::prefix('complete-form')->group(function () {
    Route::get('/destination/Numarul-de-locuri/{numSeets}/locuri-selectate/{selectedSeats}/pretul-total/{totalPrice}/Data procurarii/{selectedDate}/Date-bilet/{bilet_id}', [AppController::class, 'form'])->name('form');
    Route::post('/formstore/{numSeets}/{bilet_id}/{selectedSeats}/{selectedDate}/{totalPrice}', [AppController::class, 'storeform'])->name('formstore');
});

Route::prefix('complete-form2')->group(function () {
    Route::get('/destination/Numarul-de-locuri/{numSeets2}/locuri-selectate/{selectedSeats2}/pretul-total/{totalPrice2}/Data procurarii/{selectedDate}/Date-bilet/{bilet_id}', [AppController::class, 'form2'])->name('vagon');
    Route::post('/formstore2/{numSeets2}/{bilet_id}/{selectedSeats2}/{selectedDate}/{totalPrice2}', [AppController::class, 'storeform2'])->name('vagonstore');
});

Route::prefix('complete-form3')->group(function () {
    Route::get('/destination/Numarul-de-locuri/{numSeets3}/locuri-selectate/{selectedSeats3}/pretul-total/{totalPrice3}/Data procurarii/{selectedDate}/Date-bilet/{bilet_id}', [AppController::class, 'form3'])->name('form3');
    Route::post('/formstore3/{numSeets3}/{bilet_id}/{selectedSeats3}/{selectedDate}/{totalPrice3}', [AppController::class, 'storeform3'])->name('form3store');
});

Route::prefix('complete-form4')->group(function () {
    Route::get('/destination/Numarul-de-locuri/{numSeets4}/locuri-selectate/{selectedSeats4}/pretul-total/{totalPrice4}/Data procurarii/{selectedDate}/Date-bilet/{bilet_id}', [AppController::class, 'form4'])->name('form4');
    Route::post('/formstore4/{numSeets4}/{bilet_id}/{selectedSeats4}/{selectedDate}/{totalPrice4}', [AppController::class, 'storeform4'])->name('form4store');
});


// Admin
Route::prefix('admin')->group(function () {
    Route::get('/home', function(){
        if (Auth::guard('admins')->check()) {
            return view('Admin.Crud.principal');
        } else {
            return redirect()->route("admin-registerGET");
        }
    })->name('admin-home');

    Route::get("/biletes.create",[AppController::class, "create"])->name("crud-Routes");
    Route::post('/biletes.create', [AppController::class, "store"])->name('createBiletes');

    Route::get("/editBiletes/{id}", [AppController::class, "edit"])->name("edit-Biletes");
    Route::put("/editBiletes/{id}", [AppController::class, "update"])->name("update-Biletes");

    Route::get("/routeDestroy/{id}",[AppController::class, "delete"])->name("route-delete");
    Route::delete("/routeDestroy/{id}", [AppController::class, "destroy"])->name("routes-destroy");


    Route::get('/login', [AdminController::class, 'adminLogin'])->name('admin-loginGET');
    Route::post('/login', [AdminController::class, 'workLogin'])->name('Admin-login');

    Route::get('/register', [AdminController::class, 'adminRegister'])->name('admin-registerGET');
    Route::post('/register', [AdminController::class, 'workRegister'])->name('Admin-register');

    Route::get('/logout', [AdminController::class, 'logoutAdmin'])->name('logout');

    Route::get('/dashboard', [AdminController::class, 'indexAdmin'])->name('admin.dashboard');

    Route::get("/anulare-tren", [CancelTrainController::class, "createCancel"])->name("Cancel-Train");
Route::post("/anulare-tren",[CancelTrainController::class, "storeCancel"])->name("StoreCancel");

Route::get("/updateCancel/{id}", [CancelTrainController::class, "editCancel"])->name("Update");
Route::put("/updateCancel/{id}", [CancelTrainController::class, "updateCancel"])->name("update-store");


Route::get("/cencel-delete/{id}",[CancelTrainController::class, "deleteCancel"])->name("Cancel-delete");
Route::delete("/cancel-delete/{id}", [CancelTrainController::class, "destroyCancel"])->name("cancelDestroy");



});

Route::prefix("send")->group(function(){
    Route::get("/sendSucces", function(){
        return view("Send.succes");
        })->name("send");

        Route::get("/sendDate", function(){
            return view("Send.sendDate");
            })->name("send-date");

            Route::get("sendForm", function(){
                return view("Send.SendForm");
            })->name("SendForm");
});


// Front
    Route::get('/', function () {
        return view("pages.home");
    })->name("home");

    Route::prefix("front")->group(function(){

    Route::get("/abonamente", [AbonamentController::class, "create"])->name("Abonamente");
    Route::post("/abonamente", [AbonamentController::class, "store"])->name("AbonamentIRC");

    Route::get("/intrebari-frecvente", function(){
        return view("frontPages.Intrebari-Frecvente");
        })->name("Intrebari");

        Route::get("/oferte", function(){
            if (Auth::check()) {
                return view("frontPages.Oferte");
            } else {
                return redirect()->route("Register");
            }
            })->name("Oferte");

        Route::get("/destinatii-turistice", function(){
            return view("frontPages.Destinatii-turistice");
            })->name("Destinatii");

                Route::get("/Mersul-Trenului", function(){
                return view("frontPages.Mersul-Trenurilor");
                })->name("Mersul-Trenului");

            Route::get("/Trenuri-Anulate", [CancelTrainController::class, "indexCancel"])->name("Trenuri-Anulate");

        Route::get("/contacte", [ContactController::class, "createContact"])->name("Contacte");
          Route::post("/contacte", [ContactController::class, "storeContact"])->name("store-contact");

            Route::get("/despre-noi", function(){
                return view("frontPages.Despre");
            })->name("Despre");

    });

            // User
    Route::prefix("user")->group(function(){
    Route::get('/user-register', [UserController::class, 'UserRegister'])->name('Register');
    Route::post('/user-register', [UserController::class, 'workUserRegister'])->name('Reg-register');

    Route::get('/user-login', [UserController::class, 'Login'])->name('Login');
    Route::post('/user-login', [UserController::class, 'workLogin'])->name('User-login');

    Route::get('/user-logout', [UserController::class, 'logoutUser'])->name('logout-register');

    Route::get('/user-dashboard', [UserController::class, 'indexUser'])->name('user.dashboard');
    Route::put('/edit-user', [UserController::class, 'editUser'])->name('user.update');
    Route::delete('/delete-user', [UserController::class, 'deleteUser'])->name('user.delete');
});

// Maps
Route::prefix("map")->group(function(){

    Route::get("/iasi", function(){
        return view("frontPages.maps.iasi");
    })->name("Iasi-map");

    Route::get("/odesa/bender", function(){
        return view("frontPages.maps.odesaBender");
    })->name("Odesa-Bender");


    Route::get("/cernauti", function(){
        return view("frontPages.maps.cernauti");
    })->name("Cernauti");

    Route::get("/galati", function(){
        return view("frontPages.maps.galati");
    })->name("Galati");


    Route::get("/ungheni", function(){
        return view("frontPages.maps.ungheni");
    })->name("Ungheni");

    Route::get("/basarabeasca", function(){
        return view("frontPages.maps.basarabeasca");
    })->name("Basarabeasca");

    Route::get("/mateuti", function(){
        return view("frontPages.maps.mateuti");
    })->name("Mateuti");

    Route::get("/otaci", function(){
        return view("frontPages.maps.otaci");
    })->name("Otaci");

    Route::get("/balti/ungheni", function(){
        return view("frontPages.maps.baltiUngheni");
    })->name("Balti-Ungheni");

    Route::get("/cahul", function(){
        return view("frontPages.maps.cahul");
    })->name("Cahul");
});
