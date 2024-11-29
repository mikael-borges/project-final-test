<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $artifact?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="discovery_time" :value="__('Discovery Time')"/>
        <x-text-input id="discovery_time" name="discovery_time" type="text" class="mt-1 block w-full" :value="old('discovery_time', $artifact?->discovery_time)" autocomplete="discovery_time" placeholder="Discovery Time"/>
        <x-input-error class="mt-2" :messages="$errors->get('discovery_time')"/>
    </div>
    <div>
        <x-input-label for="code" :value="__('Code')"/>
        <x-text-input id="code" name="code" type="text" class="mt-1 block w-full" :value="old('code', $artifact?->code)" autocomplete="code" placeholder="Code"/>
        <x-input-error class="mt-2" :messages="$errors->get('code')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>