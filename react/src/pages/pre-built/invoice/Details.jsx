import React, { useState, useEffect } from 'react';
import { Button, Head, Icon, PageHead } from '../../../componenets';
import { invoiceData } from '../../../store/Invoice';
import { useParams, Link } from 'react-router-dom';
const InvoiceDetailsPage = () => {
    const [data, setData] = useState([]);

    let { invoiceId } = useParams();
    // grabs the id of the url and loads the corresponding data
    useEffect(() => {
        const id = invoiceId;
        if (id !== undefined || null || '') {
            let invoice = invoiceData.find((item) => item.id === Number(id));
            if (invoice) {
                setData(invoice);
            }
        } else {
            setData(invoiceData[0]);
        }
    }, [invoiceId]);
    return (
        <>
            <Head title={`Invoice ${data.orderId}`} />
            <PageHead>
                <PageHead.Group>
                    <PageHead.Title>
                        Invoice{' '}
                        <strong className="text-primary-600 text-2xl font-normal">
                            #{data.orderId}
                        </strong>
                    </PageHead.Title>
                    <PageHead.SubTitle>
                        Created At:{' '}
                        <span className="text-slate-600 dark:text-slate-400">
                            {data.date}, {data.time}
                        </span>
                    </PageHead.SubTitle>
                </PageHead.Group>
                <PageHead.Group>
                    <Button
                        as="Link"
                        size="rg"
                        variant="white-outline"
                        className="hidden sm:inline-flex"
                        to="/invoice-list"
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
                        to="/invoice-list"
                    >
                        <Icon
                            className="text-xl leading-4.5 rtl:-scale-x-100"
                            name="arrow-left"
                        />
                    </Button>
                </PageHead.Group>
            </PageHead>
            <div className="relative h-full rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                <div className="absolute end-5 top-5">
                    <Link
                        to={`/invoice-print/${data.id}`}
                        target="_blank"
                        className="border-primary-300 dark:border-primary-800 text-primary-600 hover:bg-primary-600 active:bg-primary-700 relative inline-flex h-11 w-11 items-center justify-center rounded-md border text-center align-middle text-base leading-4.5 font-bold tracking-wide transition-all duration-300 hover:text-white"
                    >
                        <Icon
                            className="text-xl/4.5"
                            name="printer-fill"
                        ></Icon>
                    </Link>
                </div>
                <div className="p-5 md:p-12">
                    <div className="mb-6 flex justify-center">
                        <Link className="relative inline-block h-9 transition-opacity duration-300">
                            <img
                                className="h-full opacity-0 dark:opacity-100"
                                src="/logo.png"
                                srcSet="/logo2x.png 2x"
                                alt="logo"
                            />
                            <img
                                className="absolute start-0 top-0 h-full opacity-100 dark:opacity-0"
                                src="/logo-dark.png"
                                srcSet="/logo-dark2x.png 2x"
                                alt="logo"
                            />
                        </Link>
                    </div>
                    <div className="flex flex-col justify-between gap-6 pb-6 md:flex-row">
                        <div className="relative">
                            <span className="text-xxs tracking-relaxed leading-tight font-bold whitespace-nowrap text-slate-400 uppercase">
                                Invoice To
                            </span>
                            <div className="invoice-contact-info">
                                <h4 className="font-heading mb-4 text-2xl font-bold tracking-tight text-slate-700 dark:text-white">
                                    {data.name}
                                </h4>
                                <ul className="flex flex-col gap-4">
                                    <li className="flex gap-2 text-slate-400">
                                        <Icon
                                            className="text-primary-600 text-base/5"
                                            name="map-pin-fill"
                                        ></Icon>
                                        <span className="text-sm">
                                            House #65, 4328 Marion Street
                                            <br />
                                            Newbury, VT 05051
                                        </span>
                                    </li>
                                    <li className="flex gap-2 text-slate-400">
                                        <Icon
                                            className="text-primary-600 text-base/5"
                                            name="call-fill"
                                        ></Icon>
                                        <span className="text-sm">
                                            {data.phone}
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div className="w-[210px]">
                            <h3 className="text-primary-600 font-heading mb-2 text-3xl font-bold tracking-tight uppercase">
                                Invoice
                            </h3>
                            <ul className="flex flex-col gap-2">
                                <li>
                                    <span className="text-xxs tracking-relaxed inline-block min-w-[90px] leading-tight font-bold whitespace-nowrap text-slate-400 uppercase">
                                        Invoice ID
                                    </span>
                                    :
                                    <span className="ms-3 text-sm font-medium text-slate-600">
                                        {data.orderId}
                                    </span>
                                </li>
                                <li>
                                    <span className="text-xxs tracking-relaxed inline-block min-w-[90px] leading-tight font-bold whitespace-nowrap text-slate-400 uppercase">
                                        Date
                                    </span>
                                    :
                                    <span className="ms-3 text-sm font-medium text-slate-600">
                                        {data.date}
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div className="overflow-x-auto">
                        <table className="w-full border-collapse border-gray-300 dark:border-gray-900">
                            <thead>
                                <tr>
                                    <th className="border-b border-gray-300 px-2 py-1 text-start first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-primary-600 text-xs leading-tight font-bold uppercase">
                                            Item Id
                                        </span>
                                    </th>
                                    <th className="border-b border-gray-300 px-2 py-1 text-start first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-primary-600 text-xs leading-tight font-bold uppercase">
                                            Description
                                        </span>
                                    </th>
                                    <th className="border-b border-gray-300 px-2 py-1 text-start first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-primary-600 text-xs leading-tight font-bold uppercase">
                                            Price
                                        </span>
                                    </th>
                                    <th className="border-b border-gray-300 px-2 py-1 text-start first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-primary-600 text-xs leading-tight font-bold uppercase">
                                            Qty
                                        </span>
                                    </th>
                                    <th className="border-b border-gray-300 px-2 py-1 text-end first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-primary-600 text-xs leading-tight font-bold uppercase">
                                            Amount
                                        </span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td className="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 text-slate-600 dark:text-slate-400">
                                            24108054
                                        </span>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 whitespace-nowrap text-slate-600 dark:text-slate-400">
                                            DashWind - Conceptual App Dashboard
                                            - Regular License
                                        </span>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 text-slate-600 dark:text-slate-400">
                                            $40.00
                                        </span>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 text-slate-600 dark:text-slate-400">
                                            5
                                        </span>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-2 text-end first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 text-slate-600 dark:text-slate-400">
                                            $200.00
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td className="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 text-slate-600 dark:text-slate-400">
                                            24108054
                                        </span>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 whitespace-nowrap text-slate-600 dark:text-slate-400">
                                            6 months premium support
                                        </span>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 text-slate-600 dark:text-slate-400">
                                            $25.00
                                        </span>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 text-slate-600 dark:text-slate-400">
                                            1
                                        </span>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-2 text-end first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 text-slate-600 dark:text-slate-400">
                                            $25.00
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td className="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 text-slate-600 dark:text-slate-400">
                                            23604094
                                        </span>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 whitespace-nowrap text-slate-600 dark:text-slate-400">
                                            Invest Management Dashboard -
                                            Regular License
                                        </span>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 text-slate-600 dark:text-slate-400">
                                            $131.25
                                        </span>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 text-slate-600 dark:text-slate-400">
                                            1
                                        </span>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-2 text-end first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 text-slate-600 dark:text-slate-400">
                                            $131.25
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td className="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 text-slate-600 dark:text-slate-400">
                                            23604094
                                        </span>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 whitespace-nowrap text-slate-600 dark:text-slate-400">
                                            6 months premium support
                                        </span>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 text-slate-600 dark:text-slate-400">
                                            $78.75
                                        </span>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 text-slate-600 dark:text-slate-400">
                                            1
                                        </span>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-2 text-end first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 text-slate-600 dark:text-slate-400">
                                            $78.75
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot className="pt-4">
                                <tr>
                                    <td
                                        className="px-2 pt-6 pb-1 first:ps-6 last:pe-6"
                                        colSpan="2"
                                    ></td>
                                    <td
                                        className="px-2 pt-6 pb-1 first:ps-6 last:pe-6"
                                        colSpan="2"
                                    >
                                        <span className="text-sm/5 font-medium whitespace-nowrap text-slate-600 dark:text-slate-400">
                                            Subtotal
                                        </span>
                                    </td>
                                    <td className="px-2 pt-6 pb-1 text-end first:ps-6 last:pe-6">
                                        <span className="text-sm/5 font-medium whitespace-nowrap text-slate-600 dark:text-slate-400">
                                            $435.00
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        className="px-2 py-1 first:ps-6 last:pe-6"
                                        colSpan="2"
                                    ></td>
                                    <td
                                        className="px-2 py-1 first:ps-6 last:pe-6"
                                        colSpan="2"
                                    >
                                        <span className="text-sm/5 whitespace-nowrap text-slate-600 dark:text-slate-400">
                                            Processing fee
                                        </span>
                                    </td>
                                    <td className="px-2 py-1 text-end first:ps-6 last:pe-6">
                                        <span className="text-sm/5 whitespace-nowrap text-slate-600 dark:text-slate-400">
                                            $10.00
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        className="px-2 py-1 first:ps-6 last:pe-6"
                                        colSpan="2"
                                    ></td>
                                    <td
                                        className="px-2 py-1 first:ps-6 last:pe-6"
                                        colSpan="2"
                                    >
                                        <span className="text-sm/5 whitespace-nowrap text-slate-600 dark:text-slate-400">
                                            TAX
                                        </span>
                                    </td>
                                    <td className="px-2 py-1 text-end first:ps-6 last:pe-6">
                                        <span className="text-sm/5 whitespace-nowrap text-slate-600 dark:text-slate-400">
                                            $43.50
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        className="px-2 py-1 first:ps-6 last:pe-6"
                                        colSpan="2"
                                    ></td>
                                    <td
                                        className="border-t border-gray-300 px-2 py-1 first:ps-6 last:pe-6 dark:border-gray-900"
                                        colSpan="2"
                                    >
                                        <span className="text-sm/5 font-medium whitespace-nowrap text-slate-600 dark:text-slate-400">
                                            Grand Total
                                        </span>
                                    </td>
                                    <td className="border-t border-gray-300 px-2 py-1 text-end first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm/5 font-medium whitespace-nowrap text-slate-600 dark:text-slate-400">
                                            $478.50
                                        </span>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <div className="px-0.5 text-xs text-slate-400 italic">
                            {' '}
                            Invoice was created on a computer and is valid
                            without the signature and seal.{' '}
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
};

export default InvoiceDetailsPage;
