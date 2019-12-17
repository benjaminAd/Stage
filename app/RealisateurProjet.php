<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RealisateurProjet extends Model
{
    protected $fillable = ['Nom', 'Prenom', 'Email', 'Login', 'Mdp', 'DateNaissance', 'Telephone', 'DateNaissance', 'CVURL', 'LinkedinURL', 'NbProjets', 'NbPoints', 'IdNiveauEtudes', 'IdDiplomes', 'IdFormations', 'IdStatut', 'IdDomaine'];
}
