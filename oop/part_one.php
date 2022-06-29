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

        class FileReader {
            public string $filename;
            private readonly $model;
            

            public function __construct($filename, $mode='r') {
                $this->filename = $filename;
                $this->mode = $mode;
                $this->handle = fopen($filename, $mode);
            }

            public function read() {
                return fread($this->handle, filesize($this->filename));
            }

            public function __desctruct() {
                if($this->handle) {
                    fclose($this->handle);
                }
            }
        }
        $f = new FileReader('oop.txt');
        echo "File to read " . $f->filename . "<br />";
        echo $f->read();
    ?>
</body>
</html>