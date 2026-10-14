<?php
session_start();

$hasil = null;
$pesan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = (float) ($_POST['a'] ?? 0);
    $b = (float) ($_POST['b'] ?? 0);
    $operator = $_POST['operator'] ?? '+';
        switch ($operator) {
            case '+':
                $hasil = $a + $b;
                break;
            case '-':
                $hasil = $a - $b;
                break;
            case '*':
                $hasil = $a * $b;
                break;
            case '/':
                if ($b == 0) {
                    $pesan = 'Pembagian dengan nol tidak diperbolehkan.'; } 
                else {
                    $hasil = $a / $b; }
            break;
        default:
            $pesan = 'Operator tidak valid.'; } 

    $_SESSION['hasil'] = $hasil;
    $_SESSION['pesan'] = $pesan;

    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_SESSION['hasil']) || isset($_SESSION['pesan'])) {
    $hasil = $_SESSION['hasil'] ?? null;
    $pesan = $_SESSION['pesan'] ?? '';

    unset($_SESSION['hasil'], $_SESSION['pesan']);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator 계산기</title>
    <style>
        * {
            box-sizing: border-box; }

        body {
            font-family: Arial, sans-serif;
            background-color: #ffd5f7;
            color: #faf6f7;

            display: flex;
            justify-content: center;
            align-items: center;

            min-height: 100vh;
            margin: 0; }

        .kalkulator {
            background-color: #ea9090;
            padding: 30px;
            border-radius: 15px;
            width: 420px;
            text-align: center;
            box-shadow: 0 8px 25px rgb(255, 151, 206); }

        h1 {
            font-size: 28px;
            margin-bottom: 25px; }

        form {
            display: flex;
            gap: 8px;
            justify-content: center; }

        input, select, button {
            padding: 10px;
            border: none;
            border-radius: 6px;
            font-size: 15px; }

        input {
            width: 100px;
            background-color: #ffffff;
            color: #890034;
            border: 1px solid #ffffff; }

        select {
            background-color: #ffffff;
            color: #890034;
            border: 1px solid #890034
            cursor: pointer; }

        button {
            background-color: #ffffff;
            color: #6f6e6e;
            cursor: pointer;
            transition: 0.2s; }

        button:hover {
            background-color: #890034;
            color: white; }

        .hasil {
            margin-top: 25px;
            padding: 15px;
            background-color: #890034;
            border-radius: 8px;
            font-size: 18px; }

        .pesan {
            margin-top: 20px;
            color: #890034; }
    </style>
</head>

<body>
    <div class="kalkulator">
        <h1>계산기</h1>
        <form method="post">
            <input
                type="number"
                step="any"
                name="a"
                placeholder="Angka 1"
                required>

            <select name="operator">
                <option value="+">+</option>
                <option value="-">−</option>
                <option value="*">×</option>
                <option value="/">÷</option>
            </select>

            <input
                type="number"
                step="any"
                name="b"
                placeholder="Angka 2"
                required>

            <button type="submit">Hitung</button>
        </form>

        <?php if ($pesan): ?>
            <p class="pesan">
                <?= htmlspecialchars($pesan) ?>
            </p>
        <?php elseif ($hasil !== null): ?>
            <div class="hasil">
                Hasil:
                <strong>
                    <?= htmlspecialchars((string) $hasil) ?>
                </strong>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>