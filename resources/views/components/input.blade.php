@props([
    'label',
    'name',
    'type' => 'text',
])

<div class="mb-4 text-left">
    <label for="{{ $name }}" class="block mb-1.5 text-xs font-bold uppercase tracking-wider text-slate-500 ml-1">
        {{ $label }}
    </label>

    <div class="relative">
        <input
            id="{{ $name }}"
            type="{{ $type }}"
            name="{{ $name }}"
            value="{{ old($name) }}"
            {{ $attributes }}
            class="w-full rounded-2xl border border-slate-200/80 bg-white/80 px-4 py-3.5 text-slate-800 placeholder-slate-400 font-medium text-sm
                   shadow-sm transition-all duration-200
                   focus:border-teal-500 focus:bg-white focus:ring-4 focus:ring-teal-500/10 outline-none
                   @error($name) border-rose-400 bg-rose-50/30 focus:border-rose-500 focus:ring-rose-500/10 @enderror">
    </div>

    @error($name)
        <p class="mt-1.5 ml-1 text-xs font-semibold text-rose-500">
            {{ $message }}
        </p>
    @enderror
</div>