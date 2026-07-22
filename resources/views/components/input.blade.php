@props([
    'label',
    'name',
    'type' => 'text',
])

<div class="mb-5">

    <label
        for="{{ $name }}"
        class="block mb-2 text-sm font-semibold text-slate-700">

        {{ $label }}

    </label>

    <input

        id="{{ $name }}"

        type="{{ $type }}"

        name="{{ $name }}"

        value="{{ old($name) }}"

        {{ $attributes }}

        class="w-full rounded-xl border border-slate-300
               px-4 py-3
               focus:border-lime-500
               focus:ring-2
               focus:ring-lime-300
               outline-none
               transition
               @error($name) border-red-500 @enderror">

    @error($name)

        <p class="mt-2 text-sm text-red-600">

            {{ $message }}

        </p>

    @enderror

</div>