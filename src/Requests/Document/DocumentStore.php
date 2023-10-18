<?php

namespace Dobbeltklikk\Sdk\Requests\Document;

use Saloon\Contracts\Body\HasBody;
use Saloon\Data\MultipartValue;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasMultipartBody;

/**
 * document.store
 */
class DocumentStore extends Request implements HasBody
{
    use HasMultipartBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/documents';
    }

    public function __construct(
        protected ?string $filePath = null,
    ) {
    }

    protected function defaultBody(): array
    {
        return [
            new MultipartValue(
                name: 'document',
                value: $this->filePath
            ),
        ];
    }
}
