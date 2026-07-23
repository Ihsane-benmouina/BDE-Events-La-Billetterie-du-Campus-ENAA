<div class="grid grid-cols-1 md:grid-cols-2 gap-5">

    <div class="space-y-1.5">
        <label class="block text-xs font-bold uppercase tracking-wider text-slate-500">Titre</label>
        <input
            type="text"
            name="title"
            value="{{ old('title', $event->title ?? '') }}"
            class="w-full rounded-2xl border border-slate-200 bg-slate-50/50 px-4 py-3 text-slate-800 font-medium text-sm focus:bg-white focus:border-teal-500 focus:ring-4 focus:ring-teal-500/10 outline-none transition">
        @error('title')
            <p class="text-rose-500 text-xs font-semibold mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="space-y-1.5">
        <label class="block text-xs font-bold uppercase tracking-wider text-slate-500">Lieu</label>
        <input
            type="text"
            name="location"
            value="{{ old('location', $event->location ?? '') }}"
            class="w-full rounded-2xl border border-slate-200 bg-slate-50/50 px-4 py-3 text-slate-800 font-medium text-sm focus:bg-white focus:border-teal-500 focus:ring-4 focus:ring-teal-500/10 outline-none transition">
        @error('location')
            <p class="text-rose-500 text-xs font-semibold mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="md:col-span-2 space-y-1.5">
        <label class="block text-xs font-bold uppercase tracking-wider text-slate-500">Description</label>
        <textarea
            name="description"
            rows="4"
            class="w-full rounded-2xl border border-slate-200 bg-slate-50/50 px-4 py-3 text-slate-800 font-medium text-sm focus:bg-white focus:border-teal-500 focus:ring-4 focus:ring-teal-500/10 outline-none transition">{{ old('description', $event->description ?? '') }}</textarea>
        @error('description')
            <p class="text-rose-500 text-xs font-semibold mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="space-y-1.5">
        <label class="block text-xs font-bold uppercase tracking-wider text-slate-500">Date</label>
        <input
            type="date"
            name="date"
            value="{{ old('date', $event->date ?? '') }}"
            class="w-full rounded-2xl border border-slate-200 bg-slate-50/50 px-4 py-3 text-slate-800 font-medium text-sm focus:bg-white focus:border-teal-500 focus:ring-4 focus:ring-teal-500/10 outline-none transition">
        @error('date')
            <p class="text-rose-500 text-xs font-semibold mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="space-y-1.5">
        <label class="block text-xs font-bold uppercase tracking-wider text-slate-500">Heure</label>
        <input
            type="time"
            name="time"
            value="{{ old('time', $event->time ?? '') }}"
            class="w-full rounded-2xl border border-slate-200 bg-slate-50/50 px-4 py-3 text-slate-800 font-medium text-sm focus:bg-white focus:border-teal-500 focus:ring-4 focus:ring-teal-500/10 outline-none transition">
        @error('time')
            <p class="text-rose-500 text-xs font-semibold mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="space-y-1.5">
        <label class="block text-xs font-bold uppercase tracking-wider text-slate-500">Prix (DH)</label>
        <input
            type="number"
            step="0.01"
            name="price"
            value="{{ old('price', $event->price ?? '') }}"
            class="w-full rounded-2xl border border-slate-200 bg-slate-50/50 px-4 py-3 text-slate-800 font-medium text-sm focus:bg-white focus:border-teal-500 focus:ring-4 focus:ring-teal-500/10 outline-none transition">
        @error('price')
            <p class="text-rose-500 text-xs font-semibold mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="space-y-1.5">
        <label class="block text-xs font-bold uppercase tracking-wider text-slate-500">Capacité</label>
        <input
            type="number"
            name="capacity"
            value="{{ old('capacity', $event->capacity ?? '') }}"
            class="w-full rounded-2xl border border-slate-200 bg-slate-50/50 px-4 py-3 text-slate-800 font-medium text-sm focus:bg-white focus:border-teal-500 focus:ring-4 focus:ring-teal-500/10 outline-none transition">
        @error('capacity')
            <p class="text-rose-500 text-xs font-semibold mt-1">{{ $message }}</p>
        @enderror
    </div>

</div>