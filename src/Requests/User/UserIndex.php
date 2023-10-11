<?php

namespace Dobbeltklikk\Sdk\Requests\User;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * user.index
 */
class UserIndex extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/me";
	}


	public function __construct()
	{
	}
}
