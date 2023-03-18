<title>Blog | homepage </title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w   -7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Table Design  -->
                <table>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                    @forelse ($blogs as $blog)
                    <tr>
                        <td>{{$blog->id}}</td>
                        <td>{{$blog->title}}</td>
                        <td>{{$blog->description}}</td>
                    </tr>
                    @empty

                    <p>no data available</p>

                    @endforelse
                </table>
            </div>
        </div>
    </div>


</x-app-layout>