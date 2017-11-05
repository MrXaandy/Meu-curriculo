<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu Curriculo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <section class="col-md-3">
            <section class="profile-sidebar">
                <figure class="profile-usertopic">
                        <img src="imagens/mrxaandy.png" alt="mrxaandy" class="img-responsive img-circle">
                </figure>
                <div class="profile-user-title">
                        <p>MrXaandy</p>
                </div>
                <section class="profile-user-buttons">
                    <button type="button" class="btn" data-toggle="modal" data-target="#myModal">Entre em contato</button>
                </section>
                <section class="profile-user-menu">
                    <button id="defaultOpen" class="tablinks" onclick="openInfo(event, 'inicio')">Inicio</button>
                    <button class="tablinks" onclick="openInfo(event, 'informacoes')">Informações básicas</button>
                    <button class="tablinks" onclick="openInfo(event, 'formacao')">Formação acadêmica</button>
                    <button class="tablinks" onclick="openInfo(event, 'experiencia')">Experiência profissional</button>
                    <button class="tablinks" onclick="openInfo(event, 'eventos')">Participação em eventons</button>
                    <button class="tablinks" onclick="openInfo(event, 'adicionais')">Informações adicionais</button>
                </section>
            </section>
        </section>
        <section class="col-md-9">
            <section id="inicio" class="profile-content">
                <h2>Seja bem-vindo!</h2>
                <h3>Meu nome é Alexandre da Silva, atualmente curso Engenharia da Computação 
                    na Faculdade SATC, e atuo profissionalmente no ramo de Logística.
                    Por consequência, sou aficionado por soluções computacionais para problemas logísticos.</h3> 
                <h3>Este é o meu currículo online. Navegue através das abas laterais para acessar mais informações.</h3>
            </section>
            <section id="informacoes" class="profile-content">
                <h2>Informações básicas</h2>
                <h3><strong>Data de nascimento:</strong> 23/10/1995</h3>
                <h3><strong>Endereço:</strong> R. Herculano da Silva</h3>
                <h3><strong>Estado Civil:</strong> Solteiro</h3>
                <h3><strong>Naturalidade:</strong> Brasileiro</h3>
                <h3><strong>Telefone:</strong> (48) 988353879</h3>
                <h3><strong>Email:</strong> alexandresx9@gmail.com</h3>
            </section>
            <section id="formacao" class="profile-content">
                <h2><strong>Formação acadêmica</strong></h2>
                <h3><strong>Ensino fundamental:</strong> Escola E. F. Visconde De Taunay</h3>
                <h3><strong>Ensino médio:</strong> Escola E. M. Walter Holthausen</h3>   
                <h3><strong>Graduação:</strong> Engenharia da Computação / Faculdade SATC</h3>
            </section>
            <section id="experiencia" class="profile-content">
                <h2>Experiência profissional</h2>
                <h3><strong>Empresa:</strong> Fontanella Transportes</h3>
                <h3><strong>Cargo:</strong> Coordenador de Logistica</h3>
                <h3><strong>Data de inicio:</strong> 23/12/2015</h3>
                <h3><strong>Atividades desenvolvidas:</strong> Gerenciamento de caminhões da frota</h3>
            </section>
            <section id="eventos" class="profile-content">
                <h2>Participação em eventos</h2>
                <h3></h3>
                <h3></h3>
                <h3></h3>
            </section>
            <section id="adicionais" class="profile-content">
                <h2><strong>Informações adicionais:<strong></h2>
                <h3><strong>Competências:</strong></h3>
                <h3><strong>Carteira de motorista:</strong></h3>
                <h3><strong>Disponibilidade para viagens:</strong></h3>
                <h3><strong>Idiomas:</strong></h3>
                <h3><strong>Objetivo profissional:</strong></h3>
            </section>
        </section>

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Entre em contato</h4>
                    </div>
                    <form action="mail.php" method="post" name="form">
                    <div class="form-group">
                            <label for="Nome">Nome:</label>
                            <input type="text" class="form-control" name="nome" id="nome">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="Assunto">Assunto:</label>
                            <input type="text" class="form-control" name="assunto" id="assunto">
                        </div>
                        <div class="form-group">
                            <label for="Mensagem">Mensagem:</label>
                            <textarea type="text" class="form-control" name="mensagem" id="mensagem"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default" name="Enviar" value="Enviar">Enviar</button>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <footer>
        </footer>
    </section>
    
    <script>
        function openInfo(evt, topico) {
           
            var i, tabcontent, tablinks;
            
            tabcontent = document.getElementsByClassName("profile-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
        
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace("active", "");
            }
        
            document.getElementById(topico).style.display = "block";
            evt.currentTarget.className += " active";
        }   
        document.getElementById("defaultOpen").click();
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>