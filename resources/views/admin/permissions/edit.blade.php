<x-adminapp>
    <div class="p-5 m-5 bg-white">
        <span class="bg-blue-800 px-5 py-2 text-white mb-5">Assign role to permission</span>
        <form action="{{ route('admin.permissions.roles') }}" method="POST">
            @csrf
            <input type="hidden" name="permission" value="{{ $permission->name }}">
            <h1 class="text-xl mb-3 mt-5">{{ $permission->name }}</h1>
            <select name="role" id="" class="rounded-md">
                @foreach ($roles as $role)
                    <option name='role' value="{{ $role->name }}">{{ $role->name }}</option>
                @endforeach
            </select>
            <input type="submit" value="submit" class="block px-5 py-2 mt-3 bg-blue-500 text-white rounded-lg">
        </form>
    </div>


</x-adminapp>
