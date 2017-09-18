<template>
  <div class="page-content">
    <div class="row">
      <h1 class="heading-title pull-left">Cursos</h1>
    </div>
    <div class="row" v-if="authState==='admin'">
      <br>
      <router-link :to="{name: '/create_course_path'}" class="btn btn-primary">Nuevo curso</router-link>
    </div>
    <br><br>
    <div class="row">
      <div v-for='course in courses'>
        <!--version 1-->
        <div class="col-md-4 m-b-lg">
           <div class="panel panel-default panel-profile m-b-0">
             <div class="panel-heading"></div>
             <div class="panel-body text-center">
               <img :src="`/images/courses/${course.image}`"  alt="" height="200px" width="250px"/>
               <br><br>
               <h5 class="panel-title">{{course.title}}</h5>
               <p class="m-b">{{course.description}}</p>
               <router-link :to="`/courses/${course.id}`" class="btn btn-primary">Leer más</router-link>               
             </div>
           </div>
         </div>
      </div>
    </div>
    <br>
  </div>
</template>
<script type="text/javascript">
  //import Auth from '../../store/auth'
	export default {
    created(){
			//this.authState=Auth.state.user;
      this.authState=$('meta[name="user_nux"]').attr('content');
      axios.get('/getCourses').then(response=>{
        this.courses=response.data.courses;
      })
      .catch(error=>{
        console.log(error);
      })
		},
    data() {
			return {
				authState: '',
        courses: [],
			}
		}
	}
</script>
