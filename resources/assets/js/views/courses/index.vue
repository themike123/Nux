<template>
  <div class="page-content">
    <div class="row">
      <h1 class="heading-title pull-left">Cursos</h1>
    </div>
      <div class="row" v-if="authState==='admin'">
        <br>
        <router-link :to="{name: '/create_course_path'}" class="btn btn-primary">Nuevo curso</router-link>
      </div>
    <div class="row">
      <div v-for='course in courses'>
        {{ course.title }}
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
        courses: []
			}
		}
	}
</script>
