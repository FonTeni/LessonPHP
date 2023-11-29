<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apprends PHP</title>
</head>
<body>
    <p>Hello word!!!</p>
    <?php



        echo "     Lesson 3: Hello world!<br/>";
        echo "Hello world #2 !";
        echo "<br/>";
        echo "--------------------------------------------------------<br/><br/>";



        echo "     Lesson 4: Comments (3 styles)<br/>";
        // Comment
        /*
        Comment 1
        Comment 2
        */
        # Comment
        echo "--------------------------------------------------------<br/><br/>";



        echo "     Lesson 5: Variables<br/>";  //Переменные
        // $2number  !!! Error 
        // $_number  !!! NO good
        // $num ber  !!! Error 
        // $num_ber  NORM
        // $numBer  NORM
        $perNumber = 2;
        $perFloat = 3.25;
        $perString = "Hello World!";
        $perBool = true;

        // echo "Переменная perNumber = $perNumber";
        echo "Peremenna perNumber = $perNumber";
        echo "<br/>";
        echo "Peremenna perFloat = $perFloat";
        echo "<br/>";
        echo "Peremenna perString = $perString";
        echo "<br/>";
        echo "Peremenna perBool = $perBool";
        echo "<br/>";
        echo "--------------------------------------------------------<br/><br/>";



        echo "     Lesson 6: Constants<br/>";  //Константы
        echo PHP_VERSION; //Версия PHP, небольшой прикол (встроенная константа)
        echo "<br/>";

        define("PI", 3.14); //Запись константы, константы записываются в верхнем регистре
        echo PI; //Без $
        echo "<br/>";
        echo 'PI: "';
        echo defined("PI"); //Позволяет найти константу по имени(узнать есть ли такая константа или нет). Если такая константа есть выведет "true", иначе "false"
        echo '"';
        echo "<br/>";

        echo 'PI_123: "';
        echo defined("PI_123");
        echo '"';
        echo "<br/>";
        echo "--------------------------------------------------------<br/><br/>";



        echo "     Lesson 7: Arithmetic operations<br/>";  //Арифметические операции
        $x = 32;
        $y = 22.13;
        $z = 10;
        echo "x = $x<br/>";
        echo "y = $y<br/>";
        echo "z = $z<br/>";
        $summarize = $x + $y;
        $different = $x - $y;
        $multiplication = $x * $y;
        $division = $x / $y;
        $remainderOfDivision = $x % $z;
        echo "summarize = x + y = $summarize<br/>";
        echo "different = x - y = $different<br/>";
        echo "multiplication = x * y = $multiplication<br/>";
        echo "division = x / y = $division<br/>";
        echo "remainderOfDivision = x % z = $remainderOfDivision<br/>";
        $q = 100;
        echo "q = $q<br/>";
        echo "q += 10<br/>";
        $q += 10;
        echo "q = $q<br/>";
        echo "q++<br/>";
        $q++;
        echo "q = $q<br/>";
        echo "--------------------------------------------------------<br/><br/>";



        echo "     Lesson 8: String operations<br/>";  //Строковае операции
        $str_1 = "First string.";
        $str_2 = "Second string.";

        echo $str_1;
        echo $str_2;
        echo "<br/>";

        //echo $str_1 $str_2; Error
        echo $str_1 . $str_2;
        echo "<br/>";
        echo $str_1 . " " . $str_2;
        echo "<br/>";
        echo "\"" . $str_1 . "\""; //Метод вывода двойных кавычек внутри двойных кавычек
        echo "<br/>";
        echo "\\" . $str_1 . "\\"; //Метод вывода бэк-слеша(\)
        echo "<br/>";
        echo '\'' . $str_1 . '\''; //Метод вывода одинарных кавычек внутри одинарных кавычек
        echo "<br/>";

        //Сторки нормально воспринимают теги
        $string_with_tag_b = "<b>A string with a tag b.</b><br/>";
        $string_with_tag_i = "<i>A string with a tag i.</i><br/>";
        echo $string_with_tag_b;
        echo $string_with_tag_i;
        $input_type_text = "<input type=\"text\" />";
        echo $input_type_text . "<br/>";
        echo "--------------------------------------------------------<br/><br/>";



        echo "     Lesson 9: Logical operations<br/>";  //Логические операции
        $x = 12;
        $y = 34;
        $z = 4.25;

        $bool_1 = $x == $z;
        $bool_1 = $x != $z;
        $bool_1 = $x > $z;
        $bool_1 = $x < $z;
        $bool_1 = $x <= $z;
        $bool_1 = $x >= $z;
        $bool_1 = !($x == $z); //Эквивалентно $x != $z
        $bool_1 = $x < $z || $x > $z; // или
        $bool_1 = $x < $z && $y < $z; // и
        $bool_1 = $x != $x ^ $x == $x;// взаимоисключающее или (если оба будут правдой или оба будут ложю вернёт ложь)
        echo "--------------------------------------------------------<br/><br/>";



        echo "     Lesson 10: Equivalence operator<br/>";  //Оператор эквивалентности
        $str_1 = "test str";
        $number = 0;
        echo "str_1 = " . $str_1 . "<br/>" . "number = " . $number . "<br/>";
        echo "<br/>";

        $bool_1 = $str_1 == true;
        echo "str_1 == true = " . "\"" . $bool_1 . "\"";
        echo "<br/>";

        $bool_1 = $number == "";
        echo "number == \"\" = " . "\"" . $bool_1 . "\"";
        echo "<br/>";

        //Оператор эквивалентности проверяет ещё и тип переменных(число и строка никогда не дадут правду и т.п.)
        $bool_1 = $str_1 === true;
        echo "str_1 === true = " . "\"" . $bool_1 . "\"";
        echo "<br/>";

        $bool_1 = $number === "";
        echo "number == \"\" = " . "\"" . $bool_1 . "\"";
        echo "<br/>";

        echo "--------------------------------------------------------<br/><br/>";



        echo "     Lesson 11: Conditional operators<br/>";  //Условные операторы
        $x = 0;

        if ($x == 0)
            echo "x = 0<br/>";
        //Можно без "{}" если после только одно строка

        if ($x == 1) {
            echo "x = 1";
            echo "<br/>";
        } else if ($x == 2) {
            echo "x = 2";
            echo "<br/>";
        } else if ($x == 3) {
            echo "x = 3";
            echo "<br/>";
        } else {
            echo "Worked else";
            echo "<br/>";
        }

        //Можно оформить по другому или комбинированно
        if ($x == 1)
            echo "x = 1<br/>";
        else if ($x == 2)
            echo "x = 2<br/>";
        else if ($x == 3) {
            echo "x = 3";
            echo "<br/>";
        } else
            echo "Worked else<br/>";

        $x == 0 ? $str_1 = "x == 0" : $str_1 = "x != 0";
        echo $str_1;
        echo "<br/>";

        echo "--------------------------------------------------------<br/><br/>";



        echo "     Lesson 12: Operator Switch () case<br/>";  //Оператор Switch () case
        $x = 0;

        switch ($x) {
            case 1 :
                echo "x = 1";
                echo "<br/>";
                break;
            case 2:
                echo "x = 2";
                echo "<br/>";
                break;
            case 3:
                echo "x = 3";
                echo "<br/>";
                break;
            case 4:
                echo "x = 4";
                echo "<br/>";
                break;
            default: 
                echo "x > 4 or x < 1";
                echo "<br/>";
        }

        echo "--------------------------------------------------------<br/><br/>";



        echo "     Lesson 13: Cycles For, While, Do While<br/>";  //Циклы For, While, Do While
        for ($i = 0; $i <= 5; $i++) {
            echo "Cycle For i = " . $i . " (i <= 5)<br/>";
        };
        $i = 0;
        while ($i <= 5) {
            echo "Cycle While i = " . $i . " (i <= 5)<br/>";
            $i++;
        };
        $i = 0;
        do {
            echo "Cycle Do While i = " . $i . " (i <= 5)<br/>";
            $i++;
        } while ($i <= 5);

        echo "--------------------------------------------------------<br/><br/>";
        


        echo "     Lesson 14: Functions<br/>";  //Функции
        function summarize ($x, $y) {
            $summarize = $x + $y;
            return $summarize;
        }
        $x = 12;
        $y = 35;

        $summarize = summarize ($x, $y);

        echo "x + y = " . $summarize . "<br/>";

        echo "--------------------------------------------------------<br/><br/>";



        echo "     Lesson 15: Arrays of elements<br/>";  //Массивы элементов
        function printTab () {
            echo "&nbsp&nbsp&nbsp&nbsp";
        }
        function printArray ($array, $numberVariables) {
            for ($i = 0; $i < $numberVariables; $i++) {
                echo $i . ")\"" . $array[$i] . "\"";
                printTab();
                printTab();
            }
            echo "<br/>";
        }
        function printArrayViaCount ($array) {
            for ($i = 0; $i < count($array); $i++) {
                echo $i . ")\"" . $array[$i] . "\"";
                printTab();
                printTab();
            }
            echo "<br/>";
        }
        //$array = array (); //Так тоже можно, $array - будет массивом
        $array = array (12, -3.25, "Hello", false, 11, 7.1);
        printArray($array, 6);
        $array[4] = "4el = str!!!";
        echo "\$array[4] = \"4 variable = str!!!\";<br/>";
        printArray($array, 6);
        $array[] = "New variable"; //Добавление нового эллемента в конец
        echo "\$array[] = \"New variable\";<br/>";
        printArray($array, 7);
        //count($array) //Функция сама считает количество эллементов в массиве
        $array[] = "New variable 2";
        echo "\$array[] = \"New variable 2\";<br/>";
        printArrayViaCount($array);



        //Асоциативные массивы
        $list = array ("age" => 12, "name" => "Alex", "school" => true);
        $list["age"] = 13;
        $listNumbers = array ("first" => 12, "second" => 45, "third" => 20, "fourth" => 17, "fifth" => 11, "sixth" => 31);
        // Foreach - цикл специально для асоциативных массивов
        $summarize = 0;
        echo "listNumbers:<br/>";
        // as переводится - как
        foreach ($listNumbers as $keyAnyName => $valueAnyName) {
            printTab();
            echo "\"" . $keyAnyName . "\" = \"" . $valueAnyName . "\"<br/>";
            $summarize += $valueAnyName;
        }
        echo "summarize = " . $summarize . "<br/>";
        echo "count = " . count($listNumbers) . "<br/>";
        $averageValue = $summarize / count($listNumbers);
        echo "averageValue = summarize / count = " . $averageValue . "<br/>";

        echo "--------------------------------------------------------<br/><br/>";



        echo "     Lesson 16: Two-dimensional arrays<br/>";  //Двумерные массивы
        $array_2 = array (array (12, 4.46, "string", true), array ("Element"), array (45, "second"));
        for ($i = 0; $i < count($array_2); $i++) {
            for ($j = 0; $j < count($array_2[$i]); $j++) {
                echo $i . "." . $j . ")\"" . $array_2[$i][$j] . "\"";
                printTab();
                printTab();
            }
            echo "<br/>";
        }

        echo "--------------------------------------------------------<br/><br/>";



        echo "     Lesson 17: Scope of variables<br/>";  //Область видимости переменных
        $lesson_17_x = 10; //Это глобальная переменная
        echo " x = " . $lesson_17_x . "<br/>";
        function testScopeVariables_1 () {
            $lesson_17_x = 15; //Это переменная функции
            echo " x = " . $lesson_17_x . "<br/>";
        }
        echo "testScopeVariables_1();<br/>";
        testScopeVariables_1();
        echo " x = " . $lesson_17_x . "<br/>";


        function testScopeVariables_2 () {
            $GLOBALS["lesson_17_x"] = 15; //Позволяет внутри функций менять глобальные переменные
            echo " x = " . $GLOBALS["lesson_17_x"] . "<br/>"; //К глобальным переменным в функциях всегда надо обращяться так
        }
        echo "testScopeVariables_2();<br/>";
        testScopeVariables_2();
        echo " x = " . $lesson_17_x . "<br/>";


        function testScopeVariables_3 () {
            global $lesson_17_y; //Позволяет создать глобальную переменную внутри функции (метод global() можно использовать только внутри функции)
            $lesson_17_y = 20; //К ней можно обращаться как обычно (она всё ещё будет глобальной)
            echo " y = " . $lesson_17_y . "<br/>";
            global $lesson_17_x; //Если написать название переменной, которая уже была глобальной, то в функции к ней можно обращаться как обычно (она всё ещё будет глобальной)
            $lesson_17_x += 100;
        }
        echo "testScopeVariables_3();<br/>";
        testScopeVariables_3();
        echo " y = " . $lesson_17_y . "<br/>";
        echo " x = " . $lesson_17_x . "<br/>";


        function testScopeVariables_4 () {
            static $id; //Используется исключительно в функциях. Её значение будет запоминаться и учитываться в пределах функций с таким же названием(имеется ввиду неоднократный вызов функции)
            $id++;
            echo " id: " . $id . "<br/>";
        }
        for ($i = 0; $i < 4; $i++) {
            testScopeVariables_4();
        }
        function testScopeVariables_5 () {
            static $id;
            $id++;
            echo " id: " . $id . "<br/>";
        }
        for ($i = 0; $i < 4; $i++) {
            testScopeVariables_5();
        }

        echo "--------------------------------------------------------<br/><br/>";



        echo "     Lesson 18: Connecting files<br/>";  //Подключение файлов
        require "lesson18ConnectingFiles.php";
        
        echo "--------------------------------------------------------<br/><br/>";

    ?>
</body>
</html>