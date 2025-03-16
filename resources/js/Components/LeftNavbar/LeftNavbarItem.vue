<script>
import { Link } from '@inertiajs/vue3';

export default {
    name: 'LeftNavbarItem',
    components: {
        Link
    },
    props: {
        link: {
            type: String,
            required: true,
        },
        label: {
            type: String,
            required: true,
        }
    }
}
</script>

<template>
<div>
    <Link :href="link">{{ label }}</Link>
</div>
</template>
