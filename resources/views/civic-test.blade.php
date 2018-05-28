<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/civic/civic-modal.min.css">
    <script src="/js/civic/civic.sip.min.js"></script>
    <script src="/js/civic/jquery-3.3.1.slim.min.js"></script>
    <script src="https://raw.githubusercontent.com/emn178/js-sha256/master/build/sha256.min.js"></script>
    <script type="text/javascript" src="qrc:///qtwebchannel/qwebchannel.js"></script>
    <title>Civic test</title>
</head>

<body>
    <script>

        $(document).ready(function() {
	    var socket = new WebSocket("wss://localhost:6382");
            var civicSip = new civic.sip({
                appId: 'Skzcny80G'
            });

            civicSip.signup({
                style: 'popup',
                scopeRequest: civicSip.ScopeRequests.BASIC_SIGNUP
            });

            civicSip.on('auth-code-received', function (event) {
                console.log('auth-code-received', event.response);
                window.civicToken = event.response;

	        //send data to server
	        new QWebChannel(socket, function(channel) {
	            // make core object accessible globally
                    window.core = channel.objects.core;
		    console.log("Send token to user...");
		    core.receiveText(window.civicToken);
                });
            });

            civicSip.on('civic-sip-error', function (error) {
                console.log('   Error type = ' + error.type);
                console.log('   Error message = ' + error.message);
            });
        })
    </script>
</body>

</html>
