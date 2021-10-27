<template>
    <nav>
        <ui>
            <li>
                <Link href="/">Home</Link>
            </li>
            <li>
                <Link href="/users">Users</Link>
            </li>
            <li>
                <Link href="/settings">Settings</Link>
            </li>
            <li>
                <Link href="/logout" method="post">Log Out</Link>
            </li>
        </ui>
    </nav>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: { Link }
};
</script>