<template>
    <div style='flex:1'>
        <form action="" class='d-flex'>
            <!-- Material switch -->
            <!-- Material disabled -->
           
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" v-model="checked" @change="onChange" id="checkbox">
                <label class="custom-control-label" for="checkbox"><strong>lock/unlock</strong></label>
            </div>
        </form>
    </div>
</template>
<style scoped>
</style>
<script>
export default{
    props:['yearbookId'],
    data(){
        return{
            checked: this.defauleChecked
        }
    }, 
    mounted() {
        axios.get('/check/'+this.yearbookId)
        .then(response=>{
            if(response.data == 1){
                this.checked = true;
            }else{
                this.checked = false;
            }
        })
    },
    methods:{
        onChange(){
            if(this.checked==true){
                axios.post('/lock/'+this.yearbookId+'/'+1).then(response=>{
                    console.log(response.data);
                });
            }else{
                axios.post('/lock/'+this.yearbookId+'/'+0).then(response=>{
                    console.log(response.data);
                });
            }
        }
    }
}

</script>