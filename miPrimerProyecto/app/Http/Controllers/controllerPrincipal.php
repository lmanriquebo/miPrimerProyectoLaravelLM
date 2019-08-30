<?php

namespace App\Http\Controllers;


use App\RutasPhones;
use Illuminate\Http\Request;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class controllerPrincipal extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function mostrarEquipos(){
        $phones = RutasPhones::all();
        return view('visualizar',compact('phones'));
    }

    public function newPhones(){
        return view('newPhones');
    }

    public function createCell(){
        $data = request()->except(['_token']);
        request()->validate([
            'tittle' => 'required', 'unique:rutas_phones,tittle',
            'description' => 'required',
            'rutaImg' => 'required',
        ],[
            'tittle.required' => 'The Title field is required',
            'description.required' => 'The Description field is required',
            'rutaImg.required' => 'The Cell Image field is required',
        ]);
        if(request()->hasFile('rutaImg')){
            $file = $data['rutaImg']->storeAs('public', $data['rutaImg']->getClientOriginalName());
            $data['rutaImg'] = $data['rutaImg']->getClientOriginalName();
        }else{
            $data['rutaImg'] = '';
        }
       
        RutasPhones::create($data);

        return back()
            ->with('msn','You have successfully upload image.');
    }

    public function editPhone(RutasPhones $RutasPhones){
        return view('editPhone',['RutasPhones' => $RutasPhones]);
    }

    public function updateCell(RutasPhones $RutasPhones){
        dd($RutasPhones);

        /*$data = request()->except(['_token']);
        request()->validate([
            'tittle' => 'required', 'unique:rutas_phones,tittle',
            'description' => 'required'
        ],[
            'tittle.required' => 'The Title field is required',
            'description.required' => 'The Description field is required'
        ]);
        if(request()->hasFile('rutaImg')){
            $file = $data['rutaImg']->storeAs('public', $data['rutaImg']->getClientOriginalName());
            $data['rutaImg'] = $data['rutaImg']->getClientOriginalName();
        }else{
            $data['rutaImg'] = '';
        }
       
        RutasPhones::update($data);

        return back()
            ->with('msn','You have successfully upload image.');*/
    }
}