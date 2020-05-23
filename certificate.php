<script>
        function printDiv() { 
            var divContents = document.getElementById("GFG").innerHTML; 
            var a = window.open('', '', 'height=500, width=500'); 
            a.document.write(divContents); 
            a.document.close(); 
            a.print(); 
        } 

</script>
<center>
<div style=" background-color :#ffff99;width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878"  id="GFG">
<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
		<center>
		<img src="logo.jpg" width="120px" height="120px" style="border-radius:100%;">
		</center>
       <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
       <br><br>
       <span style="font-size:25px"><i>This is to certify that</i></span>
       <br><br>
       <span style="font-size:30px"><b> <?php echo $name ?></b></span><br/><br/>
       <span style="font-size:25px"><i>has completed the</i></span> <br/><br/>
       <span style="font-size:30px"><?php echo $title ?></span> <br/><br/>
       <span style="font-size:20px">with score of <b><?php echo $c ?></b></span> <br/><br/><br/><br/>
       <span style="font-size:25px"><i>dated</i></span><br>
      <?php $t=time(); echo(date("d-m-y",$t)) ?>
</div>
</div>
<br>
<input type="button" value="Print" onclick="printDiv()">
</center>