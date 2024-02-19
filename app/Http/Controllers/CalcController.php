<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OperationRequest;
use App\Models\CalcFactory;

/**
 * The main Calculator controller
 */
class CalcController extends Controller
{
    /**
     * Function for page index /
     *
     * @return string
     */
    public function index()
    {
        return view('calculator');
    }

    /**
     * Function for calulator processing page /process
     *
     * @param Request $request
     * @return void
     */
    public function calculate(OperationRequest $request)
    {
       
        $val1 = $request->input('val1');
        $val2 = $request->input('val2');
        $operator = basename($request->input('operator'));        
        $calculateur = CalcFactory::build($operator);
        $sum = $calculateur->calculate($val1,$val2);
        $sign = $calculateur->getSign();
        
        return redirect()->route('calculator.home')->with( 
            [ 
                'val1' => $val1,
                'val2' => $val2,
                'sum' => $sum,                
                'sign' => $sign,
                'operator' => $operator
            ]
        );
    }
}
