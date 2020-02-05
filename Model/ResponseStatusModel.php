<?php

namespace App\Lahmacun\APIResponseBundle\Model;

class ResponseStatusModel extends \SplType {
	const __default = self::Success;
	const Success = 'success';
	const Failure = 'failure';
	const Queued = 'queued';
}