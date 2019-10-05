<?php
declare(strict_types=1);

namespace MyApp\Modules\CustomHelloWorld\Controllers;

use Phalcon\Mvc\Controller;

final class IndexController extends Controller
{
    public function indexAction() : string
    {
        return 'Custom Hello World';
    }
}
