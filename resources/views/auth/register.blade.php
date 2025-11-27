<x-layout>
    <x-slot:heading>
        Sign Up 
    </x-slot:heading>

   <form method="POST" action="/register">
    @csrf
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form-field>
                    <x-label for="first_name">First Name</x-label>
                    <div class="mt-2">
                        <x-form-input id="first_name" name="first_name" required/>
                        <x-error name="first_name" />
                    </div>
                </x-form-field>
                
                <x-form-field>
                    <x-label for="last_name">Last Name</x-label>
                    <div class="mt-2">
                        <x-form-input id="last_name" name="last_name" required/>
                        <x-error name="last_name" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-label for="email">Email</x-label>
                    <div class="mt-2">
                        <x-form-input id="email" name="email" type="email" required/>
                        <x-error name="email" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-label for="password">Password</x-label>
                    <div class="mt-2">
                        <x-form-input id="password" name="password" type="password" required/>
                        <x-error name="password" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-label for="password_confirmation">Confirm Password</x-label>
                    <div class="mt-2">
                        <x-form-input id="password_confirmation" name="password_confirmation" type="password" required/>
                        <x-error name="password_confirmation" />
                    </div>
                </x-form-field>
            </div>
            {{-- @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="text-red-500 text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif --}}
        </div>  
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
    <x-form-button>Sign Up</x-form-button>
  </div>
</form>



</x-layout>
