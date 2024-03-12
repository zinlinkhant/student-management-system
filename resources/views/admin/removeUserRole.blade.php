<x-adminapp>
    @foreach ($users as $user)
        <div class="px-5 py-3 m-5 bg-white rounded-lg">
            Name : {{ $user->name }} <br>
            email : {{ $user->email }} <br>
            roles : {{ $user->roles->pluck('name') }} <br>
            <form action="{{ route('admin.removeUserRole') }}" method="POST">
                @csrf
                <input type="hidden" name="userId" value="{{ $user->id }}">
                <select name="role" id="" class="px-5 py-2 mt-3   rounded-md">
                    @foreach ($role as $r)
                        <option value="{{ $r->name }}" class="px-5 py-2   rounded-md hover:bg-white">
                            {{ $r->name }}</option>
                    @endforeach
                </select>
                <input type="submit" value="submit" class="px-5 py-2 mt-3 bg-blue-500 text-white rounded-md">
            </form>
        </div>
    @endforeach
</x-adminapp>
