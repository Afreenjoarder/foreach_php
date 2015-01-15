<?php
$place0=array('city'=>'tokyo',
    'country'=>'japan',
    'continent'=>'asia');
$place1=array('city'=>'Mexico city',
    'country'=>'Mexico',
    'continent'=>'north america');
$place2=array('city'=>'New york',
    'country'=>'USA',
    'continent'=>'north america');
$place3=array('city'=>'Mumbai',
    'country'=>'India',
    'continent'=>'asia');
$place4=array('city'=>'Seoul',
    'country'=>'Koria',
    'continent'=>'Asia');

$place5=array('city'=>'Shanghi',
    'country'=>'China',
    'continent'=>'Asia');
$place6=array('city'=>'Lagos',
    'country'=>'Nigeria',
    'continent'=>'Africa');
$place7=array('city'=>'Buence Aires',
    'country'=>'Argintina',
    'continent'=>'South america');
$place8=array('city'=>'Cairo',
    'country'=>'Egypt',
    'continent'=>'Africa');
$place9=array('city'=>'London',
    'country'=>'UK',
    'continent'=>'europe');



$places= array(
    0=>array('city'=>'tokyo',
        'country'=>'japan',
        'continent'=>'asia'),
    1=>array('city'=>'Mexico city',
        'country'=>'Mexico',
        'continent'=>'north america'),
    2=>array('city'=>'New york',
        'country'=>'USA',
        'continent'=>'north america'),
    3=>array('city'=>'Mumbai',
        'country'=>'India',
        'continent'=>'asia'),
    4=>array('city'=>'Seoul',
        'country'=>'Koria',
        'continent'=>'Asia'),

    5=>array('city'=>'Shanghi',
        'country'=>'China',
        'continent'=>'Asia'),
    6=>array('city'=>'Lagos',
        'country'=>'Nigeria',
        'continent'=>'Africa'),
    7=>array('city'=>'Buence Aires',
        'country'=>'Argintina',
        'continent'=>'South america'),
    8=>array('city'=>'Cairo',
        'country'=>'Egypt',
        'continent'=>'Africa'),
    9=>array('city'=>'London',
        'country'=>'UK',
        'continent'=>'europe')
);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1> table</h1>
            <table class="table table-bordered">
                <tr>
                    <td>city</td>
                    <td>country</td>
                    <td>continent</td>
                </tr>
                <?php
                foreach($places as $row){
                    ?>
                    <tr>
                        <td><?php echo $row['city']?></td>
                        <td><?php echo $row["country"]?></td>
                        <td><?php echo $row["continent"]?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<!-- /.modal -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
