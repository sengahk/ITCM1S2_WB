<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    // Table name
    protected $table = 'posts';
    // primary key
    public $primaryKey = 'id';


    // Timestamps
    public $timestamps = true;

}
