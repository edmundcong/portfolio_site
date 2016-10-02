@extends('layout')

@section('content')
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
    <li class="breadcrumb-item">
        <a href="/cards/{{$note->card_id}}">
            Notes
        </a>
    </li>
    <li class="breadcrumb-item active">
        Edit Notes
    </li>
</ol>
<h1>
    Edit the note
</h1>
{{-- action will take you to the patch update route --}}
<form action="/notes/{{ $note->id }}" method="POST">
    {{-- needed as most browsers only recognise GET and POST (not PATCH, DELETE, etc) --}}
{{-- laravel fakes it by allowing the POST to then be recognised as a PATCH --}}
    {{ method_field('PATCH') }}
    <input name="_token" type="hidden" value="{{ csrf_token() }}">
        <div class="form-group">
            <textarea class="form-control" name="body">
                {{ $note->body }}
            </textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">
                Update Note
            </button>
        </div>
    </input>
</form>
@stop
