@extends('V1.guest.main.app')
  @section('seo')
    @parent
    @widget('modules.post.widgets.v1.card_post_articale_seo', ['id' => $id])
  @endsection
  @section('content')
    @widget('modules.post.widgets.v1.card_post_articale', ['id' => $id])
  @endsection
@section('sidebar')
