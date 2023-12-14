<?php 

function controlEmail($mail) {
    if(str_contains($mail, '@') && str_contains($mail, '.')) {
        $result = true;
    } else {
        $result = false;
    };
    return $result;
};

?>


