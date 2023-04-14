<template>
    <div>
        <QueryBuilder
            v-model:blueprint="form.blueprint"
            :errors="errors"
            :flavor="tailwind"
            :conditions="filter.conditions" />
    </div>
</template>

<script setup lang="ts">
import { QueryBuilder } from "@hammerstone/refine-vue3"
import tailwindFlavor from '@hammerstone/refine-vue3/src/flavors/tailwind.js';
import {useForm} from "@inertiajs/vue3";
import {ref} from "vue";

let errors = ref({});

let tailwind = ref(tailwindFlavor);

const props = defineProps<{
    filter: {
        blueprint: any[]
        conditions: any[]
        errors: any[]
    } | null
}>();

let form = useForm({
    blueprint: props.filter?.blueprint || [],
})

</script>

<style scoped>

</style>
