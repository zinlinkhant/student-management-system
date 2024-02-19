<x-adminapp>
    <div class="p-5 m-5 bg-white rounded-md">
        <h1 class="font-bold text-xl">Create permission</h1>
        <form action="{{ route('admin.permissions.store') }}" method="POST">
            @csrf
            <x-input-label>
                permission name
            </x-input-label>
            <input name="name" type="text" class="rounded-md">
            <input type="submit" value="submit" class="block py-2 px-5 mt-3 rounded-md text-white font-bold bg-blue-500">
        </form>
    </div>
</x-adminapp>
