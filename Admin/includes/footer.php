<div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="body">
                        <p class="copy m-b-0">© Copyright <time class="year">2018-2019</time> <a href="index.php" target="_blank">NOOR Enterprise</a> - All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>

<script type="text/javascript">
function idleTimer() {
    var t;
    //window.onload = resetTimer;
    window.onmousemove = resetTimer; // catches mouse movements
    window.onmousedown = resetTimer; // catches mouse movements
    window.onclick = resetTimer;     // catches mouse clicks
    window.onscroll = resetTimer;    // catches scrolling
    window.onkeypress = resetTimer;  //catches keyboard actions

    function logout() {
        window.location.href = 'controller/logoutProcess.php';  
    }

   function reload() {
	   
          window.location = self.location.href;  
   }

   function resetTimer() {
        clearTimeout(t);
        t = setTimeout(logout, 1800000); 
       // t= setTimeout(reload, 300);  
    }
}
idleTimer();
</script>