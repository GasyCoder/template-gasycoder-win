<?php

use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\App\AppController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Component\ComponentController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\DashwindController;
use App\Http\Controllers\Invoice\InvoiceController;
use App\Http\Controllers\Kyc\KycController;
use App\Http\Controllers\Misc\MiscController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Project\ProjectController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'ecommerce'])->name('home');

// Authentication Routes
Route::prefix('auths')->name('auths.')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::get('reset', [AuthController::class, 'reset'])->name('reset');
    Route::get('success', [AuthController::class, 'success'])->name('success');
    Route::get('login-v2', [AuthController::class, 'loginv2'])->name('login-v2');
    Route::get('register-v2', [AuthController::class, 'registerv2'])->name('register-v2');
    Route::get('reset-v2', [AuthController::class, 'resetv2'])->name('reset-v2');
    Route::get('success-v2', [AuthController::class, 'successv2'])->name('success-v2');
    Route::get('login-v3', [AuthController::class, 'loginv3'])->name('login-v3');
    Route::get('register-v3', [AuthController::class, 'registerv3'])->name('register-v3');
    Route::get('reset-v3', [AuthController::class, 'resetv3'])->name('reset-v3');
    Route::get('success-v3', [AuthController::class, 'successv3'])->name('success-v3');
});

// Admin profile and its related routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('profile', [AdminProfileController::class, 'profile'])->name('profile');
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('activity', [AdminProfileController::class, 'profileActivity'])->name('activity');
        Route::get('notification', [AdminProfileController::class, 'profileNotification'])->name('notification');
        Route::get('setting', [AdminProfileController::class, 'profileSetting'])->name('setting');
        Route::get('social', [AdminProfileController::class, 'profileSocial'])->name('social');
    });
});

// User list and details routes
Route::prefix('user')->name('user.')->group(function () {
    Route::get('card', [UserController::class, 'userCard'])->name('card');
    Route::get('list', [UserController::class, 'userList'])->name('list');
    Route::get('list-compact', [UserController::class, 'userListCompact'])->name('list-compact');
    Route::get('details/', [UserController::class, 'userDetails'])->name('details');
    Route::get('details/transaction', [UserController::class, 'userDetailsTransactions'])->name('details.transaction');
    Route::get('details/notification', [UserController::class, 'userDetailsNotifications'])->name('details.notification');
    Route::get('details/activity', [UserController::class, 'userDetailsActivities'])->name('details.activity');
    Route::get('profile', [UserController::class, 'userProfile'])->name('profile');
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('activity', [UserController::class, 'userProfileActivity'])->name('activity');
        Route::get('notification', [UserController::class, 'userProfileNotification'])->name('notification');
        Route::get('setting', [UserController::class, 'userProfileSetting'])->name('setting');
        Route::get('social', [UserController::class, 'userProfileSocial'])->name('social');
    });
});

// Dashboard Routes
Route::get('/ecommerce', [DashboardController::class, 'ecommerce'])->name('ecommerce');
Route::get('/copywriter', [DashboardController::class, 'copywriter'])->name('copywriter');
Route::get('/sales', [DashboardController::class, 'sales'])->name('sales');
Route::get('/crypto', [DashboardController::class, 'crypto'])->name('crypto');
Route::get('/analytics', [DashboardController::class, 'analytics'])->name('analytics');
Route::get('/invest', [DashboardController::class, 'invest'])->name('invest');

// Project Routes
Route::prefix('project')->name('project.')->group(function () {
    Route::get('card', [ProjectController::class, 'projectCard'])->name('card');
    Route::get('list', [ProjectController::class, 'projectList'])->name('list');
});

// customer Routes
Route::prefix('customer')->name('customer.')->group(function () {
    Route::get('list', [CustomerController::class, 'customerList'])->name('list');
    Route::get('details', [CustomerController::class, 'customerDetails'])->name('details');
});

// kyc Routes
Route::prefix('kyc')->name('kyc.')->group(function () {
    Route::get('list', [KycController::class, 'kycList'])->name('list');
    Route::get('details', [KycController::class, 'kycDetails'])->name('details');
});

// invoice Routes
Route::prefix('invoice')->name('invoice.')->group(function () {
    Route::get('list', [InvoiceController::class, 'invoiceList'])->name('list');
    Route::get('details', [InvoiceController::class, 'invoiceDetails'])->name('details');
    Route::get('print', [InvoiceController::class, 'invoicePrint'])->name('print');
});

// product Routes
Route::prefix('product')->name('product.')->group(function () {
    Route::get('list', [ProductController::class, 'productList'])->name('list');
    Route::get('card', [ProductController::class, 'productCard'])->name('card');
    Route::get('details', [ProductController::class, 'productDetails'])->name('details');
});

// Pricing Table Routes
Route::get('/pricing-table', [MiscController::class, 'pricingPage'])->name('pricing-table');
Route::get('/gallery', [MiscController::class, 'galleryPage'])->name('gallery');

// Error Pages Routes
Route::prefix('errors')->name('errors.')->group(function () {
    Route::get('404-classic', [MiscController::class, 'classic404'])->name('404-classic');
    Route::get('504-classic', [MiscController::class, 'classic504'])->name('504-classic');
    Route::get('404-modern', [MiscController::class, 'modern404'])->name('404-modern');
    Route::get('504-modern', [MiscController::class, 'modern504'])->name('504-modern');
});

