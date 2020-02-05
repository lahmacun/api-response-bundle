<?php

namespace App\Lahmacun\APIResponseBundle\Model;

class ResponseActionModel extends \SplType {
	const __default = NULL;
	const Read = 'read';
	const Update = 'update';
	const Create = 'create';
	const Delete = 'delete';
}