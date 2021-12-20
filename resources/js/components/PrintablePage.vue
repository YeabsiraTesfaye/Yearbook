<template>
    <div>
        
    </div>
</template>
<script>
export default {
    props:{
        allPosts:{
            type: Array
        },
        allDepartments:{
            type: Array
        }
    },
    mounted(){
        const holder = {}
        for(const dept in this.allDepartments){
            for(const post in this.allPosts){
                // console.log(this.allPosts[post].department)
                if(this.allPosts[post].department == this.allDepartments[dept]){
                    if(Object.keys(holder).includes(this.allDepartments[dept])){
                        let temp = [holder[this.allDepartments[dept]]]
                        
                            temp.append(this.allPosts[post])
                        
                        delete holder[this.allDepartments[dept]]
                        holder[this.allDepartments[dept]] = temp
                    }
                }else{
                    holder[this.allDepartments[dept]] = this.allPosts[post]
                }
            }
        }
        console.log(holder)
    }
}
</script>