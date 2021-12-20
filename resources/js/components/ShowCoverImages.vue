<template>
<div>
    <div class="row">
        <div class="col-xl-4 col-md-6 col-xs-12 card " v-for="coverImage in coverImages" :key='coverImage.id'>
            <div card='card-header'>
                <button class="btn-close float-right" :value = coverImage.image @click='remove'></button>
            </div>
            
            <img class='card-body w-100 photoView' style='height:fit-content'  :src="'/storage/'+coverImage.image" alt="" data-toggle="modal" data-target="#modal1">
        </div>
    </div>
</div>
    
</template>
<style scoped>
    
</style>
<script>
import sweetAlert from 'sweetalert2'
export default {
   props:{
        coverImages:{
            type:Array,
        },
        yearbookId:{
            type:String,
        },
        locked:{
            type:String,
        }
    },
    mounted(){
        if(this.locked){
            if(this.locked == 1){
                $('.btn-close').remove()
            }
        }
    },
    methods:{
        remove(e){
            sweetAlert.fire({
                title: "Are you sure?",
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: 'Yes',
                denyButtonText: 'Cancel',
            }).then((result)=>{
                if(result.isConfirmed) {
                    axios.delete('/y/group/delete',{
                    data: {
                        target: e.target.value,
                        yearbookId: this.yearbookId
                    }
                })
                .then(response=>{
                    if(response.data == 500){
                        sweetAlert.fire('Sorry the yearbook is locked','','danger').then(
                            location.reload()
                        )
                    }else if(response.data == 404){
                        sweetAlert.fire({
                            icon: 'danger',
                            text: 'Photo does not exists',
                            }).then(
                                location.reload()
                            ) 
                    }else if(response.data == 200){
                        sweetAlert.fire('photo deleted','','success').then(
                            location.reload()
                        )
                        
                    }
                })
                    
                }
            })
            
        }
    }
}
</script>