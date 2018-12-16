<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MailController extends Controller
{
    public function feedback(Request $request){
        return view('mails.feedback');
    }
    public function sendmail(Request $request){


       /*dd($request->all());
       return response()->json([
           'msg'=> 'Отправка успешна'
       ]);*/
       Mail::to('anzgul@tut.by')->send(new email);
        return response()->json([
            'msg'=> 'Отправка успешна'
        ]);

    }
}
