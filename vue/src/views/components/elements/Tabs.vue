<script setup>
import Layout from '@/layout/Main.vue'
import { Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText, Icon } from "@/components";
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue'
</script>
<template>
    <Layout title="Tabs Nav">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>Tabs Nav</BlockTitleLg>
              <BlockLeadText>Here is some custom style Tab using <a target="_blank" class="text-primary-600 hover:text-primary-800" href="https://headlessui.com/v1/vue/tabs">HeadlessUI Tab</a> component .</BlockLeadText>
          </BlockPageHead>
          <Block>
            <BlockHead>
                <BlockTitle>Basic Examples</BlockTitle>
                <BlockText>Checkout our awesome tab component.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <TabGroup>
                  <TabList as="ul" class="tab-nav flex flex-wrap font-heading text-sm border-b border-gray-300 dark:border-gray-900 -mt-4">
                    <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                      <Tab class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 ui-selected:after:opacity-100 ui-selected:text-primary-600 focus-visible:outline-none">Personal</Tab>
                    </li>
                    <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                      <Tab class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 ui-selected:after:opacity-100 ui-selected:text-primary-600 focus-visible:outline-none">Security</Tab>
                    </li>
                    <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                      <Tab class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 ui-selected:after:opacity-100 ui-selected:text-primary-600 focus-visible:outline-none">Notifications</Tab>
                    </li>
                    <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                      <Tab class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 ui-selected:after:opacity-100 ui-selected:text-primary-600 focus-visible:outline-none">Connect</Tab>
                    </li>
                  </TabList>
                  <TabPanels class="tab-content mt-5">
                    <TabPanel>
                      <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incid.</p>
                    </TabPanel>
                    <TabPanel>
                      <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.</p>
                    </TabPanel>
                    <TabPanel>
                      <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                    </TabPanel>
                    <TabPanel>
                      <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                    </TabPanel>
                  </TabPanels>
                </TabGroup>
              </CardBody>
            </Card>
          </Block>
          <Block>
            <BlockHead>
                <BlockTitle>With Icon</BlockTitle>
                <BlockText>Checkout our awesome tab component with icons.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <TabGroup>
                  <TabList as="ul" class="tab-nav flex flex-wrap font-heading text-sm border-b border-gray-300 dark:border-gray-900 -mt-4">
                    <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                      <Tab class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 ui-selected:after:opacity-100 ui-selected:text-primary-600 focus-visible:outline-none">
                        <Icon class="text-xl" name="user" />
                        <span class="ms-2">Personal</span>
                      </Tab>
                    </li>
                    <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                      <Tab class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 ui-selected:after:opacity-100 ui-selected:text-primary-600 focus-visible:outline-none">
                        <Icon class="text-xl" name="lock-alt" />
                        <span class="ms-2">Security</span>
                      </Tab>
                    </li>
                    <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                      <Tab class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 ui-selected:after:opacity-100 ui-selected:text-primary-600 focus-visible:outline-none">
                        <Icon class="text-xl" name="bell" />
                        <span class="ms-2">Notifications</span>
                      </Tab>
                    </li>
                    <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                      <Tab class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 ui-selected:after:opacity-100 ui-selected:text-primary-600 focus-visible:outline-none">
                        <Icon class="text-xl" name="link" />
                        <span class="ms-2">Connect</span>
                      </Tab>
                    </li>
                  </TabList>
                  <TabPanels class="tab-content mt-5">
                    <TabPanel>
                      <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incid.</p>
                    </TabPanel>
                    <TabPanel>
                      <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.</p>
                    </TabPanel>
                    <TabPanel>
                      <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                    </TabPanel>
                    <TabPanel>
                      <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                    </TabPanel>
                  </TabPanels>
                </TabGroup>
              </CardBody>
            </Card>
          </Block>
          <Block>
            <BlockHead>
                <BlockTitle>Alternet Tab style</BlockTitle>
                <BlockText>Tab component with centered style navigation.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <TabGroup>
                  <TabList as="ul" class="tab-nav flex flex-wrap justify-center font-heading text-sm -mt-4 -me-5 md:-me-6 lg:-me-7 xl:-me-9">
                    <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9">
                      <Tab class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 ui-selected:after:opacity-100 ui-selected:text-primary-600 focus-visible:outline-none">Personal</Tab>
                    </li>
                    <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9">
                      <Tab class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 ui-selected:after:opacity-100 ui-selected:text-primary-600 focus-visible:outline-none">Security</Tab>
                    </li>
                    <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9">
                      <Tab class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 ui-selected:after:opacity-100 ui-selected:text-primary-600 focus-visible:outline-none">Notifications</Tab>
                    </li>
                    <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9">
                      <Tab class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 ui-selected:after:opacity-100 ui-selected:text-primary-600 focus-visible:outline-none">Connect</Tab>
                    </li>
                  </TabList>
                  <TabPanels class="tab-content mt-5">
                    <TabPanel>
                      <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incid.</p>
                    </TabPanel>
                    <TabPanel>
                      <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.</p>
                    </TabPanel>
                    <TabPanel>
                      <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                    </TabPanel>
                    <TabPanel>
                      <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                    </TabPanel>
                  </TabPanels>
                </TabGroup>
              </CardBody>
            </Card>
          </Block>
        </div>
    </Layout>
</template>