 function validar(){
        if($('#ideia').val()==""){
            document.getElementById("ideia_vazia").innerHTML = "<span class='mensagem_validacao_campos'>Campo Ideia é obrigatório</span>";
            $('#ideia').focus();
            return false;
        }else{
            document.getElementById("ideia_vazia").innerHTML = "";
            if($('#categoriaSelect option:selected').text()==''){
                document.getElementById("categoria_vazia").innerHTML = "<span class='mensagem_validacao_campos'>Campo categoria é obrigatório</span>";
                $('select#categoriaSelect').focus();
                return false;
            }else{
                document.getElementById("categoria_vazia").innerHTML = "";
                if($('#frase').val()==""){
                    document.getElementById("frase_vazia").innerHTML = "<span class='mensagem_validacao_campos'>Campo frase da ideia é obrigatório</span>";
                    $('#frase').focus();
                    return false;
                }else{

                    return true;
                }
            }
        }    
    }