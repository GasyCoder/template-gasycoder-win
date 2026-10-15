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
} from '@/components';
</script>
<template>
    <Layout title="Blank">
        <div class="mx-auto lg:max-w-[960px]">
            <BlockPageHead class="md:max-w-[720px]">
                <BlockBack to="/components">Components</BlockBack>
                <BlockTitleLg>Basic Table Example</BlockTitleLg>
                <BlockLeadText
                    >Examples for few basic styled tables</BlockLeadText
                >
            </BlockPageHead>
            <Block>
                <BlockHead>
                    <BlockTitle>Table Default</BlockTitle>
                    <BlockText
                        >Using the most basic table markup, here’s how based
                        tables look by default.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <table
                            class="table w-full border-collapse [&_td]:p-2 first:[&_td]:ps-5 last:[&_td]:pe-5 [&_th]:p-2 [&_th]:text-start first:[&_th]:ps-5 last:[&_th]:pe-5"
                        >
                            <thead
                                class="[&_th]:border-b [&_th]:border-gray-300 [&_th]:dark:border-gray-900"
                            >
                                <tr>
                                    <th>#</th>
                                    <th>First</th>
                                    <th>Last</th>
                                    <th>Handle</th>
                                </tr>
                            </thead>
                            <tbody
                                class="[&_:last-child_td]:border-b-0 [&_:last-child_th]:border-b-0 [&_td]:border-b [&_td]:border-gray-300 [&_td]:dark:border-gray-900 [&_th]:border-b [&_th]:border-gray-300 [&_th]:dark:border-gray-900"
                            >
                                <tr>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Stripe Table</BlockTitle>
                </BlockHead>
                <Card>
                    <CardBody>
                        <table
                            class="table w-full border-collapse [&_td]:p-2 first:[&_td]:ps-5 last:[&_td]:pe-5 [&_th]:p-2 [&_th]:text-start first:[&_th]:ps-5 last:[&_th]:pe-5"
                        >
                            <thead
                                class="[&_th]:border-b [&_th]:border-gray-300 [&_th]:dark:border-gray-900"
                            >
                                <tr>
                                    <th>#</th>
                                    <th>First</th>
                                    <th>Last</th>
                                    <th>Handle</th>
                                </tr>
                            </thead>
                            <tbody
                                class="[&_:last-child_td]:border-b-0 [&_:last-child_th]:border-b-0 [&_td]:border-b [&_td]:border-gray-300 [&_td]:dark:border-gray-900 [&_th]:border-b [&_th]:border-gray-300 [&_th]:dark:border-gray-900 odd:[&_tr]:bg-gray-100 odd:[&_tr]:dark:bg-gray-900"
                            >
                                <tr>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Bordered Table</BlockTitle>
                </BlockHead>
                <Card>
                    <CardBody>
                        <table
                            class="table w-full border-collapse [&_td]:p-2 first:[&_td]:ps-5 last:[&_td]:pe-5 [&_th]:p-2 [&_th]:text-start first:[&_th]:ps-5 last:[&_th]:pe-5"
                        >
                            <thead
                                class="[&_th]:border [&_th]:border-gray-300 [&_th]:dark:border-gray-900"
                            >
                                <tr>
                                    <th>#</th>
                                    <th>First</th>
                                    <th>Last</th>
                                    <th>Handle</th>
                                </tr>
                            </thead>
                            <tbody
                                class="[&_td]:border [&_td]:border-gray-300 [&_td]:dark:border-gray-900 [&_th]:border [&_th]:border-gray-300 [&_th]:dark:border-gray-900"
                            >
                                <tr>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Responsive Table</BlockTitle>
                    <BlockText
                        >Responsive tables allow tables to be scrolled
                        horizontally with ease. Make any table
                        responsive.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="overflow-auto">
                            <table
                                class="table w-full border-collapse [&_td]:p-2 first:[&_td]:ps-5 last:[&_td]:pe-5 [&_th]:p-2 [&_th]:text-start first:[&_th]:ps-5 last:[&_th]:pe-5"
                            >
                                <thead
                                    class="[&_th]:border-b [&_th]:border-gray-300 [&_th]:dark:border-gray-900"
                                >
                                    <tr>
                                        <th>#</th>
                                        <th>Heading</th>
                                        <th>Heading</th>
                                        <th>Heading</th>
                                        <th>Heading</th>
                                        <th>Heading</th>
                                        <th>Heading</th>
                                        <th>Heading</th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="[&_:last-child_td]:border-b-0 [&_:last-child_th]:border-b-0 [&_td]:border-b [&_td]:border-gray-300 [&_td]:dark:border-gray-900 [&_th]:border-b [&_th]:border-gray-300 [&_th]:dark:border-gray-900"
                                >
                                    <tr>
                                        <th>1</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </CardBody>
                </Card>
            </Block>
        </div>
    </Layout>
</template>
