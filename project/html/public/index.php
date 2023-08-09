<?php

// MySQLテスト
echo "MySQLテスト<br />";
$mysqli = mysqli_connect("mysql", "dev", "dev", "test");
$query = "SELECT * FROM `user`";
$result = $mysqli->query($query);
$rows = array();
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}
var_dump($rows);

echo "<hr />";

// Redisテスト
echo "Redisテスト<br />";
$redis = new Redis();
$redis->connect("redis", 6379);
$redis->set('key', 'value');
echo $redis->get('key');
