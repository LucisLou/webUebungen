<?php include('../inc/dbh.inc.php');

$cid = $_POST['cid'];

$statement = "SELECT * FROM customers WHERE CID = ?";
$query = $dbh->prepare($statement);
$query->execute(array($cid));
$result = $query->fetchAll();
$data = array();
$i = 0;

foreach($result as $row) {
    foreach($row as $value) {
        $data[$i] = $value;
        $i++;
    }
}

$dataString = implode(';', $data);
//cid,cid,compname,compname,contact,contact,tel,tel,address,address, zip,zip,uid,uid,createdate,createdate,editdate,editdate
//weird stuff happening here, so everything is doubled. A bug that probably has to do with the foreach loop but my brain stopped functioning.
//0    1    2       3        4       5       6   7   8      9        10  11  12  13   14         15        16        17
echo $dataString;

?> 