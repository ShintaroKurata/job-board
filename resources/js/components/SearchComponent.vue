<template>
    <div>
        <input type="text" v-model="keyword" placeholder="Search items..." v-on:keyup="searchItems" class="form-control">
        <div class="card-footer" v-if="results && results.length">
        <ul class="list-group">
            <li class="list-group-item" v-for="result in results" >
                <a :href=" '/items/'+ result.id +'/'+ result.slug +'/' ">
                {{result.title}}
                </a>
            </li>
        </ul>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        data() {
           return{
            keyword:'',
            results:[],
           }
        },
        methods:{
            searchItems(){
                this.results= [];
                if(this.keyword.length > 1){
                    axios.get('/items/search',{params:{keyword:this.keyword}}).then(response=>{this.results =response.data;});
                }

            }
        }
    }
</script>
