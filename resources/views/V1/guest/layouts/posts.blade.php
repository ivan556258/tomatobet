@extends('V1.guest.main.app')
  @section('seo')
    @parent
    @widget('modules.post.widgets.v1.card_post_seo', ['urn' => $urn ?? '0'])
  @endsection
  @section('content')
    @widget('modules.post.widgets.v1.card_post', ['urn' => $urn ?? '0'])
  @endsection
@section('sidebar')
