@extends('layouts/layout')

@section('content')

<div class="container mt-4" id="app">
    <div class="mb-4 d-flex row d-flex justify-content-around">
        <div>
            <label for="" class="mr-3">カテゴリー</label>
            @include('layouts/category_menu')
        </div>
        
        <form class="form-inline" method="post" action="{{ route('search') }}">
            @csrf
            <div class="form mx-sm-3 mb-2">
                <input type="text" class="form-control" placeholder="商品検索" name="keyword" value="">
            </div>
            <button type="submit" class="btn btn-primary mb-2">検索</button>
        </form>
    </div>
    
    <div class="item row text-center">  
        @foreach ($itemDetail as $item)
            <ul class="col-12 col-md-6 col-lg-4">
                <li class="name"><a href="{{ route('detail', ['id' => $item->item_id]) }}">{{$item->item_name}}</a></li>
                <li class="price">&yen;{{ number_format($item->price, 0) }}</li>
                <li class="image">
                    <a href="{{ route('detail', ['id' => $item->item_id]) }}">
                    <img src="{{ asset('/img/' . $item->image) }}" alt="{{$item->item_name}}" class="img-fluid col-6">
                    </a>
                </li>
                <li class="detail"><a href="{{ route('detail', ['id' => $item->item_id]) }}">詳細</a></li>
            </ul>
        @endforeach
    </div>
</div>

<div class="jumbotron_2">
    <ul class="jumbotron_container horizontal_scroll" id="yt_link">
      <li class="video_image">
        <a href="https://www.youtube.com/watch?v=k9kXWDx4z5c">
            <img src="{{ asset('/img/ps4.jpg') }}" class="jumbotron_video" alt="">
            <img src="{{ asset('/img/start_button.png') }}" alt="" class="video_button">
        </a>
      </li>
      <li class="video_image">
        <a href="https://www.youtube.com/watch?v=Jj4sfry-wYw">
            <img src="{{ asset('/img/switch.jpg') }}" class="jumbotron_video" alt="">
            <img src="{{ asset('/img/start_button.png') }}" alt="" class="video_button">
        </a>
      </li>
      <li class="video_image">
        <a href="https://www.youtube.com/watch?v=hIP88qThQqU">
            <img src="{{ asset('/img/xbox.jpg') }}" class="jumbotron_video" alt="">
            <img src="{{ asset('/img/start_button.png') }}" alt="" class="video_button">
        </a>
      </li>
      <li class="video_image">
        <a href="https://www.youtube.com/watch?v=Pxht1IJAJr0">
            <img src="{{ asset('/img/oculusquest.jpg') }}" class="jumbotron_video" alt="">
            <img src="{{ asset('/img/start_button.png') }}" alt="" class="video_button">
        </a>
      </li>
      <li class="video_image">
        <a href="https://www.youtube.com/watch?v=yFnciHpEOMI">
            <img src="{{ asset('/img/psvr.jpg') }}" class="jumbotron_video" alt="">
            <img src="{{ asset('/img/start_button.png') }}" alt="" class="video_button">
        </a>
      </li>
    </ul>
</div>

@endsection