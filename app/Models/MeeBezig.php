<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeeBezig extends Model
{
    use HasFactory;

    protected $table = 'mee_bezig';

    protected $fillable =
        [
            'opdrachtKeuze',
            'email',
            'opdracht',
            'opdracht_omschrijving'
        ];
}
