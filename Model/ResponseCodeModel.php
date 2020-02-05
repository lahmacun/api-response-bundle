<?php
/**
 * Number Codes:
 * 1001-2000 => Success codes
 * 2001-3000 => Error codes
 * 3001-4000 => Other codes
 */

namespace App\Lahmacun\APIResponseBundle\Model;

class ResponseCodeModel extends \SplType {
	const __default = null;
	const Created = 1001;
	const Updated = 1002;
	const Deleted = 1003;
	const Unauthorized = 2001;
	const BadRequest = 2002;
	const MissingInformation = 2003;
	const NotFound = 2004;
}