<script setup>
import { Card, CardBody, Button, Icon, CheckBox, Badge } from '@/components'
import { useThemeStore } from '@/stores/theme'
import ActionDropdown from './RecentDocumentDropdown.vue'
const theme = useThemeStore()
const data = [
    {
        id:"did-01",
        title:"The Impact of Artificial Intelligence on the Future of Work",
        type:"Document",
        theme: "dark-pale",
        modified: {
            date: "Feb 15,2023",
            time: "02:31 PM"
        }
    },
    {
        id:"did-02",
        title:"How to Boost Your Online Presence with Social Media Marketing",
        type:"Social Media",
        theme: "blue-pale",
        modified: {
            date: "Feb 15,2023",
            time: "02:31 PM"
        }
    },
    {
        id:"did-03",
        title:"Top 10 Tips for Effective Time Management in the Workplace",
        type:"Blog Content",
        theme: "purple-pale",
        modified: {
            date: "Feb 15,2023",
            time: "02:31 PM"
        }
    },
    {
        id:"did-04",
        title:"Transforming Healthcare with Big Data: Exploring the Opportunities",
        type:"Website Copy & SEO",
        theme: "yellow-pale",
        modified: {
            date: "Feb 15,2023",
            time: "02:31 PM"
        }
    },
]

</script>
<template>
    <Card class="h-full">
        <div class="table w-full text-sm text-slate-400">
            <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                <div class="relative table-cell align-middle w-13 px-2 py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <CheckBox size="sm" id="did-all" class="my-1"/>
                </div>
                <div class="relative table-cell align-middle px-2 py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <span class=" text-slate-400 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight">Name</span>
                </div>
                <div class="relative hidden sm:table-cell align-middle px-2 py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <span class=" text-slate-400 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight">Type</span>
                </div>
                <div class="relative hidden lg:table-cell align-middle px-2 py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <span class=" text-slate-400 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight">Last Modified</span>
                </div>
                <div class="relative table-cell align-middle px-2 py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>&nbsp;</span></div>
            </div>
            <div v-for="(item,index) in data" :key="index" class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                <div class="relative table-cell align-middle w-13 px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <CheckBox size="sm" :id="item.id" class="my-1"/>
                </div>
                <div class="relative table-cell align-middle px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <div class="text-base text-slate-600 dark:text-white">{{item.title}}</div>
                </div>
                <div class="relative hidden sm:table-cell align-middle px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <Badge :variant="item.theme" pill>{{item.type}}</Badge>
                </div>
                <div class="relative hidden lg:table-cell align-middle px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <ul class="flex flex-wrap gap-x-2">
                        <li>{{item.modified.date}}</li>
                        <li>{{item.modified.time}}</li>
                    </ul>
                </div>
                <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                    <ActionDropdown />
                </div>
            </div>
        </div>
    </Card>
</template>