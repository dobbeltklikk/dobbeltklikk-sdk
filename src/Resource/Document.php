<?php

namespace Dobbeltklikk\Sdk\Resource;

use Dobbeltklikk\Sdk\Requests\Document\DocumentDestroy;
use Dobbeltklikk\Sdk\Requests\Document\DocumentIndex;
use Dobbeltklikk\Sdk\Requests\Document\DocumentShow;
use Dobbeltklikk\Sdk\Requests\Document\DocumentStore;
use Dobbeltklikk\Sdk\Requests\Document\DocumentUpdate;
use Dobbeltklikk\Sdk\Resource;
use Saloon\Contracts\Response;

class Document extends Resource
{
	public function DocumentIndex(): Response
	{
		return $this->connector->send(new DocumentIndex());
	}


	public function DocumentStore(): Response
	{
		return $this->connector->send(new DocumentStore());
	}


	/**
	 * @param int $document The document ID
	 */
	public function DocumentShow(int $document): Response
	{
		return $this->connector->send(new DocumentShow($document));
	}


	/**
	 * @param int $document The document ID
	 */
	public function DocumentDestroy(int $document): Response
	{
		return $this->connector->send(new DocumentDestroy($document));
	}


	/**
	 * @param int $document The document ID
	 */
	public function DocumentUpdate(int $document): Response
	{
		return $this->connector->send(new DocumentUpdate($document));
	}
}
