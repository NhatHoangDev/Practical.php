<?php

namespace App\Http\Controllers;
use App\Practical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
class PracticalController extends Controller
{
    public function index()
    {
        $practical = Practical::paginate(20);
        return view("practical.practical", ["practical" => $practical]);
    }
    public function search(Request $request)
    {

        $practical = Practical::where("title", $request->practical)->get();
        return view("practical.result", [
            "practical"=>$practical,
        ]);


    }




}
