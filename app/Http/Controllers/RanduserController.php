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

    public function postRanduser(Request $request)
    {
        
        $this->validate($request, [
            'fakes' => 'required|numeric|min:1|max:25'
        ]);
        
        
        
        
        $faker= \Faker\Factory::create();
        $fake = array();
        for ($i = 0; $i < $request->input('fakes'); $i++) {
        
            array_push($fake, $faker->name);
            if ($request->input('address') == TRUE) {
                array_push($fake, $faker->address);
            }
            if ($request->input('number') == TRUE) {
                array_push($fake, $faker->phoneNumber);
            }
            array_push($fake, '<br>');
        }
        
        return view('randuser.postranduser')->with('faker', $fake);
        
    }

}
