<template>
    <div>
            <button v-if="show"  @click.prevent="unsave()" class="btn btn-dark" style="width:100%">お気に入りから削除</button>
            <button v-else @click.prevent="save()" class="btn btn-primary" style="width:100%">お気に入りに追加</button>
    </div>
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
