<x-app-layout>

    <x-guest-layout>
        <form method="POST" action="{{ route('student.register') }}">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <input type="hidden" name="email" value="{{ $user->email }}">
            <input type="hidden" name="password" value="{{ $user->password }}">

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('First Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="fname" required
                    autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="name" :value="__('Last Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="lname" required
                    autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="phone" :value="__('phone')" />
                <x-text-input id="phone" class="block mt-1 w-full" type="number" name="phone" required />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="date" :value="__('date of birth')" />
                <x-text-input id="date" class="block mt-1 w-fit" type="date" name="dob" required />
                <x-input-error :messages="$errors->get('date')" class="mt-2" />
            </div>



            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ms-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>


</x-app-layout>
