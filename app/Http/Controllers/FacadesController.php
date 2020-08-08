<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect,Response,DB,Config;
use App\User;
use App\Participant;
class FacadesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      return view('facades.dashboard');
    }
 
  
    
    
}