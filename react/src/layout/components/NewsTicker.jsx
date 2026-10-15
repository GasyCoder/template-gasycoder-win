import React from 'react';

const NewsTicker = () => {
    return (
        <a
            className="flex items-center transition-all duration-300"
            href="#link"
            onClick={(e) => e.preventDefault()}
        >
            <div className="inline-flex w-8 flex-shrink-0">
                <em className="text-primary-600 ni ni-card-view text-2xl leading-none"></em>
            </div>
            <div className="flex max-w-[calc(100%-theme(spacing.8))] items-center">
                <p className="w-[calc(100%-theme(spacing.8))] overflow-hidden text-sm font-medium text-ellipsis whitespace-nowrap text-slate-600 dark:text-slate-300">
                    Do you know the latest update of 2022?{' '}
                    <span className="font-normal text-slate-400 dark:text-slate-500">
                        {' '}
                        A overview of our is now available on YouTube
                    </span>
                </p>
                <em className="ni ni-external ms-1 text-slate-400"></em>
            </div>
        </a>
    );
};

export default NewsTicker;
