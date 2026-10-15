import React, { Fragment } from 'react';
import { Dialog, Transition } from '@headlessui/react';
import { Icon, Button } from '../../../componenets';
import { fileManagerIcons } from '../../../store/icons';

const FileShareModal = ({ show, setShow }) => {
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
                                <div className="flex flex-shrink-0 items-center justify-between rounded-t-[inherit] border-b border-gray-200 px-5 py-4 sm:px-6 dark:border-gray-800">
                                    <div className="flex items-center">
                                        <div className="h-10 [&>svg]:h-full">
                                            {fileManagerIcons.folder}
                                        </div>
                                        <div className="ms-2">
                                            <div className="mb-1 flex items-center text-sm font-medium">
                                                <span className="line-clamp-1">
                                                    UI/UX Design
                                                </span>
                                            </div>
                                            <div className="text-xs font-medium text-slate-400">
                                                394.87 MB
                                            </div>
                                        </div>
                                    </div>
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
                                <div className="border-b border-gray-200 px-5 py-4 sm:px-6 sm:py-5 dark:border-gray-800">
                                    <div className="flex items-center">
                                        <label className="pe-4 text-sm text-slate-400">
                                            To
                                        </label>
                                        <input
                                            type="text"
                                            className="block w-full border-0 bg-transparent p-0 text-sm leading-4.5 placeholder-slate-300 focus:border-0 focus:shadow-none focus:ring-0 focus:ring-offset-0 focus:outline-0"
                                            placeholder="Email or Name"
                                        />
                                        <Button
                                            size="sm"
                                            variant="white-outline"
                                            className="whitespace-nowrap"
                                        >
                                            Can View
                                        </Button>
                                    </div>
                                </div>
                                <div className="px-5 py-5 sm:px-6 sm:py-6">
                                    <textarea
                                        className="block min-h-[200px] w-full resize-none rounded border-0 bg-white p-0 text-sm leading-4.5 text-slate-700 placeholder-slate-300 transition-all focus:border-0 focus:shadow-none focus:ring-0 focus:ring-offset-0 focus:outline-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                                        placeholder="Add a Message (optional)"
                                    ></textarea>
                                </div>
                                <div className="rounded-b-[inherit] bg-gray-200 px-5 py-4 sm:px-6 dark:bg-gray-900">
                                    <div className="flex flex-wrap items-center justify-end gap-3">
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
                                                    Share
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

export default FileShareModal;
