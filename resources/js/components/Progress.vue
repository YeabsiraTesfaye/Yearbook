<template>
    <div class="row bg-white d-flex">
        <div class='card p-0 mb-2 col-xl-4 col-md-12 col-xs-12'>
            <div class="card-header">
                Posts progress
            </div>
            <div class="card-body">
                <GChart
                type="PieChart"
                :data="data"
            />  
            </div>
        </div>
            
        <div class="col-xl-8 col-md-12 col-xs-12 d-inline p-0 shadow-none" style='max-height:500px; overflow-y:auto'>
            <div class="row header">
            <div class="cell">
                Id
            </div>
            <div class="cell">
                Name
            </div>
            <div class="cell">
                Email
            </div>
            <div class="cell">
                Department
            </div>
            <div class="cell">
                Image1
            </div>
            <div class="cell">
                Image2
            </div>
            <div class="cell">
                Image3
            </div>
            <div class="cell">
                Last word
            </div>
            </div>
            
            <div  v-for="user in userPosts" :key='user.id' class="row">
                <div class="cell" data-title="Id">
                    {{user.id}}
                </div>
                <div class="cell" data-title="Name">
                    {{user.name}}
                </div>
                <div style="max-width:100px; overflow-y:auto" class="cell hideScroll" data-title="Email">
                    {{user.email}}
                </div>
                <div class="cell" data-title="Department">
                    {{user.department}}
                </div>

                <div v-if="user.image1" class="cell" data-title="Location">
                    &#x2714;
                </div>
                <div v-else class="cell" data-title="Location">
                    &#x2716;
                </div>

                <div v-if="user.image2" class="cell" data-title="Location">
                    &#x2714;
                </div>
                <div v-else class="cell" data-title="Location">
                    &#x2716;
                </div>

                <div v-if="user.image3" class="cell" data-title="Location">
                    &#x2714;
                </div>
                <div v-else class="cell" data-title="Location">
                    &#x2716;
                </div>

                <div v-if="user.last_word" class="cell" data-title="Location">
                    &#x2714;
                </div>
                <div v-else class="cell" data-title="Location">
                    &#x2716;
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { GChart } from "vue-google-charts";
export default {
    components: {
        GChart
    },
    data() {
    return {
      data: [
          ['posted', 'percent'],
          ['Completed Posts',     this.countPosts()],
          ['Not completed',     this.notPosted()],
          
      ],
    };
  },
    props:{
        users:{
            type:Array
        },
        posts:{
            type:Array
        },
        userPosts:{
            type:Array
        }
    },
    methods:{
        notPosted(){
            console.log(this.posts.length)
            return 1-this.posts.length/this.users.length
            
        },
        countPosts(){
            console.log(this.users)
            return this.posts.length/this.users.length
        }
    }
}
</script>
<style scoped lang="scss">



.wrapper {
  margin: 0 auto;
  padding: 40px;
  max-width: 800px;
}

.table {
  margin: 0 0 40px 0;
  width: 100%;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
  display: table;
}
@media screen and (max-width: 580px) {
  .table {
    display: block;
  }
}

.row {
  display: table-row;
  background: #f6f6f6;
}
.row:nth-of-type(odd) {
  background: #e9e9e9;
}
.row.header {
  font-weight: 900;
  color: #ffffff;
  background: #ea6153;
}
.row.green {
  background: #27ae60;
}
.row.blue {
  background: #2980b9;
}
@media screen and (max-width: 580px) {
  .row {
    padding: 14px 0 7px;
    display: block;
  }
  .row.header {
    padding: 0;
    height: 6px;
  }
  .row.header .cell {
    display: none;
  }
  .row .cell {
    margin-bottom: 10px;
  }
  .row .cell:before {
    margin-bottom: 3px;
    content: attr(data-title);
    min-width: 98px;
    font-size: 10px;
    line-height: 10px;
    font-weight: bold;
    text-transform: uppercase;
    color: #969696;
    display: block;
  }
}

.cell {
  padding: 6px 12px;
  display: table-cell;
}
@media screen and (max-width: 580px) {
  .cell {
    padding: 2px 16px;
    display: block;
  }
}
</style>