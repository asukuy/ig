<?php
header("Refresh:600");
set_time_limit(100);
error_reporting(0);
ignore_user_abort(1);
session_start();
require_once('fungsi.php');





$TimeZone="+7";

$_time=gmdate("H", time() + ($TimeZone * 60 * 60));

$blibli2 = array('cookies' => 'ds_user=bliblifollow2;shbid=10511;shbts=1527784956.1873615;rur=ASH;csrftoken=zEHK7f15kfGkP46osGlj8UJ8UaM4QxDx;mid=WxAl-gABAAHMF-YRsw9gBC9yiUDK;ds_user_id=1833578526;urlgen="{\"time\": 1527784956}:1fOQeq:81vwKJDK4RC4j2C8mWx35CQB95Q";sessionid=IGSCaaeff22d2073564fa5407667c95328478b667cf6dd1ae577a995ce0b70504bcd%3Az0iW1DJRfnotRH7aQqeRRoKqiMNN1ucQ%3A%7B%22_auth_user_id%22%3A1833578526%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%221833578526%3AfxIh5mmfceZOES5u4QrNFIgBlKFBHtdv%3A863676ed4ff03c530a1f7cc86cecb26874ddbfeded5b9deab7214e155d8092e3%22%2C%22last_refreshed%22%3A1527784956.1883244514%7D;mcd=3;', 'useragent' => 'Instagram 6.22.0 Android (11/3.4.0; 120; 768x1024; samsung; SM-N9000; SM-N9000; smdkc210; en_US)', 'device_id' => 'android-4513c30b7d281d3bd5b6f91ddb1f61b97', 'username' => 'bliblifollow2', 'id' => '1833578526');

$blibli3  = array('cookies' => 'ds_user=bliblifollow3;shbid=18600;shbts=1527785124.9787476;rur=ASH;csrftoken=pUn9ObIDnZB7iP4GWM92WonioW5vof0g;mid=WxAmowABAAHlkIpIOe57kmtAOMfF;ds_user_id=3176983775;urlgen="{\"time\": 1527785124}:1fOQhY:90EOvCfPHOiwU1ULCfhYHsnLVIg";sessionid=IGSCd4c96e0b00441f5c2fd1128e4118eebc1b636be19fc386c501e7f888363f1b76%3AxJwyrcQ4GwTYUvHPjdyCQGxP7C0YMP7v%3A%7B%22_auth_user_id%22%3A3176983775%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%223176983775%3A3B6SvD8C0NHJ3YZf5HhE1M6XTUmBfH2x%3Aff4962616e5b1852e29d56c3c4536e565606df43e861779fab30267c4733d305%22%2C%22last_refreshed%22%3A1527785124.9795205593%7D;mcd=3;', 'useragent' => 'Instagram 6.22.0 Android (10/1.4.2; 120; 1080x1776; samsung; SM-N9000; SM-N9000; smdkc210; en_US)', 'device_id' => 'android-f26ecc6e3bc7f5e9c8cf23a7c7a315dd8', 'username' => 'bliblifollow3', 'id' => '3176983775');


$blibli5 = array('cookies' => 'ds_user=bliblifollow5;rur=ASH;csrftoken=IOjKTlix1uApcZg9GksrlAzP6vBIYhI3;mid=WxAm4AABAAFvLGDtUPG35kRCSFst;ds_user_id=1645284584;urlgen="{\"time\": 1527785186}:1fOQiY:8P9DnGj_hXScDrpuOIkELQ_seI8";sessionid=IGSCdc1881de895f4539e390e7477060f8555ade09c2ba16864ac4aa0db9242a2773%3AGt2lkQAR8jZrLO0lee81klMvwxH39kU7%3A%7B%22_auth_user_id%22%3A1645284584%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%221645284584%3AnJskj6CkRoDvxPfapwt3PWfVibUBHI8I%3A6a00869c0c9bd35b60d15c5739681ce93d89aca35c50b012e6ffc7a433cabb29%22%2C%22last_refreshed%22%3A1527785186.2419650555%7D;mcd=3;', 'useragent' => 'Instagram 6.22.0 Android (11/2.5.2; 120; 1280x720; samsung; GT-N7000; GT-N7000; smdkc210; en_US)', 'device_id' => 'android-a51c896c9cb81ecb5a199d51ac9fc3c52', 'username' => 'bliblifollow5', 'id' => '1645284584');

