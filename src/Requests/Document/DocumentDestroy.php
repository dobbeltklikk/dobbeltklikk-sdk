<?php

namespace Dobbeltklikk\Sdk\Requests\Document;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * document.destroy
 */
class DocumentDestroy extends Request
{
    protected Method $method = Method::DELETE;

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
