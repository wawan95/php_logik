<!-- <#?php
for ($i=1; $i<=5; $i++) {
    for ($j=4; $j>=$i; $j--) {
        echo "  ";
    }for ($k=1; $k<=$i; $k++) {
        echo "$k";
    }echo "<br>";
}
?> -->


<?php
for( $i=1; $i<=5 $i++){
	for($j=4; $j>=$i $j--){
		echo " ";
	} for ($k=1; $k<=$i; $k++){
		echo "$k";
	} echo "<br>";
}

 ?>
    1
   12 
  123 
 1234
12345
 ======================================================

 <?php
for ($i=1; $i<=5; $i++) {
    for ($j=4; $j>=$i; $j--) {
        echo "  ";
    }for ($k=$i; $k>=1; $k--) {
        echo "$k";
    }echo "<br>";
}
?>
    1
   21
  321
 4321
54321
======================================================

<?php
for ($i=1; $i<=5; $i++){
    for ($j=$i; $j>=1; $j--){
        echo $j;
    }
    echo "<br>";
}
?>
select orders.customerID, costumers.costumersName from orders