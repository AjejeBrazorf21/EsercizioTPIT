 <?php
        $primoN=$_POST["primoN"];
		$secondoN=$_POST["secondoN"];
		
		$add=$primoN+$secondoN;
		$sottr=$primoN-$secondoN;
		$mol=$primoN*$secondoN;
		if($secondoN==0){
			echo "<h4> Somma: ".$add."</h3>";
			echo "<h4> Differenza: ".$sottr."</h3>";
			echo "<h4> Prodotto: ".$mol."</h3>";
			echo "<h4> Quoziente: numero indefinito </h4>";
		}
		else{
			$div=$primoN/$secondoN;
			echo "<h4> Somma: ".$add."</h3>";
			echo "<h4> Differenza: ".$sottr."</h3>";
			echo "<h4> Prodotto: ".$mol."</h3>";
			echo "<h4> Quziente: ".$div."</h3>";
		}
		
?>
