<?php
// the Frist Value "Fast" Say no Also ????
$filmes=array( "Fast","Pred","Pursuit","Prestige");
$keyword="Avatra";
if(array_search($keyword,$filmes)){
    echo "Yes";
}else{
    echo "no";
}
echo "<br/>";
//ternary 
echo array_search($keyword,$filmes) ? "Yes" : "No" ;