<?php

use Illuminate\Auth\Access\Response;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Orchestra\Testbench\Factories\UserFactory;

use function Pest\Laravel\actingAs;
use function PHPUnit\Framework\assertInstanceOf;
use function PHPUnit\Framework\assertTrue;

it('can gate', function () {
    actingAs(UserFactory::new()->create());
    assertInstanceOf(GateContract::class, gate());
    gate()->define('test', function ($user) {
        return true;
    });
    assertInstanceOf(Response::class, gate('test'));
    assertTrue(gate('test')->allowed());
});
