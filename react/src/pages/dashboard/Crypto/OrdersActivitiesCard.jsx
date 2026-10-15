import React from 'react';
import { Card } from '../../../componenets';

const OrdersActivitiesCard = ({ className }) => {
    const data = [
        {
            title: 'Buy Bitcoin',
            type: 'buy',
            currency: 'bitcoin',
            date: '02/10/2020',
            time: '11:37 PM',
            reference: 'RE2309232',
            amount: '0.2040',
            usdAmount: '4,596.75',
        },
        {
            title: 'Buy Ethereum',
            type: 'buy',
            currency: 'ethereum',
            date: '02/10/2020',
            time: '10:37 PM',
            reference: 'RE2309231',
            amount: '0.12600',
            usdAmount: '2,039.39',
        },
        {
            title: 'Sell Bitcoin',
            type: 'sell',
            currency: 'bitcoin',
            date: '02/10/2020',
            time: '10:45 PM',
            reference: 'RE2309230',
            amount: '0.94750',
            usdAmount: '9,285.71',
        },
        {
            title: 'Sell Ethereum',
            type: 'sell',
            currency: 'ethereum',
            date: '02/11/2020',
            time: '10:25 PM',
            reference: 'RE2309229',
            amount: '1.02050',
            usdAmount: '12,596.75',
        },
        {
            title: 'Buy Bitcoin',
            type: 'buy',
            currency: 'bitcoin',
            date: '02/10/2020',
            time: '10:12 PM',
            reference: 'RE2309228',
            amount: '0.00056',
            usdAmount: '400.00',
        },
        {
            title: 'Sell Ethereum',
            type: 'sell',
            currency: 'ethereum',
            date: '02/09/2020',
            time: '05:15 PM',
            reference: 'RE2309227',
            amount: '0.02575',
            usdAmount: '6,246.50',
        },
    ];
    return (
        <Card className="h-full">
            <Card.Body className="border-b border-gray-300 dark:border-gray-900">
                <div className="relative -my-1 flex items-center justify-between">
                    <h6 className="font-heading -tracking-snug text-base leading-6.5 font-bold text-slate-700 dark:text-white">
                        <span className="me-2">Orders Activities</span>{' '}
                        <a
                            href="#link"
                            onClick={(e) => e.preventDefault()}
                            className="font-body text-primary-500 hover:text-primary-600 d-none d-sm-inline hidden text-sm leading-none font-medium whitespace-nowrap transition-all duration-300 sm:inline-flex"
                        >
                            See History
                        </a>
                    </h6>
                    <ul className="-my-1 flex gap-x-5">
                        <li>
                            <a
                                className="before:bg-primary-600 relative block py-2.5 leading-none text-slate-400 before:absolute before:inset-0 before:top-auto before:h-0.5 before:opacity-0 [&.active]:text-slate-600 [&.active]:before:opacity-100"
                                href="#link"
                                onClick={(e) => e.preventDefault()}
                            >
                                <span>Paid</span>
                            </a>
                        </li>
                        <li>
                            <a
                                className="before:bg-primary-600 relative block py-2.5 leading-none text-slate-400 before:absolute before:inset-0 before:top-auto before:h-0.5 before:opacity-0 [&.active]:text-slate-600 [&.active]:before:opacity-100"
                                href="#link"
                                onClick={(e) => e.preventDefault()}
                            >
                                <span>Pending</span>
                            </a>
                        </li>
                        <li>
                            <a
                                className="active before:bg-primary-600 relative block py-2.5 leading-none text-slate-400 before:absolute before:inset-0 before:top-auto before:h-0.5 before:opacity-0 [&.active]:text-slate-600 [&.active]:before:opacity-100"
                                href="#link"
                                onClick={(e) => e.preventDefault()}
                            >
                                <span>All</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </Card.Body>
            <div className="table w-full text-sm text-slate-400">
                <div className="table-row [&>*]:border-b [&>*]:last:border-b-0">
                    <div className="relative table-cell w-[66px] border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                        <span>Type</span>
                    </div>
                    <div className="relative table-cell border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                        <span>Desc</span>
                    </div>
                    <div className="relative hidden border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900">
                        <span>Date</span>
                    </div>
                    <div className="relative hidden border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 xl:table-cell dark:border-gray-900">
                        <span>Time</span>
                    </div>
                    <div className="relative hidden border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 2xl:table-cell dark:border-gray-900">
                        <span>Ref</span>
                    </div>
                    <div className="relative table-cell border-gray-300 px-2 py-2 text-end align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                        <span>USD Amount</span>
                    </div>
                    <div className="relative table-cell border-gray-300 px-2 py-2 text-end align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                        <span>Amount</span>
                    </div>
                </div>
                {data.map((item, index) => {
                    return (
                        <div
                            key={index}
                            className="hover:dark:bg-gray-1000 table-row transition-all duration-300 hover:bg-gray-50 [&>*]:border-b [&>*]:last:border-b-0"
                        >
                            <div className="relative table-cell w-[66px] border-gray-300 px-2 py-4 align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                                <ul className="flex items-center">
                                    <li className="-ms-3.5 first:ms-0">
                                        {item.type === 'buy' && (
                                            <em className="icon ni ni-arrow-down-left relative flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 border-white bg-green-100 text-lg font-medium text-green-600 dark:border-gray-950 dark:bg-green-950"></em>
                                        )}
                                        {item.type === 'sell' && (
                                            <em className="text-primary-600 bg-primary-100 dark:bg-primary-950 icon ni ni-arrow-up-right relative flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 border-white text-lg font-medium dark:border-gray-950"></em>
                                        )}
                                    </li>
                                    <li className="-ms-3.5 first:ms-0">
                                        {item.currency === 'bitcoin' && (
                                            <em className="ni ni-sign-btc relative flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 border-white bg-[#feefe2] text-lg font-medium text-[#f9841e] dark:border-gray-950 dark:bg-[#362c25]"></em>
                                        )}
                                        {item.currency === 'ethereum' && (
                                            <em className="ni ni-sign-eth relative flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 border-white bg-[#eaedf6] text-lg font-medium text-[#6174b9] dark:border-gray-950 dark:bg-[#20293c]"></em>
                                        )}
                                    </li>
                                </ul>
                            </div>
                            <div className="relative table-cell border-gray-300 px-2 py-4 align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                                <div className="flex items-center text-sm font-medium text-slate-700 dark:text-white">
                                    {item.title}
                                </div>
                            </div>
                            <div className="relative hidden border-gray-300 px-2 py-4 align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900">
                                <span className="text-xs">{item.date}</span>
                            </div>
                            <div className="relative hidden border-gray-300 px-2 py-4 align-middle first:ps-6 last:pe-6 xl:table-cell dark:border-gray-900">
                                <span className="text-xs">{item.time}</span>
                            </div>
                            <div className="relative hidden border-gray-300 px-2 py-4 align-middle first:ps-6 last:pe-6 2xl:table-cell dark:border-gray-900">
                                <span className="text-primary-600 text-xs">
                                    {item.reference}
                                </span>
                            </div>
                            <div className="relative table-cell border-gray-300 px-2 py-4 text-end align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                                <span className="text-xs font-medium text-slate-700 dark:text-white">
                                    {item.usdAmount}{' '}
                                    <span className="font-normal text-slate-500">
                                        USD
                                    </span>
                                </span>
                            </div>
                            <div className="relative table-cell border-gray-300 px-2 py-4 text-end align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                                <span className="text-xs font-medium text-slate-700 dark:text-white">
                                    + {item.amount}{' '}
                                    <span className="font-normal text-slate-500">
                                        {item.currency === 'bitcoin' && 'BTC'}{' '}
                                        {item.currency === 'ethereum' && 'ETH'}
                                    </span>
                                </span>
                            </div>
                        </div>
                    );
                })}
            </div>
        </Card>
    );
};

export default OrdersActivitiesCard;
