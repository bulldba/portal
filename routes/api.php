<?php

Route::get('/threads', function () {
    return [
        [
            'id' => 1,
            'subject' => 'Test',
            'body' => 'Test foo',
        ],
    ];
});






Route::post('/threads', function () {
    return response([
        'id' => 2,
        'subject' => 'Test Thread',
        'body' => 'Test foo',
    ], 201);
});






//Route::group(['prefix' => 'private', 'middleware' => 'api.auth'], function () {
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








