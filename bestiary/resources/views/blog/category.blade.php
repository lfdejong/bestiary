@extends('layouts.app')

@section('content')
    <ul class="col-md-8">
        @foreach($categoryItems as $categoryItem)
            @if($categoryItem->toggle == 1)
            <li>
                <img src="<img src="{{asset('storage/public/'.$categoryItem->image)}}">" alt="thumbnails" class="img-thumbnail">
                <a href="{{route('creatures.show', ['creature' => $categoryItem->id])}}">{{$categoryItem-> name}}</a>
            </li>
            @endif
        @endforeach
@endsection
