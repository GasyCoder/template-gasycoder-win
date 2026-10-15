import React, { useEffect, useState } from 'react';
import { Avatar, Button, Head, Icon, PageHead } from '../../../componenets';
import { useParams } from 'react-router-dom';
import { kycDocuments } from '../../../store/kycdocuments';
import { toInitials } from '../../../utilities';

const KYCDetailsPage = () => {
    const [data, setData] = useState([]);

    let { userId } = useParams();
    //  loads data
    useEffect(() => {
        const id = userId;
        if (id !== undefined || null || '') {
            let user = kycDocuments.find((item) => item.id === id);
            if (user) {
                setData(user);
            }
        } else {
            setData(user[0]);
        }
    }, [userId]);

    return (
        <>
            <Head title="Kyc Details" />
            <PageHead>
                <PageHead.Group>
                    <PageHead.Title>
                        KYCs /{' '}
                        <strong className="text-primary-600 text-2xl font-normal">
                            {data.username}
                        </strong>
                    </PageHead.Title>
                    <ul className="flex flex-wrap gap-x-4 gap-y-1 text-slate-400">
                        <li>
                            Application ID:{' '}
                            <span className="text-slate-600 dark:text-slate-400">
                                {data.id}
                            </span>
                        </li>
                        <li>
                            Submited At:{' '}
                            <span className="text-slate-600 dark:text-slate-400">
                                {data.submitted}
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
                        to="/kyc-list"
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
                        to="/kyc-list"
                    >
                        <Icon
                            className="text-xl leading-4.5 rtl:-scale-x-100"
                            name="arrow-left"
                        />
                    </Button>
                </PageHead.Group>
            </PageHead>
            {data && (
                <div className="grid grid-cols-12 gap-7">
                    <div className="col-span-12 lg:col-span-5">
                        <div className="pb-5">
                            <h5 className="font-heading leading-tighter mb-2 text-xl font-bold text-slate-700 dark:text-white">
                                Applicantion Info
                            </h5>
                            <p className="text-slate-600 dark:text-slate-400">
                                Submission date, approve date, status etc.
                            </p>
                        </div>
                        <div className="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                            <ul className="m-0 list-none p-0">
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            Submitted By
                                        </div>
                                        <div className="text-slate-600 dark:text-slate-300">
                                            {data.id}
                                        </div>
                                    </div>
                                </li>
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            Submitted At
                                        </div>
                                        <div className="text-slate-600 dark:text-slate-300">
                                            {data.submitted}
                                        </div>
                                    </div>
                                </li>
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            Status
                                        </div>
                                        <div className="text-slate-600">
                                            <span className="relative inline-flex items-center rounded border border-green-300 bg-green-100 px-3 py-1.5 text-center align-middle text-xs leading-4.5 font-semibold tracking-wide text-green-600 capitalize transition-all duration-300 dark:border-green-800 dark:bg-green-950">
                                                {data.status}
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            Last Checked
                                        </div>
                                        <div className="flex items-center gap-3">
                                            <div className="relative flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-orange-100 text-sm font-medium text-orange-600 dark:bg-orange-950">
                                                {data?.checkedBy && (
                                                    <Avatar
                                                        size="rg"
                                                        rounded
                                                        text={toInitials(
                                                            data?.checkedBy
                                                                ?.name,
                                                        )}
                                                    />
                                                )}
                                            </div>
                                            <span className="text-xs font-medium text-slate-700 dark:text-white">
                                                {data?.checkedBy?.name}
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            Last Checked At
                                        </div>
                                        <div className="text-slate-600 dark:text-slate-300">
                                            19 Dec, 2019 05:26 AM
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div className="pt-10 pb-5">
                            <h5 className="font-heading leading-tighter mb-2 text-xl font-bold text-slate-700 dark:text-white">
                                Uploaded Documents
                            </h5>
                            <p className="text-slate-600 dark:text-slate-400">
                                Here is user uploaded documents.
                            </p>
                        </div>
                        <div className="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                            <ul className="m-0 list-none p-0">
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            Document Type
                                        </div>
                                        <div className="text-slate-600 dark:text-slate-300">
                                            {data.docType}
                                        </div>
                                    </div>
                                </li>
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            Front Side
                                        </div>
                                        <div className="text-slate-600 dark:text-slate-300">
                                            {data.docType}
                                        </div>
                                    </div>
                                </li>
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            Back Side
                                        </div>
                                        <div className="text-slate-600 dark:text-slate-300">
                                            {data.docType}
                                        </div>
                                    </div>
                                </li>
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            Proof/Selfie
                                        </div>
                                        <div className="text-slate-600 dark:text-slate-300">
                                            {data.docType}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div className="col-span-12 lg:col-span-7">
                        <div className="pb-5">
                            <h5 className="font-heading leading-tighter mb-2 text-xl font-bold text-slate-700 dark:text-white">
                                Applicant Information
                            </h5>
                            <p className="text-slate-600 dark:text-slate-400">
                                Basic info, like name, phone, address, country
                                etc.
                            </p>
                        </div>
                        <div className="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                            <ul className="m-0 list-none p-0">
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            First Name
                                        </div>
                                        <div className="text-slate-600 dark:text-slate-300">
                                            {data?.username?.split(' ')[0]}
                                        </div>
                                    </div>
                                </li>
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            Last Name
                                        </div>
                                        <div className="text-slate-600 dark:text-slate-300">
                                            {data?.username?.split(' ')[1]}
                                        </div>
                                    </div>
                                </li>
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            Email Address
                                        </div>
                                        <div className="text-slate-600 dark:text-slate-300">
                                            info@softnio.com
                                        </div>
                                    </div>
                                </li>
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            Phone Number
                                        </div>
                                        <div className="text-soft text-slate-400">
                                            <em>Not available</em>
                                        </div>
                                    </div>
                                </li>
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            Date of Birth
                                        </div>
                                        <div className="text-slate-600 dark:text-slate-300">
                                            28 Oct, 2015
                                        </div>
                                    </div>
                                </li>
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            Full Address
                                        </div>
                                        <div className="text-slate-600 dark:text-slate-300">
                                            6516, Eldoret, Uasin Gishu, 30100
                                        </div>
                                    </div>
                                </li>
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            Country of Residence
                                        </div>
                                        <div className="text-slate-600 dark:text-slate-300">
                                            Kenya
                                        </div>
                                    </div>
                                </li>
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            Full Address
                                        </div>
                                        <div className="text-slate-600 dark:text-slate-300">
                                            6516, Eldoret, Uasin Gishu, 30100
                                        </div>
                                    </div>
                                </li>
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            Wallet Type
                                        </div>
                                        <div className="text-slate-600 dark:text-slate-300">
                                            Bitcoin
                                        </div>
                                    </div>
                                </li>
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            Wallet Address
                                        </div>
                                        <div className="text-break text-slate-600 dark:text-slate-300">
                                            1F1tAaz5x1HUXrCNLbtMDqcw6o5GNn4xqX
                                        </div>
                                    </div>
                                </li>
                                <li className="transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 dark:[&>*]:border-gray-900">
                                    <div className="grid grid-cols-1 items-center px-5 py-3 md:grid-cols-2">
                                        <div className="text-slate-400">
                                            Telegram
                                        </div>
                                        <div className="text-slate-600 dark:text-slate-300">
                                            <span>@tokenlite</span>
                                            <a
                                                href="https://t.me/tokenlite"
                                                target="_blank"
                                            >
                                                <em className="icon ni ni-telegram"></em>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            )}
        </>
    );
};

export default KYCDetailsPage;
