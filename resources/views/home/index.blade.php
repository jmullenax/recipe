@extends('template')

@section('content')
	<h1>Home index</h1>

	{!! Form::open(['url' => 'home/index']) !!}

		{{ Form::label('search_ingredients', 'Search Ingredients') }}
		{{ Form::text('search_ingredients', $search_string) }}

		{{ Form::submit('Submit Form', ['name' => 'submit_form']) }}

	{!! Form::close() !!}

@stop