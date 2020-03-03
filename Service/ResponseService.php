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

	public function __construct(SerializerInterface $serializer) {
	  $this->serializer = $serializer;
	}

  /**
   * @return ResponseModel
   */
  public function getResponse(): ResponseModel
  {
    return $this->response;
  }

  /**
   * @param ResponseModel $response
   */
  public function setResponse(ResponseModel $response): void
  {
    if (null === $response->getResources()) {
      $response->setResources([]);
    }
    $this->response = $response;
  }

	public function create($returnType = 'response') {
	  $serializedData = $this->serializer->serialize($this->response, 'json');
	  switch ($returnType) {
      case "response":
        return new Response($serializedData, $this->response->getHttpStatusCode(), [
          'Content-Type' => 'application/json',
        ]);
        break;
      case "json":
        return $serializedData;
        break;
    }
	}
}