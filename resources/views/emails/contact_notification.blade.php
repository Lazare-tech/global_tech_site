<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouveau message de contact</title>
</head>
<body style="margin:0;padding:0;background-color:#f8f9fa;font-family:Arial, sans-serif;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f8f9fa;padding:30px 0;">
        <tr>
            <td>
                <table align="center" cellpadding="0" cellspacing="0" width="600" style="background:#ffffff;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,0.05);padding:30px;">
                    <tr>
                        <td style="text-align:center;padding-bottom:20px;">
                            <h2 style="color:#0d6efd;font-size:24px;margin:0;">📩 Nouveau message de contact</h2>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size:16px;color:#333333;line-height:1.6;">
                            <p><strong style="color:#0d6efd;">Nom :</strong> {{ $data['nom'] }}</p>
                            <p><strong style="color:#0d6efd;">Téléphone :</strong> {{ $data['numero_telephone'] }}</p>
                            <p style="margin-top:20px;"><strong style="color:#0d6efd;">Message :</strong></p>
                            <div style="background:#f1f1f1;padding:15px;border-radius:5px;">
                                {{ $data['message'] }}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top:30px;text-align:center;color:#999999;font-size:12px;">
                            Ce message vous a été envoyé depuis le formulaire de contact de votre site.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
