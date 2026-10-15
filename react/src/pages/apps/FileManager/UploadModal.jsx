import React, { Fragment } from 'react';
import { Dialog, Transition } from '@headlessui/react';
import { Button, Icon, Progress, File } from '../../../componenets';
import { fileManagerIcons } from '../../../store/icons';

const UploadModal = ({ show, setShow }) => {
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
                                <button
                                    onClick={() => setShow(false)}
                                    className="absolute end-3 top-3 text-slate-500 hover:text-slate-700 dark:text-white"
                                >
                                    <Icon
                                        className="text-xl"
                                        name="cross"
                                    ></Icon>
                                </button>
                                <div className="px-5 py-6 sm:p-8">
                                    <div className="mb-9">
                                        <h5 className="font-heading mb-4 text-xl font-bold text-slate-700 dark:text-white">
                                            Upload File
                                        </h5>
                                        <File.Dropzone
                                            id="DropzoneDefault"
                                            className="!bg-gray-50 dark:!bg-gray-900"
                                        >
                                            <div className="dz-message !my-3">
                                                <span className="text-primary-600 block text-sm">
                                                    Drag and drop{' '}
                                                    <span className="text-slate-400">
                                                        {' '}
                                                        file here or{' '}
                                                    </span>{' '}
                                                    browse
                                                </span>
                                            </div>
                                        </File.Dropzone>
                                    </div>
                                    <h6 className="font-heading text-base/tighter -tracking-snug mb-3 font-bold text-slate-700 dark:text-white">
                                        Uploaded Files
                                    </h6>
                                    <div className="flex flex-col gap-2">
                                        <div className="flex items-center rounded border border-gray-200 p-2 dark:border-gray-800">
                                            <div className="me-1 h-12 flex-shrink-0 [&>svg]:h-full">
                                                {fileManagerIcons.fileZip}
                                            </div>
                                            <div className="flex-grow pe-3">
                                                <div className="mb-2 flex items-center justify-between">
                                                    <span className="text-sm/tighter flex items-center font-medium text-slate-600 dark:text-white">
                                                        <span className="line-clamp-1">
                                                            DashWind-latest-version
                                                        </span>
                                                        .zip
                                                    </span>
                                                </div>
                                                <div className="text-xs text-slate-400">
                                                    25.49 MB
                                                </div>
                                            </div>
                                            <div className="ms-auto">
                                                <Button.Zoom size="rg">
                                                    <Icon
                                                        className="text-xl text-slate-500 dark:text-slate-300"
                                                        name="trash"
                                                    />
                                                </Button.Zoom>
                                            </div>
                                        </div>
                                        <div className="flex items-center rounded border border-gray-200 p-2 dark:border-gray-800">
                                            <div className="me-1 h-12 flex-shrink-0 [&>svg]:h-full">
                                                {fileManagerIcons.fileDoc}
                                            </div>
                                            <div className="flex-grow pe-3">
                                                <div className="mb-2 flex items-center justify-between">
                                                    <span className="text-sm/tighter flex items-center font-medium text-slate-600 dark:text-white">
                                                        <span className="line-clamp-1">
                                                            Update work history
                                                        </span>
                                                        .docx
                                                    </span>
                                                    <span className="text-xs text-slate-400">
                                                        70% Done
                                                    </span>
                                                </div>
                                                <Progress
                                                    size="xs"
                                                    className="bg-slate-100 dark:bg-slate-900"
                                                >
                                                    <Progress.Bar progress="70%"></Progress.Bar>
                                                </Progress>
                                            </div>
                                            <div className="ms-auto">
                                                <Button.Zoom size="rg">
                                                    <Icon
                                                        className="text-xl text-slate-500 dark:text-slate-300"
                                                        name="trash"
                                                    />
                                                </Button.Zoom>
                                            </div>
                                        </div>
                                    </div>

                                    <div className="mt-6 flex justify-end">
                                        <ul className="flex items-center gap-5">
                                            <li>
                                                <button
                                                    onClick={() =>
                                                        setShow(false)
                                                    }
                                                    className="text-primary-600 hover:text-primary-700 text-sm font-medium transition-all duration-300"
                                                >
                                                    Cancel
                                                </button>
                                            </li>
                                            <li>
                                                <Button
                                                    size="rg"
                                                    variant="primary"
                                                >
                                                    Add Files
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

export default UploadModal;
