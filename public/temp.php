<?php 
                $data = array('payload' => '{"text": "This is a line of text in a channel.\nAnd this is another line of text.", "username": "Nurce Jackie", "icon_url": "https://slack.com/img/icons/app-57.png", "icon_emoji": ":hospital:"}');
                $ch = curl_init();
                curl_setopt($ch,CURLOPT_URL,"https://hooks.slack.com/services/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");
                curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                curl_setopt($ch,CURLOPT_HEADER, false); 
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data, '', '&'));
                $reply=curl_exec($ch);
                curl_close($ch);
                var_dump($reply);
?>