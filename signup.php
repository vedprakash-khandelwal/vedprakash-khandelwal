<?php
$langgSql   = "SELECT * FROM tbl_language order by id asc ";
$langgQuery = $this->db->query($langgSql);
$count      = $langgQuery->num_rows();
$langgList2[] = $langgQuery->result_array();?>
<script src='https://www.google.com/recaptcha/api.js'></script>

<section id="contact-form">
<div class="container">
<div class="row whitebg signuprow">
<div class="col-md-6">
<div class="cont-form inreimg">
<img src="images/signup.png" class="img-fluid" alt="imgl">
</div>
</div>
<div class="col-md-6">

<div class="cont-form signupf">
  <div class="input-box">
      <div class="col12">
  <h2><?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][424]['title_en'];} else {echo $langgList2[0][424]['title_gm'];}?></h2>
<p><?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][425]['title_en'];} else {echo $langgList2[0][425]['title_gm'];}?></p>
</div>


</div>
 <?php echo form_open(current_url(), array('class' => 'form-horizontal ajax_form'));?>

<div class="input-box">
	<div class="col6">
		
		<input type="text" name="first_name" id="first_name" class="form-control" placeholder="<?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][426]['title_en'];} else {echo $langgList2[0][426]['title_gm'];}?>"/>
		<span class="required first_name error"></span>
	</div>
	<div class="col6">
		
		<input type="text" name="last_name" id="last_name" class="form-control" placeholder="<?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][427]['title_en'];} else {echo $langgList2[0][427]['title_gm'];}?>"/>
		<span class="required last_name error"></span>
	</div>
<div class="clearfix"></div>
</div>
<div class="input-box">
<?php 
  $countryCodeSql   = "SELECT * FROM tbl_countries order by countries_id asc ";
  $countryCodeQuery = $this->db->query($countryCodeSql);

  ?>
  <div class="col6">
    
      <select  class="form-control" name="country_code" id="country_code">
        <option value=""><?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][703]['title_en'];} else {echo $langgList2[0][703]['title_gm'];}?></option>
        <?php 	foreach($countryCodeQuery->result_array() as $countryCodeList) {  print_r($countryCodeList);?> 
          <option value="<?php echo $countryCodeList['countries_isd_code'];?>"><?php echo $countryCodeList['countries_iso_code'];?>-<?php echo $countryCodeList['countries_isd_code'];?></option>
          <?php } ?>
      </select>	
           
            <span class="required country_code error"></span>
</div>
  <div class="col6">
	
            <input type="text" class="form-control" name="phone_number" id="phone_number" value="<?php echo $email_address;?>" placeholder="<?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][702]['title_en'];} else {echo $langgList2[0][702]['title_gm'];}?>" />
        
            <span class="required phone_number error"></span>
</div>
</div>

<div class="input-box">
  <div class="col12">
	
            <input type="text" class="form-control" name="email" id="email" value="<?php echo $email_address;?>" placeholder="<?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][409]['title_en'];} else {echo $langgList2[0][409]['title_gm'];}?>" />
          <?php /*?>  <input type="hidden" name="email" value="<?php echo $email_address;?>"><?php */?>
            <span class="required email error"></span>
</div>
</div>
<div class="input-box">
  <div class="col12">
	
          <input type="password" name="password" id="password" class="form-control" placeholder="<?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][420]['title_en'];} else {echo $langgList2[0][420]['title_gm'];}?>"/>
          <span class="required password error"></span>
</div>
</div>
<div class="input-box">
  <div class="col12">
	
          <input type="coupon_apply" name="coupon_apply" id="coupon_apply" class="form-control" placeholder="Apply Coupon<?php /*if($_SESSION['language'] == 'en') {echo  $langgList2[0][420]['title_en'];} else {echo $langgList2[0][420]['title_gm'];}*/?>"/>
          <span class="required coupon_apply error"></span>
</div>
</div>
<div class="input-box">
  <div class="col12">
   <input type="checkbox" id="terms" name="terms">
            <label for="terms"><a href="<?php echo base_url('terms-condition');?>" target="_blank"><?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][428]['title_en'];} else {echo $langgList2[0][428]['title_gm'];}?></a></label>
            <span class="required terms error"></span>
</div>
</div>

