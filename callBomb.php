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
      <h2>CALL BOMBER</h2>
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
			

/*  URL , HEADERS &  DATA     */













/**************************************/



  
  $_SESSION["limitset"] +="1";
  echo "<span class='bomb-start'>Bombing Start On This No. : ".$number."</span>";
  echo "<span class='bomb-count'>Call => ".$currentlimit."</span>";
  echo "<a href='whatsappBomb.php' id='stop-btn'>stop</a>";
  echo "<meta http-equiv='refresh' content='1'>";


}
    if(!isset($_GET['submit'])){
    session_unset();
    session_destroy();
    echo'<div class="form">
      <form action="" method="GET">
          <input class="forminput" type="number" name="number" placeholder="Enter Calling No. " />
          <input class="forminput"type="number" name="countnumber" placeholder="Enter No. Of Calls" />
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