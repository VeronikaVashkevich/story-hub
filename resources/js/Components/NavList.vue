<template>
    <nav>
        <ul class="flex justify-between nav-list">
            <li>Истории</li>
            <li v-if="$canLogin && !$page.props.auth.user">
                <Link :href="route('login')">Войти</Link>
            </li>
            <li v-if="$canRegister && !$page.props.auth.user">
                <Link :href="route('register')">Регистрация</Link>
            </li>
            <li v-if="$page.props.auth.user">
                <Link :href="route('profile.index')">Мой профиль</Link>
            </li>
            <li v-if="$page.props.auth.user">
                <Link @click="logout">Выйти</Link>
            </li>
        </ul>
    </nav>
</template>

<script>
import { Link } from '@inertiajs/vue3';

export default {
    name: 'NavList',
    components: {
        Link
    },
    methods: {
        logout() {
            this.$inertia.post(route('logout'));
        }
    }
}
</script>
