<template>
    <div class="row card m-0">
        <div class="col-12 d-flex card-header p-0 pb-2 mb-2" style='flex-direction:column'>
            <Strong class='mt-2 ml-1'>Name: {{userName}}</Strong>
            <Strong class='mt-2 ml-1'>Last word: {{lastWord}}</Strong>
        </div>
        <div class="card-body col-12 border-bottom border-5 p-0 pb-4 justify-content-center">
            <div class="row  justify-content-center">
                <div class="col-4" id='img1'>
                    <div class="card" style="width: 100%;">
                        <img class="card-img image2 photoView justify-self-center" @error='setImage' :src="imageOne" alt="Card image cap" data-toggle="modal" data-target="#modal1">
                        <div class="card-body">

                        <h5 class="card-title">Main Photo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4" id='img2'>
                    <div class="card" style="width: 100%;">
                        <img class="card-img image2 photoView justify-self-center" @error='setImage' :src="imageTwo" alt="Card image cap" data-toggle="modal" data-target="#modal1">
                        <div class="card-body">

                        <h5 class="card-title">Profile Photo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4" id='img3'>
                    <div class="card" style="width: 100%;">
                        <img class="card-img image3 photoView justify-self-center" :src="imageThree" @error="setImage" alt='Childhood image not available'>
                        <div class="card-body">

                        <h5 class="card-title">childhoodImage Photo</h5>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
        <div class="d-flex">
                <button class="btn btn-success" value="accept" @click='approveDecline'>Accept</button>
                <button class="btn btn-danger" value="decline" @click='approveDecline'>Decline</button>
        </div>
    </div>
</template>
<style scoped>
    .btn{
        flex:1;
    }
</style>
<script>
import sweetAlert from 'sweetalert2'

export default ({
    props:['yearbookId','postId','imageOne','imageTwo','imageThree', 'userName', 'lastWord', 'photoCount'],
    mounted(){
        if(this.photoCount == 1){
                $('#img2').remove()
                $('#img3').remove()
            }else if(this.photoCount == 2){
                $('#img3').remove()
            }
    },
    methods:{
        approveDecline(e){
            if(e.target.value == 'accept'){
                axios.patch('p/'+this.postId+'/bouncer',{
                    action: 'accept',
                    postId: this.postId
                }).then(
                    sweetAlert.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Post Accepted',
                        showConfirmButton: false,
                        timer: 1500,
                        backdrop: false,
                        width: 300,
                        heightAuto:200
                    }),
                    e.target.parentElement.parentElement.remove(),
                    window.scrollTo(0,1000)
                )
            }else if(e.target.value == 'decline'){
                axios.patch('p/'+this.postId+'/bouncer',{
                    action: 'decline',
                    postId: this.postId
                }).then(
                    sweetAlert.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Post Declined',
                        showConfirmButton: false,
                        timer: 1500,
                        backdrop: false,
                        width: 300,
                        heightAuto:200
                    }),
                    e.target.parentElement.parentElement.remove(),
                    window.scrollTo(0,1000)
                )
            }
        },
        setImage(e){
            e.target.src = '/storage/uploads/noImage.png'
            e.target.style.paddingTop = '25%'
            e.target.style.paddingBottom = '25%'
            e.target.className = ''
            
        }
    }
})
</script>
