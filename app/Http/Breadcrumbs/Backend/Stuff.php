<?php

Breadcrumbs::register('admin.stuffs.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.stuffs.management'), route('admin.stuffs.index'));
});

Breadcrumbs::register('admin.stuffs.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.stuffs.index');
    $breadcrumbs->push(trans('menus.backend.stuffs.create'), route('admin.stuffs.create'));
});

Breadcrumbs::register('admin.stuffs.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.stuffs.index');
    $breadcrumbs->push(trans('menus.backend.stuffs.edit'), route('admin.stuffs.edit', $id));
});
