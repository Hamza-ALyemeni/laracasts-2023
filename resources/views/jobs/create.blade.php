<x-layout>
    <x-slot:heading>
        Job Creation Page
    </x-slot:heading>

   <form method="POST" action="/jobs">
    @csrf
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Create a new job</h2>
            <p class="mt-1 text-sm/6 text-gray-600">We just need a handful of details from you.</p>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form-field>
                    <x-label for="title">Title</x-label>
                    <div class="mt-2">
                        <x-form-input id="title" name="title" placeholder="CEO" required/>
                        <x-error name="title" />
                    </div>
                </x-form-field>
                
                <x-form-field>
                    <x-label for="salary">salary</x-label>
                    <div class="mt-2">
                        <x-form-input id="salary" name="salary" placeholder="$50000"/>
                        <x-error name="salary" />
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
    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
    <x-form-button>Save</x-form-button>
  </div>
</form>



</x-layout>
