<?php

namespace Dobbeltklikk\Sdk;

use Dobbeltklikk\Sdk\Resource\Document;
use Dobbeltklikk\Sdk\Resource\DocumentType;
use Dobbeltklikk\Sdk\Resource\ScanJob;
use Dobbeltklikk\Sdk\Resource\User;
use Saloon\Http\Connector;
use SensitiveParameter;

/**
 * dobbeltklikk
 */
class Dobbeltklikk extends Connector
{
    public function __construct(
        #[SensitiveParameter]
        protected string $apiKey,
        protected string $baseUrl = 'https://dobbeltklikk.no/api',
    ) {

    }

    public function resolveBaseUrl(): string
    {
        return $this->baseUrl;
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
