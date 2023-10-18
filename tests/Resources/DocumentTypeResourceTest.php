<?php

/** @noinspection PhpUnhandledExceptionInspection */

use Dobbeltklikk\Sdk\Dobbeltklikk;
use Dobbeltklikk\Sdk\Requests\DocumentType\DocumentTypeIndex;
use Dobbeltklikk\Sdk\Requests\DocumentType\DocumentTypeShow;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->Dobbeltklikk = new Dobbeltklikk(apiKey: 'fake-api-key');
});

it('DocumentTypeIndex returns 200', function () {
    Saloon::fake([
        DocumentTypeIndex::class => MockResponse::fixture('documentType.index'),
    ]);

    $response = $this->Dobbeltklikk->festival()->getFestivalEventList(1);

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->body())->json();

    Saloon::assertSent(DocumentTypeIndex::class);
});

it('DocumentTypeShow returns 200', function () {
    Saloon::fake([
        DocumentTypeShow::class => MockResponse::fixture('documentType.show'),
    ]);

    $response = $this->Dobbeltklikk->festival()->getFestivalEventList(1);

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->body())->json();

    Saloon::assertSent(DocumentTypeShow::class);
});
