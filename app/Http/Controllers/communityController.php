<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class communityController extends Controller
{
    function index()
    {
      return view('community.community');
    }

    function register()
    {
      return view('community.register');
    }

    function login()
    {
      return view('community.login');
    }
}
