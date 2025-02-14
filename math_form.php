<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <form action="process_math.php" method="post">
        <label for="input1">Número 1:</label>
        <input type="number" id="input1" name="input1" required><br><br>
        <label for="input2">Número 2:</label>
        <input type="number" id="input2" name="input2" required><br><br>
        <label for="operation">Operação:</label>
        <select id="operation" name="operation" required>
            <option value="add">Adição</option>
            <option value="sub">Subtração</option>
            <option value="mul">Multiplicação</option>
            <option value="div">Divisão</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
