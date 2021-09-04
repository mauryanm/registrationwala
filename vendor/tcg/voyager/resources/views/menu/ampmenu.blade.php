@if(!isset($innerLoop))
        <ul class="list-reset m0 p0 ampstart-label">
            @else
            <ul class="dropdown-menu">
            @endif

            @php

                if (Voyager::translatable($items)) {
                    $items = $items->load('translations');
                }

            @endphp

            @foreach ($items as $item)

                @php

                    $originalItem = $item;
                    if (Voyager::translatable($item)) {
                        $item = $item->translate($options->locale);
                    }

                    $listItemClass = null;
                    $linkAttributes =  null;
                    $styles = null;
                    $icon = null;
                    $caret = null;

                    // Background Color or Color
                    if (isset($options->color) && $options->color == true) {
                        $styles = 'color:'.$item->color;
                    }
                    if (isset($options->background) && $options->background == true) {
                        $styles = 'background-color:'.$item->color;
                    }

                    // With Children Attributes
                    if(!$originalItem->children->isEmpty()) {
                        $linkAttributes =  'class="ampstart-nav-link"';
                        $caret = '<span class="caret"></span>';

                        if(url($item->link()) == url()->current()){
                            $listItemClass = 'ampstart-nav-dropdown relative active';
                        }else{
                            $listItemClass = 'ampstart-nav-dropdown relative';
                        }
                    }else{
                        $linkAttributes =  'class="ampstart-nav-link"';
                    }

                    // Set Icon
                    if(isset($options->icon) && $options->icon == true){
                        $icon = '<i class="' . $item->icon_class . '"></i>';
                    }

                @endphp

                <li class="ampstart-nav-item {{ $listItemClass }}">
                    @if($originalItem->children->isEmpty())
                    <a href="{{ url(preg_replace('#/+#','/','amp/'.$item->link())) }}" target="{{ $item->target }}" style="{{ $styles }}" {!! $linkAttributes ?? '' !!}>
                        {!! $icon !!}
                        <span>{{ $item->title }}</span>
                        {!! $caret !!}
                    </a>
                    @endif

                    
                    @if(!$originalItem->children->isEmpty())
                    @include('voyager::menu.ampsidemenu', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])
                    @endif
                </li>
            @endforeach
        </ul>

