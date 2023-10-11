<?php

namespace Dobbeltklikk\Sdk\Requests\Document;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * document.index
 */
class DocumentIndex extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/documents";
	}


	public function __construct()
	{
	}
}
