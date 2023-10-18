<?php

namespace Dobbeltklikk\Sdk\Requests\DocumentType;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * documentType.show
 */
class DocumentTypeShow extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/document-types/{$this->documentType}";
    }

    /**
     * @param  int  $documentType The document type ID
     */
    public function __construct(
        protected int $documentType,
    ) {
    }
}
