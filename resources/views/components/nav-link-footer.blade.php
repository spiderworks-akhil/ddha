@props(['items'])

@if (count($items)>0)
@foreach ($items as $item)
@foreach ($item['menu_items'] as $menu)
@if(count($menu->children)>0)
<h3>{{$menu->title}} </h3>
<ul>
    @foreach ($menu->children as $c_menu)
    <li> <a href="{{$c_menu->slug}}">{{$c_menu->title}}</a></li>
    @endforeach
</ul>
@endif
@endforeach
@endforeach
@endif