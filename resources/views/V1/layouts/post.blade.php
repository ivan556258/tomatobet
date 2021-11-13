@extends('V1.main.app')
  @section('seo')
    @parent
    @widget('app.widgets.v1.card_post_articale_seo', ['id' => $id])
  @endsection
  @section('content')
    @widget('app.widgets.v1.card_post_articale', ['id' => $id])
  @endsection
@section('sidebar')