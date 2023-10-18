<?php

/** @noinspection PhpUnhandledExceptionInspection */

use Dobbeltklikk\Sdk\Dobbeltklikk;
use Dobbeltklikk\Sdk\Requests\Document\DocumentDestroy;
use Dobbeltklikk\Sdk\Requests\Document\DocumentIndex;
use Dobbeltklikk\Sdk\Requests\Document\DocumentShow;
use Dobbeltklikk\Sdk\Requests\Document\DocumentStore;
use Dobbeltklikk\Sdk\Requests\Document\DocumentUpdate;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->Dobbeltklikk = new Dobbeltklikk(apiKey: 'fake-api-key');
});

it('DocumentDestroy returns 200', function () {
    Saloon::fake([
        DocumentDestroy::class => MockResponse::fixture('document.destroy'),
    ]);

    $response = $this->Dobbeltklikk->festival()->getFestivalEventList(1);

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->body())->json();

    Saloon::assertSent(DocumentDestroy::class);
});

it('DocumentIndex returns 200', function () {
    Saloon::fake([
        DocumentIndex::class => MockResponse::fixture('document.index'),
    ]);

    $response = $this->Dobbeltklikk->festival()->getFestivalEventList(1);

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->body())->json();

    Saloon::assertSent(DocumentIndex::class);
});

it('DocumentShow returns 200', function () {
    Saloon::fake([
        DocumentShow::class => MockResponse::fixture('document.show'),
    ]);

    $response = $this->Dobbeltklikk->festival()->getFestivalEventList(1);

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->body())->json();

    Saloon::assertSent(DocumentShow::class);
});

it('DocumentStore returns 200', function () {
    Saloon::fake([
        DocumentStore::class => MockResponse::fixture('document.store'),
    ]);

    $response = $this->Dobbeltklikk->festival()->getFestivalEventList(1);

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->body())->json();

    Saloon::assertSent(DocumentStore::class);
});

it('DocumentUpdate returns 200', function () {
    Saloon::fake([
        DocumentUpdate::class => MockResponse::fixture('document.update'),
    ]);

    $response = $this->Dobbeltklikk->festival()->getFestivalEventList(1);

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->body())->json();

    Saloon::assertSent(DocumentUpdate::class);
});
