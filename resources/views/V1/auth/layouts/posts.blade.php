@extends('V1.auth.main.app')
  @section('content')
    @widget('app.widgets.v1.auth.card_post', ['urn' => $urn ?? '0'])
  @endsection
@section('sidebar')
