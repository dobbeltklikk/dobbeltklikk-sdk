<?php

namespace Dobbeltklikk\Sdk\Resource;

use Dobbeltklikk\Sdk\Requests\User\UserIndex;
use Dobbeltklikk\Sdk\Resource;
use Saloon\Contracts\Response;

class User extends Resource
{
	public function UserIndex(): Response
	{
		return $this->connector->send(new UserIndex());
	}
}
