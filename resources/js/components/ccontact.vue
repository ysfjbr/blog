<template>

  <section class="section ccontact" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2><span class="font-weight-bold">اتصل</span> الآن</h2>
                    <!-- <p class="text-muted mx-auto section-subtitle mt-3">It is a long esta   blished fact that a reader will be of a page when established fact looking at its layout.</p> -->
                </div>
            </div>
        </div> 
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="text-center">
                    <div>
                        <i class="mbri-mobile2 text-custom h1"></i>
                    </div>
                    <div class="mt-3">
                        <h5 class="mb-0 contact_detail-title font-weight-bold">الهاتف</h5>
                        <p class="text-muted">{{ profile.profile.tel }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center">
                    <div>
                        <i class="mbri-letter text-custom h1"></i>
                    </div>
                    <div class="mt-3">
                        <h5 class="mb-0 contact_detail-title font-weight-bold">البريد الالكتروني</h5>
                        <p class="text-muted">{{ profile.email }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center">
                    <div>
                        <i class="mbri-pin text-custom h1"></i>
                    </div>
                    <div class="mt-3">
                        <h5 class="mb-0 contact_detail-title font-weight-bold">العنوان</h5>
                        <p class="text-muted">{{ profile.profile.address }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="row mt-5">
            <div class="col-lg-12">
                <div class="form-kerri contact_form">
                    <div id="message"></div>
                    <form method="post" action="php/contact.php" name="contact-form" id="working_form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mt-2">
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Your name...">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-2">
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your email...">
                                </div>
                            </div>                                
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-2">
                                    <input type="text" class="form-control" id="subject" placeholder="Your Subject..">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-2">
                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-custom text-uppercase" value="Submit">
                                <div id="simple-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>  
            </div>
        </div> -->

    </div>
  </section>

</template>

<script lang="js">

  export default  {
    name: 'ccontact',
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
  .ccontact {

  }
</style>
