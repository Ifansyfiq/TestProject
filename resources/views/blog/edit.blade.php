<title>Blog | edit </title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w   -7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <!-- Blog form -->
            <form method="POST" action="{{route('blog.update', $blog->id)}}">
                @csrf <!--token-->
                @method('PUT')
                <label for="title">Title:</label>   
                <br>
                <input type="text" name="title" id="title" value="{{$blog->title}}">
                <br>
                <label for="description">Description:</label>
                <br>
                <input type="text" name="description" id="description" value="{{$blog->description}}">
                <br>
                <button type="submit">Update</button>
            </form>
            </div>
        </div>
    </div>


</x-app-layout>