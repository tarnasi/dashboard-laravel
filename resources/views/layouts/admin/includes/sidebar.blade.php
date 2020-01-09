<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="/panel"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Site</li><!-- /.menu-title -->
                {{-- ARTICLES --}}
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil-square-o"></i>Articles</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="ti-new-window"></i><a href="/panel/articles/create">Create</a></li>
                        <li><i class="fa fa-table"></i><a href="/panel/articles">All</a></li>
                    </ul>
                </li>

                {{-- CATEGORIES --}}
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Categories</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus-square"></i><a href="/panel/categories/create">Create</a></li>
                        <li><i class="fa fa-table"></i><a href="/panel/categories">All</a></li>
                    </ul>
                </li>

                <li class="menu-title">User</li><!-- /.menu-title -->
                {{-- Profile --}}
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>User</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="">All</a></li>
                        <li><i class="ti-id-badge"></i><a href="">Profile</a></li>
                        <li><i class="ti-lock"></i><a href="">Reset Password</a></li>
                        <li><i class="ti-thumb-up"></i><a href="">Social</a></li>
                    </ul>
                </li>

                <li class="menu-title">Settings</li><!-- /.menu-title -->
                {{-- Settings --}}
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Application</a>
                    <ul class="sub-menu children dropdown-menu">
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->
