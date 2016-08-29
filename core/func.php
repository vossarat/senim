<?php
class func
{
    public static function translit($text)
    {
        // Русский алфавит
        $rus_alphabet = array(
            'А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й',
            'К','Л','М','Н','О','П','Р','С','Т','У','Ф',
            'Х','Ц','Ч','Ш','Щ','Ь','Ы','Ъ','Э','Ю','Я',
            'а','б','в','г','д','е','ё','ж','з','и','й',
            'к','л','м','н','о','п','р','с','т','у','ф',
            'х','ц','ч','ш','щ','ь','ы','ъ','э','ю','я',
            ' ','%','?',':','&'
        );

        // Английская транслитерация
        $rus_alphabet_translit = array(
            'a','b','v','g','d','e','io','zh','z','i','i',
            'k','l','m','n','o','p','r','s','t','u','f',
            'h','c','ch','sh','sh','','y','','e','iu','ia',
            'a','b','v','g','d','e','io','zh','z','i','i',
            'k','l','m','n','o','p','r','s','t','u','f',
            'h','c','ch','sh','sh','','y','','e','iu','ia',
            '-','','','',''
        );
        return str_replace($rus_alphabet,$rus_alphabet_translit,$text);
    }

    public static function afr($len = 1,$min = 1,$max = 10) //возвращение массив со случайными элементами
    {
        // количество элементов в массиве $len
        // минимальное значение элемента $min
        // максимальное значение элемента $max
        // создаем пустой массив
        //$array = array();
        for ($i = 0; $i < $len; $i ++)
        {
            $array[] = mt_rand($min, $max);
        }
        return $array;
    }

    public static function partstr($str, $search)
    {
        $offset         = strlen($search);
        $position_begin = strpos($str, $search);
        $content        = str_replace($search, "<b>$search</b>", $str);
        $content        = substr($str, $position_begin - 10, 170);
        $content        = mb_substr($content, 1,50, 'UTF-8');
        return $content = FALSE?"--":$content;
    }
    
    public static function cutstr($str)
    {
        $cutstr = strip_tags($str);
        $cutstr = substr($cutstr, 0, 230);
        $cutstr = trim($cutstr, "!,.-");
        $cutstr = substr($cutstr, 0, strrpos($cutstr, ' '));
        $cutstr = "$cutstr...";
        return $cutstr;
    }
    
    public static function cutstr1($str)
    {
        $cutstr = strip_tags($str);
        $cutstr = substr($cutstr, 0, 440);
        $cutstr = trim($cutstr, "!,.-");
        $cutstr = substr($cutstr, 0, strrpos($cutstr, ' '));
        $cutstr = "$cutstr...";
        return $cutstr;
    }
    
    public static function cutfind($str, $search, $offset = 30)
    {
    	$str = strip_tags($str);
    	$position_begin = mb_strpos($str, $search,0,'UTF-8') < $offset ? 0: $offset;
    	$str = mb_substr($str, $position_begin, 100, 'UTF-8');
        $str = trim($str, " !,.-");
        $str = mb_substr($str, 0, mb_strrpos($str, ' ','UTF-8'),'UTF-8');
        $str = str_replace($search, "<font color=#FF0000><b>$search</b></font>", $str);
        return $str = FALSE?"--":$str; 

    }
}
?>