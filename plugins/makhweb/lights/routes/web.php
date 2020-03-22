<?php

/**
 * Routes
 */

Route::get('sitemap', SitemapController::class);
Route::get('sitemap/static', SitemapController::class);
Route::get('sitemap/posts', SitemapController::class);