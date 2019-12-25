@extends('master')
@section('content')
    <div class="row">
        <div class="col-mid-12">
            <br>
            <h3 class="center">Student Data</h3>
            <div align="right">
                <a href="{{route('student.create')}}" class="btn btn-primary">Ajouter un élève</a>
            </div>
            <br>
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Editer</th>
                    <th>Supprimer</th>
                </tr>
                @foreach($students as $row)
                    <tr>
                        <td>{{$row['nom']}}</td>
                        <td>{{$row['prenom']}}</td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
