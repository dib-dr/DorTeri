<?php

function login($nomor){
	$host = "bimaplus.tri.co.id";        
    $data = '{"imei":"Android 93488a982824b403","language":1,"msisdn":"'.$nomor.'"}';
    $ceknom = rekuest($host,"POST",'/api/v1/login/otp-request', $data);
        return $ceknom;
}
function otplogin($nomor,$otp){
	$host = "bimaplus.tri.co.id";        
    $data = '{"deviceManufactur":"Samsung","deviceModel":"SMG991B","deviceOs":"Android","imei":"Android 93488a982824b403","msisdn":"'.$nomor.'","otp":"'.$otp.'"}';
    $ceknom = rekuest($host,"POST",'/api/v1/login/login-with-otp', $data);
        return $ceknom;
}
function profil($nomor,$plan,$secret){
    $host = "bimaplus.tri.co.id";        
    $data = '{"callPlan":"'.$plan.'","deviceManufactur":"Samsung","deviceModel":"SMG991B","deviceOs":"Android","imei":"Android 93488a982824b403","language":0,"msisdn":"'.$nomor.'","page":1,"secretKey":"'.$secret.'","subscriberType":"Prepaid"}';
    $ceknom = rekuest($host,"POST",'/api/v1/homescreen/profile', $data);
        return $ceknom;
}

function cek($prodid){
	$host = "my.tri.co.id";        
    $data = '{"imei":"WebSelfcare","language":"","callPlan":"","msisdn":"","secretKey":"","subscriberType":"","productId":"'.$prodid.'"}';
    $ceknom = rekuest($host,"POST",'/apibima/product/product-detail', $data);
        return $ceknom;
}

function beli($nomor,$plan,$secret,$prodid){
    $host = "bimaplus.tri.co.id";        
    $data = '{"addonMenuCategory":"","addonMenuSubCategory":"","balance":"","callPlan":"'.$plan.'","deviceManufactur":"Samsung","deviceModel":"SMG991B","deviceOs":"Android","imei":"Android 93488a982824b403","language":0,"menuCategory":"3","menuCategoryName":"TriProduct","menuIdSource":"","menuSubCategory":"","menuSubCategoryName":"","msisdn":"'.$nomor.'","paymentMethod":"00","productAddOnId":"","productId":"'.$prodid.'","secretKey":"'.$secret.'","servicePlan":"Default","sms":true,"subscriberType":"Prepaid","totalProductPrice":"","utm":"","utmCampaign":"","utmContent":"","utmMedium":"","utmSource":"","utmTerm":"","vendorId":"11"}';
    $ceknom = rekuest($host,"POST",'/api/v1/purchase/purchase-product', $data);
        return $ceknom;
}

