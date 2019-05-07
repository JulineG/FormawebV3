<?php

namespace App\Modeles;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Metier\Formation;

class FormationDAO extends DAO
{
    //Return all conferences stored in database

    public function getLesFormations()
    {
        $formations = DB::table('Formation')->get();
        $lesFormations = array();
        foreach ($formations as $laFormation) {
            $idForm = $laFormation->idForm;
            $lesFormations[$idForm] = $this->creerObjetMetier($laFormation);
        }
        return $lesFormations;
    }

    protected function creerObjetMetier(\stdClass $objet)
    {
        $laFormation = new Formation();
        $laFormation->setIdForm($objet->idForm);
        $laFormation->setIntituleForm($objet->intituleForm);
        $laFormation->setDescriptionForm($objet->descriptionForm);
        return $laFormation;
    }
}