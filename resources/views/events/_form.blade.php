<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    <div>
        <label class="block mb-2 font-medium">Titre</label>
        <input
            type="text"
            name="title"
            value="{{ old('title', $event->title ?? '') }}"
            class="w-full border rounded-lg px-4 py-2">
        @error('title')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block mb-2 font-medium">Lieu</label>
        <input
            type="text"
            name="location"
            value="{{ old('location', $event->location ?? '') }}"
            class="w-full border rounded-lg px-4 py-2">
        @error('location')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="md:col-span-2">
        <label class="block mb-2 font-medium">Description</label>
        <textarea
            name="description"
            rows="4"
            class="w-full border rounded-lg px-4 py-2">{{ old('description', $event->description ?? '') }}</textarea>
        @error('description')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block mb-2 font-medium">Date</label>
        <input
            type="date"
            name="date"
            value="{{ old('date', $event->date ?? '') }}"
            class="w-full border rounded-lg px-4 py-2">
        @error('date')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block mb-2 font-medium">Heure</label>
        <input
            type="time"
            name="time"
            value="{{ old('time', $event->time ?? '') }}"
            class="w-full border rounded-lg px-4 py-2">
        @error('time')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block mb-2 font-medium">Prix (DH)</label>
        <input
            type="number"
            step="0.01"
            name="price"
            value="{{ old('price', $event->price ?? '') }}"
            class="w-full border rounded-lg px-4 py-2">
        @error('price')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block mb-2 font-medium">Capacité</label>
        <input
            type="number"
            name="capacity"
            value="{{ old('capacity', $event->capacity ?? '') }}"
            class="w-full border rounded-lg px-4 py-2">
        @error('capacity')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

</div>