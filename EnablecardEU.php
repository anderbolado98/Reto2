<form method="POST"> 
    <input type="submit" name="Europa" value="EUROPE"/>
</form>

<?php
    if (isset($_POST['Europa'])) {
        $target = 'EUROPE';
    }
$apiURL= 'http://192.168.1.67:4000/enablecard2/user1/' .$target;
$curl= curl_init($apiURL);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_URL, $apiURL);
$website_content=curl_exec($curl);
curl_close($curl);

?>