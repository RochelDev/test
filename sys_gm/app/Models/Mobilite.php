<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobilite extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_agent',
        'poste_actuel',
        'poste_souhaite',
        'motif',
        'documents',
    ];
}
