<x-app-layout>
    @foreach ($classrooms as $class)
        <h1>{{ $class->name }}</h1>
    @endforeach
</x-app-layout>
