import React from 'react';
import LanguageDropdown from '../components/LanguageDropdownAlt';
import RegionModal from '../components/RegionModal';

const Footer = () => {
    return (
        <>
            <div className="mt-auto w-full min-w-[320px] border-t border-gray-200 bg-white px-1.5 py-5 sm:px-5 dark:border-gray-900 dark:bg-gray-950">
                <div className="container max-w-none">
                    <div className="flex flex-wrap items-center justify-between">
                        <div className="pb-1 text-sm text-slate-500 sm:pb-0">
                            {' '}
                            &copy; 2025 DashWind. Template by{' '}
                            <a
                                className="hover:text-primary-500"
                                href="https://softnio.com"
                                target="_blank"
                            >
                                Softnio
                            </a>
                        </div>
                        <ul className="-mx-3.5 -my-2 flex flex-wrap">
                            <li className="inline-flex">
                                <LanguageDropdown />
                            </li>
                            <li>
                                <RegionModal />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </>
    );
};

export default Footer;
