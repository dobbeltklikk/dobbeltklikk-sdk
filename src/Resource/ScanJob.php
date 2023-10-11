<?php

namespace Dobbeltklikk\Sdk\Resource;

use Dobbeltklikk\Sdk\Requests\ScanJob\ScanJobDestroy;
use Dobbeltklikk\Sdk\Requests\ScanJob\ScanJobShow;
use Dobbeltklikk\Sdk\Resource;
use Saloon\Contracts\Response;

class ScanJob extends Resource
{
	/**
	 * @param string $jobId
	 */
	public function ScanJobShow(string $jobId): Response
	{
		return $this->connector->send(new ScanJobShow($jobId));
	}


	/**
	 * @param string $jobId
	 */
	public function ScanJobDestroy(string $jobId): Response
	{
		return $this->connector->send(new ScanJobDestroy($jobId));
	}
}
