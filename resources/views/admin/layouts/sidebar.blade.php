<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{route('admin.user.index')}}" id="user">
                    <i class="fa fa-user"></i> <span>User</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.category.index')}}">
                    <i class="fa fa-box"></i> <span>Category</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.bill.index')}}">
                    <i class="fa fa-file"></i> <span>Bill</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.product.index')}}">
                    <i class="fa fa-file"></i> <span>Product</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-car"></i> <span>Shipping report</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
