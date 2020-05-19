<?php
    $tytul = "Zadanie 2";
    $tresc = "Program dodaje dwie liczby wprowadzone w formularzu. ";
    include_once 'html/naglogowek.html';
    if($_SERVER['REQUEST_METHOD']=='POST') {
        if(isset($_POST['a'],$_POST['b']) && is_numeric($_POST['a']) && is_numeric($_POST['b'])){
            $a = $_POST['a'];
            $b = $_POST['b'];
            $suma = $a + $b;
            echo "suma liczb = $suma";
        } else {
            echo "<p style='color:red;'>Wprowadz liczby a i b <br></p>";
        }
    }

//koniec php
?>
<form action="zadanie2.php" method="post">
a: <input type="number" name="a">
b: <input type="number" name="b">
<input type="submit" value="Oblicz">
</form>  



<?php include_once 'html/stopka.html'; ?>