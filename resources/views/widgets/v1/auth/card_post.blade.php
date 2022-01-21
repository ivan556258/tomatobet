<style>
  .px-5 {
    padding: 0 5%;
    width: 90%;
}
</style>
<table class="table">
  <thead>
    <tr>
      <td class="border">№</td>
      <td class="border"></td>
      <td class="border">Название</td>
      <td class="border">Краткое описание</td>
      <td class="border">Действия</td>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <td class="border">{{$post->id}}</td>
      <td class="border" width="100"><img src="http://localhost{{Storage::url($post->bigPicture)}}" class="img-thumbnail" alt="{{$post->h1Text}}"></td>
      <td class="td-primary border"><div class="px-5">{{$post->h1Text}}</div></td>
      <td class="td-success border"><div class="px-5">{!! strip_tags(Str::limit($post->DescText, 150, ' ...')) !!}</div></td>
      <td class="border">
        <p><a href="{{route('post', ['id' => $post->id])}}" class="btn btn-primary">@lang('words.Open_on_site')</a></p>
        <p><a href="{{route('auth.edit', ['id' => $post->id])}}" class="btn btn-primary">@lang('words.Edit')</a></p>
        <p><a href="{{route('auth.delete', ['id' => $post->id])}}" class="btn btn-primary">@lang('words.Delete')</a></p>
      </td>
    <tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <td>№</td>
      <td></td>
      <td>Название</td>
      <td>Краткое описание</td>
      <td>Действия</td>
    </tr>
  </tfoot>
</table>

<div class="col-12 my-2">
    <div class="d-flex justify-content-center">
      {!! $posts->links() !!}
    </div>
</div>