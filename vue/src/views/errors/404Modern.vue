<script setup>
import Layout from '@/layout/FullScreen.vue';
import { Button } from '@/components';
</script>

<template>
    <Layout title="Error 404 Modern">
        <div class="relative flex min-h-screen items-center justify-center">
            <div class="m-auto max-w-[520px] px-4 py-8 text-center">
                <div class="mb-15">
                    <img src="/images/gfx/error-404.svg" alt="" />
                </div>
                <h3
                    class="font-heading leading-tighter pb-4 text-2xl font-bold tracking-tight text-slate-700 lg:text-3xl dark:text-white"
                >
                    Oops! Why you’re here?
                </h3>
                <p class="mb-4 text-base text-slate-600">
                    We are very sorry for inconvenience. It looks like you’re
                    try to access a page that either has been deleted or never
                    existed.
                </p>
                <Button
                    as="router-link"
                    to="/home"
                    variant="primary"
                    size="lg"
                    class="mt-3"
                    >Back To Home</Button
                >
            </div>
        </div>
    </Layout>
</template>
