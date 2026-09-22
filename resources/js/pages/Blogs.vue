<template>
    <div class="mx-auto max-w-3xl p-6">
        <h1 class="mb-6 text-2xl font-semibold tracking-tight">Blogs</h1>
        <div class="flex flex-col gap-3">
            <Link
                v-for="blog in blogs"
                :key="blog.id"
                :href="`/blogs/${ blog.id }`"
                class="block rounded-xl border border-border bg-card p-4 shadow-sm transition hover:bg-accent"
            >
                <h2 class="text-lg font-medium text-foreground">{{ blog.title }}</h2>
            </Link>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';
    export default{
        components : {Link},
        props: {
            blogs : {
                type : Array
            }
        }
    };
</script>