@extends('layout', ['pageTitle' => $main->title])

@section('content')

<style type="text/css">
	body {
		background: #FFF;
	}
</style>

<div class="container">
	<!-- <h5> {!! $main->title !!} </h5> -->
	@php
		$content = html_entity_decode($main->body);
		$content = str_replace('samp>','div>',$content);
		//$content = preg_replace('/ style=("|\')(.*?)("|\')/','',$content);
		$content = str_replace('src="/uploads/', 'src="https://svc.esis.edu.mn/uploads/', $content);
	@endphp
	{!! $content !!}
</div>
@stop