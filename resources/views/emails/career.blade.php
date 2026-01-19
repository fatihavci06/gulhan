<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kariyer Başvurusu</title>
</head>
<body style="font-family: Arial, sans-serif;">

    <p>Bir kişi tarafından kariyer formu doldurulmuştur. İlgili CV indirme butonu aşağıda bulunmaktadır.</p>

    <p>Formdaki diğer bilgiler:</p>
    <ul>
        <li>Ad Soyad: {{ $name }} {{ $surname }}</li>
        <li>E-posta: {{ $email }}</li>
        <!-- Diğer form alanları -->
    </ul>

    <p>Başvurunuz için teşekkür ederiz.</p>

    <!-- CV İndirme Butonu -->
    <a href="{{ asset($cvName) }}" style="display: inline-block; background-color: #007bff; color: #ffffff; padding: 10px 20px; text-decoration: none;">CV İndir</a>

</body>
</html>
