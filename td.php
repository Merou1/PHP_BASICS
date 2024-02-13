
<?php
//exo1
function helloWorld(){
    return "Hello World! <br>";
}
echo helloWorld();

//exo2
function quiEstLeMeilleurProf(){
    return "Le prof de la programation web. <br>";
}
echo quiEstLeMeilleurProf();

//exo3
function jeRetourneMonArgument($arg){
    return $arg;
}
echo jeRetourneMonArgument("abc");

//exo4
function concatenation($str1,$str2){
    return $str1.$str2;
}
echo concatenation("Hello","world");

//exo5
function concatenationAvecEspace($str1,$str2){
    return $str1.' '.$str2;
}
echo concatenationAvecEspace("Hello","world");

//exo6
function somme($a,$b){
    return $a+$b;
}
echo somme(4,9);

//exo7
function soustraction($a,$b){
    return $a-$b;
}
echo soustraction(4,4);

//exo8
function multiplication($a,$b){
    return $a*$b;
}
echo multiplication(4,2);

//exo9
function estMajeure($age){
    if($age>=18){
        return true;
    }
    elseif($age<18){
        return false;
    }
}
echo estMajeure(9);

//exo10
function plusGrand($a,$b){
    if($a==$b) return "equal!";
    elseif($a>$b){
        return $a;
    }
    else return $b;
}
echo plusGrand(9,5);

//exo11
function plusPetit($a,$b){
    if($a==$b) return "equal!";
    elseif($a>$b){
        return $b;
    }
    else return $a;
}
echo plusPetit(2,5);

//exo12
/* HTML:
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="td.php" method="post">
        <label for="a">a</label><br>
        <input type="text" name="a" placeholder="a="><br>
        <label for="b">b</label><br>
        <input type="text" name="b" placeholder="b="><br>
        <label for="c">c</label><br>
        <input type="text" name="c" placeholder="c="><br><br>
        <button type="submit">submit</button>
    </form>
    
</body>
</html>

PHP: */
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
function plusPetit3(){
    global $a,$b,$c;
    $tab=[$a,$b,$c];
    foreach($tab as $i){
       static $min=5;//bash mayb9ah kula mera yreinitialiser min  b 5  sf kula mera aybda loop aykhli min blvaleur li kant 9bel nash i9aren meaha
        if ($min>$i){
            $min=$i;
        }
        else{
            $min=$min;
        }
    }
    return $min  ; 
}
echo plusPetit3();

/* run on:http://localhost/td_Php/index.html
 */
//exo13
function premierelttab($arr){
    (count($arr)==0) ?$x="Empty": $x=$arr[0];
    return $x;
}
echo premierelttab([]);

//exo14
 function dernierEtArr($arr){
    count($arr)==0 ? $res="Empty" : $res=$arr[count($arr)-1] ;
    return $res;
 }
 echo dernierEtArr(["hello",90,112]);

//exo15
function plusGrandDansArr($arr){
    count($arr)==0?$res="Empty" :  $res= max($arr);
    return $res;
}
echo plusGrandDansArr([2,9]);

//exo16
function plusPetitArr($arr){
    (count($arr)==0)?$res="Empty": $res=min($arr);
    return $res;
}
echo plusPetitArr([3,8,2,0]);

//exo 17
function verifierPassword(string $pass){
    $password=str_split($pass);
    count($password)>=8 ? $res=TRUE : $res=FALSE;
    return $res;
}
echo verifierPassword("111111");//false


//exo18
function verifPass($pass){
    return preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/',$pass);
}
echo verifPass("Adjs3cdf");


//exo19
function capiItal($pay){
    $capital=array("France"=>"Paris","Allemagne"=>"Berlin","Italie"=>"Rome","Maroc"=>"Rabat","Espagne"=>"Madrid","Portugal"=>"Lisbonne"); //cherché dans la documentation php
    return $capital[$pay];
}
echo capiItal("Italie");


//exo19
/* HTML:<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="td.php" method="post">
        <label for="pay">Pay</label><br>
        <input type="text" name="pay" placeholder="Entrer un pay"><br>
        <button type="submit">submit</button>
    </form>
</body>
</html>

PHP: */
//exo19
function caapital($pay){
    $pay = mb_strtolower($pay);//rendre pay lowercase
    switch($pay){
        case"france":echo "La capital de la France est Paris";
         break;
        case"allemagne":echo "La capital de l'Allemagne est Berlin";
         break;
        case"italie": echo"La capital de l'Italie est Rome";
         break;
        case"maroc": echo"La capital du Maroc est Rabat";
         break;
        case"espagne":echo "La capital de l'Espagne est Madrid";
         break;
        case"portugal": echo"La capital de la Portugal est Lisbonne";
         break;
        case"angleterre": echo"La capital de l'Angleterre est Londre";
         break;
        default:echo "Inconnue";

    }
}
$pay=$_POST['pay'];
echo caapital($pay);

//exo20
function capital($title,$elts){
   echo   " <h3>$title</h3>";
   foreach($elts as $i){
    ;
    echo "<ul> <li>$i</li> </ul>";
   }
   
}
echo capital("Capitale",["Rabat","Berlin","Paris"]);


//exo21
function remplacerLesLettres(string $input){
    $split=str_split($input);
    foreach($split as $e){
        static $s='';

        if($e=='e'){
            $e='3';}
        elseif($e=='i'){
            $e='1';}
        elseif($e=='o'){
            $e='0';}
        else $e;   
        
        $s= $s.$e;
    }
    return $s;
   
}
echo remplacerLesLettres("Bonjour les amis");//B0nj0ur l3s am1s


//exo22
function quelleAnnee(){
    echo date("Y"); //fct prédéfinie en php 
}
quelleAnnee();


//exo23
function quelleDate(){
    return date("d/m/y");
}
echo "La date d'aujourd'hui est: ". quelleDate();


//exo24:
/* main:*/
function fonctionMagique(){
    include "included.php";

}
fonctionMagique();

/* page incluse: included.php */

function fonctionDeMaLibrairie(){
  return 5; 
}
echo fonctionDeMaLibrairie()



?>