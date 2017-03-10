<?php
header('Access-Control-Allow-Origin: *');
date_default_timezone_set("Asia/Tehran");
$Type = $_GET['type'] ;
if ($Type == 'Date') {
$format = $_GET['format'] ;
if ($format == 'y') {
echo date("Y");
};
if ($format == 'm') {
echo date("m");
};
if ($format == 'd') {
echo date("d");
};
if ($format == 'a') {
echo date("Y/m/d");
};
$format = $_GET['format'] ;
if ($format == 'Y') {
echo date("Y");
};
if ($format == 'M') {
echo date("m");
};
if ($format == 'D') {
echo date("d");
};
if ($format == 'A') {
echo date("Y/m/d");
};
}
if ($Type == 'Time') {
$format = $_GET['format'] ;
if ($format == 'h') {
echo date("h");
};
if ($format == 'm') {
echo date("i");
};
if ($format == 's') {
echo date("s");
};
if ($format == 'a') {
echo date("h:i:s");
};
$format = $_GET['format'] ;
if ($format == 'H') {
echo date("h");
};
if ($format == 'M') {
echo date("i");
};
if ($format == 'S') {
echo date("s");
};
if ($format == 'A') {
echo date("h:i:s");
};
}
if ($Type == 'date') {
$format = $_GET['format'] ;
if ($format == 'y') {
echo date("Y");
};
if ($format == 'm') {
echo date("m");
};
if ($format == 'd') {
echo date("d");
};
if ($format == 'a') {
echo date("Y/m/d");
};
$format = $_GET['format'] ;
if ($format == 'Y') {
echo date("Y");
};
if ($format == 'M') {
echo date("m");
};
if ($format == 'D') {
echo date("d");
};
if ($format == 'A') {
echo date("Y/m/d");
};
}
if ($Type == 'time') {
$format = $_GET['format'] ;
if ($format == 'h') {
echo date("h");
};
if ($format == 'm') {
echo date("i");
};
if ($format == 's') {
echo date("s");
};
if ($format == 'a') {
echo date("h:i:s");
};
$format = $_GET['format'] ;
if ($format == 'H') {
echo date("h");
};
if ($format == 'M') {
echo date("i");
};
if ($format == 'S') {
echo date("s");
};
if ($format == 'A') {
echo date("h:i:s");
};
}
?>