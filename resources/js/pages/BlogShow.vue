<template>
    <div class="mx-auto max-w-3xl p-6">
        <article class="rounded-xl border border-border bg-card p-6 shadow-sm">
            <h1 class="mb-4 text-3xl font-semibold tracking-tight" :key="blog.id">{{ blog.title }} - <Link class="text-underline text-2xl" :href="`/users/${blog.user?.id}`">{{ blog.user?.name }}</Link></h1>
            <p class="mb-6 whitespace-pre-wrap leading-relaxed text-muted-foreground" :key="blog.id">{{ blog.description }}</p>
            <a
                :href="`/blogs/${blog.id}/edit`"
                class="inline-flex rounded-lg bg-primary px-4 py-2 text-sm font-medium text-primary-foreground hover:opacity-90"
            >
                Edit
            </a>
            <button @click="DeleteBtn">Delete</button>
        </article>
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';

    export default{
        components : {Link},
        props: {
            blog : {
                type : Object
            }
        },
        methods : {
            DeleteBtn(){
                this.$inertia.post('/blogs/'+this.blog.id+'/delete')
            }
        }
    };
</script>