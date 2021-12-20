<template>
    <div>
        <div class="container" v-for="department in departments" :key='department.id'>
            <div class="row bg-info text-white pl-2 pt-2 departmentTitle">
                <h1>Department of {{department}}</h1>
            </div>
            <div v-for="coverImage in coverImages" :key='coverImage.id' class='my-2' style='page-break-after: auto; page-break-before: auto;'>
                <img v-if="department == coverImage.department" class='w-100 photoView' :src="'/storage/'+coverImage.image" alt="" data-toggle="modal" data-target="#modal1">
            </div> 
            <div class=""  style='page-break-after: always;'>
                <div v-for="post in posts" :key='post.id' class="col-xs-12 col-md-6 col-xl-4 ">
                    <div v-if="post.image1 && post.image2 && department == post.department">
                        <div class='main_div'>
                            <img class='image1 photoView' :src="'/storage/'+post.image1" style='height:auto' alt="" data-toggle="modal" data-target="#modal1">

                            <h5 class="card-title m-2">{{post.name}}</h5>
                            <p class="card-text m-2">{{post.last_word}}</p>
                        </div>
                        <img class='image2 photoView' :src="'/storage/'+post.image2" alt="" data-toggle="modal" data-target="#modal1">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props:{
        posts:{
            type: Array
        },
        departments:{
            type: Array
        },
        coverImages:{
            type: Array
        }
    },
    mounted(){
        
    }
}
</script>
<style scoped>

.main_div{
    width: 100%;
  }
  .image2{
    width:35%;
    height: auto;
    align-self:flex-end;
    border-radius: 10%;
    border-top-left-radius: 0;
    bottom:13px
  }
  .image1{
    width:100%;
    height: fit-content;
    border-radius: 10%;
    border-bottom-right-radius: 0;
  }

</style>