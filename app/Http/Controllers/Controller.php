<?php
namespace App\Http\Controllers;

Class Controller
{
    public $instances = null;
    public $__module = null;
    public $__controller = null;

    public function __construct()
    {
        /*
        global $_fw;

        $this->instances = $_fw;
        foreach($this->instances->getAll() as $instance=>$object)
        {
            $this->$instance = $object;
        }
        */
    }
}