@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside id="side-overlay">
    <div id="side-overlay-scroll">
        <div class="content-header content-header-fullrow">
            <div class="content-header-section align-parent">
                <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout"
                        data-action="side_overlay_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <div class="content-header-item">
                    <a class="img-link mr-5" href="javascript:void(0)">
                        <img class="img-avatar img-avatar32" src="{{Storage::url(Auth::user()->avatar_location)}}"
                             alt="">
                    </a>
                    <a class="align-middle link-effect text-primary-dark font-w600"
                       href="javascript:void(0)">{{Auth::user()->first_name.' '.Auth::user()->last_name}}</a>
                </div>
            </div>
        </div>
        <div class="content-side">
            <div class="block pull-t pull-r-l">
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <form action="https://demo.pixelcave.com/codebase/be_pages_generic_search.php" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" id="side-overlay-search"
                                   name="side-overlay-search" placeholder="Search..">
                            <span class="input-group-btn">
<button type="submit" class="btn btn-secondary px-10">
<i class="fa fa-search"></i>
</button>
</span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="block pull-r-l">
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="row">
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Clients</div>
                            <div class="font-size-h4">460</div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                            <div class="font-size-h4">728</div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                            <div class="font-size-h4">$7,860</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block pull-r-l">
                <div class="block-header bg-body-light">
                    <h3 class="block-title"><i class="fa fa-fw fa-users font-size-default mr-5"></i>Friends</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <ul class="nav-users push">
                        <li>
                            <a href="javascript:void(0)">
                                <img class="img-avatar" src="jpg/avatar3.jpg" alt="">
                                <i class="fa fa-circle text-success"></i> Barbara Scott
                                <div class="font-w400 font-size-xs text-muted">Photographer</div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img class="img-avatar" src="jpg/avatar9.jpg" alt="">
                                <i class="fa fa-circle text-success"></i> Jose Mills
                                <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img class="img-avatar" src="jpg/avatar1.jpg" alt="">
                                <i class="fa fa-circle text-warning"></i> Barbara Scott
                                <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img class="img-avatar" src="jpg/avatar13.jpg" alt="">
                                <i class="fa fa-circle text-danger"></i> Ralph Murray
                                <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="block pull-r-l">
                <div class="block-header bg-body-light">
                    <h3 class="block-title">
                        <i class="fa fa-fw fa-clock-o font-size-default mr-5"></i>Activity
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <ul class="list list-activity">
                        <li>
                            <i class="si si-wallet text-success"></i>
                            <div class="font-w600">+$29 New sale</div>
                            <div>
                                <a href="javascript:void(0)">Admin Template</a>
                            </div>
                            <div class="font-size-xs text-muted">5 min ago</div>
                        </li>
                        <li>
                            <i class="si si-close text-danger"></i>
                            <div class="font-w600">Project removed</div>
                            <div>
                                <a href="javascript:void(0)">Best Icon Set</a>
                            </div>
                            <div class="font-size-xs text-muted">26 min ago</div>
                        </li>
                        <li>
                            <i class="si si-pencil text-info"></i>
                            <div class="font-w600">You edited the file</div>
                            <div>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-file-text-o"></i> Docs.doc
                                </a>
                            </div>
                            <div class="font-size-xs text-muted">3 hours ago</div>
                        </li>
                        <li>
                            <i class="si si-plus text-success"></i>
                            <div class="font-w600">New user</div>
                            <div>
                                <a href="javascript:void(0)">StudioWeb - View Profile</a>
                            </div>
                            <div class="font-size-xs text-muted">5 hours ago</div>
                        </li>
                        <li>
                            <i class="si si-wrench text-warning"></i>
                            <div class="font-w600">App v5.5 is available</div>
                            <div>
                                <a href="javascript:void(0)">Update now</a>
                            </div>
                            <div class="font-size-xs text-muted">8 hours ago</div>
                        </li>
                        <li>
                            <i class="si si-user-follow text-pulse"></i>
                            <div class="font-w600">+1 Friend Request</div>
                            <div>
                                <a href="javascript:void(0)">Accept</a>
                            </div>
                            <div class="font-size-xs text-muted">1 day ago</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="block pull-r-l">
                <div class="block-header bg-body-light">
                    <h3 class="block-title">
                        <i class="fa fa-fw fa-pencil font-size-default mr-5"></i>Profile
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="https://demo.pixelcave.com/codebase/be_pages_dashboard.php" method="post"
                          onsubmit="return false;">
                        <div class="form-group mb-15">
                            <label for="side-overlay-profile-name">Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="side-overlay-profile-name"
                                       name="side-overlay-profile-name" placeholder="Your name.."
                                       value="{{Auth::user()->first_name.' '.Auth::user()->last_name}}">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            </div>
                        </div>
                        <div class="form-group mb-15">
                            <label for="side-overlay-profile-email">Email</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="side-overlay-profile-email"
                                       name="side-overlay-profile-email" placeholder="Your email.."
                                       value="john.smith@example.com">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            </div>
                        </div>
                        <div class="form-group mb-15">
                            <label for="side-overlay-profile-password">New Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="side-overlay-profile-password"
                                       name="side-overlay-profile-password" placeholder="New Password..">
                                <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                            </div>
                        </div>
                        <div class="form-group mb-15">
                            <label for="side-overlay-profile-password-confirm">Confirm New Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control"
                                       id="side-overlay-profile-password-confirm"
                                       name="side-overlay-profile-password-confirm"
                                       placeholder="Confirm New Password..">
                                <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-block btn-alt-primary">
                                    <i class="fa fa-refresh mr-5"></i> Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="block pull-r-l">
                <div class="block-header bg-body-light">
                    <h3 class="block-title">
                        <i class="fa fa-fw fa-wrench font-size-default mr-5"></i>Settings
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row gutters-tiny">
                        <div class="col-6">
                            <div class="custom-controls-stacked">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="side-overlay-settings-status" name="side-overlay-settings-status"
                                           value="1" checked>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Online Status</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="side-overlay-settings-public-profile"
                                           name="side-overlay-settings-public-profile" value="1">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Public Profile</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="side-overlay-settings-notifications"
                                           name="side-overlay-settings-notifications" value="1" checked>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Notifications</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="custom-controls-stacked">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="side-overlay-settings-updates" name="side-overlay-settings-updates"
                                           value="1">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Auto updates</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="side-overlay-settings-api-access"
                                           name="side-overlay-settings-api-access" value="1" checked>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">API Access</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="side-overlay-settings-limit-requests"
                                           name="side-overlay-settings-limit-requests" value="1">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">API Requests</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>

