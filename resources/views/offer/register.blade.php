<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <form class="py-6 flex flex-col justify-center items-center" action="{{ route('offer.add') }}">
        <button class="px-4 py-2 text-sm shadow bg-blue-200 shadow-sky-600 text-sky-700 hover:bg-sky-600 hover:text-sky-100">
        Nova Oferta
        </button>
    </form>

        <div class="py-3 rounded-lg shadow-md shadow-sky-600 flex flex-col justify-center items-center">
            <img style="max-width: 400px"class="object-cover w-full md:w-1/2 lg:w-1/3" src="https://cdn.pixabay.com/photo/2016/12/19/18/21/snowflake-1918794__340.jpg" alt="image"/>
            <div class="px-6  py-4">
                <h4 class="mb-3 text-base font-semibold tracking-tight text-sky-600">
                
                </h4>
                <p class="mb-2 text-sm leading-normal text-justify text-sky-900">
                Oferta XSSSSSSSSSSSSSSSSSSSS
                </p>
                <p class="mb-2 text-sm leading-normal text-justify text-sky-900">
                Oferta XSSSSSSSSSSSSSSSSSS
                </p>
                <p class="mb-2 text-sm leading-normal text-justify text-sky-900">
                Oferta XSSSSSSSSSSS
                </p>
                <div class="flex flex-col justify-center items-center">
                    <form >
                    @csrf
                    @method('DELETE')
                        <button
                        class="
                            px-4
                            py-2
                            text-sm
                            shadow
                            bg-red-200
                            shadow-sky-600
                            text-sky-700
                            hover:bg-sky-600 hover:text-sky-100">
                        Excluir Oferta
                        </button>
                    </form>
                </div>
            </div>
    <x-slot name="scripts">
    </x-slot>
</x-app-layout>
