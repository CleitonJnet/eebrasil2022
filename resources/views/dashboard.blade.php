<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ministerial Management System') }}
        </h2>
    </x-slot>

    <div class="py-12" data-aos="zoom-in-up" data-aos-duration="200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        {{ __('Available resources: ') }}
                    </div>

                    <div class="mt-6 mb-8 text-gray-500 text-justify italic">
                        {{ __('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius quidem quaerat aliquam quam explicabo voluptates eligendi aut hic rerum pariatur, officiis dolorum magnam architecto non fugiat sapiente praesentium repellendus doloribus!') }}
                    </div>
                </div>


        </div>
    </div>
</x-app-layout>
