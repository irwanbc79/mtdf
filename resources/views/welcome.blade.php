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
            "sameAs": [
                "mailto:tahfizdarulfurqon@gmail.com"
            ],
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
            --emerald-980: #031f1a;
            --emerald-950: #062b23;
            --emerald-900: #08382f;
            --emerald-800: #0f5142;
            --emerald-700: #17634f;
            --gold-600: #bd8426;
            --gold-500: #d5a23b;
            --gold-400: #f0c45a;
            --cream-50: #fff9ec;
            --cream-100: #f8efd9;
            --cream-200: #ead9af;
            --ink: #14362f;
            --muted: #69756f;
            --line: rgba(14, 73, 59, .16);
            --shadow: 0 24px 70px rgba(3, 31, 26, .2);
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
            background:
                radial-gradient(circle at 4% 18%, rgba(213, 162, 59, .12), transparent 24rem),
                radial-gradient(circle at 94% 52%, rgba(15, 81, 66, .08), transparent 28rem),
                var(--cream-50);
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            z-index: -1;
            pointer-events: none;
            opacity: .045;
            background-image: url("{{ asset('images/islamic-geometric-pattern.svg') }}");
            background-size: 240px 240px;
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

        .serif {
            font-family: Georgia, "Times New Roman", serif;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 48px;
            padding: 0 20px;
            border-radius: 10px;
            border: 1px solid rgba(213, 162, 59, .56);
            font-size: 14px;
            font-weight: 900;
            line-height: 1;
            transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
        }

        .button:hover {
            transform: translateY(-2px);
        }

        .button.gold {
            color: #12352d;
            background: linear-gradient(180deg, #f6cf69 0%, #d9a23b 100%);
            box-shadow: 0 14px 32px rgba(213, 162, 59, .28);
        }

        .button.ghost {
            color: white;
            background: rgba(255,255,255,.045);
            border-color: rgba(255,255,255,.24);
        }

        .button.dark {
            color: white;
            background: var(--emerald-950);
            border-color: rgba(213, 162, 59, .35);
        }

        .ornament {
            position: absolute;
            pointer-events: none;
            opacity: .18;
            background-image:
                radial-gradient(circle, transparent 0 34%, currentColor 35% 36%, transparent 37%),
                linear-gradient(30deg, transparent 44%, currentColor 45% 46%, transparent 47%),
                linear-gradient(150deg, transparent 44%, currentColor 45% 46%, transparent 47%);
            background-size: 86px 86px;
            color: var(--gold-400);
        }

        .islamic-rosette {
            position: absolute;
            width: 270px;
            aspect-ratio: 1;
            pointer-events: none;
            opacity: .24;
            background: url("{{ asset('images/islamic-geometric-pattern.svg') }}") center / contain no-repeat;
            filter: drop-shadow(0 0 18px rgba(213,162,59,.12));
        }

        .islamic-rosette::after {
            content: "";
            position: absolute;
            inset: 23%;
            border: 1px solid rgba(240,196,90,.68);
            transform: rotate(22.5deg);
        }

        .islamic-divider {
            height: 34px;
            margin: 0;
            opacity: .72;
            background:
                linear-gradient(135deg, transparent 19px, var(--gold-500) 20px 21px, transparent 22px) 0 0 / 40px 40px,
                linear-gradient(225deg, transparent 19px, var(--gold-500) 20px 21px, transparent 22px) 0 0 / 40px 40px;
        }

        .arch-frame {
            position: absolute;
            pointer-events: none;
            border: 2px solid rgba(213,162,59,.5);
            border-bottom: 0;
            border-radius: 999px 999px 0 0;
        }

        .section-head {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 28px;
            margin-bottom: 32px;
        }

        .section-kicker {
            color: var(--gold-600);
            font-size: 13px;
            font-weight: 900;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        h1,
        h2,
        h3 {
            margin: 0;
        }

        h2 {
            color: var(--emerald-950);
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(32px, 3.3vw, 48px);
            line-height: .98;
            letter-spacing: .01em;
            text-transform: uppercase;
        }

        h2 span {
            display: block;
            margin-top: 8px;
            color: var(--gold-600);
            font-family: Inter, ui-sans-serif, system-ui, sans-serif;
            font-size: 14px;
            letter-spacing: .12em;
        }

        p {
            color: var(--muted);
            line-height: 1.7;
        }

        .hero {
            position: relative;
            min-height: 760px;
            color: white;
            background:
                linear-gradient(96deg, rgba(3,31,26,.98) 0%, rgba(6,43,35,.94) 36%, rgba(6,43,35,.58) 60%, rgba(213,162,59,.18) 100%),
                radial-gradient(circle at 85% 22%, rgba(240,196,90,.46), transparent 23rem),
                linear-gradient(135deg, var(--emerald-980), var(--emerald-800));
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(90deg, rgba(3,31,26,.78) 0 48%, transparent 70%),
                repeating-linear-gradient(45deg, rgba(255,255,255,.025) 0 1px, transparent 1px 18px);
        }

        .hero::after {
            content: "";
            position: absolute;
            left: -10%;
            right: -10%;
            bottom: -90px;
            height: 190px;
            background: var(--cream-50);
            border-top: 9px solid var(--gold-500);
            border-radius: 0 0 50% 50%;
            transform: rotate(-2.5deg);
            transform-origin: left top;
        }

        .hero .ornament.left {
            left: -58px;
            top: 120px;
            width: 260px;
            height: 340px;
        }

        .hero > .islamic-rosette {
            left: -105px;
            top: 128px;
            width: 320px;
            opacity: .31;
        }

        .hero-pattern-right {
            position: absolute;
            inset: 0 0 0 auto;
            width: 46%;
            opacity: .1;
            background-image: url("{{ asset('images/islamic-geometric-pattern.svg') }}");
            background-size: 210px 210px;
            mask-image: linear-gradient(90deg, transparent, black 50%);
        }

        .nav {
            position: relative;
            z-index: 4;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 24px 0;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
            font-weight: 900;
            letter-spacing: .02em;
        }

        .brand-emblem {
            display: grid;
            width: 70px;
            height: 70px;
            place-items: center;
            padding: 5px;
            border: 1px solid rgba(240, 196, 90, .46);
            border-radius: 18px;
            background: rgba(255,255,255,.08);
            box-shadow: 0 14px 32px rgba(0,0,0,.16);
        }

        .brand-emblem.arabic-lockup {
            width: 92px;
            height: 92px;
            margin: -10px -5px -10px 0;
            padding: 0;
            border: 0;
            border-radius: 0;
            background: url("{{ asset('images/darul-furqon-logo.png') }}") center 61% / 68% auto no-repeat;
            box-shadow: none;
        }

        .brand-emblem img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            filter: drop-shadow(0 5px 10px rgba(0,0,0,.22));
        }

        .brand small,
        .nav a span,
        .eyebrow {
            display: block;
            color: rgba(255,255,255,.68);
            font-size: 12px;
            font-weight: 700;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 26px;
            font-size: 14px;
            font-weight: 800;
        }

        .nav-links a {
            line-height: 1.15;
        }

        .hero-grid {
            position: relative;
            z-index: 3;
            display: grid;
            grid-template-columns: minmax(0, .88fr) minmax(500px, 1.12fr);
            gap: 44px;
            align-items: center;
            padding: 54px 0 140px;
        }

        .hero-copy {
            max-width: 630px;
        }

        .hero h1 {
            max-width: 640px;
            margin-top: 18px;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(48px, 5.4vw, 80px);
            line-height: .93;
            text-transform: uppercase;
            letter-spacing: .01em;
            text-wrap: balance;
        }

        .hero h1 span {
            display: block;
            margin-top: 18px;
            color: var(--gold-400);
            font-family: Inter, ui-sans-serif, system-ui, sans-serif;
            font-size: .42em;
            line-height: 1.16;
            letter-spacing: .02em;
        }

        .hero p {
            max-width: 560px;
            margin: 20px 0 0;
            color: rgba(255,255,255,.82);
            font-size: 16px;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 34px;
        }

        .hero-media {
            position: relative;
            min-height: 545px;
            overflow: hidden;
            border-radius: 34px 0 0 34px;
            border: 1px solid rgba(240,196,90,.22);
            background:
                linear-gradient(180deg, rgba(255,255,255,.18), rgba(255,255,255,0)),
                radial-gradient(circle at 78% 20%, rgba(240,196,90,.48), transparent 16rem),
                linear-gradient(135deg, #efe0b8 0 43%, #276f5a 43% 100%);
            box-shadow: 0 30px 90px rgba(0,0,0,.28);
        }

        .hero-media::before {
            content: "";
            position: absolute;
            inset: 18px;
            z-index: 1;
            border: 1px solid rgba(255,255,255,.42);
            border-radius: 24px 0 0 24px;
            box-shadow: inset 0 0 0 5px rgba(213,162,59,.12);
            pointer-events: none;
        }

        .hero-media .arch-frame {
            z-index: 2;
            inset: 74px 84px 92px 84px;
            border-width: 3px;
            border-color: rgba(240,196,90,.48);
        }

        .hero-media .masjid {
            position: absolute;
            inset: 54px 40px 120px 64px;
            border: 18px solid rgba(255,255,255,.55);
            border-bottom-width: 46px;
            border-radius: 140px 140px 12px 12px;
            box-shadow: inset 0 0 0 7px rgba(8,56,47,.18);
        }

        .hero-media .masjid::before {
            content: "";
            position: absolute;
            right: -78px;
            bottom: -46px;
            width: 52px;
            height: 250px;
            border-radius: 26px 26px 0 0;
            border: 10px solid rgba(255,255,255,.5);
            background: rgba(255,249,236,.46);
        }

        .hero-media .masjid::after {
            content: "";
            position: absolute;
            right: -71px;
            top: -92px;
            width: 38px;
            height: 86px;
            border-radius: 40px 40px 8px 8px;
            background: rgba(255,249,236,.76);
            box-shadow: 0 -22px 0 -10px var(--gold-500);
        }

        .hero-logo-watermark {
            position: absolute;
            z-index: 2;
            top: 36px;
            right: 42px;
            width: 150px;
            height: 150px;
            object-fit: contain;
            padding: 4px;
            border-radius: 28px;
            border: 1px solid rgba(213,162,59,.42);
            background:
                url("{{ asset('images/darul-furqon-logo.png') }}") center 62% / 68% auto no-repeat,
                rgba(255,249,236,.76);
            box-shadow: 0 18px 44px rgba(3,31,26,.2);
        }

        .student-row {
            position: absolute;
            z-index: 3;
            left: 54px;
            right: 54px;
            bottom: 66px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }

        .student {
            height: 116px;
            border: 3px solid rgba(255,255,255,.6);
            border-radius: 999px 999px 16px 16px;
            background:
                radial-gradient(circle at 50% 26%, #efe4c9 0 19%, transparent 20%),
                linear-gradient(180deg, #fff7e5 0 45%, #143b32 45% 100%);
        }

        .hero-label {
            position: absolute;
            right: 34px;
            bottom: 26px;
            z-index: 4;
            padding: 12px 16px;
            color: rgba(255,255,255,.9);
            background: rgba(3,31,26,.72);
            border: 1px solid rgba(240,196,90,.42);
            border-radius: 999px;
            font-size: 13px;
            font-weight: 900;
        }

        section {
            position: relative;
            padding: 78px 0;
        }

        .pillars-section {
            padding-top: 112px;
        }

        .pillars-section::before,
        .pillars-section::after {
            content: "";
            position: absolute;
            top: 88px;
            width: 210px;
            height: 310px;
            opacity: .1;
            background: url("{{ asset('images/islamic-geometric-pattern.svg') }}") center / 210px repeat-y;
        }

        .pillars-section::before { left: -70px; }
        .pillars-section::after { right: -70px; }

        .pillars-section .ornament {
            right: -80px;
            top: 30px;
            width: 300px;
            height: 300px;
            color: var(--gold-500);
            opacity: .1;
        }

        .pillars {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 0;
            border-block: 1px solid var(--line);
        }

        .pillar {
            min-height: 236px;
            padding: 28px 20px;
            text-align: center;
            border-right: 1px solid var(--line);
        }

        .pillar:last-child {
            border-right: 0;
        }

        .icon {
            display: grid;
            width: 62px;
            height: 62px;
            place-items: center;
            margin: 0 auto 16px;
            color: var(--emerald-950);
            background:
                radial-gradient(circle, rgba(240,196,90,.18), transparent 70%),
                rgba(15,81,66,.06);
            border: 1px solid rgba(213,162,59,.34);
            border-radius: 18px;
            font-size: 28px;
            font-weight: 900;
        }

        .pillar h3,
        .program-card h3 {
            color: var(--emerald-950);
            font-size: 20px;
            line-height: 1.08;
        }

        .pillar p,
        .program-card p,
        .campus p,
        .contact-card p,
        .footer p,
        .footer li {
            color: var(--muted);
            font-size: 14px;
            line-height: 1.66;
        }

        .programmes {
            overflow: hidden;
            color: white;
            background:
                linear-gradient(135deg, rgba(3,31,26,.96), rgba(8,56,47,.98)),
                var(--emerald-950);
            border: 1px solid rgba(240,196,90,.2);
            border-radius: 18px;
            padding: 42px;
            box-shadow: var(--shadow);
        }

        .programmes::before {
            content: "";
            position: absolute;
            inset: 0;
            opacity: .08;
            background-image: url("{{ asset('images/islamic-geometric-pattern.svg') }}");
            background-size: 220px 220px;
        }

        .programmes::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: 76px;
            height: 28px;
            opacity: .24;
            background:
                linear-gradient(135deg, transparent 19px, var(--gold-400) 20px 21px, transparent 22px) 0 0 / 40px 40px,
                linear-gradient(225deg, transparent 19px, var(--gold-400) 20px 21px, transparent 22px) 0 0 / 40px 40px;
        }

        .programmes h2 {
            position: relative;
            color: white;
            text-align: center;
            margin-bottom: 34px;
        }

        .program-grid {
            position: relative;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .program-card {
            position: relative;
            min-height: 260px;
            padding: 20px;
            overflow: hidden;
            border: 1px solid rgba(240,196,90,.28);
            border-radius: 14px;
            background: linear-gradient(145deg, rgba(255,249,236,.96), rgba(248,239,217,.9));
        }

        .program-card::before {
            content: "";
            position: absolute;
            top: 16px;
            left: 16px;
            width: 50px;
            height: 50px;
            border: 2px solid var(--gold-500);
            border-radius: 50%;
            transform: rotate(22.5deg);
            opacity: .55;
            background: url("{{ asset('images/islamic-geometric-pattern.svg') }}") center / 86px 86px;
        }

        .program-card .photo {
            height: 118px;
            margin: -2px -2px 18px;
            border-radius: 10px;
            background:
                radial-gradient(circle at 22% 48%, #fff7e5 0 14%, transparent 15%),
                linear-gradient(135deg, rgba(20,59,50,.92), rgba(213,162,59,.28)),
                linear-gradient(90deg, #efe0b8, #17634f);
        }

        .program-card:nth-child(2) .photo {
            background:
                radial-gradient(circle at 72% 42%, #fff7e5 0 15%, transparent 16%),
                linear-gradient(135deg, rgba(213,162,59,.2), rgba(23,99,79,.84)),
                #efe0b8;
        }

        .program-card:nth-child(3) .photo {
            background:
                radial-gradient(circle at 74% 52%, #fff7e5 0 13%, transparent 14%),
                radial-gradient(circle at 58% 42%, #fff7e5 0 10%, transparent 11%),
                linear-gradient(135deg, rgba(213,162,59,.36), rgba(20,59,50,.88)),
                #efe0b8;
        }

        .program-card p {
            margin-bottom: 0;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding-top: 38px;
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
            color: var(--emerald-950);
            font-family: Georgia, "Times New Roman", serif;
            font-size: 42px;
            line-height: 1;
        }

        .campus {
            display: grid;
            grid-template-columns: .72fr 1.28fr;
            gap: 34px;
            align-items: center;
        }

        .campus-copy {
            position: relative;
            padding: 30px 0 30px 28px;
        }

        .campus-copy::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 120px;
            height: 100%;
            border-left: 4px solid var(--gold-500);
            border-top: 4px solid var(--gold-500);
            border-radius: 70px 0 0 0;
            opacity: .58;
        }

        .campus-gallery {
            position: relative;
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            gap: 12px;
        }

        .campus-gallery::before {
            content: "";
            position: absolute;
            z-index: 4;
            inset: -16px -16px auto auto;
            width: 105px;
            height: 105px;
            background: url("{{ asset('images/islamic-geometric-pattern.svg') }}") center / contain no-repeat;
            opacity: .55;
            pointer-events: none;
        }

        .gallery-main,
        .gallery-small {
            position: relative;
            overflow: hidden;
            min-height: 348px;
            border: 1px solid rgba(213,162,59,.28);
            border-radius: 18px;
            background:
                linear-gradient(135deg, #ead8ab 0 38%, #fff8e8 38% 46%, #17634f 46% 100%);
        }

        .gallery-small {
            min-height: 168px;
        }

        .gallery-stack {
            display: grid;
            gap: 12px;
        }

        .gallery-main::before,
        .gallery-small::before {
            content: "";
            position: absolute;
            inset: 42px 12% 24px;
            border: 10px solid rgba(255,255,255,.5);
            border-bottom-width: 24px;
            border-radius: 80px 80px 8px 8px;
        }

        .gallery-main::after,
        .gallery-small::after {
            content: "Foto menyusul";
            position: absolute;
            right: 18px;
            bottom: 18px;
            padding: 8px 12px;
            color: white;
            background: rgba(3,31,26,.74);
            border-radius: 999px;
            font-size: 12px;
            font-weight: 900;
        }

        .values {
            color: white;
            background:
                linear-gradient(90deg, rgba(3,31,26,.98), rgba(8,56,47,.9)),
                linear-gradient(135deg, var(--emerald-950), var(--gold-500));
            padding: 62px 0;
        }

        .values::after {
            content: "";
            position: absolute;
            inset: auto 0 0;
            height: 190px;
            background: url("{{ asset('images/islamic-mosque-silhouette.svg') }}") center bottom / cover no-repeat;
            pointer-events: none;
        }

        .values .ornament {
            inset: 0 auto 0 -90px;
            width: 360px;
            height: 100%;
            color: var(--gold-400);
            opacity: .13;
        }

        .values h2 {
            color: white;
        }

        .value-grid {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 16px;
            margin-top: 30px;
        }

        .value {
            text-align: center;
            color: rgba(255,255,255,.7);
        }

        .value strong {
            display: block;
            margin-top: 10px;
            color: white;
            font-size: 15px;
        }

        .cta-wrap {
            overflow: hidden;
            background:
                linear-gradient(90deg, rgba(255,249,236,.96), rgba(255,249,236,.72)),
                radial-gradient(circle at 84% 48%, rgba(213,162,59,.34), transparent 18rem);
        }

        .cta-wrap::before {
            content: "";
            position: absolute;
            right: -95px;
            top: -105px;
            width: 380px;
            height: 380px;
            opacity: .17;
            background: url("{{ asset('images/islamic-geometric-pattern.svg') }}") center / contain no-repeat;
        }

        .cta-wrap::after {
            content: "";
            position: absolute;
            inset: auto 0 0;
            height: 150px;
            opacity: .5;
            background: url("{{ asset('images/islamic-mosque-silhouette.svg') }}") center bottom / cover no-repeat;
        }

        .cta {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: 1fr .78fr;
            gap: 34px;
            align-items: center;
        }

        .quote {
            position: relative;
            padding: 34px;
            color: var(--emerald-950);
            border-left: 4px solid var(--gold-500);
            border-radius: 12px;
            background: rgba(255,255,255,.58);
            font-family: Georgia, "Times New Roman", serif;
            font-size: 24px;
            line-height: 1.5;
        }

        .quote::after {
            content: "";
            position: absolute;
            right: 24px;
            bottom: 18px;
            width: 90px;
            height: 56px;
            opacity: .28;
            background:
                linear-gradient(20deg, transparent 44%, var(--emerald-950) 45% 53%, transparent 54%),
                linear-gradient(-20deg, transparent 44%, var(--emerald-950) 45% 53%, transparent 54%);
        }

        .contact-band {
            display: grid;
            grid-template-columns: .9fr 1.1fr;
            gap: 28px;
            align-items: stretch;
        }

        .contact-card {
            position: relative;
            overflow: hidden;
            padding: 34px;
            color: white;
            background:
                linear-gradient(135deg, rgba(3,31,26,.98), rgba(8,56,47,.98)),
                var(--emerald-950);
            border: 1px solid rgba(240,196,90,.2);
            border-radius: 18px;
            box-shadow: var(--shadow);
        }

        .contact-card::after {
            content: "";
            position: absolute;
            right: -95px;
            bottom: -95px;
            width: 250px;
            height: 250px;
            opacity: .1;
            background: url("{{ asset('images/islamic-geometric-pattern.svg') }}") center / contain no-repeat;
            pointer-events: none;
        }

        .contact-card h2 {
            color: white;
        }

        .contact-card p {
            color: rgba(255,255,255,.72);
        }

        .contact-list {
            display: grid;
            gap: 14px;
            margin: 24px 0;
        }

        .contact-list a {
            display: block;
            padding: 14px 16px;
            color: rgba(255,255,255,.9);
            border: 1px solid rgba(240,196,90,.23);
            border-radius: 10px;
            background: rgba(255,255,255,.045);
        }

        .map-frame {
            min-height: 430px;
            overflow: hidden;
            border: 1px solid rgba(213,162,59,.28);
            border-radius: 18px;
            background: var(--cream-100);
            box-shadow: 0 16px 44px rgba(3,31,26,.08);
        }

        .map-frame iframe {
            width: 100%;
            height: 100%;
            min-height: 430px;
            border: 0;
        }

        .footer {
            color: rgba(255,255,255,.75);
            background:
                linear-gradient(180deg, var(--emerald-950), var(--emerald-980));
            padding: 48px 0 30px;
        }

        .footer::before {
            content: "";
            position: absolute;
            inset: 0;
            opacity: .055;
            background-image: url("{{ asset('images/islamic-geometric-pattern.svg') }}");
            background-size: 220px 220px;
            pointer-events: none;
        }

        .footer .container {
            position: relative;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.12fr .75fr .85fr 1fr;
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

        .footer p,
        .footer li {
            color: rgba(255,255,255,.66);
        }

        .copyright {
            margin-top: 34px;
            padding-top: 22px;
            border-top: 1px solid rgba(255,255,255,.1);
            color: rgba(255,255,255,.54);
            font-size: 13px;
        }

        .floating-wa {
            position: fixed;
            right: 22px;
            bottom: 22px;
            z-index: 30;
            color: #10352d;
            background: linear-gradient(180deg, var(--gold-400), var(--gold-500));
            box-shadow: 0 18px 44px rgba(6,43,35,.22);
        }

        @media (max-width: 1020px) {
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
                min-height: 430px;
                border-radius: 28px;
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

        @media (max-width: 640px) {
            .container {
                width: min(100% - 28px, 1180px);
            }

            .brand-emblem {
                width: 58px;
                height: 58px;
            }

            .brand-emblem.arabic-lockup {
                width: 78px;
                height: 78px;
                margin: -7px -5px -7px 0;
            }

            .hero {
                min-height: auto;
            }

            .hero-grid {
                padding-top: 20px;
            }

            .hero h1 {
                max-width: 100%;
                font-size: clamp(40px, 12.2vw, 48px);
                line-height: .96;
                overflow-wrap: anywhere;
            }

            .hero-actions,
            .hero-actions .button {
                width: 100%;
            }

            .floating-wa {
                left: auto;
                right: 14px;
                width: auto;
            }

            .pillars,
            .program-grid,
            .stats,
            .value-grid,
            .campus-gallery {
                grid-template-columns: 1fr;
            }

            .programmes {
                padding: 26px;
            }

            .student-row {
                left: 24px;
                right: 24px;
                grid-template-columns: repeat(4, minmax(46px, 1fr));
            }

            .hero-logo-watermark {
                width: 118px;
                height: 118px;
                top: 24px;
                right: 24px;
            }

            .hero > .islamic-rosette {
                left: -150px;
                top: 180px;
                opacity: .2;
            }

            .hero-pattern-right {
                width: 70%;
                opacity: .055;
            }

            .hero-media .arch-frame {
                inset: 86px 38px 92px;
            }

            .pillars-section::before,
            .pillars-section::after {
                opacity: .055;
            }
        }
    </style>
</head>
<body>
<div class="page">
    <header class="hero">
        <div class="ornament left"></div>
        <div class="islamic-rosette" aria-hidden="true"></div>
        <div class="hero-pattern-right" aria-hidden="true"></div>
        <nav class="container nav" aria-label="Navigasi utama">
            <a class="brand" href="#">
                <span class="brand-emblem arabic-lockup"><img src="{{ asset('images/darul-furqon-logo-arabic.svg') }}" alt="Logo Maahad Tahfidz Darul Furqon dengan tulisan Arab"></span>
                <span>Maahad Tahfidz<small>Darul Furqon</small></span>
            </a>
            <div class="nav-links">
                <a href="#">Utama <span>Home</span></a>
                <a href="#tentang">Tentang Kami <span>About Us</span></a>
                <a href="#program">Program <span>Programmes</span></a>
                <a href="#kampus">Kampus <span>Campus</span></a>
                <a href="#lokasi">Hubungi Kami <span>Contact</span></a>
                <a class="button gold" href="https://wa.me/60174333652?text=Assalamualaikum%20Maahad%20Tahfidz%20Darul%20Furqon%2C%20saya%20ingin%20bertanya%20tentang%20pendaftaran." target="_blank" rel="noopener">Mohon Sekarang +</a>
            </div>
        </nav>

        <div class="container hero-grid">
            <div class="hero-copy">
                <span class="eyebrow">Pendidikan Islam Modern | Islamic Modern Education</span>
                <h1>
                    Ilmu, Iman, Amal Menerangi Dunia
                    <span>Knowledge, faith, action enlighten the world.</span>
                </h1>
                <p>
                    Maahad Tahfidz Darul Furqon membina generasi yang kuat dalam Al-Qur'an,
                    matang dalam ilmu, santun dalam adab, dan siap memberi manfaat bagi umat.
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

            <div class="hero-media" aria-label="Ilustrasi kampus dan santri Maahad Tahfidz Darul Furqon">
                <div class="arch-frame" aria-hidden="true"></div>
                <div class="masjid"></div>
                <img class="hero-logo-watermark" src="{{ asset('images/darul-furqon-logo-arabic.svg') }}" alt="Logo Maahad Tahfidz Darul Furqon dengan tulisan Arab">
                <div class="student-row" aria-hidden="true">
                    <span class="student"></span>
                    <span class="student"></span>
                    <span class="student"></span>
                    <span class="student"></span>
                </div>
                <span class="hero-label">Foto kampus dan santri menyusul</span>
            </div>
        </div>
    </header>

    <div class="islamic-divider" aria-hidden="true"></div>

    <main>
        <section id="tentang" class="pillars-section">
            <div class="ornament"></div>
            <div class="container">
                <div class="pillars">
                    <article class="pillar">
                        <div class="icon">▤</div>
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
                        <p>Kolaborasi bersama orang tua dan komuniti.</p>
                    </article>
                    <article class="pillar">
                        <div class="icon">♧</div>
                        <h3>Pembangunan Holistik</h3>
                        <p>Menguatkan potensi intelektual, ruhani, emosi, dan fizikal.</p>
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
                        <p>Kurikulum kebangsaan dan diniyah yang disusun untuk prestasi berkelanjutan.</p>
                    </article>
                    <article class="program-card">
                        <div class="photo"></div>
                        <h3>Diri & Ko-Kurikulum</h3>
                        <p>Aktiviti olahraga, kepemimpinan, bahasa, dan keterampilan hidup.</p>
                    </article>
                </div>
                <div style="display:flex;justify-content:center;margin-top:28px">
                    <a class="button ghost" href="#lokasi">Lihat Semua Program +</a>
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
                <div class="campus-copy">
                    <div class="section-kicker">Our Campus</div>
                    <h2>Kampus Kami <span>Our Campus</span></h2>
                    <p>
                        Persekitaran yang aman, moden, dan kondusif untuk pembelajaran
                        berteraskan nilai Islam.
                    </p>
                    <p>
                        A safe, modern, and disciplined environment for focused learning,
                        worship, and character development.
                    </p>
                    <a class="button dark" href="https://maps.google.com/?q=2.952421,101.341522" target="_blank" rel="noopener">Terokai Kampus +</a>
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
            <div class="ornament"></div>
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

        <section class="cta-wrap">
            <div class="container cta">
                <div>
                    <div class="section-kicker">Join A Meaningful Journey</div>
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
                        <a href="mailto:info@darulfurqon.my">Email rasmi: info@darulfurqon.my</a>
                        <a href="mailto:tahfizdarulfurqon@gmail.com">Email alternatif: tahfizdarulfurqon@gmail.com</a>
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
                        <span class="brand-emblem arabic-lockup"><img src="{{ asset('images/darul-furqon-logo-arabic.svg') }}" alt="Logo Maahad Tahfidz Darul Furqon dengan tulisan Arab"></span>
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
                    <p><a href="https://wa.me/60174333652" target="_blank" rel="noopener">+60 17-433 3652</a><br><a href="mailto:info@darulfurqon.my">info@darulfurqon.my</a><br><a href="mailto:tahfizdarulfurqon@gmail.com">tahfizdarulfurqon@gmail.com</a></p>
                </div>
            </div>
            <div class="copyright">© {{ date('Y') }} Maahad Tahfidz Darul Furqon. Hak cipta terpelihara.</div>
        </div>
    </footer>
    <a class="button floating-wa" href="https://wa.me/60174333652?text=Assalamualaikum%20Maahad%20Tahfidz%20Darul%20Furqon%2C%20saya%20ingin%20bertanya%20tentang%20pendaftaran." target="_blank" rel="noopener">WhatsApp +</a>
</div>
</body>
</html>
