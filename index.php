<!DOCTYPE html>
<html>
<?php  
$conn=new mysqli("127.0.0.1","harsh","12345678","myDB");


if($conn->connect_error){
  echo "<script>alert('Not connected');</script>";
}
    if(isset($_POST['user'])&&isset($_POST['comment'])){
    $sql="insert into 
    comment
    (user_name,comment) values 
    ('".$_POST['user']."' ,'".$_POST['comment']."');";
$conn->query($sql);}

?>
<head>
  <meta charset="utf-8">
  <title>HARSH JAIN</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <script type="text/javascript" src="/1/jQuery.js"></script>
  <style type="text/css">
    * {
      padding: 0px;
      margin: 0px;
    }


  /*  navigation bar  */

    #img1 {
      width: 7vh;
      height: 7vh;
      border-radius: 50%;
      margin: 1vh 2vh 0px;
    }

    #harsh {
      float: left;
      font: 3vh 'Anton', sans-serif;
      padding: 1vh;
      letter-spacing: 2px;
      line-height: 6vh;
    }

    #table_nav {
      float: right;
      border-spacing: 2vh;
    }

    #table_nav button {
      border-radius: 4px;
      padding: 2px;
      font: 'Oswald', sans-serif;
    }
    #nav {
      z-index: 3;
      width: 100%;
      background-color: #e3dfc5;
      overflow: hidden;
      position: fixed;
      box-shadow: 3px 3px 5px black;
    }


/*  end--navigation bar */


    /*  ul list  */


    ul {
      list-style-type: none;
      position: relative;
      width: 600%;
      height: 100%;
    }

    li {
      float: left;
      width: 16.666%;
      height: 100%;
    }

    li:nth-child(1) {
      background-color: #02030a;
    }

    li:nth-child(2) {
      background: -webkit-repeating-linear-gradient(45deg, red, yellow 3%, green 6%);
      background: -o-repeating-linear-gradient(45deg, red, yellow 3%, green 6%);
      background: -moz-repeating-linear-gradient(45deg, red, yellow 3%, green 6%);
      background: repeating-linear-gradient(45deg, black, grey 3%, white 6%);

    }

    li:nth-child(3) {
      background: -webkit-repeating-linear-gradient(135deg, red, yellow 3%, green 6%);
      background: -o-repeating-linear-gradient(135deg, red, yellow 3%, green 6%);
      background: -moz-repeating-linear-gradient(135deg, red, yellow 3%, green 6%);
      background: repeating-linear-gradient(135deg, black, grey 3%, white 6%);
    }

    li:nth-child(4) {
      background: -webkit-repeating-linear-gradient(225deg, red, yellow 3%, green 6%);
      background: -o-repeating-linear-gradient(225deg, red, yellow 3%, green 6%);
      background: -moz-repeating-linear-gradient(225deg, red, yellow 3%, green 6%);
      background: repeating-linear-gradient(225deg, black, grey 3%, white 6%);
    }

    li:nth-child(5) {
      background: -webkit-repeating-linear-gradient(315deg, red, yellow 3%, green 6%);
      background: -o-repeating-linear-gradient(315deg, red, yellow 3%, green 6%);
      background: -moz-repeating-linear-gradient(315deg, red, yellow 3%, green 6%);
      background: repeating-linear-gradient(315deg, black, grey 3%, white 6%);
    }

    li:nth-child(6) {
      background: -webkit-repeating-linear-gradient(45deg, red, yellow 3%, green 6%);
      background: -o-repeating-linear-gradient(45deg, red, yellow 3%, green 6%);
      background: -moz-repeating-linear-gradient(45deg, red, yellow 3%, green 6%);
      background: repeating-linear-gradient(45deg, black, grey 3%, white 6%); 
    }
    /* end--- ul list  */

    /* div array   */
    #main_box {
              overflow: hidden;

      height: 91.5vh;
      width: 100%;
    }
    #div1{
      overflow:scroll; 
    }
    #div2{
      overflow:scroll;
    }
    #div1,
    #div2,
    #div3,
    #div4,
    #div5 {
      font: 1.5vh 'Open Sans Condensed', sans-serif;
      width: 50.1%;
      height: 50%;
      margin: auto;
      margin-top: 23vh;
      padding-top: .8vh;
      box-sizing: border-box;
      background: url("https://newevolutiondesigns.com/images/freebies/black-wallpaper-10.jpg");
      background-size: cover;
      color: white; 
    }
        /* end ---div array   */


    
          /* animation array */
    .a {
      -webkit-animation: e1 2s forwards;
      animation: e1 2s forwards;
    }

    @-webkit-keyframes e1 {
      from {
        left: 0%;
      }
      to {
        left: -100%;
      }
    }



    @keyframes e1 {
      from {
        left: 0%;
      }
      to {
        left: -100%;
      }
    }

    .b {
      -webkit-animation: e2 2s forwards;
      ;
      /* Safari 4.0 - 8.0 */
      animation: e2 2s forwards;
    }

    @-webkit-keyframes e2 {
      from {
        left: -100%;
      }
      to {
        left: -200%;
      }
    }


    /* Standard syntax */

    @keyframes e2 {
      from {
        left: -100%;
      }
      to {
        left: -200%;
      }
    }

    .c {
      -webkit-animation: e3 2s forwards;
      ;
      animation: e3 2s forwards;
    }

    @-webkit-keyframes e3 {
      from {
        left: -200%;
      }
      to {
        left: -300%;
      }
    }

    @keyframes e3 {
      from {
        left: -200%
      }
      to {
        left: -300%;
      }
    }

    .d {
      -webkit-animation: e4 2s forwards;
      ;
      /* Safari 4.0 - 8.0 */
      animation: e4 2s forwards;
    }

    @-webkit-keyframes e4{
      from {
        left: -300%;
      }
      to {
        left: -400%;
      }
    }

    @keyframes e4 {
      from {
        left: -300%;
      }
      to {
        left: -400%;
      }
    }

     .e {
      -webkit-animation: e5 2s forwards;
      ;
      /* Safari 4.0 - 8.0 */
      animation: e5 2s forwards;
    }

    @-webkit-keyframes e5{
      from {
        left: -400%;
      }
      to {
        left: -500%;
      }
    }

    @keyframes e5 {
      from {
        left: -400%;
      }
      to {
        left: -500%;
      }
    }




    .re_size {
      -webkit-animation: e 4s 2s forwards;
      /* Safari 4.0 - 8.0 */
      animation-name: e 4s 2s forwards;
    }


    /* Safari 4.0 - 8.0 */

    @-webkit-keyframes e {
      from {}
      to {
        transform: scale(2, 2);
      }
    }


    /* Standard syntax */

    @keyframes e {
      from {}
      to {
        transform: scale(2, 2);
      }
    }
    /*   hobbies */
    .hobbies {
      width: 95%;
      padding: 7px;
      background-color: #9381AB;
      margin: 4px;
      border-radius: 3vh;
    }

    .tv_sr {
      width: 6vh;
      height: 8vh;
      margin: .5vh 1vh .2vh;
    }

    .tab {
      overflow: scroll;
    }
          /*   end--------hobbies */


   
    /* contact */
     .content {
      width: 95%;
      padding: .6vh;
      box-sizing: border-box;
      background-color: #D1D4D6;
      margin: auto;
      border-radius: 5px;
      margin-top: 3vh;
    }
    #con1:hover {
      box-shadow: 3px 3px 5px #dd4b39;
    }

    .content > i {
      font-size: 3vh;
    }

    #con2:hover {
      box-shadow: 3px 3px 5px black;
    }

    #con3:hover {
      box-shadow: 5px 5px 10px #3b5998;
    }

    #con4:hover {
      box-shadow: 3px 3px 5px green;
    }

    /* end------contact */
