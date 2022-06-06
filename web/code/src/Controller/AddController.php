<?php

declare(strict_types = 1);

namespace Example\Controller;

use Mini\Controller\Exception\BadInputException;
use Mini\Controller\Controller;
use Mini\Http\Request;

class AddController extends Controller
{
    /**
     * Add two numbers provided by the request
     * 
     * @param Request $request http request
     * 
     * @return string view template
     * 
     * @throws BadInputException if request doesn't contain required values
     */
    public function add(Request $request) {
        $num1 = intval($request->request->get('num1'));
        $num2 = intval($request->request->get('num2'));

        if (! $num1){
            throw new BadInputException('Number 1 missing');
        }
        if (! $num2){
            throw new BadInputException('Number 2 missing');
        }
        
        $sum = $num1 + $num2;
        return view('app/add/detail', ['sum' => $sum]);
    }
}
