@props(['title', 'value', 'icon'])

@php
    $icons = [
        'layers' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4l8 4-8 4-8-4 8-4zM4 12l8 4 8-4M4 16l8 4 8-4"/></svg>',
        'file-text' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6M12 4v4h4m-6 0H6a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V10l-6-6H12z"/></svg>',
        'send' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4l16 8-16 8v-6l10-2-10-2z"/></svg>',
    ];
@endphp

<div class="bg-white shadow rounded-xl p-5 flex items-center space-x-4 hover:shadow-md transition-all duration-300">
    <div class="p-3 bg-blue-100 text-blue-500 rounded-full">
        {!! $icons[$icon] !!}
    </div>
    <div>
        <p class="text-sm text-gray-500">{{ $title }}</p>
        <p class="text-xl font-semibold text-gray-800">{{ $value }}</p>
    </div>
</div>
