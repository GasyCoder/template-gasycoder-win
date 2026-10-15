<script setup>
import Layout from '@/layout/Main.vue';
import StatusCard from './partials/StatusCard.vue';
import TemplateCard from './partials/TemplateCard.vue';
import RecentDocumentsCard from './partials/RecentDocumentsCard.vue';
</script>

<template>
    <Layout title="AI Copywriter">
        <div class="relative flex items-center justify-between pb-5">
            <h3
                class="font-heading leading-tighter text-2xl font-bold tracking-tight text-slate-700 lg:text-3xl dark:text-white"
            >
                Welcome Back!
            </h3>
        </div>
        <div class="grid grid-flow-dense grid-cols-12 gap-7 pb-7">
            <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
                <StatusCard
                    title="Words Available"
                    linktext="See History"
                    linkto="#"
                    :amount="452"
                    amountText="words"
                    :total="2000"
                    note="free words generated"
                    theme="primary"
                />
            </div>
            <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
                <StatusCard
                    title="Drafts Available"
                    linktext="See All"
                    linkto="#"
                    :amount="3"
                    amountText="Drafts"
                    :total="10"
                    note="free drafts created"
                    theme="orange"
                />
            </div>
            <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
                <StatusCard
                    title="Documents Available"
                    linktext="See All"
                    linkto="#"
                    :amount="6"
                    amountText="Documents"
                    :total="10"
                    note="free documents generated"
                    theme="blue"
                />
            </div>
            <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
                <StatusCard
                    title="Tools Available"
                    linktext="All Tools"
                    linkto="#"
                    :amount="4"
                    amountText="Tools"
                    :total="16"
                    note="tools used to generate"
                    theme="red"
                />
            </div>
        </div>
        <div class="relative flex items-center justify-between pb-4">
            <h3
                class="font-heading leading-tighter text-2xl font-bold tracking-tight text-slate-700 dark:text-white"
            >
                Popular Templates
            </h3>
            <a
                href="#link"
                @click="(e) => e.preventDefault()"
                class="text-primary-600 hover:text-primary-700 text-sm font-medium"
                >Explore All</a
            >
        </div>
        <div class="grid grid-flow-dense grid-cols-12 gap-7 pb-7">
            <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
                <TemplateCard
                    theme="primary-pale"
                    icon="bulb-fill"
                    title="Blog Ideas"
                    excerpt="Produce trendy blog ideas for your business that engages."
                />
            </div>
            <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
                <TemplateCard
                    theme="cyan-pale"
                    icon="spark-fill"
                    title="Social Media Posts"
                    excerpt="Creative and engaging social media post for your brand."
                />
            </div>
            <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
                <TemplateCard
                    theme="red-pale"
                    icon="bulb-fill"
                    title="Website Headlines/Copy"
                    excerpt="Generate SEO optimized keywords for your YouTube video."
                />
            </div>
            <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
                <TemplateCard
                    theme="purple-pale"
                    icon="laptop"
                    title="Social Media Posts"
                    excerpt="Generate professional copy for your website that converts users."
                />
            </div>
        </div>
        <div class="relative flex items-center justify-between pb-4">
            <h3
                class="font-heading leading-tighter text-2xl font-bold tracking-tight text-slate-700 dark:text-white"
            >
                Recent Documents
            </h3>
            <a
                href="#link"
                @click="(e) => e.preventDefault()"
                class="text-primary-600 hover:text-primary-700 text-sm font-medium"
                >See All</a
            >
        </div>
        <div class="grid grid-flow-dense grid-cols-12 gap-7">
            <div class="col-span-12">
                <RecentDocumentsCard />
            </div>
        </div>
    </Layout>
</template>
