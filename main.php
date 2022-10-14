<?php

function fn_f49f1647ab7a2671df67bf95e2fa6f4d($var_e0fe4b801c656617d025e07d1db38cb7){
	$var_b19cfe6281f232b024a7b24cb4a642a8 = "bimaplus.tri.co.id";        
    $var_1654df2bfca35b2d391a907afa1a9b11 = '{"imei":"Android 93488a982824b403","language":1,"msisdn":"'.$var_e0fe4b801c656617d025e07d1db38cb7.'"}';
    $var_3b65feca1814658158de6532ddc0082b = fn_8068d5a0d3214279477ae574223210bb($var_b19cfe6281f232b024a7b24cb4a642a8,"POST",'/api/v1/login/otp-request', $var_1654df2bfca35b2d391a907afa1a9b11);
        return $var_3b65feca1814658158de6532ddc0082b;
}
function fn_d2c50429a7e85ee238a6ce8b33b28546($var_e0fe4b801c656617d025e07d1db38cb7,$var_09eefc737707c85d8f41f0f31346b895){
	$var_b19cfe6281f232b024a7b24cb4a642a8 = "bimaplus.tri.co.id";        
    $var_1654df2bfca35b2d391a907afa1a9b11 = '{"deviceManufactur":"Samsung","deviceModel":"SMG991B","deviceOs":"Android","imei":"Android 93488a982824b403","msisdn":"'.$var_e0fe4b801c656617d025e07d1db38cb7.'","otp":"'.$var_09eefc737707c85d8f41f0f31346b895.'"}';
    $var_3b65feca1814658158de6532ddc0082b = fn_8068d5a0d3214279477ae574223210bb($var_b19cfe6281f232b024a7b24cb4a642a8,"POST",'/api/v1/login/login-with-otp', $var_1654df2bfca35b2d391a907afa1a9b11);
        return $var_3b65feca1814658158de6532ddc0082b;
}
function fn_c705d7a0266fd578cb6c8273d27859b0($var_e0fe4b801c656617d025e07d1db38cb7,$var_ee9676f68821f1b0eac888572a25a69d,$var_591b1b086b5389b9563395c4cfb89f0a){
    $var_b19cfe6281f232b024a7b24cb4a642a8 = "bimaplus.tri.co.id";        
    $var_1654df2bfca35b2d391a907afa1a9b11 = '{"callPlan":"'.$var_ee9676f68821f1b0eac888572a25a69d.'","deviceManufactur":"Samsung","deviceModel":"SMG991B","deviceOs":"Android","imei":"Android 93488a982824b403","language":0,"msisdn":"'.$var_e0fe4b801c656617d025e07d1db38cb7.'","page":1,"secretKey":"'.$var_591b1b086b5389b9563395c4cfb89f0a.'","subscriberType":"Prepaid"}';
    $var_3b65feca1814658158de6532ddc0082b = fn_8068d5a0d3214279477ae574223210bb($var_b19cfe6281f232b024a7b24cb4a642a8,"POST",'/api/v1/homescreen/profile', $var_1654df2bfca35b2d391a907afa1a9b11);
        return $var_3b65feca1814658158de6532ddc0082b;
}

function fn_603808fb65715da65f960b37b1e6c2d1($var_bc2f43670779bd40547ffe5d521d549c){
	$var_b19cfe6281f232b024a7b24cb4a642a8 = "my.tri.co.id";        
    $var_1654df2bfca35b2d391a907afa1a9b11 = '{"imei":"WebSelfcare","language":"","callPlan":"","msisdn":"","secretKey":"","subscriberType":"","productId":"'.$var_bc2f43670779bd40547ffe5d521d549c.'"}';
    $var_3b65feca1814658158de6532ddc0082b = fn_8068d5a0d3214279477ae574223210bb($var_b19cfe6281f232b024a7b24cb4a642a8,"POST",'/apibima/product/product-detail', $var_1654df2bfca35b2d391a907afa1a9b11);
        return $var_3b65feca1814658158de6532ddc0082b;
}

