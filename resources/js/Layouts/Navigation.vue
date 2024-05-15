<template>
    <Link :class="{ 'text-red': active }">
        <slot />
    </Link>
</template>

<script>
export default {
    props: {
        active: Boolean
    }
}
</script>