import React, { useState } from 'react';
import Simplebar from 'simplebar-react';
import { Link } from 'react-router-dom';
import classNames from 'classnames';
import Menu from './Menu';

import { useTheme } from '../context';
import SidebarToggle from '../components/SidebarToggle';
import { Icon } from '../../componenets';

const Sidebar = ({
    mobile,
    visibility,
    setVisibility,
    compact,
    setCompact,
}) => {
    const theme = useTheme();

    const [mouseEnter, setMouseEnter] = useState(false);

    const handleMouseEnter = () => setMouseEnter(true);
    const handleMouseLeave = () => setMouseEnter(false);

    const classes = classNames({
        'nk-sidebar group/sidebar peer fixed w-72 [&.is-compact:not(.has-hover)]:w-[74px] min-h-screen max-h-screen overflow-hidden h-full start-0 top-0 z-[1031] transition-[transform,width] duration-300 -translate-x-full rtl:translate-x-full xl:translate-x-0 xl:rtl:translate-x-0 [&.sidebar-visible]:translate-x-0': true,
        'sidebar-visible': visibility,
        'nk-sidebar-mobile': mobile,
        'is-compact': compact,
        'has-hover': compact && mouseEnter,
        [`dark`]: theme.sidebar === 'dark',
    });

    return (
        <>
            <div className={classes}>
                <div className="flex h-16 w-72 min-w-full items-center overflow-hidden border-e border-b border-gray-200 bg-white px-6 py-3 dark:border-gray-900 dark:bg-gray-950">
                    <div className="-ms-1 me-4">
                        <div className="hidden xl:block">
                            <a
                                href="#sidebar"
                                onClick={(ev) => {
                                    ev.preventDefault();
                                    setCompact(!compact);
                                }}
                                className="sidebar-compact-toggle relative isolate inline-flex h-9 w-9 items-center px-1.5 *:pointer-events-none before:absolute before:top-1/2 before:left-1/2 before:-z-[1] before:h-5 before:w-5 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-gray-200 before:opacity-0 before:transition-all before:duration-300 before:content-[''] hover:before:h-10 hover:before:w-10 hover:before:opacity-100 dark:before:bg-gray-900"
                            >
                                <Icon
                                    className="text-2xl text-slate-600 dark:text-slate-300"
                                    name="menu"
                                />
                            </a>
                        </div>
                        <div className="xl:hidden">
                            <SidebarToggle
                                icon="arrow-left"
                                onClick={() => setVisibility(!visibility)}
                            />
                        </div>
                    </div>
                    <div className="relative flex flex-shrink-0">
                        <Link
                            to="/home"
                            className="relative inline-block h-9 transition-opacity duration-300 group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0"
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
                </div>
                <div
                    onMouseEnter={handleMouseEnter}
                    onMouseLeave={handleMouseLeave}
                    className="nk-sidebar-body relative max-h-full w-full overflow-hidden border-e border-gray-200 bg-white dark:border-gray-900 dark:bg-gray-950"
                >
                    <div className="flex h-[calc(100vh-theme(spacing.16))] w-full flex-col">
                        <Simplebar className="h-full pt-4 pb-10">
                            <Menu setSidebarVisibility={setVisibility} />
                        </Simplebar>
                    </div>
                </div>
            </div>
            <div
                onClick={(ev) => {
                    ev.preventDefault();
                    setVisibility(false);
                }}
                className="sidebar-toggle bg-opacity-20 invisible fixed inset-0 z-[1030] bg-slate-950 opacity-0 peer-[.sidebar-visible]:visible peer-[.sidebar-visible]:opacity-100 xl:!invisible xl:!opacity-0"
            ></div>
        </>
    );
};

export default Sidebar;
