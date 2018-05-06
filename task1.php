<!--
/**
 * Created by PhpStorm.
 * User: mrgos
 * Date: 05.05.2018
 * Time: 16:53
 * <p>1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
</p>
 */-->
<form action="" method="post">
    <textarea cols="30" rows="5" name="area1"><?= $_POST['area1'];?></textarea>
    <textarea cols="30" rows="5" name="area2"><?= $_POST['area2'];?></textarea>
    <br>
    <input type="submit">
</form>
<?php
    $a = explode(" ", $_POST['area1']);
    $b = explode(" ", $_POST['area2']);

    function getCommonWords($a, $b){
        foreach ($a as $valueA){
            foreach ($b as $valueB){
                if ($valueA == $valueB) {
                    $result[] = $valueA;
                }
            }
        }
        if ($result == NULL) {
            $result[] = "Совпадений нет";
        }
        return $result;
    }

    foreach (getCommonWords($a,$b) as $val){
        echo $val.'<br>';
    }
?>
