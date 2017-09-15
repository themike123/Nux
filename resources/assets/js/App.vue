<template>
	<div class="container">
		<div class="row">

			<div class="alert alert-danger fade in" v-if="flash.error">
			    <a href="#" class="close" data-dismiss="alert">&times;</a>
			    <strong>Error!</strong> {{flash.error}}
			</div>

			<div class="alert alert-success fade in" v-if="flash.success">
			    <a href="#" class="close" data-dismiss="alert">&times;</a>
			    <strong>Bien!</strong> {{flash.success}}.
			</div>

			<router-view></router-view>

		</div>
	</div>
</template>

<script type="text/javascript">
	import Flash from './helpers/flash'
	//import Auth from './store/auth'
	export default {
		created(){
			this.authState=$('meta[name="user_nux"]').attr('content');
			//Auth.set($('meta[name="user_nux"]').attr('content'));
		},
		data() {
			return {
				flash: Flash.state,
				//authState: Auth.state,
				authState: '',
			}
		}
	}
</script>
