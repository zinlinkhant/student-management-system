<x-app-layout>
    @foreach ($students as $student)
        {{ $student->parent }}
    @endforeach
    {{-- @foreach ($parents as $parent)
        {{ $parent->students }}
    @endforeach --}}
</x-app-layout>
