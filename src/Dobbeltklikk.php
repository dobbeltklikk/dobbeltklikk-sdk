<?php

namespace Dobbeltklikk\Sdk;

use Dobbeltklikk\Sdk\Resource\Document;
use Dobbeltklikk\Sdk\Resource\DocumentType;
use Dobbeltklikk\Sdk\Resource\ScanJob;
use Dobbeltklikk\Sdk\Resource\User;
use Saloon\Http\Connector;

/**
 * dobbeltklikk
 */
class Dobbeltklikk extends Connector
{
	public function resolveBaseUrl(): string
	{
		return 'http://dev.dobbeltklikk.no/api';
	}


	public function document(): Document
	{
		return new Document($this);
	}


	public function documentType(): DocumentType
	{
		return new DocumentType($this);
	}


	public function scanJob(): ScanJob
	{
		return new ScanJob($this);
	}


	public function user(): User
	{
		return new User($this);
	}
}
