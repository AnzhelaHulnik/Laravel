<?php

namespace App\Http\Controllers;


use App\Mail\FeedbackMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function feedback(Request $request){
        return view('mails.feedback');
    }


    public function sendmail(Request $request){


       //Product::create($request->all());
        $feedback = [];
        $feedback['title'] = $request->input('name');
        $feedback['content'] = $request->input('content');
        dd($request->all());
       return response()->json([
           'msg'=> 'Отправка успешна'
       ]);


       Mail::to()->send(new email);
        return response()->json([
            'msg'=> 'Отправка успешна'
        ]);

    }

    public function show(Request $request) {
        //$result = $request->session()->get('key', 'default');
      //  $result = $request->session()->all();
        $request->session()->put('key', 'value');
        $result = $request->session()->all();
        dump($result);
    }
}
