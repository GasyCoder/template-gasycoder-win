<?php

namespace App\Http\Controllers\Component;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class ComponentController extends Controller
{
    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function accordionsPage()
    {
        return view('pages.components.elements.accordions');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function alertsPage()
    {
        return view('pages.components.elements.alerts');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function avatarPage()
    {
        return view('pages.components.elements.avatar');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function badgesPage()
    {
        return view('pages.components.elements.badges');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function buttonsPage()
    {
        return view('pages.components.elements.buttons');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function buttonsGroupPage()
    {
        return view('pages.components.elements.buttons-group');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function breadcrumbPage()
    {
        return view('pages.components.elements.breadcrumb');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function cardsPage()
    {
        return view('pages.components.elements.cards');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function listDropdownPage()
    {
        return view('pages.components.elements.list-dropdown');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function modalsPage()
    {
        return view('pages.components.elements.modals');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function paginationPage()
    {
        return view('pages.components.elements.pagination');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function popoverPage()
    {
        return view('pages.components.elements.popover');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function progressPage()
    {
        return view('pages.components.elements.progress');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function spinnerPage()
    {
        return view('pages.components.elements.spinner');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function tabsPage()
    {
        return view('pages.components.elements.tabs');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function toastPage()
    {
        return view('pages.components.elements.toast');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function tooltipPage()
    {
        return view('pages.components.elements.tooltip');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function typographyPage()
    {
        return view('pages.components.elements.typography');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function formElementsPage()
    {
        return view('pages.components.forms.form-elements');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function checkboxRadioPage()
    {
        return view('pages.components.forms.checkbox-radio');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function advancedControlsPage()
    {
        return view('pages.components.forms.advanced-controls');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function inputGroupPage()
    {
        return view('pages.components.forms.input-group');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function formUploadPage()
    {
        return view('pages.components.forms.form-upload');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function datetimePickerPage()
    {
        return view('pages.components.forms.datetime-picker');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function numberSpinnerPage()
    {
        return view('pages.components.forms.number-spinner');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function nouisliderPage()
    {
        return view('pages.components.forms.nouislider');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function formLayoutsPage()
    {
        return view('pages.components.forms.form-layouts');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function formValidationPage()
    {
        return view('pages.components.forms.form-validation');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function basicTablePage()
    {
        return view('pages.components.tables.basic-table');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function dataTablePage()
    {
        return view('pages.components.tables.data-table');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function tailwindConfigPage()
    {
        return view('pages.components.tailwind-config');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function svgIconsPage()
    {
        return view('pages.components.svg-icons');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function nioiconPage()
    {
        return view('pages.components.nioicon');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function chartjsPage()
    {
        return view('pages.components.chartjs');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function componentsListPage()
    {
        return view('pages.components.components');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function cardWidgetsPage()
    {
        return view('pages.components.widgets.cards');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function chartWidgetsPage()
    {
        return view('pages.components.widgets.charts');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function ratingWidgetsPage()
    {
        return view('pages.components.widgets.ratings');
    }
}
