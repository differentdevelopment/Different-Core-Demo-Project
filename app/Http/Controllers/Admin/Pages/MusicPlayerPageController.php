<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Models\Song;

class MusicPlayerPageController
{
    public function index()
    {
        return view('pages.music-player', [
            'title' => __('music-player.player'),
            'audio_lists' => Song::query()->with('file', 'cover')->get(),
        ]);
    }
}
