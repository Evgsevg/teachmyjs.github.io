<?php
namespace bin\controllers;
function debug($arr){
    echo '<pre>' . print_r($arr, true) . '</pre>';
}