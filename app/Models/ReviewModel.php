<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewModel extends Model
{
    use HasFactory;

    protected $table = "reviews";

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'phone',
        'review'
    ];
}
