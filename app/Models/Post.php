<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'Posts';
    public $timestamps = false;
    protected $filelable = ['Titulo','Contenido','Categoria','Imagen'];
}
