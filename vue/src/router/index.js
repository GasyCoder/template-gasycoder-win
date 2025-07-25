import { createRouter, createWebHistory } from 'vue-router'
import BlankPage from '@/views/Blank.vue'
import AnalyticsPage from "@/views/dashboard/Analytics/index.vue";
import CopywriterPage from "@/views/dashboard/Copywriter/index.vue";
import CryptoPage from "@/views/dashboard/Crypto/index.vue";
import EcommercePage from "@/views/dashboard/Ecommerce/index.vue";
import InvestPage from "@/views/dashboard/Invest/index.vue";
import SalesPage from "@/views/dashboard/Sales/index.vue";

import ComponentListPage from "@/views/components/index.vue";
import AlertsPage from "@/views/components/elements/Alerts.vue";
import AccordionsPage from "@/views/components/elements/Accordions.vue";
import AvatarsPage from "@/views/components/elements/Avatars.vue";
import BadgesPage from "@/views/components/elements/Badges.vue";
import ButtonsPage from "@/views/components/elements/Buttons.vue";
import BreadcrumbPage from "@/views/components/elements/Breadcrumb.vue";
import ButtonGroupPage from "@/views/components/elements/ButtonGroup.vue";
import CardsPage from "@/views/components/elements/Cards.vue";
import DropdownsPage from "@/views/components/elements/Dropdowns.vue";
import ModalsPage from "@/views/components/elements/Modals.vue";
import PaginationsPage from "@/views/components/elements/Paginations.vue";
import PopoversPage from "@/views/components/elements/Popovers.vue";
import ProgressPage from "@/views/components/elements/Progress.vue";
import SpinnersPage from "@/views/components/elements/Spinners.vue";
import TabsPage from "@/views/components/elements/Tabs.vue";
import ToastsPage from "@/views/components/elements/Toasts.vue";
import TooltipsPage from "@/views/components/elements/Tooltips.vue";
import TypographyPage from "@/views/components/elements/Typography.vue";
import AdvancedControlsPage from "@/views/components/forms/AdvancedControls.vue";
import CheckboxRadioPage from "@/views/components/forms/CheckboxRadio.vue";
import DateTimePickerPage from "@/views/components/forms/DateTimePicker.vue";
import FormElementsPage from "@/views/components/forms/FormElements.vue";
import FormLayoutsPage from "@/views/components/forms/FormLayouts.vue";
import FormUploadPage from "@/views/components/forms/FormUpload.vue";
import FormValidationPage from "@/views/components/forms/FormValidation.vue";
import InputGroupPage from "@/views/components/forms/InputGroup.vue";
import NoUiSliderPage from "@/views/components/forms/NoUiSlider.vue";
import NumberSpinnerPage from "@/views/components/forms/NumberSpinner.vue";
import BasicTablesPage from "@/views/components/tables/BasicTables.vue";
import DataTablesPage from "@/views/components/tables/DataTables.vue";
import CardsWidgetsPage from "@/views/components/widgets/CardsWidgets.vue";
import ChartsWidgetsPage from "@/views/components/widgets/ChartsWidgets.vue";
import RatingsWidgetsPage from "@/views/components/widgets/RatingsWidgets.vue";
import ChartJsPage from "@/views/components/ChartJs.vue";
import NioIconsPage from "@/views/components/NioIcons.vue";
import SvgIconsPage from "@/views/components/SvgIcons.vue";
import TailwindConfigPage from "@/views/components/TailwindConfig.vue";

import MessagesPage from "@/views/apps/Messages/index.vue";
import InboxPage from "@/views/apps/Inbox/index.vue";
import FileManagerPage from "@/views/apps/FileManager/index.vue";
import ChatsPage from "@/views/apps/Chats/index.vue";

import ProjectsCardPage from "@/views/pre-built/projects/CardView.vue";
import ProjectsListPage from "@/views/pre-built/projects/ListView.vue";

import ProductsListPage from "@/views/pre-built/products/ListView.vue";
import ProductsCardPage from "@/views/pre-built/products/CardView.vue";
import ProductsDetailsPage from "@/views/pre-built/products/Details.vue";