<div class="input-box checkfee">
  <div class="col12">
<div class="g-recaptcha" data-sitekey="6Lei0PIUAAAAAJQThZCQoCTVc15Nro5tWC5-hPKo"></div>  
</div>
</div>
<div class="input-box">
  <div class="col12">
<button type="submit" name="submit" class="btn btn-primary"><?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][424]['title_en'];} else {echo $langgList2[0][424]['title_gm'];}?></button>
</div>


<div class="input-box habede">
  <div class="col12">
<p class="liger">Or Signup using your social media account</p>
</div>
</div>
<div class="input-box socillog">
  <div class="col6">
    <a href="javascript:void(0)"  onclick="fbLogin();"  class="facbok"><i class="fa fa-facebook" aria-hidden="true"></i> <span>facebook</span></a>
</div>
<div class="col6">
   <a href="<?=$google_login_url?>" class="google"><i class="fa fa-google" aria-hidden="true"></i> <span>google</span></a>
</div>
<div class="clearfix"></div>
</div>
<!--<fb:login-button login_text="facebook" scope="public_profile,email" data-auto-logout-link="false" onlogin="checkLoginState();">
</fb:login-button>
-->

<div class="input-box habede">
  <div class="col12">
<p><?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][431]['title_en'];} else {echo $langgList2[0][431]['title_gm'];}?>  <a href="<?php echo base_url('login');?>"><?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][429]['title_en'];} else {echo $langgList2[0][429]['title_gm'];}?></a></p>
</div>
</div>

</div>
</form>


		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>


<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v11.0&appId=1885361368331645&autoLogAppEvents=1" nonce="EHJF2Gik"></script>


<script>
FB.logout(function(response) {
   // Person is now logged out
});
	function fbLogin() {
    FB.login(function (response) {
        if (response.authResponse) {
            // Get and display the user profile data
            testAPI(response.authResponse.userID);
        } else {
            document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
        }
    }, {scope: 'email'});
}
	
	$(document).on('click','.facbok',function(){ alert('ss');
		 FB.getLoginStatus(function(response) {   // See the onlogin handler
		  statusChangeCallback(response);
		});
	});
	
  function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('statusChangeCallback');
    console.log(response);                   // The current login status of the person.
    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
      testAPI(response.authResponse.userID);  
    } else {                                 // Not logged into your webpage or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this webpage.';
    }
  }


  function checkLoginState() {               // Called when a person is finished with the Login Button.
    FB.getLoginStatus(function(response) {   // See the onlogin handler
      statusChangeCallback(response);
    });
  }


  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1885361368331645',
      cookie     : true,                     // Enable cookies to allow the server to access the session.
      xfbml      : true,                     // Parse social plugins on this webpage.
      version    : 'v2.10'           // Use this Graph API version for this call.
    });


    FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
      statusChangeCallback(response);        // Returns the login status.
    });
  };
 
  function testAPI(userId) {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
    console.log('Welcome!  Fetching your information.... ');
    FB.api(
      '/'+userId+'/?fields=id,first_name,last_name,gender,email',
      'GET',
      {}, function(response) {
		
	var details = response;
	var first_name = details.first_name;
	var last_name = details.last_name;
	var email = details.email;
	var $this = $(this).closest('form');
	$.ajax({
		type: "POST",
		url: "https://crew360.de/signup_login_facebook",
		data: "&first_name=" + first_name + "&email=" + email + "&last_name=" + last_name+ "&userId=" + userId,
		dataType: 'json',
		success: function (response) {
			checkTosterResponse(response);
			
			if(response.redirectURL){
				window.location.href=response.redirectURL;
			}
						
		},
		error:function(response){
			$submitBTN.removeAttr('disabled'); 
			$submitBTN.find('.fa-spin').remove();
		}
	});
		
		
     // console.log('Successful login for: ' + response.name);
      //	document.getElementById('status').innerHTML =
       // 'Thanks for logging in, ' + name + '!'+ email + '!'+ gender + '!';
    });
  }
 function checkTosterResponse(data)
  {
    if(data)
    {
      if(data.message)
      {
        if(data.success)
        {
          toastr.success(data.message, { timeOut: 1000000000000 });
        }
        else
        {
          toastr.error(data.message, { timeOut: 1000000000000 });
        }
      }
    }    
  }

