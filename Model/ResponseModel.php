<?php

namespace App\Lahmacun\APIResponseBundle\Model;

class ResponseModel {
	/**
	 * @var $status ResponseStatusModel
	 */
	private $status;

	/**
	 * @var $code ResponseCodeModel
	 */
	private $code;

	/**
	 * @var $messages string[]
	 */
	private $messages;

	/**
	 * @var $resources object[]
	 */
	private $resources;

	/**
	 * @var $action ResponseActionModel
	 */
	private $action;

	/**
	 * @return ResponseStatusModel
	 */
	public function getStatus(): ResponseStatusModel {
		return $this->status;
	}

	/**
	 * @param ResponseStatusModel $status
	 *
	 * @return ResponseModel
	 */
	public function setStatus( ResponseStatusModel $status ): ResponseModel {
		$this->status = $status;

		return $this;
	}

	/**
	 * @return ResponseCodeModel
	 */
	public function getCode(): ResponseCodeModel {
		return $this->code;
	}

	/**
	 * @param ResponseCodeModel $code
	 *
	 * @return ResponseModel
	 */
	public function setCode( ResponseCodeModel $code ): ResponseModel {
		$this->code = $code;

		return $this;
	}

	/**
	 * @return string[]
	 */
	public function getMessages(): array {
		return $this->messages;
	}

	/**
	 * @param string[] $messages
	 *
	 * @return ResponseModel
	 */
	public function setMessages( array $messages ): ResponseModel {
		$this->messages = $messages;

		return $this;
	}

	/**
	 * @return object[]
	 */
	public function getResources(): array {
		return $this->resources;
	}

	/**
	 * @param object[] $resources
	 *
	 * @return ResponseModel
	 */
	public function setResources( array $resources ): ResponseModel {
		$this->resources = $resources;

		return $this;
	}

	/**
	 * @return ResponseActionModel
	 */
	public function getAction(): ResponseActionModel {
		return $this->action;
	}

	/**
	 * @param ResponseActionModel $action
	 *
	 * @return ResponseModel
	 */
	public function setAction( ResponseActionModel $action ): ResponseModel {
		$this->action = $action;

		return $this;
	}
}