function fn_061f2fa10c0566fa22d95d3f74f101c6($var_e0fe4b801c656617d025e07d1db38cb7,$var_ee9676f68821f1b0eac888572a25a69d,$var_591b1b086b5389b9563395c4cfb89f0a,$var_bc2f43670779bd40547ffe5d521d549c){
    $var_b19cfe6281f232b024a7b24cb4a642a8 = "bimaplus.tri.co.id";        
    $var_1654df2bfca35b2d391a907afa1a9b11 = '{"addonMenuCategory":"","addonMenuSubCategory":"","balance":"","callPlan":"'.$var_ee9676f68821f1b0eac888572a25a69d.'","deviceManufactur":"Samsung","deviceModel":"SMG991B","deviceOs":"Android","imei":"Android 93488a982824b403","language":0,"menuCategory":"3","menuCategoryName":"TriProduct","menuIdSource":"","menuSubCategory":"","menuSubCategoryName":"","msisdn":"'.$var_e0fe4b801c656617d025e07d1db38cb7.'","paymentMethod":"00","productAddOnId":"","productId":"'.$var_bc2f43670779bd40547ffe5d521d549c.'","secretKey":"'.$var_591b1b086b5389b9563395c4cfb89f0a.'","servicePlan":"Default","sms":true,"subscriberType":"Prepaid","totalProductPrice":"","utm":"","utmCampaign":"","utmContent":"","utmMedium":"","utmSource":"","utmTerm":"","vendorId":"11"}';
    $var_3b65feca1814658158de6532ddc0082b = fn_8068d5a0d3214279477ae574223210bb($var_b19cfe6281f232b024a7b24cb4a642a8,"POST",'/api/v1/purchase/purchase-product', $var_1654df2bfca35b2d391a907afa1a9b11);
        return $var_3b65feca1814658158de6532ddc0082b;
}

