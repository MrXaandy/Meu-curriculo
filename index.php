<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu Curriculo</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="col-md-3">
            <div class="profile-sidebar">
                <figure class="profile-user-pic">
                        <img src="imagens/mrxaandy.png" alt="mrxaandy" class="img-responsive img-circle img">
                </figure>
                <div class="profile-user-title">
                        MrXaandy
                </div>
                <div class="profile-user-buttons">
                    <button type="button" class="btn" data-toggle="modal" data-target="#myModal">Entre em contato</button>
                </div>
                <div class="profile-user-menu">
                    <button id="defaultOpen" class="tablinks" onclick="openInfo(event, 'inicio')">Inicio</button>
                    <button class="tablinks" onclick="openInfo(event, 'informacoes')">Informações básicas</button>
                    <button class="tablinks" onclick="openInfo(event, 'formacao')">Formação acadêmica</button>
                    <button class="tablinks" onclick="openInfo(event, 'experiencia')">Experiência profissional</button>
                    <button class="tablinks" onclick="openInfo(event, 'eventos')">Participação em eventons</button>
                    <button class="tablinks" onclick="openInfo(event, 'adicionais')">Informações adicionais</button>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <section id="inicio" class="profile-content">
                <h2>Seja bem-vindo!</h2>
                <p class="descricao">Meu nome é Alexandre da Silva, atualmente curso Engenharia da Computação 
                    na Faculdade SATC, e atuo profissionalmente no ramo de Logística.
                    Por consequência, sou aficionado por soluções computacionais para problemas logísticos.</p> 
                <p>Este é o meu currículo online. Navegue através das abas laterais para acessar mais informações.</p>
            </section>
            <section id="informacoes" class="profile-content">
                <h2>Informações básicas</h2>
                <p><strong>Data de nascimento:</strong>23/10/1995</p>
                <p><strong>Endereço:</strong>R. Herculano da Silva</p>
                <p><strong>Estado Civil:</strong> Solteiro</p>
                <p><strong>Naturalidade:</strong> Brasileiro</p>
                <p><strong>Telefone:</strong> (48) 988353879</p>
                <p><strong>Email:</strong> alexandresx9@gmail.com</p>
            </section>
            <section id="formacao" class="profile-content">
                <h2><strong>Formação acadêmica</strong></h2>
                <p><strong>Ensino fundamental:</strong></p>
                <p>Escola E. F. Visconde De Taunay</p>
                <p><strong>Ensino médio:</strong></p>
                <p>Escola E. M. Walter Holthausen</p>   
                <p><strong>Graduação:</strong></p>
                <p>Engenharia da Computação / Faculdade SATC</p>
            </section>
            <section id="experiencia" class="profile-content">
                <h2>Experiência profissional</h2>
                <p><strong>Empresa:</strong> Fontanella Transportes</p>
                <p><strong>Cargo:</strong> Coordenador de Logistica</p>
                <p><strong>Data de inicio:</strong> 23/12/2015</p>
                <p><strong>Atividades desenvolvidas:</strong></p>
                <p>Gerenciamento de caminhões da frota</p>
            </section>
            <section id="eventos" class="profile-content">
                <h2>Participação em eventos</h2>
                <p><strong>Nome:</strong> SECOMP</p>
                <p><strong>Cidade:</strong> Criciúma</p>
                <p><strong>Ano:</strong>2017</p>
            </section>
            <section id="adicionais" class="profile-content">
                <h2>Informações adicionais:</h2>
                <p><strong>Competências:</strong></p>
                <p>Capacidade de resolver problemas complexos, mesmo sob pressão.</p>
                <p><strong>Carteira de motorista:</strong> AB</p>
                <p><strong>Disponibilidade para viagens:</strong> Sim</p>
                <p><strong>Idiomas:</strong> Inglês</p>
                <p><strong>Objetivo profissional:</strong> Tecnologia e Logistica</p>
            </section>
        </div>

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Entre em contato</h4>
                    </div>
                    <form action="mail.php" method="post" name="form">
                    <div class="form-group">
                            <label>Nome:</label>
                            <input type="text" class="form-control" name="nome" id="nome">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label>Assunto:</label>
                            <input type="text" class="form-control" name="assunto" id="assunto">
                        </div>
                        <div class="form-group">
                            <label>Mensagem:</label>
                            <textarea class="form-control" name="mensagem" id="mensagem"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default" name="Enviar" value="Enviar">Enviar</button>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <button onclick="topFunction()" id="btnTopo" title="Va para o topo"><span class="glyphicon glyphicon-arrow-up"></span></button>
        <div class="footer">
            <div class="esquerda">
                <p>Alexandre da Silva</p>
            </div>
            <div class="direita">
                <p>Lauro Müller - 88880-000</p>
                <p>R. Herculano da Silva</p>
            </div>
        </div>
    </main>
    
    <script>
        
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("btnTopo").style.display = "block";
            } else {
                document.getElementById("btnTopo").style.display = "none";
            }
        }
        
        function topFunction() {
            document.body.scrollTop = 0; 
            document.documentElement.scrollTop = 0; 
        }

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

            document.getElementById(topico).scrollIntoView();
        }   
        document.getElementById("defaultOpen").click();
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>