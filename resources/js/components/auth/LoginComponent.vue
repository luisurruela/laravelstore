<template>
  <div class="mt-4">
    <div class="container">
      <div class="col-md-6 m-auto">
        <div class="card">
          <div class="card-body">
            <form v-on:submit.prevent="signIn">
              <div class="form-group">
                <label for="username" class="small text-uppercase">Username</label>
                <input type="text" class="form-control form-control-lg" name="username" v-model="loginForm.username">
              </div>
              <div class="form-group">
                <label for="password" class="small text-uppercase">Password</label>
                <input type="password" class="form-control form-control-lg" name="password" v-model="loginForm.password">
              </div>
              <button type="submit" class="btn btn-primary btn-lg text-white"><strong>Sign in</strong></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      loginForm: {}
    }
  },
  methods: {
    signIn() {
      console.dir(this.loginForm)
    }
  },
}
</script>

<style>

</style>