<?php
$db = new \PDO( 'pgsql:dbname=yourdb; user=youruser') ;
$pdoStatement = $db->query( ' SELECT * FROM table') ;
$iterator = new \IteratorIterator ($pdoStatement) ;
$limitIterator = new \LimitIterator ($iterator , 0, 10) ;
$tenRecordArray = iterator_to_array($limitIterator) ;