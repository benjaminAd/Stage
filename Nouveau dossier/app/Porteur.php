<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Porteur extends Model
{
    protected $fillable = ['IdOrga', 'IdCP', 'Nom', 'Prenom', 'Email', 'Login', 'Mdp', 'Telephone', 'Poste'];
}
