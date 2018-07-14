@php
    $public='';
    if(App::environment('production'))
    $public ='public';
@endphp
        <!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>@yield('title') - {{config('app.name')}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
          content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest | This is the demo of Codebase! You need to purchase a license for legal use! | DEMO">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework | DEMO">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description"
          content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest | This is the demo of Codebase! You need to purchase a license for legal use! | DEMO">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" href="{{asset($public.'/dashboard/png/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset($public.'/dashboard/png/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{asset($public.'/dashboard/png/apple-touch-icon-180x180.png')}}">
    <link rel="stylesheet" id="css-main" href="{{asset($public.'/dashboard/css/codebase.min-1.4.css')}}">
    <link rel="stylesheet" id="css-main" href="{{asset($public.'/dashboard/css/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset($public.'/css/sweetalert.min.css')}}">
    @yield('styles')
</head>
<body>
<div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
    <aside id="side-overlay">
        <div id="side-overlay-scroll">
            <div class="content-header content-header-fullrow">
                <div class="content-header-section align-parent">
                    <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout"
                            data-action="side_overlay_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <div class="content-header-item">
                        <a class="img-link mr-5" href="be_pages_generic_profile.html">
                            <img class="img-avatar img-avatar32" src="{{Storage::url(Auth::user()->avatar_location)}}" alt="">
                        </a>
                        <a class="align-middle link-effect text-primary-dark font-w600"
                           href="be_pages_generic_profile.html">John Smith</a>
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
                                <a href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="jpg/avatar3.jpg" alt="">
                                    <i class="fa fa-circle text-success"></i> Barbara Scott
                                    <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                </a>
                            </li>
                            <li>
                                <a href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="jpg/avatar9.jpg" alt="">
                                    <i class="fa fa-circle text-success"></i> Jose Mills
                                    <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                </a>
                            </li>
                            <li>
                                <a href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="jpg/avatar1.jpg" alt="">
                                    <i class="fa fa-circle text-warning"></i> Barbara Scott
                                    <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                </a>
                            </li>
                            <li>
                                <a href="be_pages_generic_profile.html">
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
                                           value="John Smith">
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
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 316px;">
            <div id="sidebar-scroll" style="overflow: hidden; width: auto; height: 316px;">
                <div class="sidebar-content">
                    <div class="content-header content-header-fullrow px-15">
                        <div class="content-header-section sidebar-mini-visible-b">
<span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
<span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
</span>
                        </div>
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r"
                                    data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <div class="content-header-item">
                                <a class="link-effect font-w700" href="index-2.html">
                                    <i class="si si-fire text-primary"></i>
                                    <span class="font-size-xl text-dual-primary-dark">code</span><span
                                            class="font-size-xl text-primary">base</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="content-side content-side-full content-side-user px-10 align-parent">
                        <div class="sidebar-mini-visible-b align-v animated fadeIn">
                            <img class="img-avatar img-avatar32" src="{{Storage::url(Auth::user()->avatar_location)}}" alt="">
                        </div>
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="{{Storage::url(Auth::user()->avatar_location)}}" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase"
                                       href="be_pages_generic_profile.html">{{title_case(Auth::user()->first_name)}}</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark" data-toggle="layout"
                                       data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                        <i class="si si-drop"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark" href="op_auth_signin.html">
                                        <i class="si si-logout"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li>
                                <a href="{{url('/admin')}}"><i class="si si-home"></i><span
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
                            <li>
                                <a href="{{url('/admin/jobs/add')}}"><i class="si si-plus"></i><span
                                            class="sidebar-mini-hide">Add Jobs</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="slimScrollBar"
                 style="background: rgb(205, 205, 205) none repeat scroll 0% 0%; width: 4px; position: absolute; top: 0px; opacity: 0.9; display: none; border-radius: 7px; z-index: 99; right: 0px; height: 96.4792px;"></div>
            <div class="slimScrollRail"
                 style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 1; z-index: 90; right: 0px;"></div>
        </div>
    </nav>
    <header id="page-header">
        <div class="content-header">
            <div class="content-header-section">
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
                        data-action="sidebar_toggle">
                    <i class="fa fa-navicon"></i>
                </button>
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
                        data-action="header_search_on">
                    <i class="fa fa-search"></i>
                </button>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-options-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="page-header-options-dropdown">
                        <h6 class="dropdown-header">Header</h6>
                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout"
                                data-action="header_fixed_toggle">Fixed Mode
                        </button>
                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary d-none d-lg-block mb-10"
                                data-toggle="layout" data-action="header_style_classic">Classic Style
                        </button>
                        <div class="d-none d-xl-block">
                            <h6 class="dropdown-header">Main Content</h6>
                            <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10"
                                    data-toggle="layout" data-action="content_layout_toggle">Toggle Layout
                            </button>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="be_layout_api.html">
                            <i class="si si-chemistry"></i> All Options (API)
                        </a>
                    </div>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-themes-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-paint-brush"></i>
                    </button>
                    <div class="dropdown-menu min-width-150" aria-labelledby="page-header-themes-dropdown">
                        <h6 class="dropdown-header text-center">Color Themes</h6>
                        <div class="row no-gutters text-center mb-5">
                            <div class="col-4 mb-5">
                                <a class="text-default" data-toggle="theme" data-theme="default"
                                   href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-4 mb-5">
                                <a class="text-elegance" data-toggle="theme"
                                   data-theme="assets/css/themes/elegance.min.css" href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-4 mb-5">
                                <a class="text-pulse" data-toggle="theme" data-theme="assets/css/themes/pulse.min.css"
                                   href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-4 mb-5">
                                <a class="text-flat" data-toggle="theme" data-theme="assets/css/themes/flat.min.css"
                                   href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-4 mb-5">
                                <a class="text-corporate" data-toggle="theme"
                                   data-theme="assets/css/themes/corporate.min.css" href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-4 mb-5">
                                <a class="text-earth" data-toggle="theme" data-theme="assets/css/themes/earth.min.css"
                                   href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout"
                                data-action="sidebar_style_inverse_toggle">Sidebar Style
                        </button>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="be_ui_color_themes.html">
                            <i class="fa fa-paint-brush"></i> All Color Themes
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-header-section">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{title_case(Auth::user()->first_name)}}<i class="fa fa-angle-down ml-5"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right min-width-150"
                         aria-labelledby="page-header-user-dropdown">
                        <a class="dropdown-item" href="be_pages_generic_profile.html">
                            <i class="si si-user mr-5"></i> Profile
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                           href="be_pages_generic_inbox.html">
                            <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                            <span class="badge badge-primary">3</span>
                        </a>
                        <a class="dropdown-item" href="be_pages_generic_invoice.html">
                            <i class="si si-note mr-5"></i> Invoices
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout"
                           data-action="side_overlay_toggle">
                            <i class="si si-wrench mr-5"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="op_auth_signin.html">
                            <i class="si si-logout mr-5"></i> Sign Out
                        </a>
                    </div>
                </div>
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
                        data-action="side_overlay_toggle">
                    <i class="fa fa-tasks"></i>
                </button>
            </div>
        </div>
        <div id="page-header-search" class="overlay-header">
            <div class="content-header content-header-fullrow">
                <form action="https://demo.pixelcave.com/codebase/be_pages_generic_search.php" method="post">
                    <div class="input-group">
<span class="input-group-btn">
<button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
<i class="fa fa-times"></i>
</button>
</span>
                        <input type="text" class="form-control" placeholder="Search or hit ESC.."
                               id="page-header-search-input" name="page-header-search-input">
                        <span class="input-group-btn">
<button type="submit" class="btn btn-secondary">
<i class="fa fa-search"></i>
</button>
</span>
                    </div>
                </form>
            </div>
        </div>
        <div id="page-header-loader" class="overlay-header bg-primary">
            <div class="content-header content-header-fullrow text-center">
                <div class="content-header-item">
                    <i class="fa fa-sun-o fa-spin text-white"></i>
                </div>
            </div>
        </div>
    </header>
    <main id="main-container">
        @yield('content')
    </main>
    <footer id="page-footer" class="opacity-0">
        <div class="content py-20 font-size-xs clearfix">
            <div class="float-right">
                Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="http://goo.gl/vNS3I"
                                                                          target="_blank">pixelcave</a>
            </div>
            <div class="float-left">
                <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">Codebase 1.4</a> &copy; <span
                        class="js-year-copy">2017</span>
            </div>
        </div>
    </footer>
</div>
</div>
<script src="{{asset($public.'/dashboard/js/codebase.min-1.4.js')}}"></script>
<script src="{{asset($public.'/dashboard/js/chart.bundle.min.js')}}"></script>
<script src="{{asset($public.'/dashboard/js/be_pages_dashboard.js')}}"></script>
<script src="{{asset($public.'/dashboard/js/datatables.min.js')}}"></script>
<script src="{{asset($public.'/js/sweetalert.min.js')}}"></script>
<script>(function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'js/analytics.js', 'ga');
    ga('create', 'UA-16158021-6', 'auto');
    ga('send', 'pageview');
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(function () {
        @if(!null == session('status') && !null == session('status'))
        swal("Status", "{!!session('status')!!}", "{!!session('state')!!}");
        @endif
        $('.dataTable').DataTable();
    });
</script>
@yield('scripts')
</body>

</html>