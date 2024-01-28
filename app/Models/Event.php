<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// THIS IS FRANCES RIEL A. JULIO CODE
use MongoDB\Laravel\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

// THIS IS FRANCES RIEL A. JULIO CODE
	protected $connection = 'mongodb';
    protected $collection = 'Events';
    protected $guarded=[];
    protected $fillable = [
        'name',
        'date',
        'location',
    ];
}

// THIS IS FRANCES RIEL A. JULIO CODE
