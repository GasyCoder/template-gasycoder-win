import React from 'react';
import classNames from 'classnames';
import {
    useAccordion,
    useAccordionProvider,
    AccordionProvider,
    AccordionItem as Item,
} from '@szhsin/react-accordion';

function Accordion({ className, children }) {
    const providerValue = useAccordionProvider({
        // Omit these two options if you don't want to implement any transition
        transition: true,
        transitionTimeout: 200,
    });
    const { accordionProps } = useAccordion();

    const compClass = classNames({
        'accordion rounded border border-gray-200 dark:border-gray-800': true,
        [`${className}`]: className,
    });
    return (
        <AccordionProvider value={providerValue}>
            <div className={compClass} {...accordionProps}>
                {children}
            </div>
        </AccordionProvider>
    );
}

export default Accordion;

function AccordionItem({
    header,
    buttonClass,
    buttonActiveClass,
    panelClass,
    className,
    ...rest
}) {
    const btnClass = classNames({
        'accordion-toggle relative block text-start ps-6 pe-12 py-4 border-gray-200 dark:border-gray-800 w-full': true,
        [`${buttonClass}`]: buttonClass,
    });
    const btnActiveClass = classNames({
        'border-b': true,
        [`${buttonActiveClass}`]: buttonActiveClass,
    });
    const pnlClass = classNames({
        'accordion-body px-6 pt-4 pb-5': true,
        [`${panelClass}`]: panelClass,
    });
    const mainClass = classNames({
        'accordion-item border-t border-gray-300 dark:border-gray-900 first:border-t-0 group': true,
        [`${className}`]: className,
    });
    return (
        <Item
            {...rest}
            header={({ state: { isEnter } }) => (
                <>
                    <h6
                        className={`text-base font-bold ${isEnter ? 'text-slate-700 dark:text-white' : 'text-slate-600 dark:text-slate-300'}`}
                    >
                        {header}
                    </h6>
                    <em
                        className={`ni ni-chevron-down absolute end-6 top-1/2 h-5 w-5 -translate-y-1/2 text-center text-base leading-5 font-bold text-slate-700 transition-all duration-300 dark:text-white ${isEnter ? 'rotate-180' : ''}`}
                    ></em>
                </>
            )}
            className={mainClass}
            buttonProps={{
                className: ({ isEnter }) =>
                    `${btnClass} ${isEnter && btnActiveClass}`,
            }}
            contentProps={{
                className: 'transition-height duration-200 ease-in-out',
            }}
            panelProps={{ className: pnlClass }}
        />
    );
}

Accordion.Item = AccordionItem;
