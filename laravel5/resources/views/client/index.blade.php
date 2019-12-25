@extends('layout')
@section('content')
    <h1>Client</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae
        eaque eligendi eos in laboriosam laborum magnam, maiores, neque nulla pariatur,
        sit ullam. Autem eveniet labore nam praesentium, totam ut.</p>
    <ul>
          {{-- <?php foreach ($clients as $client):?>
               <li><?= $client?></li>
           <?php endforeach;?>--}}
        @foreach($clients as $client)
            <li>{{$client}}</li>
        @endforeach
    </ul>
@endsection
