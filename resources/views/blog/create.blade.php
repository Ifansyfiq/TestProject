<title>Blog | create </title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w   -7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <!-- Blog form -->
            <form method="POST" action="{{route('blog.store')}}">
                @csrf <!--token-->
                <label for="title">Title:</label>
                <br>
                <input type="text" name="title" id="title">
                <br>
                <label for="description">Description:</label>
                <br>
                <input type="text" name="description" id="description">
                <br>
                <button type="submit">Submit</button>
            </form>
            </div>
        </div>
    </div>


</x-app-layout>