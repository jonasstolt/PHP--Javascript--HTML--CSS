<?php
$data = file_get_contents("database.txt"); //read the file
$rows = explode("\n", $data); //create array separate by new line
$rows = array_map("trim", $rows); // for removing any unwanted space
$rowCount = count($rows); // Count your database rows

function CountCol($data){
    $col = explode("|", $data);
    return count($col);

}

 // Creating array from our text database
// in our database first two rows are not needed so I am skipig this 
// by using i = 2
// and $rowCount -1 because of our array start from 0 but count start from 1
// adding $id[$i-2] and like other because of we have started our first loop from 2 and I want to 
// create my new array starting from 0 .

 for ($i=2; $i <$rowCount-1 ; $i++) { 
     for ($j=0; $j < CountCol($rows[$i]) ; $j++) { 
         $column = explode("|", $rows[$i]);

         $id[$i-2]  = $column[0];
         $name_sname[$i-2]  = $column[1];
         $identity[$i-2]  = $column[2]; 
         $address[$i-2]  = $column[3];
         $region[$i-2]  = $column[4];
         $hours[$i-2]  = $column[5];
         $destination[$i-2]  = $column[6];
         $price[$i-2]  = $column[7];
     }


 }
?>
<?php require("includes/topvars.inc.php");?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $pageTitle; ?></title>
<?php require("includes/stylesheets.inc.php");?>
<style>
	table, th {
  	border: 1px solid;
	  width: 100%;
	}
	.first-cell {width: 30%}
	.second-cell {width: 70%}
</style>
</head>

<body>
	<h1 class="headline"><?php echo $pageTitle; ?></h1>
	<nav>
		<?php require_once("includes/nav.inc.php");?>
		<div class="animation start-git"></div>
	</nav>
	<div class="main-text">
		<table>
		<?php
 			for ($i=0; $i < $rowCount-3  ; $i++) { 

				echo "<tr><td>ID:</td><td>".$id[$i] ."</td></tr>\n";
				echo "<tr><td>Namn:</td><td>".$name_sname[$i]."</td></tr>\n";
				echo "<tr><td>Personnummer:</td><td>".$identity[$i] ."</td></tr>\n";
				echo "<tr><td>Adress:</td><td>".$address[$i] ."</td></tr>\n";
				echo "<tr><td>Region:</td><td>".$region[$i] ."</td></tr>\n";
				echo "<tr><td>Tid:</td><td>".$hours[$i] ."</td></tr>\n";
				echo "<tr><td>Vart:</td><td>".$destination[$i] ."</td></tr>\n";
				echo "<tr><td>Pris:</td><td>".$price[$i] ."</td></tr>\n";

}

		?>
		</table>
	</div>
	<p class="main-page-footer">
		<?php include("includes/foot.inc.php");?>
	</p>
</body>
</html>