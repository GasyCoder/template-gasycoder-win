import React, { useState, useEffect } from 'react';
import { Head, Button, Form, Icon, Input } from '../../componenets';
import { Link } from 'react-router-dom';
import { Swiper, SwiperSlide } from 'swiper/react';
import { Pagination } from 'swiper/modules';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../layout/context';

const LanguageDropdown = ({ className }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? 'bottom-start' : 'bottom-end',
        modifiers: [
            { name: 'offset', options: { offset: [0, 0] } },
            { name: 'preventOverflow', options: { padding: 8 } },
        ],
    });
    return (
        <Menu
            as="div"
            className={`relative inline-flex ${className ? className : ''}`}
        >
            {({ open }) => (
                <>
                    <Menu.Button
                        as="div"
                        className={`inline-flex${open ? ' active' : ''}`}
                        ref={setDropdownToggle}
                    >
                        <button className="font-body text-primary-600 hover:text-primary-700 inline-flex items-center p-3 text-xs leading-none font-normal whitespace-nowrap transition-all duration-300">
                            <span>English</span>
                            <Icon className="ms-1 text-sm" name="chevron-up" />
                        </button>
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[140px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <img
                                        src="/images/flags/english.png"
                                        alt=""
                                        className="me-3 w-6"
                                    />
                                    <span>English</span>
                                </Menu.Item>
                            </li>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <img
                                        src="/images/flags/spanish.png"
                                        alt=""
                                        className="me-3 w-6"
                                    />
                                    <span>Español</span>
                                </Menu.Item>
                            </li>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <img
                                        src="/images/flags/french.png"
                                        alt=""
                                        className="me-3 w-6"
                                    />
                                    <span>Français</span>
                                </Menu.Item>
                            </li>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <img
                                        src="/images/flags/turkey.png"
                                        alt=""
                                        className="me-3 w-6"
                                    />
                                    <span>Türkçe</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const LoginPage = () => {
    const [passwordState, setPasswordState] = useState(false);
    const [pageAside, setPageAside] = useState(false);

    useEffect(() => {
        const handleAside = () => {
            if (window.innerWidth > 1023) {
                setPageAside(false);
            }
        };

        handleAside();
        window.addEventListener('resize', handleAside);
        return () => {
            window.removeEventListener('resize', handleAside);
        };
    }, []);

    return (
        <>
            <Head title="Login" />
            <div className="relative flex min-h-screen">
                <div className="relative flex min-h-full w-full flex-shrink-0 flex-col bg-white lg:w-[45%] dark:bg-gray-950">
                    <div className="absolute end-0 top-0 z-10 p-5 sm:p-11 lg:hidden">
                        <Button
                            onClick={() => {
                                setPageAside(!pageAside);
                            }}
                            icon
                            size="rg"
                            variant="white-outline"
                        >
                            <Icon className="text-xl" name="info" />
                        </Button>
                    </div>

                    <div className="m-auto w-full max-w-[420px] p-5 2xl:me-[90px]">
                        <div className="relative flex flex-shrink-0 pb-11">
                            <Link
                                to="/"
                                className="relative inline-block h-10 transition-opacity duration-300"
                            >
                                <img
                                    className="h-full opacity-0 dark:opacity-100"
                                    src="/logo.png"
                                    srcSet="/logo2x.png 2x"
                                    alt="logo"
                                />
                                <img
                                    className="absolute start-0 top-0 h-full opacity-100 dark:opacity-0"
                                    src="/logo-dark.png"
                                    srcSet="/logo-dark2x.png 2x"
                                    alt="logo"
                                />
                            </Link>
                        </div>
                        <div className="pb-5">
                            <h5 className="font-heading -tracking-snug leading-tighter mb-2 text-xl font-bold text-slate-700 dark:text-white">
                                Sign-In
                            </h5>
                            <p className="text-sm leading-6 text-slate-400">
                                Access the DashWind panel using your email and
                                passcode.
                            </p>
                        </div>
                        <form action="#">
                            <Form.Group>
                                <Form.Label
                                    className="mb-2 flex items-center justify-between"
                                    htmlFor="emailAddress"
                                >
                                    <span>Email or Username </span>
                                    <a
                                        href="#link"
                                        onClick={(e) => e.preventDefault()}
                                        className="font-body text-primary-500 hover:text-primary-600 inline-flex text-xs leading-none font-medium whitespace-nowrap transition-all duration-300"
                                    >
                                        Need Help?
                                    </a>
                                </Form.Label>
                                <Input.Wrap>
                                    <Input
                                        id="emailAddress"
                                        placeholder="Enter your email address or username"
                                        autoComplete="off"
                                        size="lg"
                                    />
                                </Input.Wrap>
                            </Form.Group>
                            <Form.Group>
                                <Form.Label
                                    className="mb-2 flex items-center justify-between"
                                    htmlFor="password"
                                >
                                    <span>Passcode </span>
                                    <Link
                                        to="/auths/auth-reset"
                                        className="font-body text-primary-500 hover:text-primary-600 inline-flex text-xs leading-none font-medium whitespace-nowrap transition-all duration-300"
                                    >
                                        Forgot Code?
                                    </Link>
                                </Form.Label>
                                <Input.Wrap>
                                    <a
                                        tabIndex="-1"
                                        href="#password"
                                        onClick={(ev) => {
                                            ev.preventDefault();
                                            setPasswordState(!passwordState);
                                        }}
                                        className={`js-password-toggle group/password absolute end-0 top-0 flex h-11 w-11 items-center justify-center ${passwordState ? '' : 'is-shown'}`}
                                    >
                                        <em className="ni ni-eye text-base leading-none text-slate-400 group-[.is-shown]/password:hidden"></em>
                                        <em className="ni ni-eye-off hidden text-base leading-none text-slate-400 group-[.is-shown]/password:block"></em>
                                    </a>
                                    <Input
                                        id="password"
                                        type={
                                            passwordState ? 'text' : 'password'
                                        }
                                        placeholder="Enter your passcode"
                                        autoComplete="off"
                                        size="lg"
                                    />
                                </Input.Wrap>
                            </Form.Group>
                            <Form.Group>
                                <Button
                                    as="Link"
                                    to="/"
                                    size="lg"
                                    variant="primary"
                                    block
                                >
                                    Sign In
                                </Button>
                            </Form.Group>
                        </form>
                        <div className="pt-6">
                            New on our platform?
                            <Link
                                className="text-primary-500 hover:text-primary-600 transition-all duration-300"
                                to="/auths/auth-register"
                            >
                                {' '}
                                Create an account
                            </Link>
                        </div>
                        <div className="pt-6 pb-4 text-center">
                            <h6 className="text-xxs tracking-relaxed relative inline-block px-1.5 leading-tight font-bold whitespace-nowrap text-slate-300 uppercase before:absolute before:end-full before:top-1/2 before:h-px before:w-5 before:-translate-y-1/2 before:bg-slate-300 after:absolute after:start-full after:top-1/2 after:h-px after:w-5 after:-translate-y-1/2 after:bg-slate-300">
                                Or
                            </h6>
                        </div>
                        <ul className="flex flex-wrap justify-center gap-x-6">
                            <li>
                                <a
                                    className="font-body text-primary-600 hover:text-primary-700 inline-flex px-4 py-3 text-sm leading-none font-normal whitespace-nowrap transition-all duration-300"
                                    href="#link"
                                    onClick={(e) => e.preventDefault()}
                                >
                                    Facebook
                                </a>
                            </li>
                            <li>
                                <a
                                    className="font-body text-primary-600 hover:text-primary-700 inline-flex px-4 py-3 text-sm leading-none font-normal whitespace-nowrap transition-all duration-300"
                                    href="#link"
                                    onClick={(e) => e.preventDefault()}
                                >
                                    Google
                                </a>
                            </li>
                        </ul>
                        <div className="mt-10 text-center">
                            I don't have an account?
                            <Link
                                className="text-primary-500 hover:text-primary-600 transition-all duration-300"
                                to="/auths/auth-register"
                            >
                                {' '}
                                Try 15 days free
                            </Link>
                        </div>
                    </div>
                    <div className="mx-auto w-full max-w-[420px] px-5 pt-7 pb-10 2xl:me-[90px]">
                        <ul className="relative -m-3 flex flex-wrap items-center">
                            <li>
                                <Link
                                    className="font-body text-primary-600 hover:text-primary-700 inline-flex p-3 text-sm leading-none font-normal whitespace-nowrap transition-all duration-300"
                                    to="/terms-policy"
                                >
                                    Terms &amp; Condition
                                </Link>
                            </li>
                            <li>
                                <Link
                                    className="font-body text-primary-600 hover:text-primary-700 inline-flex p-3 text-sm leading-none font-normal whitespace-nowrap transition-all duration-300"
                                    to="/terms-policy"
                                >
                                    Privacy Policy
                                </Link>
                            </li>
                            <li>
                                <Link
                                    className="font-body text-primary-600 hover:text-primary-700 inline-flex p-3 text-sm leading-none font-normal whitespace-nowrap transition-all duration-300"
                                    to="/faqs"
                                >
                                    Help
                                </Link>
                            </li>
                            <li>
                                <LanguageDropdown />
                            </li>
                        </ul>
                        <div className="mt-4.5">
                            <p>&copy; 2025 DashWind. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
                <div
                    id="pageAside"
                    className={`peer fixed end-0 top-0 z-[999] flex min-h-screen w-full max-w-[calc(100%-2.5rem)] min-w-[260px] flex-shrink flex-grow translate-x-full flex-col bg-gray-50 transition-transform duration-500 lg:static lg:transform-none lg:transition-none rtl:-translate-x-full lg:rtl:transform-none dark:bg-gray-900 [&.active]:transform-none ${pageAside ? 'active' : ''}`}
                >
                    <div className="m-auto w-full max-w-[550px] p-4 sm:p-11">
                        <Swiper
                            dir="rtl"
                            modules={[Pagination]}
                            pagination={{ clickable: true }}
                            slidesPerView={1}
                            className="[&>.swiper-pagination]:relative [&>.swiper-pagination]:flex [&>.swiper-pagination]:justify-center [&>.swiper-pagination]:gap-1 [&>.swiper-pagination]:pt-6 [&>.swiper-pagination_.swiper-pagination-bullet]:bg-gray-300 [&>.swiper-pagination_.swiper-pagination-bullet]:opacity-100 [&>.swiper-pagination_.swiper-pagination-bullet.swiper-pagination-bullet-active]:bg-slate-400"
                        >
                            <SwiperSlide>
                                <div className="text-center">
                                    <img
                                        src="/images/slides/promo-a.png"
                                        srcSet="/images/slides/promo-a2x.png 2x"
                                        alt=""
                                    />
                                    <div className="py-6 sm:p-11">
                                        <h4 className="font-heading leading-tighter mb-2 text-xl font-bold -tracking-tight text-slate-700 lg:text-2xl dark:text-white">
                                            DashWind
                                        </h4>
                                        <p>
                                            You can start to create your
                                            products easily with its
                                            user-friendly design &amp; most
                                            completed responsive layout.
                                        </p>
                                    </div>
                                </div>
                            </SwiperSlide>
                            <SwiperSlide>
                                <div className="text-center">
                                    <img
                                        src="/images/slides/promo-b.png"
                                        srcSet="/images/slides/promo-b2x.png 2x"
                                        alt=""
                                    />
                                    <div className="py-6 sm:p-11">
                                        <h4 className="font-heading leading-tighter mb-2 text-xl font-bold -tracking-tight text-slate-700 lg:text-2xl dark:text-white">
                                            DashWind
                                        </h4>
                                        <p>
                                            You can start to create your
                                            products easily with its
                                            user-friendly design &amp; most
                                            completed responsive layout.
                                        </p>
                                    </div>
                                </div>
                            </SwiperSlide>
                            <SwiperSlide>
                                <div className="text-center">
                                    <img
                                        src="/images/slides/promo-c.png"
                                        srcSet="/images/slides/promo-c2x.png 2x"
                                        alt=""
                                    />
                                    <div className="py-6 sm:p-11">
                                        <h4 className="font-heading leading-tighter mb-2 text-xl font-bold -tracking-tight text-slate-700 lg:text-2xl dark:text-white">
                                            DashWind
                                        </h4>
                                        <p>
                                            You can start to create your
                                            products easily with its
                                            user-friendly design &amp; most
                                            completed responsive layout.
                                        </p>
                                    </div>
                                </div>
                            </SwiperSlide>
                        </Swiper>
                    </div>
                </div>
                <div
                    onClick={() => {
                        setPageAside(false);
                    }}
                    className="class-toggle bg-opacity-20 invisible fixed inset-0 z-[900] bg-slate-950 opacity-0 peer-[.active]:visible peer-[.active]:opacity-100 lg:!invisible lg:!opacity-0"
                ></div>
            </div>
        </>
    );
};
export default LoginPage;
