<template>
    <div>
        <QueryBuilder :errors="errors" :blueprint="form.form" :flavor="tailwindFlavor"  conditions=""/>
    </div>
</template>

<script setup>
import QueryBuilder from '@hammerstone/refine-vue3/src/components/base/query-builder/query-builder.vue';
import tailwindFlavor from '@hammerstone/refine-vue3/src/flavors/tailwind.js';
import {useForm} from "@inertiajs/vue3";

let errors = ref(null);

let form = useForm({
    blueprint: null
});

form.post(route('reports.store'));


</script>

<style scoped>

</style>
