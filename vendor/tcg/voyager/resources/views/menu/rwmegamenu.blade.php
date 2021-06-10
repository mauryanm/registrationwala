<div class="dropdown-menu radius0" >
    <div class="row">
        @foreach ($items as $item)
        <div class="col-md-3">
            <h4> {{ $item->title }}</h4>
            <ul>
                @foreach($item->children as $it)
                <li><a href="{{ url($it->link()) }}" target="{{$it->target}}">{{ $it->title }}</a></li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>
</div>