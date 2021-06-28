@foreach ($items as $item)
<div class="col-md-3">
    <h4> {{ $item->title }}</h4>
    <ul class="list-unstyled">
        @foreach($item->children as $it)
        <li><a href="{{ url($it->link()) }}" target="{{$it->target}}">{{ $it->title }}</a></li>
        @endforeach
    </ul>
</div>
@endforeach