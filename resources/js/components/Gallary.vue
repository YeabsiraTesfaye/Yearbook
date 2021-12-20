<template>
    <div>
        <div class="row">
            <a :href="'/photos/'+event.id" class="col p-2" v-for="event in events" :key='event.id'>

                <div class="wrapper h-100 w-100">
                <img :src="'/storage/'+event.image" alt="Avatar" class="image img-fluid">
                <div class="overlay">
                    <div class="text text-left font-weight-light d-flex flex-column">
                        <div class='float-left'>{{event.title}}</div>
                        <div class='float-left' style='font-size:12px'>{{event.description}}</div>
                    </div>
                   
                </div>
                </div>
            </a>

        </div>
    </div>
</template>
<script>
export default {
    props:{
        events:{
            type: Array
        }
    },
    mounted(){


    }
}
</script>
<style scoped>
body{
    background-color: black;
}
.col:nth-child(even){
    max-width: 50%;
    min-width: 50%;
}
.col:nth-child(odd){
    max-width: 25%;
    min-width: 25%;
}
    .wrapper {
  position: relative;
  width: 100%;
  box-shadow: 0px 0px 10px black;
}
.col{
    max-height: 250px;
    border-radius:2px;
}

.image {
   width:100%;
    height:100%;
    object-fit: cover;
    border-radius:2px;
    overflow: hidden;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #000000;
  opacity: 0.9;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}

.wrapper:hover .overlay {
  height: 100%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}


@media screen and (max-width: 1000px) {
  .col:nth-child(even){
        max-width: 50%;
        min-width: 50%;
    }
    .col:nth-child(odd){
        max-width: 50%;
        min-width: 50%;
    }
}@media screen and (max-width: 600px) {
  .col:nth-child(even){
        max-width: 100%;
        min-width: 100%;
    }
    .col:nth-child(odd){
        max-width: 100%;
        min-width: 100%;
    }
}
</style>