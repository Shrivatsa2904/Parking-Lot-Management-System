<?php 
$er = "";
if($_GET)
{
  $er = $_GET["error"];


}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script>function disputeIframe()
            {setTimeout(function ()
                {
                    self.document.open();
                    self.document.write("<h1><a style='font-weight: normal; color: #000; font-family: arial;' href='" + self.location.href + "' target='_top'>Iframes are not supported on a free plan.</a></h1>");
                    self.document.close();},200);
            }
            try {
                if (self!==top)
                {
                    disputeIframe();
                }
            }
            catch(e)
            {
                disputeIframe();
            }
        </script>
        <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color:#FFA07A;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: absolute; /* Stay in place */
  z-index: 1;
  transform:translate(30%,30%);/* Sit on top */
  left:50%;
  top:60%;
  width: 50%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.header {
  padding: 80px; /* some padding */
  text-align: center; /* center the text */
  background-image: url("https://www.theglobeandmail.com/resizer/NtDW6HpctASDgd1GK9Z0buU9sYA=/3500x0/filters:quality(80)/arc-anglerfish-tgam-prod-tgam.s3.amazonaws.com/public/ZMXGWDNNKRFPTBC4K224VDXJ5U.jpg");
  background-size: 1920px;
  background-repeat: no-repeat;
  background-position: center;
  margin: 0PX;
   color:#;
 
}
#idol{
    color:#2e4053;
}
#le {
    
    margin-top: 0px;
    margin-left: 0px;
    margin-bottom: 0px;
    margin-right: 0px;
    background:transparent; 
    
    float: left;
    padding-left: 0px;
    color: black;
  }
