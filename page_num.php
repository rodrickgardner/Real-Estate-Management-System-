<?php
include_once("admin/connection.php");

$sql = "SELECT COUNT(id_property) FROM property WHERE approved='1'";
$query = mysqli_query($db_conx, $sql);
$row = mysqli_fetch_row($query);

$rows = $row[0];

$page_rows = 10;

$last = ceil($rows/$page_rows);

if($last < 1){
    $last = 1;
}

$pagenum = 1;

if(isset($_GET['pn'])){
    $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
}

if ($pagenum < 1) { 
    $pagenum = 1; 
} else if ($pagenum > $last) { 
    $pagenum = $last; 
}

$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;

$sql = "SELECT id_property, name_property, type_property FROM property WHERE approved='1' ORDER BY id_property DESC $limit";
$query = mysqli_query($db_conx, $sql);

$textline1 = "Testimonials (<b>$rows</b>)";
$textline2 = "Page <b>$pagenum</b> of <b>$last</b>";

$paginationCtrls = '';

if($last != 1){

    if ($pagenum > 1) {
        $previous = $pagenum - 1;
        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">Previous</a> &nbsp; &nbsp; ';

        for($i = $pagenum-4; $i < $pagenum; $i++){
            if($i > 0){
                $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
            }
        }
    }

    $paginationCtrls .= ''.$pagenum.' &nbsp; ';

    for($i = $pagenum+1; $i <= $last; $i++){
        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
        if($i >= $pagenum+4){
            break;
        }
    }

    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">Next</a> ';
    }
}
$list = '';
while($row = mysqli_fetch_array($query, mysqliI_ASSOC)){
    $id_property = $row["id_property"];
    $name_property = $row["name_property"];
    $type_property = $row["type_property"];
    $datemade = $row["datemade"];
    $datemade = strftime("%b %d, %Y", strtotime($datemade));
    $list .= '<p><a href="testimonial.php?id='.$id.'">'.$firstname.' '.$lastname.' Testimonial</a> - Click the link to view this testimonial<br>Written '.$datemade.'</p>';
}

mysqli_close($db_conx);
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css"></style>
    
<style type="text/css">
body{ font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;}
div#pagination_controls{font-size:21px;}
div#pagination_controls > a{ color:#06F; }
div#pagination_controls > a:visited{ color:#06F; }
</style>
</head>
<body>
<div>
  <h2><?php echo $textline1; ?> Paged</h2>
  <p><?php echo $textline2; ?></p>
  <p><?php echo $list; ?></p>
  <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
</div>
</body>
</html>