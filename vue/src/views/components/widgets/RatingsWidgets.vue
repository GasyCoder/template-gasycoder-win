<script setup>
import Layout from '@/layout/Main.vue';
import {
    Card,
    CardBody,
    Block,
    BlockHead,
    BlockTitle,
    BlockTitleLg,
    BlockText,
    BlockBack,
    BlockPageHead,
    BlockLeadText,
    Icon,
    Form,
    FormGroup,
    FormLabel,
    Input,
    InputWrap,
    TextArea,
    Progress,
    ProgressBar,
    Avatar,
    Button,
} from '@/components';

import { toInitials } from '@/utilities';
import slideUp from '@/utilities/slideUp';
import slideDown from '@/utilities/slideDown';

const handleToggle = (event, target) => {
    const targetElm = document.getElementById(target);
    event.target.classList.toggle('active');
    if (window.getComputedStyle(targetElm).display === 'none') {
        slideDown(targetElm, 400);
        targetElm.classList.add('hidden');
        targetElm.classList.remove('block');
    } else {
        slideUp(targetElm, 400);
        targetElm.classList.remove('hidden');
        targetElm.classList.add('block');
    }
};
</script>
<template>
    <Layout title="Ratings Widgets">
        <div class="mx-auto lg:max-w-[960px]">
            <BlockPageHead class="md:max-w-[720px]">
                <BlockBack to="/components">Components</BlockBack>
                <BlockTitleLg>Card Style for Ratings</BlockTitleLg>
                <BlockLeadText
                    >Use ratings card with variant for an invaluable source of
                    feedback.</BlockLeadText
                >
            </BlockPageHead>

            <Block>
                <BlockHead>
                    <BlockTitle>Rating card</BlockTitle>
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="grid grid-cols-12 gap-7">
                            <div class="col-span-12 md:col-span-5">
                                <div
                                    class="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <div class="p-5 sm:p-6">
                                        <div
                                            class="flex flex-col items-center p-2 text-center"
                                        >
                                            <div
                                                class="relative flex flex-shrink-0 items-center justify-center rounded-full bg-cyan-600 text-sm font-medium text-white"
                                            >
                                                <Avatar
                                                    size="xl"
                                                    rounded
                                                    :text="
                                                        toInitials('Joe Larson')
                                                    "
                                                    status="active"
                                                />
                                            </div>
                                            <div class="mt-5">
                                                <h6
                                                    class="font-heading leading-tighter mb-2 text-base font-bold text-slate-700 dark:text-white"
                                                >
                                                    Joe Larson
                                                </h6>
                                                <span
                                                    class="text-sm text-slate-400"
                                                    >@Larson</span
                                                >
                                            </div>
                                        </div>
                                        <ul
                                            class="mt-1 flex justify-center gap-1 text-base text-yellow-600"
                                        >
                                            <li>
                                                <Icon name="star-fill"></Icon>
                                            </li>
                                            <li>
                                                <Icon name="star-fill"></Icon>
                                            </li>
                                            <li>
                                                <Icon name="star-fill"></Icon>
                                            </li>
                                            <li>
                                                <Icon
                                                    name="star-half-fill"
                                                ></Icon>
                                            </li>
                                            <li><Icon name="star"></Icon></li>
                                        </ul>
                                        <div
                                            class="mx-auto max-w-[200px] pt-2 text-center"
                                        >
                                            <p>
                                                I am an UI/UX Designer and Love
                                                to be creative.
                                            </p>
                                        </div>
                                        <ul
                                            class="flex w-full justify-around pt-4 pb-6 text-center"
                                        >
                                            <li class="px-2">
                                                <span
                                                    class="block text-lg text-slate-800 dark:text-white"
                                                    >213</span
                                                >
                                                <span
                                                    class="block text-sm leading-6 text-slate-400"
                                                    >Projects</span
                                                >
                                            </li>
                                            <li class="px-2">
                                                <span
                                                    class="block text-lg text-slate-800 dark:text-white"
                                                    >87.5%</span
                                                >
                                                <span
                                                    class="block text-sm leading-6 text-slate-400"
                                                    >Performed</span
                                                >
                                            </li>
                                            <li class="px-2">
                                                <span
                                                    class="block text-lg text-slate-800 dark:text-white"
                                                    >587</span
                                                >
                                                <span
                                                    class="block text-sm leading-6 text-slate-400"
                                                    >Tasks</span
                                                >
                                            </li>
                                        </ul>
                                        <div class="flex justify-center pb-1">
                                            <Button
                                                as="Link"
                                                to="/user-details/id"
                                                size="rg"
                                                variant="white-outline"
                                                pill
                                                class="min-w-[150px] justify-center"
                                                ><span
                                                    >View Profile</span
                                                ></Button
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-12 md:col-span-5">
                                <div
                                    class="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <div class="p-5 sm:p-6">
                                        <h5
                                            class="leading-tighter font-heading mb-3 text-center text-xl font-bold text-slate-700 dark:text-white"
                                        >
                                            Design Quality
                                        </h5>
                                        <div
                                            class="flex flex-col items-center p-2 text-center"
                                        >
                                            <div
                                                class="relative flex flex-shrink-0 items-center justify-center rounded-full bg-green-600 text-sm font-medium text-white"
                                            >
                                                <Avatar
                                                    size="xl"
                                                    rounded
                                                    text="4.5"
                                                    status="active"
                                                />
                                            </div>
                                        </div>
                                        <ul
                                            class="mt-1 flex justify-center gap-1 text-base text-yellow-600"
                                        >
                                            <li>
                                                <Icon name="star-fill"></Icon>
                                            </li>
                                            <li>
                                                <Icon name="star-fill"></Icon>
                                            </li>
                                            <li>
                                                <Icon name="star-fill"></Icon>
                                            </li>
                                            <li>
                                                <Icon name="star-fill"></Icon>
                                            </li>
                                            <li>
                                                <Icon
                                                    name="star-half-fill"
                                                ></Icon>
                                            </li>
                                        </ul>
                                        <div
                                            class="mx-auto max-w-[200px] pt-2 text-center"
                                        >
                                            <p>108 Ratings</p>
                                        </div>
                                        <div class="pt-4">
                                            <div
                                                class="flex items-center justify-between gap-4 py-2 text-slate-400"
                                            >
                                                <div
                                                    class="w-fit text-sm whitespace-nowrap"
                                                >
                                                    5 star
                                                </div>
                                                <div
                                                    class="flex h-1.5 w-full overflow-hidden rounded-sm bg-slate-50 dark:bg-slate-900"
                                                >
                                                    <Progress
                                                        class="w-full rounded-sm"
                                                    >
                                                        <ProgressBar
                                                            :progress="72"
                                                            variant="green"
                                                        />
                                                    </Progress>
                                                </div>
                                                <div class="text-xs">72%</div>
                                            </div>
                                            <div
                                                class="flex items-center justify-between gap-4 py-2 text-slate-400"
                                            >
                                                <div
                                                    class="w-fit text-sm whitespace-nowrap"
                                                >
                                                    4 star
                                                </div>
                                                <div
                                                    class="flex h-1.5 w-full overflow-hidden rounded-sm bg-slate-50 dark:bg-slate-900"
                                                >
                                                    <Progress
                                                        class="w-full rounded-sm"
                                                    >
                                                        <ProgressBar
                                                            :progress="58"
                                                            variant="indigo"
                                                        />
                                                    </Progress>
                                                </div>
                                                <div class="text-xs">58%</div>
                                            </div>
                                            <div
                                                class="flex items-center justify-between gap-4 py-2 text-slate-400"
                                            >
                                                <div
                                                    class="w-fit text-sm whitespace-nowrap"
                                                >
                                                    3 star
                                                </div>
                                                <div
                                                    class="flex h-1.5 w-full overflow-hidden rounded-sm bg-slate-50 dark:bg-slate-900"
                                                >
                                                    <Progress
                                                        class="w-full rounded-sm"
                                                    >
                                                        <ProgressBar
                                                            :progress="34"
                                                            variant="cyan"
                                                        />
                                                    </Progress>
                                                </div>
                                                <div class="text-xs">34%</div>
                                            </div>
                                            <div
                                                class="flex items-center justify-between gap-4 py-2 text-slate-400"
                                            >
                                                <div
                                                    class="w-fit text-sm whitespace-nowrap"
                                                >
                                                    2 star
                                                </div>
                                                <div
                                                    class="flex h-1.5 w-full overflow-hidden rounded-sm bg-slate-50 dark:bg-slate-900"
                                                >
                                                    <Progress
                                                        class="w-full rounded-sm"
                                                    >
                                                        <ProgressBar
                                                            :progress="18"
                                                            variant="yellow"
                                                        />
                                                    </Progress>
                                                </div>
                                                <div class="text-xs">18%</div>
                                            </div>
                                            <div
                                                class="flex items-center justify-between gap-4 pt-2 text-slate-400"
                                            >
                                                <div
                                                    class="w-fit text-sm whitespace-nowrap"
                                                >
                                                    1 star
                                                </div>
                                                <div
                                                    class="flex h-1.5 w-full overflow-hidden rounded-sm bg-slate-50 dark:bg-slate-900"
                                                >
                                                    <Progress
                                                        class="w-full rounded-sm"
                                                    >
                                                        <ProgressBar
                                                            :progress="55"
                                                            variant="red"
                                                        />
                                                    </Progress>
                                                </div>
                                                <div class="text-xs">55%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>Customer Review</BlockTitle>
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="grid grid-cols-12 gap-7">
                            <div
                                class="col-span-12 md:col-span-6 lg:col-span-4"
                            >
                                <div
                                    class="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <div class="p-5 sm:p-6">
                                        <h5
                                            class="leading-tighter font-heading mb-3 text-center text-xl font-bold text-slate-700 dark:text-white"
                                        >
                                            Customer Review
                                        </h5>
                                        <div
                                            class="dark:bg-gray-1000 mx-auto my-2 flex w-fit items-center justify-center gap-3 rounded-full bg-gray-200 px-4 py-2"
                                        >
                                            <ul
                                                class="flex justify-center gap-1 text-base text-yellow-600"
                                            >
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-half-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon name="star"></Icon>
                                                </li>
                                            </ul>
                                            <div class="mx-auto text-center">
                                                <p>3.5 out of 5</p>
                                            </div>
                                        </div>
                                        <div
                                            class="mx-auto max-w-[200px] pt-2 text-center"
                                        >
                                            <span class="text-sm text-slate-400"
                                                >40 customers ratings</span
                                            >
                                        </div>
                                        <div class="pt-4">
                                            <div
                                                class="flex items-center justify-between gap-4 py-2 text-slate-400"
                                            >
                                                <div
                                                    class="w-fit text-sm whitespace-nowrap"
                                                >
                                                    5 star
                                                </div>
                                                <div
                                                    class="flex h-1.5 w-full overflow-hidden rounded-sm bg-slate-50 dark:bg-slate-900"
                                                >
                                                    <Progress
                                                        class="w-full rounded-sm"
                                                    >
                                                        <ProgressBar
                                                            :progress="62"
                                                        />
                                                    </Progress>
                                                </div>
                                                <div class="text-xs">62%</div>
                                            </div>
                                            <div
                                                class="flex items-center justify-between gap-4 py-2 text-slate-400"
                                            >
                                                <div
                                                    class="w-fit text-sm whitespace-nowrap"
                                                >
                                                    4 star
                                                </div>
                                                <div
                                                    class="flex h-1.5 w-full overflow-hidden rounded-sm bg-slate-50 dark:bg-slate-900"
                                                >
                                                    <Progress
                                                        class="w-full rounded-sm"
                                                    >
                                                        <ProgressBar
                                                            :progress="47"
                                                        />
                                                    </Progress>
                                                </div>
                                                <div class="text-xs">47%</div>
                                            </div>
                                            <div
                                                class="flex items-center justify-between gap-4 py-2 text-slate-400"
                                            >
                                                <div
                                                    class="w-fit text-sm whitespace-nowrap"
                                                >
                                                    3 star
                                                </div>
                                                <div
                                                    class="flex h-1.5 w-full overflow-hidden rounded-sm bg-slate-50 dark:bg-slate-900"
                                                >
                                                    <Progress
                                                        class="w-full rounded-sm"
                                                    >
                                                        <ProgressBar
                                                            :progress="24"
                                                        />
                                                    </Progress>
                                                </div>
                                                <div class="text-xs">24%</div>
                                            </div>
                                            <div
                                                class="flex items-center justify-between gap-4 py-2 text-slate-400"
                                            >
                                                <div
                                                    class="w-fit text-sm whitespace-nowrap"
                                                >
                                                    2 star
                                                </div>
                                                <div
                                                    class="flex h-1.5 w-full overflow-hidden rounded-sm bg-slate-50 dark:bg-slate-900"
                                                >
                                                    <Progress
                                                        class="w-full rounded-sm"
                                                    >
                                                        <ProgressBar
                                                            :progress="30"
                                                        />
                                                    </Progress>
                                                </div>
                                                <div class="text-xs">30%</div>
                                            </div>
                                            <div
                                                class="flex items-center justify-between gap-4 pt-2 text-slate-400"
                                            >
                                                <div
                                                    class="w-fit text-sm whitespace-nowrap"
                                                >
                                                    1 star
                                                </div>
                                                <div
                                                    class="flex h-1.5 w-full overflow-hidden rounded-sm bg-slate-50 dark:bg-slate-900"
                                                >
                                                    <Progress
                                                        class="w-full rounded-sm"
                                                    >
                                                        <ProgressBar
                                                            :progress="40"
                                                        />
                                                    </Progress>
                                                </div>
                                                <div class="text-xs">40%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-12 md:col-span-6">
                                <div
                                    class="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <div
                                        class="flex items-center gap-6 p-5 sm:p-6"
                                    >
                                        <div>
                                            <h1
                                                class="leading-tighter font-heading mb-2 text-center text-6xl font-normal text-slate-700 dark:text-white"
                                            >
                                                4.4
                                            </h1>
                                            <div
                                                class="mx-auto flex items-center justify-center gap-3"
                                            >
                                                <ul
                                                    class="flex justify-center gap-1 text-base text-yellow-600"
                                                >
                                                    <li>
                                                        <Icon
                                                            name="star-fill"
                                                        ></Icon>
                                                    </li>
                                                    <li>
                                                        <Icon
                                                            name="star-fill"
                                                        ></Icon>
                                                    </li>
                                                    <li>
                                                        <Icon
                                                            name="star-fill"
                                                        ></Icon>
                                                    </li>
                                                    <li>
                                                        <Icon
                                                            name="star-half-fill"
                                                        ></Icon>
                                                    </li>
                                                    <li>
                                                        <Icon
                                                            name="star"
                                                        ></Icon>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div
                                                class="mx-auto max-w-[200px] pt-2 text-center"
                                            >
                                                <span
                                                    class="text-sm text-slate-400"
                                                    ><Icon
                                                        class="me-1"
                                                        name="users-fill"
                                                    ></Icon
                                                    >47,860 Total</span
                                                >
                                            </div>
                                        </div>
                                        <div class="w-full pt-4">
                                            <div
                                                class="flex items-center gap-4 py-2 text-slate-400"
                                            >
                                                <div class="text-sm">5</div>
                                                <Progress
                                                    class="h-4 w-full rounded-sm"
                                                >
                                                    <ProgressBar
                                                        :progress="70"
                                                        variant="green"
                                                    />
                                                </Progress>
                                            </div>
                                            <div
                                                class="flex items-center gap-4 py-2 text-slate-400"
                                            >
                                                <div class="text-sm">4</div>
                                                <Progress
                                                    class="h-4 w-full rounded-sm"
                                                >
                                                    <ProgressBar
                                                        :progress="55"
                                                        variant="indigo"
                                                    />
                                                </Progress>
                                            </div>
                                            <div
                                                class="flex items-center gap-4 py-2 text-slate-400"
                                            >
                                                <div class="text-sm">3</div>
                                                <Progress
                                                    class="h-4 w-full rounded-sm"
                                                >
                                                    <ProgressBar
                                                        :progress="38"
                                                        variant="cyan"
                                                    />
                                                </Progress>
                                            </div>
                                            <div
                                                class="flex items-center gap-4 py-2 text-slate-400"
                                            >
                                                <div class="text-sm">2</div>
                                                <Progress
                                                    class="h-4 w-full rounded-sm"
                                                >
                                                    <ProgressBar
                                                        :progress="15"
                                                        variant="yellow"
                                                    />
                                                </Progress>
                                            </div>
                                            <div
                                                class="flex items-center gap-4 pt-2 text-slate-400"
                                            >
                                                <div class="text-sm">1</div>
                                                <Progress
                                                    class="h-4 w-full rounded-sm"
                                                >
                                                    <ProgressBar
                                                        :progress="30"
                                                        variant="red"
                                                    />
                                                </Progress>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>User Profile</BlockTitle>
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="grid grid-cols-12 gap-7">
                            <div class="col-span-12 md:col-span-6">
                                <div
                                    class="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <div class="p-5 sm:p-6">
                                        <h4
                                            class="leading-tighter font-heading mb-2 text-2xl font-bold text-slate-700 dark:text-white"
                                        >
                                            UI/UX Designer at Google
                                        </h4>
                                        <ul
                                            class="flex justify-start gap-1 text-base text-yellow-600"
                                        >
                                            <li>
                                                <Icon name="star-fill"></Icon>
                                            </li>
                                            <li>
                                                <Icon name="star-fill"></Icon>
                                            </li>
                                            <li>
                                                <Icon name="star-fill"></Icon>
                                            </li>
                                            <li>
                                                <Icon
                                                    name="star-half-fill"
                                                ></Icon>
                                            </li>
                                            <li><Icon name="star"></Icon></li>
                                        </ul>
                                        <div
                                            class="flex items-end justify-between"
                                        >
                                            <ul class="gy-2 pt-2">
                                                <li>
                                                    <Icon
                                                        name="map-pin"
                                                        class="me-1"
                                                    ></Icon
                                                    >60311 Frankfurt am Main,
                                                    Italy
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="calender-date"
                                                        class="me-1"
                                                    ></Icon
                                                    >28th Sept, 2021
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="briefcase"
                                                        class="me-1"
                                                    ></Icon
                                                    >Fulltime
                                                </li>
                                            </ul>
                                            <span
                                                class="text-xxs tracking-snug relative inline-flex rounded-full border border-cyan-300 bg-cyan-100 px-3 py-1 text-center align-middle leading-4.5 font-medium whitespace-nowrap text-cyan-600 dark:border-cyan-800 dark:bg-cyan-950"
                                                >$1550.00</span
                                            >
                                        </div>
                                        <div id="designer" class="hidden pt-7">
                                            <div
                                                class="mb-7 border border-gray-200 dark:border-gray-900"
                                            ></div>
                                            <div
                                                class="rating-card-description"
                                            >
                                                <h5
                                                    class="-tracking-snug leading-tighter mb-3 text-xl font-medium text-slate-700 dark:text-white"
                                                >
                                                    Description
                                                </h5>
                                                <p class="mb-4 text-slate-500">
                                                    Some quick example text to
                                                    build on the card title and
                                                    make up the bulk of the
                                                    card's content. Some quick
                                                    example text to build on the
                                                    card title bulk.
                                                </p>
                                                <ul class="gy-1 pt-2">
                                                    <li class="py-1">
                                                        <Icon
                                                            name="check-circle"
                                                            class="text-primary-600 me-1"
                                                        ></Icon
                                                        ><span
                                                            class="text-slate-400"
                                                            >30 days off</span
                                                        >
                                                    </li>
                                                    <li class="py-1">
                                                        <Icon
                                                            name="check-circle"
                                                            class="text-primary-600 me-1"
                                                        ></Icon
                                                        ><span
                                                            class="text-slate-400"
                                                            >Free drinks</span
                                                        >
                                                    </li>
                                                    <li class="py-1">
                                                        <Icon
                                                            name="check-circle"
                                                            class="text-primary-600 me-1"
                                                        ></Icon
                                                        ><span
                                                            class="text-slate-400"
                                                            >Paid leave</span
                                                        >
                                                    </li>
                                                    <li class="py-1">
                                                        <Icon
                                                            name="check-circle"
                                                            class="text-primary-600 me-1"
                                                        ></Icon
                                                        ><span
                                                            class="text-slate-400"
                                                            >Healthcare</span
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="dark:bg-gray-1000 flex items-center justify-between rounded-b-md border-t border-gray-300 bg-gray-200 px-5 py-3 dark:border-gray-900"
                                    >
                                        <a
                                            class="group cursor-pointer font-medium text-gray-500 *:pointer-events-none"
                                            @click="
                                                (ev) =>
                                                    handleToggle(ev, 'designer')
                                            "
                                        >
                                            <span class="group-[.active]:hidden"
                                                >More info</span
                                            >
                                            <span
                                                class="hidden group-[.active]:inline-block"
                                                >Less info</span
                                            >
                                            <Icon
                                                class="ms-3 text-base font-bold group-[.active]:hidden"
                                                name="upword-ios"
                                            ></Icon>
                                            <Icon
                                                class="ms-3 hidden text-base font-bold group-[.active]:inline-block"
                                                name="downward-ios"
                                            ></Icon>
                                        </a>
                                        <a
                                            href="#"
                                            class="btn bg-primary-600 rounded-md px-5 py-2 font-medium text-white"
                                            >Apply</a
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-12 md:col-span-6">
                                <div
                                    class="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <div class="p-5 sm:p-6">
                                        <h4
                                            class="leading-tighter font-heading mb-2 text-2xl font-bold text-slate-700 dark:text-white"
                                        >
                                            Developer at Google
                                        </h4>
                                        <ul
                                            class="flex justify-start gap-1 text-base text-yellow-600"
                                        >
                                            <li>
                                                <Icon name="star-fill"></Icon>
                                            </li>
                                            <li>
                                                <Icon name="star-fill"></Icon>
                                            </li>
                                            <li>
                                                <Icon name="star-fill"></Icon>
                                            </li>
                                            <li>
                                                <Icon
                                                    name="star-half-fill"
                                                ></Icon>
                                            </li>
                                            <li><Icon name="star"></Icon></li>
                                        </ul>
                                        <div
                                            class="flex items-end justify-between"
                                        >
                                            <ul class="gy-2 pt-2">
                                                <li>
                                                    <Icon
                                                        name="map-pin"
                                                        class="me-1"
                                                    ></Icon
                                                    >60311 Frankfurt am Main,
                                                    Italy
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="calender-date"
                                                        class="me-1"
                                                    ></Icon
                                                    >28th Sept, 2021
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="briefcase"
                                                        class="me-1"
                                                    ></Icon
                                                    >Fulltime
                                                </li>
                                            </ul>
                                            <span
                                                class="text-xxs tracking-snug relative inline-flex rounded-full border border-cyan-300 bg-cyan-100 px-3 py-1 text-center align-middle leading-4.5 font-medium whitespace-nowrap text-cyan-600 dark:border-cyan-800 dark:bg-cyan-950"
                                                >$1550.00</span
                                            >
                                        </div>

                                        <div id="developer" class="hidden pt-7">
                                            <div
                                                class="mb-7 border border-gray-200 dark:border-gray-900"
                                            ></div>
                                            <div
                                                class="rating-card-description"
                                            >
                                                <h5
                                                    class="-tracking-snug leading-tighter mb-3 text-xl font-medium text-slate-700 dark:text-white"
                                                >
                                                    Description
                                                </h5>
                                                <p class="mb-4 text-slate-500">
                                                    Some quick example text to
                                                    build on the card title and
                                                    make up the bulk of the
                                                    card's content. Some quick
                                                    example text to build on the
                                                    card title bulk.
                                                </p>
                                                <ul class="gy-1 pt-2">
                                                    <li class="py-1">
                                                        <Icon
                                                            name="check-circle"
                                                            class="text-primary-600 me-1"
                                                        ></Icon
                                                        ><span
                                                            class="text-slate-400"
                                                            >30 days off</span
                                                        >
                                                    </li>
                                                    <li class="py-1">
                                                        <Icon
                                                            name="check-circle"
                                                            class="text-primary-600 me-1"
                                                        ></Icon
                                                        ><span
                                                            class="text-slate-400"
                                                            >Free drinks</span
                                                        >
                                                    </li>
                                                    <li class="py-1">
                                                        <Icon
                                                            name="check-circle"
                                                            class="text-primary-600 me-1"
                                                        ></Icon
                                                        ><span
                                                            class="text-slate-400"
                                                            >Paid leave</span
                                                        >
                                                    </li>
                                                    <li class="py-1">
                                                        <Icon
                                                            name="check-circle"
                                                            class="text-primary-600 me-1"
                                                        ></Icon
                                                        ><span
                                                            class="text-slate-400"
                                                            >Healthcare</span
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="dark:bg-gray-1000 flex items-center justify-between rounded-b-md border-t border-gray-300 bg-gray-200 px-5 py-3 dark:border-gray-900"
                                    >
                                        <a
                                            class="group cursor-pointer font-medium text-gray-500 *:pointer-events-none"
                                            @click="
                                                (ev) =>
                                                    handleToggle(
                                                        ev,
                                                        'developer',
                                                    )
                                            "
                                        >
                                            <span class="group-[.active]:hidden"
                                                >More info</span
                                            >
                                            <span
                                                class="hidden group-[.active]:inline-block"
                                                >Less info</span
                                            >
                                            <Icon
                                                class="ms-3 text-base font-bold group-[.active]:hidden"
                                                name="upword-ios"
                                            ></Icon>
                                            <Icon
                                                class="ms-3 hidden text-base font-bold group-[.active]:inline-block"
                                                name="downward-ios"
                                            ></Icon>
                                        </a>
                                        <a
                                            href="#"
                                            class="btn bg-primary-600 rounded-md px-5 py-2 font-medium text-white"
                                            >Apply</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>Institute Profile</BlockTitle>
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="grid grid-cols-12 gap-7">
                            <div class="col-span-12 md:col-span-6">
                                <div
                                    class="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <div class="p-5 sm:p-6">
                                        <h4
                                            class="leading-tighter font-heading mb-2 text-2xl font-bold text-slate-700 dark:text-white"
                                        >
                                            Softnio
                                        </h4>
                                        <div
                                            class="flex items-end justify-between"
                                        >
                                            <ul
                                                class="flex justify-start gap-1 text-base text-yellow-600"
                                            >
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-half-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon name="star"></Icon>
                                                </li>
                                            </ul>
                                            <span
                                                class="text-xxs tracking-snug relative inline-flex rounded-full border border-cyan-300 bg-cyan-100 px-3 py-1 text-center align-middle leading-4.5 font-medium whitespace-nowrap text-cyan-600 dark:border-cyan-800 dark:bg-cyan-950"
                                                >$1550.00</span
                                            >
                                        </div>
                                        <h5
                                            class="-tracking-snug leading-tighter mt-6 mb-3 text-xl font-medium text-slate-700 dark:text-white"
                                        >
                                            Criteria on Softnio
                                        </h5>
                                        <div class="flex justify-between py-2">
                                            <span class="text-slate-400"
                                                >Productivity</span
                                            >
                                            <ul
                                                class="flex justify-start gap-1 text-base text-yellow-600"
                                            >
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="flex justify-between py-2">
                                            <span class="text-slate-400"
                                                >Competitive Position</span
                                            >
                                            <ul
                                                class="flex justify-start gap-1 text-base text-yellow-600"
                                            >
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon name="star"></Icon>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="flex justify-between py-2">
                                            <span class="text-slate-400"
                                                >Brand Value</span
                                            >
                                            <ul
                                                class="flex justify-start gap-1 text-base text-yellow-600"
                                            >
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="flex justify-between py-2">
                                            <span class="text-slate-400"
                                                >Environment</span
                                            >
                                            <ul
                                                class="flex justify-start gap-1 text-base text-yellow-600"
                                            >
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon name="star"></Icon>
                                                </li>
                                            </ul>
                                        </div>

                                        <div id="institute" class="hidden pt-7">
                                            <div
                                                class="mb-7 border-t border-gray-200 dark:border-gray-900"
                                            ></div>
                                            <div
                                                class="rating-card-description"
                                            >
                                                <h5
                                                    class="-tracking-snug leading-tighter mb-3 text-xl font-medium text-slate-700 dark:text-white"
                                                >
                                                    Description
                                                </h5>
                                                <p class="mb-4 text-slate-500">
                                                    Some quick example text to
                                                    build on the card title and
                                                    make up the bulk of the
                                                    card's content. Some quick
                                                    example text to build on the
                                                    card title bulk.
                                                </p>
                                                <ul class="py-1 pt-2">
                                                    <li class="py-1">
                                                        <Icon
                                                            name="check-circle"
                                                            class="text-primary-600 me-1"
                                                        ></Icon
                                                        ><span
                                                            class="text-slate-400"
                                                            >30 days off</span
                                                        >
                                                    </li>
                                                    <li class="py-1">
                                                        <Icon
                                                            name="check-circle"
                                                            class="text-primary-600 me-1"
                                                        ></Icon
                                                        ><span
                                                            class="text-slate-400"
                                                            >Free drinks</span
                                                        >
                                                    </li>
                                                    <li class="py-1">
                                                        <Icon
                                                            name="check-circle"
                                                            class="text-primary-600 me-1"
                                                        ></Icon
                                                        ><span
                                                            class="text-slate-400"
                                                            >Paid leave</span
                                                        >
                                                    </li>
                                                    <li class="py-1">
                                                        <Icon
                                                            name="check-circle"
                                                            class="text-primary-600 me-1"
                                                        ></Icon
                                                        ><span
                                                            class="text-slate-400"
                                                            >Healthcare</span
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="dark:bg-gray-1000 flex items-center justify-between rounded-b-md border-t border-gray-300 bg-gray-200 px-5 py-3 dark:border-gray-900"
                                    >
                                        <a
                                            class="group cursor-pointer font-medium text-gray-500 *:pointer-events-none"
                                            @click="
                                                (ev) =>
                                                    handleToggle(
                                                        ev,
                                                        'institute',
                                                    )
                                            "
                                        >
                                            <span class="group-[.active]:hidden"
                                                >More info</span
                                            >
                                            <span
                                                class="hidden group-[.active]:inline-block"
                                                >Less info</span
                                            >
                                            <Icon
                                                class="ms-3 text-base font-bold group-[.active]:hidden"
                                                name="upword-ios"
                                            ></Icon>
                                            <Icon
                                                class="ms-3 hidden text-base font-bold group-[.active]:inline-block"
                                                name="downward-ios"
                                            ></Icon>
                                        </a>
                                        <a
                                            href="#"
                                            class="btn bg-primary-600 rounded-md px-5 py-2 font-medium text-white"
                                            >Apply</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>Review form</BlockTitle>
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="grid grid-cols-12 gap-7">
                            <div class="col-span-12 md:col-span-6">
                                <div
                                    class="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <Form>
                                        <div class="p-5 sm:p-6">
                                            <h4
                                                class="leading-tighter font-heading mb-2 text-2xl font-bold text-slate-700 dark:text-white"
                                            >
                                                Softnio
                                            </h4>
                                            <div
                                                class="flex items-center gap-3"
                                            >
                                                <ul
                                                    class="flex justify-start gap-1 text-base text-yellow-600"
                                                >
                                                    <li>
                                                        <Icon
                                                            name="star-fill"
                                                        ></Icon>
                                                    </li>
                                                    <li>
                                                        <Icon
                                                            name="star-fill"
                                                        ></Icon>
                                                    </li>
                                                    <li>
                                                        <Icon
                                                            name="star-fill"
                                                        ></Icon>
                                                    </li>
                                                    <li>
                                                        <Icon
                                                            name="star-half-fill"
                                                        ></Icon>
                                                    </li>
                                                    <li>
                                                        <Icon
                                                            name="star"
                                                        ></Icon>
                                                    </li>
                                                </ul>
                                                <span>4.4 (78)</span>
                                            </div>
                                            <div class="my-4">
                                                <FormGroup>
                                                    <FormLabel
                                                        class="mb-2"
                                                        htmlFor="title"
                                                        >Title</FormLabel
                                                    >
                                                    <InputWrap>
                                                        <Input
                                                            id="title"
                                                            defaultValue="You only miss it when it gone!"
                                                        />
                                                    </InputWrap>
                                                </FormGroup>
                                                <FormGroup>
                                                    <FormLabel
                                                        class="mb-2"
                                                        htmlFor="job-title"
                                                        >Job Title</FormLabel
                                                    >
                                                    <InputWrap>
                                                        <Input
                                                            id="job-title"
                                                            defaultValue="Sr. Frontend Developer"
                                                        />
                                                    </InputWrap>
                                                </FormGroup>
                                                <FormGroup>
                                                    <FormLabel
                                                        class="mb-2"
                                                        htmlFor="experience"
                                                        >How was your
                                                        experience?</FormLabel
                                                    >
                                                    <InputWrap>
                                                        <TextArea
                                                            id="experience"
                                                            autoComplete="off"
                                                            defaultValue="I've been using Dashlite for months now and with every update, it's just becoming better. Thank you for such a great design touch. Really love it"
                                                        />
                                                    </InputWrap>
                                                </FormGroup>
                                                <h5
                                                    class="-tracking-snug leading-tighter mt-11 mb-3 text-xl font-medium text-slate-700 dark:text-white"
                                                >
                                                    Criteria on Softnio
                                                </h5>
                                                <div
                                                    class="flex justify-between py-2"
                                                >
                                                    <span class="text-slate-400"
                                                        >Productivity</span
                                                    >
                                                    <ul
                                                        class="flex justify-start gap-1 text-base text-yellow-600"
                                                    >
                                                        <li>
                                                            <Icon
                                                                name="star-fill"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star-fill"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star-fill"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star-fill"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star-fill"
                                                            ></Icon>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div
                                                    class="flex justify-between py-2"
                                                >
                                                    <span class="text-slate-400"
                                                        >Competitive
                                                        Position</span
                                                    >
                                                    <ul
                                                        class="flex justify-start gap-1 text-base text-yellow-600"
                                                    >
                                                        <li>
                                                            <Icon
                                                                name="star-fill"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star-fill"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star-fill"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star-fill"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div
                                                    class="flex justify-between py-2"
                                                >
                                                    <span class="text-slate-400"
                                                        >Brand Value</span
                                                    >
                                                    <ul
                                                        class="flex justify-start gap-1 text-base text-yellow-600"
                                                    >
                                                        <li>
                                                            <Icon
                                                                name="star-fill"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star-fill"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star-fill"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star-fill"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star-fill"
                                                            ></Icon>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div
                                                    class="flex justify-between py-2"
                                                >
                                                    <span class="text-slate-400"
                                                        >Environment</span
                                                    >
                                                    <ul
                                                        class="flex justify-start gap-1 text-base text-yellow-600"
                                                    >
                                                        <li>
                                                            <Icon
                                                                name="star-fill"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star-fill"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star-fill"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star-fill"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="dark:bg-gray-1000 flex items-center justify-end rounded-b-md border-t border-gray-300 bg-gray-200 px-5 py-4 dark:border-gray-900"
                                        >
                                            <a
                                                href="#"
                                                class="btn bg-primary-600 rounded-md px-5 py-2 font-medium text-white"
                                                >Published Review</a
                                            >
                                        </div>
                                    </Form>
                                </div>
                            </div>

                            <div class="col-span-12 md:col-span-6">
                                <div
                                    class="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <Form>
                                        <div class="p-5 sm:p-6">
                                            <h4
                                                class="leading-tighter font-heading mb-2 text-2xl font-bold text-slate-700 dark:text-white"
                                            >
                                                Softnio
                                            </h4>
                                            <div
                                                class="flex items-center gap-3"
                                            >
                                                <ul
                                                    class="flex justify-start gap-1 text-base text-yellow-600"
                                                >
                                                    <li>
                                                        <Icon
                                                            name="star-fill"
                                                        ></Icon>
                                                    </li>
                                                    <li>
                                                        <Icon
                                                            name="star-fill"
                                                        ></Icon>
                                                    </li>
                                                    <li>
                                                        <Icon
                                                            name="star-fill"
                                                        ></Icon>
                                                    </li>
                                                    <li>
                                                        <Icon
                                                            name="star-half-fill"
                                                        ></Icon>
                                                    </li>
                                                    <li>
                                                        <Icon
                                                            name="star"
                                                        ></Icon>
                                                    </li>
                                                </ul>
                                                <span>4.4 (78)</span>
                                            </div>
                                            <div class="my-4">
                                                <FormGroup>
                                                    <FormLabel
                                                        class="mb-2"
                                                        htmlFor="title"
                                                        >Title</FormLabel
                                                    >
                                                    <InputWrap>
                                                        <Input
                                                            id="title"
                                                            placeholder="Title"
                                                        />
                                                    </InputWrap>
                                                </FormGroup>
                                                <FormGroup>
                                                    <FormLabel
                                                        class="mb-2"
                                                        htmlFor="job-title"
                                                        >Job Title</FormLabel
                                                    >
                                                    <InputWrap>
                                                        <Input
                                                            id="job-title"
                                                            placeholder="Job Title"
                                                        />
                                                    </InputWrap>
                                                </FormGroup>
                                                <FormGroup>
                                                    <FormLabel
                                                        class="mb-2"
                                                        htmlFor="experience"
                                                        >How was your
                                                        experience?</FormLabel
                                                    >
                                                    <InputWrap>
                                                        <TextArea
                                                            id="experience"
                                                            autoComplete="off"
                                                            placeholder="Describe your experience at Softnio"
                                                        />
                                                    </InputWrap>
                                                </FormGroup>
                                                <h5
                                                    class="-tracking-snug leading-tighter mt-11 mb-3 text-xl font-medium text-slate-700 dark:text-white"
                                                >
                                                    Criteria on Softnio
                                                </h5>
                                                <div
                                                    class="flex justify-between py-2"
                                                >
                                                    <span class="text-slate-400"
                                                        >Productivity</span
                                                    >
                                                    <ul
                                                        class="flex justify-start gap-1 text-base text-yellow-600"
                                                    >
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div
                                                    class="flex justify-between py-2"
                                                >
                                                    <span class="text-slate-400"
                                                        >Competitive
                                                        Position</span
                                                    >
                                                    <ul
                                                        class="flex justify-start gap-1 text-base text-yellow-600"
                                                    >
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div
                                                    class="flex justify-between py-2"
                                                >
                                                    <span class="text-slate-400"
                                                        >Brand Value</span
                                                    >
                                                    <ul
                                                        class="flex justify-start gap-1 text-base text-yellow-600"
                                                    >
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div
                                                    class="flex justify-between py-2"
                                                >
                                                    <span class="text-slate-400"
                                                        >Environment</span
                                                    >
                                                    <ul
                                                        class="flex justify-start gap-1 text-base text-yellow-600"
                                                    >
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                        <li>
                                                            <Icon
                                                                name="star"
                                                            ></Icon>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="dark:bg-gray-1000 flex items-center justify-end rounded-b-md border-t border-gray-300 bg-gray-200 px-5 py-4 dark:border-gray-900"
                                        >
                                            <a
                                                href="#"
                                                class="btn bg-primary-600 rounded-md px-5 py-2 font-medium text-white"
                                                >Published Review</a
                                            >
                                        </div>
                                    </Form>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>Customers Ratings</BlockTitle>
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="grid grid-cols-12 gap-7">
                            <div class="col-span-12 md:col-span-9">
                                <div
                                    class="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <div class="p-5 sm:p-6">
                                        <div
                                            class="flex items-center justify-between"
                                        >
                                            <div>
                                                <h4
                                                    class="leading-tighter font-heading mb-2 text-xl font-bold text-slate-700 dark:text-white"
                                                >
                                                    Design Quality
                                                </h4>
                                                <p class="text-slate-600">
                                                    by
                                                    <span
                                                        class="text-primary-600"
                                                        >Softnio</span
                                                    >
                                                    13 days ago
                                                </p>
                                            </div>
                                            <div
                                                class="flex items-center gap-3"
                                            >
                                                <ul
                                                    class="flex justify-start gap-1 text-base text-yellow-600"
                                                >
                                                    <li>
                                                        <Icon
                                                            name="star-fill"
                                                        ></Icon>
                                                    </li>
                                                    <li>
                                                        <Icon
                                                            name="star-fill"
                                                        ></Icon>
                                                    </li>
                                                    <li>
                                                        <Icon
                                                            name="star-fill"
                                                        ></Icon>
                                                    </li>
                                                    <li>
                                                        <Icon
                                                            name="star-half-fill"
                                                        ></Icon>
                                                    </li>
                                                    <li>
                                                        <Icon
                                                            name="star"
                                                        ></Icon>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="bg-white-50 mt-7 rounded-md border border-gray-300 dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <div
                                        class="dark:bg-gray-1000 flex items-center justify-between rounded-tl-md rounded-tr-md border-b border-gray-300 bg-slate-50 p-5 sm:p-6 dark:border-gray-900"
                                    >
                                        <div class="card-title">
                                            <h4
                                                class="leading-tighter font-heading mb-2 text-xl font-bold text-slate-700 dark:text-white"
                                            >
                                                Feature Quality
                                            </h4>
                                            <p class="text-slate-600">
                                                by
                                                <span class="text-primary-600"
                                                    >Softnio</span
                                                >
                                                6 days ago
                                            </p>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <ul
                                                class="flex justify-start gap-1 text-base text-yellow-600"
                                            >
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="star-half-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon name="star"></Icon>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div
                                        class="border-b border-gray-300 p-5 sm:p-6 dark:border-gray-900"
                                    >
                                        <p class="text-slate-400">
                                            I've been using Dashlite for months
                                            now and with every update, update
                                            it's just becoming more and more
                                            better it's just becoming better.
                                            Thank you for such a great design
                                            touch. Further I definitely
                                            cooperate with your product . Highly
                                            appriciate it. Really love it
                                        </p>
                                    </div>
                                    <div
                                        class="border-b border-gray-300 p-5 sm:p-6 dark:border-gray-900"
                                    >
                                        <div class="flex items-center">
                                            <div
                                                class="bg-primary-600 relative flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full text-sm font-medium text-white"
                                            >
                                                <span>AB</span>
                                            </div>
                                            <div class="ms-4">
                                                <div
                                                    class="mb-3 flex items-center gap-3"
                                                >
                                                    <h6
                                                        class="leading-tighter font-heading text-lg font-bold text-slate-700 dark:text-white"
                                                    >
                                                        Abu Bin Ishiyak
                                                    </h6>
                                                    <span
                                                        class="text-xxs tracking-snug relative inline-flex rounded-sm border border-cyan-300 bg-cyan-100 px-2 text-center align-middle leading-4.5 font-medium whitespace-nowrap text-cyan-600 dark:border-cyan-800 dark:bg-cyan-950"
                                                        >Author</span
                                                    >
                                                </div>
                                                <p class="text-slate-400">
                                                    Time zone depend on your
                                                    server time as we use that
                                                    by default. So you need to
                                                    change that from your
                                                    server. For data display
                                                    issues, you may send your
                                                    website url so we can check
                                                    what actually wrong.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-5 sm:p-6">
                                        <div class="flex items-center">
                                            <div
                                                class="relative flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-cyan-600 text-sm font-medium text-white"
                                            >
                                                <span>IB</span>
                                            </div>
                                            <div class="ms-4">
                                                <h6
                                                    class="leading-tighter font-heading mb-3 text-lg font-bold text-slate-700 dark:text-white"
                                                >
                                                    Ifrat Binte
                                                </h6>
                                                <p class="text-slate-400">
                                                    Thanks for the help. Really
                                                    great support.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>Customers Ratings</BlockTitle>
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="grid grid-cols-12 gap-7">
                            <div class="col-span-12 md:col-span-9">
                                <div
                                    class="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <div class="p-5 sm:p-6">
                                        <div class="flex items-center gap-3">
                                            <ul
                                                class="flex justify-start gap-1 text-base text-red-600"
                                            >
                                                <li>
                                                    <Icon
                                                        name="heart-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="heart-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="heart-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon
                                                        name="heart-fill"
                                                    ></Icon>
                                                </li>
                                                <li>
                                                    <Icon name="heart"></Icon>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>
        </div>
    </Layout>
</template>
