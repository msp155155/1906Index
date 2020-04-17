<?php

namespace App\Http\Controllers\index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\ProductModel;

class IndexController extends Controller
{
    public function index()
    {
        $data = ProductModel::all();
        return view('index.index',['data'=>$data]);
    }
    public function info(Request $request)
    {
        $id =  $request->all();
        dd($id);
    }

}
