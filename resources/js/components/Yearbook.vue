<template>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3 ">
        <a class="card d-inline-block justify-content-center btn yearbooks" :href="'/y/'+yearbook.id+'/edit'" style='height:100%; width:100%; box-shadow:0px 0px 26px 0px lightblue'>
            <div >
                <img class="card-img-top mb-2" :src="'/storage/'+yearbook.image" alt="Card image" style="width:100%">
                <div class="card-body align-self-center border-top p-1 pt-2">
                <h4 class="card-title text-left bg-info text-white p-2">{{yearbook.title}}</h4>
                <p class="card-text overflow-auto text-left p-1" style="overflow:auto; height:100px;">{{yearbook.description}}</p>
                </div>
            </div>
        </a>
    </div>
</template>
<script>
export default {
    props:{
        yearbook:{
            type:Object
        }
    }
}
</script>