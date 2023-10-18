<?php

/** @noinspection PhpUnhandledExceptionInspection */

use Dobbeltklikk\Sdk\Dobbeltklikk;
use Dobbeltklikk\Sdk\Requests\User\UserIndex;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->Dobbeltklikk = new Dobbeltklikk(apiKey: 'fake-api-key');
});

it('GetFestivalEventList returns 200', function () {
    Saloon::fake([
        UserIndex::class => MockResponse::fixture('user.index'),
    ]);

    $response = $this->Dobbeltklikk->festival()->getFestivalEventList(1);

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->body())->json();

    Saloon::assertSent(UserIndex::class);
});