#W {
    width: 100%;
}
</style>
        <meta name="simbla" app="aaaaaaace3255932a01bcb7f7d07c5810217f167" key="ce8cb74211f4ac96fc6c91e94067f337" server="https://apps.simbla.com:443/parse">
        <link href="//d33rxv6e3thba6.cloudfront.net/asset/sites/css/bootstrap3.min.c.css?v=1.1" rel="stylesheet">
        <link rel="stylesheet" href="//d33rxv6e3thba6.cloudfront.net/asset/sites/css/font-awesome.min4.css">
        <link href="//d33rxv6e3thba6.cloudfront.net/asset/sites/css/hover-min.css" rel="stylesheet">
        <link href="/static/css/style.css?v=2.100.0" rel="stylesheet">
        <link href="/static/css/blocks.css?v=2.100.0" rel="stylesheet">
        <link href="/static/css/theme-css/theme1.css?v=2.100.0" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lora:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nunito:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cinzel:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Dancing Script:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic">
        <style type="text/css" data="Page Custom CSS">
        </style>
        <script src="//d33rxv6e3thba6.cloudfront.net/asset/sites/js/jquery-3.3.1.min.js">            
        </script>
        <meta name="page-source" site="//sites.simbla.com/1f56cfc5-eaed-094d-d42a-de02304527c2" page="first" site-id="5d902cbb0bdbeb001db5e308" page-id="5d902cdc87c9ac0019f03113" master-page-id="">
        <link rel="canonical" href="//sites.simbla.com/1f56cfc5-eaed-094d-d42a-de02304527c2/">
        <meta name="generator" content="Simbla.com - Websites and online Databases">
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse" class="simbla-page static-page ">
        <div id="windowDiv">
            <div id="MarginsTop" style="height: 0px;" class="row">
            </div><div id="bodyContainer" style="width:100%">
                
            <div class="simblaEL containerHolder" data-drag="P121" id="P121" style="">
                <a class="simblaEL anchorElm" data-drag="divCounter" name="Intro1" id="Intro1">
                    
                </a>
                <div class="container-fluid minHeight100 active secondary" data-border-type="All" style="min-height: 694px; background-position: initial; background-size: cover; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; background-image: url(&quot;https://s3.amazonaws.com/simbla-static-2/2019/09/5d9027df0bdbeb001db5e302/5d902cbb0bdbeb001db5e308/mrOpVKpX9rg6rhV-aYygUEcO.jpeg&quot;); border-radius: 0px;" data-title="Container">
                    <div class="simblaEL containerHolder" data-drag="P123" id="P123">
                        <div class="container" style="" data-title="Container">
                            
                            <div class="row simblaEL rDivider" data-drag="P133" id="P133" style="position: relative; padding-top: 190px;" data-title="Row">
                                <div class="sDivider col-md-12 index0" data-colsize="12" data-title="Column">
                                    <div class="simblaEL tcH" data-drag="P135" id="P135">
                                        <div class="textContainer H1" style="cursor: text;">
                                            <h1><div style="text-align: center;"><span style="line-height: 1.1; background-color: initial;"><font face="Cinzel" color="white">PARKING LOT MANAGEMENT
                                                        </font>
                                                    </span>
                                                </div>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="simblaEL tcH" data-drag="P137" id="P137">
                                        <div class="textContainer H2" style="cursor: text;">
                                            <h2><div style="text-align: center;">
                                                    <font face="Dancing Script" color="white">Park your vehicle here
                                                    </font> 
                                                </div>
                                            </h2>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="row simblaEL rDivider" data-drag="P139" id="P139" style="position: relative; padding-top: 30px;" data-title="Row">
                                <div class="sDivider col-md-5 index0" data-colsize="5" data-title="Column">
                                    
                                </div>
                                <div class="sDivider col-md-2 index1" data-colsize="2" data-title="Column">
                                    <button type="submit" class="simblaEL btn btn-block btn-lg hvr-shadow" data-drag="P141" id="P141" data-border-type="All" style="border-radius: 150px;" onclick="document.getElementById('id01').style.display='block'">Login
                                    </button>  
                                    <p style="color: white;font-size: 30px;"><?php

                                    if($er)
                                    {
                                      echo $er;
                                    }

                                    ?> </p>                                 
                                </div>
                                <div class="sDivider col-md-5 index2" data-colsize="5" data-title="Column">
                                    
                                </div>
                                    
                            </div>
                                
                        </div>
                            
                    </div>
                        
                </div>
                    
            </div>
                <div class="simblaEL containerHolder" data-drag="P252" id="P252" style="position: relative;background-color:black">
                    <a class="simblaEL anchorElm" data-drag="divCounter" name="Multimedia1" id="Multimedia1" data-id="5d9182ff87c9ac0019f0353c">
                        
                    </a><div class="container-fluid secondary" style="/* margin-top: 30px; *//* margin-bottom: 30px; */ border-radius: 0px; padding-top: 60px; padding-bottom: 60px;" data-border-type="All" data-title="Container">
                        <div class="row simblaEL rDivider" data-drag="P254" id="P254" style="position: relative;" data-title="Row">
                            <div class="sDivider col-md-2 index0" data-colsize="2" data-title="Column">
                                
                            </div>
                            <div class="sDivider col-md-8 index1" data-colsize="8" data-title="Column">
                                <div class="row simblaEL rDivider" data-drag="P256" id="P256" data-title="Row">
                                    <div class="sDivider col-md-1 index0" data-colsize="1" data-title="Column">
                                        
                                    </div>
                                    <div class="sDivider col-md-2 index1" data-colsize="2" data-title="Column">
                                        <div class="simblaEL tcH" data-drag="P262" id="P262">
                                            
                                        </div>
                                            
                                    </div>
                                    <div class="sDivider col-md-9 index2" data-colsize="9" data-title="Column">
                                        <div class="simblaEL tcH" data-drag="P264" id="P264" style="position: relative;">
                                            <div class="textContainer H2" style="margin-left: 10px; padding-bottom: 15px; padding-top: 0px; cursor: text;">
                                                <h2>
                                                    
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="simblaEL tc" data-drag="P266" id="P266" style="position: relative;">
                                            <div class="textContainer" style="cursor: text; margin-left: 10px; line-height: 20px;">
                                                <p style="text-align: justify;color:white">
                                                    For more than 20 years India never had car parking management. We design and produce advanced systems for management of all types of car parks offering end to end services. As each project is unique we design customized systems : entries, exits, traffic flow, guidance systems and access management for every parking project.&#xA0;
                                                </p>
                                                <p style="text-align: justify;color:white">
                                                    Parking Management includes:
</p>
<p style="text-align: justify;color:white">
    &#xBB; Entry Ticket Dispenser with Automatic
 Boom Barrier&#xA0;
</p>
<p style="text-align: justify;color:white">
    &#xBB; Decentralized payment collection system
 or payment at exit&#xA0;
</p>
<p style="text-align: justify;color:white">
    &#xBB; Exit Ticket Reader with automatic Boom
 Barrier&#xA0;
</p>
<p style="text-align: justify;color:white">
    Benefits of Parking
 Management System:&#xA0;
</p>
<p style="text-align: justify;color:white">
    &#xBB; Enhanced Security
</p>
<p style="text-align: justify;color:white">&#xBB; Controlled Pilferage
</p>
<p style="text-align: justify;color:white">&#xBB; Reduced Operating cost
</p>
<p style="text-align: justify;color:white">&#xBB; Quick ROI
</p>
<p style="text-align: justify;color:white">&#xBB; Convenient for users
</p>
<p style="text-align: justify;color:white">
    &#xBB; No conflicts of payments for number of
 hours parked
