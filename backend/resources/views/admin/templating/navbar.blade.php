<aside class="navbar-aside" id="offcanvas_aside">
            <div class="aside-top">
                <a href="{{route('dashboard')}}" class="brand-wrap">
                    <img src="{{asset('assets-dashboard/imgs/theme/AgriHub.svg')}}" class="logo" alt="Nest Dashboard" />
                </a>
                <div>
                    <button class="btn btn-icon btn-aside-minimize"><i class="text-muted material-icons md-menu_open"></i></button>
                </div>
            </div>
            <nav>
                @if(session('u_data')->role_id == 2)
                <ul class="menu-aside">
                    <li class="menu-item active">
                        <a class="menu-link" href="{{route('dashboard')}}">
                            <i class="icon material-icons md-home"></i>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="{{route('product_list')}}">
                            <i class="icon material-icons md-shopping_bag"></i>
                            <span class="text">List Products</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="{{route('add_product')}}">
                            <i class="icon material-icons md-add_box"></i>
                            <span class="text">Add product</span>
                        </a>
                    </li>
                    @elseif(session('u_data')->role_id == 3)
                    <ul class="menu-aside">
                    <li class="menu-item active">
                        <a class="menu-link" href="{{route('dashboard')}}">
                            <i class="icon material-icons md-home"></i>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="{{route('product_list')}}">
                            <i class="icon material-icons md-shopping_bag"></i>
                            <span class="text">List Products</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="{{route('add_product')}}">
                            <i class="icon material-icons md-add_box"></i>
                            <span class="text">Add product</span>
                        </a>
                    </li>
                    <!-- <li class="menu-item has-submenu">
                        <a class="menu-link" href="page-sellers-cards.html">
                            <i class="icon material-icons md-subscriptions"></i>
                            <span class="text">Subscribers</span>
                        </a>
                        <div class="submenu">
                            <a href="page-sellers-cards.html">Add Subscriber</a>
                            <a href="page-sellers-list.html">List Subsriber</a>
                        </div>
                    </li> -->
                    <!-- <li class="menu-item has-submenu">
                        <a class="menu-link" href="page-sellers-cards.html">
                            <i class="icon material-icons md-store"></i>
                            <span class="text">Sellers</span>
                        </a>
                        <div class="submenu">
                            <a href="page-sellers-cards.html">Sellers cards</a>
                            <a href="page-sellers-list.html">Sellers list</a>
                            <a href="page-seller-detail.html">Seller profile</a>
                        </div>
                    </li> -->
                    <li class="menu-item has-submenu">
                        <a class="menu-link" href="#">
                            <i class="icon material-icons md-person"></i>
                            <span class="text">Account</span>
                        </a>
                        <div class="submenu">
                            <a href="{{route('list_account')}}">List Account</a>
                            <a href="{{route('add_account')}}">Add Account</a>
                            <!-- <a href="page-account-login.html">User login</a> -->
                            <!-- <a href="page-account-register.html">User registration</a> -->
                            <!-- <a href="page-error-404.html">Error 404</a> -->
                        </div>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="{{route('setting_account')}}">
                            <i class="icon material-icons md-settings"></i>
                            <span class="text">Settings</span>
                        </a>    
                    </li>
                    @else
                    @php
                    $request->session()->invalidate(); 
                    $request->session()->regenerateToken(); 
                    @endphp
                    @endif
                    
                   
                    <li class="menu-item">
                        
                    </li>
                </ul>
                <hr />
                <ul class="menu-aside"> 
                    <li class="menu-item">
                        <a class="menu-link" href="{{route('logout')}}">
                            <i class="icon material-icons md-exit_to_app"></i>
                            <span class="text"> Logout </span>
                        </a>
                    </li>
                </ul>
                <br />
                <br />
            </nav>
        </aside>