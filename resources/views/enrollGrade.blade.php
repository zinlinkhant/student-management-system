<x-app-layout>
    <div class="flex justify-center items-center h-screen">
        <div class="p-6 bg-white rounded-lg shadow-lg">
            <form action="{{ route('enrollGradeUser') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <input type="hidden" name="student_id" value="{{ $user->student->id }}">
                    <label for="grade" class="block text-gray-700 font-bold mb-2">Select Grade:</label>
                    <select name="classroom_id" id="grade"
                        class="block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        @foreach ($grades as $grade)
                            <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Submit
                </button>
            </form>
        </div>
    </div>

</x-app-layout>
