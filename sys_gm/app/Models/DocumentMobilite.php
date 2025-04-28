<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentMobilite extends Model
{
    use HasFactory;

    protected $table = 'documents_mobilite'; 
    protected $fillable = [
        'mobilite_id',
        'type_document',
        'chemin_fichier',
    ];

    public function mobilite()
    {
        return $this->belongsTo(Mobilite::class);
    }
}
