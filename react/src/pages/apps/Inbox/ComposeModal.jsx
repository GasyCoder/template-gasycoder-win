import { Fragment, useState } from 'react';
import { Dialog, Transition } from '@headlessui/react';
import { Button, Icon, Tooltip } from '../../../componenets';
import Tags from '@yaireo/tagify/dist/react.tagify';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

const ActionDropdown = ({ className }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? 'top-start' : 'top-end',
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
                            <Icon className="text-xl" name="more-v" />
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
                                    <span>Another Option</span>
                                </Menu.Item>
                            </li>
                            <li className="active">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>More Option</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const TemplateDropdown = ({ className }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? 'top-end' : 'top-start',
        modifiers: [
            { name: 'offset', options: { offset: [0, 4] } },
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
                        <Tooltip placement="top" content="Template">
                            <button className="relative inline-flex h-7.5 w-7.5 items-center justify-center rounded-sm text-center align-middle text-xs leading-4.5 font-bold tracking-wide">
                                <Icon className="text-base/none" name="hash" />
                            </button>
                        </Tooltip>
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
                                <h6 className="relative flex items-center px-5 py-2.5 text-xs leading-5 text-slate-400">
                                    Quick Insert
                                </h6>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                >
                                    <span>Thank you message</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                >
                                    <span>Your issues solved</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                >
                                    <span>Thank you message</span>
                                </Menu.Item>
                            </li>
                            <li className="my-2 block border-t border-gray-300 dark:border-gray-900"></li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none"
                                        name="file-plus"
                                    />
                                    <span>Save as Template</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none"
                                        name="notes-alt"
                                    />
                                    <span>Manage Template</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const ComposeModal = () => {
    let [isOpen, setIsOpen] = useState(false);

    const [showCC, setShowCC] = useState(false);
    const [showBCC, setShowBCC] = useState(false);

    return (
        <>
            <button
                onClick={() => setIsOpen(true)}
                className="modal-toggle font-body text-primary-500 hover:text-primary-600 inline-flex items-center text-sm leading-none font-medium whitespace-nowrap transition-all duration-300 *:pointer-events-none"
            >
                <Icon className="me-3 text-lg leading-none" name="plus" />{' '}
                <span>Compose</span>
            </button>
            <Transition appear show={isOpen} as={Fragment}>
                <Dialog
                    as="div"
                    className="relative z-[5000]"
                    onClose={() => setIsOpen(false)}
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
                        <div className="fixed inset-0 bg-black/25" />
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
                                        <h5 className="-tracking-snug font-heading text-xl font-bold text-slate-700 dark:text-white">
                                            Compose Mail
                                        </h5>
                                        <button
                                            onClick={() => setIsOpen(false)}
                                            className="modal-close text-slate-500 *:pointer-events-none hover:text-slate-700 dark:text-white"
                                        >
                                            <Icon
                                                className="text-2xl"
                                                name="cross"
                                            ></Icon>
                                        </button>
                                    </div>
                                    <div className="border-b border-gray-200 px-5 sm:px-6 dark:border-gray-800">
                                        <div className="relative flex flex-grow items-center py-4 max-sm:flex-wrap sm:items-start">
                                            <div className="w-full">
                                                <div className="flex items-center sm:pe-14">
                                                    <label className="w-6 pe-2 text-sm text-slate-400">
                                                        To
                                                    </label>
                                                    <Tags
                                                        className="!border-transparent"
                                                        defaultValue="info@softnio.com"
                                                    />
                                                </div>
                                                {showCC && (
                                                    <div
                                                        className="flex items-center [&_.tags-input]:flex-grow"
                                                        id="mail-cc"
                                                    >
                                                        <label className="w-6 pe-2 text-sm text-slate-400">
                                                            Cc
                                                        </label>
                                                        <Tags className="!border-transparent" />
                                                        <button
                                                            onClick={() =>
                                                                setShowCC(
                                                                    !showCC,
                                                                )
                                                            }
                                                            className="class-toggle hover:text-primary-600 text-slate-400 *:pointer-events-none"
                                                        >
                                                            <Icon name="cross"></Icon>
                                                        </button>
                                                    </div>
                                                )}
                                                {showBCC && (
                                                    <div
                                                        className="flex items-center [&_.tags-input]:flex-grow"
                                                        id="mail-bcc"
                                                    >
                                                        <label className="w-6 pe-2 text-sm text-slate-400">
                                                            Bcc
                                                        </label>
                                                        <Tags className="!border-transparent" />
                                                        <button
                                                            onClick={() =>
                                                                setShowBCC(
                                                                    !showBCC,
                                                                )
                                                            }
                                                            className="class-toggle hover:text-primary-600 text-slate-400 *:pointer-events-none"
                                                        >
                                                            <Icon name="cross"></Icon>
                                                        </button>
                                                    </div>
                                                )}
                                            </div>
                                            <ul className="absolute end-0 top-5 flex gap-x-3 sm:top-6">
                                                <li>
                                                    <button
                                                        onClick={() =>
                                                            setShowCC(!showCC)
                                                        }
                                                        className="class-toggle hover:text-primary-600 text-slate-400 *:pointer-events-none"
                                                    >
                                                        CC
                                                    </button>
                                                </li>
                                                <li>
                                                    <button
                                                        onClick={() =>
                                                            setShowBCC(!showBCC)
                                                        }
                                                        className="class-toggle hover:text-primary-600 text-slate-400 *:pointer-events-none"
                                                    >
                                                        BCC
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div className="px-5 py-6 sm:px-6">
                                        <textarea
                                            className="block min-h-[278px] w-full resize-none rounded border-0 bg-white p-0 text-sm leading-4.5 text-slate-700 placeholder-slate-300 transition-all focus:border-0 focus:shadow-none focus:ring-0 focus:ring-offset-0 focus:outline-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                                            placeholder="Hello"
                                        ></textarea>
                                    </div>
                                    <div className="flex justify-between rounded-b-[inherit] border-t border-gray-200 p-5 sm:p-6 dark:border-gray-800">
                                        <ul className="inline-flex items-center gap-1.5">
                                            <li className="me-2">
                                                <Button
                                                    onClick={() =>
                                                        setIsOpen(false)
                                                    }
                                                    size="rg"
                                                    variant="primary"
                                                    type="submit"
                                                >
                                                    Send
                                                </Button>
                                            </li>
                                            <li>
                                                <TemplateDropdown />
                                            </li>
                                            <li>
                                                <Tooltip
                                                    placement="top"
                                                    content="Upload Attachment"
                                                >
                                                    <a
                                                        className="relative inline-flex h-7.5 w-7.5 items-center justify-center rounded-sm text-center align-middle text-xs leading-4.5 font-bold tracking-wide"
                                                        href="#link"
                                                        onClick={(e) =>
                                                            e.preventDefault()
                                                        }
                                                    >
                                                        <Icon
                                                            className="text-base/none"
                                                            name="clip-v"
                                                        ></Icon>
                                                    </a>
                                                </Tooltip>
                                            </li>
                                            <li>
                                                <Tooltip
                                                    placement="top"
                                                    content="Upload Images"
                                                >
                                                    <a
                                                        className="relative inline-flex h-7.5 w-7.5 items-center justify-center rounded-sm text-center align-middle text-xs leading-4.5 font-bold tracking-wide"
                                                        href="#link"
                                                        onClick={(e) =>
                                                            e.preventDefault()
                                                        }
                                                    >
                                                        <Icon
                                                            className="text-base/none"
                                                            name="img"
                                                        ></Icon>
                                                    </a>
                                                </Tooltip>
                                            </li>
                                        </ul>
                                        <ul className="-me-2 inline-flex items-center gap-1">
                                            <li>
                                                <ActionDropdown />
                                            </li>
                                            <li>
                                                <Button.Zoom size="rg">
                                                    <Icon
                                                        className="text-base/none text-slate-600"
                                                        name="trash"
                                                    />
                                                </Button.Zoom>
                                            </li>
                                        </ul>
                                    </div>
                                </Dialog.Panel>
                            </Transition.Child>
                        </div>
                    </div>
                </Dialog>
            </Transition>
        </>
    );
};

export default ComposeModal;
