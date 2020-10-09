<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                    <li class="site-menu-item has-sub">
                        <a href="{{ url('admin/dashboard') }}">
                            <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">DASHBOARD</span>
                        </a>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                            <span class="site-menu-title">MEMBERS</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{ url('admin/member') }}">
                                    <span class="site-menu-title">ALL</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{ url('admin/verified_certificate') }}">
                                    <span class="site-menu-title">VERIFIED CERTIFICATE</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{ url('admin/need_input') }}">
                                    <span class="site-menu-title">NEED INPUT</span>
                                    <div class="site-menu-label">
                                        <span class="badge badge-danger badge-round mr-25">2</span>
                                    </div>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{ url('admin/need_attention') }}">
                                    <span class="site-menu-title">NEED ATTENTION</span>
                                    <div class="site-menu-label">
                                        <span class="badge badge-danger badge-round mr-25">8</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                            <span class="site-menu-title">REPORTS</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">TYPE1</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/error-400.html">
                                            <span class="site-menu-title">TYPE1_1</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/error-403.html">
                                            <span class="site-menu-title">TYPE1_2</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/faq.html">
                                    <span class="site-menu-title">TYPE2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item">
                        <a href="{{ url('admin/setting') }}">
                            <i class="site-menu-icon wb-settings" aria-hidden="true"></i>
                            <span class="site-menu-title">SETTINGS</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
