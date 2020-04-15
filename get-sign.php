<?php

function getSign($id=''){
    $ctime = time();
    print_r($ctime);
    $API_KEY = '38e8643fb0dc04e8d65b99994d3dafff';
    $SECRET_KEY = '10a01dcf33762d3a204cb96429918ff6';

    $str = "ctime=".$ctime."id=".$id;
    $sha256 = hash('sha256',$str);
    $strsig = '/song/get-song-info' . $sha256;
    $sig = hash_hmac('sha512', $strsig, $SECRET_KEY);
    // print_r($ctime);
    echo "<br>";
    $url = 'https://zingmp3.vn/api/song/get-song-info?id=' . $id . '&ctime='. $ctime .'&sig='.$sig.'&api_key='.$API_KEY;
    print_r($url);

}
getSign('ZWAFOEAF');

?>