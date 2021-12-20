<template>
    <div id="potrait" class="card align-self-center" style='width:100%; height:100%;'>
        <div v-if='userPost.image2'>
            <div v-if="userPost.image1" @click="setSelected" class="images " id="image-1p">
                <img :src="'/storage/'+userPost.image1" alt="" class="w-100" @error="remove">
            </div>
            <div v-if="userPost.image2" @click="setSelected" class="images " id="image-2p">
                <img :src="'/storage/'+userPost.image2" alt="" class="w-100" @error="remove">
            </div>
            <strong @click="setSelected" id='name' v-if='userPost.name' class='p-0 texts'>{{userPost.name}}</strong>
            <strong @click="setSelected" id='name' v-else class='p-0 texts'>Student name</strong>

            <strong @click="setSelected" id=lastword v-if='userPost.last_word' class='p-0 texts'>{{userPost.last_word}}</strong>
            <strong @click="setSelected" id=lastword v-else class='p-0 texts'>Last word</strong>
        </div>
        <div v-else>
            <div v-if="userPost.image1" @click="setSelected" style='width:65%' id="image-1p">
                <img :src="'/storage/'+userPost.image1" alt="" class="w-100" @error="remove">
            </div>
            <strong @click="setSelected" id='name' v-if='userPost.name' class='p-0 texts' style="left:66%; top:1%; height:13%; width:33%">{{userPost.name}}</strong>
            <strong @click="setSelected" id='name' v-else class='p-0 texts' style="left:66%; top:1%; height:13%; width:33%">Student name</strong>

            <strong @click="setSelected" id=lastword v-if='userPost.last_word' class='p-0 texts' style="left:66%; top:15%; height:20%; width:33%">{{userPost.last_word}}</strong>
            <strong @click="setSelected" id=lastword v-else class='p-0 texts' style="left:66%; top:15%; height:20%; width:33%">Last word</strong>
        </div>
        
        
    </div>
                
</template>
<script>
    export default {
        mounted(){
            if(!this.userPost){
                $('.images').draggable({
                    containment:'parent',
                    stop: function(){
                        let l = (100 * parseFloat($(this).position().left/parseFloat($(this).parent().width())))+'%'
                        let t = (100 * parseFloat($(this).position().top/parseFloat($(this).parent().height())))+'%'
                        $(this).css('left',l)
                        $(this).css('top',t)
                    }
                }).resizable({
                    aspectRatio:true,
                    resize: function(e, ui){
                    var parent = ui.element.parent();
                    ui.element.css('height', ui.element.height()/parent.height()*100+'%');
                    ui.element.css('width', ui.element.width()/parent.width()*100+'%');
                }})

                $('.texts').draggable({
                    containment:'parent',
                    stop: function(){
                        let l = (100 * parseFloat($(this).position().left/parseFloat($(this).parent().width())))+'%'
                        let t = (100 * parseFloat($(this).position().top/parseFloat($(this).parent().height())))+'%'
                        $(this).css('left',l)
                        $(this).css('top',t)
                    }
                }).resizable()

                $('#potrait').css({'background-color':'#ffffff','border': '1px solid rgba(0, 0, 0, 0.125'})
                $('.images').css({'border':'1px solid rgba(0, 0, 0, 0.125'})
            }
        },
        props:{
            userPost:{
                type:Array
            }
        },
        methods:{
            setSelected(e){
                if(!this.userName){
                    $(e.currentTarget).siblings().css('border','1px solid rgba(0, 0, 0, 0.125)')
                    $(e.currentTarget).css('border','1px dashed rgba(0, 0, 0, 0.125)')
                }
            },
            remove(e){
                if(this.userName){
                    $(e.currentTarget).parent().remove()
                }
                else{
                   e.target.src='/storage/uploads/0bVHyZ6dM2ykQ82UF6VZR4EmjgCk58CcdQkBWEWD.jpg'
                }
            }
        }
    }
</script>
<style scoped>
    .images{
        border:none
    }
    #image-1p{ 
       width:49%;
       left:1%;
       top:1%
    }
    #image-2p{ 
        width:49%;
        left:50%;
        top:21%
    }
    #name{
        cursor:grab;
        position: absolute;
        left: 1%;
        top: 80%;
        height: 7%;
        width: 48%;
    }
    #lastword{
        cursor:grab;
        position: absolute;
        left: 51%;
        top: 1%;
        height: 19%;
        width: 48%;
    }
    .images{
        position: absolute;    
        padding: 0.5em;
        margin: 0;
        cursor:grab;
        padding:0
    }
    .texts{
        width:fit-content
    }
    .delete{
        position: absolute;
        right: 0px;
        top:0px;
        border: none;
        border-radius: 50%;
        background: none;
        text-shadow: 0px 0px 5px black;
        color: white;
    }
    .delete:hover{
        background-color: 0px 0px 5px;
    }
    #potrait{
    }
    .style{
        border:none;
        background-color: #ffffff;
        border-radius: 5px;
    }
    .shadow-btn{
        width:100%;
    }
</style>
