<?php  include "first.php"; 
// (1) Извеждане на променливите за meta keywords, description и title, САМО за INDEX страницата
include "page_first.php"; 
// $description - за Мeta description      
// $keywords    - за Мeta keywords
// $title       - за Title таг
// (1) КРАЙ
?>
<?php include "header.php"; ?>
<?php
//<!--- Левия сайдбар на сайта --->
 include "left_sidebar.php";
 //<!--- Края на левия сайдбара --->
 $q = mysql_query("SELECT * FROM pages WHERE id = ". $_GET['id'] ."");
	$res = mysql_fetch_assoc($q);
 ?>
<?php // НАЧАЛО НА HTML КОДА ?>

<?php include "delete_data.php";?>


<tr>
		
	<td colspan=2>
	
	 <table border=0 cellspacing=0 cellpadding=0 width=1020 align=center>
	 <tr>
		
		 <td width=249 class=mappa valign=top>
		<!-- mappa e itinerario -->

	
		<!-- fine  mappa e itinerario -->
		 <br><br>

		</td>


		<td valign=top class=testo>	
		
		<!-- corpo destinazione -->

	

	  <table width="700" border="0" cellpadding="0" cellspacing="0"  align=center bgcolor=#F6E4C0> 	  <tr> 	      <td width=700 class=testonormale valign=top>	  				<!-- TOP DEL QUADRO -->	  				 	   			<!-- -CORPO DEL QUADRO -->	  				
	  <table width=680 border=0 cellspacing=0 cellpadding=0  bgcolor=#F6E4C0 height=40>	  				
<tr>	  					

	  <td width=640 valign=top align=center class=testonormale>
	  
	  
<table width=600 border=0 cellspacing=0 cellpadding=0  bgcolor=#F6E4C0 >

<tr>
	<td  class=testonormale>
	<div style='height: 30px;'></div>
		<B><font size=4><?php echo $res['name']; ?></font></CENTER></B><BR>
		
		
		<?php echo $res['info']; ?>
		<br>
		
		<?php 
		$idddd = $res['id'];
		$id = $_GET['id'];
		if($idddd==9) {
		$snimkizapages = mysql_query("SELECT * FROM pages_gal where page_id = $id ");
		WHILE($snimka = mysql_fetch_array($snimkizapages)) { ?>
			<center><img src="<?php echo $snimka['img'];?>"></center>
		<?php } }?>
		
	</td>
</tr>




</table>

<BR><BR>				</td>				<td width=10 height=80 background="imgs/page_edge_right.html">				<img src="imgs/spacer.html" width=10 alt="">				</td>			</tr>			</table> 			<!-- FINE DEL QUADRO -->							</DIV>			    </td>			  </tr>				<tr>					<td colspan=2 class=testonormale valign=top align=center  bgcolor=#F6E4C0><BR><BR><BR></td> </tr></table>
<!-- Mirrored from www.deserti-viaggilevi.it/archivionewsletter.php?ID=28 by HTTrack Website Copier/3.x [XR&CO'2010], Sun, 23 Sep 2012 09:36:20 GMT -->
</html>			<br /><br/>
 
		<!-- fine  corpo destinazione  -->
	 

		</td>


		
	 </tr>

	 </table>
	</td>

 </tr>




<?php // КРАЙ НА HTML КОДА ?>
<?php 
// <!--- Десния сайдбар на сайта --->
include "right_sidebar.php";
//<!--- Края на десния сайдбара --->
?>
<?php include "footer.php"; ?>