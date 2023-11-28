<?php

function insertLocation($data)
{
    global $pdo;
    // validation here ...
    $sql = "INSERT INTO `locations` (`user_id` ,`title`, `latitude`, `longitude`, `type`) VALUES (:user_id,:title, :lat, :lng, :typ);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':user_id' => 1, ':title' => $data['title'], ':lat' => $data['lat'], ':lng' => $data['lng'], ':typ' => $data['type']]);
    return $stmt->rowCount();
}
