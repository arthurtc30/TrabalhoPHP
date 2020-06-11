<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho PHP</title>
</head>
<body>
    <h2 style="text-align: center;">Seleção de teste</h2>
    <hr />

    <form action="" method="POST">
        <h4>Criar teste</h4>

        <label>Nome: </label>
        <input type="text" />

        <label>Pontuação mínima: </label>
        <input type="number" min="0" max="10" />
    
        <button>Criar teste</button>
    </form>

    <form action="" method="POST">
        <input type="text" name="enunciado" id="enunciado" placeholder="Enunciado..." />

        <input type="text" name="questaoA" id="questaoA" placeholder="Texto resposta A..." />

        <input type="text" name="questaoB" id="questaoB" placeholder="Texto resposta B..." />

        <input type="text" name="questaoC" id="questaoC" placeholder="Texto resposta C..." />

        <input type="text" name="questaoD" id="questaoD" placeholder="Texto resposta D..." />

        <input type="text" name="questaoE" id="questaoE" placeholder="Texto resposta E..." />

        <label>Correta: </label>
        <select>
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
            <option>E</option>
        </select>

        <button>Salvar questão</button>
    </form>
</body>
</html>