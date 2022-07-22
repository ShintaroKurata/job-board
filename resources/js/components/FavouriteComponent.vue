<template>
            <button v-if="show"  @click.prevent="unsave()" class="save-job ht-btn text-center"><i class="far fa-heart"></i>Remove</button>
            <button v-else @click.prevent="save()" class="save-job ht-btn text-center"><i class="far fa-heart"></i>favorite</button>
</template>

<script>
    export default {
        props:['itemid','favourited'],
        data(){
            return{
                show:true
            }

        },
        mounted(){
            this.show = this.itemFavourited ? true:false;
        },
        computed:{
            itemFavourited(){
                return this.favourited
            }
        },
        methods:{
            save(){
                axios.post('/save/'+this.itemid).then(response=>this.show = true).catch(error=>alert('エラー'))
            },
            unsave(){
                axios.post('/unsave/'+this.itemid).then(response=>this.show = false).catch(error=>alert('エラー'))
            }
        }
    }
</script>
