<?php

namespace Devsbestfriend\Http\Controllers;

use Illuminate\Http\Request;
use Devsbestfriend\Http\Requests;
use Devsbestfriend\Http\Controllers\Controller;

class loremController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLorem()
    {
        return view('lorem.lorem') ;
    }

    public function postLorem(Request $request)
    {
        $this->validate($request, [
            'paragraphs' => 'required|numeric|min:1|max:25'
        ]);
        
        
    
        $generator = new \Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($request->input('paragraphs'));
        echo implode('<p>', $paragraphs);
        
        dd($request->all());
        return 'Process the ipsum';
    }

    
}
