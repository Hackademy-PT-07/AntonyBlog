<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ReceivedMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function form(){

        $title = 'Contatti';   
     
        $text = 'Vuoi far parte del TEAM compila qui';   
     
         return view('contatti', compact('title', 'text'));
     
        }

    public function save(Request $request){

        $mail = new ReceivedMail($request->name, $request->email, $request->message);

        //return $mail->render();

        Mail::to('admin@example.com')->send($mail);

        return redirect()->route('contact')->with(['success' => 'Richiesta ricevuta GRAZIE'] );

    }    
}
