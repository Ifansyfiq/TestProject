<title>Users | homepage </title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w   -7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Table Design  -->
                <table>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        @forelse ($users as $user)
                        <tr>
                            <td>{{$user -> name}}</td>
                            <td>{{$user -> email}}</td>
                        </tr>
                        @empty

                        <p>no data available</p>

                        @endforelse
                </table>
            </div>
        </div>
    </div>


</x-app-layout>