import InvoiceListPage from "@/views/pre-built/invoice/ListView.vue";
import InvoiceDetailsPage from "@/views/pre-built/invoice/Details.vue";
import InvoicePrintPage from "@/views/pre-built/invoice/Print.vue";

import CustomersListPage from "@/views/pre-built/customers/ListView.vue";
import CustomersDetailsPage from "@/views/pre-built/customers/Details.vue";

import KYCListPage from "@/views/pre-built/KYCs/ListView.vue";
import KYCDetailsPage from "@/views/pre-built/KYCs/Details.vue";

import UsersListPage from "@/views/pre-built/users/ListView.vue";
import UsersListCompactPage from "@/views/pre-built/users/ListViewCompact.vue";
import UsersCardPage from "@/views/pre-built/users/CardView.vue";
import UserDetailsPage from "@/views/pre-built/users/Details.vue";
import UserProfilePage from "@/views/pre-built/users/Profile/index.vue";

import PricingTablePage from "@/views/pre-built/PricingTable.vue";
import ImageGalleryPage from "@/views/pre-built/ImageGallery.vue";

import Error404Page from "@/views/errors/404.vue";
import Error404ModernPage from "@/views/errors/404Modern.vue";
import Error504Page from "@/views/errors/504.vue";
import Error504ModernPage from "@/views/errors/504Modern.vue";

import LoginPage from "@/views/auths/Login.vue";
import LoginV2Page from "@/views/auths/LoginV2.vue";
import LoginV3Page from "@/views/auths/LoginV3.vue";
import RegisterPage from "@/views/auths/Register.vue";
import RegisterV2Page from "@/views/auths/RegisterV2.vue";
import RegisterV3Page from "@/views/auths/RegisterV3.vue";
import ForgotPage from "@/views/auths/Forgot.vue";
import ForgotV2Page from "@/views/auths/ForgotV2.vue";
import ForgotV3Page from "@/views/auths/ForgotV3.vue";
import SuccessPage from "@/views/auths/Success.vue";
import SuccessV2Page from "@/views/auths/SuccessV2.vue";
import SuccessV3Page from "@/views/auths/SuccessV3.vue";

import FaqsPage from "@/views/misc/Faqs.vue";
import TermsPolicyPage from "@/views/misc/TermsPolicy.vue";
import RegularV1Page from "@/views/misc/RegularV1.vue";
import RegularV2Page from "@/views/misc/RegularV2.vue";

