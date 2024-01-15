<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\TicketMail;
use Illuminate\Support\Facades\Session;
use Exception;
use Illuminate\Http\Request;
//use Symfony\Component\Mailer\Exception\TransportException;

class MailController extends Controller
{
    public function store(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'description' => 'required',
            'subject' => 'required',
        ];

        $this->validate($request, $rules);

        try{
            Mail::to(config('constants.app.email'))->send(new TicketMail([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'description' => $request->input('description'),
                'subject' => $request->input('subject'),
            ]));

            Session::flash('message', 'Enviado com sucesso!');
            Session::flash('alert-class', 'alert-success'); 
            return redirect()->route('contact');
        }catch(Exception $exception){
            Session::flash('message', 'Erro ao enviar.');
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('contact');
        }  
    }
}
