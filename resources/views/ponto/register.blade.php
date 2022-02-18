@extends('layouts.header')
@section('content')
<div class="container mt-4">      
  <form action="{{route('markup')}}" method="post">
  @csrf
  <div class="jumbotron text-center">
      <h1 class="display-1" id="time"></h1>
      <p class="display-6" id="day"></p>
      <button type="submit" class="btn btn-primary btn-lg" id="time">
      Logar
      </button>
  </div>
  </form>
</div>

<div class="container mt-4">
<ul class="list-group">
  <p class="display-6">Marcações do dia</p>
  <?php $i=1 ?>
  @foreach ($markups as $markup)
  <li class="list-group-item" id="dayMarkups">{{$i}} -- {{$markup}}</li>
  <?php $i++ ?>
  @endforeach
  
</ul>   
</div>
@endsection