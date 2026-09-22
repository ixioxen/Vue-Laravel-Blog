<template>
    <h1>Blog Form</h1>
    <form @submit.prevent="UpdateBlog">
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
        <button type="submit">Update Data</button>
      </div>
    </form>
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
                description : this.blog.description
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
