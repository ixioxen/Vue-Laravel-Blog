<template>
    <div class="mx-auto max-w-xl p-6">
        <div class="rounded-xl border border-border bg-card p-6 shadow-sm">
            <h1 class="mb-6 text-2xl font-semibold tracking-tight">Blog Form</h1>
            <form class="flex flex-col gap-4" @submit.prevent="UpdateBlog">
                <div>
                    <input
                        type="text"
                        placeholder="title"
                        v-model="title"
                        class="w-full rounded-lg border border-input bg-background px-3 py-2 text-sm outline-none focus:ring-2 focus:ring-ring"
                    >
                </div>
                <div class="text-sm text-red-500">
                    {{ $page.props.errors?.title }}
                </div>
                <div>
                    <textarea
                        name="description"
                        id=""
                        v-model="description"
                        rows="6"
                        class="w-full rounded-lg border border-input bg-background px-3 py-2 text-sm outline-none focus:ring-2 focus:ring-ring"
                    ></textarea>
                </div>
                <div class="text-sm text-red-500">
                    {{ $page.props.errors?.description }}
                </div>
                <div>
                    <button
                        type="submit"
                        class="rounded-lg bg-primary px-4 py-2 text-sm font-medium text-primary-foreground hover:opacity-90"
                    >
                        Update Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default{
        props : {
            blog : {
                type : Object
            }
        },
        data(){
            return {
                title : this.blog.title,
                description : this.blog.description,
            }
        },
        methods:{
            UpdateBlog(){
                let data = {
                    title: this.title,
                    description: this.description
                };

                this.$inertia.post('/blogs/'+this.blog.id+'/update',data);
            }
        }
    };
</script>
