<?php

use Dredd\Hooks;

$app = require __DIR__.'/../app.php';

Hooks::beforeEach(function (&$transaction) use ($app) {
    $app->make(BeatSwitch\Database\DatabaseManager::class)->reset();

    $user = $app->make(Doctrine\ORM\EntityManagerInterface::class)
        ->getRepository(BeatSwitch\Users\User::class)
        ->find(1);
    $token = $app->make(BeatSwitch\Auth\JWT\TokenGenerator::class)->byUser($user);

    $transaction->request->headers->Authorization = "Bearer $token";
});
