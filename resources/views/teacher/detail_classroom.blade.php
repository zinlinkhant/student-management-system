<x-app-layout>
    <div class="bg-white rounded-lg border border-gray-300 shadow-lg p-6 mb-4">
        <form action="{{ route('teacher.update_classroom', $classroom->id) }}" method="POST">
            @csrf
            @method('PUT')
            <p class="text-gray-600 uppercase text-xs">Classroom</p>
            <input type="text" name="name" value="{{ $classroom->name }}"
                class="block w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">

            <p class="text-gray-900 mt-2 px-5 py-2 border w-fit">{{ $classroom->year }}</p>
            <p class="text-gray-900 mt-2 px-5 py-2 border w-fit">{{ $classroom->grade->name }}</p>

            <p class="text-gray-700 mt-2">Remarks</p>
            <textarea name="remarks"
                class="block w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                rows="4">{{ $classroom->remarks }}</textarea>
            <div class="mt-6">
                <button type="submit"
                    class="inline-block px-4 py-2 bg-blue-600 text-white rounded-md mr-2 hover:bg-blue-700 transition-all">Save
                    Changes</button>
                <a href=""
                    class="inline-block px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition-all">Cancel</a>
            </div>
        </form>
    </div>


</x-app-layout>
