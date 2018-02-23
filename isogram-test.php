<?php

$word_1 = $_POST["word"];

$low_word = strtolower($word_1);
$b_word = str_split($low_word);
$whitespaces = array(" ", ".", "/", "-");
$onlyletters = str_replace($whitespaces, "", $low_word);
$lenght = strlen($onlyletters);


foreach($b_word as $letter1){		
	foreach($b_word as $letter2){
		if($letter1 == $letter2){
			if(ctype_alpha($letter1) === TRUE){
			$x++;
			};
		};
	};
};


if(empty($word_1)){
	echo "Please enter a word or a phrase to test !";
	
}else {
if($x > $lenght){
	echo "<h2>Your input : ".$word_1." is not an isogram</h2>";
}else{
	echo "<h2>Your input : ".$word_1." is an isogram</h2>";
}

}
?>
<hr>
<form action="isogram-form.php" method="get">
<button type="submit">Try Again</button>
</form>
