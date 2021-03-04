@extends('sitelayout.layout')

@section('main-content')

	{{-- Laço mostrando as seções que o usuário ativiar --}}

	@include('curriculo.about', ['user'=>null, 'sec'=>'about'])
	<hr class="m-0" />
	@include('curriculo.experience', ['user'=>null, 'sec'=>'experience'])
	<hr class="m-0" />
	@include('curriculo.education', ['user'=>null, 'sec'=>'education'])
	<hr class="m-0" />
	@include('curriculo.skills', ['user'=>null, 'sec'=>'skills'])
	<hr class="m-0" />
	@include('curriculo.interests', ['user'=>null, 'sec'=>'interests'])
	<hr class="m-0" />
	@include('curriculo.awards', ['user'=>null, 'sec'=>'awards'])


@endsection