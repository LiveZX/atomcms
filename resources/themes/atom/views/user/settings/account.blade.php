<x-app-layout>
    <div class="col-span-12 md:col-span-3 flex flex-col gap-y-3">
        <x-user.settings.settings-navigation />
    </div>

    <div class="col-span-12 md:col-span-9 flex flex-col gap-y-3">
        <div class="rounded-lg bg-white shadow p-4">
            <x-messages.flash-messages />

            <form action="{{ route('settings.account.update') }}" method="POST" class="flex flex-col gap-y-4">
                @method('PUT')
                @csrf

                <div class="flex flex-col gap-y-1">
                    <x-form.label for="mail">
                        {{ __('E-mail') }}

                        <x-slot:info>
                            Make sure to use an email that you remember, if you ever lose your password, your email will be required.
                        </x-slot:info>
                    </x-form.label>

                    <x-form.input name="mail" type="email" value="{{ $user->mail }}" :autofocus="true" />
                </div>

                <div class="flex flex-col gap-y-1">
                    <x-form.label for="username">
                        {{ __('Username') }}

                        <x-slot:info>
                            {{ __('Your username is what you and others will see in-game.') }}
                        </x-slot:info>
                    </x-form.label>

                    <x-form.input name="username" value="{{ $user->username }}" />
                </div>

                <div class="flex flex-col gap-y-1">
                    <x-form.label for="motto">
                        {{ __('Motto') }}

                        <x-slot:info>
                            {{ __('Spice up your profile with a nice motto.') }}
                        </x-slot:info>
                    </x-form.label>

                    <x-form.input name="motto" value="{{ $user->motto }}" />
                </div>

                <div class="w-full flex justify-start md:justify-end">
                    <x-form.secondary-button classes="lg:w-1/6">
                        {{ __('Update settings') }}
                    </x-form.secondary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
