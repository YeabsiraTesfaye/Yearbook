<template>
    <div id='holder' class="card mx-4">
        <form id='form' @submit.prevent>
            <h3 class='pl-4 card-header'>Add Post</h3>
            <div class="row px-4 pb-4 card-body">      
                <div class="col-xs-12 col-sm-12 col-md-12" id='img1'>
                    <div class="form-group">
                        <strong>image1:</strong>
                        <input type="file" name="image1" ref="image1" class="form-control" v-on:change="handleFileUpload()">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12" id='img2'>
                    <div class="form-group">
                        <strong>image2:</strong>
                        <input type="file" ref='image2' name="image2" class="form-control" v-on:change="handleFileUpload()">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12" id='img3'>
                    <div class="form-group">
                        <strong>image3:</strong>
                        <input type="file" ref="image3" name="image3" class="form-control" v-on:change="handleFileUpload()">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Last word:</strong>
                        <textarea class="form-control" style="height:150px" id='lastword' v-model="lastword" name="lastword" placeholder="Last Word"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Department</strong>
                        <select class="form-control" v-model="department" id=department name="department" required>
                            <option value="Architecture">Architecture</option>
                            <option value="Biomedical Engineering">Biomedical Engineering</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="COTM">COTM</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="Electrical Engineering">Electrical Engineering</option>
                            <option value="Electromechanical Engineering">Electromechanical Engineering</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Management">Management</option>
                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                            <option value="Software Engineering">Software Engineering</option>
                        </select>
                    </div>
                </div>  
                <button @click="submitPost" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</template>
<style scoped>

</style>
<script>
import sweetAlert from 'sweetalert2'
    export default {
        data(){
            return{
                image1:'',
                image3:'',
                image2:'',
                lastword:'',
                department:'',
            }
        },
        props:['yearbookId','isLocked','photoCount'],
        mounted() {
            if(this.photoCount == 1){
                $('#img2').remove()
                $('#img3').remove()
            }else if(this.photoCount == 2){
                $('#img3').remove()
            }
            if(this.isLocked == 1){
                document.getElementById('form').remove()
                const holder = document.getElementById('holder');
                const img = document.createElement('img')
                const div = document.createElement('div');
                const h2 = document.createElement('h1')

                $(holder).css({'width':'100%','text-align':'center'})
                $(img).css({'height':'auto','width':'300px','padding':'30px','opacity':'25%'})
                $(img).attr('src','/storage/pictures/lock.png')
                $(h2).css({'position':'absolute','margin-top':'15%','font-size':'50px','font-weight':'400','color':'brown'})
                $(h2).attr('class','text-center align-text-center')
                $(div).css({'background-color':'#bd8585','width':'100%','height':'470px','border-radius':'10%','border-top-right-radius':'0'})
                
                h2.append('Yearbook is either Locked or hasnt been unlocked yet')
                div.appendChild(h2)
                div.appendChild(img)
                holder.appendChild(div)
            }
            if(this.photosCount == 1){
                $('#img2').remove()
                $('#img3').remove()
            }else if(this.photosCount == 2){
                $('#img3').remove()
            }
        },
        methods:{
            handleFileUpload(){
                this.image1 = this.$refs.image1.files[0]
                this.image2 = this.$refs.image2.files[0]
                this.image3 = this.$refs.image3.files[0]
            },
            submitPost(){
                if(this.department){
                    let formData = new FormData();
                    if(this.image1)
                        formData.append('image1', this.image1);
                    if(this.image2)
                        formData.append('image2', this.image2);
                    if(this.image3)
                        formData.append('image3', this.image3);
                    formData.append('last_word', this.lastword);
                    formData.append('department', this.department);
                    formData.append('yearbookId', this.yearbookId);
                    axios.post('/p/addPost',
                    formData,
                    {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    }).then(response=>{
                        sweetAlert.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Post Added Successfully',
                            showConfirmButton: false,
                            timer: 1500,
                            backdrop: false,
                            width: 300,
                            heightAuto:200
                        }).then(
                            window.location.reload()
                        )
                    }
                        
                        // 
                    )
                    .catch(function(){
                        console.log('FAILURE!!');
                    });
                }
                
            },
        }
    }
</script>
