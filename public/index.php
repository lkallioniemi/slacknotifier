<?php
    if ($_POST['token'] && $_POST['team_id'] && $_POST['team_domain'] && $_POST['channel_id'] && $_POST['channel_name'] && $_POST['user_id'] && $_POST['user_name'] && $_POST['command'] && $_POST['text']){
        if ($_POST['token'] == 'rqvt0PqUB9ayqFwKotL9zgK9'){
            if ($_POST['command'] == "/ooo"){
                $data = array('payload' => '{"text": '.$_POST['text'].', "username": "Nurse Jackie", "icon_url": "https://slack.com/img/icons/app-57.png", "icon_emoji": ":hospital:"}');
                $ch = curl_init();
                curl_setopt($ch,CURLOPT_URL,"https://hooks.slack.com/services/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");
                curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                curl_setopt($ch,CURLOPT_HEADER, false); 
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data, '', '&'));
                $reply=curl_exec($ch);
                curl_close($ch);
            } else {
                die('I don\'t know this command');
            }
        } else {
            die('Wrong token');
        }
    } else {
        die('Wrong parameters');
    }
    ?>