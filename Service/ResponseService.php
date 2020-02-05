<?php

namespace App\Lahmacun\APIResponseBundle\Service;

use App\Lahmacun\APIResponseBundle\Model\ResponseModel;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;

class ResponseService {
  /**
   * @var $response ResponseModel
   */
  private $response;

  /**
   * @var $serializer SerializerInterface
   */
  private $serializer;

	public function __construct(ResponseModel $response, SerializerInterface $serializer) {
	  $this->response = $response;
	  $this->serializer = $serializer;
	}

	public function create() {
	  $serializedData = $this->serializer->serialize($this->response, 'json');
    return new Response($serializedData);
	}
}