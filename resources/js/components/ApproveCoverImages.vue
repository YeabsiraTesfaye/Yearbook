<template>
    <div>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4>{{images[0].department}}</h4>
                </div>
                <div class="card-body row">
                    <div v-for="image in images" :key='image.id' class="col-4">
                        <div class="card h-100">
                            <div class="card-image h-100">
                                <img class="w-100" :src="'/storage/'+image.image" alt="">
                            </div>
                            <div class="card-body">
                                <button class="btn btn-success">
                                    Approve
                                </button>
                                <button class="btn btn-danger">
                                    Decline
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="card d-flex flex-row">
                    <button class="btn btn-success" style='flex:1'>Approve all</button>
                    <button class="btn btn-danger" style='flex:1'>Decline all</button>
                </div>
        </div>
    </div>
</template>
<script>

export default ({
    props:{
        images:{
            type:Array
        }
    }
})
</script>
