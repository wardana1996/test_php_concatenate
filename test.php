<html>
    <form method="post" action="test.php">
        <input type="number" name="jumlah_perulangan" placeholder="masukkan jumlah perulangan..."/>
        <button type="submit" name="submit">OK</button>
    </form>
<?php
    class bage_concat {
        function hitungBageConcat () {
            $jumlahPerulangan = isset($_REQUEST['jumlah_perulangan']) ? $_REQUEST['jumlah_perulangan'] : '';
            $submit = isset($_POST['submit']);
            $countBageConcat = 0; 
    
            if ($submit) {
                for ($i = 1; $i <= $jumlahPerulangan; $i++) {
                    if ($countBageConcat >= 5) {
                        break; 
                    }elseif ($countBageConcat >= 2) {
                        if ($i % 3 == 0) {
                            echo "Concat<br>";
                        } elseif ($i % 5 == 0) {
                            echo "Bage<br>";
                        }
                    }
    
    
                    if ($i % 3 == 0 && $i % 5 == 0) {
                        echo "Bage Concat<br>";
                        $countBageConcat++;  
                    } elseif ($i % 3 == 0) {
                        echo "Bage<br>";
                    } elseif ($i % 5 == 0) {
                        echo "Concat<br>";
                    } else {
                        echo $i . "<br>";
                    }
                }
            }
        }
    }

    $hasil = new bage_concat();
    $hasil->hitungBageConcat();
?>
</html>
