<x-app-layout>
    @foreach ($parents as $parent)
        {{ $parent->students }}
    @endforeach
</x-app-layout>