$blibli6 = array('cookies' => 'ds_user=bliblifollow6;rur=ASH;csrftoken=eCNMlWtqtpERTEH5pW3tf2udT20YfwLw;mid=WxAnFQABAAGdryYhk4KfBjmICtgL;ds_user_id=1686671202;urlgen="{\"time\": 1527785238}:1fOQjP:v6TEaMZ8gGZZNWZJfJxc4krZhBE";sessionid=IGSC4a2f21ee323da93bbe08ddb625e261dab83dde75a72ef0c9e80e02fe31d4c6ad%3AWj1pOVv4QocYnhyk6u8TlB54Ew56pjHL%3A%7B%22_auth_user_id%22%3A1686671202%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%221686671202%3A3dCRiW8J1ypUT4eKRY8rvld2VvvhUQ2i%3Aa15923a57877afe1a1dc1086500dc8e03765017d1031ebaeedf94a9ecfeeaf0d%22%2C%22last_refreshed%22%3A1527785239.0445046425%7D;mcd=3;', 'useragent' => 'Instagram 6.22.0 Android (11/1.3.0; 320; 480x320; samsung; SM-N9000; SM-N9000; smdkc210; en_US)', 'device_id' => 'android-8f2f470bb9d82081f256a839f1cc8f6c3', 'username' => 'bliblifollow6', 'id' => '1686671202');

$blibli7 = array('cookies' => 'ds_user=bliblifollow7;rur=ASH;csrftoken=5Gk7lJGFfEvD5Zux6G6jw3o49qAzIrxx;mid=WxAnQAABAAEz722shgGSCHXn8Vpq;ds_user_id=2153100422;urlgen="{\"time\": 1527785281}:1fOQk5:eqldH4J9WId1tJUacbtXTEev0qY";sessionid=IGSC15687cf015fd3233cbb6a7fb31248c7ffaa10f3b6d2e449cabab33efcf1db5a9%3AcOm96OdY07CmkGea3Kq85azc7oflAp17%3A%7B%22_auth_user_id%22%3A2153100422%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%222153100422%3ApTL4a16NQ6y3x1iNOGmP0V9zrsHiV9XY%3A531cf5854cb03645718bdab9216a8c0978503ba63abd2c511a2c52ff499f20b4%22%2C%22last_refreshed%22%3A1527785281.299790144%7D;mcd=3;', 'useragent' => 'Instagram 6.22.0 Android (11/3.3.2; 240; 1280x720; samsung; GT-I9220; GT-I9220; smdkc210; en_US)', 'device_id' => 'android-82674fc29bc0d9895cee346548c2cb5c7', 'username' => 'bliblifollow7', 'id' => '2153100422');

$blibli8 =  array('cookies' => 'ds_user=bliblifollow8;shbid=18600;shbts=1527861093.4128788;rur=FTW;csrftoken=U9XB2UW1NE9BiBzfjv5HM5Qnn4XpVTsA;mid=WxFPZAABAAGEGU8_ng3lHtW9d8NT;ds_user_id=3064940313;urlgen="{\"time\": 1527861093}:1fOkSr:HXp1Ir8jWvjjQXqlNrp_S2Ix-xw";sessionid=IGSC5038361594697c5b3b7861a43a29ba70da6d5991fcc3b4fdbfcb816d05645501%3ANqch84XJh1sGLyFMZY7dyvEvcjOmGSho%3A%7B%22_auth_user_id%22%3A3064940313%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%223064940313%3A4R4ldfXv4k8Sf0tjcOmVOos0I5CC3Svf%3A5e815d5511dcb2402c5db918e0dde6467a974ec881ff04b2f74b98f0db6c6dea%22%2C%22last_refreshed%22%3A1527861093.4136993885%7D;mcd=3;', 'useragent' => 'Instagram 6.22.0 Android (10/2.4.5; 120; 1080x1920; samsung; GT-N7000; GT-N7000; smdkc210; en_US)', 'device_id' => 'android-ccd45007df44dd0f12098f486e7e8a0f7', 'username' => 'bliblifollow8', 'id' => '3064940313');




