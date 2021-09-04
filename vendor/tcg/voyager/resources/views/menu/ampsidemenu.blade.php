<amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown" >
    <section>
       <header>{{ $item->title }}</header>
            <ul class="ampstart-dropdown-items list-reset m0 p0"> 
        @foreach ($items as $item)
                <h6 class="mb2 navhead"> {{ $item->title }}</h6>            
                @foreach($item->children as $it)
                <li class="ampstart-dropdown-item"> <a href="{{ url(preg_replace('#/+#','/','amp/'.$it->link())) }}" class="text-decoration-none">{{ $it->title }}</a> </li>
                @endforeach
            
        @endforeach
        </ul>
    </section>
</amp-accordion>