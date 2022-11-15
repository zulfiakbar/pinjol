<!doctype html>
<html>

<head>
    <title>Chat Bot Widget</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('img/test.css')}}">
</head>

<body class="body_bg">
    <p class="ChatLog__message" v-html="message.text"></p>
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/chat.js'></script>
    
</body>

</html>