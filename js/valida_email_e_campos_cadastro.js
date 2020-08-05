        
         $(document).ready(function() {

            $("#datanascimento").mask("99/99/9999");
            $("#celular").mask("(99) 9999-9999");
            $("#telfixo").mask("(99) 9999-9999");
            $("#cpf").mask("999.999.999-99");

        });

        function validaEmail(email) {
            var email = $("#email").val();
            if (email != "")
            {
                var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                if (filtro.test(email))
                {
                    return true;
                } else {
                    return false;
                }
            }

        }

        function validaCampos() {

            if ($('#nome').val() == '' || $('#nome').val().length < 7) {
                document.getElementById("nome_vazio").innerHTML = "<span class='mensagem_validacao_campos'>O Nome não pode ficar vazio ou ter menos que 7 letras!</span>";
                $('#nome').focus();
                return false;
            } else {
                    if ($('#datanascimento').val() == '') {
                        document.getElementById("data_vazio").innerHTML = "<span class='mensagem_validacao_campos'>Data nascimento é obrigatória</span>";
                        $('#datanascimento').focus();
                        return false;
                    } else {

                        if ($('#celular').val() == '') {
                            document.getElementById("celular_vazio").innerHTML = "<span class='mensagem_validacao_campos'>Número de celular é obrigatório</span>";
                            $('#celular').focus();
                            return false;
                        } else {

                            if ($('#email').val() == '' || validaEmail($('#email').val()) == false) {
                                document.getElementById("email_vazio").innerHTML = "<span class='mensagem_validacao_campos'>Email inválido</span>";
                                $('#email').focus();
                                return false;
                            } else {
                                document.getElementById("email_vazio").innerHTML = "";
                                if ($('#confirmaemail').val() == '' || validaEmail($('#confirmaemail').val()) == false) {
                                    document.getElementById("confirma_email_vazio").innerHTML = "<span class='mensagem_validacao_campos'>Confirma email inválido</span>";
                                    $('#confirmaemail').focus();
                                    return false;
                                } else {
                                    document.getElementById("confirma_email_vazio").innerHTML = "";
                                    if ($('#confirmaemail').val() != $('#email').val()) {
                                        document.getElementById("confirma_email_vazio").innerHTML = "<span class='mensagem_validacao_campos'>Emails diferentes</span>";
                                        $('#confirmaemail').focus();
                                        return false;
                                    }
                                    if ($('#senha').val() == '') {
                                        document.getElementById("senha_vazia").innerHTML = "<span class='mensagem_validacao_campos'>Senha vazia não pode</span>";
                                        $('#senha').focus();
                                        return false;
                                    } else {
                                        document.getElementById("senha_vazia").innerHTML = "";
                                        if ($('#confirmasenha').val() == '') {
                                            document.getElementById("confirma_senha_vazia").innerHTML = "<span class='mensagem_validacao_campos'>Confirma senha não pode ficar vazia</span>";
                                            $('#confirmasenha').focus();
                                            return false;
                                        } else {
                                            if ($('#confirmasenha').val() != $('#senha').val()) {
                                                document.getElementById("confirma_senha_vazia").innerHTML = "<span class='mensagem_validacao_campos'>Senhas diferentes</span>";
                                                $('#confirmasenha').focus();
                                                return false;
                                            } else

                                                return true;
                                            }
                                        }
                                    }
                                }
                            }
                        }

                    }

                }