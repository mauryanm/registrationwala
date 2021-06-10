@if(!isset($innerLoop))
<nav class="navbar navbar-expand-lg pl-0 pt-1 pb-1 pr-0 sticky-top" id="navbar_top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa fa-bars text-white" aria-hidden="true"></i> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-fill w-100">
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
                        $linkAttributes =  'class="nav-link dropdown-toggle text-white" data-toggle="dropdown"';
                        $caret = '<span class="caret"></span>';

                        if(url($item->link()) == url()->current()){
                            $listItemClass = 'dropdown active';
                        }else{
                            $listItemClass = 'dropdown';
                        }
                    }else{
                        $linkAttributes =  'class="nav-link text-white"';
                    }

                    // Set Icon
                    if(isset($options->icon) && $options->icon == true){
                        $icon = '<i class="' . $item->icon_class . '"></i>';
                    }

                @endphp

                <li class="nav-item {{ $listItemClass }}">
                    <a href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}" {!! $linkAttributes ?? '' !!}>
                        {!! $icon !!}
                        <span>{{ $item->title }}</span>
                        {!! $caret !!}
                    </a>
                    @if(!$originalItem->children->isEmpty())
                    @include('voyager::menu.rwmegamenu', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])
                    @endif
                </li>
            @endforeach
        </ul>
</div>
</nav>
