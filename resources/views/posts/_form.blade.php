@csrf

<label class="uppercase text-gray-700 dark:text-gray-100 text-xs">Título</label>
<span class="text-xs text-red-600">@error('title') {{ $message}} @enderror</span>
<input type="text" name="title" class="rounded dark:text-gray-800 border-gray-600 w-full mb-4" value="{{ old('title', $post->title) }}">

<label class="uppercase text-gray-700 dark:text-gray-100 text-xs">Contenido</label>
<span class="text-xs text-red-600">@error('body') {{ $message}} @enderror</span>
<textarea name="body" rows="5" class="rounded dark:text-gray-800 border-gray-600 w-full mb-4">{{ old('body', $post->body) }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-indigo-600 dark:bg-indigo-600 rounded px-4 py-2">
</div>