</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sDivider col-md-2 index2" data-colsize="2" data-title="Column">
                                
                            </div>
                                
                        </div>
                            
                    </div>
                        
                </div>
                <div class="simblaEL containerHolder" data-drag="P267" id="P267" style="position: relative;">
                    <a class="simblaEL anchorElm" data-drag="divCounter" name="Content1" id="Content1" data-id="5d918bb987c9ac0019f03550">
                        
                    </a>
                    <div class="center-bg-image container-fluid active main" style="padding-top: 50px; padding-bottom: 50px;background-color: orange" data-title="Container">
                        <div class="simblaEL containerHolder" data-drag="P269" id="P269" style="position: relative;">
                            <div class="container" style="margin-top: 30px; margin-bottom: 30px;" data-title="Container">
                                <div class="row simblaEL rDivider" data-drag="P271" id="P271" style="position: relative; margin-top: 30px; margin-bottom: 30px;" data-title="Row">
                                    <div class="sDivider col-md-4 index0" data-colsize="4" style="display: table-cell;" data-title="Column">
                                        <div class="simblaEL iconElm" data-drag="P273" id="P273">
                                            <i class="fa fa-key" style="font-size: 34px; text-shadow: none; box-sizing: content-box; line-height: 110px; text-align: center; width: 110px; height: 110px; display: inline-block; overflow: hidden; border-radius: 50%; background-color: rgb(224, 224, 224);" data-color="" data-bgcolor="#e0e0e0" data-shadow="ns" data-border="circle">
                                                
                                            </i>
                                        </div>
                                        <div class="simblaEL tcH" data-drag="P275" id="P275" style="position: relative;">
                                            <div class="textContainer H2" style="margin-left: 10px;"><h2 style="text-align: center;">Safe and private</h2>
                                            </div>
                                        </div>
                                        <div class="simblaEL tc" data-drag="P277" id="P277" style="position: relative;">
                                            <div class="textContainer" style="margin-left: 10px; padding: 20px; cursor: text;">
                                                <p style="text-align: center;">
                                                    Your Vehicles are our vehicles. Your vehicles parked are very safely protected with advanced security system.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="simblaEL tcH" data-drag="P279" id="P279" style="position: relative;">
                                            
                                        </div>
                                            
                                    </div>
                                    <div class="sDivider col-md-4 index1" data-colsize="4" data-title="Column">
                                        <div class="simblaEL iconElm" data-drag="P281" id="P281">
                                            <i class="fa fa-magic" style="font-size: 34px; text-shadow: none; box-sizing: content-box; line-height: 110px; text-align: center; width: 110px; height: 110px; display: inline-block; overflow: hidden; border-radius: 50%; background-color: rgb(224, 224, 224);" data-color="" data-bgcolor="#e0e0e0" data-shadow="ns" data-border="circle">
                                                
                                            </i>
                                        </div>
                                        <div class="simblaEL tcH" data-drag="P283" id="P283" style="position: relative;">
                                            <div class="textContainer H2" style="margin-left: 10px;"><h2 style="text-align: center;">Easy and fun</h2>
                                            </div>
                                        </div>
                                        <div class="simblaEL tc" data-drag="P285" id="P285" style="position: relative;">
                                            <div class="textContainer" style="margin-left: 10px; padding: 20px; cursor: text;">
                                                <p style="text-align: center;">
                                                    We provide quick and advanced
 solutions for users from their entry in the parking to the exit, helping users to reach the nearest parking bay through Dynamic Guidance System
                                                </p>
                                            </div>
                                        </div>
                                        <div class="simblaEL tc" data-drag="P287" id="P287" style="position: relative;">
                                            
                                        </div>
                                        <div class="simblaEL tcH" data-drag="P289" id="P289" style="position: relative;">
                                            
                                        </div>
                                            
                                    </div>
                                    <div class="sDivider col-md-4 index2" data-colsize="4" data-title="Column">
                                        <div class="simblaEL iconElm" data-drag="P291" id="P291">
                                            <i class="fa fa-life-bouy" style="font-size: 34px; text-shadow: none; box-sizing: content-box; line-height: 110px; text-align: center; width: 110px; height: 110px; display: inline-block; overflow: hidden; border-radius: 50%; background-color: rgb(224, 224, 224);" data-color="" data-bgcolor="#e0e0e0" data-shadow="ns" data-border="circle">
                                                
                                            </i>
                                        </div>
                                        <div class="simblaEL tcH" data-drag="P293" id="P293" style="position: relative;">
                                            <div class="textContainer H2" style="margin-left: 10px;"><h2 style="text-align: center;">Great service</h2>
                                            </div>
                                        </div>
                                        <div class="simblaEL tc" data-drag="P295" id="P295" style="position: relative;">
                                            <div class="textContainer" style="margin-left: 10px; padding: 20px; cursor: text;">
                                                <p style="text-align: center;">
                                                    The workers are very dedicated and hard working.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="simblaEL tc" data-drag="P297" id="P297" style="position: relative;">
                                            
                                        </div>
                                        <div class="simblaEL tcH" data-drag="P299" id="P299" style="position: relative;">
                                            
                                        </div>
                                            
                                    </div>
                                        
                                </div>
                                    
                            </div>
                                
                        </div>
                            
                    </div>
                        
                </div>
                <div class="simblaEL containerHolder" data-drag="P21" id="P21" style="position: relative;">
