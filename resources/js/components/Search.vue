<template>
    <nav class=" m-0 navbar navbar-expand-sm w-100" style='z-index:2'>
        <input v-model="findName" class="form-control mr-sm-2 nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  type="text" id="searchField" placeholder="Type username or title" style='width:95%'>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
        <ul id='searchResults' class="dropdown-menu dropdown-menu-right" aria-labelledby="searchField">
            <li class='m-2 border-bottom' :id="user.id+'_u'" v-for="user in filteredNames" :key='user.id+"_u"' @click="displayResult">
                <a class='nav-link' :href='/getUserPosts/+user.id'> {{ user.name }}</a>
            </li>
            <li class='m-2 border-bottom' :id='yearbook.id+"_y"' v-for="yearbook in filteredYearbooks" :key='yearbook.id+"_y"' @click="displayResult">
                <a class='nav-link' :href='/y/+yearbook.id+"/album"'>{{ yearbook.title }}</a>
            </li>
        </ul>
    </nav>
</template>
<script>
export default {
    mounted(){
        axios.get('/search').then(response=>{
            const users = response.data.users
            users.forEach(user => {
                if(user!= undefined){
                    // this.names.push(user.name)
                    this.allUsers.push(user)
                }
            });
            const yearbooks = response.data.yearbooks
            yearbooks.forEach(yearbook => {
                // console.log(yearbook)
                this.allYearbooks.push(yearbook)
            });
        })
        console.log(this.allUsers)
    },
    data() {
        return {
            findName: '',
            names: [],
            allUsers:[],
            allYearbooks:[]
        }
    },
    computed: {
        filteredNames() {
            let filter = new RegExp(this.findName, 'i')
            
            return this.allUsers.filter(el => el.name.match(filter))
        },
        filteredYearbooks() {
            let filter = new RegExp(this.findName, 'i')
            
            return this.allYearbooks.filter(el => el.title.match(filter))
        }
    },
    methods:{
        displayResult(e){
            const id = e.target.id.split('_')
            if(id[1] == 'u'){
                axios.get('/getUserPosts/'+id[0]).then(
                    response=>{
                        console.log(response);
                    }
                )
            }else if(id[1] == 'y'){
                axios.get('/getYearbook/'+id[0]).then(
                    response=>{
                        console.log(response);
                    }
                )
            }
        }
    }
}
</script>
<style scoped>
ul{
    position:absolute;
    box-shadow: 0 0 10px;
    display: none;
    top:45px;
    left:0;
    list-style: none;
    max-height: 500px;
    overflow: auto;
    background-color: white;
}
li:hover{
    cursor: pointer;
}
</style>