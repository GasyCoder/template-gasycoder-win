<script setup>
import { Card, CardBody, Icon } from '@/components'
const data = [
    {
      title: "Orders",
      amount: "1,795",
      icon: "bag",
      variant: "primary",
    },
    {
      title: "Customers",
      amount: "2,327",
      icon: "users",
      variant: "cyan",
    },
    {
      title: "Products",
      amount: "674",
      icon: "box",
      variant: "pink",
    },
    {
      title: "Categories",
      amount: "68",
      icon: "server",
      variant: "purple",
    },
]
</script>
<template>
    <Card>
        <CardBody>
            <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-3">Store Statistics</h6>
            <ul class="flex flex-col gap-y-4 py-2">
                <li v-for="(item,index) in data" class="flex items-center justify-between">
                    <div>
                        <div class="text-sm text-slate-400 mb-1">{{item.title}}</div>
                        <div class="text-xl text-slate-700 dark:text-white font-bold">{{item.amount}}</div>
                    </div>
                    <Icon :class="{
                        'flex items-center justify-center text-2xl/none rounded-md h-11 w-11':true,
                        'text-primary-600 bg-primary-100 dark:bg-primary-950': !item.variant || item.variant === 'primary',
                        'text-cyan-600 bg-cyan-100 dark:bg-cyan-950': item.variant === 'cyan',
                        'text-pink-600 bg-pink-100 dark:bg-pink-950': item.variant === 'pink',
                        'text-purple-600 bg-purple-100 dark:bg-purple-950': item.variant === 'purple',
                    }" :name="item.icon" />
                </li>
            </ul>
        </CardBody>
    </Card>
</template>