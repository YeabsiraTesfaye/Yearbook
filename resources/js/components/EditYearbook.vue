<template>
    <div class="card">
                <div class="card-header">
                    Actions
                </div>
                <div class="card-body">
                    <a :href="'/progress/'+yearbookId" class="btn btn-secondary my-2 w-100">Check Progress</a>
                    <button @click="deleteYearbook" class="btn btn-danger my-2 w-100">Remove Yearbook</button>
                </div>
            </div>
</template>
<script>
import sweetAlert from 'sweetalert2'
export default {
    props:['yearbookId'],
    methods:{
        deleteYearbook(){
            sweetAlert.fire({
                title: "Are you sure?",
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: 'Yes',
                denyButtonText: 'Cancel',
            }).then((result)=>{
                if(result.isConfirmed) {
                    axios.delete('/y/delete',{
                    data: {
                        yearbookId: this.yearbookId,
                    }
                })
                .then(response=>{
                        sweetAlert.fire('Yearbook deleted','','success').then(
                            window.location.assign('/home')
                        )
                        
                    
                })
                    
                }
            })
        }
    }
}
</script>