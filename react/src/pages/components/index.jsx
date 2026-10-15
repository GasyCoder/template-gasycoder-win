import React from 'react';
import { Block, Head, Icon } from '../../componenets';
import { Link } from 'react-router-dom';

const ComponentList = () => {
    const data = [
        {
            title: 'Alerts',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/elements/alerts',
        },
        {
            title: 'Accordions',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/elements/accordions',
        },
        {
            title: 'Avatar',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/elements/avatar',
        },
        {
            title: 'Badges',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/elements/badges',
        },
        {
            title: 'Buttons',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/elements/buttons',
        },
        {
            title: 'Button Group',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/elements/buttons-group',
        },
        {
            title: 'Breadcrumb',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/elements/breadcrumb',
        },
        {
            title: 'Cards',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/elements/cards',
        },
        {
            title: 'Dropdowns',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/elements/list-dropdown',
        },
        {
            title: 'Modals',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/elements/modals',
        },
        {
            title: 'Pagination',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/elements/pagination',
        },
        {
            title: 'Popover',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/elements/popover',
        },
        {
            title: 'Progress',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/elements/progress',
        },
        {
            title: 'Spinner',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/elements/spinner',
        },
        {
            title: 'Tabs',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/elements/tabs',
        },
        {
            title: 'Toasts',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/elements/toast',
        },
        {
            title: 'Tooltip',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/elements/tooltip',
        },
        {
            title: 'Basic Tables',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/tables/basic-table',
        },
        {
            title: 'Datatables',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/tables/data-table',
        },
        {
            title: 'Form Elements',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/forms/form-elements',
        },
        {
            title: 'Form Upload',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/forms/form-upload',
        },
        {
            title: 'Checkbox Radio',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/forms/checkbox-radio',
        },
        {
            title: 'Advanced Control',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/forms/advanced-controls',
        },
        {
            title: 'Date & Time Picker',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/forms/datetime-picker',
        },
        {
            title: 'Form Validation',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/forms/form-validation',
        },
        {
            title: 'Chart JS',
            desc: 'A Handful and flexible alert messages examples.',
            link: '/components/chartjs',
        },
    ];
    return (
        <>
            <Head title="Components" />
            <div className="mx-auto lg:max-w-[960px]">
                <Block.PageHead className="md:max-w-[720px]">
                    <Block.Back to="/home">Dashboard</Block.Back>
                    <Block.TitleLg>Components</Block.TitleLg>
                    <Block.LeadText>
                        <strong>Dashwind </strong> includes all the necessary
                        components and elements with utility classes that helps
                        you to create your web apps or application faster.
                    </Block.LeadText>
                </Block.PageHead>
                <Block>
                    <div className="-m-3.5 flex flex-wrap">
                        {data.map((item, index) => (
                            <div key={index} className="w-full p-3.5 lg:w-1/2">
                                <Link
                                    to={item.link}
                                    className="group relative block h-full overflow-hidden rounded-md border border-gray-300 bg-white p-6 dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <div className="flex items-center justify-between">
                                        <div>
                                            <h6 className="font-heading text-base/tighter -tracking-snug mb-1 font-bold text-slate-700 dark:text-white">
                                                {item.title}
                                            </h6>
                                            <p className="text-sm text-slate-400">
                                                {item.desc}
                                            </p>
                                        </div>
                                        <div className="-me-2">
                                            <span className="relative isolate inline-flex h-9 w-9 items-center justify-center px-1.5 before:absolute before:top-1/2 before:left-1/2 before:-z-[1] before:h-5 before:w-5 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-gray-200 before:opacity-0 before:transition-all before:duration-300 before:content-[''] group-hover:before:h-10 group-hover:before:w-10 group-hover:before:opacity-100 hover:before:h-10 hover:before:w-10 hover:before:opacity-100 dark:before:bg-gray-900">
                                                <Icon
                                                    className="text-xl/none rtl:-scale-x-100"
                                                    name="chevron-right"
                                                ></Icon>
                                            </span>
                                        </div>
                                    </div>
                                </Link>
                            </div>
                        ))}
                    </div>
                </Block>
            </div>
        </>
    );
};

export default ComponentList;
