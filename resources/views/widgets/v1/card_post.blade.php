<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach($posts as $post)
<div class="col my-2">
  <div class="card">
    <img src="{{$post->smallPicture}}" class="card-img-top" alt="{{$post->h1Text}}">
      <div class="card-body">
        <h5 class="card-title">{{$post->h1Text}}</h5>
        <p class="card-text"> {!! Str::limit($post->DescText, 150, ' ...') !!}</p>
        <a href="{{route('post', ['id' => $post->id])}}" class="btn btn-primary">Подробнее</a>
      </div>
  </div>
</div>
@endforeach
</div>
<div class="col-12 my-2">
    <div class="d-flex justify-content-center">
      {!! $posts->links() !!}
    </div>
</div>