function rekuest($host, $method, $url, $data = null){ 
        $headers[] = 'Host: '.$host;
		$headers[] = 'App-Version: 4.2.6';
        $headers[] = 'Content-Type: application/json; charset=UTF-8';
        $headers[] = 'User-Agent: okhttp/4.9.0';
        
        $c = curl_init("https://".$host.$url);  
        switch ($method){
            case "GET":
            curl_setopt($c, CURLOPT_POST, false);
            break;
            case "POST":               
            curl_setopt($c, CURLOPT_POST, true);
            curl_setopt($c, CURLOPT_POSTFIELDS, $data);
            break;
            case "PUT":               
            curl_setopt($c, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($c, CURLOPT_POSTFIELDS, $data);
            break;
        }
        
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_HEADER, true);
        curl_setopt($c, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($c, CURLOPT_TIMEOUT, 20);
        $response = curl_exec($c);
        $httpcode = curl_getinfo($c);
        if (!$httpcode){
            return false;
        }
        else {
            $headers = substr($response, 0, curl_getinfo($c, CURLINFO_HEADER_SIZE));
            $body   = substr($response, curl_getinfo($c, CURLINFO_HEADER_SIZE));
        }
        
        curl_close($c);
        $json = json_decode($body, true);
        return $json;
    }
$Gitpull = "git pull";
$R = "\e[0;31m";
$G = "\e[0;32m";
$Y = "\e[0;33m";
$O = "\e[1;33m";
$B = "\e[0;34m";
$P = "\e[0;35m";
$Cy  = "\e[0;36m";
$W  = "\e[0;37m";
$acak = array("$G","$R","$P","$B","$Cy");
shuffle($acak);
$hacak=array_shift($acak);
echo "$hacak    .___               __         .__ 
  __| _/___________  _/  |________|__|
 / __ |/  _ \_  __ \ \   __\_  __ \  |
/ /_/ (  <_> )  | \/  |  |  |  | \/  |
\____ |\____/|__|     |__|  |__|  |__|
     \/                               \n";
echo "$W Tembak Paket 3 by$R OpakEnak,$W Remod by$B dedd\n\n";
echo "$Y [•] Nomer\t = $G";
$nomor = trim(fgets(STDIN));
$login = login($nomor);
echo "$B [×] ".$login['message'];
echo "\n$Y [•] OTP\t = $G";
$otp = trim(fgets(STDIN));
$login = otplogin($nomor,$otp);
echo "\n Informasi Pengguna";
if (strpos(json_encode($login), '"status":true')) {
	$secret = $login['secretKey'];
	$plan = $login['callPlan'];
    $nomor = $login['msisdn'];
    $profil = profil($nomor,$plan,$secret);
    $balance = $profil['creditBalance'];
    $aktif = $profil['activeUntil'];
    $sisakuota = $profil['sumOfInternet'];
    $poin = $profil['stotalPoin'];
    echo "$Y [•] Pulsa\t : $G $balance\n";
	echo "$Y [•] Masa Aktif\t : $G $aktif\n";
    echo "$Y [•] Sisa Data\t : $G $sisakuota\n";
    echo "$Y [•] Bonstri\t : $G $poin Poin\n\n";
    cek:
    echo "$Y [?] Pilih Paket :\n";
    echo "
$Y [1]  Welcome Reward 5GB\t × \t $G Rp.1
$Y [2]  25GB 24 Jam 30 Hari\t × \t $G Rp.29000
$Y [3]  25GB 25rb (Diskon)\t × \t $G Rp.25000
$Y [4]  25GB 24 Jam 20 Hari\t × \t $G Rp.25000
$Y [5]  (NEW) 10GB 30 Hari\t × \t $G Rp.15000
$Y [6]  (NEW) 15GB 30 Hari\t × \t $G Rp.20000
$Y [7]  (NEW) 25GB 20 Hari\t × \t $G Rp.25000
$Y [8]  (NEW) 25GB 20 Hari\t × \t $G Rp.25000
$Y [9]  (NEW) 25GB 30 Hari\t × \t $G Rp.29000
$Y [10] (NEW) 55GB 30 Hari\t × \t $G Rp.50000
$Y [11] (NEW) 65GB 30 Hari\t × \t $G Rp.60000
$Y [12] (NEW) 75GB 30 Hari\t × \t $G Rp.75000
$Y [13] (NEW) 90GB 30 Hari\t × \t $G Rp.90000
$Y [14] (NEW) 100GB 30 Hari\t × \t $G Rp.90000\n";
    echo "\n [•] Pilih  :   ";
    $pilih = trim(fgets(STDIN));
    switch ($pilih) {
            case '1':
            $prodid = '25669';
            break;
            case '2':
            $prodid = '23164';
            break;
            case '3':
            $prodid = '22648';
            break;
            case '4':
            $prodid = '23160';
            break;
            case '5':
            $prodid = '25245';
            break;
            case '6':
            $prodid = '25459';
            break;
            case '7':
            $prodid = '25254';
            break;
            case '8':
            $prodid = '25264';
            break;
            case '9':
            $prodid = '25267';
            break;
            case '10':
            $prodid = '25469';
            break;
            case '11':
            $prodid = '25690';
            break;
            case '12':
            $prodid = '25247';
            break;
            case '13':
            $prodid = '25476';
            break;
            case '14':
            $prodid = '25693';
            break;
        
        default:
            echo "$R [×] Pilih Paket Sesuai Menu\n";
            goto cek;
            break;
    }
    $cek = cek($prodid);
    $name = $cek['product']['productName'];
    $price = $cek['product']['productPrice'];
    $deskripsi = $cek['product']['productDescription'];
    echo "$B [•] Nama Paket\t: $G $name\n";
    echo "$B [•] Harga\t: $G $price\n";
    echo "$B [•] Deskripsi\t: $G $deskripsi\n";
    echo "$B [?] Lanjut ? (y/n) : ";
    $aa = trim(fgets(STDIN));
    if(strtolower($aa) !== 'y') {
        goto cek;
    }
    $beli = beli($nomor,$plan,$secret,$prodid);
    if ($beli['status'] == true) {
        echo "$G [✓] Sukses Membeli Paket\n";
    } else {
        echo "$R [×] Gagal Membeli Paket .! \n";
    }


} else {
    echo "$R [×] ".$login['message'];
    
}
