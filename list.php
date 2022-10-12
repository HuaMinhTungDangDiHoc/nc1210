<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
        <script language="javascript" src="ajax.js" ></script>
        <style type="text/css">
            .button{
                display: inline-block;
                background: 	#FFFF99;
                padding: 5px 10px;
                color:black;
                margin: 20px;
                margin-left : 710px;
                font-size :25px;
                border : black solid ;
                
            }
            #content{
                text-align : center;
                font-size : 25px;
                text-transform : uppercase;
                font-weight: bold;
                vertical-align: middle;
                justify-content: flex-start;
                
                
            }
            #id{
                text-align : center;
                color : black;
                font-size : 50px;
                border : solid black 5px;
                background : 	#CCCCCC;
                padding : 50px;

                
            }
            #nen{
                background : #DDDDDD;
            }

        
        </style>
    </head>
    <body id = "nen">
        <h2 id ="id">DANH SÁCH NGƯỜI THAM GIA </h2>
        <div id="content">
            <?php require('data.php'); ?>
        </div>
        <a href="#" class="button" id="load_more">Hiển Thị Thêm</a>
    </body>
</html>