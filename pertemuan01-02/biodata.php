<?php

function statuskelulusan(float $학번): string {
    if ($학번 >= 4.50) return '짱!!';
    if ($학번 <= 4.50) return '오케이';
    return '힘내!'; }

$mahasiswa = [
    '학번' => '20240144',
    'nama' => '박지성 ♡',
    '전공' => '의공학',
    '학기' => '7',
    '평점' => 5.52 ];

$foto = 'image/ea.gif';

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Mahasiswa (My Mine Gwehj) ♡</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;}

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 24px;
            position: relative;
            overflow-x: hidden;
            font-family: 'Trebuchet MS', Times-new-rowman, sans-serif;
            background: radial-gradient(
                ellipse at bottom,
                #c2bfbfe0 100% );
            color: #f8f4ff; }

        .stars {
            position: fixed;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
            z-index: 0; }

        .star {
            position: absolute;
            top: -20px;
            left: var(--x);
            width: var(--size);
            height: var(--size);
            border-radius: 50%;
            background: var(--color);
            box-shadow: 0 0 8px var(--color);
            opacity: 0;
            animation: starRain var(--duration) linear
                var(--delay) infinite; }

        @keyframes starRain {
            0% {
                transform: translateY(-20px) rotate(0deg);
                opacity: 0; }
            10% {
                opacity: 0.95; }
            90% {
                opacity: 0.8; }
            100% {
                transform: translateY(110vh) rotate(180deg);
                opacity: 0; } }

        .sparkle {
            position: absolute;
            left: var(--x);
            top: -30px;
            color: var(--color);
            font-size: var(--size);
            text-shadow: 0 0 10px var(--color);
            animation: sparkleRain var(--duration) linear
                var(--delay) infinite; }

        @keyframes sparkleRain {
            0% {
                transform: translateY(-30px) rotate(0deg);
                opacity: 0; }
            15%, 80% {
                opacity: 1; }

            100% {
                transform: translateY(110vh) rotate(240deg);
                opacity: 0; } }

        .card {
            position: relative;
            z-index: 1;
            display: flex;
            width: 100%;
            max-width: 720px;
            min-height: 350px;
            overflow: hidden;
            background: #fffdfb;
            border: 2px solid #656d73;
            border-radius: 22px;
            box-shadow: 0 12px 30px #10101122; }

        .photo-section {
            width: 36%;
            flex-shrink: 0;
            padding: 24px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: #050505; }

        .photo {
            width: 170px;
            height: 210px;
            object-fit: cover;
            border: 5px solid white;
            border-radius: 14px;
            box-shadow: 0 5px 12px #77779922; }

        .photo-caption {
            margin-top: 14px;
            font-size: 13px;
            font-weight: bold;
            color: #ffffff; }

        .info-section {
            flex: 1;
            min-width: 0;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #fffdfb; }

        .eyebrow {
            margin-bottom: 8px;
            color: #000000;
            font-size: 11px;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase; }

        h1 {
            margin-bottom: 5px;
            font-size: 28px;
            color: #000000; }

        .subtitle {
            margin-bottom: 24px;
            color: #4a4949;
            font-size: 13px; }

        .detail {
            display: flex;
            gap: 12px;
            padding: 10px 0;
            border-bottom: 1px dashed #e8dfe9;
            font-size: 14px; }

        .label,
        .achievement-label {
            width: 85px;
            flex-shrink: 0;
            color: #020202; }

        .value,
        .achievement-value {
            font-weight: bold;
            overflow-wrap: anywhere;
            color: #020202; }

        .achievement {
            display: flex;
            align-items: baseline;
            gap: 12px;
            padding: 10px 0;
            border-bottom: 1px dashed #e8dfe9;
            font-size: 14px; }

        .achievement-value {
            font-size: 14px; }

        .footer {
            margin-top: 18px;
            font-size: 11px;
            color: #000000;
            text-align: right; }

        .eyebrow {
            margin-bottom: 8px;
            color: #000000;
            font-size: 11px;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase; }

        h1 {
            margin-bottom: 5px;
            font-size: 28px;
            color: #000000; }

        .subtitle {
            margin-bottom: 24px;
            color: #000000;
            font-size: 13px; }

        .detail {
            display: flex;
            gap: 12px;
            padding: 11px 0;
            border-bottom: 1px dashed #000000;
            font-size: 14px; }

        .label {
            width: 85px;
            flex-shrink: 0;
            color: #000000; }

        .value {
            font-weight: bold;
            overflow-wrap: anywhere;
            color: #000000; }

        .achievement {
            display: flex;
            gap: 12px;
            align-items: baseline;
            padding: 11px 0;
            border-bottom: 1px dashed #000000;
            font-size: 14px; }

        .achievement-label {
            width: 85px;
            flex-shrink: 0;
            color: #000000; }

        .achievement-value {
            font-size: 14px;
            font-weight: bold;
            color: #000000;
            overflow-wrap: anywhere; }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #38363d;
            text-align: right; }

        @media (max-width: 560px) {
            body {
                padding: 18px; }
            .card {
                flex-direction: column;
                max-width: 380px; }
            .photo-section {
                width: 100%;
                padding: 24px; }
            .photo {
                width: 150px;
                height: 175px; }
            .info-section {
                padding: 24px; }
            h1 {
                font-size: 24px; } }

        @media (prefers-reduced-motion: reduce) {
            .star,
            .sparkle {
                animation: none;
                display: none; } }
    </style>
</head>

<body>
    <div class="stars" id="stars"></div>
        <main class="card">
            <section class="photo-section">
                <img
                    src="<?= htmlspecialchars($foto) ?>"
                    alt="Foto <?= htmlspecialchars($mahasiswa['nama']) ?>"
                    class="photo">
                <p class="photo-caption">
                    2024년 가을학기
                </p>
                <p>  My Suami University </p>
            </section>

            <section class="info-section">
                <p class="eyebrow">Department of Information Technology and Electrical Engineering (D-ITE) </p>

                <h1>
                    <?= htmlspecialchars($mahasiswa['nama']) ?>
                </h1>

                <p class="subtitle">
                    미래의 남편, 아- 엔지니어
                </p>

                <div class="detail">
                    <span class="label">학번</span>
                    <span class="value">
                        <?= htmlspecialchars($mahasiswa['학번']) ?>
                    </span>
                </div>

                <div class="detail">
                    <span class="label">전공</span>
                    <span class="value">
                        <?= htmlspecialchars($mahasiswa['전공']) ?>
                    </span>
                </div>

                <div class="detail">
                    <span class="label">학기</span>
                    <span class="value">
                        <?= htmlspecialchars($mahasiswa['학기']) ?>
                    </span>
                </div>

                <div class="detail">
                    <span class="label">평점</span>
                    <span class="value">
                        <?= number_format($mahasiswa['평점'], 2) ?>
                    </span>
                </div>

                <div class="achievement">
                    <span class="achievement-label">
                        학업 성적
                    </span>

                    <span class="achievement-value">
                        <?= htmlspecialchars(
                            statuskelulusan($mahasiswa['평점'])
                        ) ?>
                    </span>
                </div>

                <p class="footer">
                    ♡ 오늘도 꿈을 향해! ♡
                </p>

            </section>
        </main>

    <script>
        const stars = document.getElementById('stars');
        const colors = [
            '#ff719c',
            '#ffc439',
            '#7c51ff',
            '#4ac6ff',
            '#ffb8b8',
            '#020202' ];

        for (let i = 0; i < 150; i++) {
            const star = document.createElement('span');
            star.className = 'star';

            star.style.setProperty('--x', Math.random() * 100 + '%');
            star.style.setProperty(
                '--size',
                (Math.random() * 2 + 1) + 'px' 
            );
            star.style.setProperty(
                '--duration',
                (Math.random() * 8 + 5) + 's'
            );
            star.style.setProperty(
                '--delay',
                (-Math.random() * 15) + 's'
            );

            const color = colors[
                Math.floor(Math.random() * colors.length) ];

            star.style.setProperty('--color', color);
            stars.appendChild(star);
        }

        const symbols = ['✦', '✧', '⋆', '★', '♡'];

        for (let i = 0; i < 24; i++) {
            const sparkle = document.createElement('span');
            sparkle.className = 'sparkle';

            sparkle.textContent =
                symbols[Math.floor(Math.random() * symbols.length)];

            sparkle.style.setProperty(
                '--x',
                Math.random() * 100 + '%' );
           
            sparkle.style.setProperty(
                '--size',
                (Math.random() * 12 + 8) + 'px' );

            sparkle.style.setProperty(
                '--duration',
                (Math.random() * 8 + 6) + 's' );

            sparkle.style.setProperty(
                '--delay',
                (-Math.random() * 15) + 's' );

            const color = colors[
                Math.floor(Math.random() * colors.length) ];

            sparkle.style.setProperty('--color', color);
            stars.appendChild(sparkle);
        }
    </script>

</body>
</html>
