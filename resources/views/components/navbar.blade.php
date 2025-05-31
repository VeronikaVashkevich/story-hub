<nav>
    <ul class="flex justify-between nav-list">
        <li>{{ __('titles.stories') }}</li>
        @auth()
            <li>
                <a href="#">{{ __('titles.profile') }}</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="hover:cursor-pointer">{{ __('forms.buttons.logout') }}</button>
                </form>
            </li>
        @else
            <li>
                <a href="{{ route('login') }}">{{ __('titles.login') }}</a>
            </li>
            <li>
                <a href="{{ route('register') }}">{{ __('titles.register') }}</a>
            </li>
        @endauth
    </ul>
</nav>
