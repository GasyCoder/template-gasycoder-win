import React from 'react';
import { Icon, Avatar } from '../../../componenets';
import { toInitials } from '../../../utilities';

const ReplyMessages = ({ data }) => {
    return (
        <>
            <div className="border-b border-gray-200 px-5 py-6 sm:px-9 lg:hidden dark:border-gray-800">
                <h4 className="font-heading text-xl/tighter mb-2 line-clamp-1 font-bold tracking-tight text-slate-700 sm:mb-4 dark:text-white">
                    {data.title}
                </h4>
                <ul className="flex flex-wrap gap-6">
                    <li>
                        <span className="inline-flex items-center gap-2 text-slate-400">
                            <Icon
                                className="text-primary-600 text-sm/none"
                                name="flag-fill"
                            />
                            <span>Technical Problem</span>
                        </span>
                    </li>
                </ul>
            </div>
            <div className="px-5 py-5 sm:px-9 lg:py-8">
                <div className="mb-2 flex cursor-pointer items-center justify-between [&.is-opended]:cursor-default">
                    <div className="flex items-center">
                        {data.image ? (
                            <Avatar size="sm" rounded img={data.image} />
                        ) : (
                            <Avatar
                                size="sm"
                                variant={data.theme}
                                rounded
                                text={toInitials(data.name)}
                            />
                        )}
                        <div className="ms-3 text-sm/4 font-bold text-slate-600 dark:text-white">
                            {data.name}
                        </div>
                    </div>
                    <div className="text-xs text-slate-400">{data.date}</div>
                </div>
                <div className="ms-12">
                    <div className="entry">
                        {data.message.map((item, index) => {
                            return <p key={index}>{item}</p>;
                        })}
                    </div>
                    <div className="mt-7 rounded border border-gray-200 dark:border-gray-800">
                        <ul className="flex flex-wrap gap-x-8 gap-y-2 px-5 py-4">
                            <li className="w-[180px]">
                                <a
                                    className="flex w-full items-center text-slate-600 dark:text-slate-300"
                                    href="#link"
                                    onClick={(e) => e.preventDefault()}
                                >
                                    <em className="text-primary-600 ni ni-img me-4 text-2xl/none"></em>
                                    <span className="line-clamp-1">
                                        error-show-On-order.jpg
                                    </span>
                                </a>
                            </li>
                            <li className="w-[180px]">
                                <a
                                    className="flex w-full items-center text-slate-600 dark:text-slate-300"
                                    href="#link"
                                    onClick={(e) => e.preventDefault()}
                                >
                                    <em className="text-primary-600 ni ni-img me-4 text-2xl/none"></em>
                                    <span className="line-clamp-1">
                                        full-page-error.jpg
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div className="flex flex-wrap justify-between rounded-b border-t border-gray-200 bg-gray-50 px-5 py-3 dark:border-gray-800 dark:bg-gray-900">
                            <span className="text-sm font-medium text-slate-700 dark:text-white">
                                2 files attached
                            </span>
                            <a
                                className="group/link inline-flex items-center gap-3.5 text-sm/none font-medium whitespace-nowrap"
                                href="#link"
                                onClick={(e) => e.preventDefault()}
                            >
                                <em className="text-primary-500 group-hover/link:text-primary-600 ni ni-download text-lg/none transition-all duration-300"></em>
                                <span className="group-hover/link:text-primary-600 text-slate-400 transition-all duration-300">
                                    Download All
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {data.reply.map((item, index) => {
                return (
                    <React.Fragment key={index}>
                        {item.note ? (
                            <div className="px-5 py-5 sm:px-9 lg:py-8">
                                <div className="mb-2 flex cursor-pointer items-center justify-between [&.is-opended]:cursor-default">
                                    <div className="flex items-center">
                                        {item.image ? (
                                            <Avatar
                                                size="sm"
                                                rounded
                                                img={item.image}
                                            />
                                        ) : (
                                            <Avatar
                                                size="sm"
                                                variant={item.theme}
                                                rounded
                                                text={toInitials(item.name)}
                                            />
                                        )}
                                        <div className="ms-3 text-sm/4 font-bold text-slate-600 dark:text-white">
                                            {item.name}{' '}
                                            <span className="font-normal text-slate-400">
                                                added a note
                                            </span>
                                        </div>
                                    </div>
                                    <div className="text-xs text-slate-400">
                                        {item.date}
                                    </div>
                                </div>
                                <div className="ms-12">
                                    <div className="entry bg-opacity-70 rounded bg-gray-100 px-5 py-3 dark:bg-gray-900">
                                        {item.message.map((item, index) => {
                                            return <p key={index}>{item}</p>;
                                        })}
                                    </div>
                                </div>
                            </div>
                        ) : item.assigned ? (
                            <div className="mx-5 overflow-hidden px-8 text-center sm:mx-9 lg:mx-10">
                                <div className="relative inline-block px-3 text-xs/snug text-slate-400 before:absolute before:end-full before:top-1/2 before:h-px before:w-screen before:bg-gray-200 after:absolute after:start-full after:top-1/2 after:h-px after:w-screen after:bg-gray-200 before:dark:bg-gray-900 after:dark:bg-gray-900">
                                    <span className="text-slate-600 dark:text-slate-400">
                                        {item.assigned.by}
                                    </span>{' '}
                                    assigned user:{' '}
                                    <span className="text-primary-600">
                                        {item.assigned.name}
                                    </span>{' '}
                                    at {item.assigned.date} at{' '}
                                    {item.assigned.time}
                                </div>
                            </div>
                        ) : item.sap ? (
                            <div className="mx-5 overflow-hidden px-8 text-center sm:mx-9 lg:mx-10">
                                <div className="relative inline-block px-3 text-xs/snug text-slate-400 before:absolute before:end-full before:top-1/2 before:h-px before:w-screen before:bg-gray-200 after:absolute after:start-full after:top-1/2 after:h-px after:w-screen after:bg-gray-200 before:dark:bg-gray-900 after:dark:bg-gray-900">
                                    <strong className="text-gray-600 dark:text-gray-400">
                                        {item.sap.date}
                                    </strong>
                                </div>
                            </div>
                        ) : (
                            <div className="px-5 py-5 sm:px-9 lg:py-8">
                                <div className="mb-2 flex cursor-pointer items-center justify-between [&.is-opended]:cursor-default">
                                    <div className="flex items-center">
                                        {item.image ? (
                                            <Avatar
                                                size="sm"
                                                rounded
                                                img={item.image}
                                            />
                                        ) : (
                                            <Avatar
                                                size="sm"
                                                variant={item.theme}
                                                rounded
                                                text={toInitials(item.name)}
                                            />
                                        )}
                                        <div className="ms-3 text-sm/4 font-bold text-slate-600 dark:text-white">
                                            {item.name}{' '}
                                            {item.you && (
                                                <span className="font-normal text-slate-400">
                                                    (You)
                                                </span>
                                            )}
                                        </div>
                                    </div>
                                    <div className="text-xs text-slate-400">
                                        {item.date}
                                    </div>
                                </div>
                                <div className="ms-12">
                                    <div className="entry">
                                        {item.message.map((item, index) => {
                                            return <p key={index}>{item}</p>;
                                        })}
                                    </div>
                                    <div className="bg-opacity-70 mt-5 inline-block rounded bg-gray-100 px-3 py-1.5 text-xs dark:bg-gray-900">
                                        Replied by <span>{item.name}</span> at{' '}
                                        {item.time}
                                    </div>
                                </div>
                            </div>
                        )}
                    </React.Fragment>
                );
            })}
        </>
    );
};

export default ReplyMessages;
