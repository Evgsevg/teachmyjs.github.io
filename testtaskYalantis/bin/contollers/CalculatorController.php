<?
function generateRandomString($length = 15) {
    $myrendomstring=substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x+1)) )),1,$length);
    return $myrendomstring;
}

$rtoken= generateRandomString(); 
session_start();
function GetUsersOnline(){
    clearstatcache();
    $SessionDir = session_save_path();
    $Timeout = 60 * 3;
    if ($Handler = scandir ($SessionDir)){
        $count = count ($Handler);
        $users = 0;
       
        for ($i = 0; $i < $count; $i++){
            if (time() - fileatime ($SessionDir . '/' . $Handler[$i]) < $Timeout){
                $users++;
            }
        }
                           
        return  $users;
    } else {
        return 'error';
    }
}
 echo GetUsersOnline().'Online';
$_SESSION['onlineuser'] = $rtoken;
if (isset($_SESSION['onlineuser'])){
   print "<h4>Current user  On</h4>";
}
else{
   print "<h4>Current user  Off</h4>";
}
 echo $_SESSION['onlineuser'] = '<br><h5>users login is:'.$rtoken.'</h5>';



?>