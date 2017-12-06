<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class PagesController extends Controller {

   public function getHome(){
      return view('home');
   }

   public function getAbout(){
      return view('about');
   }

   public function getContact(){
      return view('contact');
   }

   public function getMessages(){
      $messages = Message::all();

      return view('messages', compact('messages'));
   }

}
