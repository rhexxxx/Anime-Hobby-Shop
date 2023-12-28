<?php 
$conn = mysqli_connect("localhost", "root", "", "shop");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    return $rows;
}

function search($search){
    $query = "SELECT * FROM product WHERE
        id LIKE '%$search%' OR
        brand LIKE '%$search%' OR
        series LIKE '%$search%' OR
        category LIKE '%$search%' OR
        chara LIKE '%$search%'
    ";
    return query($query);
}
?>