<?php

namespace Dobbeltklikk\Sdk\Requests\Document;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * document.show
 */
class DocumentShow extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/documents/{$this->document}";
    }

    /**
     * @param  int  $document The document ID
     */
    public function __construct(
        protected int $document,
    ) {
    }
}
