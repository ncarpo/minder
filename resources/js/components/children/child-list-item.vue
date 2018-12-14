<template>
    <div class="child-list-item flex w-25">
        <div class="card p-2 m-1 w-100">
            <header><a href="#">{{ child.first_name }} {{ child.last_name }}</a></header>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                child: null
            }
        },
        props: ['initChild'],
        mounted() {
            this.child = this.initChild
        }
    }
</script>