$blibli9 = array('cookies' => 'ds_user=bliblifollow9;rur=ASH;csrftoken=EoSIOVxzx0b3wmuAMsnhDU54ugiRTBUo;mid=WxArpwABAAG4bkaIMgLhi6u_YV2F;ds_user_id=2535286616;urlgen="{\"time\": 1527786408}:1fOR2G:vLhY4gEm3jGpkN4VxgrhAxRHv04";sessionid=IGSC5b18f7ad4345e3ce8bc4992047cc5bb56a21efb48bc2580d46ff8c74cae220c2%3AII6ImYPMAL7hjbIvVKay0b4dQofuBIFJ%3A%7B%22_auth_user_id%22%3A2535286616%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%222535286616%3AVb0mrhKucxV1GoQLNJ2CVy5ObhMvUtnS%3A54d801454111a7fccd037ab199e1332fe03561423209741fa2ea1e7d4d91d4e5%22%2C%22last_refreshed%22%3A1527786408.716527462%7D;mcd=3;', 'useragent' => 'Instagram 6.22.0 Android (11/2.4.2; 240; 720x1280; samsung; SM-N9000; SM-N9000; smdkc210; en_US)', 'device_id' => 'android-995693c15f439e3d189b06e89d145dd54', 'username' => 'bliblifollow9', 'id' => '2535286616');

$blibli10 = array('cookies' => 'ds_user=bliblifollow10;rur=ASH;csrftoken=culfZDLVa0MSDksNd1g4Tad1GOvUOlDn;mid=WxAsIQABAAH5arpEH853gPkhmnf_;ds_user_id=1532645397;urlgen="{\"time\": 1527786530}:1fOR4E:GqfOUdeNVgfYCgvMw5Yyip7R9K8";sessionid=IGSC0b1031dfaf17c3ddefc32395eefaec0a553bb6c0fe184ed1fcb35c715c4afa35%3A66YaLUiZhaWXsy0TPlzt9slD2f0Y2MRh%3A%7B%22_auth_user_id%22%3A1532645397%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%221532645397%3AE0hVthkA3TeQ8VutlDpnCQrgvYxDBnq9%3Aa1175c0ea5484c468be16a8f957134b7074352bffec2ba08b14f8d05adbc7000%22%2C%22last_refreshed%22%3A1527786530.3342399597%7D;mcd=3;', 'useragent' => 'Instagram 6.22.0 Android (10/3.3.1; 240; 768x1024; samsung; GT-I9220; GT-I9220; smdkc210; en_US)', 'device_id' => 'android-076023edc9187cf1ac1f1163470e479a7', 'username' => 'bliblifollow10', 'id' => '1532645397');


$blibli11 =  array('cookies' => 'ds_user=bliblifollow11;rur=ASH;csrftoken=bblUl1lC5asydZPEsWQWzFkGynizuqJY;mid=WxAr4gABAAEKomvYuuJj3_lLoxtm;ds_user_id=1418423538;urlgen="{\"time\": 1527786467}:1fOR3D:LEIWJcFZ9jYgdxYUEpucTVG7hKw";sessionid=IGSC634a25ec58e5ec83619673e991bfbc97f512344f5f040dfaeb5faa8d3b709589%3AfZnRQJX4WjsvBQ8znfvYMvUrbtCUwxAX%3A%7B%22_auth_user_id%22%3A1418423538%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%221418423538%3As7Y7OgBqYnva0JCaJupJjzwAwA7JhVdZ%3Acda6dbf54d0ace114500c5e43aafaa7ab3a37679b50a10e0d2b4406efc48408a%22%2C%22last_refreshed%22%3A1527786467.8874485493%7D;mcd=3;', 'useragent' => 'Instagram 6.22.0 Android (11/2.3.3; 240; 480x800; samsung; GT-I9220; GT-I9220; smdkc210; en_US)', 'device_id' => 'android-1dc3a89d0d440ba31729b0ba74b93a339', 'username' => 'bliblifollow11', 'id' => '1418423538');

