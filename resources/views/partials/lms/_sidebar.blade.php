@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="sidebar-mini-hide">@lang('global.app_dashboard')</span>
                </a>
            </li>

            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="sidebar-mini-hide">@lang('global.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('permission_access')
                <li class="{{ $request->segment(2) == 'permissions' ? 'active' : '' }}">
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="sidebar-mini-hide">
                                @lang('global.permissions.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('role_access')
                <li class="{{ $request->segment(2) == 'roles' ? 'active' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="sidebar-mini-hide">
                                @lang('global.roles.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(2) == 'users' ? 'active' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="sidebar-mini-hide">
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
                <a class="{{ $request->segment(2) == 'courses' ? 'active' : '' }}" href="{{ route('admin.courses.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="sidebar-mini-hide">@lang('global.courses.title')</span>
                </a>
            </li>
            @endcan
            
            @can('lesson_access')
            <li>
                <a class="{{ $request->segment(2) == 'lessons' ? 'active' : '' }}" href="{{ route('admin.lessons.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="sidebar-mini-hide">@lang('global.lessons.title')</span>
                </a>
            </li>
            @endcan
            
            @can('question_access')
            <li>
                <a class="{{ $request->segment(2) == 'questions' ? 'active' : '' }}" href="{{ route('admin.questions.index') }}">
                    <i class="fa fa-question"></i>
                    <span class="sidebar-mini-hide">@lang('global.questions.title')</span>
                </a>
            </li>
            @endcan
            
            @can('questions_option_access')
            <li>
                <a class="{{ $request->segment(2) == 'questions_options' ? 'active' : '' }}" href="{{ route('admin.questions_options.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="sidebar-mini-hide">@lang('global.questions-options.title')</span>
                </a>
            </li>
            @endcan
            
            @can('test_access')
            <li>
                <a class="{{ $request->segment(2) == 'tests' ? 'active' : '' }}" href="{{ route('admin.tests.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="sidebar-mini-hide">@lang('global.tests.title')</span>
                </a>
            </li>
            @endcan

            <li>
                <a class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}" href="{{ route('change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="sidebar-mini-hide">Change password</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-sign-out"></i>
                    <span class="sidebar-mini-hide">@lang('global.app_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open(['route' => 'logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('global.logout')</button>
{!! Form::close() !!}
