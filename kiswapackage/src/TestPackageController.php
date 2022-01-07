<?php

namespace kiswatech\kiswapackage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestPackageController extends Controller
{
    /**
     * This is used to add two variables
     */
    public function add($a, $b)
    {
        $result = $a + $b;

        echo $result;
    }
    /**
     * This is used to subtract two variables
     */
    public function subtract($a, $b)
    {
        $result = $a - $b;

        echo $result;
    }
}