</script>
</div>
</div>



</div>
</div>
</section>

<!--
<section class="same-section bg-green">
  <div class="container">
    <div class="login-box">
      <h1><?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][424]['title_en'];} else {echo $langgList2[0][424]['title_gm'];}?></h1>
      <h2><?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][425]['title_en'];} else {echo $langgList2[0][425]['title_gm'];}?></h2>

      <?php echo form_open(current_url(), array('class' => 'form-horizontal ajax_form'));?>
        <div class="row">
          <div class="col-md-6">
              <div class="form-group designe-input">
                <label class="form-control-placeholder"><?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][426]['title_en'];} else {echo $langgList2[0][426]['title_gm'];}?></label>
                <input type="text" name="first_name" id="first_name" class="form-control"/>
                <span class="required first_name error"></span>
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-group designe-input">
              <label class="form-control-placeholder"><?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][427]['title_en'];} else {echo $langgList2[0][427]['title_gm'];}?></label>
              <input type="text" name="last_name" id="last_name" class="form-control"/>
              <span class="required last_name error"></span>
            </div>
          </div>
        </div>
        <div class="form-group designe-input">
          <div class="form-group <?php echo ($email_address) ? 'focused':'';?>">
            <label class="form-control-placeholder"><?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][409]['title_en'];} else {echo $langgList2[0][409]['title_gm'];}?></label>
            <input type="text" class="form-control" name="email" id="email" value="<?php echo $email_address;?>"  />
          <?php /*?>  <input type="hidden" name="email" value="<?php echo $email_address;?>"><?php */?>
            <span class="required email error"></span>

          </div>
        </div>
        <div class="form-group designe-input">
          <label class="form-control-placeholder"><?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][420]['title_en'];} else {echo $langgList2[0][420]['title_gm'];}?></label>
          <input type="password" name="password" id="password" class="form-control"/>
          <span class="required password error"></span>
        </div> 
        <div class="form-group designe-input">
          <div class="checkbox-custom">
            <input type="checkbox" id="terms" name="terms">
            <label for="terms"><a href="<?php echo base_url('terms-condition');?>" target="_blank"><?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][428]['title_en'];} else {echo $langgList2[0][428]['title_gm'];}?></a></label>
            <span class="required terms error"></span>
         </div>
        </div>
        <div class="form-group designe-input">             
          <div class="g-recaptcha" data-sitekey="6Lei0PIUAAAAAJQThZCQoCTVc15Nro5tWC5-hPKo"></div>             
        </div>   
        <div class="btn-group">
          <button type="submit" name="submit" class="btn btn-primary"><?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][424]['title_en'];} else {echo $langgList2[0][424]['title_gm'];}?></button>
        </div>
      </form>
      <p class="text-center"><?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][431]['title_en'];} else {echo $langgList2[0][431]['title_gm'];}?>  <a href="<?php echo base_url('login');?>"><?php if($_SESSION['language'] == 'en') {echo  $langgList2[0][429]['title_en'];} else {echo $langgList2[0][429]['title_gm'];}?></a></p>
    </div>
  </div>
</section>
-->
<?php 

if(isset($_POST['submit']))
{
   function CheckCaptcha($userResponse) {
      $fields_string = '';
      $fields = array(
          'secret' => "6Lei0PIUAAAAAMYiQ1H3Xt_pU-DEFZvPlKE2zn66",
          'response' => $userResponse
      );
      foreach($fields as $key=>$value)
      $fields_string .= $key . '=' . $value . '&';
      $fields_string = rtrim($fields_string, '&');

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
      curl_setopt($ch, CURLOPT_POST, count($fields));
      curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

      $res = curl_exec($ch);
      curl_close($ch);

      return json_decode($res, true);
  }

if($_SESSION['language'] == 'en') {$msg =   $langgList2[0][430]['title_en'];} else {$msg = $langgList2[0][430]['title_gm'];}
  // Call the function CheckCaptcha
  $result = CheckCaptcha($_POST['g-recaptcha-response']);  

  if ($result['success']) {
      //If the user has checked the Captcha box
      echo $msg;   
  
  } else {
      // If the CAPTCHA box wasn't checked
     echo '<script>alert("Error Message");</script>';     
  }
}
?>