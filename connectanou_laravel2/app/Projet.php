<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = ['titre_projet','desc_projet','date_butoir_projet','date_debut','URL_PJ','Budget_min_projet','Budget_max_projet','nb_realisateurs','stage'];
}
