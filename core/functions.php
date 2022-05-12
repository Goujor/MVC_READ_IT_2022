<?php
function getFormatedDate(string $format = 'd-m-Y', string $date){
    return date($format, strtotime($date));
}