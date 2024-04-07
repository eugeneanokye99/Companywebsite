<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./admin.css">
    <script src="https://kit.fontawesome.com/472926979a.js" crossorigin="anonymous"></script>
</head>
<body>
   
<div class="container">

    <div class="nav" >
        <div><a href=""><i class="fa-solid fa-border-all fa-2xl" style="color: white;" ></i>Dashboard</a> </div>
        <div><a href=""><i class="fa-regular fa-user fa-2xl" style="color: #feffff;"></i>Teachers</a> </div>
        <div><a href=""><i class="fa-regular fa-user fa-2xl" style="color: #feffff;"></i>Students</a> </div>
        <div><a href=""><i class="fa-solid fa-book-open fa-lg" style="color: #feffff;"></i>Subjects</a> </div>
        <div><a href=""> <i class="fa-solid fa-arrow-right-from-bracket fa-lg" style="color: #feffff;"></i>Logout</a> </div>
    </div>
   
    
    <div class="main"> 
    <div class="header">
        <input type="search" name="" id="">
        <span>
          <i class="fa-sharp fa-regular fa-circle-user fa-lg"></i>
          <i class="fa-solid fa-envelope fa-lg"></i>
        </span>
       
</div>
 <div>   <!-- Number of students and teachers-->
      <div id="teachers"> 
        <p>Total Teachers</p>
        <p>90</p>
      </div>
      <div id="students"> 
        <p>Total Students</p>
        <p>500</p>
    </div> 
    <div id="students"> 
        <p>Total Staff</p>
        <p>700</p>
    </div> 
</div>
<div id="week">  
  <ul>
  <h1 style="color: blue;">Events and Upcoming Activities</h1>
    <li>Inter Houses Competition</li>
    <li>Club Activities</li>
    <li>Graduation Rehearsals</li>
    <li>Inter Classes Quiz</li>
  </ul>
</div>

  </div>
</div>


<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>

