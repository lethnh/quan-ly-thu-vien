<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                    <li class="site-menu-category">General</li>
                    <li class="site-menu-item has-sub">
                        <a href="#">
                            <i class="site-menu-icon icon fa-list" aria-hidden="true"></i>
                            <span class="site-menu-title">Category</span>
                            <span class="site-menu-arrow"></span>
                        </a>

                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{!! url('admin/category') !!}">
                                    <span class="site-menu-title">Danh sách category</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{!! url('admin/category/create') !!}">
                                    <span class="site-menu-title">Tạo category</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="#">
                            <i class="site-menu-icon icon fa-book" aria-hidden="true"></i>
                            <span class="site-menu-title">Book</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{!! url('admin/book') !!}">
                                    <span class="site-menu-title">Danh sách book</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{!! url('admin/book/create') !!}">
                                    <span class="site-menu-title">Tạo book</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="#">
                            <i class="site-menu-icon icon fa-book" aria-hidden="true"></i>
                            <span class="site-menu-title">User</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{!! url('admin/user') !!}">
                                    <span class="site-menu-title">Danh sách user</span>
                                </a>
                            </li>
                            {{-- <li class="site-menu-item">
                                <a class="animsition-link" href="{!! url('admin/book/create') !!}">
                                    <span class="site-menu-title">Tạo book</span>
                                </a>
                            </li> --}}
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
            data-original-title="Settings">
            <span class="icon wb-settings" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
            <span class="icon wb-eye-close" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon wb-power" aria-hidden="true"></span>
        </a>
    </div>
</div>