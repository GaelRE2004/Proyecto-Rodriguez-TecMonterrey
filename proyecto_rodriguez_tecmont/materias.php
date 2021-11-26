<?php include('header.php') ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Materias</h1>
			</div>

		
		<div class="contenedor">

			<h1 class="intro">Registro de clase</h1>

			<div class="form2">

				<form method = "post" action = "/php/php_form_introduction.htm">
					<table>
					   <tr>
						  <td>Name:</td> 
						  <td><input type = "text" name = "name"></td>
					   </tr>
					   
					   <tr>
						  <td>E-mail:</td>
						  <td><input type = "text" name = "email"></td>
					   </tr>
					   
					   <tr>
						  <td>Specific Time:</td>
						  <td><input type = "text" name = "website"></td>
					   </tr>
					   
					   <tr>
						  <td>Class details:</td>
						  <td><textarea name = "comment" rows = "5" cols = "40"></textarea></td>
					   </tr>
					   
					   <tr>
						  <td>Gender:</td>
						  <td>
							 <input type = "radio" name = "gender" value = "female">Female
							 <input type = "radio" name = "gender" value = "male">Male
						  </td>
					   </tr>
					   
					   <tr>
						  <td>
							 <input type = "submit" name = "submit" value = "Submit"> 
						  </td>
					   </tr>
					</table>
				 </form>
			</div>

			<div class="img">

				<img src="img/clase.jpg" height="350" width="500">
			</div>

		</div>
<br><br><br>

		</div>
	</section>

<?php include('footer.php') ?>

</body>
</html>