<?php

/** @noinspection PhpUnhandledExceptionInspection */

use Dobbeltklikk\Sdk\Dobbeltklikk;
use Dobbeltklikk\Sdk\Requests\ScanJob\ScanJobDestroy;
use Dobbeltklikk\Sdk\Requests\ScanJob\ScanJobShow;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->Dobbeltklikk = new Dobbeltklikk(apiKey: 'fake-api-key');
});

it('ScanJobDestroy returns 200', function () {
    Saloon::fake([
        ScanJobDestroy::class => MockResponse::fixture('scanJob.destroy'),
    ]);

    $response = $this->Dobbeltklikk->festival()->getFestivalEventList(1);

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->body())->json();

    Saloon::assertSent(ScanJobDestroy::class);
});

it('ScanJobShow returns 200', function () {
    Saloon::fake([
        ScanJobShow::class => MockResponse::fixture('scanJob.show'),
    ]);

    $response = $this->Dobbeltklikk->festival()->getFestivalEventList(1);

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->body())->json();

    Saloon::assertSent(ScanJobShow::class);
});
