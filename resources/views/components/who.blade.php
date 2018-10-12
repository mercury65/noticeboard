@if(Auth::guard('web')->check())
<p class="text-success">
     you are logged in as  user
</p> 
@else
<p class="text-danger">
 you are logged out as user
</p>
@endif

@if(Auth::guard('admin')->check())
<p class="text-success">
     you are logged in as admin
</p> 
@else
<p class="text-danger">
    you are logged out as admin
</p>
@endif