<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RealisateurProjet extends Model
{
    protected $fillable = ['Nom', 'Prenom', 'Email', 'Login', 'Mdp', 'DateNaissance', 'Telephone', 'DateNaissance', 'CVURL', 'LinkedinURL', 'IdOrga', 'NbProjets', 'NbPoints', 'IdNiveauEtudes', 'IdDiplomes', 'IdFormations', 'IdStatut', 'IdDomaine'];
}
