<div style="display:none">{{$f = isset($nl) ? $nl : ''}}</div>

	@extends('shopping.home'.$f)

@section('content')
	@include($namepage)
@stop