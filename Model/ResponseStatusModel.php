<?php

namespace App\Lahmacun\APIResponseBundle\Model;

class ResponseStatusModel {
	const __default = self::Success;
	const Success = 'success';
	const Failure = 'failure';
	const Queued = 'queued';
}