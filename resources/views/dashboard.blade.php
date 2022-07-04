<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-gray-200 text-center">
                    <p class="text-2xl">Welcome, In this app you'll see the population changes ocurred in the las few years, from a ( DATA BASE ) and ( REST API )</p>
                </div>
                <div class="flex items-center justify-center pt-1 pb-10">
                    <img class="object-center" src="/img/population.png" alt="population" width="180px;">
                </div>               
            </div>
        </div>
    </div>

</x-app-layout>
