@extends('layout.app')

@section('content')

<div id="main_comics">
  <div class="container">
    <h2 class="my-4 text-white ">Curret serie</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
      @foreach ($comics as $indice => $comic)
      <div class="col h-100 ">

        <img class="img-fluid card-img-top" src="{{ $comic['thumb'] }}" alt="">
        <div class="pt-3">
          <h4 class=" text-white ">
            {{ $comic['title'] }}
          </h4>
        </div>

      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection