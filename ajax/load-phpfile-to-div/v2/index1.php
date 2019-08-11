<!--
we could do this below, but this refreshes the page and we dont want that
<?php
if( isset($_GET['show']) ){
    include $_GET['show'];
}
?>
<input type="submit" onclick="window.location='index1.php?show=include.inc.php'" />
-->

<html>
    <head>
        <script type="text/javascript">
            function load(div, page){
                /*alert('it works');*/
                if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }

                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState==4 && xmlhttp.status==200){
                        document.getElementById(div).innerHTML= xmlhttp.responseText;

                    }
                 }

                xmlhttp.open('GET',page,true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        <input type="submit" onclick="load('adiv','include.inc.php')"/>
        <div id='adiv'></div>
    </body>
</html>

