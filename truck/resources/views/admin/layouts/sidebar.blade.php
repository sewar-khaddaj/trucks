<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

<!-- 
                <li class="nav-small-cap"> Personal</li>
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                    class="mdi mdi-settings"></i>
                    <span class="hide-menu">
                        Settings
                    </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Manage </a></li>
                        <li><a href="">Main Page settings</a></li>
                    </ul>
                </li>
 -->
                <li class="nav-devider"></li>
                <li class="nav-small-cap">Control Web App Content</li>
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                    <i class="mdi mdi-arrange-bring-forward"></i>
                    <span class="hide-menu">
                    Users </span>
                </a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{ action('Admin\UserController@index', 'users') }}">All </a></li>
                    <li><a href="{{ action('Admin\UserController@create', 'user') }}">New</a></li>

                </ul>
            </li>


            <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                <i class="mdi mdi-arrange-bring-forward"></i>
                <span class="hide-menu">
                Suppliers </span>
            </a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="{{ action('Admin\SupplierController@index', 'suppliers') }}">All </a></li>
                <li><a href="{{ action('Admin\SupplierController@create', 'supplier') }}">New</a></li>
            </ul>
        </li>

        <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
            <i class="mdi mdi-arrange-bring-forward"></i>
            <span class="hide-menu">
            Truck </span>
        </a>
        <ul aria-expanded="false" class="collapse">
            <li><a href="{{ action('Admin\TruckController@show', 'truck') }}">Online Trucks</a></li>

            <li><a href="{{ action('Admin\TruckController@index', 'trucks') }}">All </a></li>
            <li><a href="{{ action('Admin\TruckController@create', 'truck') }}">New</a></li>
        </ul>
    </li>

</ul>
</nav>
<!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
</aside>
