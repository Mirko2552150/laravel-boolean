<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PhotoController extends Controller
{
    public function store(Request $request){
      $data = $request->all();
      $path = Storage::disk('public')->put('images', $data['path']); // abbiamo creato la nostra cartella clone su PUBLIC che puntera ad una cartella nascosta, usiamo storage  per prendere i dato PATH dal FORM e lo PUT (mettiamo) nella cartella
      dd($path); // restituisce TRUE
    }

    public function upadate(Request $request, $id){
      $data = $request->find();
      $path = Storage::disk('public')->put('images', $data['path']); // abbiamo creato la nostra cartella clone su PUBLIC che puntera ad una cartella nascosta, usiamo storage  per prendere i dato PATH dal FORM e lo PUT (mettiamo) nella cartella
      dd($path); // restituisce TRUE
    }
}
