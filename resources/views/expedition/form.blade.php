<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $expedition?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="duration" :value="__('Duration')"/>
        <x-text-input id="duration" name="duration" type="text" class="mt-1 block w-full" :value="old('duration', $expedition?->duration)" autocomplete="duration" placeholder="Duration"/>
        <x-input-error class="mt-2" :messages="$errors->get('duration')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>