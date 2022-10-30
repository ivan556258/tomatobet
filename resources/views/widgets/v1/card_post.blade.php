<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach($posts as $post)
<div class="col-md-6 my-2">
  <div class="card">
    <img src="{{$post->bigPicture}}" class="card-img-top" alt="{{$post->h1Text}}">
      <div class="card-body">
        <h5 class="card-title">
            <a class="link-name" href="{{route('post', ['id' => $post->id])}}"> {{$post->h1Text}} </a>
        </h5>
        <p class="card-text"> {!! Str::limit($post->DescText, 150, ' ...') !!}</p>
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
