<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //protected $table = 'posts';  <-- en caso de haber llamado la tabla de manera diferente
    protected $fillable = ['title', 'description'];
}
