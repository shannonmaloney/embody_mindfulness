<?php
include_once('settings.php');
include_once('lib.php');
$data="";
// check that we have all variables
$keys=array('hand');

$err=-1;
for($k=0;$k<count($keys);$k++){
    if(!isset($_POST[$keys[$k]]))
    {
        $err=$k;
        break;
    }
    else
    {
        $data.=$_POST[$keys[$k]].",";
    }
}
        
if($err>=0)
{
        header("Location: register.php?err=$err");
}
else
{
$ok=0;
while($ok==0)
{
    $random = (rand()%1000000);
    if(is_dir("subjects/$random/"))
        $ok=0;
    else
    {
        $ok=1;
        system("mkdir subjects/$random/",$ret);
        if($ret==0)
        {               
            system("chmod 777 subjects/$random/",$ret);
            if($ret!=0)
                die("There was a disk error. Please email ".$pagetexts['contact_email']);
        }
    }
}


$file="subjects/$random/data.txt";
$fh = fopen($file, 'w') or die("There was a disk error. Please email ".$pagetexts['contact_email']);
fwrite($fh, $data);
fclose($fh);

$file="subjects/$random/techdata.txt";
$fh = fopen($file, 'w') or die("There was a disk error. Please email ".$pagetexts['contact_email']);
fwrite($fh, $techdata);
fclose($fh);

header("Location: session.php?userID=$random");
}
?>
