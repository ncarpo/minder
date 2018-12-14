<template>
    <div>
        <child-list></child-list>
    </div>
</template>

<script>
    import ChildList from './children/child-list';
    export default {
        components: {
            ChildList
        }
    }
</script>