@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-md overflow-hidden shadow-md">
            <div class="p-6">
                <form action="{{ route('apiads.update', $ad->id) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- Adiciona o método PUT para atualização -->

                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">
                            Título da Propaganda:
                        </label>
                        <input value="{{$ad->title}}" type="text" name="title" id="title" class="w-full border rounded-md py-2 px-3" required>
                    </div>

                    <div class="mb-4">
                        <label for="content" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">
                            Descrição da Promoção:
                        </label>
                        <input value="{{$ad->content}}" type="textarea" name="content" id="content" class="w-full border rounded-md py-2 px-3" required>
                    </div>

                    <div class="mb-4">
                        <label for="sale_id" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">
                            ID da Promoção:
                        </label>
                        <input value="{{$ad->sale_id}}" type="text" name="sale_id" id="sale_id" class="w-full border rounded-md py-2 px-3" required>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">
                            Editar Propaganda
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
