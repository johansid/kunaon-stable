<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {

	/**
	 * KuNaon Point Of Sales
	 *
	 * @author KuNaon Team - kunaon.studio@gmail.com
	 *
	 */

	// Copyright (C) 2017 KuNaon Team - kunaon.studio@gmail.com
	//
	// This file is part of KuNaon Point Of Sales software library.
	//
	// KuNaon Point Of Sales is free software: you can redistribute it and/or modify it
	// under the terms of the GNU Lesser General Public License as
	// published by the Free Software Foundation, either version 3 of the
	// License, or (at your option) any later version.
	//
	// KuNaon Point Of Sales is distributed in the hope that it will be useful, but
	// WITHOUT ANY WARRANTY; without even the implied warranty of
	// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	// See the GNU Lesser General Public License for more details.
	//
	// See LICENSE.TXT file for more information.

	public function __Construct(){
		parent::__Construct();
		//$this->app->auth();
		$this->layout = 'frontoffice/table/';
	}

	public function index(){
		$data = $this->model_crud->GetAll('en_rooms',null,null,null,false);
		$this->app->render('List Of Table',$this->layout.'index',array('data'=>$data),false);
	}

	

	

}