<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-4 bg-white"> 

        <livewire:filters :name="$name" :subcategories="$subcategories" :categoryId="$category_id" :genderId="$gender_id" :sizes="$sizes"/>
        </livewire:filters>

    </div>
</x-app-layout>