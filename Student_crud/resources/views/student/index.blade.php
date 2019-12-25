@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <br>
            <h3 class="center">Student Data</h3>
            <br>
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif
            <div align="right">
                <a href="{{route('student.create')}}" class="btn btn-primary">Add student</a>
                <br>
                <br>
            </div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($students as $row)
                    <tr>
                        <td>{{$row['nom']}}</td>
                        <td>{{$row['prenom']}}</td>
                        <td><a href="{{action('StudentController@edit',$row['id'])}}"
                               class="btn btn-warning">Modifier</a>
                        </td>
                        <td>
                            <form method="post" class="delete_form"
                                  action="{{action('StudentController@destroy', $row['id'])}}">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE"/>
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.delete_form').on('submit', function () {
                if (confirm("Voulez-vous vraiment effacer cette personne ?")) {
                    return true;
                } else {
                    return false;
                }
            });
        });
    </script>
@endsection
