<template>
  <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <router-link class="navbar-brand"
                to="/"
            >TSHIRT STORE</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <router-link class="nav-link"
                            to="/"
                        >Home</router-link>
                    </li>

                    <li class="nav-item">
                        <router-link class="nav-link"
                            to="/login"
                        >Login</router-link>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</template>

<script>
export default {

}
</script>

<style>

</style>