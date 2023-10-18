<?php

namespace Dobbeltklikk\Sdk\Requests\ScanJob;

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

    public function __construct(
        protected string $jobId,
    ) {
    }
}
