<script setup>
import {ref, onMounted} from 'vue'
import Pristine from 'pristinejs'
import Layout from '@/layout/Main.vue'
import { Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText, Form, FormGroup, FormLabel, Input, InputWrap, InputIcon, InputGroup, InputAddon, Select, SelectOption, TextArea, CheckBox, RadioButton, Button  } from "@/components"

function formValidate(selector){
    let elm = document.querySelectorAll(selector)
    if( elm != 'undefined' && elm != null ){
        elm.forEach(item => {
            let itemId = item.id;
            var form = document.getElementById(itemId);

            var pristine = new Pristine(form, {
                classTo: 'form-group',
                errorClass: 'is-invalid',
                successClass: 'is-valid',
                errorTextParent: 'form-wrap',
                errorTextTag: 'div',
                errorTextClass: 'form-error' 
            });

            form.addEventListener('submit', function (e) {
                e.preventDefault();
                var valid = pristine.validate();
                form.classList.add('validated');
                if(valid){
                    form.classList.add('validated-success')
                }
            });
        })
    }
}

onMounted(()=> {
    formValidate('.js-validate')
})

</script>
<template>
    <Layout title="Form Validation">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>Form Validation</BlockTitleLg>
              <BlockLeadText>Using the Validation plugin, you can simply add validation on clientside before submit form. The plugin also offering plenty of customization options. For a full overview of this plugin, check out the documentation.</BlockLeadText>
          </BlockPageHead>
          <Block>
              <BlockHead>
                  <BlockTitle>Validation - Regular Style</BlockTitle>
                  <BlockText>Validating your form, just add the class <code class="text-pink-600">.js-validate</code> to any <code class="text-primary-600">&lt;form&gt;</code>, then it validate the form show error message.</BlockText>
              </BlockHead>
              <Card>
                <CardBody>
                    <Form action="#" class="js-validate" id="jsValidate" noValidate>
                        <div class="grid grid-flow-dense grid-cols-12 gap-6">
                            <div class="col-span-12 md:col-span-6">
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="fv-full-name">Full Name</FormLabel>
                                    <InputWrap>
                                        <Input id="fv-full-name" name="fv-full-name" required />
                                    </InputWrap>
                                </FormGroup>
                            </div>
                            <div class="col-span-12 md:col-span-6">
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="fv-email">Email address</FormLabel>
                                    <InputWrap>
                                        <InputIcon icon="mail" end />
                                        <Input type="email" id="fv-email" name="fvEmail" icon="end" required/>
                                    </InputWrap>
                                </FormGroup>
                            </div>
                            <div class="col-span-12 md:col-span-6">
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="fv-phone">Phone</FormLabel>
                                    <InputWrap>
                                        <InputGroup>
                                          <InputAddon>+880</InputAddon>
                                          <Input id="fv-phone" name="fv-phone"  required />
                                        </InputGroup>
                                    </InputWrap>
                                </FormGroup>
                            </div>
                            <div class="col-span-12 md:col-span-6">
                                <FormGroup>
                                    <FormLabel class="mb-2">Gender</FormLabel>
                                    <InputWrap>
                                        <ul class="flex flex-wrap gap-2">
                                            <li>
                                                <RadioButton name="fvGender" id="gender-male" required nocontrol>Male</RadioButton>
                                            </li>
                                            <li>
                                                <RadioButton name="fvGender" id="gender-female" required nocontrol>Female</RadioButton>
                                            </li>
                                            <li>
                                                <RadioButton name="fvGender" id="gender-other" required nocontrol>Others</RadioButton>
                                            </li>
                                        </ul>
                                    </InputWrap>
                                </FormGroup>
                            </div>
                            <div class="col-span-12 md:col-span-6">
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="fv-subject">Subject</FormLabel>
                                    <InputWrap>
                                        <Input id="fv-subject" name="fb-subject" required />
                                    </InputWrap>
                                </FormGroup>
                            </div>
                            <div class="col-span-12 md:col-span-6">
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="fv-topics">Topics</FormLabel>
                                    <InputWrap>
                                        <Select id="fv-topics" placeholder="Select a option" required >
                                          <SelectOption value="fv-gq">General Question</SelectOption>
                                          <SelectOption value="fv-tq">Tachnical Question</SelectOption>
                                          <SelectOption value="fv-ab">Account and Billing</SelectOption>
                                        </Select>
                                    </InputWrap>
                                </FormGroup>
                            </div>
                            <div class="col-span-12">
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="fv-message">Message</FormLabel>
                                    <InputWrap>
                                        <TextArea id="fv-message" name="fv-message" placeholder="Write your message" required />
                                    </InputWrap>
                                </FormGroup>
                            </div>
                            <div class="col-span-12">
                                <FormGroup>
                                    <FormLabel class="mb-2">Communication</FormLabel>
                                    <InputWrap>
                                        <ul class="flex flex-wrap items-center gap-3">
                                            <li>
                                                <CheckBox id="fv-com-email" name="fv-com-email" required> Email </CheckBox>
                                            </li>
                                            <li>
                                                <CheckBox id="fv-com-sms" name="fv-com-sms" required> SMS </CheckBox>
                                            </li>
                                            <li>
                                                <CheckBox id="fv-com-phone" name="fv-com-phone" required> Phone </CheckBox>
                                            </li>
                                        </ul>
                                    </InputWrap>
                                </FormGroup>
                            </div>
                            <div class="col-span-12">
                                <FormGroup>
                                    <Button size="lg" variant="primary" type="submit">Save Informations</Button>
                                </FormGroup>
                            </div>
                        </div>
                    </Form>
                </CardBody>
              </Card>
          </Block>
          <Block>
              <BlockHead>
                  <BlockTitle>Validation - Floating Style</BlockTitle>
                  <BlockText>Validating your form, just add the class <code class="text-pink-600">.js-validate</code> to any <code class="text-primary-600">&lt;form&gt;</code>, then it validate the form show error message.</BlockText>
              </BlockHead>
              <Card>
                <CardBody>
                    <Form action="#" class="js-validate floating-feedbacks" id="jsValidateFloating" noValidate>
                        <div class="grid grid-flow-dense grid-cols-12 gap-6">
                            <div class="col-span-12 md:col-span-6">
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="fv-full-name-floating">Full Name</FormLabel>
                                    <InputWrap>
                                        <Input id="fv-full-name-floating" name="fv-full-name-floating" required />
                                    </InputWrap>
                                </FormGroup>
                            </div>
                            <div class="col-span-12 md:col-span-6">
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="fv-email-floating">Email address</FormLabel>
                                    <InputWrap>
                                        <InputIcon icon="mail" end />
                                        <Input id="fv-email-floating" name="fv-email-floating" type="email" icon="end" required />
                                    </InputWrap>
                                </FormGroup>
                            </div>
                            <div class="col-span-12 md:col-span-6">
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="fv-phone-floating">Phone</FormLabel>
                                    <InputWrap>
                                        <InputGroup>
                                          <InputAddon>+880</InputAddon>
                                          <Input id="fv-phone-floating" name="fv-phone-floating" required/>
                                        </InputGroup>
                                    </InputWrap>
                                </FormGroup>
                            </div>
                            <div class="col-span-12 md:col-span-6">
                                <FormGroup>
                                    <FormLabel class="mb-2">Gender</FormLabel>
                                    <InputWrap class="form-check-wrap">
                                        <ul class="flex flex-wrap gap-2">
                                            <li>
                                              <RadioButton id="gender-male-floating" name="gender-floating" required nocontrol>Male</RadioButton>
                                            </li>
                                            <li>
                                              <RadioButton id="gender-female-floating" name="gender-floating" required nocontrol>Female</RadioButton>
                                            </li>
                                            <li>
                                              <RadioButton id="gender-other-floating" name="gender-floating" required nocontrol>Others</RadioButton>
                                            </li>
                                        </ul>
                                    </InputWrap>
                                </FormGroup>
                            </div>
                            <div class="col-span-12 md:col-span-6">
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="fv-subject-floating">Subject</FormLabel>
                                    <InputWrap>
                                        <Input id="fv-subject-floating" name="fv-subject-floating" required />
                                    </InputWrap>
                                </FormGroup>
                            </div>
                            <div class="col-span-12 md:col-span-6">
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="fv-topics-floating">Topics</FormLabel>
                                    <InputWrap>
                                        <Select id="fv-topics-floating" placeholder="Select a option" name="fv-topics-floating" required  >
                                          <SelectOption>Select a optionn</SelectOption>
                                          <SelectOption value="fv-gq-floating">General Question</SelectOption>
                                          <SelectOption value="fv-tq-floating">Tachnical Question</SelectOption>
                                          <SelectOption value="fv-ab-floating">Account and Billing</SelectOption>
                                        </Select>
                                    </InputWrap>
                                </FormGroup>
                            </div>
                            <div class="col-span-12">
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="fv-message-floating">Message</FormLabel>
                                    <InputWrap>
                                        <TextArea id="fv-message-floating" name="fv-message-floating" placeholder="Write your message" required  />
                                    </InputWrap>
                                </FormGroup>
                            </div>
                            <div class="col-span-12">
                                <FormGroup>
                                    <FormLabel class="mb-2">Communication</FormLabel>
                                    <InputWrap class="form-check-wrap">
                                        <ul class="flex flex-wrap items-center gap-3">
                                            <li>
                                                <CheckBox id="fv-com-email-floating" name="fv-com-email-floating" required> Email </CheckBox>
                                            </li>
                                            <li>
                                                <CheckBox id="fv-com-sms-floating" name="fv-com-sms-floating" required> SMS </CheckBox>
                                            </li>
                                            <li>
                                                <CheckBox id="fv-com-phone-floating" name="fv-com-phone-floating" required> Phone </CheckBox>
                                            </li>
                                        </ul>
                                    </InputWrap>
                                </FormGroup>
                            </div>
                            <div class="col-span-12">
                                <FormGroup>
                                    <Button size="lg" variant="primary" type="submit">Save Information</Button>
                                </FormGroup>
                            </div>
                        </div>
                    </Form>
                </CardBody>
              </Card>
          </Block>
        </div>
    </Layout>
</template>