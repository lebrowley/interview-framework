<?php

declare(strict_types = 1);

/**
 * Map request method/uri to a controller/action.
 */
return [
    ['POST', '/example/add', ['Example\Controller\AddController', 'add']],
    ['POST', '/example/create', ['Example\Controller\ExampleController', 'createExample']],
    ['GET', '/', ['Example\Controller\HomeController', 'index']],
];
