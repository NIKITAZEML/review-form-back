<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReviewsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\ReviewModel;


class ReviewController extends Controller
{
    public function review(){
        return response()->json(ReviewModel::get(), 200);
    }

    public function reviewById($id){
        return response()->json(ReviewModel::find($id), 200);
    }

    public function reviewSave(CreateReviewsRequest $req){
        $review = ReviewModel::create($req->all());
        Storage::disk('local')->put('review.txt', $req);
        return response()->json($review, 201);
    }
}

