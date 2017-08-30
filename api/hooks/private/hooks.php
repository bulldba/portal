<?php

use Dredd\Hooks;

$app = require __DIR__.'/../app.php';

Hooks::beforeEach(function (&$transaction) use ($app) {
    $transaction->request->headers->Authorization = "Bearer as8d9dsfk8asdfs8fsfa9f";
});

//Hooks::beforeEach(function (&$transaction) use ($app) {
//    $app->make('db')->beginTransaction();
//});
//
//Hooks::afterEach(function (&$transaction) use ($app) {
//    $app->make('db')->rollback();
//});
//
//Hooks::before('/users > GET', function(&$transaction) {
//    factory(\App\User::class)->create([
//            'name' => 'Dom',
//            'email' => 'ddelnano@gmail.com',
//        ]
//    );
//});
