import React, { useState } from 'react';
import {
    Head,
    Block,
    Card,
    Icon,
    Button,
    Progress,
    Badge,
} from '../../../componenets';
import { Avatar } from '../../../componenets';
import { toInitials } from '../../../utilities';
import { useTheme } from '../../../layout/context';
import { usePopper } from 'react-popper';
import { Menu } from '@headlessui/react';
import { Link } from 'react-router-dom';
import LightBox from '../../../componenets/partials/LightBox';
import InvestmentOverviewCard from '../../dashboard/Invest/InvestmentOverviewCard';
import NewUsersCard from '../../dashboard/Sales/NewUsersCard';
import RecentActivitiesCard from '../../dashboard/Sales/RecentActivitiesCard';
import SupportRequestsCard from '../../dashboard/Sales/SupportRequestsCard';
import RecentNotificationsCard from '../../dashboard/Invest/RecentNotificationsCard';
import PagesViewCard from '../../dashboard/Analytics/PagesViewCard';
import ActionCenterCard from '../../dashboard/Crypto/ActionCenterCard';

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
                        <Button.Zoom size="sm">
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
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="focus"
                                    />
                                    <span>Quick View</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="eye"
                                    />
                                    <span>View Details</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="mail"
                                    />
                                    <span>Send Email</span>
                                </Menu.Item>
                            </li>
                            <li className="my-2 block border-t border-gray-300 dark:border-gray-900"></li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="shield-star"
                                    />
                                    <span>Reset Pass</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="shield-off"
                                    />
                                    <span>Reset 2FA</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="na"
                                    />
                                    <span>Suspend User</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

// project action Dropdown

