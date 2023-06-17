<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nbr_exemplaire extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nbr_exp',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    
    /**
     * The articles that belong to the nbr_exemplaire.
     */
    public function articles()
    {
        return $this->belongsToMany('App\Models\Article', 'article_nbr-exemplaire', 'exp_id', 'article_id')->withPivot('nomber', 'prix');
    }
     /**
     * Get all commandes for this nbr_exemplaire.
     */
    public function commandes()
    {
        return $this->hasMany('App\Models\Commande');
    }
}
