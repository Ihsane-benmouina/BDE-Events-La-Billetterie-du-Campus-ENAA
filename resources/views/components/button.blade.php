<button
{{ $attributes }}
class="w-full group relative inline-flex items-center justify-center overflow-hidden rounded-2xl bg-gradient-to-r from-teal-600 to-emerald-600 px-6 py-3.5 text-sm font-semibold text-white shadow-lg shadow-teal-600/25 transition-all duration-300 hover:shadow-teal-600/40 hover:scale-[1.01] active:scale-[0.99]">
    <span class="relative flex items-center gap-2">
        {{ $slot }}
    </span>
</button>