<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function getMessage(){
      $message = New Message;
      $messages = $message::paginate(2);
      return view('message')->with(array('messages' => $messages));
    }
}
