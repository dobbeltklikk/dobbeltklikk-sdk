<?php

namespace Dobbeltklikk\Sdk\Resource;

use Dobbeltklikk\Sdk\Requests\ScanJob\ScanJobDestroy;
use Dobbeltklikk\Sdk\Requests\ScanJob\ScanJobShow;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ScanJob extends BaseResource
{
    public function ScanJobShow(string $jobId): Response
    {
        return $this->connector->send(new ScanJobShow($jobId));
    }

    public function ScanJobDestroy(string $jobId): Response
    {
        return $this->connector->send(new ScanJobDestroy($jobId));
    }
}
