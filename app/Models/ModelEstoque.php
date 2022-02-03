<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelEstoque extends Model
{
    protected $table = 'estoque';
    protected $fillable = ['name', 'desc', 'category', 'price', 'qtd'];
}
