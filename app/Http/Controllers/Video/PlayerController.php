<?php

namespace App\Http\Controllers\Video;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlayerController extends Controller
{
   public  function Player(){
       return view('player/player');
   }
}
