<html>
    <body>    
        <h1>Nikz Raw Tester</h1>
        <p id="inputname" name="inputname">
        <form action="index.php" method="get">
            <input type="text" id="ggwp" name="name"> 
        <button id="submit" onClick="alertClick()" type="submit">Submit</button>
        </form>
    </body>
    <?php 

    include_once("connections/connections.php");
    $con = connection();
    $body = $_GET["name"];

    $sql = "UPDATE `yii_contact1` SET body = '$body' WHERE id = '1' ";
    $con->query($sql) or die($con->error);

    if($con->query($sql)){
        echo 'Success';
    }

    ?>
    
    
</html>    


<script>

window.addEventListener('load', ()=> {        
        
        const inputname = localStorage.getItem('INPUTNAME');

	document.getElementById('ggwp').value = inputname;
        
        //document.getElementById('submit').click();
        
})

</script>

<script> 

        //document.getElementById('submit').hidden();

        /*function alertClick(){
          const inputname = localStorage.getItem('INPUTNAME');
          //var input = document.getElementById('inputname').value;
          alert(inputname);
        }*/

</script>