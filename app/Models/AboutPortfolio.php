<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPortfolio extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'name',
        'designation',
    ];
}
