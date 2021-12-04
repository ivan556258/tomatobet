<div class="sticky-top">
    <ul class="list-group my-2">
        @foreach ($config as $item)
                <li class="list-group-item"><a href="/typeSport/{{$item->urn}}">{{$item->name}}</a></li>
        @endforeach
    </ul>
</div>