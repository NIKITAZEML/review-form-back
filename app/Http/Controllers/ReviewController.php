<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ReviewModel;

class ReviewController extends Controller
{
    public function review(){
        return response()->json(ReviewModel::get(), 200);
    }

    public function reviewById($id){
        return response()->json(ReviewModel::find($id), 200);
    }

    public function reviewSave(Request $req){
        $review = ReviewModel::create($req->all());
        return response()->json($review, 201);
    }
}
