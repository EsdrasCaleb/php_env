$env = parse_ini_file(".env");
foreach($env as $attr=>$val){
    putenv("{$attr}={$val}")
}