<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossa Equipe - Escritório de Advocacia Bancária</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/icon.png" type="image/x-icon">
</head>
<body>

    <header id="main-header">
        <div class="container">
            <a href="index.php#hero" class="logo">
                <img src="assets/images/logo.png" alt="Logo do Escritório de Advocacia Bancária">
            </a>
            <nav id="main-nav">
                <ul>
                    <li><a href="index.php#hero">Início</a></li>
                    <li><a href="index.php#sobre">Sobre Nós</a></li>
                    <li><a href="index.php#areas-atuacao">Áreas de Atuação</a></li>
                    <li><a href="index.php#mapa">Nossos Escritórios</a></li>
                    <li><a href="equipe.php" class="active">Nossa Equipe</a></li>
                    <li><a href="index.php#contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="equipe" class="team-section">
            <div class="container">
                <h2>Conheça Nossa Equipe de Especialistas</h2>
                <div class="team-grid">
                    <div class="team-member">
                        <img src="assets/images/vitor-profile.jpg" alt="Foto de Vitor Machado">
                        <div class="member-info">
                            <h3>Vitor Machado</h3>
                            <p class="role">Sócio-fundador e Especialista em Direito Bancário</p>
                            <p class="description">DESCRICAO VITOR</p>
                        </div>
                    </div>

                    <div class="team-member">
                        <img src="assets/images/eduardo-profile.jpg" alt="Foto de Eduardo Bazzan">
                        <div class="member-info">
                            <h3>Eduardo Bazzan</h3>
                            <p class="role">Sócio-fundador e Especialista em Direito Bancário</p>
                            <p class="description">DESCRICAO EDUARDO</p>
                        </div>
                    </div>

                    <div class="team-member">
                        <img src="assets/images/placeholder-team.jpg" alt="">
                        <div class="member-info">
                            <h3>Fulano</h3>
                            <p class="role">Auxiliar Jurídico</p>
                        </div>
                    </div>

                    <div class="team-member">
                        <img src="assets/images/placeholder-team.jpg" alt="">
                        <div class="member-info">
                            <h3>Ciclano</h3>
                            <p class="role">Estagiário de Direito</p>
                        </div>
                    </div>

                    <div class="team-member">
                        <img src="assets/images/placeholder-team.jpg" alt="">
                        <div class="member-info">
                            <h3>Beltrano</h3>
                            <p class="role">Auxiliar Comercial</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Machado & Bazzan. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>