<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/question');
    }


     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/question-form');
    }
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        dd($request);
        return view('admin/question-form')->with(['messages'=>'Question Saved']);
    }
}
