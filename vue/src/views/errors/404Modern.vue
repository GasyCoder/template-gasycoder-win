<script setup>
import Layout from '@/layout/FullScreen.vue'
import { Button } from "@/components";
</script>

<template>
  <Layout title="Error 404 Modern">
    <div class="relative flex items-center justify-center min-h-screen">
        <div class="m-auto text-center py-8 px-4 max-w-[520px]">
            <div class="mb-15">
                <img src="/images/gfx/error-404.svg" alt="" />
            </div>
            <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white pb-4">Oops! Why you’re here?</h3>
            <p class="text-base text-slate-600 mb-4">We are very sorry for inconvenience. It looks like you’re try to access a page that either has been deleted or never existed.</p>
            <Button as="router-link" to="/home" variant="primary" size="lg" class="mt-3">Back To Home</Button>
        </div>
    </div>
  </Layout>
</template>
