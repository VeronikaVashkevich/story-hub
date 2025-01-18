<template>
    <header class="flex align-middle justify-between my-2">
        <div class="">
            <Link :href="route('index')">
                <img src="@img/logo-light.svg" alt="Logo">
            </Link>
        </div>
        <NavList/>
    </header>
</template>

<script>
import NavList from '@/Components/NavList.vue';
import { Link } from '@inertiajs/vue3';

export default {
    name: 'Header',

    components: {
        NavList,
        Link
    }
}
</script>
