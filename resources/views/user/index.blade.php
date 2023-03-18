<title>Users | homepage </title>
<!-- {{$users}} -->

<!-- looping -->
@forelse ($users as $user)
    
    {{$user->name}}

@empty

    No Users

@endforelse
