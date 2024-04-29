<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netlabs - Accueil</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <?php include 'functions.php'; ?>
    <header class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Netlabs <i class="fas fa-cloud"></i></a>
            <?php include 'timeDisplay.php'; ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="apropos.php">À Propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>
    </header>
    <section class="hero">
        <i class="fas fa-cloud icon-dynamic"></i>
        <div class="container">
            <h2><?php echo getWelcomeMessage(); ?></h2>
            <p>Créateurs d'infrastructures cloud innovantes et à la pointe de la technologie.</p>
            <a href="#services" class="btn btn-primary">Découvrir nos services</a>
        </div>
    </section>
    <section id="azure" class="cloud-services">
        <div class="container">
            <h2>Services Azure</h2>
            <p>Azure est une plateforme de services cloud offrant une vaste gamme de fonctionnalités allant de l'informatique, l'analyse, le stockage et le réseau. Les utilisateurs peuvent choisir et configurer ces services pour répondre à leurs besoins spécifiques.</p>
            <div class="row">
                <div class="col-md-4">
                    <h3>Computing</h3>
                    <p>Utilisez des machines virtuelles Azure pour une gestion flexible de la charge de travail.</p>
                    <i class="fas fa-server fa-2x"></i>
                </div>
                <div class="col-md-4">
                    <h3>Analytics</h3>
                    <p>Analysez les données en temps réel avec Azure HDInsight, un service de cloud pour le Big Data.</p>
                    <i class="fas fa-chart-line fa-2x"></i>
                </div>
                <div class="col-md-4">
                    <h3>Storage Solutions</h3>
                    <p>Stockage durable, hautement accessible et massivement scalable avec Azure Blob Storage.</p>
                    <i class="fas fa-database fa-2x"></i>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="services">
        <div class="container">
            <h2>Nos Services</h2>
            <ul>
                <li>Conception et déploiement d'infrastructures cloud</li>
                <li>Développement d'applications sur mesure</li>
                <li>Conseil en stratégie numérique et technologique</li>
                <li>Support et formation aux nouvelles technologies</li>
            </ul>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">
            <h2>Contactez-nous</h2>
            <p>Pour toute question ou demande de devis, n'hésitez pas à nous contacter.</p>
            <p>Email : contact@netlabs.com</p>
            <p>Téléphone : +33 123 456 789</p>
        </div>
    </section>
    <footer class="bg-dark text-white text-center p-3">
        <div class="container">
            <p>&copy; 2024 Netlabs - Pionniers en solutions cloud</p>
        </div>
    </footer>
</body>
</html>
