<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commande extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'exp_id',
        'format_id',
        'couleur_id',
        'impression_id',
        'pelliculage_id',
        'papier_id',
        'article_id',
        'qte',
        'prix_unitaire',
        'created_at',
        'updated_at',
        'deleted_at',
        
    ];

    // CMD (relations)
    /**
     * Client 1
     * article 1
     * format 1
     * couleur 1
     * impression 1
     * pelli 1
     * papier 1
     * exemp 1
     */

    //  Relations in laravel 
    // one to one : user => une seul adresse
    // one to many : post => commentaires
    // Many to many : users => roles

    /**
     * Get the ccommande that owns the article.
     */
    public function article()
    {
        return $this->belongsTo('App\Models\Article');
    }
    /**
     * Get the commande that owns the formats.
     */
    public function format()
    {
        return $this->belongsTo('App\Models\Format');
    }
    /**
     * Get the commande that owns the papiers.
     */
    public function papier()
    {
        return $this->belongsTo('App\Models\Papier');
    }
    /**
     * Get the commande that owns the impressions.
     */
    public function impression()
    {
        return $this->belongsTo('App\Models\Impression');
    }
    /**
     * Get the commande that owns the pelliculages.
     */
    public function pelliculage()
    {
        return $this->belongsTo('App\Models\Pelliculage');
    }
     /**
     * Get the commande that owns the nbr_couleurs.
     */
    public function nbr_couleur()
    {
        return $this->belongsTo('App\Models\Nbr_couleur');
    }
    /**
     * Get the commande that owns the nbr_exemplaire.
     */
    public function nbr_exemplaire()
    {
        return $this->belongsTo('App\Models\Nbr_exemplaire');
    }
    /**
     * Get the commande that owns the user.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
    