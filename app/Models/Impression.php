<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Impression extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nom',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The articles that belong to the impression.
     */
    public function articles()
    {
        return $this->belongsToMany('App\Models\Article', 'article_impression', 'impression_id', 'article_id')->withPivot('nomber', 'prix');
    }
     /**
     * Get all commandes for this impression.
     */
    public function commandes()
    {
        return $this->hasMany('App\Models\Commande');
    }
}
