<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name',
        'authors',
        'isbn',
        'purchase_price',
        'selling_price',
        'copyright',
        'year',
        'country',
        'category',
        'publisher',
        'language',

    ];
}
