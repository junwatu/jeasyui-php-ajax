<?php
/**
 * Setting Database MySQL
 */

function getConn(){

    $connection_uri = 'mysql:host=localhost;dbname=tododb';
    $username= 'root';
    $password='developm3nt';

    try {
        $conn = new PDO($connection_uri, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        return false;
    }
}

function getPostData(){
    $dateData = $_POST['dateTimeData'];
    $todate = date('Y-d-m H:i', strtotime(str_replace('-', '/', $dateData)));

    return $todate;
}

function echoData(){
    getConn();
    $data = getPostData();
    echo "Format (Y-d-m H:i) : ".$data;
}

function saveData(){
    $conn = getConn();

    $data = getPostData();

    $stmt = $conn->prepare("INSERT INTO datetime_data VALUES(:id,:waktu)");
    $stmt->execute(array(
        ':id' => 1,
        ':waktu' => $data
    ));

    echo $stmt->rowCount();
}

// Main

saveData();

?>