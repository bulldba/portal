<?php

Route::get('/threads', function () {
    return [
        [
            'subject' => 'Test Thread',
            'body' => 'Test foo',
        ],
    ];
});

Route::post('/threads', function () {
    return response()->json([
        'id' => 1,
        'subject' => 'Test Thread',
        'body' => 'Test foo',
    ], 201);
});








//Route::group(['prefix' => 'private', /*'middleware' => 'auth:api'*/], function () {
//    Route::get('/users', function () {
//        return [
//            [
//                'id' => 1,
//                'name' => 'Dries Vints',
//                'username' => 'driesvints',
//            ],
//        ];
//    });
//});
