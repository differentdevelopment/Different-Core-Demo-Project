<?php

use Different\DifferentCore\app\Utils\Sidebar\SidebarMenuItem;

return [
    'sidebar_menu' => [
        new SidebarMenuItem(
            '/admin/dashboard',
            'backpack::base.dashboard',
            'las la-home'
        ),
        new SidebarMenuItem(
            '/admin/songs',
            'songs.songs',
            'las la-music'
        ),
        new SidebarMenuItem(
            '/admin/music-player',
            'music-player.player',
            'las la-play'
        ),
        new SidebarMenuItem(
            '/admin/emails',
            'emails.emails',
            'las la-envelope'
        ),
    ],
    'magic_link_login' => true,
    'account_selector_enabled' => true,
    'user_account_cache_ttl' => 3600,
];
