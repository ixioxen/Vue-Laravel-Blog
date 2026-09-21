<template>
    <h1 :key="blog.id">{{ blog.title }}</h1>
    <p :key="blog.id">{{ blog.description }}</p>
</template>

<script>
    export default{
        props: {
            blog : {
                type : Object
            }
        }
    };
</script>