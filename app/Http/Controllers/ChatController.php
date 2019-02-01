<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Symptom;
use App\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class ChatController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function getSymptom()
    {
        $symptoms = Symptom::all('symptom_id', 'symptom_name');

        return response()->json(array(
            'success' => true,
            'msg'     => '',
            'data'    =>$symptoms
        ));
    }

    public function chat()
    {
        return view('chat');
    }

    public function send(Request $request)
    {
        $user = User::find(Auth::id());

        event(new ChatEvent($request->message, $user));
    }

//    public function send()
//    {
//
//        $message = 'Test Success';
//        $user = User::find(Auth::id());
//
//        event(new ChatEvent($message, $user));
//    }
}
