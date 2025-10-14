<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Réponse à votre devis</title>
<style>

body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f6f8fa;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: 30px auto;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .header {
            background-color: #0d6efd;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        .header img {
            width: 60px;
            margin-bottom: 10px;
        }
        .content {
            padding: 30px;
        }
        .content h2 {
            color: #0d6efd;
        }
        .footer {
            background-color: #f1f1f1;
            padding: 20px;
            text-align: center;
            font-size: 13px;
            color: #555;
        }
        .footer a {
            color: #0d6efd;
            text-decoration: none;
        }
</style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <img src="{{ asset('assets/images/logo_noire.png') }}" alt="Global Tech">
            <h1>Global Tech</h1>
        </div>

        <!-- Contenu -->
        <div class="content">
            <p>{{ $reponse }}</p>

            <p>Merci d’avoir contacté <strong>Global Technology International Corporation </strong>.  
            Nous restons disponibles pour toute autre demande.</p>

            <p>Cordialement, <br>
            <strong>L’équipe Global Tech</strong></p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p><strong>Global Tech</strong>—Leader spécialisé dans la conception, l'installation et la maintenance de solutions électriques </p>
            <p>📍 Ouagadougou, Burkina Faso<br>
               📞 +226 76 34 28 07 | 72 13 94 15<br>
                ✉️  globaltechnology.bf@gmail.com</p>
            <p><a href="#">www.globaltechnology-Burkina</a></p>
        </div>
    </div>
</body>
</html>