<a class="simblaEL anchorElm" data-drag="divCounter" name="Content0" id="Content0" data-id="5d902e740bdbeb001db5e30b">
</a><div class="center-bg-image container-fluid" style="padding-top: 0px; padding-bottom: 50px;" data-title="Container">
<div class="simblaEL containerHolder" data-drag="P23" id="P23" style="position: relative;">
<div class="container" style="/* margin-top: 30px; *//* margin-bottom: 30px; */ padding-top: 0px;" data-title="Container">
<div class="row simblaEL rDivider" data-drag="P25" id="P25" style="position: relative; margin-top: 20px; margin-bottom: 40px;" data-title="Row">
<div class="sDivider col-md-12 index0" data-colsize="12" data-title="Column"><div class="simblaEL tcH" data-drag="P27" id="P27">
<div class="textContainer H1" style="cursor: text;">
<h1 style="text-align: center;">Our employees</h1>
</div>
</div>
<div class="simblaEL tcH" data-drag="P29" id="P29" style="position: relative;">
<div class="textContainer H3" style="cursor: text; padding-top: 0px; padding-bottom: 10px;"><h3 style="text-align: center;">
</h3>
</div>
</div>
</div>
</div>
<div class="row simblaEL rDivider" data-drag="P31" id="P31" style="position: relative;" data-title="Row">
<div class="sDivider col-md-3 index0" data-colsize="3" data-title="Column">
<figure class="simblaEL simblaImg" data-drag="P33" id="P33" style="border-radius: 0px;">
<img draggable="false" class="" style="width:205px;height:140px" alt="vatsa.jpg" data-id="" title="vatsa.jpg" src="https://s3.amazonaws.com/simbla-static-2/2019/09/5d9027df0bdbeb001db5e302/5d902cbb0bdbeb001db5e308/vVLhT6Oxm47b2qAbH6_VGf5Z.jpeg">
<figcaption>
</figcaption>
</figure>
<div class="simblaEL tcH" data-drag="P35" id="P35">
</div>
<div class="simblaEL tcH" data-drag="P37" id="P37" style="position: relative;">
</div>
<div class="simblaEL tcH" data-drag="P39" id="P39" style="position: relative;">
<div class="textContainer H4" style="cursor: text; margin-left: 10px;">
<h4>Shrivatsa KS</h4>
</div>
</div>
<div class="simblaEL tcH" data-drag="P41" id="P41">
</div>
<div class="simblaEL tc" data-drag="P43" id="P43" style="position: relative;">
<div class="textContainer" style="margin-left: 10px; cursor: text;">
<p>Designer and Developer</p>
</div>
</div>
<div class="row simblaEL rDivider" data-drag="P47" id="P47" style="position: relative; padding-left: 30px; padding-right: 30px; margin-bottom: 30px;" data-title="Row">
<div class="sDivider col-xs-4 col-md-4 index0" data-colsize="4" data-title="Column">
</div><div class="sDivider col-xs-4 col-md-4 index1" data-colsize="4" data-title="Column">
</div><div class="sDivider col-xs-4 col-md-4 index2" data-colsize="4" data-title="Column">
</div>
</div>
<div class="simblaEL tcH" data-drag="P55" id="P55" style="position: relative;">
</div>
</div>
<div class="sDivider col-md-3 index1" data-colsize="3" data-title="Column">
<figure class="simblaEL simblaImg" data-drag="P57" id="P57" style="border-radius: 0px;">
<img draggable="false" class="" style="width:205px;height:140px;" alt="chins.jpg" data-id="" title="chins.jpg" src="https://s3.amazonaws.com/simbla-static-2/2019/09/5d9027df0bdbeb001db5e302/5d902cbb0bdbeb001db5e308/JZ4ig8Pq497PsCd4VZZC2K-A.jpeg">
<figcaption>
</figcaption>
</figure>
<div class="simblaEL tcH" data-drag="P59" id="P59" style="position: relative;">
</div>
<div class="simblaEL tcH" data-drag="P61" id="P61" style="position: relative;">
<div class="textContainer H4" style="margin-left: 10px; cursor: text;">
<h4>Chinmai kanth</h4>
</div>
</div>
<div class="simblaEL tc" data-drag="P63" id="P63" style="position: relative;">
<div class="textContainer" style="margin-left: 10px; cursor: text;">
<p>Designer and Developer</p>
</div>
</div>
<div class="row simblaEL rDivider" data-drag="P67" id="P67" style="position: relative; padding-left: 30px; padding-right: 30px; margin-bottom: 30px;" data-title="Row">
<div class="sDivider col-md-4 col-xs-4 index0" data-colsize="4" data-title="Column">
</div>
<div class="sDivider col-md-4 col-xs-4 index1" data-colsize="4" data-title="Column">
</div>
<div class="sDivider col-md-4 col-xs-4 index2" data-colsize="4" data-title="Column">
</div>
</div>
<div class="simblaEL tcH" data-drag="P75" id="P75" style="position: relative;">
</div>
</div>
<div class="sDivider col-md-3  index2" data-colsize="3" data-title="Column">
<figure class="simblaEL simblaImg" data-drag="P77" id="P77" style="border-radius: 0px;">
<img draggable="false" class="" style="width:205px;height:140px" alt="" data-id="" title="" src="https://s3.amazonaws.com/simbla-static-2/2019/09/5d9027df0bdbeb001db5e302/5d902cbb0bdbeb001db5e308/5DnAgG_tBF9x-CM0gWAMlY4E.jpeg">
<figcaption>
</figcaption>
</figure>
<div class="simblaEL tcH" data-drag="P79" id="P79" style="position: relative;">
<div class="textContainer H4" style="margin-left: 10px; cursor: text;">
<h4>Mahesh Kumar</h4>
</div>
</div>
<div class="simblaEL tcH" data-drag="P81" id="P81" style="position: relative;">
</div>
<div class="simblaEL tc" data-drag="P83" id="P83" style="position: relative;">
<div class="textContainer" style="margin-left: 10px; cursor: text;">
<p>Designer and Developer</p>
</div>
</div>
<div class="row simblaEL rDivider" data-drag="P87" id="P87" style="position: relative; padding-left: 30px; padding-right: 30px; margin-bottom: 30px;" data-title="Row">
<div class="sDivider col-md-4 col-xs-4 index0" data-colsize="4" data-title="Column">
</div>
<div class="sDivider col-md-4 col-xs-4 index1" data-colsize="4" data-title="Column">
</div>
<div class="sDivider col-md-4 col-xs-4 index2" data-colsize="4" data-title="Column">
</div>
</div>
<div class="simblaEL tcH" data-drag="P95" id="P95" style="position: relative;">
</div>
</div>
<div class="sDivider col-md-3 index3" data-colsize="3" data-title="Column">
<div class="simblaEL tcH" data-drag="P99" id="P99" style="position: relative;">
</div>
<div class="row simblaEL rDivider" data-drag="P107" id="P107" style="position: relative; padding-left: 30px; padding-right: 30px; margin-bottom: 30px;" data-title="Row">
<div class="sDivider col-md-4 col-xs-4 index0" data-colsize="4" data-title="Column">
</div>
<div class="sDivider col-md-4 col-xs-4 index1" data-colsize="4" data-title="Column">
</div>
<div class="sDivider col-md-4 col-xs-4 index2" data-colsize="4" data-title="Column">
</div>
</div>
<div class="simblaEL tcH" data-drag="P115" id="P115" style="position: relative;">
</div>
</div>
</div>
</div>
</div>
</div>
                    <div class="simblaEL containerHolder" data-drag="P21" id="P21" style="position: relative;">
                    <a class="simblaEL anchorElm" data-drag="divCounter" name="Content0" id="Content0" data-id="5d902e740bdbeb001db5e30b">
                        
                    </a>
                   
                                
                                           
                                        </div>
                                            
                                    </div>
                                        
                                </div>
            <div id="id01" class="modal">
  
  <form class="modal-content animate" action="process.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="name" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <BR>
        
      <button type="submit">Login</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

                                    
                          
                
           
        </body>
         </html>