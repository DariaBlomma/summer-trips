<?php
session_start();
$_SESSION['id'] = session_id();
$id = $_SESSION['id'];

// // get json
$json = file_get_contents('php://input');
// // data is object
$data = json_decode($json);

//Устанавливаем доступы к базе данных:
$host = '127.0.0.1';
//  $host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = 'root'; //пароль, по умолчанию пустой
$db_name = 'avengers'; //имя базы данных

// для хостинга спринтхост
// $host = 'localhost'; 
// $user = 'f0497458_root'; 
// $password = 'root'; 
// $db_name = 'f0497458_avengers'; 

//Соединяемся с базой данных используя наши доступы:
$mysqli = new mysqli($host, $user, $password, $db_name);

$mysqli->query("CREATE TABLE IF NOT EXISTS players(
    unique_id VARCHAR(50),
    first_name VARCHAR(20),
    last_name VARCHAR(20),
    PRIMARY KEY (unique_id)
    )");
$mysqli->query("CREATE TABLE IF NOT EXISTS points(
    lesson_id INT AUTO_INCREMENT,
    player_id VARCHAR(50),
    lesson_number INT,
    lesson_points INT,
    homework INT,
    per_page INT,
    additional_tasks INT,
    PRIMARY KEY (lesson_id),
    UNIQUE (player_id, lesson_number),
    FOREIGN KEY (player_id) REFERENCES players (unique_id) 
    )");

if ($data !== null) {
// обратились к свойству объекта
    $name = $data->name;
    $lesson = $data->lesson;
    $points = $data->points;
    // coins is per page
    $coins = $data->coins;
    $hw = $data->hw;
    $add_task = $data->additional;
// записываем игрока и баллы со страницы при его регистрации
    $mysqli->query("INSERT INTO players(unique_id, first_name) VALUES ('$id', '$name') 
    ON DUPLICATE KEY UPDATE unique_id='$id', first_name='$name'");

    $mysqli->query("INSERT INTO points
    (player_id, lesson_number, lesson_points, homework, per_page, additional_tasks) VALUES
        ((SELECT unique_id FROM players WHERE unique_id = '$id'),'$lesson', '$points', '$hw', '$coins', '$add_task')
        ON DUPLICATE KEY UPDATE player_id='$id', lesson_number='$lesson', lesson_points='$points', homework='$hw', per_page='$coins', additional_tasks='$add_task'");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Page</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body class="personal-page-body">
    <header class="index-page-header">
        <div class="avatar-wrapper icon real-photo shadowed-pic"></div>
        <h1 class="main-title centered lowered"><span class='real-name'></span>-<span class='hero-name'></span></h1>
        <div class="avatar-wrapper icon shadowed-pic hero-photo"></div>
    </header>
    <main>
        <div class="timer">
            <div class="timer-title">
            </div>
            <div class="timer-action">
                Time to win
            </div>
                <span class='timer-numbers' id="timer-hours">19</span>
                <span class='timer-numbers dot1'>:</span>
                <span class='timer-numbers' id="timer-minutes">45</span>
                <span class='timer-numbers dot2'>:</span>
                <span class='timer-numbers' id="timer-seconds">12</span>
                <span class='h-text'>hours</span>
                <span class='m-text'>minutes</span>
                <span class='s-text'>seconds</span>
        </div>
        <div class='game-info-wrapper'>
            <div class='lessons-wrapper'>
                <h3 class='title-3 light'>Lessons</h3>
                <ol class='lessons'>
                    <li><a href='#'>Lesson 1</a></li>
                    <li><a href='#'>Lesson 2</a></li>
                </ol>
            </div>
            <div class='hws-wrapper'>
                <h3 class="title-3 light">Homeworks</h3>
                <ol class='hws'>
                    <li><a href='#'>Hw 1</a></li>
                    <li><a href='#'>Hw 2</a></li>
                </ol>
            </div>
            <div class='additional-tasks-wrapper'>
                <h3 class="title-3 light">Additional tasks</h3>
                <ol class='add-tasks'>
                    <li><a href='#'>Task 1</a></li>
                    <li><a href='#'>Task 2</a></li>
                </ol>
            </div>
            <div class='points-wrapper'>
                <h3 class='title-3 light'>Points</h3>
                <table class='points'>
                    <thead>
                        <tr>
                            <th class='number'>Number</th>
                            <th>Lesson</th>
                            <th>HW</th>
                            <th>Per page</th>
                            <th>Add. tasks</th>
                            <!-- <th class='total'>Total</th> -->
                        </tr>
                    </thead>
<?php 
echo $id;
?>
                    <!-- <tr> -->
                        <!-- <th class='number'>1</th> -->
<?php
$result = $mysqli->query("SELECT lesson_number, lesson_points, homework, per_page, additional_tasks 
FROM points 
WHERE player_id = 
(SELECT unique_id FROM players WHERE unique_id = '$id')");

$row = $result->fetch_assoc();
foreach ($result as $row) {
    echo "
    <tr>
        <td class='number'>". $row['lesson_number'] . "</td>
        <td class='to-count'>". $row['lesson_points'] . "</td>
        <td class='to-count'>". $row['homework'] . "</td>
        <td class='to-count'>". $row['per_page'] . "</td>
        <td class='to-count'>". $row['additional_tasks'] . "</td>
    </tr>";
}
?>
                        <!-- <th>12</th>
                        <th>10</th>
                        <th>0</th>
                        <th>0</th> -->
                        <!-- <th class='total'>22</th>
                    </tr> -->
                    <tfoot>
                        <tr>
                            <td colspan='4' class='total bold'>Total</td>
                            <td class='total bold sum'>22</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </main>
    <footer>
    
    </footer>
    <script src='scripts/personalPage.js'></script>
</body>
</html>