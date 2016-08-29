<?php
class model_photogallery extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_viewdata()
    {

        /* Функция для удаления лишних файлов: сюда, помимо удаления текущей и родительской директории, так же можно добавить файлы, не являющиеся картинкой (проверяя расширение) */
        function excess($files)
        {
            $result = array();
            for ($i = 0; $i < count($files); $i++)
            {
                if ($files[$i] != "." && $files[$i] != "..") $result[] = $files[$i];
            }
            return $result;
        }
        $dir   = "gallery"; // Путь к директории, в которой лежат изображения
        $files = scandir($dir); // Получаем список файлов из этой директории
        $files = excess($files); // Удаляем лишние файлы

        return $files ;
    }
}
?>