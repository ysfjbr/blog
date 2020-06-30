<template>

    <div v-if="editable === 'true'" class=" cpost row pt-4"> 
          <div class="col-4">
              <iframe width="100%" height="auto" :src="youtubeid" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-8">
              <div class="d-flex justify-content-between align-items-baseline">
                  <strong>{{ post.title }}</strong> 
                  <span v-if="post.online === 1">
                    Online
                  </span>
                  <span v-else>
                    Offline
                  </span>
              </div>
              <div class="pr-3" style="white-space: pre-wrap;">{{ post.desc }}</div>
              <span class="pr-3"><a :href="editurl" class="btn btn-primary">Edit Post</a></span>
              <span class="pr-3"><button class="btn btn-danger" @click="delete_post">Delete</button></span>
              <span class="pr-3"><a :href="post.url" target="_blank" class="btn btn-primary">On Youtube</a></span>
          </div>
      </div>

        <div v-else-if="show" class="col-lg-6 mt-3 cpost">
            <div class="rounded bg-white p-2">
                <div class="img_blog">
                    <iframe width="100%" height="300" :src="youtubeid" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="content_blog pt-3 pb-3">
                    <div>
                        <h5 class="font-weight-bold mb-0"><a href="#" class="text-dark">{{ post.title }}</a></h5>
                    </div>
                    <div class="mt-3">
                        <p class="mt-3 desc_blog text-muted" style="white-space: pre-wrap;">{{ post.desc }}</p>
                    </div>
                </div>
            </div>
        </div>

</template>

<script>

  export default  {
    name: 'cpost',
    props: ['post','youtubeid','editurl', 'editable','show'],
    mounted () {
      this.editurl = "/p/"+this.post.id+"/edit";
      this.show = this.post.online === 1;
      console.log(this.post.online ,this.show);
      
    },
    data () {
      return {
        
      }
    },
    methods: {
      delete_post()
       {
         if(confirm("Are you sure?"))
         {
           console.log("Delete "+"/p/"+this.post.id.toString()+"/delete");
           axios.post("/p/"+this.post.id.toString()+"/delete")
                .then(response => {
                    window.location.reload();
                });
         }
       }

    },
    computed: {

    }
}


</script>

<style scoped lang="scss">
  .cpost {

  }
</style>
