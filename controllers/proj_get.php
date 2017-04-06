<!-- uses github api, please work, please let me be able to do this or i'm gonna
     be very very very sad -->
<?php
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api.github.com/users/norplu/repos");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 
                "Mozilla/5.9 (X11; Linux x86_64; rv:10.0 Gecko/20100101 Firefox/10.0");

        $json = curl_exec($ch);
        curl_close($ch);

        $repos = json_decode($json);
?>
