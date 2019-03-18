<?php

namespace App\Http\Controllers;

use App;
use App\User;
use App\Http\Controllers\Controller;

class DiController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index(FooInterface $bar)
    {
        
        App::singleton('App\Http\Controllers\Bar');
        App::bind('App\Http\Controllers\FooInterface', 'App\Http\Controllers\Bar');
        $foo = App::make('App\Http\Controllers\Foo');
        $foo = App::make('App\Http\Controllers\Foo');
        // $foo2 = new Foo;
        var_dump($foo);
        
        return 'sdf';
    }
}

class Foo
{
    public $var = 'Foo';

    function __construct(FooInterface $bar) 
    {
        // Constructor
        echo '{Foo new}';
    }
}

interface FooInterface
{
    public function calculate();
}

class Bar implements FooInterface
{
    public $var = 'Bar';

    function __construct() 
    {
        // Constructor
        echo '{Bar new}';
    }

    public function calculate()
    {
        return 100;
    }
}


