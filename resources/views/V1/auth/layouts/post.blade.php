@extends('V1.auth.main.app')
  @section('content')
    @widget('app.widgets.v1.auth.card_post_edit', ['id' => $id])
  @endsection
@section('sidebar')