$blibli12 = array('cookies' => 'ds_user=bliblifollow12;shbid=18600;shbts=1527786583.0884688;rur=ASH;csrftoken=tlAqqjuLK7dVRR9gTaADbRJYw6sTqn9g;mid=WxAsVQABAAHwhLaQsdSGoAoB4Mp7;ds_user_id=1964053886;urlgen="{\"time\": 1527786582}:1fOR55:gBICAZgcBmGLc3KU8foZXFFvQ2Y";sessionid=IGSC989268e4fa53ea99ad55d0393114c6108c6c8f44ecb6b561e690d3c81cbd7af0%3AxtFGSE9HufgxUewBT000nGDs5sYCrEca%3A%7B%22_auth_user_id%22%3A1964053886%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%221964053886%3AeR4fVDSSphLx4APYWt9ZXNzSI8lR3j8W%3A34c251d3246ccd40f3382bc8453856771c124b4245b4fa3cb477bc47573fd749%22%2C%22last_refreshed%22%3A1527786583.0895924568%7D;mcd=3;', 'useragent' => 'Instagram 6.22.0 Android (11/1.4.0; 320; 1280x720; samsung; GT-I9100; GT-I9100; smdkc210; en_US)', 'device_id' => 'android-91f5738a827405b0f0bd80af1b7e386c4', 'username' => 'bliblifollow12', 'id' => '1964053886');

$blibli13 =  array('cookies' => 'ds_user=bliblifollow13;shbid=7956;shbts=1527786617.366787;rur=ASH;csrftoken=BfCu5aAfTwoDFAp1RsVEihVLzkKRbEvn;mid=WxAsdwABAAEdQI7sUot0P3oFr2q2;ds_user_id=2901403596;urlgen="{\"time\": 1527786617}:1fOR5d:qAQFNzM13ma6z66wI10HzWGe22s";sessionid=IGSC4ea60aabd32cf8c9e82b95cb6b717aee1e6aec73ea7c1d4c7dc3316fdb94c40a%3ADGWk75HRuqrFMZsR2PdfligVBYZXdvWi%3A%7B%22_auth_user_id%22%3A2901403596%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%222901403596%3AyTJU7RaaYuBXdHhb5uUUUrHIiMSNasn2%3A8f7baa44cfcbf72360a5e070efe5f27e215d0cee8b409b39a6c45abcb20b46ae%22%2C%22last_refreshed%22%3A1527786617.367857933%7D;mcd=3;', 'useragent' => 'Instagram 6.22.0 Android (11/3.3.2; 160; 320x480; samsung; GT-I9220; GT-I9220; smdkc210; en_US)', 'device_id' => 'android-5d75b942ab4bd730bc2e819df9c9a4b58', 'username' => 'bliblifollow13', 'id' => '2901403596');

$blibli14 = array('cookies' => 'ds_user=bliblifollow14;rur=ASH;csrftoken=d9Y1kWpYC9xEH40oreCZKXsEEvgDRscu;mid=WxAsrwABAAEyzIaD24MbwKSG9V9f;ds_user_id=2148275435;urlgen="{\"time\": 1527786672}:1fOR6W:OJF5aKUTHWuX5DuO3zJfwPYXQ_A";sessionid=IGSC86c479626a6e8ba14703d9544d31f810e8b56fc528513017fd6eb29d02a7a78d%3A1KqYIKO5r3Jv2SHKSyOfKRBDwnCWH3fr%3A%7B%22_auth_user_id%22%3A2148275435%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A1%2C%22_token_ver%22%3A2%2C%22_token%22%3A%222148275435%3A94Q3xLB91HrDQcZnLz0Ww5Ra1QYqwCSn%3A578ce010fad0a72d71c01d14c585db20d2d8ca76f0b60f018508fdd73e8d8b86%22%2C%22last_refreshed%22%3A1527786672.5266337395%7D;mcd=3;', 'useragent' => 'Instagram 6.22.0 Android (10/2.3.1; 240; 480x800; samsung; SM-N9000; SM-N9000; smdkc210; en_US)', 'device_id' => 'android-5d6646aad9bcc0be55b2c82f697503875', 'username' => 'bliblifollow14', 'id' => '2148275435');








$myssesion = [];
$myssesion[0] = $blibli2;
$myssesion[1] = $blibli3;
$myssesion[2] = $blibli5;
$myssesion[3] = $blibli6;
$myssesion[4] = $blibli7;
$myssesion[5] = $blibli8;
$myssesion[6] = $blibli9;
$myssesion[7] = $blibli10;
$myssesion[8] = $blibli11;
$myssesion[9] = $blibli12;
$myssesion[10] = $blibli13;
$myssesion[11] = $blibli14;

