import React, { Fragment } from 'react';
import { Dialog, Transition } from '@headlessui/react';
import { Button, Icon } from '../../../componenets';
import moment from 'moment';

const PreviewModal = ({ show, setShow, data, onDelete, onEdit }) => {
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
                            <Dialog.Panel className="mx-auto w-full rounded-md bg-white text-start sm:w-[520px] md:w-[600px] dark:bg-gray-950">
                                <div className="modal-header flex items-center justify-between rounded-t-md border-b border-gray-200 px-5 py-3 sm:px-6 sm:py-4 dark:border-gray-900">
                                    <h4 className="modal-title event-title font-heading text-xl font-bold text-slate-700 dark:text-white">
                                        {data.title}
                                    </h4>
                                    <button
                                        onClick={() => setShow(false)}
                                        className="text-current opacity-80 transition-all duration-300 hover:opacity-100 dark:text-current"
                                    >
                                        <Icon
                                            className="text-xl"
                                            name="cross"
                                        ></Icon>
                                    </button>
                                </div>
                                <div className="modal-body px-5 py-4 sm:px-6 sm:py-5">
                                    <div>
                                        <div className="-mx-4 flex flex-wrap gap-y-4">
                                            {data.start && (
                                                <div className="w-1/2 px-4">
                                                    <h6 className="tracking-relaxed mb-2 text-xs leading-tight font-bold whitespace-nowrap text-slate-400 uppercase dark:text-slate-300">
                                                        Start Time
                                                    </h6>
                                                    <p className="event-start text-sm text-slate-600 dark:text-slate-400">
                                                        {moment(
                                                            data.start,
                                                        ).format(
                                                            'D MMMM YYYY - h:mm A',
                                                        )}
                                                    </p>
                                                </div>
                                            )}
                                            {data.end && (
                                                <div className="w-1/2 px-4">
                                                    <h6 className="tracking-relaxed mb-2 text-xs leading-tight font-bold whitespace-nowrap text-slate-400 uppercase dark:text-slate-300">
                                                        End Time
                                                    </h6>
                                                    <p className="event-end text-sm text-slate-600 dark:text-slate-400">
                                                        {moment(
                                                            data.end,
                                                        ).format(
                                                            'D MMMM YYYY - h:mm A',
                                                        )}
                                                    </p>
                                                </div>
                                            )}
                                            {data.description && (
                                                <div className="w-full px-4">
                                                    <h6 className="tracking-relaxed mb-2 text-xs leading-tight font-bold whitespace-nowrap text-slate-400 uppercase dark:text-slate-300">
                                                        Event Details
                                                    </h6>
                                                    <p className="event-description text-sm text-slate-600 dark:text-slate-400">
                                                        {data.description}
                                                    </p>
                                                </div>
                                            )}
                                        </div>
                                    </div>
                                </div>
                                <div className="modal-footer flex items-center justify-between gap-3 px-5 pb-4 sm:px-6 sm:pb-5">
                                    <Button
                                        size="rg"
                                        onClick={() => {
                                            setShow(false);
                                            onEdit(data && data.id);
                                        }}
                                        variant="primary"
                                    >
                                        Edit Event
                                    </Button>
                                    <Button
                                        size="rg"
                                        onClick={() => {
                                            setShow(false);
                                            onDelete(data && data.id);
                                        }}
                                        variant="red-pale"
                                    >
                                        Delete
                                    </Button>
                                </div>
                            </Dialog.Panel>
                        </Transition.Child>
                    </div>
                </div>
            </Dialog>
        </Transition>
    );
};

export default PreviewModal;