/*  main_page*/

#above_1 {
      position: absolute;
      color: white;
      width: 80vw;
      word-spacing: 5px;
      letter-spacing: 2px;
      font: italic bold 5vmin Lato, serif;
      top: 40vh;
      left: 10vw;
      text-shadow: 2px 2px 4px #242325;
    }
    .changing,
    .changing1 {
      margin: 0px;
      border: 0px;
      padding: 0px;
      width: 10%;
      height: 16.666%;
      display: inline-block;

      float: left;
    }

    .changing:nth-child(even) {
      -webkit-animation: e10 4s linear infinite alternate;
      /* Safari 4.0 - 8.0 */
      animation: e10 4s linear infinite alternate;
    }

    .changing:nth-child(odd) {
      -webkit-animation: e11 4s linear infinite alternate;
      /* Safari 4.0 - 8.0 */
      animation: e11 4s linear infinite alternate;
    }

    .changing1:nth-child(even) {
      -webkit-animation: e11 4s linear infinite alternate;
      /* Safari 4.0 - 8.0 */
      animation: e11 4s linear infinite alternate;
    }

    .changing1:nth-child(odd) {
      -webkit-animation: e10 4s linear infinite alternate;
      /* Safari 4.0 - 8.0 */
      animation: e10 4s linear infinite alternate;
    }

    @-webkit-keyframes e10 {
      0% {
        background-color: #c3c4c9;
      }
      33% {
        background-color: #929295;
      }
      66% {
        background-color: #656567;
      }
      100% {
        background-color: #3c3c3d;
      }
    }



    @keyframes e11 {
      0% {
        background-color: #3c3c3d;
      }
      33% {
        background-color: #656567;
      }
      66% {
        background-color: #929295;
      }
      100% {
        background-color: #c3c4c9;
      }
    }
      /*  end-----main_page*/

    /* project  */

    .project {
      color: black;
      width: 95%;
      box-sizing: border-box;
      background-color: #575558;
      padding: 1vh;
      margin: auto;
      margin-bottom: .6vh;
    }

    .project > h3 {
      text-align: center;
      width: 97%;
      border-radius: 4px;
      margin-top: .6vh;
      background-color: #cac3d3;
      margin: auto;
      margin-bottom: .6vh;
    }

    .project>p {
      display: none;
      padding: 7px;
      width: 97%;
      text-align: center;
      font-size: 1.4vh;
      border-radius: 4px;
      background-color: #cac3d3;
      margin: auto;
      margin-bottom: .6px;
      -webkit-transition: height 2s linear;
      transition: height 2s linear, display 2s linear;
    }

    .project:hover >p {
      display: block;
      
    }
      /* end--------project */

    /*   scroll_changes   */
    ::-webkit-scrollbar {
      width: 0;
      height:0;
    }
    ::-webkit-scrollbar-corner {
      width: 0;
      height:0;
    }

        /* end--------scroll_changes    */
        /*  comment */
        #comment_id{
          margin:auto;
          position:fixed;
          display:none;
          z-index:20;
          width:100%;
          height:100%;
          background-color:rgba(211,211,211,0.5);
        }
        #com_btn{
          font:italic bold 10px sans-serif;
            margin-top:2vh;
          margin:auto;
          display:block;
        }
        h3{
          display:inline-block;
          margin: .5vh 1vw .5vh 1vw;
          font-style:italic;
        }
        h3 +p {
          display:inline-block;
        }
        form{
          position:absolute;
          top:12vh;
          left:14%;
            background-color: rgb(42,42,42);
          width:72%;
          height:67.5vh;
          padding:10vh;
          box-sizing:border-box;
        }
  </style>


