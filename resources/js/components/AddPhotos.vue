<template>
<div>
    <UploadImages @changed="handleImages"/>
    <button class='btn btn-secondary w-100 mb-4' @click="submit">Submit</button>
</div>
    
</template>
<style scoped>
    
</style>
<script>
import sweetAlert from 'sweetalert2'
import UploadImages from 'vue-upload-drop-images'
export default {
    data(){
        return{
            photos:'',
        }
    },
   components:{
       UploadImages,
   },
   props:{
        eventId:{
            type:String
        },
    },
   methods:{
       handleImages(files){
           this.photos = files
       },
       submit(){
                let formData = new FormData();
                let counter = this.photos.length;
                if(counter > 0){
                    this.photos.forEach(photo => {
                        formData.append('photos[]', photo);
                        counter++
                    });
                }
                formData.append('eventId', this.eventId);

                
                axios.post('/y/addPhotos/store',
                formData,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }).then(response=>{
                        if(response.data == 200){
                            sweetAlert.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Photos Added Successfully',
                                showConfirmButton: false,
                                timer: 1500,
                                backdrop: false,
                                width: 300,
                                heightAuto:200
                            }).then(
                                window.location.reload()
                            )
                        }else if(response.data == 'full'){
                            sweetAlert.fire('Maximum number of posts reached').then(
                                // window.location.reload()
                            )
                        }else if(response.data == 500){
                            sweetAlert.fire('Yearbook is locked').then(
                                window.location.reload()
                            )
                        }else{
                            sweetAlert.fire('Only '+response.data+' photo can be added').then()

                        }
                    }
                )
                .catch(function(e){
                    console.log(e);
                });
            
       }
   }
}
</script>