
<!DOCTYPE html>
<html lang="en">
			<!-- /Right Sidebar Menu -->
				
			
       
				<!-- /Title -->
				

<body>

<?php 

include ('header.php'); 
if(isset($_GET['success']) and $_GET['success'] == '1'){
    echo '<img src="../img/sweetalert/alert3.png" alt="alert" style="display:none;" class="img-responsive model_img" id="sa-success">';
    echo '  <script>window.onload = function () {document.getElementById("sa-success").click();}</script> ';
}
?>

<div class="page-wrapper " >
            <div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Ajouter Livreur</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>speciality pages</span></a></li>
							<li class="active"><span>Ajouter Livreur</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>


<div class="row col-sm-7  col-sm-offset-3 mt-20">
    <h3><span class="number"><i class="icon-bag txt-black"></i></span><span class="head-font capitalize-font">Ajouter Livreur</span></h3>
</div>

<form methode="GET" action="traitement.php">
<fieldset class="col-sm-7  col-sm-offset-3 mt-20 ">
    <div class="row">
        <div class=" mt-20">
            <div class="form-wrap">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <label class="control-label mb-10" for="firstName">Nom :</label>
                            <input id="firstName" type="text" name="first_name" class="form-control required" value="" onblur="controlFirstName(this)" />
                            <p style="color:red;" id="fisrtNameAlert"></p>
                        </div>
                        <div class="span1"></div>
                        <div class="col-md-6 col-xs-12">
                            <label class="control-label mb-10" for="lastName">Prenom:</label>
                            <input id="lastName" type="text" name="last_name" class="form-control required" value="" onblur="controlLastName(this)" />
                            <p style="color:red;" id="lastNameAlert"></p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label mb-10" for="addressDetail">Addresse:</label>
                    <input id="addressDetail"  type="text" name="address" class="form-control required" value="" onblur="controleAdresse(this)" />
                    <p style="color:red;" id="adresseAlert"></p>
                </div>
                <div class="form-group">
                    <label class="control-label mb-10" for="cityName">Region:</label>
                    <select id="cityName" class="form-control required" name="country">
                        <option value="">Tunis</option>
                        <option value="">Sousse</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label mb-10" for="stateName">Cite:</label>
                    <select id="stateName" class="form-control required" name="cite">
                        <option value="">Lac</option>
                        <option value="">Marsa</option>
                    </select>
                </div>
                <div class="form-group">
						<div class="row">
							
					<div class="col-md-6 col-xs-12">
                    <label class="control-label mb-10" for="postalCode">Code postale:</label>
                    <input id="postalCode" type="text" name="zip_code"  data-mask="99999-9999" class="form-control required" value="" onblur="controleCodePostale(this)" />
					<p style="color:red;" id="codePostaleAlert"></p>
					</div>

					<div class="span1"></div>
					<div class="col-md-6 col-xs-12">
                    <label class="control-label mb-10" for="phoneNumber">Numero telephone:</label>
                    <input type="text" id="phoneNumber"  data-mask="+40 999 999 999" name="phone_number" class="form-control required" value="" onblur="controleTelephone(this)" />
					<p style="color:red;" id="phoneAlert"></p>
				</div>
					</div>
				</div>
                <div class="form-group">
                    <label class="control-label mb-10" for="emailAddress">Adresse email:</label>
                    <input id="emailAddress" type="text" name="email_address" class="form-control required" value="" onblur="verifMail(this)"/>
                    <p style="color:red;" id="emailAlert"></p>
                </div>

                <div class="form-group mb-0 mt-30 " onmouseover ="submitt()">
                        <button type="submit" class="btn btn-success btn-anim" id="submitButton"   >Submit</button>
                    
                </div>
                

            </div>
        </div>
    </div>
</fieldset>
</form>
</div>
</div>
			
				
	<script src="../dist/js/control.js"></script>

</body>
				
</html>

