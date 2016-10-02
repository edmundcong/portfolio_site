@extends('layout')

@section('content')
    {{-- Blade approach --}}
            @if (empty($people))
                <p> There are no people </p>
            @else
                <p> Not empty </p>
            @endif

                @foreach ($people as $person)
            <li>
                {{ $person }}
            </li>
            @endforeach
@stop

@section('footer')
    <script type="text/javascript"> console.log('about page only');</script>
@stop