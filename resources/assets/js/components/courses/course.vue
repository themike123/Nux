<template>
<div class="content container">
    <div class="row">
      <router-link :to="{name: '/courses_path'}" class="btn btn-primary">Regresar</router-link>
    </div>
    <br><br>
    <div class="page-wrapper">
      <header class="page-heading clearfix">
          <h1 class="heading-title pull-left">{{course.title}}</h1>
      </header>
      <div class="page-content">
          <div class="row page-row">
              <div class="course-wrapper col-md-8 col-sm-7">
                  <article class="course-item">
                      <p class="featured-image page-row">
                        <img class="img-responsive" :src="`/images/courses/${course.image}`"  width="800px" height="500px" alt=""/>
                      </p>
                      <div class="page-row box box-border">
                          <ul class="list-unstyled no-margin-bottom">
                              <li><strong>Inicio: </strong><i class="fa fa-clock-o"></i>{{ course.created_at }}</li>
                              <li><strong>Estado: </strong> <em>{{ course.status }}</em></li>
                          </ul>
                      </div><!--//page-row-->
                      <div class="page-row">
                        <p>{{course.description}}</p>
                      </div><!--//page-row-->
                  </article><!--//course-item-->
              </div><!--//course-wrapper-->
              <!--aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                  <section class="widget has-divider">
                      <h3 class="title">Why College Green Online</h3>
                      <p>Donec pulvinar arcu lacus, vel aliquam libero scelerisque a. Cras mi tellus, vulputate eu eleifend at, consectetur fringilla lacus. Nulla ut purus.</p>
                      <a class="btn btn-theme" href="#"><i class="fa fa-download"></i>Download prospectus</a>
                  </section>
              </aside-->
          </div><!--//page-row-->
      </div><!--//page-content-->
    </div><!--//page-->
  </div>
</template>

<script>
    import Flash from '../../helpers/flash'

    export default {
      created(){
        //${this.$route.params.id}
        axios.get(`/getCourse/${this.$route.params.id}`).then(response=>{
          this.course=response.data.course;
          this.image=this.course.image;
        })
        .catch(error=>{
          console.log(error);
        })
  		},
      data(){
        return{
          course:'',
          image: ''
        }
      }
    }
</script>
