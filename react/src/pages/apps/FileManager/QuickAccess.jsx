import React, { useState } from 'react';
import { Button, Icon } from '../../../componenets';
import { fileManagerIcons } from '../../../store/icons';

const QuickAccess = () => {
    const [show, setShow] = useState(true);
    const files = [
        {
            icon: fileManagerIcons.folderAlt,
            name: 'UI Design',
        },
        {
            icon: fileManagerIcons.folderAlt,
            name: 'DashWind Resource',
        },
        {
            icon: fileManagerIcons.folderAlt,
            name: 'Projects',
            ext: 'xlsx',
        },
        {
            icon: fileManagerIcons.fileZipAlt,
            name: 'All work',
            ext: 'zip',
        },
        {
            icon: fileManagerIcons.fileSheetAlt,
            name: 'Sales Reports',
            ext: 'xlsx',
        },
    ];
    return (
        <>
            <div className="relative flex items-center justify-between pb-3">
                <h6 className="font-heading text-base/tighter -tracking-snug font-bold text-slate-700 dark:text-white">
                    Quick Access
                </h6>
                <button
                    onClick={() => setShow(!show)}
                    className={`group text-primary-600 hover:text-primary-700 text-sm font-medium ${show ? 'active' : ''}`}
                >
                    <div className="block group-[.active]:hidden">Show</div>
                    <div className="hidden group-[.active]:block">Hide</div>
                </button>
            </div>
            <div className={`hidden [&.active]:block ${show ? 'active' : ''}`}>
                <div className="grid grid-flow-dense grid-cols-12 gap-4">
                    {files.map((item, index) => {
                        return (
                            <div
                                key={index}
                                className="group/fileitem xs:col-span-6 relative col-span-12 rounded border border-gray-300 bg-white sm:col-span-4 xl:col-span-3 2xl:col-span-2 dark:border-gray-900 dark:bg-gray-950"
                            >
                                <a
                                    href="#link"
                                    onClick={(e) => e.preventDefault()}
                                    className="block px-4 py-6"
                                >
                                    <div className="h-18 [&>svg]:mx-auto [&>svg]:h-full">
                                        {item.icon}
                                    </div>
                                    <div className="flex justify-center pt-4 text-center text-sm/snug font-medium">
                                        <span className="line-clamp-1">
                                            {item.name}
                                        </span>{' '}
                                        {item.ext && '.' + item.ext}
                                    </div>
                                </a>
                                <div className="hideable absolute end-2 top-2 transition-all duration-300 group-hover/fileitem:opacity-100 [&.hideable]:opacity-0">
                                    <Button.Zoom size="sm">
                                        <Icon
                                            className="text-base/none"
                                            name="cross"
                                        />
                                    </Button.Zoom>
                                </div>
                            </div>
                        );
                    })}
                </div>
            </div>
        </>
    );
};

export default QuickAccess;
