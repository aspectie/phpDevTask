<?php

/*
users: id, login, password, object_id
objects: id, name, status */

/*
SELECT users.id, users.login, users.password
FROM users
LEFT JOIN objects
ON users.object_id = objects.id
ORDER BY users.id; */


$sql= "SELECT users.id, users.login, users.password
FROM users
LEFT JOIN objects
ON users.object_id = objects.id
ORDER BY users.id;";


if ($result = $mysqli->query($sql, MYSQLI_USE_RESULT)) {

    if (!$mysqli->query("SET @a:='this will not work'")) {
        printf("Ошибка: %s\n", $mysqli->error);
    }
    $result->close();
}