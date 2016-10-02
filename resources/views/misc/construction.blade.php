@extends('layout')

			@section('header')
<title>
    Under Construction
</title>
@stop
<style>
    #construction {
		font-size: 25vw;
		display:block;
    	text-align:center;
    	margin-top: 25px;
	}
	#construction-text {
		display:block;
    	text-align:center
	}
	#home-button {
		font-size: 8vw;
		margin-top: 25px;
	}
</style>
@section('content')
<div class="row">
    <div class="col-sm-12 col-xs-12" id="const-div">
        <span aria-hidden="true" class="glyphicon glyphicon-alert" id="construction">
        </span>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-xs-12" id="construction-text">
        <h2>
            Sorry! This page is under construction :(
        </h2>
    </div>
    <div class="col-sm-12 col-xs-12" id="construction-text">
        <a href="/"><span aria-hidden="true" class="glyphicon glyphicon-home" id="home-button">
        </span></a>
    </div>
</div>
@stop
