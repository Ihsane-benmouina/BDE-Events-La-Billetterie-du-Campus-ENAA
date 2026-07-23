@if(session('success'))
<div class="mb-6 rounded-2xl bg-emerald-50/80 backdrop-blur-md border border-emerald-200/60 p-4 text-emerald-800 text-sm font-medium shadow-sm flex items-center gap-3">
    <svg class="w-5 h-5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 9 0 0118 0z"></path></svg>
    <div>{{ session('success') }}</div>
</div>
@endif

@if(session('error'))
<div class="mb-6 rounded-2xl bg-rose-50/80 backdrop-blur-md border border-rose-200/60 p-4 text-rose-800 text-sm font-medium shadow-sm flex items-center gap-3">
    <svg class="w-5 h-5 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 9 0 0118 0z"></path></svg>
    <div>{{ session('error') }}</div>
</div>
@endif