<template>

    <footer class="cfooter footer bg-light" id="footer">
      <div class="container">
          <div class="row justify-content-center text-center">
              <div class="col-md-12">
                  <div class="text-center text-white footer-alt">
                      <ul class="list-unstyled list-inline mb-3">
                          <li class="list-inline-item" v-if="profile.facebook"><a :href="profile.facebook" target="_blank"><i class="mdi mdi-facebook text-muted"></i></a></li>
                          <li class="list-inline-item" v-if="profile.linkid"><a :href="profile.linkid"><i class="mdi mdi-linkedin text-muted"></i></a></li>
                          <li class="list-inline-item" v-if="profile.youtube"><a :href="profile.youtube"><i class="mdi mdi-youtube-play text-muted"></i></a></li>
                          <li class="list-inline-item" v-if="profile.twitter"><a :href="profile.twitter"><i class="mdi mdi-twitter text-muted"></i></a></li>
                      </ul>
                      <p class="text-muted mb-0"> 2020 © جميع الحقوق محفوظة - سلامة عطا الله.</p>
                  </div>
              </div>
          </div>
      </div>
  </footer>

</template>

<script lang="js">

  export default  {
    name: 'cfooter',
    props: ["profile"],
    mounted () {
        
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
  .cfooter {

  }
</style>
