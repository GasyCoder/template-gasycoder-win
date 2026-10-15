import React from 'react';
import { Link } from 'react-router-dom';
import classNames from 'classnames';

import { useTheme } from '../context';
import SidebarToggle from '../components/SidebarToggle';
import NewsTicker from '../components/NewsTicker';
import LanguageDropdown from '../components/LanguageDropdown';
import UserDropdown from '../components/UserDropdown';
import NotificationDropdown from '../components/NotificationDropdown';

const Header = ({ className, sidebarVisibility, setSidebarVisibility }) => {
    const theme = useTheme();

    const headerClass = classNames({
        'nk-header fixed start-0 w-full h-16 top-0 z-[1021] transition-all duration-300 min-w-[320px]': true,
        [`dark`]: theme.header == 'dark',
        [`${className}`]: className,
    });

    return (
        <>
            <div className={headerClass}>
                <div className="h-16 border-b border-gray-200 bg-white px-1.5 sm:px-5 dark:border-gray-900 dark:bg-gray-950">
                    <div className="container max-w-none">
                        <div className="relative -mx-1 flex items-center">
                            <div className="-ms-1.5 me-4 px-1 xl:hidden">
                                <SidebarToggle
                                    icon="menu"
                                    onClick={() =>
                                        setSidebarVisibility(!sidebarVisibility)
                                    }
                                />
                            </div>
                            <div className="flex px-1 py-3.5 xl:hidden">
                                <Link
                                    to="/"
                                    className="relative inline-block h-9 transition-opacity duration-300"
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
                            <div className="hidden px-1 py-2 xl:block">
                                <NewsTicker />
                            </div>
                            <div className="ms-auto px-1 py-3.5">
                                <ul className="item-center -mx-1.5 flex sm:-mx-2.5">
                                    <li className="hidden px-1.5 sm:inline-flex sm:px-2.5">
                                        <LanguageDropdown />
                                    </li>
                                    <li className="inline-flex px-1.5 sm:px-2.5">
                                        <UserDropdown />
                                    </li>
                                    <li className="inline-flex px-1.5 sm:px-2.5">
                                        <NotificationDropdown />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
};

export default Header;