<nav id="sidebar">
    <div id="sidebar-scroll">
        <div class="sidebar-content">
            <div class="content-header content-header-fullrow px-15">
                <div class="content-header-section sidebar-mini-visible-b">
<span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
<span class="text-dual-primary-dark">T</span><span class="text-primary">C</span>
</span>
                </div>
                <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r"
                            data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <div class="content-header-item">
                        <a class="link-effect font-w700" href="{{url('')}}">
                            <i class="si si-fire text-primary"></i>
                            <span class="font-size-xl text-dual-primary-dark">TL</span><span
                                    class="font-size-xl text-primary">Careers</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-side content-side-full content-side-user px-10 align-parent">
                <div class="sidebar-mini-visible-b align-v animated fadeIn">
                    <img class="img-avatar img-avatar32" src="{{Storage::url(Auth::user()->avatar_location)}}"
                         alt="">
                </div>
                <div class="sidebar-mini-hidden-b text-center">
                    <a class="img-link" href="javascript:void(0)">
                        <img class="img-avatar" src="{{Storage::url(Auth::user()->avatar_location)}}" alt="">
                    </a>
                    <ul class="list-inline mt-10">
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase"
                               href="javascript:void(0)">{{title_case(Auth::user()->first_name)}}</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark"
                                href="{{url('')}}">
                                <i class="si si-home"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="si si-logout"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li>
                        <a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i><span
                                    class="sidebar-mini-hide">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{url('/backend')}}"><i class="si si-user"></i><span
                                    class="sidebar-mini-hide">Admin Panel</span></a>
                    </li>
                    <li class="nav-main-heading"><span class="sidebar-mini-visible">Jobs</span><span
                                class="sidebar-mini-hidden">Jobs</span></li>
                    <li>
                        <a href="{{url('/admin/jobs')}}"><i class="si si-briefcase"></i><span
                                    class="sidebar-mini-hide">View Jobs</span></a>
                    </li>
                    <li class="nav-main-heading"><span class="sidebar-mini-visible">Learning Management</span><span
                                class="sidebar-mini-hidden">Learning Management</span></li>
                    <li>
                        <a href="{{url('/learning/admin')}}"><i class="si si-book-open"></i><span
                                    class="sidebar-mini-hide">LMS</span></a>
                    </li>
                    @can('user_management_access')
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                <i class="si si-users"></i>
                                <span class="title">@lang('global.user-management.title')</span>
                            </a>
                            <ul>
                                @can('permission_access')
                                    <li>
                                        <a class="{{ $request->segment(3) == 'permissions' ? 'active' : '' }}"
                                           href="{{ route('admin.permissions.index') }}">
                                                <span class="title">
                                @lang('global.permissions.title')
                            </span>
                                        </a>
                                    </li>
                                @endcan
                                @can('role_access')
                                    <li>
                                        <a class="{{ $request->segment(3) == 'roles' ? 'active' : '' }}"
                                           href="{{ route('admin.roles.index') }}">
                                                <span class="title">
                                @lang('global.roles.title')
                            </span>
                                        </a>
                                    </li>
                                @endcan
                                @can('user_access')
                                    <li>
                                        <a class="{{ $request->segment(3) == 'users' ? 'active' : '' }}"
                                           href="{{ route('admin.users.index') }}">
                                                <span class="title">
                                @lang('global.users.title')
                            </span>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>

                    @endcan
                    @can('course_access')
                        <li>
                            <a class="{{ $request->segment(2) == 'courses' ? 'active' : '' }}"
                               href="{{ route('admin.courses.index') }}">
                                <i class="si si-note"></i>
                                <span class="sidebar-mini-hide">@lang('global.courses.title')</span>
                            </a>
                        </li>
                    @endcan

                    @can('lesson_access')
                        <li>
                            <a class="{{ $request->segment(2) == 'lessons' ? 'active' : '' }}"
                               href="{{ route('admin.lessons.index') }}">
                                <i class="si si-list"></i>
                                <span class="sidebar-mini-hide">@lang('global.lessons.title')</span>
                            </a>
                        </li>
                    @endcan

                    @can('question_access')
                        <li>
                            <a class="{{ $request->segment(2) == 'questions' ? 'active' : '' }}"
                               href="{{ route('admin.questions.index') }}">
                                <i class="si si-question"></i>
                                <span class="sidebar-mini-hide">@lang('global.questions.title')</span>
                            </a>
                        </li>
                    @endcan

                    @can('questions_option_access')
                        <li>
                            <a class="{{ $request->segment(2) == 'questions_options' ? 'active' : '' }}"
                               href="{{ route('admin.questions_options.index') }}">
                                <i class="si si-options"></i>
                                <span class="sidebar-mini-hide">@lang('global.questions-options.title')</span>
                            </a>
                        </li>
                    @endcan

                    @can('test_access')
                        <li>
                            <a class="{{ $request->segment(2) == 'tests' ? 'active' : '' }}"
                               href="{{ route('admin.tests.index') }}">
                                <i class="si si-pencil"></i>
                                <span class="sidebar-mini-hide">@lang('global.tests.title')</span>
                            </a>
                        </li>
                    @endcan

                    <li>
                        <a class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}"
                           href="{{ route('change_password') }}">
                            <i class="si si-lock-open"></i>
                            <span class="sidebar-mini-hide">Change password</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="si si-logout"></i>
                            <span class="sidebar-mini-hide">@lang('global.app_logout')</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</nav>