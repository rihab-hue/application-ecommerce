<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nbr_couleur extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nbr_coul',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    
    /**
     * The articles that belong to the nbr_couleur.
     */
    public function articles()
    {
        return $this->belongsToMany('App\Models\Article', 'article_nbr-couleur', 'couleur_id', 'article_id')->withPivot('nomber', 'prix');
    }
     /**
     * Get all commandes for this nbr_couleur.
     */
    public function commandes()
    {
        return $this->hasMany('App\Models\Commande');
    }
}
