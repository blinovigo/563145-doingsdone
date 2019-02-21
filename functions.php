<?php

function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}



function summ_task($task__list, $cats__name){
	$result=0;
	foreach ($task__list as $key){
		if ($key["cats_name"] == $cats__name){
			$result++;
		}
	}
	return $result; 
}

function timer_up_to_24_hours($date_finish_object){
	if (strtotime($date_finish_object) - time() < 86400 && strtotime($date_finish_object) > 1 ){
		print("task--important");
	} 
	
}