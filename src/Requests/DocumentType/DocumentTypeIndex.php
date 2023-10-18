<?php

namespace Dobbeltklikk\Sdk\Requests\DocumentType;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * documentType.index
 */
class DocumentTypeIndex extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/document-types';
    }

    public function __construct()
    {
    }
}
