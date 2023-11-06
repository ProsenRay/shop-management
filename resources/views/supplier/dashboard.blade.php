<h2>supplier dashboard</h2>
<form method="POST" action="{{ route('logout') }}">
    @csrf
<a href="route('logout')" onclick="event.preventDefault();
this.closest('form').submit();">logout</a>
