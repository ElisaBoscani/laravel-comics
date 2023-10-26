@extends('layout.app')

@section('content')

<div id="main_comics" class=" pt-5  position-relative ">
  <div class="container">
    <div>
      <span class="my-4 text-white ">Curret serie</span>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
      @foreach ($comics as $comic)
      <div class="col p_b h-100">
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
  <div class="d-flex justify-content-center p-4 ">
    <button class="btn_load">Loade More</button>
  </div>

</div>
<div id="marketing" class="bg_botton">
  <div class="p-4 container d-flex justify-content-between align-items-center">
    @foreach( $linkPage as $link )
    <div>
      <img src="{{Vite::asset($link['img'])}}" alt="" class="pe-2" />
      <span class="text-white text-uppercase"> {{ $link['name'] }} </span>
    </div>
    @endforeach
  </div>
</div>

@endsection