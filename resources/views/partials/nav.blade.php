<nav>
    
    <ul>
        <li class="{{ setActive('home') }}"> <a href="/">  @lang('home')  </a></li>
        <li class="{{ setActive('about')}}"> <a href="/about"> {{ __('about') }} </a></li>
        <li class="{{ setActive('portfolio')}}"> <a href="/portfolio">  {{ __('portfolio') }} </a></li>
        <li class="{{ request()->routeIs('contact') ? 'active' : ''}}"> <a href="/contact"> {{ __('contact') }} </a></li>
    </ul>

</nav>