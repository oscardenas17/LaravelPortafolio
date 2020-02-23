<nav>
    
    <ul>
        <li class="{{ setActive('home') }}"> <a href="/">Home</a></li>
        <li class="{{ setActive('about')}}"> <a href="/about">About </a></li>
        <li class="{{ setActive('portfolio')}}"> <a href="/portfolio">Portfolio </a></li>
        <li class="{{ request()->routeIs('contact') ? 'active' : ''}}"> <a href="/contact">Contacto </a></li>
    </ul>

</nav>