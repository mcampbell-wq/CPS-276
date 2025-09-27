<?php

$name = "";

function clearAddNames()
{
    global $name;

    if (isset($_POST['clearNames'])) {
        $name = "";
        return $name;
    } elseif (isset($_POST['addName'])) {

        // handle new name

        // do user's work for them
        $entry = ucwords("{$_POST['addName']}");

        // explode string
        $array = explode(" ", $entry);

        // swap names
        $swap[0] = $array[1];
        $swap[1] = $array[0];

        // implode string
        $newName = implode(", ", $swap);

        // explode name list
        $nameList = explode("\n", "{$_POST['namelist']}");

        // add new name
        array_push($nameList, $newName);

        // sort name list
        sort($nameList);

        // implode name list
        $result = implode("\n", $nameList);

        return $result;
    }
}
