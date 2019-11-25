<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $fillable = [
        'index', 'project_name', 'category_name','cover_image','project_image'
    ];

    public $timestamps = true;

    protected $hidden = [
         'remember_token',
    ];
}
