<!-- чтобы создать базы данных:
1.Включить в настройках нужный модуль
2. Логин root, пароль root
3. Проверить вход можно через adminer - дополнительно -->
<?php
// get json
$json = file_get_contents('php://input');
// data is object
$data = json_decode($json);



	//Устанавливаем доступы к базе данных:
        $host = '127.0.0.1';
		//  $host = 'localhost'; //имя хоста, на локальном компьютере это localhost
		$user = 'root'; //имя пользователя, по умолчанию это root
		$password = 'root'; //пароль, по умолчанию пустой
		$db_name = 'avengers'; //имя базы данных

	//Соединяемся с базой данных используя наши доступы:
        $mysqli = new mysqli($host, $user, $password, $db_name);

    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo $mysqli->host_info . "\n";

    $mysqli->query("CREATE TABLE players(
        person_id INT AUTO_INCREMENT,
        first_name VARCHAR(20),
        last_name VARCHAR(20),
        PRIMARY KEY (person_id)
        )");
    $mysqli->query("CREATE TABLE points(
        lesson_id INT AUTO_INCREMENT,
        player_id INT,
        lesson_number INT,
        lesson_points INT,
        homework INT,
        per_page INT,
        additional_tasks INT,
        PRIMARY KEY (lesson_id),
        FOREIGN KEY (player_id) REFERENCES players (person_id)
        )");

    if ($data !== null) {
    // обратились к свойству объекта
        $name = $data->real_name;
        $coins = $data->coins;
    // записываем игрока и баллы со страницы при его регистрации
        $mysqli->query("INSERT INTO players(first_name) VALUES ('$name')");

        $mysqli->query("SELECT person_id FROM players WHERE first_name = '$name'");
        $mysqli->query("INSERT INTO points(player_id, lesson_number, per_page) VALUES
        ((SELECT person_id FROM players WHERE first_name = '$name'), 1, '$coins')");
    }

    // mysqli_close($mysqli);
?>