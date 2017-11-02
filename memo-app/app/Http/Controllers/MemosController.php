<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Memo;

class MemosController extends Controller
{
    public function index(){
      
      $memos = Memo::all();
      $memo = new Memo();

      return view('memos.index')->with(array('memos'=> $memos, 'memo'=> $memo));
    }

    public function store(Request $request)
    {
      $memo = Memo::create(array(
        'text'=> $request->text
      ));
      return response()->json($memo);
    }
}
