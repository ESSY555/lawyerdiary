<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index', ['active' => 'Dashboard', 'title' => 'Dashboard - Lawyer Diary']);
})->name('dashboard.dashboard');

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    // Redirect /dashboard to root
    Route::get('/', function () {
        return redirect()->route('dashboard.dashboard');
    });

    Route::get('/calendar', function () {
        return view('dashboard.calendar', ['active' => 'Calendar', 'title' => 'Calendar - Lawyer Diary']);
    })->name('calendar');

    Route::get('/hearings', function () {
        return view('dashboard.hearings', ['active' => 'Hearings', 'title' => 'Hearings - Lawyer Diary']);
    })->name('hearings');

    Route::get('/cases', function () {
        return view('dashboard.cases', ['active' => 'Cases', 'title' => 'Cases - Lawyer Diary']);
    })->name('cases');

    Route::get('/clients', function () {
        return view('dashboard.clients', ['active' => 'Clients', 'title' => 'Clients - Lawyer Diary']);
    })->name('clients');

    Route::get('/notes', function () {
        return view('dashboard.notes', ['active' => 'Notes', 'title' => 'Notes & Tasks - Lawyer Diary']);
    })->name('notes');

    Route::get('/notes/create', function () {
        return view('dashboard.create-note', ['active' => 'Notes', 'title' => 'Create Note - Lawyer Diary']);
    })->name('notes.create');

    Route::get('/documents', function () {
        return view('dashboard.documents', ['active' => 'Documents', 'title' => 'Documents - Lawyer Diary']);
    })->name('documents');

    Route::get('/legal-books', function () {
        return view('dashboard.legal-books', ['active' => 'Legal Books', 'title' => 'Legal Books - Lawyer Diary']);
    })->name('legal-books');

    Route::get('/links', function () {
        return view('dashboard.links', ['active' => 'Links', 'title' => 'Useful Links - Lawyer Diary']);
    })->name('links');
});
