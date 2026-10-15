import React from 'react';
import StatusCard from './StatusCard';
import TemplateCard from './TemplateCard';
import RecentDocumentsCard from './RecentDocumentsCard';
import { Head } from '../../../componenets';

const CopywriterHomepage = () => {
    return (
        <>
            <Head title="AI Copywriter" />
            <div className="relative flex items-center justify-between pb-5">
                <h3 className="font-heading leading-tighter text-2xl font-bold tracking-tight text-slate-700 lg:text-3xl dark:text-white">
                    Welcome Back!
                </h3>
            </div>
            <div className="grid grid-flow-dense grid-cols-12 gap-7 pb-7">
                <div className="col-span-12 sm:col-span-6 2xl:col-span-3">
                    <StatusCard
                        title="Words Available"
                        linktext="See History"
                        linkto="#"
                        amount="452"
                        amountText="words"
                        total="2000"
                        note="free words generated"
                        theme="primary"
                    />
                </div>
                <div className="col-span-12 sm:col-span-6 2xl:col-span-3">
                    <StatusCard
                        title="Drafts Available"
                        linktext="See All"
                        linkto="#"
                        amount="3"
                        amountText="Drafts"
                        total="10"
                        note="free drafts created"
                        theme="orange"
                    />
                </div>
                <div className="col-span-12 sm:col-span-6 2xl:col-span-3">
                    <StatusCard
                        title="Documents Available"
                        linktext="See All"
                        linkto="#"
                        amount="6"
                        amountText="Documents"
                        total="10"
                        note="free documents generated"
                        theme="blue"
                    />
                </div>
                <div className="col-span-12 sm:col-span-6 2xl:col-span-3">
                    <StatusCard
                        title="Tools Available"
                        linktext="All Tools"
                        linkto="#"
                        amount="4"
                        amountText="Tools"
                        total="16"
                        note="tools used to generate"
                        theme="red"
                    />
                </div>
            </div>
            <div className="relative flex items-center justify-between pb-4">
                <h3 className="font-heading leading-tighter text-2xl font-bold tracking-tight text-slate-700 dark:text-white">
                    Popular Templates
                </h3>
                <a
                    href="#link"
                    onClick={(e) => e.preventDefault()}
                    className="text-primary-600 hover:text-primary-700 text-sm font-medium"
                >
                    Explore All
                </a>
            </div>
            <div className="grid grid-flow-dense grid-cols-12 gap-7 pb-7">
                <div className="col-span-12 sm:col-span-6 2xl:col-span-3">
                    <TemplateCard
                        theme="primary-pale"
                        icon="bulb-fill"
                        title="Blog Ideas"
                        excerpt="Produce trendy blog ideas for your business that engages."
                    />
                </div>
                <div className="col-span-12 sm:col-span-6 2xl:col-span-3">
                    <TemplateCard
                        theme="cyan-pale"
                        icon="spark-fill"
                        title="Social Media Posts"
                        excerpt="Creative and engaging social media post for your brand."
                    />
                </div>
                <div className="col-span-12 sm:col-span-6 2xl:col-span-3">
                    <TemplateCard
                        theme="red-pale"
                        icon="bulb-fill"
                        title="Website Headlines/Copy"
                        excerpt="Generate SEO optimized keywords for your YouTube video."
                    />
                </div>
                <div className="col-span-12 sm:col-span-6 2xl:col-span-3">
                    <TemplateCard
                        theme="purple-pale"
                        icon="laptop"
                        title="Social Media Posts"
                        excerpt="Generate professional copy for your website that converts users."
                    />
                </div>
            </div>
            <div className="relative flex items-center justify-between pb-4">
                <h3 className="font-heading leading-tighter text-2xl font-bold tracking-tight text-slate-700 dark:text-white">
                    Recent Documents
                </h3>
                <a
                    href="#link"
                    onClick={(e) => e.preventDefault()}
                    className="text-primary-600 hover:text-primary-700 text-sm font-medium"
                >
                    See All
                </a>
            </div>
            <div className="grid grid-flow-dense grid-cols-12 gap-7">
                <div className="col-span-12">
                    <RecentDocumentsCard />
                </div>
            </div>
        </>
    );
};
export default CopywriterHomepage;
