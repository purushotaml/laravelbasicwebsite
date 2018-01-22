<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class ContactController extends Controller
{
  public function submit(Request $request){
    $validatedData = $request->validate(['firstname' => 'required',
    'lastname'=>'required',
    'email'=>'required',
    'message' => 'required']);

    $message = New Message();
    $message->firstname = $request->input('firstname');
    $message->lastname = $request->input('lastname');
    $message->email = $request->input('email');
    $message->message = $request->input('message');
    $message->save();

     return redirect('/')->with(['message' => 'Message Sent Successfully']);
  }
}
