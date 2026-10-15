import React, { useState } from 'react';
import {
    Button,
    Icon,
    PageHead,
    Progress,
    Avatar,
    Badge,
    Head,
} from '../../../componenets';
import { projects } from '../../../store/projects';
import { toInitials } from '../../../utilities';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

const ActionDropdown = ({ className }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? 'bottom-start' : 'bottom-end',
        modifiers: [
            {
                name: 'offset',
                options: {
                    offset: theme.direction === 'rtl' ? [14, -8] : [-14, -8],
                },
            },
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
                        <Button.Zoom size="md" className="-me-2 -mt-2">
                            <Icon className="text-xl" name="more-h" />
                        </Button.Zoom>
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[180px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul className="py-2">
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-lg/none opacity-80"
                                        name="eye"
                                    />
                                    <span>View Project</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-lg/none opacity-80"
                                        name="edit"
                                    />
                                    <span>Edit Project</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-lg/none opacity-80"
                                        name="check-round-cut"
                                    />
                                    <span>Mark As Done</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const ProjectsCardPage = () => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? 'bottom-start' : 'bottom-end',
        modifiers: [
            { name: 'offset', options: { offset: [0, 4] } },
            { name: 'preventOverflow', options: { padding: 8 } },
        ],
    });
    return (
        <>
            <Head title="Project Card" />
            <PageHead>
                <PageHead.Group>
                    <PageHead.Title>Projects</PageHead.Title>
                    <PageHead.SubTitle>
                        You have total 95 projects.
                    </PageHead.SubTitle>
                </PageHead.Group>
                <PageHead.Group>
                    <PageHead.Option>
                        <ul className="flex items-center gap-4 px-3.5 py-5 sm:py-0">
                            <li>
                                <Menu as="div" className="relative inline-flex">
                                    {({ open }) => (
                                        <>
                                            <Menu.Button
                                                as="div"
                                                className={`inline-flex${open ? ' active' : ''}`}
                                                ref={setDropdownToggle}
                                            >
                                                <Button
                                                    size="rg"
                                                    variant="white-outline"
                                                >
                                                    <Icon
                                                        className="me-3 text-xl/4.5"
                                                        name="filter-alt"
                                                    />
                                                    <span className="me-4">
                                                        Filtered By
                                                    </span>
                                                    <Icon
                                                        className="text-xl/4.5 rtl:-scale-x-100"
                                                        name="chevron-right"
                                                    />
                                                </Button>
                                            </Menu.Button>
                                            <Menu.Items
                                                modal={false}
                                                ref={setDropdownContent}
                                                style={styles.popper}
                                                {...attributes.popper}
                                                className="absolute z-[1000] min-w-[180px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                                            >
                                                <ul className="py-2">
                                                    <li>
                                                        <Menu.Item
                                                            as="button"
                                                            className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                        >
                                                            <span>
                                                                Last 30 Days
                                                            </span>
                                                        </Menu.Item>
                                                    </li>
                                                    <li>
                                                        <Menu.Item
                                                            as="button"
                                                            className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                        >
                                                            <span>
                                                                Last 6 Months
                                                            </span>
                                                        </Menu.Item>
                                                    </li>
                                                    <li>
                                                        <Menu.Item
                                                            as="button"
                                                            className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                        >
                                                            <span>
                                                                Last 1 Years
                                                            </span>
                                                        </Menu.Item>
                                                    </li>
                                                </ul>
                                            </Menu.Items>
                                        </>
                                    )}
                                </Menu>
                            </li>
                            <li className="ms-auto">
                                <Button
                                    href="#link"
                                    onClick={(e) => e.preventDefault()}
                                    size="rg"
                                    variant="primary"
                                    className="hidden sm:inline-flex"
                                >
                                    <Icon className="text-xl/4.5" name="plus" />
                                    <span className="ms-3">Add Project</span>
                                </Button>
                                <Button
                                    href="#link"
                                    onClick={(e) => e.preventDefault()}
                                    size="rg"
                                    variant="primary"
                                    icon
                                    className="sm:hidden"
                                >
                                    <Icon className="text-xl/4.5" name="plus" />
                                </Button>
                            </li>
                        </ul>
                    </PageHead.Option>
                </PageHead.Group>
            </PageHead>
            <div className="grid grid-flow-dense grid-cols-12 gap-7">
                {projects.map((item, index) => {
                    return (
                        <div
                            key={index}
                            className="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3"
                        >
                            <div className="h-full rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                <div className="p-5 sm:p-6">
                                    <div className="mb-5 flex items-start justify-between gap-x-3">
                                        <a
                                            href="#link"
                                            onClick={(e) => e.preventDefault()}
                                            className="flex items-center"
                                        >
                                            <Avatar
                                                size="rg"
                                                variant={item.theme}
                                                text={toInitials(item.title)}
                                            />
                                            <div className="ms-4 flex flex-col">
                                                <h6 className="font-heading mb-0.5 text-base leading-5 font-bold text-slate-700 dark:text-white">
                                                    {item.title}
                                                </h6>
                                                <span className="text-sm leading-4 text-slate-400">
                                                    {item.client}
                                                </span>
                                            </div>
                                        </a>
                                        <ActionDropdown />
                                    </div>
                                    <div className="mb-4">
                                        <p>{item.description}</p>
                                    </div>
                                    <div className="mb-4">
                                        <div className="mb-2 flex justify-between">
                                            <div className="flex items-center text-slate-400">
                                                <Icon
                                                    className="me-2 text-base/6"
                                                    name="check-round-cut"
                                                />
                                                <span>{item.tasks} Tasks</span>
                                            </div>
                                            <div className="font-medium text-slate-600 dark:text-slate-300">
                                                {item.progress}
                                            </div>
                                        </div>
                                        <Progress>
                                            <Progress.Bar
                                                progress={item.progress}
                                            />
                                        </Progress>
                                    </div>
                                    <div className="flex items-center justify-between">
                                        <ul className="flex items-center gap-1.5">
                                            {item.team.map((tItem, tIndex) => {
                                                return (
                                                    <li key={tIndex}>
                                                        {tItem.img ? (
                                                            <Avatar
                                                                size="sm"
                                                                rounded
                                                                img={tItem.img}
                                                            />
                                                        ) : (
                                                            <Avatar
                                                                variant={
                                                                    tItem.theme
                                                                }
                                                                size="sm"
                                                                rounded
                                                                text={toInitials(
                                                                    tItem.name,
                                                                )}
                                                            />
                                                        )}
                                                    </li>
                                                );
                                            })}
                                            {item.teamCount > 2 && (
                                                <li>
                                                    <Avatar
                                                        size="sm"
                                                        text={`+${item.teamCount - 2}`}
                                                        variant="light"
                                                        rounded
                                                    />
                                                </li>
                                            )}
                                        </ul>
                                        <Badge variant={item.status.theme}>
                                            <Icon
                                                className="me-2 text-base/none"
                                                name="clock"
                                            />
                                            <span>{item.status.message}</span>
                                        </Badge>
                                    </div>
                                </div>
                            </div>
                        </div>
                    );
                })}
            </div>
        </>
    );
};

export default ProjectsCardPage;
