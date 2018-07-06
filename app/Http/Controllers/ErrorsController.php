<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CoversController;
use App\Http\Controllers\ManagersInfo;

class ErrorsController extends Controller
{
    
    private $page;

    /**
    * create a new instance of error
    * 
    * @return void
    */

    public function __construct()
    {
    	$this->page = new CoversController();
    }

    /**
    * redirection Error Page
    *
    * @param \Illuminate\Http\Request
    * @param \Illuminate\Http\Response
    */

    public function index()
    {
    	//configuration du site
        $parameters = ManagersInfo::index();
        $logo = $this->page->getlogo();

    	return view('error.index',compact('logo','parameters'));
    }
}