$count = 5;

$id_target = [25980770,367005646,614380621,1534176228,2016740443,8115577,4310360,188236161,522969993];

while(1<2){

require_once('fungsi.php');
$_SESSION['data'] = $myssesion[$count%12];
$target = $id_target[$count%8];

echo $_time;
if($_time>=12){
	
        $jumlah= "50";
        $_POST['tipe'] = "followers";
        
	$data_session = $_SESSION['data'];
	$getinfo = proccess(1, $data_session['useragent'], 'users/'.$target.'/info/');
	$getinfo = json_decode($getinfo[1]);
	if($_POST['tipe']=='followers'):
		if(!is_numeric($jumlah))
			$limit = 1;
		elseif($jumlah>($getinfo->user->follower_count-1))
			$limit = $getinfo->user->follower_count-1;
		else
			$limit = $jumlah-1;
		$tipe = 'followers';
	else:
		if(!is_numeric($jumlah))
			$limit = 1;
		elseif($jumlah>($getinfo->user->follower_count-1))
			$limit = $getinfo->user->follower_count-1;
		else
			$limit = $jumlah-1;
		$tipe = 'followers';
	endif;
	$c = 0;
	$listids = array();
	do{
		$parameters = ($c>0) ? '?max_id='.$c : '';
		$req = proccess(1, $data_session['useragent'], 'friendships/'.$target.'/'.$tipe.'/'.$parameters, $data_session['cookies']);
		$req = json_decode($req[1]);
		for($i=0;$i<count($req->users);$i++):
			if(count($listids)<=$limit)
				$listids[count($listids)] = $req->users[$i]->pk;
		endfor;
		$c = (isset($req->next_max_id)) ? $req->next_max_id : 0;
	}while(count($listids)<=$limit);
	for($i=0;$i<count($listids);$i++):
			$cross = proccess(1, $data_session['useragent'], 'friendships/create/'.$listids[$i].'/', $data_session['cookies'], hook('{"user_id":"'.$listids[$i].'"}'));
			$cross = json_decode($cross[1]);
			print $i.'@'.$data_session['username'].' Sukses Follow => '.$listids[$i].PHP_EOL."\n";
			flush();
	endfor;

}


else


{


        $jumlah= "200";
        $_POST['tipe'] = "following";

	$target = $_SESSION['data']['id'];
	$data_session = $_SESSION['data'];
	$getinfo = proccess(1, $data_session['useragent'], 'users/'.$target.'/info/');
	$getinfo = json_decode($getinfo[1]);
	if($_POST['tipe']=='following'):
		if(!is_numeric($jumlah))
			$limit = 1;
		elseif($jumlah>($getinfo->user->following_count-1))
			$limit = $getinfo->user->following_count-1;
		else
			$limit = $jumlah-1;
		$tipe = 'following';
	else:
		if(!is_numeric($jumlah))
			$limit = 1;
		elseif($jumlah>($getinfo->user->follower_count-1))
			$limit = $getinfo->user->follower_count-1;
		else
			$limit = $jumlah-1;
		$tipe = 'followers';
	endif;
	$c = 0;
	$listids = array();
	do{
		$parameters = ($c>0) ? '?max_id='.$c : '';
		$req = proccess(1, $data_session['useragent'], 'friendships/'.$target.'/'.$tipe.'/'.$parameters, $data_session['cookies']);
		$req = json_decode($req[1]);
		for($i=0;$i<count($req->users);$i++):
			if(count($listids)<=$limit)
				$listids[count($listids)] = $req->users[$i]->pk;
		endfor;
		$c = (isset($req->next_max_id)) ? $req->next_max_id : 0;
	}while(count($listids)<=$limit);
	for($i=0;$i<count($listids);$i++):
			$cross = proccess(1, $data_session['useragent'], 'friendships/destroy/'.$listids[$i].'/', $data_session['cookies'], hook('{"user_id":"'.$listids[$i].'"}'));
			$cross = json_decode($cross[1]);
			print $i.'@'.$data_session['username'].' Sukses Follow => '.$listids[$i]. PHP_EOL."\n";
			flush();
	endfor;

}



$count++;
sleep(20);
}






?>