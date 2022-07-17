<template>
    <div>
        <form @submit="formSubmit">
            <button v-if="show" type="submit" class="btn btn-success" style="width:100%">申し込む</button>
        <div v-else class="alert alert-success">
            申請は正常に送られました。
        </div>
        </form>
    </div>
</template>

<script>
    export default {
        props:["itemid"],
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return{
                'show':true
            }
        },
        methods:{
            formSubmit(e){
                e.preventDefault();
                axios.post('/applications/'+ this.itemid,{

                }).then((response)=>{
                    this.show=false
                });
            }
        }
    }
</script>
