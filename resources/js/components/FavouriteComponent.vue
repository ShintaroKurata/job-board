<template>
    <div>
            <button v-if="show"  class="btn btn-primary" style="width:100%">保存する</button>
            <button v-else  class="btn btn-dark" style="width:100%">保存を取り消す</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return{
                'show':true
            }
        }
    }
</script>
