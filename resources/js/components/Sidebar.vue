<template>
    <div class="sidebar" data-color="azure" data-background-color="azure" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
      <a class="simple-text logo-mini">
        A M
      </a>
      <a href="/dashboard" class="simple-text logo-normal">
        Article Manager
      </a>
    </div>
    <div class="sidebar-wrapper">
      <div class="user">
        <div class="user-info">
          <a data-toggle="collapse" href="#collapseExample" class="username">
            <span>
                Musumbi Denis                <b class="caret"></b>
            </span>
          </a>
          <div class="collapse" id="collapseExample">
            <!-- Navbar -->
            <ul class="nav">
            <li class="nav-item ">
              <router-link class="nav-link" to="">
                <span class="sidebar-mini"> AP </span>
                <span class="sidebar-normal"> Admin Profile </span>
              </router-link>
            </li>
            <li class="nav-item ">
              <router-link class="nav-link" to="">
                <span class="sidebar-mini"> CP </span>
                <span class="sidebar-normal"> Change admin password </span>
              </router-link>
            </li>

            <li class="nav-item">
              <router-link class="nav-link" to="">
                <span class="sidebar-mini"> L </span>
                <span class="sidebar-normal"> Logout </span>
              </router-link>
            </li>
          </ul>
        </div>
      </div>
      </div>

      <ul class="nav">
        <li :class="[currentPage.includes('dashboard') ? activeClass : '', 'nav-item']">
          <router-link class="nav-link" to="/dashboard">
            <i class="material-icons">dashboard</i>
            <p> Dashboard </p>
          </router-link>
        </li>

        <li :class="[currentPage.includes('articles') ? activeClass : '', 'nav-item']">
          <router-link class="nav-link" to="/articles">
            <i class="material-icons">assignment</i>
            <p> Articles </p>
          </router-link>
        </li>

        <li  :class="[currentPage.includes('settings') ? activeClass : '', 'nav-item']">
          <router-link class="nav-link" to="">
            <i class="material-icons">settings</i>
            <p> Settings </p>
          </router-link>
        </li>
      </ul>
    </div>
  </div>
</template>
<script>
export default {
    computed: {
        currentPage(){
            return this.$route.path;
        }
    },
    data() {
        return {
            activeClass: 'active',
        }
    },
}
</script>