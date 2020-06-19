<form action="{{route('recados.store')}}" method="post">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="{{old('nome')}}">
    <br />

    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{old('email')}}">
    <br />

    <label for="cidade">Cidade</label>
    <input type="text" name="cidade" id="cidade" value="{{old('cidade')}}">
    <br />

    <label for="recado">Recado</label>
    <textarea name="recado" id="recado" cols="30" rows="10">{{old('recado')}}</textarea>
    <br />

    <button>Criar recado</button>
</form>