<?php   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $question1 = $_POST["question1"];
    $question2 = $_POST["question2"];
    $question3 = $_POST["question3"];

    // Створюємо змінну з даними опитування Для тесту
    $data = "Ім'я: $name\n";
    $data .= "Email: $email\n";
    $data .= "Питання 1: $question1\n";
    $data .= "Питання 2: $question2\n";
    $data .= "Питання 3: $question3\n";
    
    // Створюємо шлях до файлу в папці /var/www/html/mysite/survey/ просто
    $filename = "/var/www/html/mysite/survey/" . date("Y-m-d_H-i-s") . ".txt";
    
    // Зберігаємо дані у файл
    file_put_contents($filename, $data);

    // Час відправки
    $submission_time = date("Y-m-d H:i:s");
    echo "<p>Дякуємо за участь в опитуванні! Ваша відповідь була збережена $submission_time.</p>";
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Опитування - SportyStyle</title>
    <style>
        /* Додайте сюди стил з вашого основного файлу */
    </style>
</head>
<body>

<header>
    <h1>Опитування SportyStyle</h1>
</header>

<nav>
    <!-- Додайте сюди ваше меню навігації  точно-->
</nav>

<div class="content">
    <h2>Форма опитування</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Ім'я:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="question1">Як часто ви займаєтесь спортом?</label><br>
        <input type="radio" id="q1_1" name="question1" value="Щодня">
        <label for="q1_1">Щодня</label><br>
        <input type="radio" id="q1_2" name="question1" value="2-3 рази на тиждень">
        <label for="q1_2">2-3 рази на тиждень</label><br>
        <input type="radio" id="q1_3" name="question1" value="Раз на тиждень">
        <label for="q1_3">Раз на тиждень</label><br>
        <input type="radio" id="q1_4" name="question1" value="Рідше">
        <label for="q1_4">Рідше</label><br><br>

        <label for="question2">Який вид спортивного одягу ви купуєте найчастіше?</label><br>
        <select id="question2" name="question2">
            <option value="Футболки">Футболки</option>
            <option value="Шорти">Шорти</option>
            <option value="Кросівки">Кросівки</option>
            <option value="Спортивні костюми">Спортивні костюми</option>
        </select><br><br>

        <label for="question3">Що для вас найважливіше при виборі спортивного одягу?</label><br>
        <textarea id="question3" name="question3" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Відправити">
    </form>
</div>

<footer>
    <p>&copy; 2024 SportyStyle. Всі права захищені.</p>
</footer>

</body>
</html>