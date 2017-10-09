<html>
    <head>
        
        
        <h1> Gestion ticket ==> connexion </h1>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src = "<?php echo base_url();?>JS/LesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript">      
          $(
                function()
                {
                    $('#btnEnter').click
                    (
                        function(){AfficherLesLogins($(this).val());}
                    );
                }            
            );
            
     </script>   
    </head>
    <body>
        <h1> <?php $titre ?> </h1>
        
        <p>Saisissez votre login</p>
        <input id="login" type="text" value="">
        <p>Saisissez votre mdp</p>
        <input id="mdp" type="text" value="">
        <input id="btnEnter" type="button" value="Envoyer">
        
            
    </body>
</html>
