<ul class="navigation">
{{-- if the logged in user is admin --}}
@if(auth()->user()->hasRole('admin'))
<x-dashboard.sidebar-nav
:active="request()->routeIs('admin.job-applications')" href="{{ route('admin.job-applications') }}" title="Job Applications"/>

<x-dashboard.sidebar-nav
    :active="request()->routeIs('admin.form-inputs')" href="{{ route('admin.form-inputs') }}" title="Form Inputs"/>

<x-dashboard.sidebar-nav :active="request()->routeIs('admin.jobs')" href="{{ route('admin.jobs') }}" title="Jobs List" />

<x-dashboard.sidebar-nav :active="request()->routeIs('admin.users')" href="{{ route('admin.users') }}" title="Users List" />



@else

    <x-dashboard.sidebar-nav
    :active="request()->routeIs('dashboard')" href="{{ route('dashboard') }}" title="Dashboard"/>

    {{-- job list --}}
    <x-dashboard.sidebar-nav
    :active="request()->routeIs('joblist')" href="{{ route('joblist') }}" title="Job List"/>

    {{-- applied Jobs --}}

    <x-dashboard.sidebar-nav
    :active="request()->routeIs('appliedjobs')" href="{{ route('appliedjobs') }}" title="Applied Jobs"/>

    <form method="POST" action="{{ route('logout') }}" id="logoutForm">
        @csrf

        <li><a href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"><i class="la la-sign-out"></i>Logout</a></li>
    </form>

    {{--

      <li><a href="dashboard-company-profile.html"><i class="la la-user-tie"></i>Company Profile</a></li>
      <li><a href="dashboard-post-job.html"><i class="la la-paper-plane"></i>Post a New Job</a></li>
      <li><a href="dashboard-manage-job.html"><i class="la la-briefcase"></i> Manage Jobs </a></li>
      <li><a href="dashboard-applicants.html"><i class="la la-file-invoice"></i> All Applicants</a></li>
      <li><a href="dashboard-resumes.html"><i class="la la-bookmark-o"></i>Shortlisted Resumes</a></li>
      <li><a href="dashboard-packages.html"><i class="la la-box"></i>Packages</a></li>
      <li><a href="dashboard-messages.html"><i class="la la-comment-o"></i>Messages</a></li>
      <li><a href="dashboard-resume-alerts.html"><i class="la la-bell"></i>Resume Alerts</a></li>
      <li><a href="dashboard-change-password.html"><i class="la la-lock"></i>Change Password</a></li>
      <li><a href="dashboard-company-profile.html"><i class="la la-user-alt"></i>View Profile</a></li>
      <li><a href="/"><i class="la la-trash"></i>Delete Profile</a></li> --}}
@endif
    </ul>
