<x-app-layout>
    <div class="container mx-auto mt-8">
        <div class="max-w-md mx-auto bg-[#2C2760] rounded-lg overflow-hidden shadow-md">
            <div class="bg-primary-bg-color py-4 px-6">
                <h1 class="text-white text-2xl font-semibold">Create Course</h1>
            </div>
            <div class="px-6">
                <form action="{{ route('teacher.store_course') }}" method="POST">
                    @csrf
                    <input type="hidden" name="teacher_id" value="{{ Auth::user()->teacher->id }}">
                    <div class="mb-4">
                        <label for="name" class="block text-white font-bold mb-2">Name:</label>
                        <input type="text" name="name" id="name" class="form-input w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-white font-bold mb-2">Description:</label>
                        <textarea name="description" id="description" rows="3" class="form-textarea w-full"></textarea>
                    </div>
                    <div>
                        <select name="grade_id" id="">
                            @foreach ($classrooms as $c)
                                <option value="{{ $c->grade->id }}">{{ $c->grade->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="flex justify-end mb-2">
                        <input type="submit"
                            class="bg-white text-[#2C2760] py-2 px-4 rounded hover:bg-primary-color focus:outline-none focus:bg-primary-color">

                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
