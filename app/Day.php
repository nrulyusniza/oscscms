<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public $table = "days";

    protected $fillable = [
        "name"
    ];
}
