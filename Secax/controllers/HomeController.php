<?php 
function HomePage(){
    if(isset($_POST['encomendas_POST'])){
        $ip = $_SERVER['REMOTE_ADDR']; 
        $jsonFile = './jsonsql/db.json';
        if(file_exists($jsonFile)){
            $acesso_json = file_get_contents($jsonFile);
            $acesso_array = json_decode($acesso_json, true);
        } else {
            $acesso_array = [];
        }

        if(!in_array($ip, $acesso_array['acesso']['ip'])){
            $acesso_array['acesso']['ip'][] = $ip;

            $acesso_json = json_encode($acesso_array, JSON_PRETTY_PRINT);
            file_put_contents($jsonFile, $acesso_json);
        }
        
        exit;
    }
    return;
}
?>
