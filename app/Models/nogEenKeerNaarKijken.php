<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nogEenKeerNaarKijken extends Model
{
    use HasFactory;
    protected $table = 'nog_een_keer_naar_kijken';

    protected $fillable =
        [
            'opdrachtKeuze',
            'email',
            'opdracht',
            'opdracht_omschrijving'
        ];

}
