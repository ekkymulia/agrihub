<h1>Ceritanya dashboard</h1>
<h2>{{ $session_id }}</h2>

<h3>{{ session('u_data')->role_id }}</h3>

@if(session('u_data')->role_id == 2)
    <h3>Admin</h3>
@elseif(session('u_data')->role_id == 1)
    <h3>Member</h3>
@endif


<h2>{{ $session_name }}</h2>
<a href="{{ route('logout') }}">Logout Session</a>