@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <br>
            <h3 class="center">Edit Record</h3>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <br>
            <form action="{{action('StudentController@update', $id)}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH"/>
                <div class="form-group">
                    <input type="text" name="nom" class="form-control" value="{{$student->nom}}"
                           placeholder="Entrez votre nom..."/>
                </div>
                <div class="form-group">
                    <input type="text" name="prenom" class="form-control" value="{{$student->prenom}}"
                           placeholder="Entrez votre prenom..."/>
                </div>
                <div class="form-group">
                    <input type="submit" value="Modifier" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection