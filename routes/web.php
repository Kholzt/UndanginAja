<?php

use App\Models\Comments;
use App\Models\Invitations;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get("/{title}", function ($title) {
    $slug = str_replace("-", " ", $title);
    $invitation  = Invitations::where("title", $slug)->first();
    if (!$invitation) {
        abort(404);
    }
    $params = [
        "mainEvent" => $invitation->primaryEvents,
        "events" => $invitation->events,
        "wedding_details" => $invitation->wedding_details,
        "title" => $invitation->title,
        "id" => $invitation->id
    ];
    return view($invitation->template->template, $params);
});
Route::get('/comments/{id}', function ($id) {
    $data = Comments::where("invitation_id", $id)->orderBy("id", "Desc")->get();
    return response($data);
});
Route::post('/comments/{id}', function ($id) {

    try {
        $data = Comments::create(["name" => request("nama"), "comment" => request("keterangan"), "invitation_id" => $id]);
        return response($data);
    } catch (\Throwable $th) {
        return response(["error" => $th->getMessage()], 200);
    }
});
Route::get('/', function () {
    return view('welcome');
});
