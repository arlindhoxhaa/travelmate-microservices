<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $table = "city";
    protected $fillable = ['code', 'name', 'country_id'];
}