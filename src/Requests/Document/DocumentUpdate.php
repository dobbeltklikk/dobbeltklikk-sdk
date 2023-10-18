<?php

namespace Dobbeltklikk\Sdk\Requests\Document;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * document.update
 */
class DocumentUpdate extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

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
