<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/Post.php
class Post extends Model
{
    protected $fillable = ['titulo', 'contenido', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}