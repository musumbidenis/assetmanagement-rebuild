<template>
    <div>
        <sidebar></sidebar>
        <div class="main-panel">
            <navbar></navbar>
            <div class="content">
                <div class="content">
                  <router-view></router-view>
                </div>
            </div>
            <!-- Footer-->
            <footer class="footer">
                <div class="container-fluid">
                <div class="copyright">
                        &copy; 2020 
                        <a href="#" target="_blank">Article Manager</a> All rights reserved.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</template>
<script>
import sidebar from './Sidebar'
import navbar from './Navbar'

export default {
  name: 'index',
  components: {
    sidebar,
    navbar
  }
  
}
</script>