<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $guide?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="expertise" :value="__('Expertise')"/>
        <x-text-input id="expertise" name="expertise" type="text" class="mt-1 block w-full" :value="old('expertise', $guide?->expertise)" autocomplete="expertise" placeholder="Expertise"/>
        <x-input-error class="mt-2" :messages="$errors->get('expertise')"/>
    </div>
    <div>
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $guide?->email)" autocomplete="email" placeholder="Email"/>
        <x-input-error class="mt-2" :messages="$errors->get('email')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>