@extends('template')

@section('titreOnglet')
    Liste des conférences
@endsection
@section('titre')
    <h1>Les conférences</h1>

    <table class="table table-bordered table-striped">
        <thead>
            <th>Id</th>
            <th>Description</th>
            <th>Intitulé</th>
        </thead>
        @foreach($lesConferences as $conference)
            <tr>
                <td>{{$conference->getIdConf()}}</td>
                <td>{{$conference->getDescriptionConf()}}</td>
                <td>{{$conference->getIntituleConf()}}</td>
            </tr>
        @endforeach
    </table>
@endsection
@section('piedDePage')
    <p>Conférence est un petit site web construit comme exemple de développement en php</p>
@endsection