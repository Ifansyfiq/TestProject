<title>Users | homepage </title>
<!-- {{$users}} -->

@forelse ($users as $user)
    
    {{$user->name}}

@empty

No Users

@endforelse
