<form action="{{route('posts.store')}}" method="post">
    @csrf
    <label for="title">Titulo</label>
    <input type="text" name="title" id="title">

    <label for="description">Descrição</label>
    <input type="text" name="description" id="description">

    <label for="content">Conteúdo</label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>

    <label for="slug">Slug</label>
    <input type="text" name="slug" id="slug">

    <button>Criar postagem</button>
</form>