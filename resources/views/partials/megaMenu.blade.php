<li class="header__menu--items mega__menu--items">
    <a class="header__menu--link" href="{{ route('category.index') }}">
        Shop
        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                  transform="translate(-6 -8.59)"
                  fill="currentColor"
                  opacity="0.7"/>
        </svg>
    </a>

    <ul class="header__mega--menu d-flex">

        @foreach($categories as $category)
            <li class="header__mega--menu__li">

                <a class="header__mega--subtitle"
                   href="{{ route('category.show', $category->slug) }}">
                    {{ $category->name }}
                </a>

                @if($category->children->count())
                    <ul class="header__mega--sub__menu">
                        @foreach($category->children as $child)
                            <li class="header__mega--sub__menu_li">
                                <a class="header__mega--sub__menu--title"
                                   href="{{ route('category.show', $child->slug) }}">
                                    {{ $child->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach

    </ul>
</li>
