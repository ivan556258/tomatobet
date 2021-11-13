<div class="row">
    <article>
        <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
              <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                  <meta itemprop="url" content="{{$post->smallPicture}}">
                  <meta itemprop="width" content="152">
                  <meta itemprop="height" content="152">
              </div>
              <meta itemprop="name" content="Tomatobet">
        </div>

        <div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
            <meta itemprop="url" content="{{$post->bigPicture}}">
            <meta itemprop="width" content="492">
            <meta itemprop="height" content="369">
        </div>
      <div class="col-12">
        <picture>
          <source media="(max-width: 799px)" srcset="https://sun9-23.userapi.com/impg/jXmhcrdF9HDIUfvlJxku74-G52X2AkxOXbQbsg/nQXBBhjF1Hc.jpg?size=200x250&quality=95&sign=42b8e76921e5cbcee16738a79c7253c0&type=album">
          <source media="(min-width: 800px)" srcset="{{$post->bigPicture}}">
          <img src="{{$post->bigPicture}}" alt="{{$post->h1Text}}">
        </picture>
        
        <hr>
      </div>
      <div class="col-12">
        <h1 class="display-4">{{$post->h1Text}}</h1>
      </div>
      <div class="col-12">
        <p class="text-left text-break">{{$post->DescText}}</p>

      </div>
    <div class="col-12">
{{--      <span class="badge bg-primary">{{$post->1hashTag}}</span>
      <span class="badge bg-success">{{$post->2hashTag}}</span>
      <span class="badge bg-danger">{{$post->3hashTag}}</span>
      <span class="badge bg-warning text-dark">{{$post->4hashTag}}</span>
      <span class="badge bg-dark">{{$post->5hashTag}}</span> --}}
    </div>
  </article>
  </div>