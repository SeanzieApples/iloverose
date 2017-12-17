<!doctype html> 
<html>
       <head>
               
               <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
               <script type="text/javascript">
			 $(document).ready(function() { 
				$("#refresh").click(function(evt) { 
      					$("#line").hide();          
      					$("#line").load("frame.php", function() {
      						$("#line").fadeIn("slow"); 
					})
      				})
    			})
               </script> 
       
       <style>
       body{
                background-image:url('background.jpg');
                background-repeat:repeat;} /* tiles the bg */
       div#container{
                margin:100px auto 0;
                width:50%;}
       div#line{
		text-shadow: 3px 3px 3px #000;
                font-size:20pt;
                color:white;
                font-family:'Impact',sans-serif;
                text-align:center;}
       a#refresh{
		text-shadow: 3px 3px 3px #000;
                font-size:20pt;
                color:white;
                font-family:'Impact',sans-serif;
                width:200px;
                height:100px;
                margin:0 auto;
                display:block;}
       img.button{
                width:200px;
                height:100px;
                margin:0;}
       </style>
       </head>
       <body>
            <div id="container">
               <a href="javascript:void(0);" id="refresh"><img class="button" src="button.png"></img></a>
               <div id="line">
               </div>
            <div>
       </body>
</html>
