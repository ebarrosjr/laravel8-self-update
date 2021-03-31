@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $e)
            <li>{{ $e }}</li>
        @endforeach
    </ul>    
@endif
<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <label for="title">Título:</label>
    @if (isset($post->id))
        <input type="hidden" name="id" value="{{ $post->id }}">
    @endif
    <input type="text" name="title" id="title" value="{{ $post->title ?? old('title') }}">
    <label for="body">Conteúdo</label>
    <textarea name="body" id="body" cols="30" rows="10">{{ $post->body ?? old('body') }}</textarea>
    <button type="submit"> Gravar </button>
</form>