<?php
$project_name = 'rest-api';
$port = '';
if(strpos($_SERVER['REQUEST_URI'], '/')){
    $location = explode("/",$_SERVER['REQUEST_URI']);
}else{
    $location = array($_SERVER['HTTP_HOST']);
}

/*$location = (strpos($_SERVER['REQUEST_URI'], '/'))?
    explode("/",$_SERVER['REQUEST_URI']) : $_SERVER['HTTP_HOST'];*/
if(strpos($location[0], ':')){
    $port = ':' . $_SERVER['SERVER_PORT'];
    $project_name .= $port;
}else{
    echo "<div>No colon in $location[0]</div>";
}


if(!strcasecmp("http://" . $project_name . $port, $location[0])){

    var_dump("project_name = $project_name", "location = $location[0]");
    echo ("<hr>");
    die("<b style='color:red'>Имя проекта установлено неправильно!</b>
    <br>Это может привести к ошибке роутинга.");
}
else{ // скорректировать путь в зависимости от структуры файловой системы сервера:
    $location_index_plus = array_search($project_name,$location)-1;
}
// распарсить URL на сементы подключения файлов
$segments = array();
foreach(range(0,count($location)-1) as $index) { // /site_name/segment1/segment2/segment3
    if(isset($location[$index+$location_index_plus])
             && $location[$index+$location_index_plus] )
        $segments[$index-1]=$location[$index+$location_index_plus];
}