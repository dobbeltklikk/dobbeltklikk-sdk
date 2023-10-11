<?php

namespace Dobbeltklikk\Sdk\Resource;

use Dobbeltklikk\Sdk\Requests\DocumentType\DocumentTypeIndex;
use Dobbeltklikk\Sdk\Requests\DocumentType\DocumentTypeShow;
use Dobbeltklikk\Sdk\Resource;
use Saloon\Contracts\Response;

class DocumentType extends Resource
{
	public function DocumentTypeIndex(): Response
	{
		return $this->connector->send(new DocumentTypeIndex());
	}


	/**
	 * @param int $documentType The document type ID
	 */
	public function DocumentTypeShow(int $documentType): Response
	{
		return $this->connector->send(new DocumentTypeShow($documentType));
	}
}
