<?php

namespace App\Modeles;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Metier\Conference;

class ConferenceDAO extends DAO
{
    //Return all conferences stored in database

    public function getLesConferences()
    {
        $conferences = DB::table('Conference')->get();
        $lesConferences = array();
        foreach ($conferences as $laConference) {
            $idConf = $laConference->idConf;
            $lesConferences[$idConf] = $this->creerObjetMetier($laConference);
        }
        return $lesConferences;
    }

    protected function creerObjetMetier(\stdClass $objet)
    {
        $laConference = new Conference();
        $laConference->setIdConf($objet->idConf);
        $laConference->setIntituleConf($objet->intituleConf);
        $laConference->setDescriptionConf($objet->descriptionConf);
        return $laConference;
    }

    public function creationConference(Conference $uneConference){
        DB::table('Conference')->insert(['intituleConf'=>$uneConference->getIntituleConf(),'descriptionConf'=>$uneConference->getDescriptionConf()]);
    }
}