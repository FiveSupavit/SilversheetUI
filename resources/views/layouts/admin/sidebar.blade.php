<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                    <li class="site-menu-item has-sub {{Request::is('admin/dashboard')?'active':''}}">
                        <a href="{{ url('admin/dashboard') }}">
                            <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="site-menu-item has-sub {{Request::is('admin/member')||Request::is('admin/need_input')||Request::is('admin/need_attention')||Request::is('admin/verified_certificate')||Request::is('admin/expired')||Request::is('admin/expiring_soon')?'active open':''}}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                            <span class="site-menu-title">Members</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{Request::is('admin/member')?'active':''}}">
                                <a class="animsition-link" href="{{ url('admin/member') }}">
                                    <span class="site-menu-title">All</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{Request::is('admin/need_input')?'active':''}}">
                                <a class="animsition-link" href="{{ url('admin/need_input') }}">
                                    <span class="site-menu-title">Need Input</span>
                                    <div class="site-menu-label">
                                        <span class="badge badge-info">2</span>
                                    </div>
                                </a>
                            </li>
                            <li class="site-menu-item {{Request::is('admin/need_attention')?'active':''}}">
                                <a class="animsition-link" href="{{ url('admin/need_attention') }}">
                                    <span class="site-menu-title">Need Attention</span>
                                    <div class="site-menu-label">
                                        <span class="badge badge-danger">2</span>
                                    </div>
                                </a>
                            </li>
                            <li class="site-menu-item {{Request::is('admin/verified_certificate')?'active':''}}">
                                <a class="animsition-link" href="{{ url('admin/verified_certificate') }}">
                                    <span class="site-menu-title">Verified Certificate</span>
                                    <div class="site-menu-label">
                                        <span class="badge badge-success">3</span>
                                    </div>
                                </a>
                            </li>
                            <li class="site-menu-item {{Request::is('admin/expired')?'active':''}}">
                                <a class="animsition-link" href="{{ url('admin/expired') }}">
                                    <span class="site-menu-title">Expired</span>
                                    <div class="site-menu-label">
                                        <span class="badge badge-dark">1</span>
                                    </div>
                                </a>
                            </li>
                            <li class="site-menu-item {{Request::is('admin/expiring_soon')?'active':''}}">
                                <a class="animsition-link" href="{{ url('admin/expiring_soon') }}">
                                    <span class="site-menu-title">Expiring Soon</span>
                                    <div class="site-menu-label">
                                        <span class="badge badge-warning">1</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                            <span class="site-menu-title">Reports</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Type1</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/error-400.html">
                                            <span class="site-menu-title">Type_1</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/error-403.html">
                                            <span class="site-menu-title">Type1_2</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/faq.html">
                                    <span class="site-menu-title">Type2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub {{Request::is('admin/setting/notification')||Request::is('admin/setting/certificate')||Request::is('admin/setting/company')?'active open':''}}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-settings" aria-hidden="true"></i>
                            <span class="site-menu-title">Settings</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{Request::is('admin/setting/notification')?'active':''}}">
                                <a class="animsition-link" href="{{ url('admin/setting/notification') }}">
                                    <span class="site-menu-title">Notification</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{Request::is('admin/setting/certificate')?'active':''}}">
                                <a class="animsition-link" href="{{ url('admin/setting/certificate') }}">
                                    <span class="site-menu-title">Certificate</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{Request::is('admin/setting/company')?'active':''}}">
                                <a class="animsition-link" href="{{ url('admin/setting/company') }}">
                                    <span class="site-menu-title">Company</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
