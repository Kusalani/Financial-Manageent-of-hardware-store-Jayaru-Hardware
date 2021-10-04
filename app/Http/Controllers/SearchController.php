<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        if (isset($_GET['query'])){
            $search_text= $_GET['query'];
            $task1s =DB::table('task1s')->where('created_at','LIKE','%'.$search_text.'%')->paginate(2);
            return view('search',['created_at' =>$task1s]);


        }else{
            return view('search');

        }

    }
    public function index()
    {


    }

}
