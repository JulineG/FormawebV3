<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertionConfRequest;
use App\Metier\Conference;
use Illuminate\Http\Request;
use App\Modeles\ConferenceDAO;
class ConferenceController extends Controller
{
    //
    public function getLesConferences()
       {
           $conference = new ConferenceDAO();
           $lesConferences = $conference->getLesConferences();
           return view('listeConferences', compact('lesConferences'));
       }

       public function ajoutConference(){
            return view('formAjoutConference');
       }

       public function postAjoutConference(InsertionConfRequest $request){
            $maConference= new Conference();
            $maConference->setIntituleConf($request->input('intituleConf'));
            $maConference->setDescriptionConf($request->input('descriptionConf'));
            $maConferenceDAO = new ConferenceDAO();
            $maConferenceDAO->creationConference($maConference);
            return view('insertionOK');
       }
}






