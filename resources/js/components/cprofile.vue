<template>

    <section class="cprofile section" id="about">
    
    <div class="row" v-if="editable === 'true'">
        <div class="col-4">
            <img :src="imgUrl" style="width:100%;" class="" alt="">
        </div>

        <div class="col-8 p-3 pl-3">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ profile.title }}</h1>
                
            </div>
            
            <div class="pr-3" style="white-space: pre-wrap;">{{ profile.desc }}</div>
            <div class="pr-3">{{ profile.url }}</div>

            <div class="pr-3">{{ pcount }} Posts</div>
            <span class="pr-3"><a :href="editProfileURL" class="btn btn-primary">Edit Profile</a></span>
            <span class="pr-3"><a :href="reorderProfileURL" class="btn btn-primary">Re-Order Posts</a></span>
            <span class="pr-3"><a href="/p/create" class="btn btn-success">Add New Post</a> </span> 
        </div>
    </div>

    <!-- <div class="row" v-else>
        <div class="col-4">
            <img :src="imgUrl" style="width:100%;" class="" alt="">
        </div>

        <div class="col-8 p-3 pl-3">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ profile.title }}</h1>
                
            </div>
            
            <div class="pr-3" style="white-space: pre;">{{ profile.desc }}</div>
            <div class="pr-3">{{ profile.url }}</div>

        </div>
    </div> -->

    
            <div class="container" v-else>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="mt-3">
                            <img :src="imgUrl" alt="" class="img-fluid mx-auto d-block img-thumbnail">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-3">
                            <!-- <h2><span class="font-weight-bold">About</span> Me</h2> -->
                            <h2 class="mt-4">{{ profile.title }}</h2>
                            <p class="text-muted mt-4" style="white-space: pre-wrap;">{{ profile.desc }} </p>
                            <!-- <p class="text-muted mt-2">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            <p class="text-muted mt-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
                            <div>
                                <ul class="mb-0 about-social list-inline mt-4">
                                    <li class="list-inline-item" v-if="ProfileURL"><a :href="ProfileURL"><i class="mdi mdi-dribbble"></i></a></li>
                                    <li class="list-inline-item" v-if="profile.facebook"><a :href="profile.facebook"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="list-inline-item" v-if="profile.linkid"><a :href="profile.linkid"><i class="mdi mdi-linkedin"></i></a></li>
                                    <li class="list-inline-item" v-if="profile.youtube"><a :href="profile.youtube"><i class="mdi mdi-youtube-play text-muted"></i></a></li>
                                    <li class="list-inline-item" v-if="profile.twitter"><a :href="profile.twitter"><i class="mdi mdi-twitter"></i></a></li>
                                </ul> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</template>

<script lang="js">

  export default  {
    name: 'cprofile',
    props: ['profile','pcount','imgUrl','editable','userid','ProfileURL' , 'editProfileURL'],
    mounted () {
      this.imgUrl = '/storage/'+ this.profile.image;
      this.editProfileURL = '/profile/' + this.userid + '/edit';
      this.ProfileURL = '/profile/' + this.userid;
      this.reorderProfileURL = '/profile/' + this.userid + '/re-order';
    },
    data () {
      return {

      }
    },
    methods: {

    },
    computed: {

    }
}


</script>

<style scoped lang="scss">
  .cprofile {

  }
</style>
