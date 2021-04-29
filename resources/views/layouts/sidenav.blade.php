<div class="sidenav">
    <ul>
        @can('admin',Auth::user())
        <li class="{{  request()->is('admin/admin') ? 'active1' : '' }}"><a href="{{ route('admin.index')}}">Admin</a></li>
        @endcan
        <li class="{{ request()->is('user/*')  ? 'active1' : '' }}"> <a href="#">Personal</a>
            <ul>
                <li><a href="{{ route('personal.index')}}">Personal Details</a></li>
                <li><a href="{{ route('personal.contact')}}">Contact Details</a></li>
                <li><a href="{{ route('personal.emergency')}}">Emergency Details</a></li>
                <li><a href="{{ route('personal.photo')}}">Photograph</a></li>
                <li><a href="{{ route('personal.special')}}">Special Leave</a></li>
            </ul></li>
        @can('admin',Auth::user())
        <li class="{{ request()->is('admin/transfer') ? 'active1' : '' }}"><a class="{{ request()->is('admin/*') ? 'active' : '' }}" href="{{ route('admin.transfer')}}">Transfer</a></li>
        @endcan
        @can('admin',Auth::user())
        <li class="{{ request()->is('admin/report') ? 'active1' : '' }}"> <a href="{{ route('admin.reports')}}">Reports</a></li>
        @endcan
        @can('admin',Auth::user())
        <li class="{{ request()->is('admin/payroll') ? 'active1' : '' }}"> <a href="{{ route('admin.payroll')}}">Payroll</a></li>
        @endcan
    </ul>
</div>