// Apps Routes
Route::prefix('apps')->name('apps.')->group(function () {
    Route::get('calendar', [AppController::class, 'calendar'])->name('calendar');
    Route::get('chats', [AppController::class, 'chats'])->name('chats');
    Route::get('file-manager', [AppController::class, 'fileManager'])->name('file-manager');
    Route::get('inbox', [AppController::class, 'inbox'])->name('inbox');
    Route::get('messages', [AppController::class, 'messages'])->name('messages');
});

// Misc Routes
Route::get('/blank', [MiscController::class, 'blankPage'])->name('blank');
Route::get('/faqs', [MiscController::class, 'faqsPage'])->name('faqs');
Route::get('/terms-policy', [MiscController::class, 'termsPolicyPage'])->name('terms-policy');
Route::get('/regular-v1', [MiscController::class, 'regularv1Page'])->name('regular-v1');
Route::get('/regular-v2', [MiscController::class, 'regularv2Page'])->name('regular-v2');

// # COMPONENTS ROUTES
// ########################

Route::get('components', [ComponentController::class, 'componentsListPage'])->name('components');

Route::prefix('components')->name('components.')->group(function () {
    Route::prefix('elements')->name('elements.')->group(function () {
        Route::get('accordions', [ComponentController::class, 'accordionsPage'])->name('accordions');
        Route::get('alerts', [ComponentController::class, 'alertsPage'])->name('alerts');
        Route::get('avatar', [ComponentController::class, 'avatarPage'])->name('avatar');
        Route::get('badges', [ComponentController::class, 'badgesPage'])->name('badges');
        Route::get('buttons', [ComponentController::class, 'buttonsPage'])->name('buttons');
        Route::get('buttons-group', [ComponentController::class, 'buttonsGroupPage'])->name('buttons-group');
        Route::get('breadcrumb', [ComponentController::class, 'breadcrumbPage'])->name('breadcrumb');
        Route::get('cards', [ComponentController::class, 'cardsPage'])->name('cards');
        Route::get('list-dropdown', [ComponentController::class, 'listDropdownPage'])->name('list-dropdown');
        Route::get('modals', [ComponentController::class, 'modalsPage'])->name('modals');
        Route::get('pagination', [ComponentController::class, 'paginationPage'])->name('pagination');
        Route::get('popover', [ComponentController::class, 'popoverPage'])->name('popover');
        Route::get('progress', [ComponentController::class, 'progressPage'])->name('progress');
        Route::get('spinner', [ComponentController::class, 'spinnerPage'])->name('spinner');
        Route::get('tabs', [ComponentController::class, 'tabsPage'])->name('tabs');
        Route::get('toast', [ComponentController::class, 'toastPage'])->name('toast');
        Route::get('tooltip', [ComponentController::class, 'tooltipPage'])->name('tooltip');
        Route::get('typography', [ComponentController::class, 'typographyPage'])->name('typography');
    });
    Route::prefix('forms')->name('forms.')->group(function () {
        Route::get('form-elements', [ComponentController::class, 'formElementsPage'])->name('form-elements');
        Route::get('checkbox-radio', [ComponentController::class, 'checkboxRadioPage'])->name('checkbox-radio');
        Route::get('advanced-controls', [ComponentController::class, 'advancedControlsPage'])->name('advanced-controls');
        Route::get('input-group', [ComponentController::class, 'inputGroupPage'])->name('input-group');
        Route::get('form-upload', [ComponentController::class, 'formUploadPage'])->name('form-upload');
        Route::get('datetime-picker', [ComponentController::class, 'datetimePickerPage'])->name('datetime-picker');
        Route::get('number-spinner', [ComponentController::class, 'numberSpinnerPage'])->name('number-spinner');
        Route::get('nouislider', [ComponentController::class, 'nouisliderPage'])->name('nouislider');
        Route::get('form-layouts', [ComponentController::class, 'formLayoutsPage'])->name('form-layouts');
        Route::get('form-validation', [ComponentController::class, 'formValidationPage'])->name('form-validation');
    });
    Route::prefix('tables')->name('tables.')->group(function () {
        Route::get('basic-table', [ComponentController::class, 'basicTablePage'])->name('basic-table');
        Route::get('data-table', [ComponentController::class, 'dataTablePage'])->name('data-table');
    });
    Route::prefix('widgets')->name('widgets.')->group(function () {
        Route::get('cards', [ComponentController::class, 'cardWidgetsPage'])->name('cards');
        Route::get('charts', [ComponentController::class, 'chartWidgetsPage'])->name('charts');
        Route::get('ratings', [ComponentController::class, 'ratingWidgetsPage'])->name('ratings');
    });
    Route::get('tailwind-config', [ComponentController::class, 'tailwindConfigPage'])->name('tailwind-config');
    Route::get('svg-icons', [ComponentController::class, 'svgIconsPage'])->name('svg-icons');
    Route::get('nioicon',[ComponentController::class, 'nioiconPage'])->name('nioicon');
    Route::get('chartjs',[ComponentController::class, 'chartjsPage'])->name('chartjs');
});

// Additional Routes
Route::get('/dark', [DashwindController::class, 'darkmode'])->name('dark');
