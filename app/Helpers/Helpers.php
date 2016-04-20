<?php
namespace App\Http\Controllers;


class Helpers extends Controller
{
    public static function select($options = [])
    {
        echo "<select class='form-control'>";
            foreach($options as $option)
            {
                echo "<option>".$options."</option>";
            }
        echo "</select>";
    }
}