<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Información del Perfil') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Actualiza la información de perfil y la dirección de correo electronico.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Foto') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Selecciona una nueva foto') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Eliminar foto') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Nombre -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
            <x-jet-input id="nombre" type="text" class="mt-1 block w-full" wire:model.defer="state.nombre" autocomplete="nombre" />
            <x-jet-input-error for="nombre" class="mt-2" />
        </div>

        <!-- Apellido -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="apellido" value="{{ __('Apellido') }}" />
            <x-jet-input id="apellido" type="text" class="mt-1 block w-full" wire:model.defer="state.apellido" autocomplete="apellido" />
            <x-jet-input-error for="apellido" class="mt-2" />
        </div>

        <!-- CI -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="ci" value="{{ __('Cedula de Identidad') }}" />
            <x-jet-input id="ci" type="text" class="mt-1 block w-full" wire:model.defer="state.ci" autocomplete="ci" />
            <x-jet-input-error for="ci" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <!-- Genero -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Género') }}" />
            <div class="container flex flex-row mt-2">
                    <div class="form-check form-check-inline px-4">
                        <input class="form-check-input" id="hombre" type="radio" name="genero" value="M" wire:model.defer="state.genero">
                        <label for="hombre">Hombre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="mujer" type="radio" name="genero" value="F" wire:model.defer="state.genero">
                        <label for="mujer">Mujer</label>
                    </div>
                </div> 
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <!-- Fecha nacimiento -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="fecha_nac" value="{{ __('Fecha de Nacimiento') }}" />
            <x-jet-input id="fecha_nac" type="text" class="mt-1 block w-full" wire:model.defer="state.fecha_nac" autocomplete="fecha_nac" />
            <x-jet-input-error for="fecha_nac" class="mt-2" />
        </div>

        <!-- Telefono -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="telefono" value="{{ __('Teléfono') }}" />
            <x-jet-input id="telefono" type="text" class="mt-1 block w-full" wire:model.defer="state.telefono" autocomplete="telefono" />
            <x-jet-input-error for="telefono" class="mt-2" />
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Datos Actualizados Exitósamente.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Guardar') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
