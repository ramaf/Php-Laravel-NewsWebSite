<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('assets')}}/admin/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Admin Panel Page
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="{{route('admin_home')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin_category')}}">
                    <i class="material-icons">person</i>
                    <p>Category</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin_newss')}}">
                    <i class="material-icons">content_paste</i>
                    <p>News</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin_message')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Contact Messages</p>
                </a>
            </li>




        </ul>
    </div>
</div>
