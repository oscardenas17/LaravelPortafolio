<?php

function setActive($routeName){

    return request()->routeIs($routeName) ? 'active' : '';

}


/*composer dumpautoload -> cargar el autoload para composer.json */
?>