<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrenuriAnulate;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CancelTrainRequest;

class CancelTrainController extends Controller
{

    public function indexCancel(){
        $cancel = TrenuriAnulate::all();
        return view("frontPages.Trenuri-Anulate", compact("cancel"));
            }
    public function createCancel(){
        if (!auth()->guard('admins')->check()) {
            return redirect()->route('admin-registerGET');
        }
        return view("Admin.Crud.createCancel");
    }



    public function storeCancel(CancelTrainRequest $request){
        $request = CancelTrainRequest::createFrom($request);

        $cancel = new TrenuriAnulate;
        $cancel->train_number = $request->train_number;
        $cancel->route = $request->route;
        $cancel->time_start = $request->time_start;
        $cancel->time_destination = $request->time_destination;
        $cancel->destination = $request->destination;
        $cancel->station_start = $request->station_start;
$cancel->admin_id = Auth::guard('admins')->id();
$cancel->save();


return redirect()->route("Update", ['id' => $cancel->id]);
    }

    public function editCancel($id){
        $cancel = TrenuriAnulate::findOrFail($id);

        if (!auth()->guard('admins')->check()) {
            return redirect()->route('admin-registerGET');
        }
        return view("Admin.Crud.UpdateCancel", compact("cancel"));


    }



    public function updateCancel(CancelTrainRequest $request, $id){
        $cancel = TrenuriAnulate::findOrFail($id);
        $cancel->train_number = $request->train_number;
        $cancel->route = $request->route;
        $cancel->time_start = $request->time_start;
        $cancel->time_destination = $request->time_destination;
        $cancel->destination = $request->destination;
        $cancel->station_start = $request->station_start;
        $cancel->hidden = $request->hidden;

        $cancel->save();

        return redirect()->route("admin-home")->with("Succes Update CRUD", "A fost actualizat cu succes");

    }

    public function deleteCancel($id)
    {
        $cancel = TrenuriAnulate::findOrFail($id);
        if (!auth()->guard('admins')->check()) {
            return redirect()->route('admin-registerGET');
        }
        return view("Admin.Crud.DeleteCancel", compact('cancel'));
    }

    public function destroyCancel($id)
    {
        $cancel = TrenuriAnulate::findOrFail($id);
        $cancel->delete();

        return redirect()->route('admin-home')->with('success', 'Ruta a fost ștearsă cu succes.');
    }
}




