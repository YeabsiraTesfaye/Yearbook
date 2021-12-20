<template>
    <div class="row card">
        <div class="card-header">Add Members</div>
        <div class="card-body">
            <form @submit.prevent>
                <div class="d-flex">
                    <input type="email" style='flex:1' v-model= "email" class="form-control " placeholder="Enter users email address here"  required/>
                    <button type="submit" class="btn btn-primary" @click='addUser' style='width:105px'>Add Member</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>

import sweetAlert from 'sweetalert2'

    export default {
        data(){
            return{
                email:"",
            };
        },
        props:['yearbookId'],
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            addUser(){
                var re = /\S+@\S+\.\S+/;
                if(this.email.trim() != '' && re.test(this.email)){
                    axios.post('/addUser',{
                        yearbookId: this.yearbookId,
                        email: this.email
                    })
                .then(response=>{
                    if(response.data == 404){
                        sweetAlert.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: this.email+' does not exist in this website',
                        }) 
                    }else if(response.data == 1){
                        sweetAlert.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: this.email+' is already a member',
                        }) 
                    }else{
                        sweetAlert.fire({
                        icon: 'success',
                        title: 'Yesss...',
                        text: this.email+' has been added',
                        }) 
                    }
                });
                }
                
            }
        }
    }
</script>
