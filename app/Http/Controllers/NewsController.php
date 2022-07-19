<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;


class NewsController extends Controller
{
    public function news(){
        return response()->json(NewsModel::get(), 200);
    }

}
