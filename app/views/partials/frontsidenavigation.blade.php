<div id="sidebar" class="sidebar">
    <ul class="nav nav-list">
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="menu-icon fa fa-building"></i><span class="menu-text">Hostels</span></a><b class="arrow fa fa-angle-down"></b>
            <ul class="submenu nav-hide">
                <li><a href="{{ URL::to('hostels') }}">Hostels</a></li>
                <li><a href="{{ URL::to('hostels/create') }}">Create a Hostel</a></li>
            </ul>
        </li>
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="menu-icon fa fa-calendar"></i><span class="menu-text">Events</span></a><b class="arrow fa fa-angle-down"></b>
            <ul class="submenu nav-hide">
                <li><a href="{{ URL::to('events') }}">Events</a></li>
                <li><a href="{{ URL::to('events/create') }}">Create an Event</a></li>
                <li class="divider"></li>
                <li><a href="{{ URL::to('eventtypes') }}">Event Types</a></li>
                <li><a href="{{ URL::to('eventtypes/create') }}">Create an Event Type</a></li>
            </ul>
        </li>
    </ul>
</div>