

        <!-- Fenetre MODAL -->  
<html>
    <head>
            <?php include './head.html'; ?>
        <script type="text/javascript" src="bootstrapvalidator-0.5.3/dist/js/bootstrapValidator.min.js"></script>
        <link href="bootstrapvalidator-0.5.3/dist/css/bootstrapValidator.min.css" rel="stylesheet">
    </head>
    <body>
        
        <!-- Success message -->
        <div class="alert alert-success" role="alert" id="success_message_first">
            Merci pour ton inscription ! <i class="glyphicon glyphicon-flash"></i> Je reviens vers toi rapidement pour confirmer notre premier cours.
        </div>
        
         <!-- Success message -->
        <div class="alert alert-success" role="alert" id="success_message_regular">
             ! <i class="glyphicon glyphicon-sunglasses"></i> Je vous confirmerai votre cours le plus bref delais.
        </div>
        
        
        <button type="button" class="btn btn-default btn-lg btn-primary" data-toggle="modal" data-target="#myModal">
          <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Inscription
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3><i class="glyphicon glyphicon-flash"></i> Inscription au premier cours</h3>
                    </div>
                    <div class="modal-body">
                        <div class="tab-pane active" id="tab1">
                            </br>
                            <form id="firstInscrpiton" method="post" class="form-horizontal" action="firstInscription.php">
                                <input type="hidden" name="frmname" value="firstInscrpiton"/>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Nom* :</label>
                                    <div class="col-lg-6 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input type="text" class="form-control" name="nom" placeholder="Nom"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Prénom* :</label>
                                    <div class="col-lg-6 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input type="text" class="form-control" name="prenom" placeholder="Prénom" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Adresse* :</label>
                                    <div class="col-lg-7 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                            <input type="text" class="form-control" name="adresse" placeholder="Adresse" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">CP* :</label>
                                    <div class="col-lg-5 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                            <input type="text" class="form-control" name="cp" placeholder="CP" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ville* :</label>
                                    <div class="col-lg-5 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                            <input type="text" class="form-control"  placeholder="Ville" name="ville" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                  <label class="col-lg-3 control-label">Tél. portable* :</label>  
                                  <div class="col-lg-5 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input name="tel" placeholder="0601020304" class="form-control" type="text">
                                    </div>
                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">E-Mail* :</label>  
                                    <div class="col-lg-7 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                            <input name="email" placeholder="E-Mail" class="form-control"  type="text">
                                        </div>
                                    </div>
                                </div>                                            

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Où faire le premier cours* :</label>
                                    <div class="col-lg-7">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                            <select class="form-control" name="lieu">
                                                <option value="">Sélectionner un lieu</option>
                                                <option value="CZ">Chez le Coach</option>
                                                <option value="Eleve">Chez moi</option>
                                                <option value="Skype">Via Skype</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Text area -->

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Message* :</label>
                                    <div class="col-lg-7">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            <textarea class="form-control" name="comment" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-5 col-lg-offset-3">
                                        <button type="submit" class="btn btn-primary">Valider</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script> 
$(document).ready(function() {
 $('#firstInscrpiton')
        .bootstrapValidator({
            // Only disabled elements are excluded
            // The invisible elements belonging to inactive tabs must be validated
            excluded: [':disabled'],
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
        fields: {
            nom: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez renseigner un nom'
                    }
                }
            },
            prenom: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez renseigner un prénom'
                    }
                }
            },
            adresse: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez renseigner une adresse'
                    }
                }
            },
            cp: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez renseigner un code postal'
                    }
                }
            },
            ville: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez renseigner une ville'
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
            tel: {
                validators: {
                    phone: {
                        country: 'FR',
                        message: 'Veuillez saisir un numéro de téléphone valide'
                    }
                }
            },
            lieu: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez selectionner un lieu'
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
        $('#success_message_first').slideDown({ opacity: "show" }, "slow"); // Do something ...
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