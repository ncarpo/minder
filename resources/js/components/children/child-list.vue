<template>
    <div v-if="children" class="children flex flex-wrap">
        <child-list-item v-for="child in children" :initChild="child" :key="child.id"></child-list-item>
    </div>
</template>

<script>
    import ChildListItem from './child-list-item';
    export default {
        components: {
            ChildListItem
        },
        data() {
            return {
                children: false
            }
        },
        mounted() {
            this.getChildren();
        },
        methods: {
            getChildren() {
                axios.get('/api/children')
                .then((response) => {
                    this.children = response.data
                })
                .catch((error) => {

                });
            }
        }
    }
</script>