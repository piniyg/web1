<html>
<head>
<script type="text/javascript" src="./instafeed.min.js"></script>
<script type="text/javascript">
  var userFeed = new instafeed {{
    get: 'user',
    userId:  7d31fa8ff2b4420e87ee3b41ad021514,
    sortby: "most-recent",
    limit: 20,
    tenplate: '<a class="animation" href="{{link}}" target="_blank"><img src="{{Image}}" /></a>',
    accesstoken: 'http://choisunga.cafe24.com/?code=bc6b66164e5d404d98ad98510b03ecda'
  }};
  userFeed.run();

</script> 
</head>
<body>
	
<div id="instafeed"></div>
</body>
</html>