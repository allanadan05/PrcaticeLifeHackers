<template>
<div>
    <div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
    <router-link to="Login.vue" class="float-right btn btn-outline-primary mt-1">Login</router-link>
	<h4 class="card-title mt-2">Sign up</h4>
</header>
<article class="card-body">
<form @submit.prevent="register()">
	<div class="form-row">
		<div class="col form-group">
			<label>First name </label>   
		  	<input type="text" class="form-control" placeholder="" v-model="user.firstname">
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Last name</label>
		  	<input type="text" class="form-control" placeholder=" " v-model="user.lastname">
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email address</label>
		<input type="email" class="form-control" placeholder="" v-model="user.email">
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div> <!-- form-group end.// -->
	<div class="form-group">
			<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" value="option1" @click="user.gender = 'male'">
		  <span class="form-check-label"> Male </span>
		</label>
		<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" value="option2" @click="user.gender = 'female'">
		  <span class="form-check-label"> Female</span>
		</label>
	</div> <!-- form-group end.// -->
    <div class="form-group">
		<label>Street</label>
		<input type="text" class="form-control" placeholder="" v-model="user.street">
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>City</label>
		  <input type="text" class="form-control" v-model="user.city">
		</div> <!-- form-group end.// -->
		<div class="form-group col-md-6">
		  <label>Country</label>
		  <select id="inputState" class="form-control">
		    <option> Choose...</option>
		      <option> Philippines </option>
		  </select>
		</div> <!-- form-group end.// -->
	</div> <!-- form-row.// -->
	<div class="form-group">
		<label>Create password</label>
	    <input class="form-control" type="password" v-model="user.password">
	</div> <!-- form-group end.// -->  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Register  </button>
    </div> <!-- form-group// -->      
    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Have an account? <router-link to="Login.vue" >Login</router-link></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->
</div> 
</template>

<script>
export default {
	
	data () {
		return {
			user: {
				firstname: '',
				lastname: '',
				email: '',
				password: '',
				gender: '',
				country: 'Philippines',
				city: '',
				street: ''
			}
		}
	},

	methods: {
		register () {
			this.$store.dispatch('REGISTER', this.user)
				.then(() => {
					this.$router.push('/login')
				})
				.catch(error => {
					alert(error)
				})
		}
	}
}
</script>