<?php

namespace App\Http\Controllers;

use App\Mail\Vagon1;
use App\Mail\Vagon2;
use App\Mail\Vagon3;
use App\Mail\Vagon4;
use App\Models\Admin;
use App\Models\Routes;
use App\Models\Biletes;
use Illuminate\Http\Request;
use App\Models\PassagersVagon1;
use App\Models\PassagersVagon2;
use App\Models\PassagersVagon3;
use App\Models\PassagersVagon4;
use App\Http\Requests\RoutesRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\PassagersVagon1Request;
use App\Http\Requests\PassagersVagon2Request;
use App\Http\Requests\PassagersVagon3Request;
use App\Http\Requests\PassagersVagon4Request;

// App Controller = Controllerul care va raspunde de logica Aplicatiei de cumparare de bilete + Confirmarea in Mailer la utilizt
class AppController extends Controller
{



public function create(){
    if (!auth()->guard('admins')->check()) {
        return redirect()->route('admin-registerGET');
    }

    return view("Admin.Crud.createRoutes");
}
    public function store(RoutesRequest $request)
    {


        $request = RoutesRequest::createFrom($request);

        $route = new Routes;
        $route->train_number = $request->train_number;
        $route->route = $request->route;
        $route->time_start = $request->time_start;
        $route->time_destination = $request->time_destination;
        $route->duration = $request->duration;
        $route->destination = $request->destination;
        $route->station_start = $request->station_start;
        $route->admin_id = Auth::guard('admins')->id();

        $biletes = new Biletes;
        $biletes->route_name = $request->route_name;
        $biletes->number_train = $request->number_train;
        $biletes->price_class1 = $request->price_class1;
        $biletes->price_class2 = $request->price_class2;
        $biletes->class1c = $request->class1c;
        $biletes->class2c = $request->class2c;
        $biletes->time_start = $request->time_start;
        $biletes->time_destination = $request->time_destination;
        $biletes->duration = $request->duration;
        $biletes->vagon_number1 = $request->vagon_number1;
        $biletes->vagon_number2 = $request->vagon_number2;
        $biletes->vagon_number3 = $request->vagon_number3;
        $biletes->vagon_number4 = $request->vagon_number4;
        $biletes->admin_id = Auth::guard('admins')->id();
        $biletes->save();

        $route->biletes_id = $biletes->id;
    $route->save();

        return redirect()->route('edit-Biletes', ['id' => $biletes->id]);
    }


    public function edit($id)
    {
        $route = Routes::where("biletes_id", $id)->first();
        $biletes = Biletes::findOrFail($id);
        if (!auth()->guard('admins')->check()) {
            return redirect()->route('admin-registerGET');
        }
        return view("Admin.Crud.editRoutes", compact("route", "biletes", "id"));
    }
    public function update(RoutesRequest $request, $id)
    {
        $route = Routes::where("biletes_id", $id)->first();
        $biletes = Biletes::findOrFail($id);

        $route->train_number = $request->train_number;
        $route->route = $request->route;
        $route->time_start = $request->time_start;
        $route->time_destination = $request->time_destination;
        $route->duration = $request->duration;
        $route->destination = $request->destination;
        $route->station_start = $request->station_start;
        $route->hidden = $request->hidden;

        $biletes->route_name = $request->route_name;
        $biletes->number_train = $request->number_train;
        $biletes->price_class1 = $request->price_class1;
        $biletes->price_class2 = $request->price_class2;
        $biletes->class1c = $request->class1c;
        $biletes->class2c = $request->class2c;
        $biletes->time_start = $request->time_start;
        $biletes->time_destination = $request->time_destination;
        $biletes->duration = $request->duration;
        $biletes->vagon_number1 = $request->vagon_number1;
        $biletes->vagon_number2 = $request->vagon_number2;
        $biletes->vagon_number3 = $request->vagon_number3;
        $biletes->vagon_number4 = $request->vagon_number4;
        $biletes->hidden = $request->hidden;

        $route->save();
        $biletes->save();

        return redirect("/")->with("Succes Update CRUD", "A fost actualizat cu succes");
    }

    public function delete($id){
        $routes = Routes::where("biletes_id", $id)->first();
        $biletes = Biletes::findOrFail($id);
        if (!auth()->guard('admins')->check()) {
            return redirect()->route('admin-registerGET');
        }
        return view("Admin.Crud.DeleteRoutes", compact("routes", "biletes","id"));

    }
    public function destroy($id){
$biletes = Biletes::findOrFail($id);
$routes = Routes::where("biletes_id", $id)->first();
$biletes->delete();
$routes->delete();
return redirect()->route("createBiletes")->with("succes", "Ruta de tren a fost stersa cu succes");


    }

