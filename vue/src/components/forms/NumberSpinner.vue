<script setup>
import { ref, computed } from 'vue' 
import { Icon, Button, Input, InputGroup } from "@/components";

const inputCompClass = computed(() => ({
    "relative z-10 text-center block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none":true,
    [`${props.inputClass}`]:props.inputClass
}))
const props = defineProps({
    inputClass:String,
    defaultValue: { type: Number, default: 0 },
    min: { type: Number, default: 0 },
    max: { type: Number, default: Infinity },
    step: { type: Number, default: 1 },
    variant: { type: String, default: "primary" },
})

const value = ref(props.defaultValue);
const increaseVal = (n) => {
    if (props.defaultValue !== props.max) {
      if (props.step) {
        n = props.step;
      }
        value.value += n;
    }
  };
  const reduceVal = (n) => {
    if (props.defaultValue > 0 && props.defaultValue !== props.min) {
      if (props.step) {
        n = props.step;
      }
        value.value -= n;
    }
  };

</script>
<template>
    <InputGroup>
      <Button
        icon
        size="rg"
        :variant="variant"
        :disabled="value <= min ? true : false"
        @click="() => reduceVal(1)"
      >
        <Icon name="minus"></Icon>
      </Button>
      <input
        type="number"
        :class="inputCompClass"
        :value="value"
        @change="(ev) => value = (Number(ev.target.value))"
        :max="max"
        :min="min"
      />
      <Button
        icon
        size="rg"
        :variant="variant"
        :disabled="value >= max ? true : false"
        @click="() => increaseVal(1)"
      >
        <Icon name="plus"></Icon>
      </Button>
    </InputGroup>
</template>