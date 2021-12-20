<template>
    <div class="row card mx-4">
        <div class="col-12 d-flex align-items-baseline card-header">
            <h4>Last word:  {{lastWord}}</h4>&#8239;&#8239;
            <a :href="'/y/p/'+postId+'/last_word'" class='change'>Edit last word</a>    
        </div>
        <div class="card-body col-12">
            <div class="row justify-content-center">
                <div class="col-4 border py-3" id='img1'>
                    <button class ='delete' id="deleteMain" value="image1" @click='deleteImage'>X</button>
                    <img class="card-img image1 photoView" :src="'/storage/'+imageOne" @error='setImage' style='height:auto' alt="Card image cap"  data-toggle="modal" data-target="#modal1">
                    <div class="card-body footer">        
                        <div class="d-flex row align-items-baseline">
                            <h5 class="col-xl-7 col-xs-3 card-title">image 1</h5>
                            <h6 class='col-xl-5 col-xs-9 status'></h6>
                        </div>   
                    </div>
                    <a :href="'/y/p/'+postId+'/image1'" id='mainbtn' class="btn btn-primary font-weight-bold change w-100">Change Image 1</a>
                </div>
                <div class="col-4 border py-3" id='img2'>
                    <button class ='delete' id="deletePro" value='image2' @click='deleteImage'>X</button>
                    <img class="card-img image2 photoView" :src="'/storage/'+imageTwo" @error='setImage' alt="Card image cap"  data-toggle="modal" data-target="#modal1">
                    <div class="card-body footer">        
                        <div class="d-flex row align-items-baseline">
                            <h5 class="col-xl-7 col-xs-3 card-title">Image 2</h5>
                            <h6 class='col-xl-5 col-xs-9 status'></h6>
                        </div>   
                    </div>
                    <a :href="'/y/p/'+postId+'/image2'" id='profilebtn' class="btn btn-primary font-weight-bold change w-100">Change Image 2</a>
                </div>
                <div class="col-4 border py-3" id='img3'>
                    <button class ='delete' id="deleteChild" value='image3' @click='deleteImage'>X</button>
                    <img class="card-img image3 photoView" :src="'/storage/'+imageThree" @error='setImage' alt="Card image cap"  data-toggle="modal" data-target="#modal1">
                    <div class="card-body footer">        
                        <div class=" container d-flex align-items-baseline">
                            <div class="row text-left">
                                <h5 class="col-xl-7 col-xs-3 card-title">Image 3</h5>
                                <h6 class='col-xl-5 col-xs-9 status'></h6>
                            </div>
                        </div>   
                    </div>
                    <a :href="'/y/p/'+postId+'/image3'" id='childhoodbtn' class="btn btn-primary font-weight-bold change w-100">Change Image 3</a>
                </div>
            </div>
        </div>

    </div>
</template>
<style scoped>
.delete{
    position: absolute;
    right: 6%;
    background-color: rgb(231, 31, 31);
    border-radius: 50%;
    margin: 5px;
    border: none;
    font-weight: bolder;
    color:white
}
.delete:hover{
     box-shadow: 0px 0px 10px black;
}

</style>
<script>
import sweetAlert from 'sweetalert2'
export default {
    props:['isApproved' ,'postId', 'imageOne', 'imageTwo', 'imageThree', 'lastWord', 'isLocked','photoCount'],
    mounted(){
        if(this.photoCount == 1){
            $('#img2').remove()
            $('#img3').remove()
        }else if(this.photoCount == 2){
            $('#img3').remove()
           
        }
        if(this.isLocked == 1){
            $('.change').remove()
            $('.delete').remove()
        }
        if(this.isApproved==1){
            const statuses = document.getElementsByClassName('status');
            for(var i = 0; i < statuses.length; i++){
                statuses[i].innerHTML = "Approved";
                statuses[i].style.color = "#007F1C";
            }
        }
        if(this.isApproved==0){
            const statuses = document.getElementsByClassName('status');
            for(var i = 0; i < statuses.length; i++){
                    statuses[i].innerHTML = "Pending";
                    statuses[i].style.color = "#C6B10A";
            }
        }
        if(this.isApproved==-1){
            const statuses = document.getElementsByClassName('status');
            for(var i = 0; i < statuses.length; i++){
                    statuses[i].innerHTML = "Declined";
                    statuses[i].style.color = "#A31D00";
            }
        }
    },
    methods:{
        deleteImage(e){
            sweetAlert.fire({
                title: "Are you sure?",
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: 'Yes',
                denyButtonText: 'Cancel',
            }).then((result)=>{
                if(result.isConfirmed) {
                    axios.delete('/y/p/delete',{
                    data: {
                        postId: this.postId,
                        target: e.target.value
                    }
                })
                .then(response=>{
                    if(response.data == 500){
                        sweetAlert.fire('Sorry the yearbook is locked','','danger').then(
                            location.reload()
                        )
                        
                    }else{
                        sweetAlert.fire('photo deleted','','success').then(
                            location.reload()
                        )
                        
                    }
                })
                    
                }
            })
            
        },
        deleteAll(){

        },
        setImage(e){
            $(e.currentTarget).siblings('.delete').remove();
            $(e.currentTarget).attr('id','')
            $(e.currentTarget).css({'padding-top':'25%','padding-bottom':'25%'})
            e.target.src = '/storage/uploads/noImage.png'
        }
    }
}
</script>