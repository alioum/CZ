<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Coach Zbra |Contact</title>
        <meta content="Ne sois pas timide et contact le Coach Zbra ! Il se fera un plaisir de te répondre !" name="description">
        <meta content="Coach Zbra" name="author">
        <?php include 'head.html'; ?>
        <script type="text/javascript" src="bootstrapvalidator-0.5.3/dist/js/bootstrapValidator.min.js"></script>
        <link href="bootstrapvalidator-0.5.3/dist/css/bootstrapValidator.min.css" rel="stylesheet">
    </head>
    <body>
        <?php 
            include("./header.html")
        ?>
        <div class="container">

            <form class="well form-horizontal" action="ContactSendMail.php" method="post" id="contact_form">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Contactez moi ! </legend>

                    
                    <!-- Success message -->
                    <div class="alert alert-success" role="alert" id="success_message">
                        Merci de m'avoir contacter ! <i class="glyphicon glyphicon-thumbs-up"></i> Je vous recontacterai dans les plus brefs delais.
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-lg-3 control-label" >Nom* :</label> 
                        <div class="col-lg-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="last_name" placeholder="Nom" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>
                    
                     <!-- Text input-->

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Prénom* :</label>  
                        <div class="col-lg-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  name="first_name" placeholder="Prénom" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-lg-3 control-label">E-Mail* :</label>  
                        <div class="col-lg-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="email" placeholder="E-Mail" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-lg-3 control-label">N° téléphone :</label>  
                      <div class="col-lg-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="phone" placeholder="0601020304" class="form-control" type="text">
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Vous êtes* :</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                <select class="form-control" name="typeOfperson">
                                    <option value="">Sélectionner une proposition</option>
                                    <option value="Particulier">Un particulier</option>
                                    <option value="Entreprise">Une entreprise</option>
                                    <option value="Fan du Coach">Un très grand fan du Coach Zbra</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Text area -->

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Message* :</label>
                        <div class="col-lg-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <textarea class="form-control" name="comment" placeholder="Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group" id="bt-contact">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <center>
                                <button type="submit" class="btn btn-primary btn-lg" >Envoyer <span class="glyphicon glyphicon-send"></span></button>
                            </center>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
        <hr class="featurette-divider">
        <?php include("footer.html"); ?>
    </body>
</html>
<script type="text/javascript">
  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                        max: 30,
                        message:'Le prénom doit faire entre 2 et 30 caractères'
                    },
                        notEmpty: {
                        message: 'Veuillez saisir votre prénom'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                        max: 30,
                        message:'Le nom doit faire entre 2 et 30 caractères'
                    },
                    notEmpty: {
                        message: 'Veuillez saisir votre nom'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez saisir votre e-mail'
                    },
                    emailAddress: {
                        message: 'E-mail non valide'
                    }
                }
            },
            phone: {
                validators: {
                    phone: {
                        country: 'FR',
                        message: 'Veuillez saisir un numéro de téléphone valide'
                    }
                }
            },
            typeOfperson: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez déclinez votre identité'
                    }
                }
            },
            comment: {
                validators: {
                        stringLength: {
                            min: 5,
                            max: 500,
                            message:'Veuillez saisir un message compris entre 5 et 500 caractères'
                        },
                        notEmpty: {
                            message: 'Veuillez saisir un message'
                        }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow"); // Do something ...
            $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
</script>

