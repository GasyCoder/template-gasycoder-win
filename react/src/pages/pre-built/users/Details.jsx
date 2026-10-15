import React, { useEffect, useState } from 'react';
import {
    Avatar,
    Button,
    Card,
    Head,
    Icon,
    PageHead,
} from '../../../componenets';
import { useParams } from 'react-router-dom';
import { toInitials } from '../../../utilities';
import { userData } from '../../../store/users';
import SimpleBar from 'simplebar-react';

const UserDetailsPage = () => {
    const [data, setData] = useState([]);
    const [pageAside, setPageAside] = useState(false);

    let { userId } = useParams();
    // grabs the id of the url and loads the corresponding data
    useEffect(() => {
        const id = userId;
        if (id !== undefined || null || '') {
            let user = userData.find((item) => item.id === Number(id));
            if (user) {
                setData(user);
            }
        } else {
            setData(userData[0]);
        }
    }, [userId]);

    useEffect(() => {
        const handleAside = () => {
            if (window.innerWidth > 1535) {
                setPageAside(false);
            }
        };

        handleAside();
        window.addEventListener('resize', handleAside);
        return () => {
            window.removeEventListener('resize', handleAside);
        };
    }, []);

    useEffect(() => {
        pageAside
            ? document.body.classList.add('overflow-hidden')
            : document.body.classList.remove('overflow-hidden');
    }, [pageAside]);
    return (
        <>
            <Head title="Users Details" />
            <PageHead>
                <PageHead.Group>
                    <PageHead.Title>
                        Users /{' '}
                        <strong className="text-primary-600 text-2xl font-normal">
                            {data.name}
                        </strong>
                    </PageHead.Title>
                    <ul className="flex flex-wrap gap-x-4 gap-y-1 text-slate-400">
                        <li>
                            User ID:{' '}
                            <span className="text-slate-600 dark:text-slate-400">
                                UD003054
                            </span>
                        </li>
                        <li>
                            Last Login:{' '}
                            <span className="text-slate-600 dark:text-slate-400">
                                {data.lastLogin}, 01:02 PM
                            </span>
                        </li>
                    </ul>
                </PageHead.Group>
                <PageHead.Group>
                    <Button
                        as="Link"
                        size="rg"
                        variant="white-outline"
                        className="hidden sm:inline-flex"
                        to="/user-card"
                    >
                        <Icon
                            className="text-xl leading-4.5 rtl:-scale-x-100"
                            name="arrow-left"
                        />
                        <span className="ms-3">Back</span>
                    </Button>
                    <Button
                        as="Link"
                        size="rg"
                        variant="white-outline"
                        className="sm:hidden"
                        icon
                        to="/user-card"
                    >
                        <Icon
                            className="text-xl leading-4.5 rtl:-scale-x-100"
                            name="arrow-left"
                        />
                    </Button>
                </PageHead.Group>
            </PageHead>
            <Card className="h-full">
                <div className="relative flex">
                    <div className="flex-grow">
                        <ul className="font-heading flex flex-wrap items-center border-b border-gray-300 px-5 text-sm sm:px-6 dark:border-gray-900">
                            <li className="pe-4 last:pe-0 md:pe-6 lg:pe-7 xl:pe-9">
                                <button className="after:bg-primary-600 [&.active]:text-primary-600 active relative -mb-px inline-flex items-center py-4 text-sm font-bold text-slate-600 after:absolute after:inset-x-0 after:bottom-0 after:h-0.75 after:opacity-0 max-md:px-2 max-sm:px-1 [&.active]:after:opacity-100">
                                    <em className="ni ni-user-circle text-xl"></em>
                                    <span className="ms-2 max-md:hidden">
                                        Personal
                                    </span>
                                </button>
                            </li>
                            <li className="pe-4 last:pe-0 md:pe-6 lg:pe-7 xl:pe-9">
                                <button className="after:bg-primary-600 [&.active]:text-primary-600 relative -mb-px inline-flex items-center py-4 text-sm font-bold text-slate-600 after:absolute after:inset-x-0 after:bottom-0 after:h-0.75 after:opacity-0 max-md:px-2 max-sm:px-1 [&.active]:after:opacity-100">
                                    <em className="ni ni-repeat text-xl"></em>
                                    <span className="ms-2 max-md:hidden">
                                        Transactions
                                    </span>
                                </button>
                            </li>
                            <li className="pe-4 last:pe-0 md:pe-6 lg:pe-7 xl:pe-9">
                                <button className="after:bg-primary-600 [&.active]:text-primary-600 relative -mb-px inline-flex items-center py-4 text-sm font-bold text-slate-600 after:absolute after:inset-x-0 after:bottom-0 after:h-0.75 after:opacity-0 max-md:px-2 max-sm:px-1 [&.active]:after:opacity-100">
                                    <em className="ni ni-file-text text-xl"></em>
                                    <span className="ms-2 max-md:hidden">
                                        Documents
                                    </span>
                                </button>
                            </li>
                            <li className="pe-4 last:pe-0 md:pe-6 lg:pe-7 xl:pe-9">
                                <button className="after:bg-primary-600 [&.active]:text-primary-600 relative -mb-px inline-flex items-center py-4 text-sm font-bold text-slate-600 after:absolute after:inset-x-0 after:bottom-0 after:h-0.75 after:opacity-0 max-md:px-2 max-sm:px-1 [&.active]:after:opacity-100">
                                    <em className="ni ni-bell text-xl"></em>
                                    <span className="ms-2 max-md:hidden">
                                        Notifications
                                    </span>
                                </button>
                            </li>
                            <li className="pe-4 last:pe-0 md:pe-6 lg:pe-7 xl:pe-9">
                                <button className="after:bg-primary-600 [&.active]:text-primary-600 relative -mb-px inline-flex items-center py-4 text-sm font-bold text-slate-600 after:absolute after:inset-x-0 after:bottom-0 after:h-0.75 after:opacity-0 max-md:px-2 max-sm:px-1 [&.active]:after:opacity-100">
                                    <em className="ni ni-activity text-xl"></em>
                                    <span className="ms-2 max-md:hidden">
                                        Activities
                                    </span>
                                </button>
                            </li>
                            <li className="ms-auto pe-4 last:pe-0 md:pe-6 lg:pe-7 xl:pe-9 2xl:hidden">
                                <div className="py-2">
                                    <Button.Zoom
                                        onClick={() => {
                                            setPageAside(!pageAside);
                                        }}
                                        className="-me-2"
                                    >
                                        <Icon
                                            className="text-xl"
                                            name="user-list-fill"
                                        />
                                    </Button.Zoom>
                                </div>
                            </li>
                        </ul>
                        <div className="p-5 sm:p-6">
                            <div className="pb-7 md:pb-8">
                                <h5 className="font-heading leading-tighter mb-2 text-xl font-bold text-slate-700 dark:text-white">
                                    Personal Information
                                </h5>
                                <p className="text-slate-600 dark:text-slate-400">
                                    Basic info, like your name and address, that
                                    you use on Nio Platform.
                                </p>
                            </div>
                            <div className="-my-2 flex flex-wrap overflow-hidden md:-mx-6 lg:-mx-12 2xl:max-w-5xl">
                                <div className="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12">
                                    <div className="flex justify-between gap-2">
                                        <span className="-tracking-snug text-slate-400">
                                            Title
                                        </span>
                                        <span className="font-medium text-slate-600 dark:text-slate-300">
                                            Mr.
                                        </span>
                                    </div>
                                </div>
                                <div className="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12">
                                    <div className="flex justify-between gap-2">
                                        <span className="-tracking-snug text-slate-400">
                                            Full Name
                                        </span>
                                        <span className="font-medium text-slate-600 dark:text-slate-300">
                                            {data.name}
                                        </span>
                                    </div>
                                </div>
                                <div className="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12">
                                    <div className="flex justify-between gap-2">
                                        <span className="-tracking-snug text-slate-400">
                                            Date of Birth
                                        </span>
                                        <span className="font-medium text-slate-600 dark:text-slate-300">
                                            {data.dob}
                                        </span>
                                    </div>
                                </div>
                                <div className="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12">
                                    <div className="flex justify-between gap-2">
                                        <span className="-tracking-snug text-slate-400">
                                            Surname
                                        </span>
                                        <span className="font-medium text-slate-600 dark:text-slate-300">
                                            IO
                                        </span>
                                    </div>
                                </div>
                                <div className="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12">
                                    <div className="flex justify-between gap-2">
                                        <span className="-tracking-snug text-slate-400">
                                            Mobile Number
                                        </span>
                                        <span className="font-medium text-slate-600 dark:text-slate-300">
                                            {data.phone}
                                        </span>
                                    </div>
                                </div>
                                <div className="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12">
                                    <div className="flex justify-between gap-2">
                                        <span className="-tracking-snug text-slate-400">
                                            Email Address
                                        </span>
                                        <span className="font-medium text-slate-600 dark:text-slate-300">
                                            {data.email}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <h6 className="tracking-relaxed mt-6 mb-5 text-xs leading-tight font-bold whitespace-nowrap text-slate-600 uppercase dark:text-slate-300">
                                Additional Information
                            </h6>
                            <div className="-my-2 flex flex-wrap overflow-hidden md:-mx-6 lg:-mx-12 2xl:max-w-5xl">
                                <div className="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12">
                                    <div className="flex justify-between gap-2">
                                        <span className="-tracking-snug text-slate-400">
                                            Joining Date
                                        </span>
                                        <span className="font-medium text-slate-600 dark:text-slate-300">
                                            08-16-2018 09:04PM
                                        </span>
                                    </div>
                                </div>
                                <div className="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12">
                                    <div className="flex justify-between gap-2">
                                        <span className="-tracking-snug text-slate-400">
                                            Reg Method
                                        </span>
                                        <span className="font-medium text-slate-600 dark:text-slate-300">
                                            Email
                                        </span>
                                    </div>
                                </div>
                                <div className="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12">
                                    <div className="flex justify-between gap-2">
                                        <span className="-tracking-snug text-slate-400">
                                            Country
                                        </span>
                                        <span className="font-medium text-slate-600 dark:text-slate-300">
                                            {data.country}
                                        </span>
                                    </div>
                                </div>
                                <div className="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12">
                                    <div className="flex justify-between gap-2">
                                        <span className="-tracking-snug text-slate-400">
                                            Nationality
                                        </span>
                                        <span className="font-medium text-slate-600 dark:text-slate-300">
                                            {data.country}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div className="my-6 block border-t border-gray-300 dark:border-gray-900"></div>
                            <div className="flex items-center justify-between gap-2 pb-4">
                                <h5 className="-tracking-snug font-heading leading-tighter text-xl font-bold text-slate-700 dark:text-white">
                                    Admin Note
                                </h5>
                                <a
                                    href="#link"
                                    onClick={(e) => e.preventDefault()}
                                    className="text-primary-600 hover:text-primary-700 text-sm leading-none font-medium whitespace-nowrap"
                                >
                                    + Add Note
                                </a>
                            </div>

                            <div className="flex flex-col gap-7">
                                <div>
                                    <div className="rounded bg-slate-50 px-5 py-4 sm:px-6 sm:py-5 dark:bg-gray-900">
                                        <p className="text-slate-600 dark:text-slate-400">
                                            Aproin at metus et dolor tincidunt
                                            feugiat eu id quam. Pellentesque
                                            habitant morbi tristique senectus et
                                            netus et malesuada fames ac turpis
                                            egestas. Aenean sollicitudin non
                                            nunc vel pharetra.{' '}
                                        </p>
                                    </div>
                                    <div className="mt-3 flex flex-wrap items-center text-xs text-slate-400 dark:text-slate-600">
                                        <span>
                                            Added on{' '}
                                            <span className="text-slate-600 dark:text-slate-400">
                                                November 18, 2019
                                            </span>{' '}
                                            at{' '}
                                            <span className="text-slate-600 dark:text-slate-400">
                                                5:34 PM
                                            </span>
                                        </span>
                                        <span className="px-1">|</span>
                                        <span>
                                            By{' '}
                                            <span className="text-slate-600 dark:text-slate-400">
                                                Softnio
                                            </span>
                                        </span>
                                        <a
                                            href="#link"
                                            onClick={(e) => e.preventDefault()}
                                            className="ms-3 text-xs leading-none font-medium whitespace-nowrap text-red-600 hover:text-red-700"
                                        >
                                            Delete Note
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <div className="rounded bg-slate-50 px-5 py-4 sm:px-6 sm:py-5 dark:bg-gray-900">
                                        <p className="text-slate-600 dark:text-slate-400">
                                            Aproin at metus et dolor tincidunt
                                            feugiat eu id quam. Pellentesque
                                            habitant morbi tristique senectus et
                                            netus et malesuada fames ac turpis
                                            egestas. Aenean sollicitudin non
                                            nunc vel pharetra.{' '}
                                        </p>
                                    </div>
                                    <div className="mt-3 flex flex-wrap items-center text-xs text-slate-400 dark:text-slate-600">
                                        <span>
                                            Added on{' '}
                                            <span className="text-slate-600 dark:text-slate-400">
                                                November 18, 2019
                                            </span>{' '}
                                            at{' '}
                                            <span className="text-slate-600 dark:text-slate-400">
                                                5:34 PM
                                            </span>
                                        </span>
                                        <span className="px-1">|</span>
                                        <span>
                                            By{' '}
                                            <span className="text-slate-600 dark:text-slate-400">
                                                Softnio
                                            </span>
                                        </span>
                                        <a
                                            href="#link"
                                            onClick={(e) => e.preventDefault()}
                                            className="ms-3 text-xs leading-none font-medium whitespace-nowrap text-red-600 hover:text-red-700"
                                        >
                                            Delete Note
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        id="pageAside"
                        className={`peer fixed end-0 top-0 z-[999] w-[300px] max-w-[calc(100%-2.5rem)] min-w-[260px] flex-shrink-0 translate-x-full border-s border-gray-300 bg-white transition-transform duration-500 max-2xl:min-h-screen 2xl:static 2xl:w-[380px] 2xl:transform-none 2xl:bg-transparent 2xl:transition-none rtl:-translate-x-full 2xl:rtl:transform-none dark:border-gray-900 dark:bg-gray-950 [&.active]:transform-none ${pageAside ? 'active' : ''}`}
                    >
                        <SimpleBar className="max-2xl:mt-16 max-2xl:max-h-[calc(100vh-theme(spacing.16))]">
                            <div className="flex flex-col items-center border-b border-gray-300 p-5 text-center sm:px-6 sm:py-8 dark:border-gray-900">
                                {data.img ? (
                                    <Avatar size="2xl" rounded img={data.img} />
                                ) : (
                                    <Avatar
                                        variant={data.theme}
                                        size="2xl"
                                        rounded
                                        text={
                                            data.name && toInitials(data.name)
                                        }
                                    />
                                )}
                                <div className="mt-4">
                                    <span className="text-xxs tracking-snug relative inline-flex rounded-full border border-gray-300 px-2 text-center align-middle leading-4.5 font-medium whitespace-nowrap text-slate-400 uppercase dark:border-gray-900">
                                        {data.role}
                                    </span>
                                    <h6 className="font-heading leading-tighter mt-4 mb-2 text-xl font-bold text-slate-700 dark:text-white">
                                        {data.name}
                                    </h6>
                                    <span className="text-sm text-slate-400">
                                        {data.email}
                                    </span>
                                </div>
                            </div>
                            <div className="border-b border-gray-300 px-5 py-3 sm:px-6 dark:border-gray-900">
                                <ul className="flex flex-wrap justify-center gap-1.5">
                                    <li>
                                        <Button.Zoom>
                                            <Icon
                                                className="text-lg"
                                                name="shield-off"
                                            />
                                        </Button.Zoom>
                                    </li>
                                    <li>
                                        <Button.Zoom>
                                            <Icon
                                                className="text-lg"
                                                name="mail"
                                            />
                                        </Button.Zoom>
                                    </li>
                                    <li>
                                        <Button.Zoom>
                                            <Icon
                                                className="text-lg"
                                                name="download-cloud"
                                            />
                                        </Button.Zoom>
                                    </li>
                                    <li>
                                        <Button.Zoom>
                                            <Icon
                                                className="text-lg"
                                                name="bookmark"
                                            />
                                        </Button.Zoom>
                                    </li>
                                    <li>
                                        <Button.Zoom>
                                            <Icon
                                                className="text-lg text-red-600"
                                                name="na"
                                            />
                                        </Button.Zoom>
                                    </li>
                                </ul>
                            </div>
                            <div className="border-b border-gray-300 p-5 sm:p-6 dark:border-gray-900">
                                <h6 className="tracking-relaxed mb-3 text-xs leading-tight font-bold whitespace-nowrap text-slate-400 uppercase">
                                    In Account{' '}
                                </h6>
                                <div className="-mx-3 flex items-end">
                                    <div className="flex gap-x-2 px-3 text-sm text-slate-400">
                                        <div className="flex flex-col">
                                            <div className="text-xl leading-6 font-bold whitespace-nowrap text-slate-700 dark:text-white">
                                                2,500.00
                                                <span className="text-lg leading-6 font-normal">
                                                    {' '}
                                                    USD
                                                </span>
                                            </div>
                                            <div className="mt-2 text-xs">
                                                Invested Amount
                                            </div>
                                        </div>
                                    </div>
                                    <div className="flex gap-x-2 px-3 text-sm text-slate-400">
                                        <span className="text-base text-slate-400">
                                            <em className="ni ni-plus"></em>
                                        </span>
                                        <div className="flex flex-col">
                                            <div className="text-xl leading-6 font-bold whitespace-nowrap text-slate-700 dark:text-white">
                                                1,643.76
                                            </div>
                                            <div className="mt-2 text-xs">
                                                Profit Earned
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="border-b border-gray-300 p-5 sm:p-6 dark:border-gray-900">
                                <div className="grid grid-flow-dense grid-cols-12">
                                    <div className="col-span-4">
                                        <div className="text-center">
                                            <span className="block text-lg font-bold text-slate-600 dark:text-white">
                                                23
                                            </span>
                                            <span className="block text-xs leading-5 text-slate-400">
                                                Total Order
                                            </span>
                                        </div>
                                    </div>
                                    <div className="col-span-4">
                                        <div className="text-center">
                                            <span className="block text-lg font-bold text-slate-600 dark:text-white">
                                                20
                                            </span>
                                            <span className="block text-xs leading-5 text-slate-400">
                                                Complete
                                            </span>
                                        </div>
                                    </div>
                                    <div className="col-span-4">
                                        <div className="text-center">
                                            <span className="block text-lg font-bold text-slate-600 dark:text-white">
                                                3
                                            </span>
                                            <span className="block text-xs leading-5 text-slate-400">
                                                Progress
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="border-b border-gray-300 p-5 sm:p-6 dark:border-gray-900">
                                <h6 className="tracking-relaxed mb-3 text-xs leading-tight font-bold whitespace-nowrap text-slate-400 uppercase">
                                    Additional{' '}
                                </h6>
                                <div className="grid grid-flow-dense grid-cols-12 gap-4">
                                    <div className="col-span-6">
                                        <span className="block text-xs text-slate-400">
                                            User ID:
                                        </span>
                                        <span className="mt-1 block text-sm text-slate-600 dark:text-slate-200">
                                            UD003054
                                        </span>
                                    </div>
                                    <div className="col-span-6">
                                        <span className="block text-xs text-slate-400">
                                            Last Login:
                                        </span>
                                        <span className="mt-1 block text-sm text-slate-600 dark:text-slate-200">
                                            {data.lastLogin}, 01:02 PM
                                        </span>
                                    </div>
                                    <div className="col-span-6">
                                        <span className="block text-xs text-slate-400">
                                            KYC Status:
                                        </span>
                                        <span className="mt-1 block text-sm font-bold text-green-600">
                                            Approved
                                        </span>
                                    </div>
                                    <div className="col-span-6">
                                        <span className="block text-xs text-slate-400">
                                            Register At:
                                        </span>
                                        <span className="mt-1 block text-sm text-slate-600 dark:text-slate-200">
                                            Nov 24, 2019
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div className="p-5 sm:p-6">
                                <h6 className="tracking-relaxed mb-3 text-xs leading-tight font-bold whitespace-nowrap text-slate-400 uppercase">
                                    Groups{' '}
                                </h6>
                                <ul className="flex flex-wrap gap-2">
                                    <Button.Group tagName="li">
                                        <Button size="xs" variant="light-pale">
                                            investor
                                        </Button>
                                        <Button
                                            size="xs"
                                            variant="light-pale"
                                            icon
                                        >
                                            <Icon
                                                className="text-xs leading-4.5"
                                                name="cross"
                                            />
                                        </Button>
                                    </Button.Group>
                                    <Button.Group tagName="li">
                                        <Button size="xs" variant="light-pale">
                                            support
                                        </Button>
                                        <Button
                                            size="xs"
                                            variant="light-pale"
                                            icon
                                        >
                                            <Icon
                                                className="text-xs leading-4.5"
                                                name="cross"
                                            />
                                        </Button>
                                    </Button.Group>
                                    <Button.Group tagName="li">
                                        <Button size="xs" variant="light-pale">
                                            another tag
                                        </Button>
                                        <Button
                                            size="xs"
                                            variant="light-pale"
                                            icon
                                        >
                                            <Icon
                                                className="text-xs leading-4.5"
                                                name="cross"
                                            />
                                        </Button>
                                    </Button.Group>
                                </ul>
                            </div>
                        </SimpleBar>
                    </div>
                    <div
                        onClick={() => {
                            setPageAside(false);
                        }}
                        className="class-toggle bg-opacity-20 invisible fixed inset-0 z-[900] bg-slate-950 opacity-0 peer-[.active]:visible peer-[.active]:opacity-100 2xl:!invisible 2xl:!opacity-0"
                    ></div>
                </div>
            </Card>
        </>
    );
};

export default UserDetailsPage;
