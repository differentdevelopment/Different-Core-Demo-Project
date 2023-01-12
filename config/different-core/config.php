<?php

use Different\DifferentCore\app\Utils\Sidebar\SidebarMenuItem;
use Different\DifferentCore\app\Utils\Sidebar\SidebarMenuLabel;

return [
    'sidebar_menu' => [
        new SidebarMenuItem(
            '/admin/dashboard',
            'backpack::base.dashboard',
            'las la-home'
        ),
        new SidebarMenuLabel("Teszt"),
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
        new SidebarMenuItem(
            '/admin/project/account',
            'accounts.accounts',
            'las la-users'
        ),
    ],
    'magic_link_login' => false,
];
