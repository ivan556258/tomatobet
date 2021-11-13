@extends('V1.main.app')
  @section('seo')
    @parent
    @widget('app.widgets.v1.card_post_seo', ['urn' => $urn??'0'])
  @endsection
  @section('content')
    @widget('app.widgets.v1.card_post', ['urn' => $urn??'0'])
  @endsection
@section('sidebar')
