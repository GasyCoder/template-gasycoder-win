import React, { Fragment } from 'react';
import { Dialog, Transition } from '@headlessui/react';
import { Breadcrumb, Button, Icon } from '../../../componenets';
import { fileManagerIcons } from '../../../store/icons';

const FileMoveModal = ({ show, setShow }) => {
    return (
        <Transition appear show={show} as={Fragment}>
            <Dialog
                as="div"
                className="relative z-[5000]"
                onClose={() => setShow(false)}
            >
                <Transition.Child
                    as={Fragment}
                    enter="ease-out duration-300"
                    enterFrom="opacity-0"
                    enterTo="opacity-100"
                    leave="ease-in duration-200"
                    leaveFrom="opacity-100"
                    leaveTo="opacity-0"
                >
                    <div className="fixed inset-0 bg-slate-700/50" />
                </Transition.Child>

                <div className="fixed inset-0 overflow-y-auto">
                    <div className="flex min-h-full items-center justify-center p-4 text-center">
                        <Transition.Child
                            as={Fragment}
                            enter="ease-out duration-300"
                            enterFrom="opacity-0 -translate-y-6"
                            enterTo="opacity-100 translate-y-0"
                            leave="ease-in duration-200"
                            leaveFrom="opacity-100 translate-y-0"
                            leaveTo="opacity-0 -translate-y-6"
                        >
                            <Dialog.Panel className="relative mx-auto w-full rounded-md bg-white text-start sm:w-[520px] md:w-[720px] dark:bg-gray-950">
                                <div className="flex flex-shrink-0 items-center justify-between rounded-t-[inherit] px-5 pt-4 sm:px-6">
                                    <h5 className="font-heading text-xl font-bold text-slate-700 dark:text-white">
                                        Move item to ...
                                    </h5>
                                    <button
                                        onClick={() => setShow(false)}
                                        className="text-slate-500 hover:text-slate-700 dark:text-white"
                                    >
                                        <Icon
                                            className="text-2xl"
                                            name="cross"
                                        ></Icon>
                                    </button>
                                </div>
                                <div className="px-5 pb-5 sm:px-6 sm:pb-6">
                                    <ul className="mb-2 flex flex-wrap py-1">
                                        <li className="text-xxs inline-flex items-center ps-2 font-medium tracking-wider text-slate-300 first:ps-0">
                                            <a
                                                className="hover:text-primary-600 text-slate-400"
                                                href="#link"
                                                onClick={(e) =>
                                                    e.preventDefault()
                                                }
                                            >
                                                Project
                                            </a>
                                            <Icon
                                                className="text-xxs/none my-0.5 ms-2 font-medium text-slate-400 rtl:-scale-x-100"
                                                name="forward-ios"
                                            ></Icon>
                                        </li>
                                        <li className="text-xxs inline-flex items-center ps-2 font-medium tracking-wider text-slate-300 first:ps-0">
                                            Apps
                                        </li>
                                    </ul>
                                    <div className="rounded border border-gray-200 dark:border-gray-800">
                                        <a
                                            className="flex items-center border-b border-gray-200 px-5 py-2 first:rounded-t-[inherit] last:rounded-b-[inherit] last:border-b-0 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900"
                                            href="#link"
                                            onClick={(e) => e.preventDefault()}
                                        >
                                            <div className="h-8 [&>svg]:h-full">
                                                {fileManagerIcons.folder}
                                            </div>
                                            <span className="ms-3 text-sm font-medium">
                                                <span className="line-clamp-1">
                                                    UI/UX Design
                                                </span>
                                            </span>
                                            <div className="ms-auto -me-1 inline-flex">
                                                <Icon
                                                    className="text-base/none rtl:-scale-x-100"
                                                    name="chevron-right"
                                                ></Icon>
                                            </div>
                                        </a>
                                        <a
                                            className="flex items-center border-b border-gray-200 px-5 py-2 first:rounded-t-[inherit] last:rounded-b-[inherit] last:border-b-0 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900"
                                            href="#link"
                                            onClick={(e) => e.preventDefault()}
                                        >
                                            <div className="h-8 [&>svg]:h-full">
                                                {fileManagerIcons.folder}
                                            </div>
                                            <span className="ms-3 text-sm font-medium">
                                                <span className="line-clamp-1">
                                                    UI Design
                                                </span>
                                            </span>
                                            <div className="ms-auto -me-1 inline-flex">
                                                <Icon
                                                    className="text-base/none rtl:-scale-x-100"
                                                    name="chevron-right"
                                                ></Icon>
                                            </div>
                                        </a>
                                        <a
                                            className="selected flex items-center border-b border-gray-200 px-5 py-2 first:rounded-t-[inherit] last:rounded-b-[inherit] last:border-b-0 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900"
                                            href="#link"
                                            onClick={(e) => e.preventDefault()}
                                        >
                                            <div className="h-8 [&>svg]:h-full">
                                                {fileManagerIcons.folderShared}
                                            </div>
                                            <span className="ms-3 text-sm font-medium">
                                                <span className="line-clamp-1">
                                                    Projects
                                                </span>
                                            </span>
                                            <div className="ms-auto -me-1 inline-flex">
                                                <Icon
                                                    className="text-base/none rtl:-scale-x-100"
                                                    name="chevron-right"
                                                ></Icon>
                                            </div>
                                        </a>
                                        <a
                                            className="flex items-center border-b border-gray-200 px-5 py-2 first:rounded-t-[inherit] last:rounded-b-[inherit] last:border-b-0 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900"
                                            href="#link"
                                            onClick={(e) => e.preventDefault()}
                                        >
                                            <div className="h-8 [&>svg]:h-full">
                                                {fileManagerIcons.folder}
                                            </div>
                                            <span className="ms-3 text-sm font-medium">
                                                <span className="line-clamp-1">
                                                    2019 Project
                                                </span>
                                            </span>
                                            <div className="ms-auto -me-1 inline-flex">
                                                <Icon
                                                    className="text-base/none rtl:-scale-x-100"
                                                    name="chevron-right"
                                                ></Icon>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div className="rounded-b-[inherit] bg-gray-200 px-5 py-4 sm:px-6 dark:bg-gray-900">
                                    <div className="flex flex-wrap items-center justify-between gap-3">
                                        <button className="text-primary-600 hover:text-primary-700 text-sm font-medium transition-all duration-300">
                                            Create New Folder
                                        </button>
                                        <ul className="flex items-center gap-5">
                                            <li>
                                                <Button
                                                    onClick={() =>
                                                        setShow(false)
                                                    }
                                                    size="rg"
                                                    variant="light"
                                                    className="bg-white"
                                                >
                                                    Cancel
                                                </Button>
                                            </li>
                                            <li>
                                                <Button
                                                    onClick={() =>
                                                        setShow(false)
                                                    }
                                                    size="rg"
                                                    variant="primary"
                                                >
                                                    Move
                                                </Button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </Dialog.Panel>
                        </Transition.Child>
                    </div>
                </div>
            </Dialog>
        </Transition>
    );
};

export default FileMoveModal;
