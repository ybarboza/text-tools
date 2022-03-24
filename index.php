<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Text Tools</title>
</head>
<body>
    <form action="date.php" method="get">
        Texto:<input type="text" name="texto" id="" placeholder="Insira um texto">
        Tamanho fonte<select name="fonte" id="">
            <option value="8pt">8pt</option>
            <option value="10pt">10pt</option>
            <option value="14pt">14pt</option>
            <option value="20pt">20pt</option>
            <option value="40px">40pt</option>
        </select>
        Cor do texto<input type="color" name="cor" id="" placeholder="Cor do texto">
        <input type="submit" value="Gerar">
    </form>
</body>
</html>