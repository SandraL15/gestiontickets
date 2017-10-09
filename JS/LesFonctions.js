function AfficherLesLogins(){
    $.ajax(
            {
               type:'post',
                url:"index.php/CtrlTickets/",
                data:"login="+$('#login').val+"mdp="+$('#mdp').val(),   
               
                            success:function(data)
                            {
                            $('#login').empty();
                            $('#mdp').empty();
                            $('#login').append(data);
                            $('#mdp').append(data);
                        },
                     error:function()
                     {
                          alert('Erreur SQL');
                      }
                }
                
            );
   
}