const ProjectActionDropdown = ({ className }) => {
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

const CardWidgetsPage = () => {
    return (
        <>
            <Head title="Card Widgets" />
            <div className="mx-auto lg:max-w-[960px]">
                <Block.PageHead className="md:max-w-[720px]">
                    <Block.Back to="/components">Components</Block.Back>
                    <Block.TitleLg>Card Widgets</Block.TitleLg>
                </Block.PageHead>
                <Block>
                    <Block.Head>
                        <Block.Title>Product card</Block.Title>
                        <Block.Text>
                            Cards are built with as little markup and styles as
                            possible, but still manage to deliver a ton of
                            control and customization
                        </Block.Text>
                    </Block.Head>
                    <Card>
                        <Card.Body>
                            <div className="border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                <div className="grid grid-cols-12">
                                    <div className="col-span-12 sm:col-span-7 md:col-span-5">
                                        <div className="rounded-md border dark:border-gray-900">
                                            <div className="relative">
                                                <Link to={`/product-details/1`}>
                                                    <img
                                                        className="rounded-t"
                                                        src="../../../images/product/lg-a.jpg"
                                                        alt=""
                                                    />
                                                </Link>
                                                <ul className="absolute start-4 top-4 flex flex-wrap gap-2">
                                                    <li>
                                                        <Badge variant="green">
                                                            New
                                                        </Badge>
                                                    </li>
                                                </ul>
                                                <ul className="absolute start-1/2 bottom-1 flex -translate-x-1/2 overflow-hidden rounded-t opacity-0 transition duration-200 ease-linear group-hover:opacity-100">
                                                    <li className="px-0.5">
                                                        <a
                                                            href="#link"
                                                            onClick={(e) =>
                                                                e.preventDefault()
                                                            }
                                                            className="hover:text-primary-600 inline-flex h-8 w-8 items-center justify-center text-slate-600 transition-all duration-300"
                                                        >
                                                            <em className="ni ni-cart text-base"></em>
                                                        </a>
                                                    </li>
                                                    <li className="px-0.5">
                                                        <a
                                                            href="#link"
                                                            onClick={(e) =>
                                                                e.preventDefault()
                                                            }
                                                            className="hover:text-primary-600 inline-flex h-8 w-8 items-center justify-center text-slate-600 transition-all duration-300"
                                                        >
                                                            <em className="ni ni-heart text-base"></em>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div className="p-5 text-center sm:p-6">
                                                <ul className="flex flex-wrap justify-center">
                                                    <li className="p-1">
                                                        <a
                                                            className="hover:text-primary-600 text-sm/6 text-slate-400"
                                                            href="#link"
                                                            onClick={(e) =>
                                                                e.preventDefault()
                                                            }
                                                        >
                                                            Smart Watch
                                                        </a>
                                                    </li>
                                                </ul>
                                                <h5 className="font-heading leading-tighter mt-2 mb-4 text-lg font-bold">
                                                    <Link
                                                        className="hover:text-primary-600 text-slate-700 transition-all duration-300 dark:text-white"
                                                        to={`/product-details/1`}
                                                    >
                                                        Classy Modern Smart
                                                        watch
                                                    </Link>
                                                </h5>
                                                <div className="font-heading leading-tighter text-primary-600 text-lg font-bold">
                                                    <small className="me-1 text-xs font-normal text-slate-400 line-through">
                                                        $350
                                                    </small>
                                                    $324
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>
                {/* Block end */}
                <Block>
                    <Block.Head>
                        <Block.Title>Image Popup</Block.Title>
                        <Block.Text>
                            Use{' '}
                            <code className="text-pink-600">.popup-image</code>{' '}
                            on an <code className="text-pink-600">a</code> tag
                            then popup image in{' '}
                            <code className="text-pink-600">[href]</code>{' '}
                            attribute.
                        </Block.Text>
                    </Block.Head>
                    <Card>
                        <Card.Body>
                            <div className="grid grid-cols-12">
                                <div className="col-span-12 sm:col-span-6 lg:col-span-5">
                                    <div className="relative h-full rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                        <LightBox
                                            className="relative z-[1]"
                                            sources="../../../images/stock/a.jpg"
                                        >
                                            <img
                                                className="w-full rounded-t"
                                                src="../../../images/stock/a.jpg"
                                                alt=""
                                            />
                                        </LightBox>
                                        <div className="flex flex-wrap items-center justify-between gap-3 p-5 sm:p-6">
                                            <div className="flex items-center">
                                                <Avatar
                                                    size="rg"
                                                    rounded
                                                    img="../../../images/avatar/a-sm.jpg"
                                                />
                                                <div className="ms-4">
                                                    <span className="block text-sm leading-6 font-medium text-slate-700 dark:text-white">
                                                        Dustin Mock
                                                    </span>
                                                    <span className="block text-xs leading-4 text-slate-400">
                                                        mock@softnio.com
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <button className="font-heading relative inline-flex items-center text-center align-middle text-sm leading-4.5 font-bold tracking-wide transition-all duration-300">
                                                    <Icon
                                                        className="text-xl leading-4.5"
                                                        name="heart"
                                                    />
                                                    <span className="ms-3">
                                                        34
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>{' '}
                {/* Block end */}
                <Block>
                    <Block.Head>
                        <Block.Title>User card</Block.Title>
                        <Block.Text>
                            Cards are built with as little markup and styles as
                            possible, but still manage to deliver a ton of
                            control and customization
                        </Block.Text>
                    </Block.Head>
                    <Card>
                        <Card.Body>
                            <div className="grid grid-cols-12">
                                <div className="col-span-12 md:col-span-6 lg:col-span-4">
                                    <div className="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                        <div className="p-5 sm:p-6">
                                            <div className="relative">
                                                <div className="absolute flex h-5 w-5 items-center justify-center rounded-full bg-red-600 text-white">
                                                    <Icon name="na" />
                                                </div>
                                                <ActionDropdown className="!absolute end-0 top-0 -me-1 -mt-1" />
                                                <div className="flex flex-col items-center p-2 text-center">
                                                    <div className="bg-primary-600 relative flex flex-shrink-0 items-center justify-center rounded-full text-sm font-medium text-white">
                                                        <Avatar
                                                            size="xl"
                                                            rounded
                                                            text={toInitials(
                                                                'Abu Bin Ishtiyak',
                                                            )}
                                                            status="active"
                                                        />
                                                    </div>
                                                    <div className="mt-5">
                                                        <h6 className="font-heading leading-tighter mb-2 text-base font-bold text-slate-700 dark:text-white">
                                                            Abu Bin Ishtiyak
                                                        </h6>
                                                        <span className="text-sm text-slate-400">
                                                            @ishtiyak
                                                        </span>
                                                    </div>
                                                </div>
                                                <div className="mx-auto max-w-[200px] pt-2 text-center">
                                                    <p>
                                                        I am an UI/UX Designer
                                                        and Love to be creative.
                                                    </p>
                                                </div>
                                                <ul className="flex w-full justify-around pt-4 pb-6 text-center">
                                                    <li className="px-2">
                                                        <span className="block text-lg text-slate-800 dark:text-white">
                                                            213
                                                        </span>
                                                        <span className="block text-sm leading-6 text-slate-400">
                                                            Projects
                                                        </span>
                                                    </li>
                                                    <li className="px-2">
                                                        <span className="block text-lg text-slate-800 dark:text-white">
                                                            87.5%
                                                        </span>
                                                        <span className="block text-sm leading-6 text-slate-400">
                                                            Performed
                                                        </span>
                                                    </li>
                                                    <li className="px-2">
                                                        <span className="block text-lg text-slate-800 dark:text-white">
                                                            587
                                                        </span>
                                                        <span className="block text-sm leading-6 text-slate-400">
                                                            Tasks
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div className="flex justify-center pb-1">
                                                    <Button
                                                        as="Link"
                                                        to={`/user-details/1`}
                                                        size="rg"
                                                        variant="white-outline"
                                                        pill
                                                        className="min-w-[150px] justify-center"
                                                    >
                                                        <span>
                                                            View Profile
                                                        </span>
                                                    </Button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>{' '}
                {/* Block end */}
                <Block>
                    <Block.Head>
                        <Block.Title>User Cards Alternet</Block.Title>
                        <Block.Text>
                            Cards are built with as little markup and styles as
                            possible, but still manage to deliver a ton of
                            control and customization
                        </Block.Text>
                    </Block.Head>
                    <Card>
                        <Card.Body>
                            <div className="grid grid-cols-12">
                                <div className="col-span-12 md:col-span-6 lg:col-span-4">
                                    <div className="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                        <div className="p-5 sm:p-6">
                                            <div className="relative">
                                                <ActionDropdown className="!absolute end-0 top-0 -me-1 -mt-1" />
                                                <div className="flex flex-col items-center p-2 text-center">
                                                    <div className="bg-primary-600 relative flex flex-shrink-0 items-center justify-center rounded-full text-sm font-medium text-white">
                                                        <Avatar
                                                            size="2xl"
                                                            rounded
                                                            text={toInitials(
                                                                'Abu Bin Ishtiyak',
                                                            )}
                                                            status="active"
                                                        />
                                                    </div>
                                                    <div className="mt-5">
                                                        <h6 className="font-heading leading-tighter mb-2 text-base font-bold text-slate-700 dark:text-white">
                                                            Abu Bin Ishtiyak
                                                        </h6>
                                                        <span className="text-sm text-slate-400">
                                                            @ishtiyak
                                                        </span>
                                                    </div>
                                                </div>
                                                <ul className="pt-4 pb-5">
                                                    <li className="flex items-center justify-between text-base leading-7">
                                                        <span className="text-slate-400 dark:text-slate-600">
                                                            Join Date
                                                        </span>
                                                        <span className="text-slate-600 dark:text-slate-400">
                                                            24 Jun 2015
                                                        </span>
                                                    </li>
                                                    <li className="flex items-center justify-between text-base leading-7">
                                                        <span className="text-slate-400 dark:text-slate-600">
                                                            Contact
                                                        </span>
                                                        <span className="text-slate-600 dark:text-slate-400">
                                                            +88 01713-123656
                                                        </span>
                                                    </li>
                                                    <li className="flex items-center justify-between text-base leading-7">
                                                        <span className="text-slate-400 dark:text-slate-600">
                                                            Email
                                                        </span>
                                                        <span className="text-slate-600 dark:text-slate-400">
                                                            info@softnio.com
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div className="flex justify-center pb-1">
                                                    <Button
                                                        as="Link"
                                                        to={`/user-details/1`}
                                                        size="rg"
                                                        variant="primary-pale"
                                                        block
                                                        className="min-w-[150px] justify-center"
                                                    >
                                                        <span>
                                                            View Profile
                                                        </span>
                                                    </Button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>{' '}
                {/* Block end */}
                <Block>
                    <Block.Head>
                        <Block.Title>Card with tabs</Block.Title>
                        <Block.Text>
                            With this card design, you can use multiple tabs on
                            a card.
                        </Block.Text>
                        <Block.Text>
                            Card titles are used by adding{' '}
                            <code className="text-pink-600">.card-title</code>{' '}
                            to a{' '}
                            <code className="text-primary-600">&lt;h*&gt;</code>{' '}
                            tag. <br /> In the same way, links are added and
                            placed next to each other by adding{' '}
                            <code className="text-pink-600">.card-link</code> to
                            an{' '}
                            <code className="text-primary-600">&lt;a&gt;</code>{' '}
                            tag.
                        </Block.Text>
                    </Block.Head>
                    <Card>
                        <Card.Body>
                            <div className="rounded-md border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                <div className="grid grid-cols-12">
                                    <div className="col-span-12 md:col-span-6">
                                        <InvestmentOverviewCard />
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>{' '}
                {/* Block end */}
                <Block>
                    <Block.Head>
                        <Block.Title>Pricing table</Block.Title>
                        <Block.Text>
                            You can customize it ton of ways.
                        </Block.Text>
                    </Block.Head>
                    <Card>
                        <Card.Body>
                            <div className="border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                <div className="grid grid-cols-12">
                                    <div className="col-span-12 rounded-md border md:col-span-6 lg:col-span-4 dark:border-gray-900">
                                        <div className="p-5 text-center sm:p-6">
                                            <div className="pb-5">
                                                <h4 className="font-heading leading-tighter mb-1 text-xl font-bold tracking-tight text-slate-600 lg:text-2xl dark:text-white">
                                                    Starter
                                                </h4>
                                                <p className="text-sm text-slate-400">
                                                    Enjoy entry level of invest
                                                    & earn.
                                                </p>
                                            </div>
                                            <div className="-mx-3.5 flex flex-wrap">
                                                <div className="w-1/2 px-3.5">
                                                    <div className="font-heading leading-tighter text-xl font-bold tracking-tight text-slate-700 lg:text-2xl dark:text-white">
                                                        1.67%
                                                    </div>
                                                    <div className="text-sm text-slate-400">
                                                        Daily Interest
                                                    </div>
                                                </div>
                                                <div className="w-1/2 px-3.5">
                                                    <div className="font-heading leading-tighter text-xl font-bold tracking-tight text-slate-700 lg:text-2xl dark:text-white">
                                                        30
                                                    </div>
                                                    <div className="text-sm text-slate-400">
                                                        Term Days
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="border-t border-gray-200 p-5 sm:p-6 dark:border-gray-800">
                                            <ul>
                                                <li className="flex py-1">
                                                    <span className="w-1/2">
                                                        Min Deposit
                                                    </span>{' '}
                                                    -{' '}
                                                    <span className="ms-auto">
                                                        $250
                                                    </span>
                                                </li>
                                                <li className="flex py-1">
                                                    <span className="w-1/2">
                                                        Max Deposit
                                                    </span>{' '}
                                                    -{' '}
                                                    <span className="ms-auto">
                                                        $1,999
                                                    </span>
                                                </li>
                                                <li className="flex py-1">
                                                    <span className="w-1/2">
                                                        Deposit Return
                                                    </span>{' '}
                                                    -{' '}
                                                    <span className="ms-auto">
                                                        Yes
                                                    </span>
                                                </li>
                                                <li className="flex py-1">
                                                    <span className="w-1/2">
                                                        Total Return
                                                    </span>{' '}
                                                    -{' '}
                                                    <span className="ms-auto">
                                                        125%
                                                    </span>
                                                </li>
                                            </ul>
                                            <div className="mt-6 text-center">
                                                <Button
                                                    size="rg"
                                                    variant="white-outline"
                                                >
                                                    Choose this Plan
                                                </Button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>{' '}
                {/* Block end */}
                <Block>
                    <Block.Head>
                        <Block.Title>Pricing table alt</Block.Title>
                    </Block.Head>
                    <Card>
                        <Card.Body>
                            <div className="border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                <div className="grid grid-cols-12">
                                    <div className="col-span-12 rounded-md border md:col-span-6 lg:col-span-4 dark:border-gray-900">
                                        <div className="p-5 text-center sm:p-6">
                                            <div className="mb-6 py-1">
                                                <img
                                                    className="mx-auto max-w-[90px]"
                                                    src="../../../images/icons/plan-s1.svg"
                                                    alt=""
                                                />
                                            </div>
                                            <div className="mx-auto w-[220px]">
                                                <h5 className="font-heading leading-tighter -tracking-snug mb-1 text-xl font-bold text-slate-700 dark:text-white">
                                                    Starter
                                                </h5>
                                                <span className="text-sm text-slate-400">
                                                    If you are a small business
                                                    amn please select this plan
                                                </span>
                                            </div>
                                            <div className="pt-5">
                                                <div className="text-2xl font-bold text-slate-600 dark:text-white">
                                                    $99 <span>/yr</span>
                                                </div>
                                                <span className="text-sm text-slate-400">
                                                    1 User, Billed Yearly
                                                </span>
                                            </div>
                                            <div className="pt-6">
                                                <Button
                                                    size="rg"
                                                    variant="primary"
                                                >
                                                    Select Plan
                                                </Button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>{' '}
                {/* Block end */}
                <Block>
                    <Block.Head>
                        <Block.Title>Pricing table alt</Block.Title>
                    </Block.Head>
                    <Card>
                        <Card.Body>
                            <div className="border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                <div className="grid grid-cols-12">
                                    <div className="col-span-12 rounded-md md:col-span-6 lg:col-span-5">
                                        <div className="h-full rounded-md border dark:border-gray-900">
                                            <div className="p-5 sm:p-6">
                                                <div className="mb-5 flex items-start justify-between gap-x-3">
                                                    <a
                                                        href="#link"
                                                        onClick={(e) =>
                                                            e.preventDefault()
                                                        }
                                                        className="flex items-center"
                                                    >
                                                        <Avatar
                                                            size="rg"
                                                            variant="purple"
                                                            text={toInitials(
                                                                'DashWind Development',
                                                            )}
                                                        />
                                                        <div className="ms-4 flex flex-col">
                                                            <h6 className="font-heading mb-0.5 text-base leading-5 font-bold text-slate-700 dark:text-white">
                                                                DashWind
                                                                Development
                                                            </h6>
                                                            <span className="text-sm leading-4 text-slate-400">
                                                                Softnio
                                                            </span>
                                                        </div>
                                                    </a>
                                                    <ProjectActionDropdown />
                                                </div>
                                                <div className="mb-4">
                                                    <p>
                                                        Design and develop the
                                                        DashWind template for
                                                        Envato Marketplace.
                                                    </p>
                                                </div>
                                                <div className="mb-4">
                                                    <div className="mb-2 flex justify-between">
                                                        <div className="flex items-center text-slate-400">
                                                            <Icon
                                                                className="me-2 text-base/6"
                                                                name="check-round-cut"
                                                            />
                                                            <span>3 Tasks</span>
                                                        </div>
                                                        <div className="font-medium text-slate-600 dark:text-slate-300">
                                                            93.5%
                                                        </div>
                                                    </div>
                                                    <Progress>
                                                        <Progress.Bar progress="93.5%" />
                                                    </Progress>
                                                </div>
                                                <div className="flex items-center justify-between">
                                                    <ul className="flex items-center gap-1.5">
                                                        <li>
                                                            <Avatar
                                                                variant="primary"
                                                                size="sm"
                                                                rounded
                                                                text={toInitials(
                                                                    'Abu',
                                                                )}
                                                            />
                                                        </li>
                                                        <li>
                                                            <Avatar
                                                                size="sm"
                                                                rounded
                                                                img="../../../images/avatar/b-sm.jpg"
                                                            />
                                                        </li>
                                                        <li>
                                                            <Avatar
                                                                size="sm"
                                                                text="+12"
                                                                variant="light"
                                                                rounded
                                                            />
                                                        </li>
                                                    </ul>
                                                    <Badge variant="yellow-pale">
                                                        <Icon
                                                            className="me-2 text-base/none"
                                                            name="clock"
                                                        />
                                                        <span>5 Days Left</span>
                                                    </Badge>
                                                </div>
                                            </div>
                                        </div>
                                        {/*  */}
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>{' '}
                {/* Block end */}
                <Block>
                    <Block.Head>
                        <Block.Title>Kanban Card</Block.Title>
                    </Block.Head>
                    <Card>
                        <Card.Body>
                            <div className="border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                <div className="grid grid-cols-12">
                                    <div className="col-span-12 md:col-span-6 lg:col-span-5">
                                        <div className="h-full rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                            <div className="p-5 sm:p-6">
                                                <div className="flex justify-between">
                                                    <h6 className="font-heading mb-0.5 text-base leading-5 font-bold text-slate-700 dark:text-white">
                                                        Techyspec Keyword
                                                        Research
                                                    </h6>
                                                    <div className="relative">
                                                        <button
                                                            data-offset="-14, -8"
                                                            data-rtl-offset="14, -8"
                                                            data-placement="bottom-end"
                                                            data-rtl-placement="bottom-start"
                                                            className="dropdown-toggle peer relative isolate inline-flex h-8 w-8 items-center justify-center px-1.5 text-slate-600 before:absolute before:top-1/2 before:left-1/2 before:-z-[1] before:h-5 before:w-5 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-gray-200 before:opacity-0 before:transition-all before:duration-300 before:content-[''] hover:text-slate-400 hover:before:h-8 hover:before:w-8 hover:before:opacity-100 dark:text-slate-300 dark:before:bg-gray-900 [&.show]:before:h-8 [&.show]:before:w-8 [&.show]:before:opacity-100 [&>*]:pointer-events-none"
                                                        >
                                                            <div className="relative flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-red-600 text-xs font-medium text-white">
                                                                <span>V</span>
                                                            </div>
                                                        </button>
                                                        <div
                                                            tabIndex="0"
                                                            className="dropdown-menu absolute z-[1000] m-1.5 hidden rounded border border-gray-200 bg-white p-4 shadow peer-[.show]:block dark:border-gray-800 dark:bg-gray-950"
                                                        >
                                                            <div className="flex w-full">
                                                                <div className="relative flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-red-600 text-xs font-medium text-white">
                                                                    <span>
                                                                        VL
                                                                    </span>
                                                                </div>
                                                                <div className="ms-3">
                                                                    <div className="text-xs font-bold text-slate-600 dark:text-slate-400">
                                                                        Victoria
                                                                        Lynch
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p className="pt-3">
                                                    Keyword recarch for
                                                    @techyspec business profile
                                                    and there other websites, to
                                                    improve ranking.
                                                </p>
                                                <div className="pt-2">
                                                    <span className="text-xxs tracking-snug relative inline-flex rounded-sm border border-gray-900 bg-gray-900 px-1.5 text-center align-middle leading-4.5 font-medium whitespace-nowrap text-white dark:border-gray-400 dark:bg-gray-400 dark:text-gray-700">
                                                        Techyspec
                                                    </span>
                                                    <span className="text-xxs tracking-snug relative ms-1 inline-flex rounded-sm border border-green-600 bg-green-600 px-1.5 text-center align-middle leading-4.5 font-medium whitespace-nowrap text-white">
                                                        SEO
                                                    </span>
                                                </div>

                                                <div className="flex justify-between pt-2 text-slate-400">
                                                    <ul className="flex gap-2">
                                                        <li>
                                                            <em className="icon ni ni-calendar me-1"></em>
                                                            <span>
                                                                02 Jan 2021
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <em className="icon ni ni-notes me-1"></em>
                                                            <span>
                                                                Recharch
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    <ul className="flex gap-2">
                                                        <li>
                                                            <em className="icon ni ni-clip me-1"></em>
                                                            <span>31</span>
                                                        </li>
                                                        <li>
                                                            <em className="icon ni ni-comments me-1"></em>
                                                            <span>21</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>{' '}
                {/* Block end */}
                <Block>
                    <Block.Head>
                        <Block.Title>User list card</Block.Title>
                        <Block.Text>
                            The following card can be use for{' '}
                            <strong className="text-primary-600">
                                User list, customer list
                            </strong>{' '}
                            related filed.
                        </Block.Text>
                    </Block.Head>
                    <Card>
                        <Card.Body>
                            <div className="rounded-md border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                <div className="grid grid-cols-12">
                                    <div className="col-span-12 md:col-span-6">
                                        <NewUsersCard />
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>{' '}
                {/* Block end */}
                <Block>
                    <Block.Head>
                        <Block.Title>Activities card with tabs.</Block.Title>
                        <Block.Text>
                            The following card can be use for{' '}
                            <strong className="text-primary-600">
                                Activities
                            </strong>{' '}
                            or related filed.
                        </Block.Text>
                    </Block.Head>
                    <Card>
                        <Card.Body>
                            <div className="rounded-md border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                <div className="grid grid-cols-12">
                                    <div className="col-span-12 md:col-span-6">
                                        <RecentActivitiesCard />
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>{' '}
                {/* Block end */}
                <Block>
                    <Block.Head>
                        <Block.Title>Support Requests</Block.Title>
                        <Block.Text>
                            The following card can be use for{' '}
                            <strong className="text-primary-600">
                                Support Requests
                            </strong>{' '}
                            related filed.
                        </Block.Text>
                    </Block.Head>
                    <Card>
                        <Card.Body>
                            <div className="rounded-md border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                <div className="grid grid-cols-12">
                                    <div className="col-span-12 md:col-span-6">
                                        <SupportRequestsCard />
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>{' '}
                {/* Block end */}
                <Block>
                    <Block.Head>
                        <Block.Title>Notification Card</Block.Title>
                        <Block.Text>
                            The following card can be use for{' '}
                            <strong className="text-primary-600">
                                Notifications
                            </strong>{' '}
                            related filed.
                        </Block.Text>
                    </Block.Head>
                    <Card>
                        <Card.Body>
                            <div className="rounded-md border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                <div className="grid grid-cols-12">
                                    <div className="col-span-12 md:col-span-6">
                                        <RecentNotificationsCard />
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>{' '}
                {/* Block end */}
                <Block>
                    <Block.Head>
                        <Block.Title>User Count</Block.Title>
                        <Block.Text>
                            The following card can be use for{' '}
                            <strong className="text-primary-600">
                                User Count, View Count
                            </strong>{' '}
                            related filed.
                        </Block.Text>
                    </Block.Head>
                    <Card>
                        <Card.Body>
                            <div className="rounded-md border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                <div className="grid grid-cols-12">
                                    <div className="col-span-12 md:col-span-6">
                                        <PagesViewCard />
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>{' '}
                {/* Block end */}
                <Block>
                    <Block.Head>
                        <Block.Title>Action Center</Block.Title>
                        <Block.Text>
                            The following card can be use for{' '}
                            <strong className="text-primary-600">
                                Action Center, Settings
                            </strong>{' '}
                            related filed.
                        </Block.Text>
                    </Block.Head>
                    <Card>
                        <Card.Body>
                            <div className="rounded-md border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                <div className="grid grid-cols-12">
                                    <div className="col-span-12 md:col-span-6">
                                        <ActionCenterCard />
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>{' '}
                {/* Block end */}
            </div>
        </>
    );
};

export default CardWidgetsPage;
