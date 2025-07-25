<script setup>
import Layout from '@/layout/Main.vue'
import { Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText } from "@/components";
</script>
<template>
    <Layout title="Typography">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>Typography</BlockTitleLg>
              <BlockLeadText>These examples for typography, including global settings, headings, body text, lists, and more.</BlockLeadText>
          </BlockPageHead>
          <Block>
            <BlockHead class="md:max-w-[680px]">
                <BlockTitle>Text Sizes</BlockTitle>
                <BlockText>You can use tailwind predefined classes for text sizes. Also you can always use tailwind arbitrary value like <code class="text-pink-400">.text-[--px] or .text-[--rem]</code> or something else.</BlockText>
            </BlockHead>
            <Card>
              <table class="table border-collapse w-full border-gray-300 dark:border-gray-900">
                  <thead>
                      <tr class="first:[&>*]:rounded-tl last:[&>*]:rounded-tr">
                          <td class="py-3 first:ps-6 last:pe-6 bg-gray-50 dark:bg-gray-900 border-b border-gray-300 dark:border-gray-900">
                              <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight">Class</h6>
                          </td>
                          <td class="py-3 first:ps-6 last:pe-6 bg-gray-50 dark:bg-gray-900 border-b border-gray-300 dark:border-gray-900">
                              <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight">Examples</h6>
                          </td>
                      </tr>
                  </thead>
                  <tbody>
                      <tr class="[&:last-child>*]:border-b-0 [&:last-child>*:last-child]:rounded-br [&:last-child>*:first-child]:rounded-bl">
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <code class="text-pink-400">.text-xs</code>
                          </td>
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <p class="text-xs text-slate-700 dark:text-white">The quick brown fox</p>
                          </td>
                      </tr>
                      <tr class="[&:last-child>*]:border-b-0 [&:last-child>*:last-child]:rounded-br [&:last-child>*:first-child]:rounded-bl">
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <code class="text-pink-400">.text-sm</code>
                          </td>
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <p class="text-sm text-slate-700 dark:text-white">The quick brown fox</p>
                          </td>
                      </tr>
                      <tr class="[&:last-child>*]:border-b-0 [&:last-child>*:last-child]:rounded-br [&:last-child>*:first-child]:rounded-bl">
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <code class="text-pink-400">.text-base</code>
                          </td>
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <p class="text-base text-slate-700 dark:text-white">The quick brown fox</p>
                          </td>
                      </tr>
                      <tr class="[&:last-child>*]:border-b-0 [&:last-child>*:last-child]:rounded-br [&:last-child>*:first-child]:rounded-bl">
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <code class="text-pink-400">.text-lg</code>
                          </td>
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <p class="text-lg text-slate-700 dark:text-white">The quick brown fox</p>
                          </td>
                      </tr>
                      <tr class="[&:last-child>*]:border-b-0 [&:last-child>*:last-child]:rounded-br [&:last-child>*:first-child]:rounded-bl">
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <code class="text-pink-400">.text-xl</code>
                          </td>
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <p class="text-xl text-slate-700 dark:text-white">The quick brown fox</p>
                          </td>
                      </tr>
                      <tr class="[&:last-child>*]:border-b-0 [&:last-child>*:last-child]:rounded-br [&:last-child>*:first-child]:rounded-bl">
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <code class="text-pink-400">.text-2xl</code>
                          </td>
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <p class="text-2xl text-slate-700 dark:text-white">The quick brown fox</p>
                          </td>
                      </tr>
                      <tr class="[&:last-child>*]:border-b-0 [&:last-child>*:last-child]:rounded-br [&:last-child>*:first-child]:rounded-bl">
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <code class="text-pink-400">.text-3xl</code>
                          </td>
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <p class="text-3xl text-slate-700 dark:text-white">The quick brown fox</p>
                          </td>
                      </tr>
                      <tr class="[&:last-child>*]:border-b-0 [&:last-child>*:last-child]:rounded-br [&:last-child>*:first-child]:rounded-bl">
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <code class="text-pink-400">.text-4xl</code>
                          </td>
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <p class="text-4xl text-slate-700 dark:text-white">The quick brown fox</p>
                          </td>
                      </tr>
                      <tr class="[&:last-child>*]:border-b-0 [&:last-child>*:last-child]:rounded-br [&:last-child>*:first-child]:rounded-bl">
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <code class="text-pink-400">.text-5xl</code>
                          </td>
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <p class="text-5xl text-slate-700 dark:text-white">The quick brown fox</p>
                          </td>
                      </tr>
                      <tr class="[&:last-child>*]:border-b-0 [&:last-child>*:last-child]:rounded-br [&:last-child>*:first-child]:rounded-bl">
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <code class="text-pink-400">.text-6xl</code>
                          </td>
                          <td class="py-4 first:ps-6 last:pe-6 bg-white dark:bg-gray-950 border-b border-gray-300 dark:border-gray-900">
                            <p class="text-6xl text-slate-700 dark:text-white">The quick brown fox</p>
                          </td>
                      </tr>
                  </tbody>
              </table>
            </Card>
          </Block>
        </div>
    </Layout>
</template>