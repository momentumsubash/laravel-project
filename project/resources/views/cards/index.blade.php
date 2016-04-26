@extends('layout')
@section('content')

	<h1>all cards</h1>
	@foreach($cards as $card)
	<div>
		{{$card->title}}
	</div>

	@endforeach
@stop