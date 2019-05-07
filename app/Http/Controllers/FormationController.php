<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modeles\FormationDAO;
class FormationController extends Controller
{
    //
    public function getLesFormations()
    {
        $formation = new FormationDAO();
        $lesFormations = $formation->getLesFormations();
        return view('listeFormations', compact('lesFormations'));
    }
}






