<nav>
    
    <ul>
    <li class="{{ setActive('home') }}"> <a href=" {{ route('home') }}">  @lang('home')  </a></li>
        <li class="{{ setActive('about')}}"> <a href="{{ route('about') }}"> {{ __('about') }} </a></li>
        <li class="{{ setActive('projects.*')}}"> <a href="{{ route('projects.index') }}">  {{ __('projects') }} </a></li>
        <li class="{{ request()->routeIs('contact') ? 'active' : ''}}"> <a href="{{ route('contact') }}"> {{ __('contact') }} </a></li>
    </ul>

</nav>