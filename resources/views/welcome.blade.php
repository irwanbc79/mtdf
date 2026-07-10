<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Maahad Tahfidz Darul Furqon adalah madrasah tahfizh moden yang memadukan Al-Qur'an, ilmu, adab, dan pembinaan karakter di Selangor, Malaysia.">
    <link rel="canonical" href="https://darulfurqon.my">
    <meta property="og:title" content="Maahad Tahfidz Darul Furqon">
    <meta property="og:description" content="Pendidikan tahfizh moden berteraskan ilmu, iman, adab, dan kepimpinan.">
    <meta property="og:url" content="https://darulfurqon.my">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/darul-furqon-logo-512.png') }}">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/darul-furqon-logo-256.png') }}">
    <title>Maahad Tahfidz Darul Furqon</title>
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "EducationalOrganization",
            "name": "Maahad Tahfidz Darul Furqon",
            "url": "https://darulfurqon.my",
            "email": "info@darulfurqon.my",
            "telephone": "+60174333652",
            "address": {
                "@@type": "PostalAddress",
                "addressRegion": "Selangor",
                "addressCountry": "MY"
            },
            "geo": {
                "@@type": "GeoCoordinates",
                "latitude": 2.952421,
                "longitude": 101.341522
            }
        }
    </script>
    <style>
        :root {
            --green-950: #062b23;
            --green-900: #083c31;
            --green-800: #0d5142;
            --gold-500: #d8a941;
            --gold-400: #f3c75b;
            --cream-100: #f8f1df;
            --cream-50: #fff9ed;
            --ink: #17352f;
            --muted: #6d776e;
            --line: rgba(13, 81, 66, .14);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            color: var(--ink);
            background: var(--cream-50);
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .page {
            overflow: hidden;
        }

        .container {
            width: min(1180px, calc(100% - 40px));
            margin: 0 auto;
        }

        .hero {
            min-height: 720px;
            color: white;
            background:
                linear-gradient(100deg, rgba(6, 43, 35, .98) 0%, rgba(6, 43, 35, .88) 38%, rgba(6, 43, 35, .28) 72%, rgba(216, 169, 65, .18) 100%),
                radial-gradient(circle at 86% 30%, rgba(243, 199, 91, .45), transparent 28%),
                linear-gradient(135deg, #0a3b31, #0f5c49);
            position: relative;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(30deg, rgba(255,255,255,.04) 12%, transparent 12.5%, transparent 87%, rgba(255,255,255,.04) 87.5%, rgba(255,255,255,.04)),
                linear-gradient(150deg, rgba(255,255,255,.04) 12%, transparent 12.5%, transparent 87%, rgba(255,255,255,.04) 87.5%, rgba(255,255,255,.04));
            background-size: 84px 148px;
            opacity: .16;
            pointer-events: none;
        }

        .hero::after {
            content: "";
            position: absolute;
            left: -8%;
            right: -8%;
            bottom: -78px;
            height: 170px;
            background: var(--cream-50);
            border-top: 9px solid var(--gold-500);
            border-radius: 0 0 50% 50%;
            transform: rotate(-2.4deg);
            transform-origin: left top;
        }

        .nav {
            position: relative;
            z-index: 3;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 28px 0;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
            font-weight: 800;
            letter-spacing: .02em;
        }

        .brand-mark {
            display: grid;
            width: 58px;
            height: 58px;
            place-items: center;
            border: 2px solid var(--gold-500);
            border-radius: 22px 22px 18px 18px;
            color: var(--gold-400);
            font-family: Georgia, serif;
            font-size: 20px;
            font-weight: 900;
            box-shadow: inset 0 0 0 5px rgba(216, 169, 65, .1);
        }

        .brand-emblem {
            display: grid;
            width: 68px;
            height: 68px;
            place-items: center;
            padding: 4px;
            border: 1px solid rgba(243, 199, 91, .34);
            border-radius: 18px;
            background: rgba(255,255,255,.08);
            box-shadow: 0 12px 34px rgba(0,0,0,.18);
        }

        .brand-emblem img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            filter: drop-shadow(0 4px 10px rgba(0,0,0,.2));
        }

        .brand small,
        .nav a span,
        .eyebrow,
        .label {
            display: block;
            color: rgba(255,255,255,.66);
            font-size: 12px;
            font-weight: 600;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 28px;
            font-size: 14px;
            font-weight: 700;
        }

        .nav-links a {
            line-height: 1.15;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 48px;
            padding: 0 20px;
            border: 1px solid rgba(216, 169, 65, .55);
            border-radius: 10px;
            font-weight: 800;
        }

        .button.gold {
            color: #13352d;
            background: linear-gradient(180deg, var(--gold-400), var(--gold-500));
            box-shadow: 0 14px 34px rgba(216, 169, 65, .3);
        }

        .button.ghost {
            color: white;
            background: rgba(255,255,255,.04);
        }

        .hero-grid {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: minmax(0, .9fr) minmax(480px, 1.1fr);
            gap: 42px;
            align-items: center;
            padding: 52px 0 130px;
        }

        .hero-copy {
            max-width: 610px;
        }

        .hero h1,
        h2 {
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            letter-spacing: .01em;
        }

        .hero h1 {
            max-width: 620px;
            font-size: clamp(44px, 5.4vw, 76px);
            line-height: .95;
            text-transform: uppercase;
        }

        .hero h1 span {
            color: var(--gold-400);
            font-size: .48em;
            line-height: 1.15;
            display: block;
            margin-top: 18px;
            font-family: Inter, ui-sans-serif, system-ui, sans-serif;
        }

        .hero p {
            max-width: 560px;
            margin: 22px 0 0;
            color: rgba(255,255,255,.82);
            font-size: 17px;
            line-height: 1.75;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 34px;
        }

        .hero-media {
            min-height: 520px;
            border-radius: 34px 0 0 34px;
            background:
                linear-gradient(180deg, rgba(255,255,255,.22), rgba(255,255,255,0)),
                linear-gradient(135deg, #d7c49b, #f5ddb3 42%, #0f5c49 42%, #0f5c49);
            position: relative;
            overflow: hidden;
            box-shadow: 0 28px 80px rgba(0,0,0,.25);
        }

        .hero-media::before {
            content: "";
            position: absolute;
            inset: 42px 44px 126px;
            border: 18px solid rgba(255,255,255,.5);
            border-bottom-width: 42px;
            border-radius: 120px 120px 10px 10px;
            box-shadow: inset 0 0 0 6px rgba(8,60,49,.18);
        }

        .hero-media::after {
            content: "Foto kampus dan santri";
            position: absolute;
            right: 34px;
            bottom: 34px;
            padding: 12px 16px;
            color: rgba(255,255,255,.86);
            background: rgba(6,43,35,.72);
            border: 1px solid rgba(243,199,91,.42);
            border-radius: 999px;
            font-size: 13px;
            font-weight: 800;
        }

        .hero-logo-watermark {
            position: absolute;
            z-index: 1;
            top: 36px;
            right: 42px;
            width: 118px;
            height: 118px;
            object-fit: contain;
            padding: 10px;
            border-radius: 24px;
            background: rgba(255, 249, 237, .72);
            border: 1px solid rgba(216,169,65,.34);
            box-shadow: 0 18px 44px rgba(6,43,35,.18);
        }

        .student-row {
            position: absolute;
            z-index: 2;
            left: 48px;
            right: 48px;
            bottom: 70px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }

        .student {
            height: 112px;
            border-radius: 999px 999px 16px 16px;
            background: linear-gradient(180deg, #f8f1df 0 46%, #143d34 46% 100%);
            border: 3px solid rgba(255,255,255,.55);
        }

        section {
            position: relative;
            padding: 74px 0;
        }

        .section-title {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 24px;
            margin-bottom: 30px;
        }

        h2 {
            color: var(--green-900);
            font-size: clamp(30px, 3vw, 46px);
            line-height: 1;
            text-transform: uppercase;
        }

        h2 span {
            display: block;
            margin-top: 8px;
            color: var(--gold-500);
            font-family: Inter, ui-sans-serif, system-ui, sans-serif;
            font-size: 15px;
            letter-spacing: .08em;
        }

        .pillars {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 18px;
            padding-top: 28px;
        }

        .pillar {
            text-align: center;
            padding: 14px 16px 22px;
            border-right: 1px solid var(--line);
        }

        .pillar:last-child {
            border-right: 0;
        }

        .icon {
            display: grid;
            width: 58px;
            height: 58px;
            place-items: center;
            margin: 0 auto 16px;
            color: var(--gold-500);
            background: rgba(13,81,66,.06);
            border: 1px solid rgba(216,169,65,.34);
            border-radius: 18px;
            font-size: 27px;
        }

        .pillar h3,
        .program-card h3,
        .campus h3 {
            margin: 0;
            color: var(--green-900);
            font-size: 20px;
            line-height: 1.08;
        }

        .pillar p,
        .program-card p,
        .campus p,
        .cta p,
        .footer p,
        .footer li {
            color: var(--muted);
            line-height: 1.65;
            font-size: 14px;
        }

        .programmes {
            background: var(--green-950);
            border-radius: 18px;
            padding: 38px;
            color: white;
            box-shadow: 0 22px 54px rgba(6, 43, 35, .22);
        }

        .programmes h2 {
            color: white;
            text-align: center;
            margin-bottom: 32px;
        }

        .program-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .program-card {
            min-height: 240px;
            padding: 22px;
            border: 1px solid rgba(243,199,91,.24);
            border-radius: 14px;
            background:
                linear-gradient(145deg, rgba(255,255,255,.9), rgba(255,249,237,.8)),
                linear-gradient(135deg, transparent 0 54%, rgba(216,169,65,.22) 54% 100%);
        }

        .program-card .photo {
            height: 98px;
            margin: -4px -4px 18px;
            border-radius: 10px;
            background:
                radial-gradient(circle at 22% 38%, #f8f1df 0 16%, transparent 17%),
                linear-gradient(135deg, rgba(13,81,66,.9), rgba(216,169,65,.34)),
                linear-gradient(90deg, #ecd9ae, #0d5142);
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            padding: 34px 0 0;
        }

        .stat {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 18px;
            border-top: 1px solid var(--line);
        }

        .stat strong {
            display: block;
            color: var(--green-900);
            font-family: Georgia, serif;
            font-size: 42px;
            line-height: 1;
        }

        .campus {
            display: grid;
            grid-template-columns: .75fr 1.25fr;
            gap: 32px;
            align-items: center;
        }

        .campus-gallery {
            display: grid;
            grid-template-columns: 1.25fr .75fr;
            gap: 12px;
        }

        .gallery-main,
        .gallery-small {
            min-height: 340px;
            border-radius: 18px;
            background: linear-gradient(135deg, #f2dfb6, #fff6df 42%, #0d5142 42%, #144e40);
            border: 1px solid rgba(216,169,65,.22);
            position: relative;
            overflow: hidden;
        }

        .gallery-main::after,
        .gallery-small::after {
            content: "Foto menyusul";
            position: absolute;
            right: 18px;
            bottom: 18px;
            color: white;
            background: rgba(6,43,35,.72);
            border-radius: 999px;
            padding: 8px 12px;
            font-size: 12px;
            font-weight: 800;
        }

        .gallery-stack {
            display: grid;
            gap: 12px;
        }

        .gallery-small {
            min-height: 164px;
        }

        .values {
            color: white;
            background:
                linear-gradient(90deg, rgba(6,43,35,.96), rgba(6,43,35,.78)),
                linear-gradient(135deg, #083c31, #d8a941);
            padding: 58px 0;
        }

        .values h2 {
            color: white;
        }

        .value-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 16px;
            margin-top: 28px;
        }

        .value {
            text-align: center;
            color: rgba(255,255,255,.72);
        }

        .value strong {
            display: block;
            margin-top: 12px;
            color: white;
        }

        .cta {
            display: grid;
            grid-template-columns: 1fr .8fr;
            gap: 32px;
            align-items: center;
            background:
                linear-gradient(90deg, var(--cream-50), rgba(255,249,237,.74)),
                radial-gradient(circle at 86% 44%, rgba(216,169,65,.36), transparent 26%);
        }

        .quote {
            padding: 30px;
            border-left: 4px solid var(--gold-500);
            background: rgba(255,255,255,.52);
            border-radius: 12px;
            color: var(--green-900);
            font-family: Georgia, serif;
            font-size: 22px;
            line-height: 1.5;
        }

        .contact-band {
            display: grid;
            grid-template-columns: .9fr 1.1fr;
            gap: 28px;
            align-items: stretch;
        }

        .contact-card {
            padding: 32px;
            color: white;
            background: var(--green-950);
            border-radius: 18px;
            box-shadow: 0 22px 54px rgba(6, 43, 35, .18);
        }

        .contact-card h2 {
            color: white;
        }

        .contact-list {
            display: grid;
            gap: 14px;
            margin: 24px 0;
        }

        .contact-list a,
        .contact-list span {
            display: block;
            padding: 14px 16px;
            color: rgba(255,255,255,.86);
            border: 1px solid rgba(243,199,91,.22);
            border-radius: 10px;
            background: rgba(255,255,255,.04);
        }

        .map-frame {
            min-height: 420px;
            overflow: hidden;
            border: 1px solid rgba(216,169,65,.26);
            border-radius: 18px;
            background: var(--cream-100);
        }

        .map-frame iframe {
            width: 100%;
            height: 100%;
            min-height: 420px;
            border: 0;
        }

        .floating-wa {
            position: fixed;
            z-index: 20;
            right: 22px;
            bottom: 22px;
            color: #10352d;
            background: linear-gradient(180deg, var(--gold-400), var(--gold-500));
            box-shadow: 0 18px 44px rgba(6,43,35,.22);
        }

        .footer {
            color: rgba(255,255,255,.75);
            background: var(--green-950);
            padding: 46px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.1fr .8fr .8fr 1fr;
            gap: 34px;
        }

        .footer h4 {
            margin: 0 0 14px;
            color: white;
        }

        .footer ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .copyright {
            margin-top: 34px;
            padding-top: 22px;
            border-top: 1px solid rgba(255,255,255,.1);
            color: rgba(255,255,255,.54);
            font-size: 13px;
        }

        @media (max-width: 980px) {
            .nav-links {
                display: none;
            }

            .hero-grid,
            .campus,
            .cta,
            .contact-band,
            .footer-grid {
                grid-template-columns: 1fr;
            }

            .hero-media {
                min-height: 420px;
                border-radius: 28px;
            }

            .hero-logo-watermark {
                width: 92px;
                height: 92px;
                top: 24px;
                right: 24px;
            }

            .pillars,
            .program-grid,
            .stats,
            .value-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .pillar {
                border-right: 0;
                border-bottom: 1px solid var(--line);
            }
        }

        @media (max-width: 620px) {
            .container {
                width: min(100% - 28px, 1180px);
            }

            .hero {
                min-height: auto;
            }

            .hero-grid {
                padding-top: 18px;
            }

            .hero-actions,
            .button {
                width: 100%;
            }

            .pillars,
            .program-grid,
            .stats,
            .value-grid,
            .campus-gallery {
                grid-template-columns: 1fr;
            }

            .programmes {
                padding: 24px;
            }

            .student-row {
                left: 24px;
                right: 24px;
            }
        }
    </style>
</head>
<body>
<div class="page">
    <header class="hero">
        <nav class="container nav" aria-label="Navigasi utama">
            <a class="brand" href="#">
                <span class="brand-emblem"><img src="{{ asset('images/darul-furqon-logo-128.png') }}" alt="Logo Maahad Tahfidz Darul Furqon"></span>
                <span>Maahad Tahfidz<small>Darul Furqon</small></span>
            </a>
            <div class="nav-links">
                <a href="#">Utama <span>Home</span></a>
                <a href="#tentang">Tentang Kami <span>About Us</span></a>
                <a href="#program">Program <span>Programmes</span></a>
                <a href="#kampus">Kampus <span>Campus</span></a>
                <a href="#kontak">Hubungi Kami <span>Contact</span></a>
                <a class="button gold" href="https://wa.me/60174333652?text=Assalamualaikum%20Maahad%20Tahfidz%20Darul%20Furqon%2C%20saya%20ingin%20bertanya%20tentang%20pendaftaran." target="_blank" rel="noopener">Mohon Sekarang +</a>
            </div>
        </nav>

        <div class="container hero-grid">
            <div class="hero-copy">
                <span class="eyebrow">Pendidikan Islam Modern | Islamic Modern Education</span>
                <h1>
                    Ilmu, Iman, Adab Menerangi Dunia
                    <span>Knowledge, faith, and character for the future.</span>
                </h1>
                <p>
                    Maahad Tahfidz Darul Furqon membina generasi yang kuat dalam Al-Qur'an, matang dalam ilmu,
                    santun dalam adab, dan siap memberi manfaat bagi umat.
                </p>
                <p>
                    A Qur'an-centered learning environment designed to grow disciplined,
                    knowledgeable, and service-minded future leaders.
                </p>
                <div class="hero-actions">
                    <a class="button gold" href="#tentang">Kenali Kami +</a>
                    <a class="button ghost" href="#program">Lihat Program +</a>
                </div>
            </div>

            <div class="hero-media" aria-label="Placeholder foto kampus dan santri">
                <img class="hero-logo-watermark" src="{{ asset('images/darul-furqon-logo-256.png') }}" alt="Logo Maahad Tahfidz Darul Furqon">
                <div class="student-row" aria-hidden="true">
                    <span class="student"></span>
                    <span class="student"></span>
                    <span class="student"></span>
                    <span class="student"></span>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section id="tentang">
            <div class="container">
                <div class="pillars">
                    <article class="pillar">
                        <div class="icon">◈</div>
                        <h3>Pendidikan Bersepadu</h3>
                        <p>Gabungan ilmu dunia dan ukhrawi secara seimbang.</p>
                    </article>
                    <article class="pillar">
                        <div class="icon">♡</div>
                        <h3>Akhlak & Kepimpinan</h3>
                        <p>Membangun karakter mulia dan kesiapan memimpin.</p>
                    </article>
                    <article class="pillar">
                        <div class="icon">✦</div>
                        <h3>Persekitaran Islami</h3>
                        <p>Lingkungan belajar yang kondusif dan berakar nilai Islam.</p>
                    </article>
                    <article class="pillar">
                        <div class="icon">☷</div>
                        <h3>Komuniti & Kerjasama</h3>
                        <p>Kolaborasi bersama orang tua dan komunitas.</p>
                    </article>
                    <article class="pillar">
                        <div class="icon">♧</div>
                        <h3>Pembangunan Holistik</h3>
                        <p>Menguatkan potensi intelektual, ruhani, emosi, dan fisik.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="program">
            <div class="container programmes">
                <h2>Program Kami <span>Our Programmes</span></h2>
                <div class="program-grid">
                    <article class="program-card">
                        <div class="photo"></div>
                        <h3>Tahfizh Al-Qur'an</h3>
                        <p>Program hafalan intensif dengan pembinaan bacaan, adab, dan muraja'ah.</p>
                    </article>
                    <article class="program-card">
                        <div class="photo"></div>
                        <h3>Akademik Berprestasi</h3>
                        <p>Kurikulum nasional dan diniyah yang disusun untuk prestasi berkelanjutan.</p>
                    </article>
                    <article class="program-card">
                        <div class="photo"></div>
                        <h3>Diri & Ko-Kurikulum</h3>
                        <p>Kegiatan olahraga, kepemimpinan, bahasa, dan keterampilan hidup.</p>
                    </article>
                </div>
                <div style="display:flex;justify-content:center;margin-top:26px">
                    <a class="button ghost" href="#kontak">Lihat Semua Program +</a>
                </div>
            </div>

            <div class="container stats">
                <div class="stat"><div class="icon">☷</div><div><strong>500+</strong><span>Pelajar Aktif</span></div></div>
                <div class="stat"><div class="icon">▣</div><div><strong>40+</strong><span>Guru Berpengalaman</span></div></div>
                <div class="stat"><div class="icon">⌂</div><div><strong>10+</strong><span>Tahun Kecemerlangan</span></div></div>
                <div class="stat"><div class="icon">◎</div><div><strong>Global</strong><span>Komuniti Pembelajaran</span></div></div>
            </div>
        </section>

        <section id="kampus">
            <div class="container campus">
                <div>
                    <h2>Kampus Kami <span>Our Campus</span></h2>
                    <p>
                        Persekitaran yang aman, modern, dan kondusif untuk pembelajaran
                        berteraskan nilai Islam.
                    </p>
                    <p>
                        A safe, modern, and disciplined environment for focused learning,
                        worship, and character development.
                    </p>
                    <a class="button gold" href="https://maps.google.com/?q=2.952421,101.341522" target="_blank" rel="noopener">Terokai Kampus +</a>
                </div>
                <div class="campus-gallery">
                    <div class="gallery-main"></div>
                    <div class="gallery-stack">
                        <div class="gallery-small"></div>
                        <div class="gallery-small"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="values">
            <div class="container">
                <h2>Nilai Teras Kami <span>Our Core Values</span></h2>
                <div class="value-grid">
                    <div class="value"><div class="icon">◈</div><strong>Iman</strong>Faith</div>
                    <div class="value"><div class="icon">▤</div><strong>Ilmu</strong>Knowledge</div>
                    <div class="value"><div class="icon">✦</div><strong>Akhlak</strong>Character</div>
                    <div class="value"><div class="icon">◷</div><strong>Disiplin</strong>Discipline</div>
                    <div class="value"><div class="icon">✺</div><strong>Ikhlas</strong>Sincerity</div>
                    <div class="value"><div class="icon">☉</div><strong>Amanah</strong>Trustworthiness</div>
                </div>
            </div>
        </section>

        <section class="cta">
            <div class="container cta">
                <div>
                    <h2>Sertai Perjalanan Bermakna <span>Join A Meaningful Journey</span></h2>
                    <p>
                        Bersama Maahad Tahfidz Darul Furqon, anak-anak dibina bukan hanya untuk lulus ujian,
                        tetapi untuk membawa cahaya ilmu, iman, dan akhlak ke masyarakat.
                    </p>
                    <a class="button gold" href="https://wa.me/60174333652?text=Assalamualaikum%20Maahad%20Tahfidz%20Darul%20Furqon%2C%20saya%20ingin%20bertanya%20tentang%20pendaftaran." target="_blank" rel="noopener">Mohon Sekarang +</a>
                </div>
                <div class="quote">
                    "Ya Tuhanku, tambahkanlah kepadaku ilmu."
                    <br><small>Surah Taha: 114</small>
                </div>
            </div>
        </section>

        <section id="lokasi">
            <div class="container contact-band">
                <div class="contact-card">
                    <h2>Hubungi Kami <span>Contact & Location</span></h2>
                    <p>Untuk pertanyaan pendaftaran, lawatan kampus, atau maklumat program, hubungi pihak Maahad melalui WhatsApp atau email rasmi.</p>
                    <div class="contact-list">
                        <a href="https://wa.me/60174333652?text=Assalamualaikum%20Maahad%20Tahfidz%20Darul%20Furqon%2C%20saya%20ingin%20bertanya%20tentang%20pendaftaran." target="_blank" rel="noopener">WhatsApp: +60 17-433 3652</a>
                        <a href="mailto:info@darulfurqon.my">Email: info@darulfurqon.my</a>
                        <a href="https://maps.google.com/?q=2.952421,101.341522" target="_blank" rel="noopener">Google Maps: Maahad Tahfidz Darul Furqon</a>
                    </div>
                    <a class="button gold" href="https://wa.me/60174333652?text=Assalamualaikum%20Maahad%20Tahfidz%20Darul%20Furqon%2C%20saya%20ingin%20bertanya%20tentang%20pendaftaran." target="_blank" rel="noopener">Chat WhatsApp +</a>
                </div>
                <div class="map-frame">
                    <iframe
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://maps.google.com/maps?q=2.952421,101.341522&z=15&output=embed"
                        title="Lokasi Maahad Tahfidz Darul Furqon"></iframe>
                </div>
            </div>
        </section>
    </main>

    <footer id="kontak" class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <a class="brand" href="#">
                        <span class="brand-emblem"><img src="{{ asset('images/darul-furqon-logo-128.png') }}" alt="Logo Maahad Tahfidz Darul Furqon"></span>
                        <span>Maahad Tahfidz<small>Darul Furqon</small></span>
                    </a>
                    <p>Membina pendidikan Islam yang melahirkan generasi berilmu, beriman, dan beradab.</p>
                </div>
                <div>
                    <h4>Pautan Pantas</h4>
                    <ul>
                        <li>Utama</li>
                        <li>Tentang Kami</li>
                        <li>Program</li>
                        <li>Kampus</li>
                    </ul>
                </div>
                <div>
                    <h4>Unit Layanan</h4>
                    <ul>
                        <li>Pendaftaran Pelajar</li>
                        <li>Yuran & Pembayaran</li>
                        <li>Berita Sekolah</li>
                        <li>FAQ</li>
                    </ul>
                </div>
                <div>
                    <h4>Hubungi Kami</h4>
                    <p>Maahad Tahfidz Darul Furqon<br>Selangor, Malaysia</p>
                    <p><a href="https://wa.me/60174333652" target="_blank" rel="noopener">+60 17-433 3652</a><br><a href="mailto:info@darulfurqon.my">info@darulfurqon.my</a></p>
                </div>
            </div>
            <div class="copyright">© {{ date('Y') }} Maahad Tahfidz Darul Furqon. Hak cipta terpelihara.</div>
        </div>
    </footer>
    <a class="button floating-wa" href="https://wa.me/60174333652?text=Assalamualaikum%20Maahad%20Tahfidz%20Darul%20Furqon%2C%20saya%20ingin%20bertanya%20tentang%20pendaftaran." target="_blank" rel="noopener">WhatsApp +</a>
</div>
</body>
</html>
