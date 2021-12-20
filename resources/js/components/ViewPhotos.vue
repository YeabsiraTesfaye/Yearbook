<template>
    <div>
        <div class="row">
          
                <div  v-for="photo in photos" :key='photo.id' class="col-xl-3 col-md-6 col-xs-12">
                    <img :src="'/storage/'+photo.image" alt="Avatar" class="image img-fluid photoView" data-toggle="modal" data-target="#modal1">
                
                </div>


        </div>
    </div>
</template>
<script>
export default {
    props:{
        photos:{
            type: Array
        }
    },
    mounted(){
        const modal = $('#modal1')
        if(modal.css('display')=='block'){
            console.log(modal.children())
        }

    }
}
</script>
<style scoped>

.image {
   width:100%;
    height:100%;
    object-fit: cover;
    border-radius:2px;
    overflow: hidden;
}

</style>