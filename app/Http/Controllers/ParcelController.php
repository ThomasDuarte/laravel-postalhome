<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcel;
use Illuminate\Support\Facades\Validator;

class ParcelController extends Controller
{
    public function home_index()
    {
        $parcels = Parcel::all();
        $nbParcels = count($parcels);

        return view('welcome', ['nbParcels' => $nbParcels]);
    }

    public function register_index()
    {
        return view('register');
    }

    public function register_new_parcel(Request $request)
    {

        //valider les champs du formulaire
        $validator = Validator::make($request->all(), [
            'address_dep' => 'required|string|max:255',
            'address_arr' => 'required|string|max:255',
            'weigth' => 'required|numeric|min:1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //Insertion dans la BDD
        $parcel = Parcel::create([
            'address_dep' => $request->address_dep,
            'address_arr' => $request->address_arr,
            'weigth' => $request->weigth,
        ]);

        $message = 'Colis enregistré !';
        return view('register', compact('message'));
    }
}
