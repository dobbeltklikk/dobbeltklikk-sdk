<?php

namespace Dobbeltklikk\Sdk\Resource;

use Dobbeltklikk\Sdk\Requests\User\UserIndex;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class User extends BaseResource
{
    public function UserIndex(): Response
    {
        return $this->connector->send(new UserIndex());
    }
}
