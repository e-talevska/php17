
<?php

	function zbir($a,$b){//funkcija za sobiranje 
	
		echo $a+$b;
		echo "<br>";

	}
	zbir(3,4);
	zbir(6,7);
	zbir(1233,231);

	function test($ime,$prezime,$godina){//funkcija za ime prezime i godina na raganje 
		if (date('H')>=17) {
			$zdr="dobro vecer";
		}else{
			$zdr="dobro utro";
		}
		echo "$zdr my name is: $ime $prezime. I'm born in $godina year. <br><br>";
	}
	test('aleksandar','acevski' , 1990);

	function test1($firstname,$lastname,$flag=0){//menuva ime prezime po redoslet so tretata promenliva postaveno defaltna vrednost
		if (!$flag) {
			echo $firstname." " . $lastname;		
		}else{
			echo $lastname." " . $firstname;
	}
	}
	test1('aleksandar','acevski');
	
	function tem($cel){//promena na celziusovi vo faradeevi
		$fardeev = $cel*1.8+32;
		echo "<br>";
		return $fardeev;

	}
	
	$f=  tem(50);
	echo $f."<br>";

	function far($far){// promena na faradeevi vo celziusovi
		$fard=(5/9)*($far-32);
		return $fard;
	}
	echo far($f);
?>
