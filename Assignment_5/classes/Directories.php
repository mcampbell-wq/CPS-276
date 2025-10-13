<?php
class Director
{

    function CreateFile()
    {
        if (isset($_POST['folderName'])) {

            $path = "directories/{$_POST['folderName']}";

            if (is_dir($path)) {
                return "A directory already exists with that name.";
            } else if (isset($_POST['fileContent'])) {

                $inception = mkdir("{$path}");
                $data = "{$_POST['fileContent']}";

                if (!($handle = fopen("{$path}/readme.txt", "w"))) {
                    throw new Exception("Cannot open file for writing");
                }
                fwrite($handle, "{$_POST['fileContent']}");
                fclose($handle);
                chmod("{$path}/readme.txt", 0666);

                return False;
            }
        }
    }

    function ProvidePath()
    {
        if (isset($_POST['folderName'])) {


            if (isset($_POST['fileContent'])) {

                $path = "directories/{$_POST['folderName']}";
                return $path;
            }
        }
    }
}
