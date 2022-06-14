<?php

use Different\DifferentCore\app\Utils\Sidebar\SidebarMenuItem;
use Different\DifferentCore\app\Utils\Sidebar\SidebarMenuGroup;

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
    ],
];
