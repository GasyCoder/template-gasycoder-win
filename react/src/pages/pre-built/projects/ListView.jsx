import React, { useState } from 'react';
import {
    Button,
    Card,
    CheckBox,
    Icon,
    PageHead,
    Progress,
    Avatar,
    Badge,
    Pagination,
    Select,
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
                        <Button.Zoom size="rg">
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
                                        className="w-7 text-start text-lg/none opacity-80"
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
                                        className="w-7 text-start text-lg/none opacity-80"
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
                                        className="w-7 text-start text-lg/none opacity-80"
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

const ActionDropdown2 = ({ className }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? 'bottom-start' : 'bottom-end',
        modifiers: [
            {
                name: 'offset',
                options: {
                    offset: theme.direction === 'rtl' ? [8, -8] : [-8, -8],
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
                        <Button.Zoom size="xs">
                            <Icon className="text-lg" name="more-h" />
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
                                        className="w-7 text-start text-lg/none opacity-80"
                                        name="check-round-cut"
                                    />
                                    <span>Mark As Done</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg/none opacity-80"
                                        name="archive"
                                    />
                                    <span>Mark As Archive</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg/none opacity-80"
                                        name="trash"
                                    />
                                    <span>Remove Projects</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const ProjectsListPage = () => {
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
            <Head title="Project List" />
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
                                    size="rg"
                                    variant="primary"
                                    className="hidden sm:inline-flex"
                                >
                                    <Icon className="text-xl/4.5" name="plus" />
                                    <span className="ms-3">Add Project</span>
                                </Button>
                                <Button
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
            <Card>
                <table className="w-full border-collapse border-gray-300 dark:border-gray-900">
                    <thead>
                        <tr>
                            <th className="w-12 border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 sm:w-13 dark:border-gray-900">
                                <div className="flex items-center">
                                    <CheckBox size="sm" id="pid-all" />
                                </div>
                            </th>
                            <th className="border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 dark:border-gray-900">
                                <span className="block text-sm leading-relaxed font-bold text-slate-400">
                                    Project Name
                                </span>
                            </th>
                            <th className="hidden border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 2xl:table-cell dark:border-gray-900">
                                <span className="block text-sm leading-relaxed font-bold text-slate-400">
                                    Client
                                </span>
                            </th>
                            <th className="hidden border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900">
                                <span className="block text-sm leading-relaxed font-bold text-slate-400">
                                    Project Lead
                                </span>
                            </th>
                            <th className="hidden border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900">
                                <span className="block text-sm leading-relaxed font-bold text-slate-400">
                                    Team
                                </span>
                            </th>
                            <th className="hidden border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 2xl:table-cell dark:border-gray-900">
                                <span className="block text-sm leading-relaxed font-bold text-slate-400">
                                    Status
                                </span>
                            </th>
                            <th className="hidden border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 md:table-cell dark:border-gray-900">
                                <span className="block text-sm leading-relaxed font-bold text-slate-400">
                                    Progress
                                </span>
                            </th>
                            <th className="xs:table-cell hidden border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 dark:border-gray-900">
                                <span className="block text-sm leading-relaxed font-bold text-slate-400">
                                    Deadline
                                </span>
                            </th>
                            <th className="max-w-[3.75rem] border-b border-gray-300 px-2 py-2 text-end first:ps-6 last:pe-6 dark:border-gray-900">
                                <ActionDropdown2 className="-me-1" />
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {projects.map((item, index) => {
                            return (
                                <tr
                                    key={index}
                                    className="hover:dark:bg-gray-1000 transition-all duration-300 hover:bg-gray-50"
                                >
                                    <td className="w-12 border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 sm:w-13 dark:border-gray-900">
                                        <div className="flex items-center">
                                            <CheckBox size="sm" id={item.id} />
                                        </div>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 dark:border-gray-900">
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
                                            <h6 className="font-heading ms-4 mb-0.5 text-base leading-5 font-bold text-slate-700 dark:text-white">
                                                {item.title}
                                            </h6>
                                        </a>
                                    </td>
                                    <td className="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 2xl:table-cell dark:border-gray-900">
                                        <span className="text-sm text-slate-400">
                                            {item.client}
                                        </span>
                                    </td>
                                    <td className="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900">
                                        <span className="text-sm text-slate-400">
                                            {item.teamLead}
                                        </span>
                                    </td>
                                    <td className="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900">
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
                                    </td>
                                    <td className="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 2xl:table-cell dark:border-gray-900">
                                        <span className="text-sm text-slate-400">
                                            Open
                                        </span>
                                    </td>
                                    <td className="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 md:table-cell dark:border-gray-900">
                                        <div className="flex items-center gap-4">
                                            <Progress className="w-[140px]">
                                                <Progress.Bar
                                                    progress={item.progress}
                                                />
                                            </Progress>
                                            <div className="font-medium text-slate-600 dark:text-slate-300">
                                                {item.progress}
                                            </div>
                                        </div>
                                    </td>
                                    <td className="xs:table-cell hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <Badge variant={item.status.theme}>
                                            <Icon
                                                className="me-2 text-base/none"
                                                name="clock"
                                            />
                                            <span>{item.status.message}</span>
                                        </Badge>
                                    </td>
                                    <td className="max-w-[3.75rem] border-b border-gray-300 px-2 py-4 text-end first:ps-6 last:pe-6 dark:border-gray-900">
                                        <ActionDropdown className="-me-2" />
                                    </td>
                                </tr>
                            );
                        })}
                    </tbody>
                </table>
                <div className="p-5">
                    <div className="flex flex-wrap justify-center gap-4 sm:justify-between">
                        <Pagination>
                            <Pagination.Prev text="Prev" />
                            <Pagination.Item>1</Pagination.Item>
                            <Pagination.Item>2</Pagination.Item>
                            <Pagination.Dot />
                            <Pagination.Item>6</Pagination.Item>
                            <Pagination.Item>7</Pagination.Item>
                            <Pagination.Next text="Next" />
                        </Pagination>
                        <div className="flex items-center gap-x-4">
                            <div className="text-xs text-slate-600 uppercase">
                                Page
                            </div>
                            <div className="relative w-16">
                                <Select.Choice>
                                    <Select.Option value="1">1</Select.Option>
                                    <Select.Option value="2">2</Select.Option>
                                    <Select.Option value="3">3</Select.Option>
                                </Select.Choice>
                            </div>
                            <div className="text-xs text-slate-600 uppercase">
                                Of 102
                            </div>
                        </div>
                    </div>
                </div>
            </Card>
        </>
    );
};

export default ProjectsListPage;
