<template>
<div>
    <div class=" card">
        <div class="card-header py-3">Add Members</div>
        <div class="card-body">
            <form @submit.prevent>
                <div class="d-flex">
                    <input type="email" style='flex:1; font-size:14px' v-model= "email1" class="form-control " placeholder="Enter users email address here"  required/>
                    <button type="submit" class="btn btn-secondary p-0" @click='addUser' style='width:30%'>Add Member</button>
                </div>
            </form>
            <h4 class='px-4 pt-2' style='font-size:100%'>Or Import from Excel</h4>
            <form @submit.prevent>
                <div class="form-group">
                    <div class="d-flex">
                        <input class='form-control' style=' font-size:14px' type="file" id="file" ref="file" v-on:change="handleFileUpload()" required/>
                        <button class='btn btn-secondary p-0' style='width:45%; font-size:14px' v-on:click="submitFile()">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class=" card">
        <div class="card-header py-3">Add Admins</div>
        <div class="card-body">
            <form @submit.prevent>
                <div class="d-flex">
                    <input type="email" style='flex:1; font-size:14px' v-model= "email2" id='email2' class="form-control " placeholder="Enter users email address here"  required/>
                    <button type="submit" class="btn btn-secondary p-0" @click='addAdmin' style='width:30%'>Add Admin</button>
                </div>
            </form>
        </div>
    </div>
        <div class=" card">
        <div class="card-header py-3">Create Event</div>
        <div class="card-body">
            <form @submit.prevent>
                
                    <div class="p-0">
                        <div class="form-group">
                            <strong>Title:</strong>
                            <input type="text" name="title" v-model="title" class="form-control" placeholder="Title">
                        
                        </div>
                    </div>
                    <div class="p-0">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <textarea class="form-control" v-model="description" style="height:150px" name="description" placeholder="Description"></textarea>
                            
                        </div>
                    </div> 
                    <div>
                        <strong>Image:</strong>
                        <div class="d-flex mb-4">
                            <input class='form-control' style=' font-size:14px' type="file" id="file" ref="file" v-on:change="handleImageUpload()"/>
                        </div>  
                    </div>
                    <button type="submit" class="btn btn-secondary p-0 w-100" style='height:40px' @click='createEvent' >Create</button>
                
            </form>
        </div>
    </div>
</div>
</template>
<style scoped>
    .c25{
        width:33%;
        text-align-last: center;
    }
    .centered{
        width:33%;
        text-align-last: center;
    }
</style>
<script>
import sweetAlert from 'sweetalert2'
    export default {
        data(){
            return{
                file:'',
                 email1:"",
                 email2:"",
                 title:"",
                 description:"",
            }
        },
        props:['yearbookId','userId'],
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            handleFileUpload() {
                this.file = this.$refs.file.files[0]
                if (!this.file) {
                    return
                }
                const getExtension = this.file.name.split('.')
                const extension = getExtension[getExtension.length - 1]
                if (extension.trim() == 'xlsx' || extension.trim() == 'xls') {
                }else{
                    sweetAlert.fire({
                        icon: 'error',
                        title: 'Invalid FIle',
                        text: 'The file you selected is invalid.',
                    })
                    this.$refs.file.value = null;
                }
            },
            handleImageUpload() {
                this.file = this.$refs.file.files[0]
                if (!this.file) {
                    return
                }
                const getExtension = this.file.name.split('.')
                const extension = getExtension[getExtension.length - 1]
                console.log(extension)
                if (extension.trim() == 'jpg' || extension.trim() == 'JPG' || extension.trim() == 'png'||extension.trim() == 'PNG'|| extension.trim() == 'gif') {
                }else{
                    sweetAlert.fire({
                        icon: 'error',
                        title: 'Invalid FIle',
                        text: 'The file you selected is invalid.',
                    })
                    this.$refs.file.value = null;
                }
            },
            submitFile(){
                if(this.file){
                    let formData = new FormData();
                    formData.append('file', this.file);
                    formData.append('yearbookId',this.yearbookId)
                    axios.post('/import',
                    formData,
                    {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    }
                    ).then(response=>{
                        if(response.data === 200){
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Excel Imported Successfully',
                                showConfirmButton: true,
                                timer: 1500
                            })
                        }
                        else{
                            sweetAlert.fire({
                                title: 'User/s either dont exist or are already a member',
                                html:"<ul id='users'></ul>",
                                showConfirmButton: true,
                                didOpen:()=>{
                                    const users = response.data
                                    var ul = document.getElementById("users");
                                    for (let i = 0; i < users.length; i++) {
                                        var li = document.createElement("li");
                                        li.style.textAlign = 'left'
                                        li.appendChild(document.createTextNode(users[i]));
                                        ul.appendChild(li);
                                    }
                                }
                            })
                        }
                    })
                    .catch(function(){
                    console.log('FAILURE!!');
                    });
                }
            },
            addUser(){
                var re = /\S+@\S+\.\S+/;
                if(this.email1.trim() != '' && re.test(this.email1)){
                    axios.post('/addUser',{
                        yearbookId: this.yearbookId,
                        email1: this.email1
                    }).then(response=>{
                        if(response.data == 404){
                            sweetAlert.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: this.email1+' does not exist in this website',
                            }) 
                        }else if(response.data == 1){
                            sweetAlert.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: this.email1+' is already a member',
                            }) 
                        }else{
                            sweetAlert.fire({
                            icon: 'success',
                            title: 'Yesss...',
                            text: this.email1+' has been added',
                            }) 
                        }
                    });
                }
            },
            addAdmin(){
                var re = /\S+@\S+\.\S+/;
                if(this.email2.trim() != '' && re.test(this.email2)){
                    axios.post('/addAdmin',{
                        yearbookId: this.yearbookId,
                        email2: this.email2
                    }).then(response=>{
                        if(response.data == 404){
                            sweetAlert.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: this.email2+' does not exist in this website',
                            }) 
                        }else if(response.data == 0){
                            sweetAlert.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: this.email2+' is already an admin',
                            })
                        }else if(response.data == 200){
                            sweetAlert.fire({
                            icon: 'success',
                            title: 'Yesss...',
                            text: this.email2+' has been added',
                            }) 
                        }else{
                            sweetAlert.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: response.data,
                            }) 
                        }
                    });
                }
            },
            createEvent(){
                if(this.title.trim()){
                    let formData = new FormData();
                    formData.append('image', this.file);
                    formData.append('yearbookId',this.yearbookId)
                    formData.append('title',this.title)
                    formData.append('description',this.description)
                    formData.append('image',this.file)
                    formData.append('userId',this.userId)

                    axios.post('/createEvent',
                        formData,
                        {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    }).then(response=>{
                        if(response.data == 200){
                            sweetAlert.fire({
                            icon: 'success',
                            title: 'Yessss...',
                            text: 'Event created successfully',
                            }) 
                        }else{
                            sweetAlert.fire({
                            icon: 'error',
                            title: 'Opss...',
                            text: 'Something went wrong',
                            }) 
                        }
                    });
                }
            }
        }
    }
</script>
