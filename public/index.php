<?php
    if ($_POST['token'] && $_POST['team_id'] && $_POST['team_domain'] && $_POST['channel_id'] && $_POST['channel_name'] && $_POST['user_id'] && $_POST['user_name'] && $_POST['command'] && $_POST['text']){
        if ($_POST['token'] == 'Yo8DgpfdSOWBnNIYfzB4WbWw'){
            if ($_POST['command'] == "/ooo"){
                $url = 'https://hooks.slack.com/services/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';
                $data = array('payload' => '{"text": "This is a line of text in a channel.\nAnd this is another line of text."}');

                // use key 'http' even if you send the request to https://...
                $options = array(
                    'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data);,
                    ),
                );
                $context  = stream_context_create($options);
                $result = file_get_contents($url, false, $context);
                die($context);
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