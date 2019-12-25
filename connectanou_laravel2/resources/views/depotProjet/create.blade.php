{{-- héritage de la view layouts/app.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Déposer un projet</h1>
        <hr>
    <form method="POST" action="{{ route('projet.store') }} " >
            @csrf
            <div class="form-group">
                <label for="titre_projet">Titre du projet</label>
                <input type="text" class="form-control {{ $errors->has('titre_projet') ? 'is-invalid' : ''}}" id="titre_projet" aria-describedby="titre_projet" name="titre_projet" >
                @if ($errors->has('titre_projet'))
                    <span class="invalid-feedback">{{$errors->first('titre_projet')}}</span>  
                @endif
            </div>

            <div class="form-group">
                <label for="desc_projet">Description du projet</label>
                <textarea name="desc_projet" class="form-control {{ $errors->has('desc_projet') ? 'is-invalid' : ''}} " id="desc_projet" cols="30" rows="10"></textarea>
                @if ($errors->has('desc_projet'))
                    <span class="invalid-feedback">{{$errors->first('desc_projet')}}</span>  
                @endif
            </div>

            <div class="form-group">
                <label for="date_debut">Date début du projet</label>
                <input type="date" class="form-control {{ $errors->has('date_debut') ? 'is-invalid' : ''}} " id="date_debut" aria-describedby="date_debut" name="date_debut">
                @if ($errors->has('date_debut'))
                    <span class="invalid-feedback">{{$errors->first('date_debut')}}</span>  
                @endif
          </div>

            <div class="form-group">
                <label for="date_butoir_projet">Date butoir du projet</label>
                <input type="date" class="form-control {{ $errors->has('date_butoir_projet') ? 'is-invalid' : ''}} " id="date_butoir_projet" aria-describedby="date_butoir_projet" name="date_butoir_projet" >
                @if ($errors->has('date_butoir_projet'))
                    <span class="invalid-feedback">{{$errors->first('date_butoir_projet')}}</span>  
                @endif
            </div>

            <div class="form-group">
                <label for="URL_PJ">URL</label>
                <input type="url" class="form-control {{ $errors->has('URL_PJ') ? 'is-invalid' : ''}} " id="URL_PJ" aria-describedby="URL_PJ" name="URL_PJ" >
                @if ($errors->has('URL_PJ'))
                    <span class="invalid-feedback">{{$errors->first('URL_PJ')}}</span>  
                @endif
            </div>
            
            <div class="form-group">
                <label for="Budget_min_projet">Budget minimum du projet</label>
                <input type="number" class="form-control {{ $errors->has('Budget_min_projet') ? 'is-invalid' : ''}} " id="Budget_min_projet" aria-describedby="Budget_min_projet" name="Budget_min_projet" >
                @if ($errors->has('Budget_min_projet'))
                    <span class="invalid-feedback">{{$errors->first('Budget_min_projet')}}</span>  
                @endif
            </div>
            <div class="form-group">
                <label for="budget_max_projet">Budget maximum du projet</label>
                <input type="number" class="form-control {{ $errors->has('budget_max_projet') ? 'is-invalid' : ''}} " id="budget_max_projet" aria-describedby="budget_max_projet" name="budget_max_projet" >
                @if ($errors->has('budget_max_projet'))
                    <span class="invalid-feedback">{{$errors->first('budget_max_projet')}}</span>  
                @endif
            </div>

            <div class="form-group">
                <label for="nb_realisateurs">Nombre de réalisateur</label>
                <input type="number" class="form-control {{ $errors->has('nb_realisateurs') ? 'is-invalid' : ''}} " id="nb_realisateurs" aria-describedby="nb_realisateurs" name="nb_realisateurs" >
                @if ($errors->has('nb_realisateurs'))
                    <span class="invalid-feedback">{{$errors->first('nb_realisateurs')}}</span>  
                @endif
            </div>

            <div class="form-group">
                <label for="stage">Stage</label>
                <input type="number" class="form-control {{ $errors->has('stage') ? 'is-invalid' : ''}} " id="stage" aria-describedby="stage" name="stage" >
                @if ($errors->has('stage'))
                    <span class="invalid-feedback">{{$errors->first('stage')}}</span>  
                @endif
            </div>

            {{-- <div class="form-group">
                <label for="titre_projet">Titre du projet</label>
                <input type="text" class="form-control" id="titre_projet" aria-describedby="titre_projet" name="titre_projet" >
            </div>

            <div class="form-group">
                <label for="titre_projet">Titre du projet</label>
                <input type="text" class="form-control" id="titre_projet" aria-describedby="titre_projet" name="titre_projet" >
            </div> --}}

                
            <button type="submit" class="btn btn-primary">Soumettre mon annonce</button>
        </form>
    </div>
@endsection