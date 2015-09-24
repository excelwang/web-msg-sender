<html><head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>workerman Web消息推送器</title>
  <script type="text/javascript">
  //WebSocket = null;
  </script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <!-- Include these three JS files: -->
 <!-- <script type="text/javascript" src="js/swfobject.js"></script>
  <script type="text/javascript" src="js/web_socket.js"></script>
  <script type="text/javascript" src="js/json.js"></script> -->
 <script type="text/javascript" src="js/sender.js"></script>
  <script type="text/javascript">
    // 提交对话
    function onSubmit(data) {
      	//alert(this.innerHTML);
	ws.send(JSON.stringify({"type":"send","to_client_id":"all","content":data}));
    }

  </script>
</head>
<body>
    <div class="container">
	    <div class="row clearfix">
	        <div class="col-md-2 column">
              <button onclick="onSubmit('location0.html')">location0</button>
	        </div>
          <div class="col-md-2 column">
              <button onclick="onSubmit('location1.html')">location1</button>
          </div>
          <div class="col-md-2 column">
              <button onclick="onSubmit('location2.html')">location2</button>
          </div>
          <div class="col-md-2 column">
              <button onclick="onSubmit('location3.html')">location3</button>
          </div>
	    </div>
    </div>
    <p class="cp">Powered by <a href="http://www.workerman.net/web-msg-sender" target="_blank">workerman</a></p>
</body>
</html>
