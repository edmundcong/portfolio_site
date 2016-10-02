@extends('layout')

@section('content')
<div class="row">
    {{-- <div class="col-md-6 col-md-offset-3"> --}}
        <ol class="breadcrumb" id="center_breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">
                    Home
                </a>
            </li>
            <li class="breadcrumb-item active">
                Cards
            </li>
        </ol>
        <h1>
            All Cards
        </h1>
        @foreach ($cards as $card)
        <a href="{{ $card->path() }}">
            {{ $card->title  }}
        </a>
        <br>
            @endforeach
        </br>
    {{-- </div> --}}
</div>
@stop
