<?
    header('Content-type: text/html; charset=utf8');

    $n = 3;

    $matrica = array(
        array(1, 4, 8),
        array(3, 7, 2),
        array(6, 9, 5),
    );

    $current = 'забава';
    echo '<strong>Исходная строка:</strong> '.$current.'<br><br>';

    $num = array();

    echo encrypt($current, $matrica, $n, $num);
    echo decrypt($num, turn_matrix($matrica, determit($matrica)), $n, $matrica);

/**------------------------------------------------------------------------------------------------------------*/

    /**
     * Дешифровка
     * @param $num
     * @param $array
     * @param $n
     * @param $cur_array
     * @return array|string
     */
    function decrypt($num, $array, $n, $cur_array)
    {
        $alphabet = alphabet();

        $numbers = chunk($num);

        if (is_array($numbers))
        {
            $vector1 = $numbers[0];
            $vector2 = $numbers[1];

            $res[] = multiple_array($array, $vector1, $n, true, determit($cur_array));
            $res[] = multiple_array($array, $vector2, $n, true, determit($cur_array));

            $result = '';

            for($i = 0; $i < count($res); $i++)
            {
                for ($j = 0; $j < count($res[$i]); $j++)
                {
                    $result .= NumberLetter($res[$i][$j], $alphabet);
                }
            }

            return '<br><br><strong>Дешировка:</strong> '.$result;
        }
        else
        {
            return $numbers;
        }
    }

    /**
     * Шифрование
     * @param $text
     * @param $array
     * @param $n
     * @param $num
     * @return string
     */
    function encrypt($text, $array, $n, &$num)
    {

        $numbers = array();

        $alphabet = alphabet();

        for ($i = 0; $i < mb_strlen($text, 'utf-8'); $i++) {
            $numbers[] =LetterNumber(mb_substr(mb_strtoupper($text, 'UTF-8'), $i, 1, 'utf-8'), $alphabet);
        }

        $numbers = chunk($numbers);

        if (is_array($numbers))
        {
            $vector1 = $numbers[0];
            $vector2 = $numbers[1];

            $res[] = multiple_array($array, $vector1, $n);
            $res[] = multiple_array($array, $vector2, $n);

            $num = array_merge($res[0], $res[1]);

            $result = implode(', ', $res[0]);
            $result .= ', ' . implode(', ', $res[1]);

            return '<strong>Шифрование:</strong> '.$result;
        }
        else
        {
            return $numbers;
        }
    }

    /**
     * Обратная матрица
     * @param $matrix
     * @return mixed
     */
    function turn_matrix($matrix, $sum) {
        $a = $matrix;
        $e = array();
        $count = count($a);

        for($i=0;$i<$count;$i++)
            for($j=0;$j<$count;$j++)
                $e[$i][$j]=($i==$j)? 1 : 0;

        for($i=0;$i<$count;$i++){
            $tmp = $a[$i][$i];
            for($j=$count-1;$j>=0;$j--){
                $e[$i][$j]/=$tmp;
                $a[$i][$j]/=$tmp;
            }

            for($j=0;$j<$count;$j++){
                if($j!=$i){
                    $tmp = $a[$j][$i];
                    for($k=$count-1;$k>=0;$k--){
                        $e[$j][$k]-=$e[$i][$k]*$tmp;
                        $a[$j][$k]-=$a[$i][$k]*$tmp;
                    }
                }
            }
        }

        for($i=0;$i<$count;$i++)
            for($j=0;$j<$count;$j++)
                $a[$i][$j]=round($e[$i][$j] * $sum, 0) * (-1);

        return $a;
    }

    /**
     * Определитель матрицы
     * @param $a
     * @return int
     */
    function determit($a)
    {
        $sum = 0;
        $sum = $a[0][0]*$a[1][1]*$a[2][2] + $a[0][1]*$a[1][2]*$a[2][0] + $a[0][2]*$a[1][0]*$a[2][1] - $a[0][2]*$a[1][1]*$a[2][0] - $a[0][0]*$a[1][2]*$a[2][1] - $a[0][1]*$a[1][0]*$a[2][2];
        return $sum;
    }

    /**
     * Алфавит
     * @return array
     */
    function alphabet()
    {
        $abc = array();

        $cnt = 1;

        foreach (range(chr(0xC0), chr(0xDF)) as $b)
            $abc[$cnt++] = iconv('CP1251', 'UTF-8', $b);

        return $abc;
    }

    /**
     * Порядковый номер буквы в алфавите
     * @param $search
     * @param $array
     * @return mixed
     */
    function LetterNumber($search, $array)
    {
        return array_search($search, $array);
    }

    /**
     * Буква по порядковому номеру
     * @param $search
     * @param $array
     * @return mixed
     */
    function NumberLetter($search, $array)
    {
        return $array[$search];
    }

    /**
     * Разбивает массив на две части (векторы)
     * @param $array
     * @return array|string
     */
    function chunk($array)
    {

        $result = array_chunk($array, 3);

        $error = '';
        for ($i = 0; $i < count($result); $i++) {
            if (count($result[$i]) != 3) {
                $error = 'Количество цифр в векторе не равно 3. <br>';
            }
        }

        if (empty($error))
            return $result;
        else
            return $error;
    }

    /**
     * Умножение матриц
     * @param $array1
     * @param $array2
     * @param $n
     * @param bool $decrypt
     * @param null $det
     * @return array
     */
    function multiple_array($array1, $array2, $n, $decrypt = false, $det = null)
    {
        $result = array();

        for ($i = 0; $i < $n; $i++)
        {
            for ($j = 0; $j < $n; $j++)
            {
                if ($decrypt) {
                    if ($j == 1)
                        $result[$i] += floor(($array1[$i][$j] / ($det * (-1))) * $array2[$j]);
                    else
                        $result[$i] += round(($array1[$i][$j] / ($det * (-1))) * $array2[$j]);
                }
                else
                    $result[$i] += round($array1[$i][$j] * $array2[$j]);
            }
        }

        return $result;
    }
