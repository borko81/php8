<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $str =  '{"name": "Jeff", "age": 20, "active": true, "colors": ["red", "blue"]}';
        $str_decode = json_decode($str);
        
        foreach($str_decode->colors as $c) {
            echo $c . "<br />";
        }

        $array = [
            "name"=>"Borko",
            "age"=>40,
            "true_colors"=>["red", "black"]
        ];

        $array_to_json = json_encode($array);
        echo $array_to_json;

        //decode alphabetic
        $charset = [
            "a"=>"а",
            "b"=>"б",
            "c"=>"ц",
            "s"=>"с",
            "o"=>"о",
            "r"=>"р",
            "k"=>"к"
        ];

        echo "<br />";
        $latin_name = "Borko";
        $result = "";
        foreach (str_split($latin_name) as $char) {
            $result .= $charset[strtolower($char)];
        }
        echo $result;

        $cyr  = array('а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у', 
            'ф','х','ц','ч','ш','щ','ъ', 'ы','ь', 'э', 'ю','я','А','Б','В','Г','Д','Е','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У',
            'Ф','Х','Ц','Ч','Ш','Щ','Ъ', 'Ы','Ь', 'Э', 'Ю','Я' );
        $lat = array( 'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p','r','s','t','u',
            'f' ,'h' ,'ts' ,'ch','sh' ,'sht' ,'a', 'i', 'y', 'e' ,'yu' ,'ya','A','B','V','G','D','E','Zh',
            'Z','I','Y','K','L','M','N','O','P','R','S','T','U',
            'F' ,'H' ,'Ts' ,'Ch','Sh' ,'Sht' ,'A' ,'Y' ,'Yu' ,'Ya' );

        $user_name = "Chechev";
        echo "<br />";
        echo str_replace($lat, $cyr, $user_name);


    ?>
</body>
</html>