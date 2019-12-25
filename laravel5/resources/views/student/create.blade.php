@extends("master")
@section("content")
    <div class="row">
        <div class="col-md-12">
            <br>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}}</p>
                </div>
            @endif
            <h3 class="center">Add data</h3>
            <form action="{{url('student')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="prenom" placeholder="Entrez votre prenom..." class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="nom" placeholder="Entrez votre nom..." class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Ajouter" class="btn btn-primary">
                </div>
            </form>
            <br>
        </div>
    </div>
@endsection