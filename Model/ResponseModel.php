<?php

namespace App\Lahmacun\APIResponseBundle\Model;

class ResponseModel
{
  /**
   * @var string
   */
  private $status;

  /**
   * @var string
   */
  private $code;

  /**
   * @var string[]
   */
  private $messages;

  /**
   * @var object[]
   */
  private $resources;

  /**
   * @var string
   */
  private $action;

  /**
   * @var int
   */
  private $httpStatusCode;

  /**
   * @return string
   */
  public function getStatus(): ?string
  {
    return $this->status;
  }

  /**
   * @param string $status
   *
   * @return ResponseModel
   */
  public function setStatus(string $status): ResponseModel
  {
    $this->status = $status;

    return $this;
  }

  /**
   * @return string
   */
  public function getCode(): ?string
  {
    return $this->code;
  }

  /**
   * @param string $code
   *
   * @return ResponseModel
   */
  public function setCode(string $code): ResponseModel
  {
    $this->code = $code;

    return $this;
  }

  /**
   * @return string[]
   */
  public function getMessages(): ?array
  {
    return $this->messages;
  }

  /**
   * @param string[] $messages
   *
   * @return ResponseModel
   */
  public function setMessages(array $messages): ResponseModel
  {
    $this->messages = $messages;

    return $this;
  }

  /**
   * @return object[]
   */
  public function getResources(): ?array
  {
    return $this->resources;
  }

  /**
   * @param object[] $resources
   *
   * @return ResponseModel
   */
  public function setResources(?array $resources): ResponseModel
  {
    $this->resources = $resources;

    return $this;
  }

  /**
   * @return string
   */
  public function getAction(): ?string
  {
    return $this->action;
  }

  /**
   * @param string $action
   *
   * @return ResponseModel
   */
  public function setAction(string $action): ResponseModel
  {
    $this->action = $action;

    return $this;
  }

  public function getHttpStatusCode(): int
  {
    switch ($this->getCode()) {
      case 1001:
        return 201;
        break;
      case 1002:
      case 1003:
        return 200;
        break;
      case 2001:
        return 401;
        break;
      case 2002:
      case 2003:
        return 400;
        break;
      case 2004:
        return 404;
        break;
      default:
        return 200;
    }
  }
}