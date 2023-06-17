<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'titre',
        'prix',
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
        'meta_titre',
        'meta_description',
        'statut',

    ];

    protected $imagePath = '';

    /**
     * The formats that belong to the article.
     */
    public function formats()
    {
        return $this->belongsToMany('App\Models\Format', 'article_format', 'article_id', 'format_id')->withPivot('nomber', 'prix');
    }
     /**
     * The papiers that belong to the article.
     */
    public function papiers()
    {
        return $this->belongsToMany('App\Models\Papier', 'article_papier', 'article_id', 'papier_id')->withPivot('nomber', 'prix');
    }
    /**
     * The impressions that belong to the article.
     */
    public function impressions()
    {
        return $this->belongsToMany('App\Models\Impression', 'article_impression', 'article_id', 'impression_id')->withPivot('nomber', 'prix');
    }

    /**
     * The pelliculages that belong to the article.
     */
    public function pelliculages()
    {
        return $this->belongsToMany('App\Models\Pelliculage', 'article_pelliculage', 'article_id', 'pelliculage_id')->withPivot('nomber', 'prix');
    }

      /**
     * The nbr_couleurs that belong to the article.
     */
    public function nbr_couleurs()
    {
        return $this->belongsToMany('App\Models\Nbr_couleur', 'article_nbr-couleur', 'article_id', 'couleur_id')->withPivot('nomber', 'prix');
    }

    
      /**
     * The nbr_exemplaire that belong to the article.
     */
    public function nbr_exemplaires()
    {
        return $this->belongsToMany('App\Models\Nbr_exemplaire', 'article_nbr-exemplaire', 'article_id', 'exp_id')->withPivot('nomber', 'prix');
    }

    /**
     * Get all commandes for this article.
     */
    public function commandes()
    {
        return $this->hasMany('App\Models\Commande');
    }

    public function getImagePath(){
    
        switch($this->titre){
            case 'bloc note':{
                $this->imagePath = 'assets/img/img2/bloc-notes-a5-quadri-a-spirales-sur-mesure.jpg';
                break;
            }
            case 'carte visite':{
                $this->imagePath = 'assets/img/img2/carte 1.jpg';
                break;
            }
            case 'flyer':{
                $this->imagePath = 'assets/img/img2/5.png';
                break;
            }
            case 'papier entête':{
                $this->imagePath = 'assets/img/img2/en-tete1.jpg';
                break;
            }
            case 'boite/paquet':{
                $this->imagePath = 'assets/img/img2/boite2jpg.jpg';
                break;
            }
            case 'Etiquette autocollant':{
                $this->imagePath = 'assets/img/img2/ett1.jpg';
                break;
            }
            case 'calendrier':{
                $this->imagePath = 'assets/img/img2/calendrier 2jpg.jpg';
                break;
            }
            case 'carnet':{
                $this->imagePath = 'assets/img/img2/carnets-ncr.jpg';
                break;
            }
            case 'livre':{
                $this->imagePath = 'assets/img/img2/3.png';
                break;
            }
            case 'invitation de mariage':{
                $this->imagePath = 'assets/img/img2/4.png';
                break;
            }
            case 'ordonnance':{
                $this->imagePath = 'assets/img/img2/ord.jpg';
                break;
            }
            case 'port document':{
                $this->imagePath = 'assets/img/img2/porte-documents.jpg';
                break;
            }
            default:{
                $this->imagePath = 'assets/img/img2/2.png';
                break;
            }
        }
        return $this->imagePath;
    }
}


