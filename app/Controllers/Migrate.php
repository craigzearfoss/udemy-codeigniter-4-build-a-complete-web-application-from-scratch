<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Migrate extends BaseController
{
	public function index()
	{
		$migrate = \Config\Services::migrations();

		try {

		    $migrate->latest();

		    echo "migrated";

        } catch (\Exception $e) {

		    echo $e->getMessage();

        }

	}
}
