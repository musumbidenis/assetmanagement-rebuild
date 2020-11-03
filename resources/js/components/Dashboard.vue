<template>
  <!-- Start main content -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">people</i>
              </div>
              <p class="card-category">Online users</p>
              <h3 class="card-title">{{users}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">person_add</i>
                <router-link to="/sessions"> View Sessions</router-link>
              </div>  
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">assignment</i>
              </div>
              <p class="card-category">Assets</p>
              <h3 class="card-title">{{assets}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">assignment</i>
                <router-link to="/assets"> View Assets</router-link>
              </div>  
            </div>
          </div>
        </div>
      </div>  
    </div>
  <!-- End Main content -->
</template>
<script>
export default {
  data(){
    return{
      assets: '',
      users: '',
    }
  },

  created(){
    axios.get('/count/assets').then(({ data }) => {
      this.assets = data;
    }),
    axios.get('/count/users').then(({ data }) => {
      this.users = data;
    })
  }
}
</script>