<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klaar extends Model
{
    use HasFactory;

    protected $table = 'klaar';
    protected $fillable =
        [
            'opdrachtKeuze',
            'email',
            'opdracht',
            'opdracht_omschrijving'
        ];
}
