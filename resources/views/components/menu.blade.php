@if($menu_name == 'Main Menu')

<x-nav-link :items="$main_menu_items" />

@elseif($menu_name == 'Footer Menu')

<x-nav-link-footer :items="$footer_menu_items" />

@elseif($menu_name == 'Bottom Menu')

@if (!empty($bottom_menu_items) && count($bottom_menu_items)>0)
<ul>
    @foreach ($bottom_menu_items as $item)
    <li><a href="{{$item->slug}}">{{$item->title}} </a></li>
    @endforeach
</ul>
@endif
@endif