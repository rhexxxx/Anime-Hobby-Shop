<?php 
$conn = mysqli_connect("localhost", "root", "", "shop");


$totalItems;
function query($query){
    global $conn;
    global $totalItems;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    $totalItems = mysqli_num_rows($result);
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

$nameeror;
$passeror;

function register($data){
    global $conn, $nameeror, $passeror;
    $id = rand(3000,5000);
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn , $data["password2"]);

    $result = (mysqli_query($conn , "SELECT username FROM users WHERE username = '$username'"));
    if(mysqli_fetch_assoc($result)){
        $nameeror = true;
        return false;
    }

    if($password !== $password2){
       $passeror = true;
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO users VALUES('$id','$username','$password')");
    return mysqli_affected_rows($conn);

}
?>