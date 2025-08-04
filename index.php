<?php
// =====================================================================
// LÓGICA PHP PARA PROCESSAR O FORMULÁRIO DE CONTATO
// =====================================================================
$status_mensagem = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars(trim($_POST["nome"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $assunto = htmlspecialchars(trim($_POST["assunto"]));
    $mensagem = htmlspecialchars(trim($_POST["mensagem"]));

    // Validação básica dos campos
    if (empty($nome) || empty($email) || empty($assunto) || empty($mensagem)) {
        // Redireciona para exibir a mensagem de erro
        header("Location: index.php#contato?status=erro_validacao");
        exit;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Redireciona para exibir a mensagem de e-mail inválido
        header("Location: index.php#contato?status=erro_email_invalido");
        exit;
    } else {
        // --- CONFIGURAÇÃO DE E-MAIL ---
        $destinatario = "seu_email_aqui@exemplo.com";
        $email_assunto = "Contato do Site - " . $assunto;
        $headers = "From: " . $nome . " <" . $email . ">\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $corpo_email = "Nome: " . $nome . "\n" . "Email: " . $email . "\n" . "Assunto: " . $assunto . "\n\n" . "Mensagem:\n" . $mensagem . "\n";

        if (mail($destinatario, $email_assunto, $corpo_email, $headers)) {
            // Ação de sucesso: redireciona com o status 'sucesso'
            header("Location: index.php#contato?status=sucesso");
            exit;
        } else {
            // Ação de erro: redireciona com o status 'erro'
            header("Location: index.php#contato?status=erro");
            exit;
        }
    }
}

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'sucesso') {
        $status_mensagem = '<p class="success-message">Sua mensagem foi enviada com sucesso!</p>';
    } elseif ($_GET['status'] == 'erro') {
        $status_mensagem = '<p class="error-message">Houve um erro ao enviar sua mensagem. Tente novamente mais tarde.</p>';
    }
    // Opcional: Adicionar mensagens para os erros de validação
    elseif ($_GET['status'] == 'erro_validacao') {
        $status_mensagem = '<p class="error-message">Por favor, preencha todos os campos do formulário.</p>';
    } elseif ($_GET['status'] == 'erro_email_invalido') {
        $status_mensagem = '<p class="error-message">Por favor, insira um endereço de e-mail válido.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escritório de Advocacia Bancária - Sua Solução Jurídica</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/icon.png" type="image/x-icon">
</head>
<body>

    <header id="main-header">
        <div class="container">
            <a href="#hero" class="logo">
                <img src="assets/images/logo.png" alt="Logo do Escritório de Advocacia Bancária">
            </a>
            <nav id="main-nav">
                <ul>
                    <li><a href="#hero">Início</a></li>
                    <li><a href="#sobre">Sobre Nós</a></li>
                    <li><a href="#areas-atuacao">Áreas de Atuação</a></li>
                    <li><a href="#mapa">Nossos Escritórios</a></li>
                    <li><a href="team.php">Nossa Equipe</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="hero" class="hero-section">
        <div class="container">
            <h2>Soluções Especializadas em Direito Bancário</h2>
            <p>Atuamos com excelência e compromisso para defender seus interesses financeiros e direitos perante instituições bancárias.</p>
            <a href="#contato" class="btn btn-primary">Fale Conosco Agora!</a>
        </div>
    </section>

    <section id="sobre" class="about-section">
        <div class="container">
            <h2>Sobre o Nosso Escritório</h2>
            <p>Fundado em 2025, o Escritório de Advocacia Machado & Bazzan é referência em assessoria e contencioso no setor bancário. Nossa equipe de advogados especializados dedica-se a oferecer um atendimento personalizado e estratégico, buscando as melhores soluções para cada cliente.</p>
            <p>Com vasta experiência e profundo conhecimento da legislação, garantimos a segurança jurídica e a tranquilidade que você precisa para lidar com questões complexas do direito bancário.</p>
        </div>
    </section>

    <section id="areas-atuacao" class="services-section">
        <div class="container">
            <h2>Nossas Áreas de Atuação</h2>
            <div class="service-grid">
                <div class="service-item">
                    <h3>Ações de Dívida Prescrita</h3>
                    <p>Orientação e defesa em casos de cobrança de dívidas prescritas, buscando a declaração de inexigibilidade judicial.</p>
                </div>
                <div class="service-item">
                    <h3>Revisão de Empréstimos</h3>
                    <p>Análise detalhada de contratos de empréstimo para identificar e contestar juros abusivos, tarifas indevidas e outras ilegalidades.</p>
                </div>
                <div class="service-item">
                    <h3>Revisão de Cartões RCC e RMC</h3>
                    <p>Atuação especializada na revisão de contratos de Reserva de Margem Consignável (RMC) e Cartão de Crédito Consignado (RCC), buscando a anulação de abusividades.</p>
                </div>
                <div class="service-item">
                    <h3>Revisão de Descontos Sindicais</h3>
                    <p>Assessoria para contestar e reverter descontos sindicais indevidos, garantindo o direito do trabalhador.</p>
                </div>
                <div class="service-item">
                    <h3>Fraude de Empréstimo</h3>
                    <p>Defesa e recuperação de danos para vítimas de empréstimos fraudulentos realizados em seu nome sem autorização.</p>
                </div>
                <div class="service-item">
                    <h3>Venda Casada de Seguro</h3>
                    <p>Anulação de contratos de seguro impostos junto a empréstimos e financiamentos, recuperando valores pagos indevidamente.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="mapa" class="sessao-mapa">
        <h2>Onde estamos</h2>
        <div class="map-section-container">
            <div class="map-container">
                <?php echo file_get_contents(__DIR__ . '/assets/svg/brazil-map.svg'); ?>
            </div>

            <div id="office-info-panel">
                <h3>Informações do Escritório</h3>
                <p>Clique em um estado para ver os detalhes do escritório.</p>
            </div>
    
        </div>

    </section>

    <section id="contato" class="contact-section">
        <div class="container">
            <h2>Fale Conosco</h2>
            <p>Entre em contato para agendar uma consulta ou tirar suas dúvidas. Estamos prontos para ajudar!</p>

            <form action="index.php#contato" method="POST" class="contact-form">
                <div class="form-group">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" required placeholder="Seu nome">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required placeholder="seu.email@exemplo.com">
                </div>
                <div class="form-group">
                    <label for="assunto">Assunto:</label>
                    <input type="text" id="assunto" name="assunto" required placeholder="Ex: Revisão de Juros">
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem:</label>
                    <textarea id="mensagem" name="mensagem" rows="6" required placeholder="Descreva sua questão aqui..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
            </form>

            <?php echo $status_mensagem; // Exibe a mensagem de status do envio do formulário ?>

            <div class="contact-info">
                <h3>Outras Formas de Contato:</h3>
                <p><strong>Telefone:</strong> (51) 51 98176-1286</p>
                <p><strong>E-mail:</strong> <a href="mailto:contato@machadobazzan.com.br">contato@machadobazzan.com.br</a></p>
                <p><strong>Endereço:</strong> Av. General Flores da Cunha, Cachoeirinha - RS</p>
                
                <a href="https://wa.me/555197149065?text=Olá,%20gostaria%20de%20mais%20informações%20sobre%20seus%20serviços%20de%20advocacia%20bancária." target="_blank" class="whatsapp-link btn btn-whatsapp">
                    <img src="assets/images/whatsapp-icon.png" alt="Ícone WhatsApp"> Fale Conosco pelo WhatsApp
                </a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Machado & Bazzan. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>