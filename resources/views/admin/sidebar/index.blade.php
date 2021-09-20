<!--
          ====================================
          ———------- LEFT SIDEBAR ------------
          =====================================
        -->
<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Application Brand -->
        <div class="app-brand">
            <a href="{{ route('admin.index') }}">
                <img src="{{ asset($icon->shortCut) }}" alt="">
                <span class="brand-name">Dashboard</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#home"
                        aria-expanded="false" aria-controls="ui-elements">
                        <i class="mdi mdi-home"></i>
                        <span class="nav-text">Home Pages</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="home" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('home.icon') }}">
                                    <span class="nav-text">Icons</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('about.portfolio') }}">
                                    <span class="nav-text">About Portfolio</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('social.media') }}">
                                    <span class="nav-text">Social Media</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('colors') }}">
                                    <span class="nav-text">Home Color</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#about"
                        aria-expanded="false" aria-controls="ui-elements">
                        <i class="mdi mdi-account-edit"></i>
                        <span class="nav-text">About Pages</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="about" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('about.me') }}">
                                    <span class="nav-text">About Me</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('education') }}">
                                    <span class="nav-text">Education</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('working.history') }}">
                                    <span class="nav-text">Working History</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#service"
                        aria-expanded="false" aria-controls="ui-elements">
                        <i class="mdi mdi-gavel"></i>
                        <span class="nav-text">Services Pages</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="service" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('service') }}">
                                    <span class="nav-text">Service</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#skill"
                        aria-expanded="false" aria-controls="ui-elements">
                        <i class="mdi mdi-gamepad"></i>
                        <span class="nav-text">Skills Pages</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="skill" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('skill') }}">
                                    <span class="nav-text">Skill</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#project"
                        aria-expanded="false" aria-controls="ui-elements">
                        <i class="mdi mdi-web"></i>
                        <span class="nav-text">Work Pages</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="project" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('project') }}">
                                    <span class="nav-text">Project</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#testimonial" aria-expanded="false" aria-controls="ui-elements">
                        <i class="mdi mdi-comment-text"></i>
                        <span class="nav-text">Testimonial Pages</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="testimonial" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('testimonial') }}">
                                    <span class="nav-text">Testimonial</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#contact"
                        aria-expanded="false" aria-controls="ui-elements">
                        <i class="mdi mdi-map"></i>
                        <span class="nav-text">Contact Pages</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="contact" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('contact.profile') }}">
                                    <span class="nav-text">Contact Profile</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('contact.message') }}">
                                    <span class="nav-text">Contact Message</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

            </ul>
        </div>
        <hr class="separator" />
    </div>
</aside>

