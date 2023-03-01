@csrf

<label class="uppercase text-gray-700 dark:text-gray-100 text-xs">Título</label>
<input type="text" name="title" class="rounded dark:text-gray-800 border-gray-600 w-full mb-4" value = {{ $post->title }}>

<label class="uppercase text-gray-700 dark:text-gray-100 text-xs">Contenido</label>
<textarea name="body" rows="5" class="rounded dark:text-gray-800 border-gray-600 w-full mb-4">{{ $post->body }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-indigo-600 dark:bg-indigo-600 rounded px-4 py-2">
</div>