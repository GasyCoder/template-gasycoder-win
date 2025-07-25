<script setup>
import Layout from '@/layout/Main.vue'
import { Block, Card, CardBody, Badge, Button } from "@/components";

const pricingTableDataV1 = [
  {
    id: 1,
    title: "Starter",
    caption: "Enjoy entry level of invest & earn.",
    interest: 1.67,
    term: 30,
    minDeposit: 250,
    maxDeposit: 1999,
    return: "Yes",
    totalReturn: 125,
    tags: false,
  },
  {
    id: 2,
    title: "Silver",
    caption: "Best plan for user to investers.",
    interest: 4.76,
    term: 21,
    minDeposit: 2000,
    maxDeposit: 4999,
    return: "Yes",
    totalReturn: 200,
    tags: false,
  },
  {
    id: 3,
    title: "Diamond",
    caption: "Advance level of invest & earn.",
    interest: 14.29,
    term: 14,
    minDeposit: 5000,
    maxDeposit: 20000,
    return: "Yes",
    totalReturn: 300,
    tags: true,
  },
  {
    id: 4,
    title: "Platinum",
    caption: "Just invest money & earn.",
    interest: 21.07,
    term: 7,
    minDeposit: 10500,
    maxDeposit: 50999,
    return: "Yes",
    totalReturn: 500,
    tags: false,
  },
];

const pricingTableDataV2 = [
  {
    id: 1,
    title: "Starter",
    monogram: "/images/icons/plan-s1.svg",
    desc: "If you are a small business amn please select this plan",
    amount: 99,
    userNumber: 1,
    tags: false,
  },
  {
    id: 2,
    title: "Pro",
    monogram: "/images/icons/plan-s2.svg",
    desc: "If you are a small business amn please select this plan",
    amount: 299,
    userNumber: 5,
    tags: true,
  },
  {
    id: 3,
    title: "Enterprise",
    monogram: "/images/icons/plan-s3.svg",
    desc: "If you are a small business amn please select this plan",
    amount: 599,
    userNumber: 20,
    tags: false,
  },
  {
    id: 4,
    title: "Starter",
    monogram: "/images/icons/plan-s1.svg",
    desc: "If you are a small business amn please select this plan",
    amount: 99,
    userNumber: 1,
    tags: false,
  },
];

</script>

<template>
  <Layout title="Pricing Table">
    <div class="flex justify-between items-center pb-5 md:pb-7 relative">
        <div>
            <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">
                Pricing Table
            </h3>
            <p class="text-slate-400">Choose your pricing plan and start enjoying our service.</p>
        </div>
    </div>
    <Block>
        <div class="grid grid-flow-dense grid-cols-12 gap-7">
          <div v-for="(item, index) in pricingTableDataV1" :key="index" class="col-span-12 md:col-span-6 2xl:col-span-3">
              <Card class="relative h-full">
                  <Badge v-if="item.tags" class="!absolute top-2 end-2" variant="primary">Recommend</Badge>
                  <CardBody class="text-center">
                      <div class="pb-5">
                          <h4 class="text-xl lg:text-2xl text-slate-600 dark:text-white font-heading font-bold leading-tighter tracking-tight mb-1">{{item.title}}</h4>
                          <p class="text-sm text-slate-400">{{item.caption}}</p>
                      </div>
                      <div class="flex flex-wrap -mx-3.5">
                          <div class="w-1/2 px-3.5">
                              <div class="text-xl lg:text-2xl text-slate-700 dark:text-white font-heading font-bold leading-tighter tracking-tight">{{item.interest}}%</div>
                              <div class="text-sm text-slate-400">Daily Interest</div>
                          </div>
                          <div class="w-1/2 px-3.5">
                              <div class="text-xl lg:text-2xl text-slate-700 dark:text-white font-heading font-bold leading-tighter tracking-tight">{{item.term}}</div>
                              <div class="text-sm text-slate-400">Term Days</div>
                          </div>
                      </div>
                  </CardBody>
                  <CardBody class="border-t border-gray-200 dark:border-gray-800">
                      <ul>
                          <li class="flex py-1"><span class="w-1/2">Min Deposit</span> - <span class="ms-auto">${{item.minDeposit}}</span></li>
                          <li class="flex py-1"><span class="w-1/2">Max Deposit</span> - <span class="ms-auto">${{item.maxDeposit}}</span></li>
                          <li class="flex py-1"><span class="w-1/2">Deposit Return</span> - <span class="ms-auto">{{item.return}}</span></li>
                          <li class="flex py-1"><span class="w-1/2">Total Return</span> - <span class="ms-auto">{{item.totalReturn}}%</span></li>
                      </ul>
                      <div class="mt-6 text-center">
                          <Button size="rg" variant="white-outline">Choose this Plan</Button>
                      </div>
                  </CardBody>
              </Card>
          </div>
        </div>
    </Block>
    <div class="flex justify-between items-center pb-5 md:pb-7 relative">
        <div>
            <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">
                Pricing Table V2
            </h3>
            <p class="text-slate-400">Choose your pricing plan and start enjoying our service.</p>
        </div>
    </div>
    <Block>
        <div class="grid grid-flow-dense grid-cols-12 gap-7">
          <div v-for="(item, index) in pricingTableDataV2" :key="index" class="col-span-12 md:col-span-6 2xl:col-span-3">
              <Card class="relative h-full">
                  <Badge v-if="item.tags" class="!absolute top-2 end-2" variant="primary">Recommend</Badge>
                  <CardBody class="text-center">
                      <div class="py-1 mb-6">
                          <img class="max-w-[90px] mx-auto" :src="item.monogram" alt="" />
                      </div>
                      <div class="w-[220px] mx-auto">
                          <h5 class="text-xl text-slate-700 dark:text-white font-heading font-bold leading-tighter -tracking-snug mb-1">{{item.title}}</h5>
                          <span class="text-sm text-slate-400">{{item.desc}}</span>
                      </div>
                      <div class="pt-5">
                          <div class="text-2xl text-slate-600 dark:text-white font-bold">${{item.amount}} <span>/yr</span></div>
                          <span class="text-sm text-slate-400">{{item.userNumber}} User, Billed Yearly</span>
                      </div>
                      <div class="pt-6">
                          <Button size="rg" variant="primary">Select Plan</Button>
                      </div>
                  </CardBody>
              </Card>
          </div>
        </div>
    </Block>
  </Layout>
</template>
