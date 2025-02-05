<?php

function menu_subdir()
{
    return '/dwes_tema_07_blanco/jaxon/jaxon-examples/web';
}

function menu_entries()
{
    return [
        '/' => 'Home',
        '/hello/' => 'Hello World Function',
        '/alias/' => 'Hello World Alias',
        '/class/' => 'Hello World Class',
        '/export/' => 'Export Javascript',
        '/pagination/' => 'Pagination',
        '/plugins/' => 'Plugin Usage',
        '/dialogs/' => 'Dialogs',
        '/flot/' => 'Flot Plugin',
        '/config/' => 'Config File',
        '/directories/' => 'Register Directories',
        '/namespaces/' => 'Register Namespaces',
        '/container/' => 'DI container',
        '/package/' => 'Package',
        '/autoload-default/' => 'Default Autoloader',
        '/autoload-disabled/' => 'Third Party Autoloader',
    ];
}
