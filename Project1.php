<html style="height: 100%">
<head> <title>FOOZITO</title>


</head>
<body>
<style>


*{
  margin: 0px;
  padding: 0px;
}
div.main{
  background-color:#800000;
  
 height:2000px;
 width:100%;
/*padding-top:0.5cm;*/

} 


.head_outer{
  width: 100%;
  /*position: fixed;*/
  /*top: 0px;*/
  height:150px;
}

.header{
  height:150px;
  width: 100%;
  
   background-color:#961231;
  float: left;
  

  
  
}

.head{
  height:100px;
  width: 100%;
  /*background-color:white;*/
  float: left;
  color:black ;
  font-size: 25PX;
}

.logo{
  height: 100px;
  width: 25%;
  /*background-color:red;*/
  float: left;
  margin-left: 530px;
  margin-top: 10px;
}

.logo img{
  width: 100%;
}

.btn{
  height: 100px;
  width: 25%;
  /*background-color: yellow;*/
  float:right;
}

#bt1{
  height: 40px;
  width: 100px;
  margin-left: 50px;
  margin-top: 50px;
  border-radius: 15px;
  background-color: white;
  /*border-style: none;*/
  border-width: 0px;

}


.login{
  height: 50px;
  width: 70px;
  /*background-color: red;*/
  float: left;
  margin-left: 100px;
  font-size: 15px;
  margin-top: 40px;
  color:#C8CDCC;


}
.register{
  height: 50px;
  width: 70px;
  /*background-color: red;*/
  float: left;
  /*margin-left: 5px;*/
  font-size: 15px;
  margin-top: 40px;
  color:#C8CDCC;


}
.loc{
  height: 50px;
  width: 50px;
  /*background-color: red;*/
  float: left;
  margin-left: 20px;
  margin-top: 30px;


}

.loc img{
  width: 100%;

}
#bt2{
  height: 40px;
  width: 100px;
  margin-top: 50px;
  border-radius: 15px;
  background-color: white;
  border-width: 0px;
}







.nav{
  height:50px;
  width:80%;
  /*background-color:pink;*/
  float: left;
  margin-left: 15%;
  /*margin-right: 10%;*/
}




.nav ul li{
  list-style-type: none;
  float: left;
  font-size: 20px;
  margin-left:80px;
  /*margin-top: 25px;*/
  /*background-color:white;*/
  height:25px;
  color:#C8CDCC;
  font-family: calibri;
  line-height: 40px;
  text-decoration: none;


  /*width: 100px;*/

}

.nav ul li:hover{
  /*background-color:black;*/
  color:black;
}


div.outer{

/*background-image:url("images/Hey.jpg");*/

width: 100%;
 height:600px;
 /*top: 5%;*/
 margin: 0 auto; 
 position: relative; 
} 


.outer img{
  width: 100%;
}
div.inner{
background-color:white;
height:500px;
width:60%;
/*top:20%;*/
margin-left:230px; 
 position:absolute;
  border-style: solid;
    border-width: 5px;
    margin-top:80px;
 


} 
div.middleware{

width: 80%;
 height:300px;
 top: 5%;
 margin-left: 10%;
 position:absolute; 
}





#submit{
  /*margin-left: 30px;*/
  background-color: #0ADE6E ;
  height: 40px;
  width: 80px;
  margin-top: 40px;

}

 </style>
       

<div class="main">

<div class="head_outer">
    <div class="header">
          <div class="head">
            <div class="logo">
              <img src="images/logo.png">
            </div>
            <div class="btn">
              <!-- <input type="button" name="register" value="Register" onclick="disp1()" id="bt1"> -->
              <div class="login" onclick="disp1()">
                <p>Login</p>
              </div>
              <div class="register" onclick="disp2()">
                <p>Register</p>
              </div>
  
              <!-- <input type="button" name="login" value="Login" onclick="disp2()" id="bt2"> -->
              <div class="loc" >
                <img src="images/location.png">
              </div>

              
            </div>

          </div>
          
          <div class="nav">
            <ul>
              <li onclick="show()">HOME</li>
              <li>OUR STORY</li>
              <li>FIND RESTAURANTS</li>
              <li>NEWSLETTER</li>
              <li>CONTACT US</li>

              
              
            </ul>
          </div>
    </div>
  </div>

<div class="outer" >
  <img src="images/wall2.jpg">
  <div class="middleware">
        <!-- <img src="images/3.jpg"> -->
        
        <div class="inner">
        <h1><center>MENU</center></h1>
        <table>
        <br>
        <br>
        
                  <tr>
                    

                    <td>
                      <?php
                      include 'connect.php';



                      if($con==true)
                      {
                        $query="select * from abs";

                        $run=mysqli_query($con,$query);
                        while($data=mysqli_fetch_array($run))
                        {

                        
                          ?>
                              <input type="checkbox" name="id[]" value="<?php echo $data[0]; ?>" />
                              <?php 
                                echo "$data[1] &nbsp";
                                echo "$data[2]";
                            ?>
                          <br>

                          <?php
                         }
                            
                          
                      }
                      else
                      {
                        echo "Error in connection";
                      }
                      
                  ?>
                    </td>
                  </tr>
                  
                  
                  <tr>
                  
                    <td><input type="submit" name="log" value="submit" class="res" ></td>
                  </tr>




        </table>
        </div>
  </div>

</div>


</div>
</body>
</html>