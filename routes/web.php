<?php

use Illuminate\Support\Facades\Route;
use Cloudstudio\Ollama\Facades\Ollama;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/chat', function () {
    return view('chat');
});
Route::post('/send-message', function (Request $request) {
    $response = Ollama::agent('You are a chat assistant...')
        ->prompt($request->message)
        ->model(env('OLLAMA_MODEL', 'gemma2'))
        ->ask();
    return back()->with('response', $response);
});