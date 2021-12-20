<template>
    <div class="row border m-0 py-2 px-1 my-1 bg-white">
        <div class="col-3 p-0">
            <img :src="'/storage/'+userPhoto" alt="Mike Anamendolla" @error="setImage" class="rounded-circle mx-auto d-block img-fluid" style='width:60px'>
        </div>
        <div class="col-9 d-flex" style='flex-direction:column'>
            <label>{{userName}}</label>
            <label>{{userDepartment}}</label>
        </div>
    </div> 
</template>
<script>
export default {
    
}
</script>
<script>
export default {
    props:['userName','userDepartment','userPhoto'],
    methods:{
        setImage(e){
            e.target.src = '/storage/uploads/default.jpg'
        }
    }
}
</script>