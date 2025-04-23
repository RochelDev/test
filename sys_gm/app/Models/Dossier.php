<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Dossier extends Model
{
    
    use SoftDeletes;

    protected $fillable = [
        'code_dossier',
        'type_mobilite_id',
        'agent_id',
        'statut',
        'annee',
        'historique_statut'
    ];

    protected $casts = [
        'historique_statut' => 'array'
    ];

    // Relation avec le ministère
    public function ministere()
    {
        return $this->belongsTo(Ministere::class);
    }

    // Relation avec le type de mobilité
    public function typeMobilite()
    {
        return $this->belongsTo(TypeMobilite::class);
    }

    // Relation avec l'agent
    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    // Génération automatique du code dossier
    public static function genererCodeDossier($ministereCode, $typeMobiliteCode, $annee)
    {
        $lastNumber = self::where('annee', $annee)
                        ->where('code_dossier', 'like', $ministereCode.$typeMobiliteCode.$annee.'%')
                        ->count() + 1;

        return strtoupper($ministereCode)
               . strtoupper($typeMobiliteCode)
               . $annee
               . str_pad($lastNumber, 5, '0', STR_PAD_LEFT);
    }
}
