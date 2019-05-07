@extends('template')

@section('titreOnglet')
    Liste des formations
@endsection
@section('titre')
    <h1>Les formations</h1>

    <table class="table table-bordered table-striped">
        <thead>
        <th>Id</th>
        <th>Description</th>
        <th>Intitulé</th>
        </thead>
        @foreach($lesFormations as $formation)
            <tr>
                <td>{{$formation->getIdForm()}}</td>
                <td>{{$formation->getDescriptionForm()}}</td>
                <td>{{$formation->getIntituleForm()}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('piedDePage')
    <p>Formation est un petit site web construit comme exemple de développement en php</p>
@endsection