</head>

<body>

  <div id="nav">
    <div style="float:left;"> <img id="img1" src="img2.JPG" alt="" /></div>
    <div id="harsh"> HARSH JAIN </div>
      <table id="table_nav">
        <tbody>
          <tr>
            <td>
              <button id="button1" onclick=" but1() ">INFO</button>
            </td>
            <td><button id="button2" onclick="but2() ">HOBBIES</button>
            </td>
            <td><button id="button3" onclick="but3()">PROJECTS</button>
            </td>
            <td><button id="button4" onclick="but4() ">COMMENT</button>
            </td>
            <td><button id="button5" onclick="but5() ">CONTACT</button>
            </td>


          </tr>
        </tbody>
      </table>

    </div>
    <div style="height:8.5vh;">
    </div>
    <div id="main_box">

    <div id="comment_id">
      <div style="position: absolute;right:10px; width:2vh;font: bold 5vh sans-serif;" onclick="comment_box_close()">X</div><!-- float is not working -->
      <form action="index.php" method="post">
       YOUR NAME  <input type="text" name="user"> <br><br>
        COMMENT &nbsp;&nbsp;<input type="text" name="comment"><br>
        <br>
        <input type="submit" name="" value="SUBMIT">
      </form>

    </div>
      <ul id="u_l">
        <li>
          <div id="above_1">
            <center> It is pleasant to meet you .<br> Lets know more about harsh jain , who is an awesome person...</center>
          </div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>
          <div class="changing1"></div>


        </li>
        <li>
          <div id="div1">
            <div style="width:94%;margin:auto;height:94%;box-sizing:border-box;padding:2vh;"><img src="harsh_jain.JPG" alt="" style="float:right;width:20%;height:60%;margin-left:2vh;margin-bottom:2vh;" />
              <p style="text-align:justify;margin-bottom: 10px;letter-spacing:1px; word-spacing:4px;" id="p1">
              </p>


              <p style="text-align:justify;text-indent:4vh;letter-spacing:1px; word-spacing:4px;" id="p2">

              </div>
            </div>
          </li>
          <li>
            <div id="div2" style="background-color:#515152">

                
              </div>
            </li>
            <li>
              <div id="div3" >
                <div class="project">
                  <h3>MY FIRST HTML/CSS PAGE</h3>
                  <p>When i my making my first page ,I only know the basic html and css ,, i didn't know the flow of the loading of the page and had a lot of problem in handling the event<a href="first.html" target="_blank">click here..</a></p>

                </div>
                <div class="project">
                  <h3>The  log-in/sign-up page  </h3>
                  <p>I used php as the basis for this project ,,the website itself creates new user account and allows in between chat <a href="#" target="_blank">click here..</a></p>

                </div>

                <div class="project">
                  <h3> Mini-Solar System  </h3>
                <p>However,,the no of planets is less,,i mean very less but one is fine that if the sun disappears then the planets would move in tangential path .<a href="https://elliotyagami.github.io/universe" target="_blank">click here..</a></p>

                </div>


              </div>
            </li>
             <li>
              <div id="div4" style="overflow:scroll">
                <button onclick="comment_box();" id="com_btn">ADD COMMENT!!</button>
              <div id="main_com">
              <?php      
              $sql="select * from comment;";
               $result= $conn->query($sql);

                if($result->num_rows>0){
                  while($rows=$result->fetch_assoc()){
                      echo "<div id='block_com'>
                  <h3 >".$rows['id']." ).  &nbsp;&nbsp;&nbsp;&nbsp;".strtoupper($rows['user_name'])." &nbsp;-  -  &nbsp; </h3>
                    <p>".$rows['comment']."</p>

                </div>";
                  }
                }?>
                



              </div>

              </div>
             </li>
            <li>
           
              <div id="div5">
                <div class="content" id="con1"><i class="fa fa-google-plus" style="color:#dd4b39; "> &nbsp;harshjniitr@gmail.com</i></div>

                <a href="https://github.com/harsh4123" target="_blank">
                  <div class="content" id="con2"><i class="fa fa-github" style="color:black; "> &nbsp;USERNAME:: harsh4123</i></div>
                </a>

                <a href="https://www.facebook.com/100012489250176" target="_blank">
                <div class="content" id="con3"><i class="fa fa-facebook" style="color:#3b5998; ">&nbsp; harsh jain</i></div>
                </a>

                <div class="content" id="con4"><i class="fa fa-phone" style="color:green; ">&nbsp; no is not given to avoid pranks</i> </div>


              </div>
            </li>
          </ul>
        </div>

        <script type="text/javascript">
          function but1(){$('ul').removeClass('e b c d').addClass('a'); $('#div1').addClass('re_size'); $('#div5 ,#div2, #div3,#div4').removeClass('re_size tab');}
          function but2(){
            $('ul').removeClass('e a c d').addClass('b'); $('#div2').addClass('re_size tab'); $('#div5 ,#div1, #div3,#div4').removeClass('re_size')
          }
          function but3(){

           $('ul').removeClass('e b a d').addClass('c'); $('#div3').addClass('re_size'); $('#div5 ,#div2, #div1 ,#div4').removeClass('re_size tab')

         }
         function but4(){
          $('ul').removeClass('e b c a').addClass('d'); $('#div4').addClass('re_size'); $('#div5 ,#div2, #div3 ,#div1').removeClass('re_size tab')


        }
        function but5(){
          $('ul').removeClass('d b c a').addClass('e'); $('#div5').addClass('re_size'); $('#div4 ,#div2, #div3 ,#div1').removeClass('re_size tab');


        }
        function comment_box(){
            document.getElementById("comment_id").style.display="block";


        }
        function comment_box_close(){
            document.getElementById("comment_id").style.display="none";


        }
        function call_div1(){
          $.ajax({
            url:"div1_p1" ,
            cache:false ,
            success: function(data){
              $("#p1").text(data);
            }

          });

          $.ajax({
            url:"div1_p2" ,
            cache:false ,
            success: function(data){
              $("#p2").text(data);
            }

          });
        }
        function call_div2(){
          $.ajax({
            url:"div2" ,
            cache:false ,
            success: function(data){
              $("#div2").html(data);
            }

          });
        }
        $(document).ready(function(){
          

          $(window).on("popstate", function(){
            var w=location.hash.split("#").pop();
            switch (w){
              case "info":
              but1();
              break;
              case "hobbies":

              but2();

              break;
              case "projects":
              but3();


              break;
              case "comment":
              but4();

              break;
              case "contact":
              but5();

              break;
            }
          });

var call_count=1 ,call_count2=1;

          $("#button1").click(function(){
           history.pushState(null, null,"#info");
           if(call_count==1){call_div1();call_count++;}
           
        
         });
          $("#button2").click(function(){
           history.pushState(null, null,"#hobbies");
                      if(call_count==1){call_div1();call_count++;}
                                 if(call_count2==1){call_div2();call_count2++;}


         });
          $("#button3").click(function(){
           history.pushState(null, null,"#projects");
                      
                                 if(call_count2==1){call_div2();call_count2++;}


         });
          $("#button4").click(function(){
           history.pushState(null, null,"#comment");
                      

         });
          $("#button5").click(function(){
           history.pushState(null, null,"#contact");
                     
         });



        });




      </script>
        <?php  $conn->close(); ?>
    </body>

    </html>
