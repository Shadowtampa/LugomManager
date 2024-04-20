@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-md overflow-hidden shadow-md">
            <div class="p-6">
                <form action="{{ route('apisocials.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">
                            Nome:
                        </label>
                        <input type="text" name="name" id="name" class="w-full border rounded-md py-2 px-3" required>
                    </div>

                    <div class="mb-4">
                        <label for="api_token" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">
                            API Token:
                        </label>
                        <input type="text" name="api_token" id="api_token" class="w-full border rounded-md py-2 px-3" required>
                    </div>

                    <div class="mb-4">
                        <label for="alias" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">
                            Alias:
                        </label>
                        <input type="text" name="alias" id="alias" class="w-full border rounded-md py-2 px-3" required>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">
                            Adicionar rede social
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
