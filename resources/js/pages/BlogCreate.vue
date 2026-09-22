<template>
    <h1>Blog Form</h1>
    <form @submit.prevent="createBlog">
      <div>
        <input type="text" placeholder="title" v-model="title">
      </div>
      <div class="text-red-500">
        {{ $page.props.errors?.title }}
      </div>
      <div>
        <textarea name="description" id="" v-model="description">

        </textarea>
      </div>
      <div class="text-red-500">
        {{ $page.props.errors?.description }}
      </div>
      <div>
        <button type="submit">Create</button>
      </div>
    </form>
</template>

<script>
    export default{
        data(){
            return {
                title : '',
                description :''
            }
        },
        methods:{
            createBlog(){
                let data = {
                    title: this.title,
                    description: this.description
                };

                this.$inertia.post('/blogs/store',data);
            }
        }
    };
</script>