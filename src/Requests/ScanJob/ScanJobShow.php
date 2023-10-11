<?php

namespace Dobbeltklikk\Sdk\Requests\ScanJob;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * scanJob.show
 */
class ScanJobShow extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/scans/{$this->jobId}";
	}


	/**
	 * @param string $jobId
	 */
	public function __construct(
		protected string $jobId,
	) {
	}
}