const router = createRouter({
  scrollBehavior() {
    return { top: 0 }
  },
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      alias: '/home',
      name: 'home-page',
      component: EcommercePage,
    },
    {
      path: '/copywriter',
      name: 'copywriter-page',
      component: CopywriterPage,
    },
    {
      path: '/sales',
      name: 'sales-page',
      component: SalesPage,
    },
    {
      path: '/crypto',
      name: 'crypto-page',
      component: CryptoPage,
    },
    {
      path: '/analytics',
      name: 'analytics-page',
      component: AnalyticsPage,
    },
    {
      path: '/invest',
      name: 'invest-page',
      component: InvestPage,
    },
    {
      path: '/_blank',
      name: 'blank-page',
      component: BlankPage,
    },
    {
      path: '/project-card',
      name: 'project-card-page',
      component: ProjectsCardPage,
    },
    {
      path: '/project-list',
      name: 'project-list-page',
      component: ProjectsListPage,
    },
    {
      path: '/user-list-regular',
      name: 'user-list-regular-page',
      component: UsersListPage,
    },
    {
      path: '/user-list-compact',
      name: 'user-list-compact-page',
      component: UsersListCompactPage,
    },
    {
      path: '/user-details/:id',
      name: 'user-details-page',
      component: UserDetailsPage,
    },
    {
      path: '/user-profile-regular',
      name: 'user-profile-regular-page',
      component: UserProfilePage,
    },
    {
      path: '/user-card',
      name: 'user-card-page',
      component: UsersCardPage,
    },
    {
      path: '/customer-list',
      name: 'customer-list-page',
      component: CustomersListPage,
    },
    {
      path: '/customer-details/:id',
      name: 'customer-details-page',
      component: CustomersDetailsPage,
    },
    {
      path: '/kyc-list',
      name: 'kyc-list-page',
      component: KYCListPage,
    },
    {
      path: '/kyc-details/:id',
      name: 'kyc-details-page',
      component: KYCDetailsPage,
    },
    {
      path: '/apps-messages',
      name: 'apps-messages-page',
      component: MessagesPage,
    },
    {
      path: '/apps-inbox',
      name: 'apps-inbox-page',
      component: InboxPage,
    },
    {
      path: '/apps-file-manager',
      name: 'apps-file-manager-page',
      component: FileManagerPage,
    },
    {
      path: '/apps-chats',
      name: 'apps-chats-page',
      component: ChatsPage,
    },
    {
      path: '/invoice-list',
      name: 'invoice-list-page',
      component: InvoiceListPage,
    },
    {
      path: '/invoice-details/:id',
      name: 'invoice-details-page',
      component: InvoiceDetailsPage,
    },
    {
      path: '/invoice-print/:id',
      name: 'invoice-print-page',
      component: InvoicePrintPage,
    },
    {
      path: '/product-list',
      name: 'product-list-page',
      component: ProductsListPage,
    },
    {
      path: '/product-card',
      name: 'product-card-page',
      component: ProductsCardPage,
    },
    {
      path: '/product-details/:id',
      name: 'product-details-page',
      component: ProductsDetailsPage,
    },
    {
      path: '/pricing-table',
      name: 'pricing-table-page',
      component: PricingTablePage,
    },
    {
      path: '/gallery',
      name: 'gallery-page',
      component: ImageGalleryPage,
    },
    {
      path: '/auths/auth-login',
      name: 'auth-login-page',
      component: LoginPage,
    },
    {
      path: '/auths/auth-register',
      name: 'auth-register-page',
      component: RegisterPage,
    },
    {
      path: '/auths/auth-reset',
      name: 'auth-reset-page',
      component: ForgotPage,
    },
    {
      path: '/auths/auth-success',
      name: 'auth-success-page',
      component: SuccessPage,
    },
    {
      path: '/auths/auth-login-v2',
      name: 'auth-login-v2-page',
      component: LoginV2Page,
    },
    {
      path: '/auths/auth-register-v2',
      name: 'auth-register-v2-page',
      component: RegisterV2Page,
    },
    {
      path: '/auths/auth-reset-v2',
      name: 'auth-reset-v2-page',
      component: ForgotV2Page,
    },
    {
      path: '/auths/auth-success-v2',
      name: 'auth-success-v2-page',
      component: SuccessV2Page,
    },
    {
      path: '/auths/auth-login-v3',
      name: 'auth-login-v3-page',
      component: LoginV3Page,
    },
    {
      path: '/auths/auth-register-v3',
      name: 'auth-register-v3-page',
      component: RegisterV3Page,
    },
    {
      path: '/auths/auth-reset-v3',
      name: 'auth-reset-v3-page',
      component: ForgotV3Page,
    },
    {
      path: '/auths/auth-success-v3',
      name: 'auth-success-v3-page',
      component: SuccessV3Page,
    },
    {
      path: '/errors/404-classic',
      name: 'errors-404-classic-page',
      component: Error404Page,
    },
    {
      path: '/errors/504-classic',
      name: 'errors-504-classic-page',
      component: Error504Page,
    },
    {
      path: '/errors/404-modern',
      name: 'errors-404-modern-page',
      component: Error404ModernPage,
    },
    {
      path: '/errors/504-modern',
      name: 'errors-504-modern-page',
      component: Error504ModernPage,
    },
    {
      path: '/faqs',
      name: 'faqs-page',
      component: FaqsPage,
    },
    {
      path: '/terms-policy',
      name: 'terms-policy-page',
      component: TermsPolicyPage,
    },
    {
      path: '/regular-v1',
      name: 'regular-v1-page',
      component: RegularV1Page,
    },
    {
      path: '/regular-v2',
      name: 'regular-v2-page',
      component: RegularV2Page,
    },
    {
      path: '/components/elements/alerts',
      name: 'components-alerts-page',
      component: AlertsPage,
    },
    {
      path: '/components/elements/accordions',
      name: 'components-accordions-page',
      component: AccordionsPage,
    },
    {
      path: '/components/elements/avatar',
      name: 'components-avatar-page',
      component: AvatarsPage,
    },
    {
      path: '/components/elements/badges',
      name: 'components-badges-page',
      component: BadgesPage,
    },
    {
      path: '/components/elements/buttons',
      name: 'components-buttons-page',
      component: ButtonsPage,
    },
    {
      path: '/components/elements/buttons-group',
      name: 'components-buttons-group-page',
      component: ButtonGroupPage,
    },
    {
      path: '/components/elements/breadcrumb',
      name: 'components-breadcrumb-page',
      component: BreadcrumbPage,
    },
    {
      path: '/components/elements/cards',
      name: 'components-cards-page',
      component: CardsPage,
    },
    {
      path: '/components/elements/list-dropdown',
      name: 'components-list-dropdown-page',
      component: DropdownsPage,
    },
    {
      path: '/components/elements/modals',
      name: 'components-modals-page',
      component: ModalsPage,
    },
    {
      path: '/components/elements/pagination',
      name: 'components-pagination-page',
      component: PaginationsPage,
    },
    {
      path: '/components/elements/popover',
      name: 'components-popover-page',
      component: PopoversPage,
    },
    {
      path: '/components/elements/progress',
      name: 'components-progress-page',
      component: ProgressPage,
    },
    {
      path: '/components/elements/spinner',
      name: 'components-spinner-page',
      component: SpinnersPage,
    },
    {
      path: '/components/elements/tabs',
      name: 'components-tabs-page',
      component: TabsPage,
    },
    {
      path: '/components/elements/toast',
      name: 'components-toast-page',
      component: ToastsPage,
    },
    {
      path: '/components/elements/tooltip',
      name: 'components-tooltip-page',
      component: TooltipsPage,
    },
    {
      path: '/components/elements/typography',
      name: 'components-typography-page',
      component: TypographyPage,
    },
    {
      path: '/components/forms/form-elements',
      name: 'components-form-elements-page',
      component: FormElementsPage,
    },
    {
      path: '/components/forms/checkbox-radio',
      name: 'components-checkbox-radio-page',
      component: CheckboxRadioPage,
    },
    {
      path: '/components/forms/advanced-controls',
      name: 'components-advanced-controls-page',
      component: AdvancedControlsPage,
    },
    {
      path: '/components/forms/input-group',
      name: 'components-input-group-page',
      component: InputGroupPage,
    },
    {
      path: '/components/forms/form-upload',
      name: 'components-form-upload-page',
      component: FormUploadPage,
    },
    {
      path: '/components/forms/datetime-picker',
      name: 'components-datetime-picker-page',
      component: DateTimePickerPage,
    },
    {
      path: '/components/forms/number-spinner',
      name: 'components-number-spinner-page',
      component: NumberSpinnerPage,
    },
    {
      path: '/components/forms/nouislider',
      name: 'components-nouislider-page',
      component: NoUiSliderPage,
    },
    {
      path: '/components/forms/form-layouts',
      name: 'components-form-layouts-page',
      component: FormLayoutsPage,
    },
    {
      path: '/components/forms/form-validation',
      name: 'components-form-validation-page',
      component: FormValidationPage,
    },
    {
      path: '/components/tables/basic-table',
      name: 'components-basic-table-page',
      component: BasicTablesPage,
    },
    {
      path: '/components/tables/data-table',
      name: 'components-data-table-page',
      component: DataTablesPage,
    },
    {
      path: '/components/widgets/cards',
      name: 'widgets-cards-page',
      component: CardsWidgetsPage,
    },
    {
      path: '/components/widgets/charts',
      name: 'widgets-charts-page',
      component: ChartsWidgetsPage,
    },
    {
      path: '/components/widgets/ratings',
      name: 'widgets-ratings-page',
      component: RatingsWidgetsPage,
    },
    {
      path: '/components/tailwind-config',
      name: 'components-tailwind-config-page',
      component: TailwindConfigPage,
    },
    {
      path: '/components/chartjs',
      name: 'components-chartjs-page',
      component: ChartJsPage,
    },
    {
      path: '/components/svg-icons',
      name: 'components-svg-icons-page',
      component: SvgIconsPage,
    },
    {
      path: '/components/nioicon',
      name: 'components-nioicon-page',
      component: NioIconsPage,
    },
    {
      path: '/components',
      name: 'components-page',
      component: ComponentListPage,
    },
  ],
})

export default router   