@props(['items'])

@if (count($items)>0)
<ul class="navbar-nav  ">
    @foreach ($items as $item)
    @if (count($item->children)>0)
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">{{$item->title}}</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($item->children as $sub_item)
            <li><a class="dropdown-item" href="{{$sub_item->slug}}"> {{$sub_item->title}} </a></li>
            @endforeach
        </ul>
    </li>
    @else

    <li class="nav-item">
        <a class="nav-link" href="{{$item->slug}}">{{$item->title}}</a>
    </li>
    @endif

    @endforeach

</ul>
@endif