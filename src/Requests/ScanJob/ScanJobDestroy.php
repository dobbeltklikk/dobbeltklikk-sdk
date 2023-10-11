<?php

namespace Dobbeltklikk\Sdk\Requests\ScanJob;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * scanJob.destroy
 */
class ScanJobDestroy extends Request
{
	protected Method $method = Method::DELETE;


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