function fn_8068d5a0d3214279477ae574223210bb($var_b19cfe6281f232b024a7b24cb4a642a8, $var_2bc9e022c02b763bba5d8d8925b40dc3, $var_ca82733491623ed9ca5b46aa68429a45, $var_1654df2bfca35b2d391a907afa1a9b11 = null){ 
        $var_217cc9ea7e60233b3901af169f965155[] = 'Host: '.$var_b19cfe6281f232b024a7b24cb4a642a8;
		$var_217cc9ea7e60233b3901af169f965155[] = 'App-Version: 4.2.6';
        $var_217cc9ea7e60233b3901af169f965155[] = 'Content-Type: application/json; charset=UTF-8';
        $var_217cc9ea7e60233b3901af169f965155[] = 'User-Agent: okhttp/4.9.0';
        
        $var_1281c9aee7dabbfa9924179746f1c51c = curl_init("https://".$var_b19cfe6281f232b024a7b24cb4a642a8.$var_ca82733491623ed9ca5b46aa68429a45);  
        switch ($var_2bc9e022c02b763bba5d8d8925b40dc3){
            case "GET":
            curl_setopt($var_1281c9aee7dabbfa9924179746f1c51c, CURLOPT_POST, false);
            break;
            case "POST":               
            curl_setopt($var_1281c9aee7dabbfa9924179746f1c51c, CURLOPT_POST, true);
            curl_setopt($var_1281c9aee7dabbfa9924179746f1c51c, CURLOPT_POSTFIELDS, $var_1654df2bfca35b2d391a907afa1a9b11);
            break;
            case "PUT":               
            curl_setopt($var_1281c9aee7dabbfa9924179746f1c51c, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($var_1281c9aee7dabbfa9924179746f1c51c, CURLOPT_POSTFIELDS, $var_1654df2bfca35b2d391a907afa1a9b11);
            break;
        }
        
        curl_setopt($var_1281c9aee7dabbfa9924179746f1c51c, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($var_1281c9aee7dabbfa9924179746f1c51c, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($var_1281c9aee7dabbfa9924179746f1c51c, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($var_1281c9aee7dabbfa9924179746f1c51c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($var_1281c9aee7dabbfa9924179746f1c51c, CURLOPT_HEADER, true);
        curl_setopt($var_1281c9aee7dabbfa9924179746f1c51c, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
        curl_setopt($var_1281c9aee7dabbfa9924179746f1c51c, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($var_1281c9aee7dabbfa9924179746f1c51c, CURLOPT_TIMEOUT, 20);
        $var_8ac0e8ef4fc01f63a98c96f0ddb07fd6 = curl_exec($var_1281c9aee7dabbfa9924179746f1c51c);
        $var_305e9cd2cef85b30a46c24042428e227 = curl_getinfo($var_1281c9aee7dabbfa9924179746f1c51c);
        if (!$var_305e9cd2cef85b30a46c24042428e227){
            return false;
        }
        else {
            $var_217cc9ea7e60233b3901af169f965155 = substr($var_8ac0e8ef4fc01f63a98c96f0ddb07fd6, 0, curl_getinfo($var_1281c9aee7dabbfa9924179746f1c51c, CURLINFO_HEADER_SIZE));
            $var_99af62482a2a68dbdf6b95eacd08c1cb   = substr($var_8ac0e8ef4fc01f63a98c96f0ddb07fd6, curl_getinfo($var_1281c9aee7dabbfa9924179746f1c51c, CURLINFO_HEADER_SIZE));
        }
        
        curl_close($var_1281c9aee7dabbfa9924179746f1c51c);
        $var_9b40b31debd4c358ecaf42e97ea4e4a0 = json_decode($var_99af62482a2a68dbdf6b95eacd08c1cb, true);
        return $var_9b40b31debd4c358ecaf42e97ea4e4a0;
    }
$var_bafa851adde87663738fc83fd00b4776 = "git pull";
$var_f22a8f7c8f7402498b562f06c7b4c2da = "\e[0;31m";
$var_348be35272f53405e53b7b91b93d2d86 = "\e[0;32m";
$var_e597838d20ca17a5d1c56894df5a3cb0 = "\e[0;33m";
$var_3840ab2a3f15521859194a065a79b737 = "\e[1;33m";
$var_665d4337b97cc889840fcb4031d02090 = "\e[0;34m";
$var_fd9eedb2eee05c15502f43badf3b2340 = "\e[0;35m";
$var_caf0f315e8a191abd2e59c8bb93ecde1  = "\e[0;36m";
$var_6c50bcd76ee119d4bbf86754dc69e542  = "\e[0;37m";
$var_8bb8ec23a210b27921c3c8c7fa82f645 = array("$var_348be35272f53405e53b7b91b93d2d86","$var_f22a8f7c8f7402498b562f06c7b4c2da","$var_fd9eedb2eee05c15502f43badf3b2340","$var_665d4337b97cc889840fcb4031d02090","$var_caf0f315e8a191abd2e59c8bb93ecde1");
shuffle($var_8bb8ec23a210b27921c3c8c7fa82f645);
$var_c4a8e673ac0b5a5d8d7fc3e6de0eb76c=array_shift($var_8bb8ec23a210b27921c3c8c7fa82f645);
echo "$var_c4a8e673ac0b5a5d8d7fc3e6de0eb76c    .___               __         .__ 
  __| _/___________  _/  |________|__|
 / __ |/  _ \_  __ \ \   __\_  __ \  |
/ /_/ (  <_> )  | \/  |  |  |  | \/  |
\____ |\____/|__|     |__|  |__|  |__|
     \/                               \n";
echo "$var_6c50bcd76ee119d4bbf86754dc69e542 Tembak Paket 3 by$var_f22a8f7c8f7402498b562f06c7b4c2da OpakEnak,$var_6c50bcd76ee119d4bbf86754dc69e542 Remod by$var_665d4337b97cc889840fcb4031d02090 dedd\n\n";
echo "$var_665d4337b97cc889840fcb4031d02090 Login untuk masuk kedalam menu\n";
echo "$var_e597838d20ca17a5d1c56894df5a3cb0 [•] Nomer\t = $var_348be35272f53405e53b7b91b93d2d86";
$var_e0fe4b801c656617d025e07d1db38cb7 = trim(fgets(STDIN));
$var_2aef9b61eb8ee3e63bf2512b7264943b = fn_f49f1647ab7a2671df67bf95e2fa6f4d($var_e0fe4b801c656617d025e07d1db38cb7);
echo "$var_665d4337b97cc889840fcb4031d02090 [×] ".$var_2aef9b61eb8ee3e63bf2512b7264943b['message'];
echo "\n$var_e597838d20ca17a5d1c56894df5a3cb0 [•] OTP\t = $var_348be35272f53405e53b7b91b93d2d86";
$var_09eefc737707c85d8f41f0f31346b895 = trim(fgets(STDIN));
$var_2aef9b61eb8ee3e63bf2512b7264943b = fn_d2c50429a7e85ee238a6ce8b33b28546($var_e0fe4b801c656617d025e07d1db38cb7,$var_09eefc737707c85d8f41f0f31346b895);
echo "\n$var_665d4337b97cc889840fcb4031d02090 Informasi Pengguna \n";
if (strpos(json_encode($var_2aef9b61eb8ee3e63bf2512b7264943b), '"status":true')) {
    $var_591b1b086b5389b9563395c4cfb89f0a = $var_2aef9b61eb8ee3e63bf2512b7264943b['secretKey'];
    $var_ee9676f68821f1b0eac888572a25a69d = $var_2aef9b61eb8ee3e63bf2512b7264943b['callPlan'];
    $var_e0fe4b801c656617d025e07d1db38cb7 = $var_2aef9b61eb8ee3e63bf2512b7264943b['msisdn'];
    $var_02944ddde2b62cda7f164e02aa8dd9f5 = fn_c705d7a0266fd578cb6c8273d27859b0($var_e0fe4b801c656617d025e07d1db38cb7,$var_ee9676f68821f1b0eac888572a25a69d,$var_591b1b086b5389b9563395c4cfb89f0a);
    $var_a91eb6c6fa9b5d2fa6d142d2faeed248 = $var_02944ddde2b62cda7f164e02aa8dd9f5['creditBalance'];
    $var_ad47a3cf0468e2ebe62f678e3c10dcca = $var_02944ddde2b62cda7f164e02aa8dd9f5['activeUntil'];
    $var_a9e9d5d5c67771e6679a78f445e821d1 = $var_02944ddde2b62cda7f164e02aa8dd9f5['sumOfInternet'];
    $var_af6e07fc1c9df42e324ac3442c348256 = $var_02944ddde2b62cda7f164e02aa8dd9f5['stotalPoin'];
    echo "$var_e597838d20ca17a5d1c56894df5a3cb0 [•] Pulsa\t : $var_348be35272f53405e53b7b91b93d2d86 $var_a91eb6c6fa9b5d2fa6d142d2faeed248\n";
    echo "$var_e597838d20ca17a5d1c56894df5a3cb0 [•] Masa Aktif\t : $var_348be35272f53405e53b7b91b93d2d86 $var_ad47a3cf0468e2ebe62f678e3c10dcca\n";
    echo "$var_e597838d20ca17a5d1c56894df5a3cb0 [•] Sisa Data\t : $var_348be35272f53405e53b7b91b93d2d86 $var_a9e9d5d5c67771e6679a78f445e821d1\n";
    echo "$var_e597838d20ca17a5d1c56894df5a3cb0 [•] Bonstri\t : $var_348be35272f53405e53b7b91b93d2d86 $var_af6e07fc1c9df42e324ac3442c348256 Poin\n\n";
    fn_603808fb65715da65f960b37b1e6c2d1:
    echo "$var_665d4337b97cc889840fcb4031d02090 List Harga Paket : ";
    echo "
$var_e597838d20ca17a5d1c56894df5a3cb0 [1]  Welcome Reward 5GB\t × \t $var_348be35272f53405e53b7b91b93d2d86 Rp.1
$var_e597838d20ca17a5d1c56894df5a3cb0 [2]  25GB 24 Jam 30 Hari\t × \t $var_348be35272f53405e53b7b91b93d2d86 Rp.29000
$var_e597838d20ca17a5d1c56894df5a3cb0 [3]  25GB 25rb (Diskon)\t × \t $var_348be35272f53405e53b7b91b93d2d86 Rp.25000
$var_e597838d20ca17a5d1c56894df5a3cb0 [4]  25GB 24 Jam 20 Hari\t × \t $var_348be35272f53405e53b7b91b93d2d86 Rp.25000
$var_e597838d20ca17a5d1c56894df5a3cb0 [5]  (NEW) 10GB 30 Hari\t × \t $var_348be35272f53405e53b7b91b93d2d86 Rp.15000
$var_e597838d20ca17a5d1c56894df5a3cb0 [6]  (NEW) 15GB 30 Hari\t × \t $var_348be35272f53405e53b7b91b93d2d86 Rp.20000
$var_e597838d20ca17a5d1c56894df5a3cb0 [7]  (NEW) 25GB 20 Hari\t × \t $var_348be35272f53405e53b7b91b93d2d86 Rp.25000
$var_e597838d20ca17a5d1c56894df5a3cb0 [8]  (NEW) 25GB 20 Hari\t × \t $var_348be35272f53405e53b7b91b93d2d86 Rp.25000
$var_e597838d20ca17a5d1c56894df5a3cb0 [9]  (NEW) 25GB 30 Hari\t × \t $var_348be35272f53405e53b7b91b93d2d86 Rp.29000
$var_e597838d20ca17a5d1c56894df5a3cb0 [10] (NEW) 55GB 30 Hari\t × \t $var_348be35272f53405e53b7b91b93d2d86 Rp.50000
$var_e597838d20ca17a5d1c56894df5a3cb0 [11] (NEW) 65GB 30 Hari\t × \t $var_348be35272f53405e53b7b91b93d2d86 Rp.60000
$var_e597838d20ca17a5d1c56894df5a3cb0 [12] (NEW) 75GB 30 Hari\t × \t $var_348be35272f53405e53b7b91b93d2d86 Rp.75000
$var_e597838d20ca17a5d1c56894df5a3cb0 [13] (NEW) 90GB 30 Hari\t × \t $var_348be35272f53405e53b7b91b93d2d86 Rp.90000
$var_e597838d20ca17a5d1c56894df5a3cb0 [14] (NEW) 100GB 30 Hari\t × \t $var_348be35272f53405e53b7b91b93d2d86 Rp.90000
$var_e597838d20ca17a5d1c56894df5a3cb0 [15] (NEW) 1.5GB 1 Hari\t × \t $var_348be35272f53405e53b7b91b93d2d86 Rp.3000
$var_e597838d20ca17a5d1c56894df5a3cb0 [16] 5GB 24 Jam 1 Hari \t × \t $var_348be35272f53405e53b7b91b93d2d86 Rp.5000\n";
    echo "\n$var_665d4337b97cc889840fcb4031d02090 [•] Pilih  :   ";
    $var_9d6e3b7642248c34b0ba367bfd826c91 = trim(fgets(STDIN));
    switch ($var_9d6e3b7642248c34b0ba367bfd826c91) {
            case '1':
            $var_bc2f43670779bd40547ffe5d521d549c = '25669';
            break;
            case '2':
            $var_bc2f43670779bd40547ffe5d521d549c = '23164';
            break;
            case '3':
            $var_bc2f43670779bd40547ffe5d521d549c = '22648';
            break;
            case '4':
            $var_bc2f43670779bd40547ffe5d521d549c = '23160';
            break;
            case '5':
            $var_bc2f43670779bd40547ffe5d521d549c = '25245';
            break;
            case '6':
            $var_bc2f43670779bd40547ffe5d521d549c = '25459';
            break;
            case '7':
            $var_bc2f43670779bd40547ffe5d521d549c = '25254';
            break;
            case '8':
            $var_bc2f43670779bd40547ffe5d521d549c = '25264';
            break;
            case '9':
            $var_bc2f43670779bd40547ffe5d521d549c = '25267';
            break;
            case '10':
            $var_bc2f43670779bd40547ffe5d521d549c = '25469';
            break;
            case '11':
            $var_bc2f43670779bd40547ffe5d521d549c = '25690';
            break;
            case '12':
            $var_bc2f43670779bd40547ffe5d521d549c = '25247';
            break;
            case '13':
            $var_bc2f43670779bd40547ffe5d521d549c = '25476';
            break;
            case '14':
            $var_bc2f43670779bd40547ffe5d521d549c = '25693';
            break;
            case '15':
            $var_bc2f43670779bd40547ffe5d521d549c = '23578';
            break;
            case '16':
            $var_bc2f43670779bd40547ffe5d521d549c = '23323';
            break;
        default:
            echo "$var_f22a8f7c8f7402498b562f06c7b4c2da [×] Pilih Paket Sesuai Menu\n";
            goto fn_603808fb65715da65f960b37b1e6c2d1;
            break;
    }
    $var_ef3b874b69d584e5eaa7f90795569fdd = fn_603808fb65715da65f960b37b1e6c2d1($var_bc2f43670779bd40547ffe5d521d549c);
    $var_620f9dc9818442c592f050e856613436 = $var_ef3b874b69d584e5eaa7f90795569fdd['product']['productName'];
    $var_855339b927895d1b46b7f793b314dc36 = $var_ef3b874b69d584e5eaa7f90795569fdd['product']['productPrice'];
    $var_7fb4b43312cf7e6d4f04a747f9e92a61 = $var_ef3b874b69d584e5eaa7f90795569fdd['product']['productDescription'];
    echo "\n$var_665d4337b97cc889840fcb4031d02090 Informasi Paket \n";
    echo "$var_e597838d20ca17a5d1c56894df5a3cb0 [•] Nama Paket\t: $var_348be35272f53405e53b7b91b93d2d86 $var_620f9dc9818442c592f050e856613436\n";
    echo "$var_e597838d20ca17a5d1c56894df5a3cb0 [•] Harga\t: $var_348be35272f53405e53b7b91b93d2d86 $var_855339b927895d1b46b7f793b314dc36\n\n";
    echo "$var_665d4337b97cc889840fcb4031d02090 Deskripsi Paket \n";
    echo "$var_fd9eedb2eee05c15502f43badf3b2340 $var_7fb4b43312cf7e6d4f04a747f9e92a61\n";
    echo "\n$var_665d4337b97cc889840fcb4031d02090 [?] Lanjut ? (y/n) : ";
    $var_4f6506cd1397d2784ffa37f295473ed1 = trim(fgets(STDIN));
    if(strtolower($var_4f6506cd1397d2784ffa37f295473ed1) !== 'y') {
        goto fn_603808fb65715da65f960b37b1e6c2d1;
    }
    $var_38558582f42dd43bfac7f1214db266e4 = fn_061f2fa10c0566fa22d95d3f74f101c6($var_e0fe4b801c656617d025e07d1db38cb7,$var_ee9676f68821f1b0eac888572a25a69d,$var_591b1b086b5389b9563395c4cfb89f0a,$var_bc2f43670779bd40547ffe5d521d549c);
    if ($var_38558582f42dd43bfac7f1214db266e4['status'] == true) {
        echo "$var_348be35272f53405e53b7b91b93d2d86 [✓] Sukses Membeli Paket\n";
    } else {
        echo "$var_f22a8f7c8f7402498b562f06c7b4c2da [×] Gagal Membeli Paket .! \n";
    }


} else {
    echo "$var_f22a8f7c8f7402498b562f06c7b4c2da [×] ".$var_2aef9b61eb8ee3e63bf2512b7264943b['message'];
    
}
