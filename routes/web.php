<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

    Route::prefix('FieldWorker')->name('fieldworker.')->group(function () {
        Route::get('dashboard',App\Http\Livewire\FieldWorker\Dashboard::class)->name('dashboard');
        Route::prefix('categories')->name('categories.')->group(function () {
            Route::get('index',App\Http\Livewire\FieldWorker\Category\Index::class)->name('index');
            Route::get('{category}/view',App\Http\Livewire\FieldWorker\Category\View::class)->name('view');
        });
        Route::prefix('churches')->name('churches.')->group(function () {
            Route::get('create',App\Http\Livewire\FieldWorker\Church\Create::class)->name('create');
            Route::get('index',App\Http\Livewire\FieldWorker\Church\Index::class)->name('index');
            Route::get('{church}/edit',App\Http\Livewire\FieldWorker\Church\Edit::class)->name('edit');
            Route::get('{church}/view',App\Http\Livewire\FieldWorker\Church\View::class)->name('view');
            Route::get('{church}/fieldworker',App\Http\Livewire\FieldWorker\Church\FieldWorker::class)->name('fieldworker');
        });
        Route::prefix('partners')->name('partners.')->group(function () {
            Route::get('create',App\Http\Livewire\FieldWorker\Partner\Create::class)->name('create');
            Route::get('index',App\Http\Livewire\FieldWorker\Partner\Index::class)->name('index');
            Route::get('{partner}/edit',App\Http\Livewire\FieldWorker\Partner\Edit::class)->name('edit');
            Route::get('{partner}/view',App\Http\Livewire\FieldWorker\Partner\View::class)->name('view');
            Route::get('management/{partner?}',App\Http\Livewire\FieldWorker\Partner\Management::class)->name('management');
        });
        Route::prefix('posts')->name('posts.')->group(function () {
            Route::post('store',[App\Http\Controllers\Fieldworker\PostCreate::class,'store'])->name('store');
            Route::post('update/{id}',[App\Http\Controllers\Fieldworker\PostUpdate::class,'update'])->name('update');
            Route::get('create',App\Http\Livewire\FieldWorker\Post\Create::class)->name('create');
            Route::get('index',App\Http\Livewire\FieldWorker\Post\Index::class)->name('index');
            Route::get('{post}/edit',App\Http\Livewire\FieldWorker\Post\Edit::class)->name('edit');
            Route::get('{post}/view',App\Http\Livewire\FieldWorker\Post\View::class)->name('view');
        });
        Route::prefix('ojts')->name('ojts.')->group(function () {
            Route::get('create',App\Http\Livewire\FieldWorker\Ojt\Create::class)->name('create');
            Route::get('{training}/index',App\Http\Livewire\FieldWorker\Ojt\Index::class)->name('index');
            Route::get('{ojt}/edit',App\Http\Livewire\FieldWorker\Ojt\Edit::class)->name('edit');
            Route::get('{ojt}/view',App\Http\Livewire\FieldWorker\Ojt\View::class)->name('view');
        });
        Route::prefix('schedules')->name('schedules.')->group(function () {
            Route::get('{training}/create',App\Http\Livewire\FieldWorker\Schedule\Create::class)->name('create');
            Route::get('{training}/index',App\Http\Livewire\FieldWorker\Schedule\Index::class)->name('index');
            Route::get('{schedule}/edit',App\Http\Livewire\FieldWorker\Schedule\Edit::class)->name('edit');
            Route::get('{schedule}/view',App\Http\Livewire\FieldWorker\Schedule\View::class)->name('view');
        });
        Route::prefix('trainings')->name('trainings.')->group(function () {
            Route::get('create',App\Http\Livewire\FieldWorker\Training\Create::class)->name('create');
            Route::get('index',App\Http\Livewire\FieldWorker\Training\Index::class)->name('index');
            Route::get('{training}/edit',App\Http\Livewire\FieldWorker\Training\Edit::class)->name('edit');
            Route::get('{training}/view',App\Http\Livewire\FieldWorker\Training\View::class)->name('view');
            Route::get('{training}/report',App\Http\Livewire\FieldWorker\Training\Report::class)->name('report');
            Route::get('{training}/display-report/{date}',App\Http\Livewire\FieldWorker\Training\DisplayReport::class)->name('display_report');
            Route::get('{training}/display-report-resume',App\Http\Livewire\FieldWorker\Training\DisplayReportResume::class)->name('display_report_resume');
        });
        Route::prefix('users')->name('users.')->group(function () {
            Route::get('create',App\Http\Livewire\FieldWorker\User\Create::class)->name('create');
            Route::get('index',App\Http\Livewire\FieldWorker\User\Index::class)->name('index');
            Route::get('{user}/edit',App\Http\Livewire\FieldWorker\User\Edit::class)->name('edit');
            Route::get('{user}/view',App\Http\Livewire\FieldWorker\User\View::class)->name('view');
        });
        Route::prefix('wherearewe')->name('wherearewe.')->group(function () {
            Route::get('index',App\Http\Livewire\FieldWorker\WhereAreWe\Index::class)->name('index');
        });
    });

    Route::prefix('office')->name('office.')->group(function () {
        Route::get('dashboard',App\Http\Livewire\Office\Dashboard::class)->name('dashboard');
        Route::get('test',App\Http\Livewire\Office\Test::class)->name('test');
        Route::prefix('categories')->name('categories.')->group(function () {
            Route::get('create',App\Http\Livewire\Office\Category\Create::class)->name('create');
            Route::get('index',App\Http\Livewire\Office\Category\Index::class)->name('index');
            Route::get('{category}/edit',App\Http\Livewire\Office\Category\Edit::class)->name('edit');
            Route::get('{category}/view',App\Http\Livewire\Office\Category\View::class)->name('view');
        });
        Route::prefix('churches')->name('churches.')->group(function () {
            Route::get('create',App\Http\Livewire\Office\Church\Create::class)->name('create');
            Route::get('index',App\Http\Livewire\Office\Church\Index::class)->name('index');
            Route::get('{church}/edit',App\Http\Livewire\Office\Church\Edit::class)->name('edit');
            Route::get('{church}/view',App\Http\Livewire\Office\Church\View::class)->name('view');
            Route::get('{church}/fieldworker',App\Http\Livewire\Office\Church\FieldWorker::class)->name('fieldworker');
        });
        Route::prefix('schedules')->name('schedules.')->group(function () {
            Route::get('{training}/create',App\Http\Livewire\Office\Schedule\Create::class)->name('create');
            Route::get('{training}/index',App\Http\Livewire\Office\Schedule\Index::class)->name('index');
            Route::get('{schedule}/edit',App\Http\Livewire\Office\Schedule\Edit::class)->name('edit');
            Route::get('{schedule}/view',App\Http\Livewire\Office\Schedule\View::class)->name('view');
        });
        Route::prefix('schedule-defaults')->name('schedule-defaults.')->group(function () {
            Route::get('{tool}/create',App\Http\Livewire\Office\ScheduleDefault\Create::class)->name('create');
            Route::get('{tool}/index',App\Http\Livewire\Office\ScheduleDefault\Index::class)->name('index');
            Route::get('{schedule}/edit',App\Http\Livewire\Office\ScheduleDefault\Edit::class)->name('edit');
            Route::get('{schedule}/view',App\Http\Livewire\Office\ScheduleDefault\View::class)->name('view');
        });
        Route::prefix('tools')->name('tools.')->group(function () {
            Route::get('{category}/create',App\Http\Livewire\Office\Tool\Create::class)->name('create');
            Route::get('{tool}/edit',App\Http\Livewire\Office\Tool\Edit::class)->name('edit');
            Route::get('{tool}/view',App\Http\Livewire\Office\Tool\View::class)->name('view');
        });
        Route::prefix('trainings')->name('trainings.')->group(function () {
            Route::get('create',App\Http\Livewire\Office\Training\Create::class)->name('create');
            Route::get('index',App\Http\Livewire\Office\Training\Index::class)->name('index');
            Route::get('{training}/edit',App\Http\Livewire\Office\Training\Edit::class)->name('edit');
            Route::get('{training}/view',App\Http\Livewire\Office\Training\View::class)->name('view');
            Route::get('{training}/report',App\Http\Livewire\Office\Training\Report::class)->name('report');
            Route::get('{training}/display-report/{date}',App\Http\Livewire\Office\Training\DisplayReport::class)->name('display_report');
            Route::get('{training}/display-report-resume',App\Http\Livewire\Office\Training\DisplayReportResume::class)->name('display_report_resume');
        });
        Route::prefix('unities')->name('unities.')->group(function () {
            Route::get('{tool}/create',App\Http\Livewire\Office\Unity\Create::class)->name('create');
            Route::get('{unity}/edit',App\Http\Livewire\Office\Unity\Edit::class)->name('edit');
            Route::get('{unity}/view',App\Http\Livewire\Office\Unity\View::class)->name('view');
        });
        Route::prefix('users')->name('users.')->group(function () {
            Route::get('create',App\Http\Livewire\Office\User\Create::class)->name('create');
            Route::get('index',App\Http\Livewire\Office\User\Index::class)->name('index');
            Route::get('{user}/edit',App\Http\Livewire\Office\User\Edit::class)->name('edit');
            Route::get('{user}/view',App\Http\Livewire\Office\User\View::class)->name('view');
        });
        Route::prefix('wherearewe')->name('wherearewe.')->group(function () {
            Route::get('index',App\Http\Livewire\Office\WhereAreWe\Index::class)->name('index');
        });
    });

    Route::prefix('director')->name('director.')->group(function () {
        Route::get('dashboard',App\Http\Livewire\Director\Dashboard::class)->name('dashboard');
    });

    Route::prefix('facilitator')->name('facilitator.')->group(function () {
        Route::get('dashboard',App\Http\Livewire\Facilitator\Dashboard::class)->name('dashboard');
    });
});
