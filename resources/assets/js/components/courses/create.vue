<template>
<div class="container">
    <div class="row">
      <router-link :to="{name: '/courses_path'}" class="btn btn-primary">Regresar</router-link>
    </div>
    <div class="row">      
      <br><br>
      <form @submit.prevent="save">

        <div class="form-group">
           <label for="image">Imagen</label>
           <input required type="file" accept="image/*" @change="loadFile"><br>
           <!--img class="img-responsive center-block" id="output"/-->
        </div>

        <img class="img-thumbnail" id="output" length="200px" width="200px"><br>

        <div class="form-group">
          <label for="title">Título</label>
          <input type="text" class="form-control" required v-model="course.title" name="title" placeholder="Título">
        </div>

        <div class="form-group">
          <label for="description">Descripción del curso</label>
          <textarea v-model="course.description" required name="description" class="form-control" rows="8" cols="80" placeholder="Descripción del curso"></textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

      </form>
    </div>
  </div>
</template>

<script>
    import Flash from '../../helpers/flash'

    export default {
      data(){
        return{
          course:{
            title:'',
            description:'',
            image:'',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          }
        }
      },
      methods:{
        loadFile: function (e) {
          const files = e.target.files ;
  				if (files && files.length > 0) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(files[0]);
            this.course.image=files[0];
  				}
        },
        save: function () {
          let form_data= new FormData(this.course);

          form_data.append('title', this.course.title);
          form_data.append('description', this.course.description);
          form_data.append('image', this.course.image);
          form_data.append('_token',$('meta[name="csrf-token"]').attr('content'));

          axios.post('/courses',form_data).then(response=>{
            if (response.data.status=='success') {
                Flash.setSuccess(response.data.message);
                this.$router.push('/courses');
            }
            console.log(response);
          })
          .catch(error=>{
            console.log(error);
          })
        }
      }
    }
</script>
