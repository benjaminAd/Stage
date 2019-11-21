<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisations extends Model
{
    protected $fillable = ['SIRET', 'IdCP', 'IdTypeOrga', 'IdPorteur', 'RaisonSociale', 'SigleOrg', 'LogoURL', 'Activite', 'Telephone', 'NbSalaries', 'SiteURL', 'Adresse'];
}
