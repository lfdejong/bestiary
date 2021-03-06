@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <h3 class="p-2 m-2">Featured articles</h3>
                <ul class="list-unstyled row">
                @foreach($creatures as $creature)

                    <li class="p-5 m-5">
                        <h3><a href="{{route('creatures.show', ['creature' => $creature->id])}}">{{$creature-> name}}</a></h3>

                    </li>
                @endforeach
                </ul>
                <div class="card-body">
                        @guest
                            @if (Route::has('login'))

                            @endif

                            @if (Route::has('register'))

                            @endif
                        @else
                            {{Auth::user()->name}}
                            <div class="card-body">
                                <a href="{{route('creatures.create')}}">Create new article</a>
                            </div>
                        @endguest
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
