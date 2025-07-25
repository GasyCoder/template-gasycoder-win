<script setup>
import Layout from '@/layout/FullScreen.vue'
import { Button } from "@/components";
</script>

<template>
  <Layout title="Error 504">
    <div class="relative flex items-center justify-center min-h-screen">
      <div class="m-auto text-center py-8 px-4 max-w-[520px]">
          <h1 class="text-[160px] font-heading font-bold leading-tighter -tracking-wider mb-2 text-transparent bg-clip-text bg-gradient-to-b from-primary-600 to-primary-900 opacity-90">504</h1>
          <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white pb-4">Gateway Timeout Error</h3>
          <p class="text-base text-slate-600 mb-4">We are very sorry for inconvenience. It looks like some how our server did not receive a timely response.</p>
          <Button as="router-link" to="/home" variant="primary" size="lg" class="mt-3">Back To Home</Button>
      </div>
    </div>
  </Layout>
</template>
