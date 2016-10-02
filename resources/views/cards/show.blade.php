@extends('layout')

@section('content')
<div class="row">
    {{--
    <div class="col-md-6 col-md-offset-3">
        --}}
        <ol class="breadcrumb" id="center_breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">
                    Home
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="/cards">
                    Cards
                </a>
            </li>
            <li class="breadcrumb-item active">
                Edit Notes
            </li>
        </ol>
        <h1>
            {{ $card->title }}
        </h1>
        <ul class="list-group">
            @foreach ($card->notes as $note)
            <a href="{{'/notes/'.$note->id.'/edit'}}">
                <li class="list-group-item">
                    {{ $note->body }}
                    <a class="pull-right" href="#">
                        {{$note->user['name']}}
                    </a>
                </li>
            </a>
            @endforeach
        </ul>
        @if($errors->any())
        <h4>
            {{$errors->first()}}
        </h4>
        @endif
        {{-- horizontal rule --}}
        <hr>
            <h3>
                Add a New Note
            </h3>
            <form action="/cards/{{ $card->id}}/notes" method="POST">
                {{-- needed to bypass laravel's security feature which protects you from cross site request forgery --}}
                {{-- always use it with a field in laravel --}}
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    {{-- form-group adds some margin-bottom --}}
                    <div class="form-group">
                        {{-- textarea name must correspond to name of column in database --}}
                        <textarea class="form-control" name="body">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">
                            Add Note
                        </button>
                    </div>
                </input>
            </form>
        </hr>
        {{-- all views can access $errors --}}
        {{-- {{ var_dump($errors) }} --}}
{{--         @if (count($errors))
            @foreach ($errors->all() as $error)
        <script>
            var error = "{{$error}}";
                window.alert(error);
        </script>
        @endforeach
        @endif --}}
    </div>
    @stop
</div>