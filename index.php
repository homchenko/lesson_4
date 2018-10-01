<!--обрезать текст до определеннго количества символов-->

<?php
    $text = "Lorem Ipsum is simply dummy text of the printing and 
    typesetting industry. Lorem Ipsum has been the industry's 
    standard dummy text ever since the 1500s, when an unknown 
    printer took a galley of type and scrambled it to make a 
    type specimen book. It has survived not only five centuries, 
    but also the leap into electronic typesetting, remaining 
    essentially unchanged. It was popularised in the 1960s with 
    the release of Letraset sheets containing Lorem Ipsum passages, 
    and more recently with desktop publishing software like Aldus 
    PageMaker including versions of Lorem Ipsum.";

    function cut_text($text, $num_lettrs){
        $num = strlen($text);
        if($num > $num_lettrs){
            $result = substr($text, 0, $num_lettrs);
            $result.="..."; // .=
        }
        return $result;
    }
    echo cut_text($text, 100); // если текст на кириллице, количество обрезаемых символов нужно указывать в 2 раза больше
    echo "<br>";

    function sum1 ($num1, $num2){
        return $num1+$num2;
    }

    echo sum1(55, 66);
    echo "<br>";

    function sum2($num1, $num2){
        echo $num1+$num2;
    }

    sum2(44,55);
    echo "<br>";

    /*Создать функцию приветствия;*/
    function hello($str){
        return $str.=", hello!";
    }
    echo hello("Anna");
    echo "<br>";

    /*Функция, принимающая массив строк и выводящая каждую строку в
    отдельном параграфе.*/
    $array = array("qweqwewqe", "asdfsdads", "zvcvxcv", "ghkjghk");
    function print_strings($arr){
        for($n = 0; $n < count($arr); $n++)
        { ?>
            <p>
            <?= $arr[$n]; ?>
            </p>
        <?php }
    }

    print_strings($array);?>

    <!--функция, выводящая таблицу умножения-->
<?php
    function print_table($num1, $num2)
    {
        ?>
        <table>
            <?php
            for ($n = 1; $n <= $num1; $n++):?>
                <tr></tr>
                <?php
                for ($m = 1; $m <= $num2; $m++): ?>
                    <td> <?= $n * $m; ?> </td>
                <?php endfor; ?>
            <?php endfor; ?>
        </table>
        <?php
    }
?>
<?php
    print_table(5,5);
?>

          <!--встроенные функции-->
<?php
    
?>






