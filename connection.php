<?php

$hostDB = 'ec2-34-231-177-125.compute-1.amazonaws.com';
$portDB = '5432';
$nameDB = 'dd0k925ibut0fj';
$userDB = 'ykpdasbwufmdih';
$pwDB = '1f03335c0b08cf4bdf48042632e4fa0dc42c6481b507e654103c652312fc4016';

$connection = pg_connect("host=$hostDB port=$portDB dbname=$nameDB user=$userDB password=$pwDB");

if($connection){

}else{
 
}
?>