    public function index(Request $request){
        $destination = $request->input('destination');
        $station_start = $request->input('station_start');

        $biletes = Biletes::whereHas("routes", function ($query) use ($destination, $station_start) {
            $query->where('destination', 'like', "%{$destination}%")
                ->where('station_start', 'like', "%{$station_start}%");
        })->get();

        $routes = Routes::whereIn("biletes_id", $biletes->pluck("id"))->get();
        $selectedSeats = [];
        $selectedSeats2 = [];
        $selectedSeats3 = [];
        $selectedSeats4 = [];
        $bilet_id = $biletes->pluck("id")->first();

        return view("pages.biletes", compact("biletes", "routes", "bilet_id", "selectedSeats", "selectedSeats2", "selectedSeats3", "selectedSeats4"));
    }
public function form($numseets, $selectedSeats,$totalPrice, $selectedDate, $bilet_id) {
    if($numseets == 1){
        $bilet = Biletes::find($bilet_id);
        return view("pages.vagon1.form1Passager", compact("numseets", "bilet","selectedSeats", "totalPrice", "selectedDate","bilet_id"));
    } else if($numseets == 2){
    $bilet = Biletes::find($bilet_id);
        return view("pages.vagon1.form2Passager", compact("numseets", "bilet","selectedSeats","totalPrice","selectedDate",'bilet_id'));
    } else if($numseets == 3){
        $bilet = Biletes::find($bilet_id);
        return view("pages.vagon1.form3Passager",compact("numseets", "bilet","selectedSeats","totalPrice","selectedDate",'bilet_id'));
    } else if($numseets == 4){
        $bilet = Biletes::find($bilet_id);

        return view("pages.vagon1.form4Passager",compact("numseets", "bilet","selectedSeats","totalPrice","selectedDate",'bilet_id'));
} else {
        return redirect()->back()->with("Numarul de locuri nu coincide");
    }
}

public function storeform(PassagersVagon1Request $passagersRequest, $numseets, $bilet_id, $selectedSeats, $selectedDate, $totalPrice)

{
    $data = $passagersRequest->validated();
    $bilet = Biletes::find($bilet_id);
    $formData = [];
    for ($i = 0; $i < $numseets; $i++) {
        $formData[$i]["person_name"] = isset($data["person_name"][$i]) ? $data["person_name"][$i] : '';
        $formData[$i]["person_lastname"] = isset($data["person_lastname"][$i]) ? $data["person_lastname"][$i] : '';
        $formData[$i]["email"] = isset($data["email"][$i]) ? $data["email"][$i] : '';

        if (!$formData[$i]["person_name"] || !$formData[$i]["person_lastname"] || !$formData[$i]["email"]) {
            return redirect()->back()->with("error", "Te rog completează toate câmpurile pentru fiecare pasager.");
        }

        if (!filter_var($formData[$i]["email"], FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with("error", "Adresa de email nu este validă.");
        }

        // Salvează datele în baza de date
        $passager = new PassagersVagon1();
        $passager->person_name = $formData[$i]["person_name"];
        $passager->person_lastname = $formData[$i]["person_lastname"];
        $passager->email = $formData[$i]["email"];
        $passager->biletes_id = $bilet->id;
        $passager->selectedSeats = $selectedSeats;
        $passager->selectedDate = $selectedDate;
        $passager->totalPrice = $totalPrice;
        $passager->save();
    }

    $NumberTrain = $bilet->number_train;
    $TimeGo = $bilet->time_start;
    $TimeDestination = $bilet->time_destination;
    $DurationTravel = $bilet->duration;
    $class = $bilet->class1c;
    $vagon = $bilet->vagon_number1;

    Mail::to($data["email"][0])->send(new Vagon1($formData, $bilet, $numseets, $NumberTrain, $TimeGo, $TimeDestination, $DurationTravel, $selectedDate, $selectedSeats, $totalPrice, $class, $vagon));

    return redirect()->route('send')->with('success', 'Pasagerii au fost adăugați cu succes.');
}

// Vagon 2


public function form2($numseets2, $selectedSeats2,$totalPrice2, $selectedDate, $bilet_id) {
    if($numseets2 == 1){
        $bilet = Biletes::find($bilet_id);
        return view("pages.vagon2.form1Passager", compact("numseets2", "bilet","selectedSeats2", "totalPrice2", "selectedDate", 'bilet_id'));
    } else if($numseets2 == 2){
        $bilet = Biletes::find($bilet_id);
        return view("pages.vagon2.form2Passager", compact("numseets2", "bilet","selectedSeats2","totalPrice2","selectedDate", 'bilet_id'));
    } else if($numseets2 == 3){
        $bilet = Biletes::find($bilet_id);
        return view("pages.vagon2.form3Passager",compact("numseets2", "bilet","selectedSeats2","totalPrice2","selectedDate", 'bilet_id'));
    } else if($numseets2 == 4){
        $bilet = Biletes::find($bilet_id);
        return view("pages.vagon2.form4Passager",compact("numseets2", "bilet","selectedSeats2","totalPrice2","selectedDate",'bilet_id'));
} else {
        return redirect()->back()->with("Numarul de locuri nu coincide");
    }
}

public function storeform2(PassagersVagon2Request $passagersRequest, $numseets2, $bilet_id, $selectedSeats2, $selectedDate, $totalPrice2)

{
    $data = $passagersRequest->validated();


    $bilet = Biletes::find($bilet_id);


    $formData = [];
    for ($i = 0; $i < $numseets2; $i++) {
        $formData[$i]["person_name"] = isset($data["person_name"][$i]) ? $data["person_name"][$i] : '';
        $formData[$i]["person_lastname"] = isset($data["person_lastname"][$i]) ? $data["person_lastname"][$i] : '';
        $formData[$i]["email"] = isset($data["email"][$i]) ? $data["email"][$i] : '';

        if (!$formData[$i]["person_name"] || !$formData[$i]["person_lastname"] || !$formData[$i]["email"]) {
            return redirect()->back()->with("error", "Te rog completează toate câmpurile pentru fiecare pasager.");
        }

        if (!filter_var($formData[$i]["email"], FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with("error", "Adresa de email nu este validă.");
        }

        $passager = new PassagersVagon2();
        $passager->person_name = $formData[$i]["person_name"];
        $passager->person_lastname = $formData[$i]["person_lastname"];
        $passager->email = $formData[$i]["email"];
        $passager->biletes_id = $bilet->id;
        $passager->selectedSeats2 = $selectedSeats2;
        $passager->selectedDate = $selectedDate;
        $passager->totalPrice2 = $totalPrice2;
        $passager->save();
    }

    $NumberTrain = $bilet->number_train;
    $TimeGo = $bilet->time_start;
    $TimeDestination = $bilet->time_destination;
    $DurationTravel = $bilet->duration;
    $class2 = $bilet->class2c;
    $vagon2 = $bilet->vagon_number2;

    Mail::to($data["email"][0])->send(new Vagon2($formData, $bilet, $numseets2, $NumberTrain, $TimeGo, $TimeDestination, $DurationTravel, $selectedDate, $selectedSeats2, $totalPrice2, $class2, $vagon2));

    return redirect()->route('send')->with('success', 'Pasagerii au fost adăugați cu succes.');
}

public function form3($numseets3, $selectedSeats3,$totalPrice3, $selectedDate, $bilet_id) {
    if($numseets3 == 1){
        $bilet = Biletes::find($bilet_id);
        return view("pages.vagon3.form1Passager", compact("numseets3", "bilet","selectedSeats3", "totalPrice3", "selectedDate","bilet_id"));
    } else if($numseets3 == 2){
        $bilet = Biletes::find($bilet_id);
        return view("pages.vagon3.form2Passager", compact("numseets3", "bilet","selectedSeats3","totalPrice3","selectedDate","bilet_id"));
    } else if($numseets3 == 3){
        $bilet = Biletes::find($bilet_id);
        return view("pages.vagon3.form3Passager",compact("numseets3", "bilet","selectedSeats3","totalPrice3","selectedDate","bilet_id"));
    } else if($numseets3 == 4){
        $bilet = Biletes::find($bilet_id);

        return view("pages.vagon3.form4Passager",compact("numseets3", "bilet","selectedSeats3","totalPrice3","selectedDate","bilet_id"));
} else {
        return redirect()->back()->with("Numarul de locuri nu coincide");
    }
}


public function storeform3(PassagersVagon3Request $passagersRequest, $numseets3, $bilet_id, $selectedSeats3, $selectedDate, $totalPrice3)

{
    $data = $passagersRequest->validated();

    $bilet = Biletes::find($bilet_id);

    if (!$bilet) {
        return redirect()->back()->with("error", "Nu sunt bilete disponibile.");
    }

    $formData = [];
    for ($i = 0; $i < $numseets3; $i++) {
        $formData[$i]["person_name"] = isset($data["person_name"][$i]) ? $data["person_name"][$i] : '';
        $formData[$i]["person_lastname"] = isset($data["person_lastname"][$i]) ? $data["person_lastname"][$i] : '';
        $formData[$i]["email"] = isset($data["email"][$i]) ? $data["email"][$i] : '';

        if (!$formData[$i]["person_name"] || !$formData[$i]["person_lastname"] || !$formData[$i]["email"]) {
            return redirect()->back()->with("error", "Te rog completează toate câmpurile pentru fiecare pasager.");
        }

        if (!filter_var($formData[$i]["email"], FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with("error", "Adresa de email nu este validă.");
        }

        $passager = new PassagersVagon3();
        $passager->person_name = $formData[$i]["person_name"];
        $passager->person_lastname = $formData[$i]["person_lastname"];
        $passager->email = $formData[$i]["email"];
        $passager->biletes_id = $bilet->id;
        $passager->selectedSeats3 = $selectedSeats3;
        $passager->selectedDate = $selectedDate;
        $passager->totalPrice3 = $totalPrice3;
        $passager->save();
    }

    $NumberTrain = $bilet->number_train;
    $TimeGo = $bilet->time_start;
    $TimeDestination = $bilet->time_destination;
    $DurationTravel = $bilet->duration;
    $class2 = $bilet->class2c;
    $vagon3 = $bilet->vagon_number3;

    Mail::to($data["email"][0])->send(new Vagon3($formData, $bilet, $numseets3, $NumberTrain, $TimeGo, $TimeDestination, $DurationTravel, $selectedDate, $selectedSeats3, $totalPrice3, $class2, $vagon3));

    return redirect()->route('send')->with('success', 'Pasagerii au fost adăugați cu succes.');
}

public function form4($numseets4, $selectedSeats4,$totalPrice4, $selectedDate, $bilet_id) {
    if($numseets4 == 1){
        $bilet = Biletes::find($bilet_id);
        return view("pages.vagon4.form1Passager", compact("numseets4", "bilet","selectedSeats4", "totalPrice4", "selectedDate", "bilet_id"));
    } else if($numseets4 == 2){
        $bilet = Biletes::find($bilet_id);
        return view("pages.vagon4.form2Passager", compact("numseets4", "bilet","selectedSeats4","totalPrice4","selectedDate", "bilet_id"));
    } else if($numseets4 == 3){
        $bilet = Biletes::find($bilet_id);
        return view("pages.vagon4.form3Passager",compact("numseets4", "bilet","selectedSeats4","totalPrice4","selectedDate", "bilet_id"));
    } else if($numseets4 == 4){
        $bilet = Biletes::find($bilet_id);

        return view("pages.vagon4.form4Passager",compact("numseets4", "bilet","selectedSeats4","totalPrice4","selectedDate", "bilet_id"));
} else {
        return redirect()->back()->with("Numarul de locuri nu coincide");
    }
}



public function storeform4(PassagersVagon4Request $passagersRequest, $numseets4, $bilet_id, $selectedSeats4, $selectedDate, $totalPrice4)

{
    $data = $passagersRequest->validated();
    $bilet = Biletes::find($bilet_id);

    $formData = [];
    for ($i = 0; $i < $numseets4; $i++) {
        $formData[$i]["person_name"] = isset($data["person_name"][$i]) ? $data["person_name"][$i] : '';
        $formData[$i]["person_lastname"] = isset($data["person_lastname"][$i]) ? $data["person_lastname"][$i] : '';
        $formData[$i]["email"] = isset($data["email"][$i]) ? $data["email"][$i] : '';

        if (!$formData[$i]["person_name"] || !$formData[$i]["person_lastname"] || !$formData[$i]["email"]) {
            return redirect()->back()->with("error", "Te rog completează toate câmpurile pentru fiecare pasager.");
        }

        if (!filter_var($formData[$i]["email"], FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with("error", "Adresa de email nu este validă.");
        }

        $passager = new PassagersVagon4();
        $passager->person_name = $formData[$i]["person_name"];
        $passager->person_lastname = $formData[$i]["person_lastname"];
        $passager->email = $formData[$i]["email"];
        $passager->biletes_id = $bilet->id;
        $passager->selectedSeats4 = $selectedSeats4;
        $passager->selectedDate = $selectedDate;
        $passager->totalPrice4 = $totalPrice4;
        $passager->save();
    }

    $NumberTrain = $bilet->number_train;
    $TimeGo = $bilet->time_start;
    $TimeDestination = $bilet->time_destination;
    $DurationTravel = $bilet->duration;
    $class2 = $bilet->class2c;
    $vagon4 = $bilet->vagon_number4;

    Mail::to($data["email"][0])->send(new Vagon4($formData, $bilet, $numseets4, $NumberTrain, $TimeGo, $TimeDestination, $DurationTravel, $selectedDate, $selectedSeats4, $totalPrice4, $class2, $vagon4));
    return redirect()->route('send')->with('success', 'Pasagerii au fost adăugați cu succes.');
}

}
