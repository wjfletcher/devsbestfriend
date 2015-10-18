<?php

namespace Devsbestfriend\Http\Controllers;

use Illuminate\Http\Request;
use Devsbestfriend\Http\Requests;
use Devsbestfriend\Http\Controllers\Controller;

class randuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRanduser()
    {
        return view('randuser.randuser') ;
    }

    public function postRanduser()
    {
        return 'Process the ipsum';
    }

}
