<aside class="main-sidebar sidebar-dark-info elevation-4">

    <a href="index3.html" class="brand-link">

        <img src="{{ asset('img/adminLTE/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

        <span class="brand-text font-weight-light">{{ config('app.name') ?? 'APP' }}</span>

    </a>

    <div class="sidebar">

        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-compact" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item menu-open">

                    <a href="/" class="nav-link active">

                        <i class="nav-icon fas fa-tachometer-alt"></i>

                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">

                    <a href="#" class="nav-link">

                        <i class="nav-icon fa fa-users"></i>

                        <p>

                            Users

                            <i class="fas fa-angle-left right"></i>

                            <span class="badge badge-danger right">New</span>

                        </p>

                    </a>

                    <ul class="nav nav-treeview" style="display: none;">

                        <li class="nav-item">

                            <a href="#" class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>CRUD</p>

                            </a>

                        </li>





                    </ul>

                </li>

        </nav>

    </div>

</aside>
