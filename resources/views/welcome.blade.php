@php
    $waNumber = '60174333652';
    $waText = rawurlencode("Assalamualaikum Maahad Tahfidz Darul Furqon, saya ingin bertanya tentang pendaftaran.");
    $wa = "https://wa.me/{$waNumber}?text={$waText}";
    $waPlain = "https://wa.me/{$waNumber}";
@endphp
<!DOCTYPE html>
<html lang="ms">
<head>
    <script>document.documentElement.classList.add('js');</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#062b23">
    <meta name="description" content="Maahad Tahfidz Darul Furqon adalah madrasah tahfizh moden yang memadukan Al-Qur'an, ilmu, adab, dan pembinaan karakter di Selangor, Malaysia.">
    <link rel="canonical" href="https://darulfurqon.my">
    <link rel="preconnect" href="https://maps.google.com">
    <link rel="preconnect" href="https://maps.gstatic.com" crossorigin>
    <meta property="og:title" content="Maahad Tahfidz Darul Furqon">
    <meta property="og:description" content="Pendidikan tahfizh moden berteraskan ilmu, iman, adab, dan kepimpinan.">
    <meta property="og:url" content="https://darulfurqon.my">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('media/mtdf/hero-tahfizh.jpeg') }}">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32.png') }}">
    <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('images/favicon-48.png') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="preload" as="image" href="{{ asset('media/mtdf/hero-tahfizh.jpeg') }}">
    <title>Maahad Tahfidz Darul Furqon</title>
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "EducationalOrganization",
            "name": "Maahad Tahfidz Darul Furqon",
            "url": "https://darulfurqon.my",
            "logo": "{{ asset('images/darul-furqon-logo-full.png') }}",
            "image": "{{ asset('media/mtdf/hero-tahfizh.jpeg') }}",
            "email": "info@darulfurqon.my",
            "foundingDate": "2022-03",
            "sameAs": [
                "mailto:tahfizdarulfurqon@gmail.com"
            ],
            "telephone": "+60174333652",
            "address": {
                "@@type": "PostalAddress",
                "streetAddress": "Lot 5713, Jalan Dato' Harun, Kampung Sungai Pinang",
                "addressLocality": "Pulau Indah, Pelabuhan Klang",
                "addressRegion": "Selangor",
                "postalCode": "42920",
                "addressCountry": "MY"
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

        :focus-visible {
            outline: 3px solid var(--gold-400);
            outline-offset: 3px;
            border-radius: 4px;
        }

        .footer li a {
            transition: color .2s ease;
        }

        .footer li a:hover {
            color: var(--gold-400);
        }

        .nav-links a.is-active {
            color: var(--gold-400);
        }

        html.js .reveal {
            opacity: 0;
            transform: translateY(26px);
            transition: opacity .7s ease, transform .7s ease;
        }

        html.js .reveal.is-visible {
            opacity: 1;
            transform: none;
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            html.js .reveal {
                opacity: 1;
                transform: none;
                transition: none;
            }
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

        .site-header {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(4, 32, 26, .82);
            -webkit-backdrop-filter: blur(12px);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(240, 196, 90, .14);
            transition: background .3s ease, box-shadow .3s ease, border-color .3s ease;
        }
        .site-header.scrolled {
            background: rgba(3, 25, 20, .97);
            box-shadow: 0 12px 34px rgba(0, 0, 0, .34);
            border-bottom-color: rgba(240, 196, 90, .22);
        }

        .nav {
            position: relative;
            z-index: 4;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 0;
        }
        .brand-emblem, .brand > span:last-child, .brand > span:last-child small {
            transition: width .3s ease, height .3s ease, font-size .3s ease, margin .3s ease;
        }
        .site-header.scrolled .brand-emblem { width: 82px; height: 78px; margin: -6px 0; }
        .site-header.scrolled .brand > span:last-child { font-size: 12px; }
        .site-header.scrolled .brand > span:last-child small { font-size: 18px; }
        .site-header.scrolled .nav { padding: 7px 0; }
        .site-header.scrolled .nav-links { gap: 18px; font-size: 13px; transition: gap .3s ease, font-size .3s ease; }

        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
            font-weight: 900;
            letter-spacing: .02em;
        }

        .brand-emblem {
            display: grid;
            width: 140px;
            height: 132px;
            place-items: center;
            margin: -12px 0;
            padding: 0;
            border: 0;
            border-radius: 0;
            background: transparent;
            box-shadow: none;
        }

        .brand-emblem.arabic-lockup {
            width: 92px;
            height: 92px;
            margin: -10px -5px -10px 0;
            padding: 0;
            border: 0;
            border-radius: 0;
            background: transparent;
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

        .brand > span:last-child {
            color: rgba(255,255,255,.82);
            font-size: 14px;
            line-height: 1.05;
            letter-spacing: .06em;
            white-space: nowrap;
            font-weight: 700;
        }

        .brand > span:last-child small {
            margin-top: 3px;
            font-size: 23px;
            line-height: 1;
            letter-spacing: .01em;
            color: #fff;
            font-weight: 900;
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

        .nav-toggle {
            display: none;
            width: 46px;
            height: 46px;
            place-items: center;
            gap: 5px;
            flex-direction: column;
            cursor: pointer;
            border: 1px solid rgba(240, 196, 90, .38);
            border-radius: 12px;
            background: rgba(255, 255, 255, .06);
        }

        .nav-toggle span {
            width: 22px;
            height: 2px;
            background: var(--gold-400);
            border-radius: 2px;
            transition: transform .25s ease, opacity .2s ease;
        }

        .nav-toggle-cb:checked ~ .nav-toggle span:nth-child(1) {
            transform: translateY(7px) rotate(45deg);
        }

        .nav-toggle-cb:checked ~ .nav-toggle span:nth-child(2) {
            opacity: 0;
        }

        .nav-toggle-cb:checked ~ .nav-toggle span:nth-child(3) {
            transform: translateY(-7px) rotate(-45deg);
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
            max-width: 600px;
            margin-top: 18px;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(40px, 4.4vw, 62px);
            line-height: .98;
            text-transform: uppercase;
            letter-spacing: .01em;
            text-wrap: balance;
            overflow-wrap: break-word;
            hyphens: auto;
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
            background: var(--emerald-950);
            box-shadow: 0 30px 90px rgba(0,0,0,.28);
        }

        .hero-photo {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: 54% center;
        }

        .hero-media::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 2;
            background:
                linear-gradient(180deg, rgba(3,31,26,.04) 30%, rgba(3,31,26,.76) 100%),
                linear-gradient(90deg, rgba(3,31,26,.18), transparent 45%);
            pointer-events: none;
        }

        .hero-media::before {
            content: none;
        }

        .hero-media .arch-frame {
            z-index: 4;
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
            z-index: 5;
            top: 30px;
            right: 32px;
            width: 164px;
            height: 152px;
            object-fit: contain;
            object-position: center;
            padding: 12px;
            border-radius: 16px;
            border: 1px solid rgba(213,162,59,.42);
            background: rgba(4, 32, 26, .84);
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
            z-index: 6;
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
            pointer-events: none;
            background-image: url("{{ asset('images/islamic-geometric-pattern.svg') }}");
            background-size: 220px 220px;
        }

        .programmes::after {
            content: none;
            position: absolute;
            left: 0;
            right: 0;
            top: 76px;
            height: 28px;
            opacity: .24;
            pointer-events: none;
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
            display: block;
            width: calc(100% + 4px);
            height: 118px;
            margin: -2px -2px 18px;
            border-radius: 10px;
            object-fit: cover;
        }

        .program-card:nth-child(2) .photo { object-position: center 52%; }
        .program-card:nth-child(3) .photo { object-position: center 42%; }

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
            margin: 0;
            position: relative;
            overflow: hidden;
            min-height: 348px;
            border: 1px solid rgba(213,162,59,.28);
            border-radius: 18px;
            background: var(--emerald-950);
        }

        .gallery-small {
            min-height: 168px;
        }

        .gallery-stack {
            display: grid;
            gap: 12px;
        }

        .gallery-main img,
        .gallery-small img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .45s ease;
        }

        .gallery-main:hover img,
        .gallery-small:hover img {
            transform: scale(1.035);
        }

        .gallery-main figcaption,
        .gallery-small figcaption {
            position: absolute;
            z-index: 2;
            right: 18px;
            bottom: 18px;
            padding: 8px 12px;
            color: white;
            background: rgba(3,31,26,.74);
            border-radius: 999px;
            font-size: 12px;
            font-weight: 900;
        }

        .media-section {
            overflow: hidden;
            background:
                linear-gradient(180deg, rgba(248,239,217,.76), rgba(255,249,236,.96)),
                var(--cream-100);
        }

        .media-section::before {
            content: "";
            position: absolute;
            left: -110px;
            top: 30px;
            width: 340px;
            height: 340px;
            opacity: .11;
            background: url("{{ asset('images/islamic-geometric-pattern.svg') }}") center / contain no-repeat;
        }

        .media-heading {
            position: relative;
            max-width: 760px;
            margin: 0 auto 32px;
            text-align: center;
        }

        .media-heading p {
            max-width: 650px;
            margin: 16px auto 0;
        }

        .video-grid {
            position: relative;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 22px;
        }

        .video-card {
            overflow: hidden;
            margin: 0;
            border: 1px solid rgba(213,162,59,.3);
            border-radius: 16px;
            background: var(--emerald-950);
            box-shadow: 0 20px 50px rgba(3,31,26,.14);
        }

        .video-card video {
            display: block;
            width: 100%;
            aspect-ratio: 16 / 9;
            object-fit: cover;
            background: #021814;
        }

        .video-card figcaption {
            padding: 18px 20px 20px;
            color: white;
            font-weight: 900;
        }

        .video-card figcaption span {
            display: block;
            margin-top: 5px;
            color: rgba(255,255,255,.62);
            font-size: 13px;
            font-weight: 600;
        }

        .values {
            color: white;
            background:
                linear-gradient(90deg, rgba(3,31,26,.98), rgba(8,56,47,.9)),
                linear-gradient(135deg, var(--emerald-950), var(--gold-500));
            padding: 62px 0;
        }

        .values::after {
            content: none;
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
            content: none;
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
            content: none;
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

        .powered-by {
            margin-top: 6px;
            color: rgba(255,255,255,.5);
            font-size: 13px;
        }

        .powered-by a {
            color: var(--gold-400);
            font-weight: 800;
        }

        .fab-stack {
            position: fixed;
            right: 22px;
            bottom: 22px;
            z-index: 40;
            display: flex;
            flex-direction: column;
            gap: 12px;
            align-items: center;
        }
        .fab {
            display: grid;
            place-items: center;
            width: 54px;
            height: 54px;
            border: 0;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 12px 30px rgba(3,31,26,.32);
            transition: transform .2s ease, box-shadow .2s ease, opacity .25s ease;
        }
        .fab:hover { transform: translateY(-3px); box-shadow: 0 16px 38px rgba(3,31,26,.4); }
        .fab svg { width: 27px; height: 27px; display: block; }
        .fab-wa { background: #25d366; color: #fff; }
        .fab-infak { background: var(--emerald-800); color: var(--gold-400); border: 1px solid rgba(240,196,90,.55); }
        .fab-infak:hover { color: var(--gold-400); }
        .fab-top {
            background: linear-gradient(180deg, var(--gold-400), var(--gold-500));
            color: #12352d;
            opacity: 0;
            visibility: hidden;
            transform: translateY(12px);
        }
        .fab-top.show { opacity: 1; visibility: visible; transform: none; }

        /* ---- Language switcher ---- */
        .nav { justify-content: flex-start; gap: 12px; flex-wrap: wrap; }
        .nav-links { margin-left: auto; }
        .lang-switch {
            display: inline-flex; gap: 3px; padding: 4px;
            border: 1px solid rgba(240, 196, 90, .32); border-radius: 999px;
            background: rgba(255, 255, 255, .06);
        }
        .lang-btn {
            display: inline-flex; align-items: center; gap: 5px;
            padding: 6px 10px; border: 0; border-radius: 999px; cursor: pointer;
            background: transparent; color: rgba(255, 255, 255, .74);
            font: inherit; font-size: 12px; font-weight: 800; line-height: 1;
            transition: background .2s ease, color .2s ease;
        }
        .lang-btn .flag { font-size: 15px; line-height: 1; }
        .lang-btn:hover { color: #fff; }
        .lang-btn.active { color: #12352d; background: linear-gradient(180deg, var(--gold-400), var(--gold-500)); }

        /* ---- RTL (Arabic) ---- */
        html[dir="rtl"] body { font-family: "Noto Naskh Arabic", "Amiri", "Segoe UI", Tahoma, sans-serif; }
        html[dir="rtl"] .section-kicker,
        html[dir="rtl"] h2 span,
        html[dir="rtl"] .eyebrow { letter-spacing: 0; }
        html[dir="rtl"] .campus-copy { padding: 30px 28px 30px 0; }
        html[dir="rtl"] .campus-copy::before { left: auto; right: 0; border-left: 0; border-right: 4px solid var(--gold-500); border-radius: 0 70px 0 0; }
        html[dir="rtl"] .quote { border-left: 0; border-right: 4px solid var(--gold-500); }
        html[dir="rtl"] .founder-quote { padding-left: 0; padding-right: 20px; border-left: 0; border-right: 4px solid var(--gold-500); }

        /* Semua overlay hiasan tidak menghalang klik pada butang/pautan */
        .hero::before, .hero::after,
        .pillars-section::before, .pillars-section::after,
        .program-card::before,
        .campus-copy::before, .campus-gallery::before,
        .media-section::before,
        .values::after,
        .cta-wrap::before, .cta-wrap::after,
        .quote::after,
        .contact-card::after,
        .footer::before,
        .islamic-rosette::after {
            pointer-events: none;
        }

        /* ---- Visi & Misi ---- */
        .vm-section {
            background:
                linear-gradient(180deg, rgba(248,239,217,.55), rgba(255,249,236,.96)),
                var(--cream-100);
        }
        .vm-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }
        .vm-card {
            position: relative;
            padding: 32px 26px;
            border-radius: 16px;
            border: 1px solid rgba(213,162,59,.3);
            background: #fff;
            box-shadow: 0 16px 40px rgba(3,31,26,.07);
        }
        .vm-card .vm-icon {
            display: grid;
            place-items: center;
            width: 56px;
            height: 56px;
            margin-bottom: 16px;
            border-radius: 15px;
            color: var(--emerald-950);
            font-size: 26px;
            font-weight: 900;
            background: radial-gradient(circle, rgba(240,196,90,.22), transparent 70%), rgba(15,81,66,.06);
            border: 1px solid rgba(213,162,59,.34);
        }
        .vm-card h3 {
            color: var(--emerald-950);
            font-size: 20px;
            margin-bottom: 8px;
        }
        .vm-card p { color: var(--muted); font-size: 14.5px; line-height: 1.66; }
        .vm-motto {
            margin-top: 26px;
            padding: 20px;
            text-align: center;
            border-radius: 14px;
            color: var(--gold-400);
            background: linear-gradient(135deg, var(--emerald-950), var(--emerald-800));
            border: 1px solid rgba(240,196,90,.28);
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(20px, 2.4vw, 28px);
            font-weight: 700;
            letter-spacing: .04em;
        }

        /* ---- Lanjutan Pengajian (pathway) ---- */
        .pathway { max-width: 940px; margin: 0 auto; }
        .path-steps {
            display: flex;
            align-items: stretch;
            justify-content: center;
            gap: 0;
            flex-wrap: nowrap;
        }
        .path-step {
            flex: 1;
            text-align: center;
            padding: 26px 18px;
            border-radius: 16px;
            border: 1px solid rgba(240,196,90,.26);
            background: linear-gradient(160deg, rgba(255,249,236,.06), rgba(255,255,255,.03));
        }
        .path-step .path-num {
            display: grid;
            place-items: center;
            width: 46px;
            height: 46px;
            margin: 0 auto 12px;
            border-radius: 50%;
            color: #12352d;
            font-weight: 900;
            background: linear-gradient(180deg, var(--gold-400), var(--gold-500));
        }
        .path-step .path-tag {
            display: inline-block;
            margin-bottom: 8px;
            font-size: 11px;
            font-weight: 900;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--gold-400);
        }
        .path-step h3 { color: #fff; font-size: 17px; line-height: 1.15; }
        .path-step p { color: rgba(255,255,255,.66); font-size: 13px; margin-top: 6px; }
        .path-arrow {
            display: flex;
            align-items: center;
            padding: 0 6px;
            color: var(--gold-500);
            font-size: 26px;
            font-weight: 900;
        }
        @media (max-width: 720px) {
            .vm-grid { grid-template-columns: 1fr; }
            .path-steps { flex-direction: column; }
            .path-arrow { justify-content: center; padding: 8px 0; transform: rotate(90deg); }
        }

        /* ---- Kurikulum / Jadual Tahfiz ---- */
        .curriculum { margin-top: 40px; }
        .schedule-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
        .sched-card {
            padding: 26px 22px;
            text-align: center;
            border-radius: 14px;
            border: 1px solid rgba(213,162,59,.3);
            background: #fff;
            box-shadow: 0 14px 34px rgba(3,31,26,.07);
        }
        .sched-card .sched-time {
            display: block;
            color: var(--gold-600);
            font-family: Georgia, "Times New Roman", serif;
            font-size: 24px;
            font-weight: 700;
        }
        .sched-card h4 { margin: 10px 0 6px; color: var(--emerald-950); font-size: 18px; }
        .sched-card p { color: var(--muted); font-size: 13.5px; line-height: 1.55; }
        .subjects { display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; margin-top: 24px; }
        .subject-chip {
            padding: 9px 16px;
            border-radius: 999px;
            border: 1px solid rgba(213,162,59,.42);
            background: rgba(15,81,66,.05);
            color: var(--emerald-900);
            font-size: 13px;
            font-weight: 800;
        }
        @media (max-width: 720px) { .schedule-grid { grid-template-columns: 1fr; } }

        /* Kelas Al-Quran (peringkat) */
        .quran-classes { margin-top: 26px; }
        .quran-tiers { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; margin-top: 22px; }
        .quran-tier {
            position: relative;
            background: #fff;
            border: 1px solid rgba(213,162,59,.3);
            border-radius: 16px;
            padding: 26px 22px;
            text-align: center;
            box-shadow: 0 14px 34px rgba(3,31,26,.07);
        }
        .quran-tier .tier-num {
            display: inline-grid; place-items: center;
            width: 46px; height: 46px; margin-bottom: 12px;
            border-radius: 50%;
            background: linear-gradient(180deg, #f6cf69, #d9a23b);
            color: #12352d; font-weight: 900; font-size: 16px;
            font-family: Georgia, "Times New Roman", serif;
            box-shadow: 0 8px 20px rgba(213,162,59,.28);
        }
        .quran-tier h4 { margin: 0 0 6px; color: var(--emerald-950); font-size: 18px; }
        .quran-tier p { margin: 0; color: var(--muted); font-size: 13.5px; line-height: 1.55; }

        /* Aktiviti hujung minggu */
        .weekend-activity { margin-top: 42px; text-align: center; }
        .weekend-note { display: inline-block; margin: 6px 0 16px; color: var(--muted); font-size: 12.5px; font-weight: 700; letter-spacing: .02em; }
        .weekend-items { display: flex; justify-content: center; flex-wrap: wrap; gap: 14px; }
        .weekend-item {
            display: inline-flex; align-items: center; gap: 10px;
            padding: 12px 24px; border-radius: 999px;
            background: rgba(15,81,66,.06); border: 1px solid rgba(213,162,59,.42);
            color: var(--emerald-900); font-weight: 800; font-size: 14.5px;
        }
        .weekend-item .wk-ic { color: var(--gold-600); font-size: 17px; line-height: 1; }
        @media (max-width: 720px) { .quran-tiers { grid-template-columns: 1fr; max-width: 380px; margin-inline: auto; } }

        /* Jadual harian penuh */
        .daysched-head { text-align: center; margin-top: 42px; }
        .daysched-lead { max-width: 720px; margin: 12px auto 14px; color: var(--muted); font-size: 15px; line-height: 1.65; }
        .daysched-fast {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 7px 16px; border-radius: 999px;
            background: rgba(23,99,79,.09); border: 1px solid rgba(213,162,59,.42);
            color: var(--emerald-800); font-size: 12.5px; font-weight: 900; letter-spacing: .02em;
        }
        .daysched-fast::before { content: "\2739"; color: var(--gold-600); font-size: 13px; }
        .daysched-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 18px;
            margin-top: 26px;
            align-items: start;
        }
        .daysched-block {
            background: #fff;
            border: 1px solid rgba(213,162,59,.3);
            border-radius: 16px;
            padding: 20px 20px 8px;
            box-shadow: 0 14px 34px rgba(3,31,26,.07);
        }
        .daysched-block > header {
            display: flex; align-items: baseline; justify-content: space-between; gap: 10px;
            padding-bottom: 12px; margin-bottom: 6px;
            border-bottom: 1px solid var(--line);
        }
        .daysched-block h4 { margin: 0; color: var(--emerald-950); font-size: 16px; }
        .daysched-range { color: var(--gold-600); font-size: 12px; font-weight: 800; font-family: Georgia, "Times New Roman", serif; letter-spacing: .02em; white-space: nowrap; }
        .daysched-block ul { list-style: none; margin: 0; padding: 0; }
        .daysched-block li { display: flex; gap: 12px; padding: 9px 0; border-bottom: 1px dashed rgba(14,73,59,.1); }
        .daysched-block li:last-child { border-bottom: 0; }
        .daysched-block .t {
            flex: 0 0 auto; min-width: 46px;
            color: var(--emerald-900); font-weight: 900; font-size: 13.5px;
            font-family: Georgia, "Times New Roman", serif;
        }
        .daysched-block .a { color: var(--muted); font-size: 13.5px; line-height: 1.5; }
        html[dir="rtl"] .daysched-block .t { text-align: right; }

        .founder-section {
            overflow: hidden;
            background:
                linear-gradient(180deg, rgba(248,239,217,.55), rgba(255,249,236,.96)),
                var(--cream-50);
        }

        .founder {
            display: grid;
            grid-template-columns: .82fr 1.18fr;
            gap: 40px;
            align-items: center;
        }

        .founder-portrait {
            position: relative;
            margin: 0;
            aspect-ratio: 4 / 5;
            overflow: hidden;
            border-radius: 22px;
            border: 1px solid rgba(213,162,59,.4);
            background:
                radial-gradient(circle at 50% 22%, rgba(15,81,66,.55), transparent 60%),
                linear-gradient(160deg, var(--emerald-800), var(--emerald-950));
            box-shadow: var(--shadow);
        }

        .founder-portrait img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
            filter: drop-shadow(0 14px 22px rgba(0,0,0,.28));
        }

        /* Foto founder kini cutout transparan; latar emerald frame jadi backdrop studio */
        .founder-portrait::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 2;
            pointer-events: none;
            background:
                linear-gradient(180deg, rgba(15,81,66,.18) 0%, transparent 26%, transparent 72%, rgba(3,31,26,.42) 100%),
                radial-gradient(120% 100% at 50% 36%, transparent 60%, rgba(3,31,26,.34) 100%);
        }

        .founder-portrait::after {
            content: "";
            position: absolute;
            inset: 14px;
            z-index: 3;
            pointer-events: none;
            border: 1px solid rgba(240,196,90,.5);
            border-radius: 16px;
        }

        .founder-portrait figcaption {
            position: absolute;
            z-index: 4;
            left: 18px;
            right: 18px;
            bottom: 18px;
            padding: 12px 16px;
            color: white;
            text-align: center;
            background: rgba(3,31,26,.66);
            border: 1px solid rgba(240,196,90,.34);
            border-radius: 12px;
            font-weight: 900;
            font-size: 15px;
        }

        .founder-portrait figcaption span {
            display: block;
            margin-top: 3px;
            color: var(--gold-400);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
        }

        .founder-copy .founder-name {
            margin-top: 12px;
            color: var(--emerald-950);
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(30px, 3vw, 42px);
            line-height: 1.02;
        }

        .founder-role {
            display: inline-block;
            margin-top: 14px;
            padding: 7px 14px;
            color: var(--emerald-950);
            background: linear-gradient(180deg, rgba(240,196,90,.34), rgba(213,162,59,.22));
            border: 1px solid rgba(213,162,59,.5);
            border-radius: 999px;
            font-size: 13px;
            font-weight: 900;
            letter-spacing: .04em;
        }

        .founder-quote {
            margin-top: 22px;
            padding-left: 20px;
            border-left: 4px solid var(--gold-500);
            color: var(--emerald-900);
            font-family: Georgia, "Times New Roman", serif;
            font-size: 20px;
            line-height: 1.5;
            font-style: italic;
        }

        @media (max-width: 1020px) {
            .founder {
                grid-template-columns: 1fr;
                gap: 26px;
            }

            .founder-portrait {
                max-width: 420px;
                margin-inline: auto;
                width: 100%;
                aspect-ratio: auto;
            }
            .founder-portrait img {
                position: relative;
                height: auto;
                aspect-ratio: 4 / 5;
            }

            .nav-toggle {
                display: flex;
            }
            .nav-toggle {
                display: flex;
            }

            .nav {
                flex-wrap: wrap;
            }

            .nav-links {
                position: absolute;
                left: 20px;
                right: 20px;
                top: 92px;
                z-index: 20;
                flex-direction: column;
                align-items: stretch;
                gap: 4px;
                max-height: 0;
                padding: 0 14px;
                overflow: hidden;
                opacity: 0;
                background: linear-gradient(180deg, rgba(6, 43, 35, .98), rgba(3, 31, 26, .99));
                border: 1px solid rgba(240, 196, 90, .22);
                border-radius: 16px;
                box-shadow: 0 24px 60px rgba(3, 31, 26, .4);
                transition: max-height .32s ease, opacity .28s ease, padding .32s ease;
            }

            .nav-links a {
                padding: 13px 12px;
                border-bottom: 1px solid rgba(255, 255, 255, .07);
            }

            .nav-links a:last-child {
                border-bottom: 0;
                margin-top: 8px;
            }

            .nav-toggle-cb:checked ~ .nav-links {
                max-height: 460px;
                padding: 10px 14px;
                opacity: 1;
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
            .value-grid,
            .video-grid {
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
                width: 118px;
                height: 112px;
                margin: -6px 0;
            }

            .brand-emblem.arabic-lockup {
                width: 78px;
                height: 78px;
                margin: -7px -5px -7px 0;
            }

            .brand > span:last-child {
                font-size: 13px;
            }

            .brand > span:last-child small {
                margin-top: 3px;
                font-size: 19px;
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

            .fab-stack {
                right: 14px;
                bottom: 14px;
            }
            .fab {
                width: 50px;
                height: 50px;
            }

            .pillars,
            .program-grid,
            .stats,
            .value-grid,
            .campus-gallery,
            .video-grid {
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
                width: 128px;
                height: 120px;
                top: 20px;
                right: 20px;
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

        /* ===== Section Sejarah / Mengenali Darul Furqon ===== */
        .story-section {
            background:
                radial-gradient(1200px 420px at 12% -10%, rgba(240,196,90,.10), transparent 60%),
                linear-gradient(180deg, var(--cream-50) 0%, #fffdf8 100%);
            padding: 84px 0;
        }
        .story-tabs {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-bottom: 40px;
        }
        .story-tab {
            padding: 11px 20px;
            border-radius: 999px;
            border: 1px solid var(--line);
            background: #fff;
            color: var(--ink);
            font-size: 13.5px;
            font-weight: 800;
            letter-spacing: .01em;
            cursor: pointer;
            transition: transform .18s ease, box-shadow .18s ease, background .18s ease, color .18s ease, border-color .18s ease;
        }
        .story-tab:hover { transform: translateY(-2px); border-color: rgba(213,162,59,.5); }
        .story-tab.is-active {
            color: #12352d;
            background: linear-gradient(180deg, #f6cf69 0%, #d9a23b 100%);
            border-color: transparent;
            box-shadow: 0 12px 26px rgba(213,162,59,.28);
        }
        .story-panel { display: none; }
        .story-panel.is-active { display: block; animation: storyFade .45s ease both; }
        @keyframes storyFade { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: none; } }
        @media (prefers-reduced-motion: reduce) { .story-panel.is-active { animation: none; } }

        .panel-lead {
            max-width: 760px;
            margin: 0 auto 30px;
            text-align: center;
            color: var(--muted);
            font-size: 15.5px;
            line-height: 1.7;
        }
        .panel-note {
            margin: 26px auto 0;
            max-width: 720px;
            text-align: center;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.6;
        }

        /* Sejarah Penubuhan — foto + timeline */
        .story-history {
            display: grid;
            grid-template-columns: 320px 1fr;
            gap: 44px;
            align-items: start;
        }
        .history-figure {
            margin: 0;
            position: sticky;
            top: 96px;
        }
        .history-figure img {
            width: 100%;
            border-radius: 18px;
            background: #fff;
            box-shadow: var(--shadow);
        }
        .history-figure figcaption {
            display: flex;
            flex-direction: column;
            gap: 2px;
            margin-top: 14px;
            text-align: center;
        }
        .history-figure figcaption strong { color: var(--emerald-950); font-size: 15px; }
        .history-figure figcaption span { color: var(--gold-600); font-size: 12.5px; font-weight: 800; letter-spacing: .06em; text-transform: uppercase; }
        .story-badge {
            display: inline-block;
            padding: 6px 14px;
            border-radius: 999px;
            background: rgba(23,99,79,.1);
            color: var(--emerald-800);
            font-size: 12px;
            font-weight: 900;
            letter-spacing: .1em;
            text-transform: uppercase;
        }
        .history-lead {
            margin: 16px 0 26px;
            color: var(--ink);
            font-size: 18px;
            line-height: 1.7;
            font-weight: 500;
        }
        .timeline { list-style: none; margin: 0; padding: 0; position: relative; }
        .timeline::before {
            content: "";
            position: absolute;
            left: 9px; top: 6px; bottom: 6px;
            width: 2px;
            background: linear-gradient(180deg, var(--gold-400), rgba(189,132,38,.25));
        }
        .timeline li { position: relative; padding: 0 0 26px 40px; }
        .timeline li:last-child { padding-bottom: 0; }
        .timeline li::before {
            content: "";
            position: absolute;
            left: 2px; top: 4px;
            width: 16px; height: 16px;
            border-radius: 50%;
            background: var(--gold-500);
            box-shadow: 0 0 0 4px var(--cream-50), 0 0 0 5px rgba(213,162,59,.4);
        }
        .timeline h4 { margin: 0 0 5px; color: var(--emerald-950); font-size: 16.5px; }
        .timeline p { margin: 0; color: var(--muted); font-size: 14.5px; line-height: 1.65; }

        /* Barisan Peneraju */
        .leader-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        .leader-card {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 18px;
            padding: 26px 22px;
            text-align: center;
            box-shadow: 0 16px 42px rgba(3,31,26,.08);
            transition: transform .2s ease, box-shadow .2s ease;
        }
        .leader-card:hover { transform: translateY(-4px); box-shadow: 0 22px 54px rgba(3,31,26,.14); }
        .leader-photo {
            width: 132px; height: 132px;
            margin: 0 auto 16px;
            border-radius: 50%;
            overflow: hidden;
            background: linear-gradient(180deg, var(--cream-100), var(--cream-200));
            border: 3px solid var(--gold-400);
            box-shadow: 0 10px 26px rgba(189,132,38,.22);
        }
        .leader-photo img { width: 100%; height: 100%; object-fit: cover; object-position: top center; }
        .leader-card h3 { color: var(--emerald-950); font-size: 17px; line-height: 1.3; }
        .leader-role {
            display: inline-block;
            margin: 6px 0 12px;
            padding: 4px 12px;
            border-radius: 999px;
            background: rgba(23,99,79,.09);
            color: var(--emerald-700);
            font-size: 12px; font-weight: 900; letter-spacing: .08em; text-transform: uppercase;
        }
        .leader-card p { margin: 0; color: var(--muted); font-size: 13.8px; line-height: 1.6; }

        /* Galeri Lawatan & Riadah */
        .photo-group { margin-bottom: 30px; }
        .photo-group:last-child { margin-bottom: 0; }
        .photo-group-title {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 16px;
            color: var(--emerald-950);
            font-size: 16px;
            font-weight: 900;
        }
        .photo-group-title::before {
            content: "";
            width: 22px; height: 3px; border-radius: 3px;
            background: var(--gold-500);
        }
        .photo-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }
        .photo-grid-3 { grid-template-columns: repeat(3, 1fr); }
        .photo-grid figure { margin: 0; overflow: hidden; border-radius: 16px; box-shadow: 0 14px 36px rgba(3,31,26,.12); }
        .photo-grid img {
            width: 100%; height: 240px; object-fit: cover; display: block;
            transition: transform .5s ease;
        }
        .photo-grid figure:hover img { transform: scale(1.05); }

        .story-actions { margin-top: 44px; text-align: center; }

        /* Modal PDF */
        .pdf-modal { position: fixed; inset: 0; z-index: 1200; display: flex; align-items: center; justify-content: center; padding: 20px; }
        .pdf-modal[hidden] { display: none; }
        .pdf-modal__backdrop { position: absolute; inset: 0; background: rgba(3,31,26,.72); backdrop-filter: blur(3px); }
        .pdf-modal__box {
            position: relative;
            width: min(1000px, 100%);
            height: min(90vh, 900px);
            display: flex;
            flex-direction: column;
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 40px 100px rgba(0,0,0,.5);
            animation: storyFade .3s ease both;
        }
        .pdf-modal__head {
            display: flex; align-items: center; justify-content: space-between; gap: 14px;
            padding: 14px 18px;
            background: var(--emerald-950);
            color: #fff;
        }
        .pdf-modal__title { font-size: 14.5px; font-weight: 800; }
        .pdf-modal__tools { display: flex; align-items: center; gap: 8px; }
        .pdf-modal__link {
            color: var(--gold-400);
            font-size: 12.5px; font-weight: 800;
            padding: 7px 12px; border-radius: 8px;
            border: 1px solid rgba(240,196,90,.35);
        }
        .pdf-modal__link:hover { background: rgba(240,196,90,.12); }
        .pdf-modal__close {
            width: 34px; height: 34px; border-radius: 8px;
            background: rgba(255,255,255,.1); color: #fff; font-size: 22px; line-height: 1;
            cursor: pointer; border: 0;
        }
        .pdf-modal__close:hover { background: rgba(255,255,255,.2); }
        .pdf-modal__body { position: relative; flex: 1; background: #333; }
        .pdf-modal__body iframe { width: 100%; height: 100%; border: 0; }
        .pdf-modal__note {
            position: absolute; left: 0; right: 0; bottom: 0;
            margin: 0; padding: 10px 16px; text-align: center;
            background: rgba(0,0,0,.55); color: #f4ead2; font-size: 12px;
        }
        html[dir="rtl"] .photo-group-title::before { background: var(--gold-500); }

        @media (max-width: 900px) {
            .story-history { grid-template-columns: 1fr; gap: 26px; }
            .history-figure { position: static; max-width: 300px; margin: 0 auto; }
            .leader-grid { grid-template-columns: 1fr; max-width: 400px; margin: 0 auto; }
        }
        @media (max-width: 720px) {
            .story-section { padding: 64px 0; }
            .story-tab { padding: 9px 15px; font-size: 12.5px; }
            .photo-grid, .photo-grid-3 { grid-template-columns: 1fr 1fr; gap: 12px; }
            .photo-grid img { height: 160px; }
            .history-lead { font-size: 16px; }
            .pdf-modal__box { height: 92vh; }
            .pdf-modal__title { font-size: 12.5px; }
            .pdf-modal__link { padding: 6px 9px; font-size: 11.5px; }
        }

        /* ===== Infak & Sedekah Jariah ===== */
        .infak-section {
            position: relative;
            overflow: hidden;
            color: #fff;
            background:
                radial-gradient(900px 420px at 88% 12%, rgba(240,196,90,.18), transparent 60%),
                linear-gradient(135deg, var(--emerald-980), var(--emerald-800));
            border-top: 1px solid rgba(240,196,90,.16);
            border-bottom: 1px solid rgba(240,196,90,.16);
        }
        .infak-grid {
            display: grid;
            grid-template-columns: minmax(0, 360px) minmax(0, 1fr);
            gap: 48px;
            align-items: center;
            padding: 78px 0;
        }
        .infak-poster { margin: 0; position: relative; }
        .infak-poster a { display: block; border-radius: 20px; overflow: hidden; box-shadow: 0 30px 70px rgba(0,0,0,.42); border: 1px solid rgba(240,196,90,.3); transition: transform .3s ease; }
        .infak-poster a:hover { transform: translateY(-4px); }
        .infak-poster img { width: 100%; display: block; }
        .infak-poster figcaption { margin-top: 10px; text-align: center; color: rgba(255,255,255,.6); font-size: 12px; }
        .infak-copy .section-kicker { color: var(--gold-400); }
        .infak-copy h2 { color: #fff; margin-bottom: 16px; }
        .infak-copy h2 span { display: block; color: var(--gold-400); font-size: .62em; font-weight: 800; margin-top: 4px; }
        .infak-lead { color: rgba(255,255,255,.86); font-size: 15.5px; line-height: 1.7; }
        .infak-hadith {
            margin: 20px 0;
            padding: 14px 20px;
            border-left: 4px solid var(--gold-500);
            border-radius: 0 12px 12px 0;
            background: rgba(255,255,255,.05);
            color: rgba(255,255,255,.9);
            font-style: italic;
            line-height: 1.6;
            font-size: 14.5px;
        }
        .infak-hadith span { display: block; margin-top: 8px; font-style: normal; font-weight: 800; color: var(--gold-400); font-size: 12.5px; }
        .infak-points { list-style: none; margin: 18px 0 24px; padding: 0; display: grid; gap: 10px; }
        .infak-points li { position: relative; padding-left: 28px; color: rgba(255,255,255,.88); font-size: 14.5px; line-height: 1.5; }
        .infak-points li::before {
            content: "\2713"; position: absolute; left: 0; top: 1px;
            width: 18px; height: 18px; border-radius: 50%;
            display: grid; place-items: center; font-size: 11px;
            background: rgba(240,196,90,.18); color: var(--gold-400); font-weight: 900;
        }
        .infak-actions { display: flex; flex-wrap: wrap; gap: 12px; }
        html[dir="rtl"] .infak-hadith { border-left: 0; border-right: 4px solid var(--gold-500); border-radius: 12px 0 0 12px; }
        html[dir="rtl"] .infak-points li { padding-left: 0; padding-right: 28px; }
        html[dir="rtl"] .infak-points li::before { left: auto; right: 0; }
        @media (max-width: 860px) {
            .infak-grid { grid-template-columns: 1fr; gap: 28px; padding: 56px 0; justify-items: center; text-align: center; }
            .infak-poster { max-width: 320px; }
            .infak-copy { text-align: center; }
            .infak-hadith { text-align: left; }
            .infak-points { justify-items: start; text-align: left; max-width: 420px; margin-inline: auto; }
            .infak-actions { justify-content: center; }
        }
    </style>
</head>
<body>
    <header class="site-header" id="siteHeader">
        <nav class="container nav" aria-label="Navigasi utama">
            <a class="brand" href="#">
                <span class="brand-emblem"><img src="{{ asset('images/darul-furqon-logo-full.png') }}" alt="Logo Maahad Tahfidz Darul Furqon"></span>
                <span>Maahad Tahfidz<small>Darul Furqon</small></span>
            </a>
            <input type="checkbox" id="nav-toggle" class="nav-toggle-cb" hidden>
            <label class="nav-toggle" for="nav-toggle" role="button" tabindex="0" aria-label="Buka atau tutup menu" aria-controls="nav-toggle">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </label>
            <div class="lang-switch" role="group" aria-label="Tukar bahasa / Language">
                <button type="button" class="lang-btn" data-lang="ms" aria-label="Bahasa Melayu"><span class="flag">🇲🇾</span>BM</button>
                <button type="button" class="lang-btn" data-lang="en" aria-label="English"><span class="flag">🇬🇧</span>EN</button>
                <button type="button" class="lang-btn" data-lang="ar" aria-label="العربية"><span class="flag">🇸🇦</span>ع</button>
            </div>
            <div class="nav-links" id="primary-menu">
                <a href="#" data-i18n="nav.home">Utama</a>
                <a href="#tentang" data-i18n="nav.about">Tentang Kami</a>
                <a href="#pengasas" data-i18n="nav.founder">Pengasas</a>
                <a href="#sejarah" data-i18n="nav.story">Sejarah</a>
                <a href="#program" data-i18n="nav.programmes">Program</a>
                <a href="#kegiatan" data-i18n="nav.activities">Kegiatan</a>
                <a href="{{ url('/galeri') }}" data-i18n="nav.gallery">Galeri</a>
                <a href="#infak" data-i18n="nav.infak">Infak</a>
                <a href="#lokasi" data-i18n="nav.contact">Hubungi Kami</a>
                <a class="button gold" href="{{ $wa }}" target="_blank" rel="noopener" data-i18n="nav.apply">Mohon Sekarang +</a>
            </div>
        </nav>
    </header>

<div class="page">
    <header class="hero">
        <div class="hero-pattern-right" aria-hidden="true"></div>

        <div class="container hero-grid">
            <div class="hero-copy">
                <span class="eyebrow" data-i18n="hero.eyebrow">Pendidikan Islam Moden</span>
                <h1 data-i18n="hero.title">
                    Ilmu, Iman, Amal Menerangi Dunia
                    <span>Membina generasi Qur'ani sejak 2022.</span>
                </h1>
                <p data-i18n="hero.lead">
                    Maahad Tahfidz Darul Furqon membina generasi yang kuat dalam Al-Qur'an,
                    matang dalam ilmu, santun dalam adab, dan siap memberi manfaat bagi umat.
                </p>
                <div class="hero-actions">
                    <a class="button gold" href="#tentang" data-i18n="hero.cta1">Kenali Kami +</a>
                    <a class="button ghost" href="#program" data-i18n="hero.cta2">Lihat Program +</a>
                </div>
            </div>

            <div class="hero-media" aria-label="Halaqah Al-Qur'an pelajar Maahad Tahfidz Darul Furqon">
                <img class="hero-photo" src="{{ asset('media/mtdf/hero-tahfizh.jpeg') }}" alt="Pelajar Maahad Tahfidz Darul Furqon mengikuti halaqah Al-Qur'an" fetchpriority="high">
                <img class="hero-logo-watermark" src="{{ asset('images/darul-furqon-logo-full.png') }}" alt="Logo Maahad Tahfidz Darul Furqon">
                <span class="hero-label" data-i18n="hero.label">Halaqah Al-Qur'an &amp; Pembinaan Adab</span>
            </div>
        </div>
    </header>

    <main>
        <section id="tentang" class="pillars-section">
            <div class="container">
                <div class="pillars reveal">
                    <article class="pillar">
                        <div class="icon">▤</div>
                        <h3 data-i18n="pillar1.h">Pendidikan Bersepadu</h3>
                        <p data-i18n="pillar1.p">Gabungan ilmu dunia dan ukhrawi secara seimbang.</p>
                    </article>
                    <article class="pillar">
                        <div class="icon">♡</div>
                        <h3 data-i18n="pillar2.h">Akhlak &amp; Kepimpinan</h3>
                        <p data-i18n="pillar2.p">Membangun peribadi mulia dan kesediaan memimpin.</p>
                    </article>
                    <article class="pillar">
                        <div class="icon">✦</div>
                        <h3 data-i18n="pillar3.h">Persekitaran Islami</h3>
                        <p data-i18n="pillar3.p">Suasana belajar yang kondusif dan berakar nilai Islam.</p>
                    </article>
                    <article class="pillar">
                        <div class="icon">☷</div>
                        <h3 data-i18n="pillar4.h">Komuniti &amp; Kerjasama</h3>
                        <p data-i18n="pillar4.p">Kolaborasi bersama ibu bapa dan komuniti.</p>
                    </article>
                    <article class="pillar">
                        <div class="icon">♧</div>
                        <h3 data-i18n="pillar5.h">Pembangunan Holistik</h3>
                        <p data-i18n="pillar5.p">Menguatkan potensi intelektual, ruhani, emosi, dan fizikal.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="pengasas" class="founder-section">
            <div class="container founder reveal">
                <figure class="founder-portrait">
                    <img src="{{ asset('media/mtdf/founder-umar-al-maidani.png') }}" alt="Ustadz Umar Kurniawan bin Bustami, Pengasas Maahad Tahfidz Darul Furqon" loading="lazy" onerror="this.style.display='none'">
                    <figcaption data-i18n="founder.caption">Ustadz Umar Kurniawan bin Bustami<span>Pengasas</span></figcaption>
                </figure>
                <div class="founder-copy">
                    <div class="section-kicker" data-i18n="founder.kicker">Pengasas &amp; Perintis</div>
                    <h2 data-i18n="founder.h">Pengasas Kami <span>Peneraju Darul Furqon</span></h2>
                    <div class="founder-name">Ustadz Umar Kurniawan bin Bustami</div>
                    <span class="founder-role" data-i18n="founder.role">Pengasas Maahad Tahfidz Darul Furqon</span>
                    <p data-i18n="founder.p1">
                        Ma'ahad Tahfidz Darul Furqon ditubuhkan pada Mac 2022 di Kampung Sungai Pinang,
                        Pulau Indah, Selangor — dirintis Ustaz Umar Kurniawan bin Bustami atas wakaf tanah
                        Puan Hajah Salbiah binti Haji Abdul Hamid.
                    </p>
                    <p data-i18n="founder.p2">
                        Bermula dengan 20 orang pelajar dan sokongan masyarakat setempat, MTDF terus
                        berkembang membina generasi Qur'ani yang berilmu, beriman, dan berakhlak.
                    </p>
                    <blockquote class="founder-quote" data-i18n="founder.quote">
                        "Didiklah anak-anak dengan Al-Qur'an, kerana padanya cahaya dunia dan akhirat."
                    </blockquote>
                </div>
            </div>
        </section>

        <section id="sejarah" class="story-section">
            <div class="container">
                <div class="section-head" style="justify-content:center;text-align:center;flex-direction:column;gap:8px">
                    <div class="section-kicker" data-i18n="st.kicker">Mengenali Darul Furqon</div>
                    <h2 data-i18n="st.h">Sejarah &amp; Perjalanan <span>Dari Sebidang Wakaf Menjadi Ma'ahad</span></h2>
                </div>

                <div class="story-tabs" role="tablist">
                    <button type="button" class="story-tab is-active" data-tab="kisah" data-i18n="st.tab1">Sejarah Penubuhan</button>
                    <button type="button" class="story-tab" data-tab="peneraju" data-i18n="st.tab2">Barisan Peneraju</button>
                    <button type="button" class="story-tab" data-tab="lawatan" data-i18n="st.tab3">Lawatan Pendidikan</button>
                    <button type="button" class="story-tab" data-tab="riadah" data-i18n="st.tab4">Aktiviti Riadah</button>
                </div>

                {{-- PANEL: Sejarah Penubuhan --}}
                <div class="story-panel is-active" data-panel="kisah">
                    <div class="story-history reveal">
                        <figure class="history-figure">
                            <img src="{{ asset('media/mtdf/leaders/salbiah.png') }}" alt="Puan Hajah Salbiah binti Haji Abdul Hamid, pewakaf tanah Maahad Tahfidz Darul Furqon" loading="lazy">
                            <figcaption>
                                <strong>Puan Hajah Salbiah binti Haji Abdul Hamid</strong>
                                <span data-i18n="st.k.role">Pewakaf Tanah</span>
                            </figcaption>
                        </figure>
                        <div class="history-body">
                            <span class="story-badge" data-i18n="st.k.badge">Sejak Mac 2022</span>
                            <p class="history-lead" data-i18n="st.k.lead">Perjalanan Ma'ahad Tahfidz Darul Furqon bermula daripada sebuah hasrat yang tulus &mdash; keinginan seorang ibu agar tanah miliknya menjadi tapak menyemai para penghafal Al-Qur'an.</p>
                            <ol class="timeline">
                                <li>
                                    <h4 data-i18n="st.k.m1.h">Hasrat Seorang Pewakaf</h4>
                                    <p data-i18n="st.k.m1.p">Puan Hajah Salbiah binti Haji Abdul Hamid mengimpikan sebuah Ma'ahad Tahfidz dibina di atas tanah miliknya di Kampung Sungai Pinang, Pulau Indah.</p>
                                </li>
                                <li>
                                    <h4 data-i18n="st.k.m2.h">Amanah Diperjuangkan</h4>
                                    <p data-i18n="st.k.m2.p">Hasrat itu disampaikan kepada Ustaz Umar Kurniawan, lalu beliau memulakan usaha penubuhan dengan sokongan beberapa orang sahabat.</p>
                                </li>
                                <li>
                                    <h4 data-i18n="st.k.m3.h">Mac 2022 &mdash; MTDF Berdiri</h4>
                                    <p data-i18n="st.k.m3.p">Berbekalkan kewangan yang terhad dan hasil sumbangan orang ramai, MTDF ditubuhkan dengan seramai 20 orang pelajar.</p>
                                </li>
                                <li>
                                    <h4 data-i18n="st.k.m4.h">Berkembang Bersama Masyarakat</h4>
                                    <p data-i18n="st.k.m4.p">Alhamdulillah, sehingga kini MTDF terus mendapat sokongan masyarakat Pulau Indah, Klang dalam mengembangkan syiar Islam.</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                {{-- PANEL: Barisan Peneraju --}}
                <div class="story-panel" data-panel="peneraju">
                    <p class="panel-lead reveal" data-i18n="st.p.lead">Sebuah amanah yang digerakkan oleh barisan peneraju yang berpengalaman dalam pendidikan tahfiz dan khidmat masyarakat.</p>
                    <div class="leader-grid reveal">
                        <article class="leader-card">
                            <div class="leader-photo"><img src="{{ asset('media/mtdf/leaders/umar.png') }}" alt="Ustaz Umar Kurniawan, Pengasas MTDF" loading="lazy"></div>
                            <h3>Ustaz Umar Kurniawan</h3>
                            <span class="leader-role" data-i18n="st.p.umar.role">Pengasas</span>
                            <p data-i18n="st.p.umar.p">Lahir 3 April 1987 di Medan, Indonesia. Alumni Pondok Pesantren Temboro dan pengajian agama di Sumatera; berpengalaman sebagai guru tahfiz dan warden sejak 2009.</p>
                        </article>
                        <article class="leader-card">
                            <div class="leader-photo"><img src="{{ asset('media/mtdf/leaders/haris.png') }}" alt="Encik Abdul Haris bin Bahrun, Pengerusi MTDF" loading="lazy"></div>
                            <h3>Encik Abdul Haris bin Bahrun</h3>
                            <span class="leader-role" data-i18n="st.p.haris.role">Pengerusi</span>
                            <p data-i18n="st.p.haris.p">Lahir 24 Mei 1970 di Klang, Selangor. Diploma Kejuruteraan Awam, UiTM Shah Alam; bekas Ketua Kampung Sungai Pinang (2008&ndash;2018).</p>
                        </article>
                        <article class="leader-card">
                            <div class="leader-photo"><img src="{{ asset('media/mtdf/leaders/nurhidayah.png') }}" alt="Ustazah Nurhidayah binti Abd Shomad, Mudirah MTDF" loading="lazy"></div>
                            <h3>Ustazah Nurhidayah binti Abd Shomad</h3>
                            <span class="leader-role" data-i18n="st.p.nur.role">Mudirah</span>
                            <p data-i18n="st.p.nur.p">Lahir 20 Ogos 1993 di Alor Setar, Kedah. Alumni Institut Pondok Pasir Tumbuh, Kelantan; berpengalaman mengajar di ma'ahad tahfiz dan sekolah agama.</p>
                        </article>
                    </div>
                    <p class="panel-note reveal" data-i18n="st.p.note">Carta organisasi penuh MTDF &mdash; Pengerusi, Timbalan, Bendahari, Setiausaha dan AJK &mdash; boleh dilihat dalam Profil Penuh (PDF) di bawah.</p>
                </div>

                {{-- PANEL: Lawatan Pendidikan --}}
                <div class="story-panel" data-panel="lawatan">
                    <p class="panel-lead reveal" data-i18n="st.l.lead">Pembelajaran diperluas melampaui bilik darjah melalui lawatan ilmu yang membina pengalaman dan wawasan pelajar.</p>
                    <div class="photo-group reveal">
                        <div class="photo-group-title" data-i18n="st.l.g1">Ladang Alam Warisan, Negeri Sembilan</div>
                        <div class="photo-grid">
                            <figure><img src="{{ asset('media/mtdf/profil/lawatan-ladang-berkuda.jpg') }}" alt="Aktiviti berkuda di Ladang Alam Warisan, Negeri Sembilan" loading="lazy"></figure>
                            <figure><img src="{{ asset('media/mtdf/profil/lawatan-ladang-memanah.jpg') }}" alt="Aktiviti memanah semasa lawatan pendidikan" loading="lazy"></figure>
                        </div>
                    </div>
                    <div class="photo-group reveal">
                        <div class="photo-group-title" data-i18n="st.l.g2">Pondok Pesantren Temboro, Jawa Timur</div>
                        <div class="photo-grid">
                            <figure><img src="{{ asset('media/mtdf/profil/lawatan-temboro-gate.jpg') }}" alt="Pintu gerbang Desa Temboro, Jawa Timur, Indonesia" loading="lazy"></figure>
                            <figure><img src="{{ asset('media/mtdf/profil/lawatan-temboro-group.jpg') }}" alt="Rombongan MTDF melawat Pondok Pesantren Temboro" loading="lazy"></figure>
                        </div>
                    </div>
                </div>

                {{-- PANEL: Aktiviti Riadah --}}
                <div class="story-panel" data-panel="riadah">
                    <p class="panel-lead reveal" data-i18n="st.r.lead">Cergas jiwa dan raga &mdash; pelajar dibina melalui sukan sunnah dan riadah kebersamaan yang mengeratkan ukhuwah.</p>
                    <div class="photo-group reveal">
                        <div class="photo-group-title" data-i18n="st.r.g1">Sukan Memanah</div>
                        <div class="photo-grid">
                            <figure><img src="{{ asset('media/mtdf/profil/riadah-memanah-anak.jpg') }}" alt="Pelajar bersukan memanah" loading="lazy"></figure>
                            <figure><img src="{{ asset('media/mtdf/profil/riadah-memanah-remaja.jpg') }}" alt="Pelajar dalam aktiviti sukan memanah" loading="lazy"></figure>
                        </div>
                    </div>
                    <div class="photo-group reveal">
                        <div class="photo-group-title" data-i18n="st.r.g2">Riadah Bersama Masyarakat</div>
                        <div class="photo-grid photo-grid-3">
                            <figure><img src="{{ asset('media/mtdf/profil/riadah-pantai.jpg') }}" alt="Riadah bersama masyarakat di pantai Pulau Indah" loading="lazy"></figure>
                            <figure><img src="{{ asset('media/mtdf/profil/riadah-4wd.jpg') }}" alt="Konvoi kenderaan pacuan empat roda semasa riadah bersama masyarakat" loading="lazy"></figure>
                            <figure><img src="{{ asset('media/mtdf/profil/riadah-kumpulan.jpg') }}" alt="Foto kumpulan riadah bersama masyarakat" loading="lazy"></figure>
                        </div>
                    </div>
                </div>

                <div class="story-actions reveal">
                    <button type="button" class="button dark" id="openProfilPdf" data-i18n="st.pdf.btn">Lihat Profil Penuh (PDF) +</button>
                </div>
            </div>
        </section>

        {{-- Modal Profil PDF --}}
        <div class="pdf-modal" id="pdfModal" hidden aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="pdfModalTitle">
            <div class="pdf-modal__backdrop" data-close-pdf></div>
            <div class="pdf-modal__box">
                <div class="pdf-modal__head">
                    <span id="pdfModalTitle" class="pdf-modal__title" data-i18n="st.pdf.title">Profil Ma'ahad Tahfidz Darul Furqon</span>
                    <div class="pdf-modal__tools">
                        <a class="pdf-modal__link" href="{{ asset('media/mtdf/profil/profil-mtdf.pdf') }}" target="_blank" rel="noopener" data-i18n="st.pdf.open">Buka di Tab Baharu</a>
                        <a class="pdf-modal__link" href="{{ asset('media/mtdf/profil/profil-mtdf.pdf') }}" download data-i18n="st.pdf.dl">Muat Turun</a>
                        <button type="button" class="pdf-modal__close" data-close-pdf aria-label="Tutup">&times;</button>
                    </div>
                </div>
                <div class="pdf-modal__body">
                    <iframe id="pdfFrame" title="Profil MTDF" src="about:blank" data-src="{{ asset('media/mtdf/profil/profil-mtdf.pdf') }}"></iframe>
                    <p class="pdf-modal__note" data-i18n="st.pdf.note">Jika dokumen tidak dipaparkan (biasa pada telefon), sila muat turun atau buka di tab baharu.</p>
                </div>
            </div>
        </div>

        <section id="visi-misi" class="vm-section">
            <div class="container">
                <div class="section-head" style="justify-content:center;text-align:center;flex-direction:column;gap:8px">
                    <div class="section-kicker" data-i18n="vm.kicker">Falsafah Kami</div>
                    <h2 data-i18n="vm.h">Visi &amp; Misi <span>Hala Tuju Darul Furqon</span></h2>
                </div>
                <div class="vm-grid reveal">
                    <article class="vm-card">
                        <div class="vm-icon">◎</div>
                        <h3 data-i18n="vm.visi.label">Visi</h3>
                        <p data-i18n="vm.visi.text">Menjadikan Al-Qur'an dan Hadis sebagai sumber rujukan, dengan tidak meninggalkan kecanggihan yang sedia ada sehingga mampu untuk memperlihatkan para huffaz yang berdaya saing.</p>
                    </article>
                    <article class="vm-card">
                        <div class="vm-icon">✦</div>
                        <h3 data-i18n="vm.misi.label">Misi</h3>
                        <p data-i18n="vm.misi.text">Melahirkan generasi Islamik, mampu berdaya saing mengikuti arus zaman semasa dengan tidak meninggalkan jati diri sebagai seorang Muslim yang bertaqwa dan berilmu.</p>
                    </article>
                    <article class="vm-card">
                        <div class="vm-icon">▣</div>
                        <h3 data-i18n="vm.objektif.label">Objektif</h3>
                        <p data-i18n="vm.objektif.text">Menjadikan MTDF sebagai sebuah pusat aktiviti keagamaan bagi mewujudkan suasana agama yang harmoni dan mesra masyarakat.</p>
                    </article>
                </div>
                <div class="vm-motto reveal" data-i18n="vm.motto">Beriman &middot; Berilmu &middot; Berakhlak</div>
            </div>
        </section>

        <section id="program">
            <div class="container programmes reveal">
                <h2 data-i18n="prog.h">Program Kami <span>Tawaran Pendidikan</span></h2>
                <div class="program-grid">
                    <article class="program-card">
                        <img class="photo" src="{{ asset('media/mtdf/program-quran.jpeg') }}" alt="Pelajar dalam sesi pembelajaran diniyah" loading="lazy">
                        <h3 data-i18n="prog1.h">Tahfizh Al-Qur'an</h3>
                        <p data-i18n="prog1.p">Program hafalan intensif dengan pembinaan bacaan, adab, dan muraja'ah.</p>
                    </article>
                    <article class="program-card">
                        <img class="photo" src="{{ asset('media/mtdf/program-digital.jpeg') }}" alt="Pelajar belajar menggunakan komputer" loading="lazy">
                        <h3 data-i18n="prog2.h">Akademik Berprestasi</h3>
                        <p data-i18n="prog2.p">Kurikulum kebangsaan dan diniyah yang disusun untuk prestasi berterusan.</p>
                    </article>
                    <article class="program-card">
                        <img class="photo" src="{{ asset('media/mtdf/program-co-curricular.jpeg') }}" alt="Pelajar mengikuti aktiviti ko-kurikulum di luar kelas" loading="lazy">
                        <h3 data-i18n="prog3.h">Diri &amp; Ko-Kurikulum</h3>
                        <p data-i18n="prog3.p">Aktiviti sukan, kepimpinan, bahasa, dan kemahiran hidup.</p>
                    </article>
                </div>
                <div style="display:flex;justify-content:center;margin-top:28px">
                    <a class="button ghost" href="{{ $wa }}" target="_blank" rel="noopener" data-i18n="prog.cta">Tanya Program Lengkap +</a>
                </div>
            </div>

            <div class="container curriculum reveal">
                <div class="section-head" style="justify-content:center;text-align:center;flex-direction:column;gap:8px">
                    <div class="section-kicker" data-i18n="cur.kicker">Kurikulum Tahfiz</div>
                    <h2 data-i18n="cur.h">Jadual Harian <span>Rutin Hafazan Pelajar</span></h2>
                </div>
                <div class="quran-classes reveal">
                    <div style="text-align:center">
                        <div class="section-kicker" style="color:var(--gold-600)" data-i18n="cur.q.kicker">Kelas Al-Quran</div>
                        <p class="daysched-lead" data-i18n="cur.q.lead">Pengajian Al-Quran mengikut tahap kemampuan pelajar &mdash; dari mengenal huruf sehingga menghafal.</p>
                    </div>
                    <div class="quran-tiers">
                        <article class="quran-tier">
                            <span class="tier-num">01</span>
                            <h4 data-i18n="cur.q.iqra.h">Iqra'</h4>
                            <p data-i18n="cur.q.iqra.p">Peringkat permulaan bagi pelajar yang baru belajar membaca Al-Quran.</p>
                        </article>
                        <article class="quran-tier">
                            <span class="tier-num">02</span>
                            <h4 data-i18n="cur.q.naz.h">Nazirah</h4>
                            <p data-i18n="cur.q.naz.p">Bagi pelajar yang sedang melancarkan bacaan Al-Quran.</p>
                        </article>
                        <article class="quran-tier">
                            <span class="tier-num">03</span>
                            <h4 data-i18n="cur.q.haf.h">Hafazan</h4>
                            <p data-i18n="cur.q.haf.p">Bagi pelajar yang mahir membaca Al-Quran dan dibolehkan menghafal.</p>
                        </article>
                    </div>
                </div>

                <div style="text-align:center;margin-top:40px">
                    <div class="section-kicker" style="color:var(--gold-600)" data-i18n="cur.subj">Mata Pelajaran</div>
                </div>
                <div class="subjects">
                    <span class="subject-chip" data-i18n="cur.quran">Al-Quran</span>
                    <span class="subject-chip">Feqah</span>
                    <span class="subject-chip">Tauhid</span>
                    <span class="subject-chip">Akhlak</span>
                    <span class="subject-chip">Sirah</span>
                    <span class="subject-chip">Jawi</span>
                    <span class="subject-chip" data-i18n="cur.solat">Bacaan Solat</span>
                    <span class="subject-chip" data-i18n="cur.arab">Bahasa Arab</span>
                    <span class="subject-chip" data-i18n="cur.melayu">Bahasa Melayu</span>
                    <span class="subject-chip" data-i18n="cur.english">Bahasa Inggeris</span>
                    <span class="subject-chip" data-i18n="cur.computer">Komputer</span>
                </div>

                <div class="daysched-head reveal">
                    <div class="section-kicker" style="color:var(--gold-600)" data-i18n="cur.day.kicker">Rutin Harian Penuh</div>
                    <p class="daysched-lead" data-i18n="cur.day.lead">Hari pelajar disusun seimbang &mdash; ibadah, hafazan Al-Qur'an, ilmu, riadah dan rehat, dari sebelum Subuh hingga malam.</p>
                    <span class="daysched-fast" data-i18n="cur.day.fast">Isnin &amp; Khamis &mdash; puasa sunat</span>
                </div>
                <div class="daysched-grid reveal">
                    <article class="daysched-block">
                        <header><h4 data-i18n="cur.day.p1">Dinihari &amp; Subuh</h4><span class="daysched-range">05:00&ndash;06:45</span></header>
                        <ul>
                            <li><span class="t">05:00</span><span class="a" data-i18n="cur.day.1">Bangun, mandi, solat Tahajud &amp; mengulang hafazan sementara menanti Subuh.</span></li>
                            <li><span class="t">06:00</span><span class="a" data-i18n="cur.day.2">Solat Subuh berjemaah &amp; zikir bacaan Ayatul Kihrzi.</span></li>
                            <li><span class="t">06:45</span><span class="a" data-i18n="cur.day.3">Kelas Sabaq &mdash; hafazan baharu.</span></li>
                        </ul>
                    </article>
                    <article class="daysched-block">
                        <header><h4 data-i18n="cur.day.p2">Sesi Pagi</h4><span class="daysched-range">08:00&ndash;11:30</span></header>
                        <ul>
                            <li><span class="t">08:00</span><span class="a" data-i18n="cur.day.4">Solat Dhuha, khidmat &amp; sarapan.</span></li>
                            <li><span class="t">09:00</span><span class="a" data-i18n="cur.day.5">Kelas Sabqi &mdash; ulangan hafazan.</span></li>
                            <li><span class="t">11:30</span><span class="a" data-i18n="cur.day.6">Rehat (qailulah).</span></li>
                        </ul>
                    </article>
                    <article class="daysched-block">
                        <header><h4 data-i18n="cur.day.p3">Tengah Hari</h4><span class="daysched-range">13:30&ndash;14:00</span></header>
                        <ul>
                            <li><span class="t">13:30</span><span class="a" data-i18n="cur.day.7">Solat Zohor berjemaah &amp; makan tengah hari.</span></li>
                            <li><span class="t">14:00</span><span class="a" data-i18n="cur.day.8">Kelas Manzil &amp; kelas Fardhu Ain.</span></li>
                        </ul>
                    </article>
                    <article class="daysched-block">
                        <header><h4 data-i18n="cur.day.p4">Sesi Petang</h4><span class="daysched-range">16:30&ndash;18:30</span></header>
                        <ul>
                            <li><span class="t">16:30</span><span class="a" data-i18n="cur.day.9">Solat Asar berjemaah &amp; zikir Ayatul Kihrzi.</span></li>
                            <li><span class="t">17:00</span><span class="a" data-i18n="cur.day.10">Riadah &amp; sukan.</span></li>
                            <li><span class="t">18:30</span><span class="a" data-i18n="cur.day.11">Mandi &amp; makan petang.</span></li>
                        </ul>
                    </article>
                    <article class="daysched-block">
                        <header><h4 data-i18n="cur.day.p5">Sesi Malam</h4><span class="daysched-range">19:30&ndash;23:00</span></header>
                        <ul>
                            <li><span class="t">19:30</span><span class="a" data-i18n="cur.day.12">Solat Maghrib berjemaah &amp; kelas hafazan.</span></li>
                            <li><span class="t">21:30</span><span class="a" data-i18n="cur.day.13">Solat Isyak berjemaah, bacaan Surah Al-Mulk, ta'lim &amp; musyawarah harian.</span></li>
                            <li><span class="t">22:00</span><span class="a" data-i18n="cur.day.14">Kelas Muraja'ah.</span></li>
                            <li><span class="t">23:00</span><span class="a" data-i18n="cur.day.15">Rehat malam.</span></li>
                        </ul>
                    </article>
                </div>

                <div class="weekend-activity reveal">
                    <div class="section-kicker" style="color:var(--gold-600)" data-i18n="cur.wk.kicker">Aktiviti Hujung Minggu</div>
                    <span class="weekend-note" data-i18n="cur.wk.note">Khas pelajar asrama</span>
                    <div class="weekend-items">
                        <span class="weekend-item"><span class="wk-ic">◎</span><span data-i18n="cur.wk.memanah">Memanah</span></span>
                        <span class="weekend-item"><span class="wk-ic">✦</span><span data-i18n="cur.wk.riadah">Riadah &amp; Sukan</span></span>
                    </div>
                </div>
            </div>

            <div class="container stats reveal">
                <div class="stat"><div class="icon">☷</div><div><strong>40</strong><span data-i18n="stat1">Pelajar Lelaki (Banin)</span></div></div>
                <div class="stat"><div class="icon">❁</div><div><strong>20</strong><span data-i18n="stat2">Pelajar Perempuan (Banat)</span></div></div>
                <div class="stat"><div class="icon">▣</div><div><strong>4</strong><span data-i18n="stat3">Guru Hafazan &amp; Fardhu Ain</span></div></div>
                <div class="stat"><div class="icon">⌂</div><div><strong>2022</strong><span data-i18n="stat4">Tahun Penubuhan</span></div></div>
            </div>
        </section>

        <section class="values">
            <div class="container">
                <div class="section-head" style="justify-content:center;text-align:center;flex-direction:column;gap:8px;margin-bottom:14px">
                    <div class="section-kicker" style="color:var(--gold-400)" data-i18n="lp.kicker">Laluan Pendidikan</div>
                    <h2 style="color:#fff" data-i18n="lp.h">Lanjutan Pengajian <span>Dari Tanah Air ke Timur Tengah</span></h2>
                    <p style="color:rgba(255,255,255,.8);max-width:640px;margin:6px auto 0" data-i18n="lp.intro">Lulusan MTDF berpeluang menyambung pengajian ke peringkat lebih tinggi, dari dalam negara hingga ke Timur Tengah.</p>
                </div>
                <div class="pathway reveal">
                    <div class="path-steps">
                        <article class="path-step">
                            <div class="path-num">1</div>
                            <span class="path-tag" data-i18n="lp.step1.tag">Peringkat Asas</span>
                            <h3 data-i18n="lp.step1.h">Ma'ahad Tahfidz Darul Furqon</h3>
                            <p data-i18n="lp.step1.p">Pulau Indah, Selangor</p>
                        </article>
                        <div class="path-arrow" aria-hidden="true">→</div>
                        <article class="path-step">
                            <div class="path-num">2</div>
                            <span class="path-tag" data-i18n="lp.step2.tag">Pendalaman</span>
                            <h3 data-i18n="lp.step2.h">Pondok Pesantren Temboro</h3>
                            <p data-i18n="lp.step2.p">Jawa Timur, Indonesia</p>
                        </article>
                        <div class="path-arrow" aria-hidden="true">→</div>
                        <article class="path-step">
                            <div class="path-num">3</div>
                            <span class="path-tag" data-i18n="lp.step3.tag">Pengajian Tinggi</span>
                            <h3 data-i18n="lp.step3.h">Timur Tengah</h3>
                            <p data-i18n="lp.step3.p">Sudan &middot; Mesir &middot; Jordan</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section id="kegiatan">
            <div class="container campus">
                <div class="campus-copy">
                    <div class="section-kicker" data-i18n="keg.kicker">Kehidupan di Darul Furqon</div>
                    <h2 data-i18n="keg.h">Kegiatan Kami <span>Belajar Di Luar Kelas</span></h2>
                    <p data-i18n="keg.p1">
                        Pendidikan berlangsung melalui halaqah, ibadah berjemaah, lawatan ilmu,
                        aktiviti fizikal, dan kebersamaan bersama komuniti.
                    </p>
                    <p data-i18n="keg.p2">
                        Setiap pengalaman dirancang untuk membina disiplin, keyakinan diri,
                        ukhuwah, dan akhlak yang hidup dalam keseharian pelajar.
                    </p>
                    <a class="button dark" href="{{ url('/galeri') }}" data-i18n="keg.cta">Lihat Galeri Penuh +</a>
                </div>
                <div class="campus-gallery">
                    <figure class="gallery-main">
                        <img src="{{ asset('media/mtdf/activity-community.jpeg') }}" alt="Kebersamaan pelajar, guru, dan keluarga Maahad Tahfidz Darul Furqon" loading="lazy">
                        <figcaption data-i18n="keg.cap1">Komuniti &amp; Apresiasi</figcaption>
                    </figure>
                    <div class="gallery-stack">
                        <figure class="gallery-small">
                            <img src="{{ asset('media/mtdf/activity-prayer.jpeg') }}" alt="Pelajar berdoa bersama dalam kegiatan madrasah" loading="lazy">
                            <figcaption data-i18n="keg.cap2">Ibadah &amp; Ukhuwah</figcaption>
                        </figure>
                        <figure class="gallery-small">
                            <img src="{{ asset('media/mtdf/activity-trip.jpeg') }}" alt="Lawatan pendidikan pelajar Maahad Tahfidz Darul Furqon" loading="lazy">
                            <figcaption data-i18n="keg.cap3">Lawatan Pendidikan</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <section id="galeri-video" class="media-section">
            <div class="container">
                <div class="media-heading">
                    <div class="section-kicker" data-i18n="vid.kicker">Galeri Kegiatan</div>
                    <h2 data-i18n="vid.h">Detik Bermakna <span>Membentuk Peribadi</span></h2>
                    <p data-i18n="vid.p">Rakaman ringkas kehidupan pelajar dalam pembelajaran, ibadah, rekreasi, dan pembinaan kebersamaan.</p>
                </div>
                <div class="video-grid reveal">
                    <figure class="video-card">
                        <video controls preload="metadata" playsinline poster="{{ asset('media/mtdf/activity-prayer.jpeg') }}">
                            <source src="{{ asset('media/mtdf/video-halaqah.mp4') }}" type="video/mp4">
                            Browser anda tidak menyokong pemutaran video.
                        </video>
                        <figcaption data-i18n="vid.cap1">Halaqah &amp; Pembinaan Ilmu <span>Pembelajaran interaktif dalam suasana ukhuwah.</span></figcaption>
                    </figure>
                    <figure class="video-card">
                        <video controls preload="metadata" playsinline poster="{{ asset('media/mtdf/activity-swimming.jpeg') }}">
                            <source src="{{ asset('media/mtdf/video-swimming.mp4') }}" type="video/mp4">
                            Browser anda tidak menyokong pemutaran video.
                        </video>
                        <figcaption data-i18n="vid.cap2">Rekreasi &amp; Kecergasan <span>Membina keberanian, kesihatan, dan kerjasama pelajar.</span></figcaption>
                    </figure>
                </div>
            </div>
        </section>

        <section class="values">
            <div class="container">
                <h2 data-i18n="val.h">Nilai Teras Kami <span>Pegangan Kami</span></h2>
                <div class="value-grid reveal">
                    <div class="value"><div class="icon">◈</div><span data-i18n="val.iman"><strong>Iman</strong>Keyakinan</span></div>
                    <div class="value"><div class="icon">▤</div><span data-i18n="val.ilmu"><strong>Ilmu</strong>Pengetahuan</span></div>
                    <div class="value"><div class="icon">✦</div><span data-i18n="val.akhlak"><strong>Akhlak</strong>Peribadi</span></div>
                    <div class="value"><div class="icon">◷</div><span data-i18n="val.disiplin"><strong>Disiplin</strong>Keteraturan</span></div>
                    <div class="value"><div class="icon">✺</div><span data-i18n="val.ikhlas"><strong>Ikhlas</strong>Ketulusan</span></div>
                    <div class="value"><div class="icon">☉</div><span data-i18n="val.amanah"><strong>Amanah</strong>Tanggungjawab</span></div>
                </div>
            </div>
        </section>

        <section id="infak" class="infak-section">
            <div class="container infak-grid reveal">
                <figure class="infak-poster">
                    <a href="{{ asset('media/mtdf/donasi-qr-poster.jpg') }}" target="_blank" rel="noopener" aria-label="Buka poster QR donasi">
                        <img src="{{ asset('media/mtdf/donasi-qr-poster.jpg') }}" alt="Poster QR DuitNow untuk infak &amp; sedekah Maahad Tahfidz Darul Furqon" loading="lazy">
                    </a>
                    <figcaption data-i18n="inf.cap">Ketik untuk paparan penuh &amp; imbas QR</figcaption>
                </figure>
                <div class="infak-copy">
                    <div class="section-kicker" data-i18n="inf.kicker">Wakaf &middot; Infak &middot; Sedekah Jariah</div>
                    <h2 data-i18n="inf.h">Sokong Perjalanan Tahfiz <span>Amal Yang Terus Mengalir</span></h2>
                    <p class="infak-lead" data-i18n="inf.lead">MTDF dibina atas wakaf tanah dan sumbangan masyarakat. Setiap infak anda menjadi sedekah jariah &mdash; pahalanya terus mengalir selama Al-Qur'an dihafal dan diamalkan pelajar.</p>
                    <blockquote class="infak-hadith" data-i18n="inf.hadith">"Apabila mati anak Adam, terputuslah amalannya kecuali tiga perkara: sedekah jariah, ilmu yang dimanfaatkan, dan anak soleh yang mendoakannya."<span>&mdash; Hadis Riwayat Muslim</span></blockquote>
                    <ul class="infak-points">
                        <li data-i18n="inf.p1">Membina generasi huffaz Al-Qur'an</li>
                        <li data-i18n="inf.p2">Menyokong keperluan harian &amp; pendidikan pelajar</li>
                        <li data-i18n="inf.p3">Pahala berterusan sebagai sedekah jariah</li>
                    </ul>
                    <div class="infak-actions">
                        <a class="button gold" href="{{ asset('media/mtdf/donasi-qr-poster.jpg') }}" download data-i18n="inf.dl">Muat Turun QR +</a>
                        <a class="button dark" href="{{ $wa }}" target="_blank" rel="noopener" data-i18n="inf.wa">Hubungi untuk Wakaf +</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-wrap">
            <div class="container cta reveal">
                <div>
                    <div class="section-kicker" data-i18n="cta.kicker">Sertai Perjalanan Bermakna</div>
                    <h2 data-i18n="cta.h">Sertai Perjalanan Bermakna <span>Bersama Darul Furqon</span></h2>
                    <p data-i18n="cta.p">
                        Bersama Maahad Tahfidz Darul Furqon, anak-anak dibina bukan hanya untuk lulus ujian,
                        tetapi untuk membawa cahaya ilmu, iman, dan akhlak ke masyarakat.
                    </p>
                    <a class="button gold" href="{{ $wa }}" target="_blank" rel="noopener" data-i18n="cta.apply">Mohon Sekarang +</a>
                </div>
                <div class="quote" data-i18n="cta.quote">
                    "Ya Tuhanku, tambahkanlah kepadaku ilmu."
                    <br><small>Surah Taha: 114</small>
                </div>
            </div>
        </section>

        <section id="lokasi">
            <div class="container contact-band reveal">
                <div class="contact-card">
                    <h2 data-i18n="con.h">Hubungi Kami <span>Lokasi &amp; Pertanyaan</span></h2>
                    <p data-i18n="con.p">Untuk pertanyaan pendaftaran, lawatan kampus, atau maklumat program, hubungi pihak Maahad melalui WhatsApp atau email rasmi.</p>
                    <div class="contact-list">
                        <a href="{{ $wa }}" target="_blank" rel="noopener">WhatsApp: +60 17-433 3652</a>
                        <a href="mailto:info@darulfurqon.my" data-i18n="con.email1">Email rasmi: info@darulfurqon.my</a>
                        <a href="mailto:tahfizdarulfurqon@gmail.com" data-i18n="con.email2">Email alternatif: tahfizdarulfurqon@gmail.com</a>
                        <a href="https://maps.google.com/?q=Maahad+Tahfidz+Darul+Furqon+Kampung+Sungai+Pinang+Pulau+Indah+Selangor" target="_blank" rel="noopener">Google Maps: Maahad Tahfidz Darul Furqon</a>
                    </div>
                    <a class="button gold" href="{{ $wa }}" target="_blank" rel="noopener" data-i18n="con.chat">Chat WhatsApp +</a>
                </div>
                <div class="map-frame">
                    <iframe
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://maps.google.com/maps?q=Maahad+Tahfidz+Darul+Furqon+Kampung+Sungai+Pinang+Pulau+Indah+Selangor&z=15&output=embed"
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
                        <span class="brand-emblem"><img src="{{ asset('images/darul-furqon-logo-full.png') }}" alt="Logo Maahad Tahfidz Darul Furqon"></span>
                        <span>Maahad Tahfidz<small>Darul Furqon</small></span>
                    </a>
                    <p data-i18n="foot.tagline">Membina pendidikan Islam yang melahirkan generasi berilmu, beriman, dan beradab.</p>
                </div>
                <div>
                    <h4 data-i18n="foot.quick">Pautan Pantas</h4>
                    <ul>
                        <li><a href="#" data-i18n="nav.home">Utama</a></li>
                        <li><a href="#tentang" data-i18n="nav.about">Tentang Kami</a></li>
                        <li><a href="#program" data-i18n="nav.programmes">Program</a></li>
                        <li><a href="#kegiatan" data-i18n="nav.activities">Kegiatan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 data-i18n="foot.services">Unit Layanan</h4>
                    <ul>
                        <li><a href="{{ $wa }}" target="_blank" rel="noopener" data-i18n="foot.reg">Pendaftaran Pelajar</a></li>
                        <li><a href="{{ $wa }}" target="_blank" rel="noopener" data-i18n="foot.fees">Yuran &amp; Pembayaran</a></li>
                        <li><a href="#galeri-video" data-i18n="foot.gallery">Galeri Kegiatan</a></li>
                        <li><a href="{{ $wa }}" target="_blank" rel="noopener" data-i18n="foot.faq">Soalan Lazim (FAQ)</a></li>
                    </ul>
                </div>
                <div>
                    <h4 data-i18n="nav.contact">Hubungi Kami</h4>
                    <p>Maahad Tahfidz Darul Furqon<br>Lot 5713, Jalan Dato' Harun<br>Kampung Sungai Pinang, 42920 Pulau Indah<br>Pelabuhan Klang, Selangor</p>
                    <p><a href="{{ $waPlain }}" target="_blank" rel="noopener">+60 17-433 3652</a><br><a href="mailto:info@darulfurqon.my">info@darulfurqon.my</a><br><a href="mailto:tahfizdarulfurqon@gmail.com">tahfizdarulfurqon@gmail.com</a></p>
                </div>
            </div>
            <div class="copyright" data-i18n="foot.copyright">© {{ date('Y') }} Maahad Tahfidz Darul Furqon. Hak cipta terpelihara.</div>
            <div class="powered-by">Powered by <a href="https://morabangun.com" target="_blank" rel="noopener">morabangun.com</a></div>
        </div>
    </footer>
    <div class="fab-stack">
        <button type="button" class="fab fab-top" id="scrollTop" aria-label="Kembali ke atas" title="Ke atas">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19V5M5 12l7-7 7 7"/></svg>
        </button>
        <a class="fab fab-infak" href="#infak" aria-label="Infak &amp; Sedekah" title="Infak &amp; Sedekah">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
        </a>
        <a class="fab fab-wa" href="{{ $wa }}" target="_blank" rel="noopener" aria-label="WhatsApp" title="WhatsApp">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38c1.45.79 3.08 1.2 4.79 1.2h.01c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm5.8 14.13c-.24.68-1.42 1.31-1.95 1.35-.5.05-.99.24-3.33-.7-2.82-1.13-4.6-4.02-4.74-4.2-.14-.18-1.13-1.5-1.13-2.86 0-1.36.71-2.03.96-2.31.25-.28.55-.35.73-.35.18 0 .37 0 .53.01.17.01.4-.06.62.48.24.56.81 1.96.88 2.1.07.14.12.31.02.49-.09.18-.14.29-.28.45-.14.16-.29.36-.42.48-.14.14-.28.29-.12.57.16.28.71 1.17 1.53 1.9 1.05.94 1.94 1.23 2.22 1.37.28.14.44.12.6-.07.18-.21.69-.8.87-1.08.18-.28.37-.23.62-.14.25.09 1.6.76 1.87.9.28.14.46.21.53.32.07.12.07.68-.17 1.36z"/></svg>
        </a>
    </div>
</div>
<script>
    (function () {
        // ---------- i18n (MS / EN / AR) ----------
        var I18N = {
            ms: {
                'nav.home':`Utama`,'nav.about':`Tentang Kami`,'nav.founder':`Pengasas`,'nav.story':`Sejarah`,'nav.programmes':`Program`,'nav.activities':`Kegiatan`,'nav.gallery':`Galeri`,'nav.infak':`Infak`,'nav.contact':`Hubungi Kami`,'nav.apply':`Mohon Sekarang +`,
                'inf.kicker':`Wakaf &middot; Infak &middot; Sedekah Jariah`,'inf.h':`Sokong Perjalanan Tahfiz <span>Amal Yang Terus Mengalir</span>`,'inf.lead':`MTDF dibina atas wakaf tanah dan sumbangan masyarakat. Setiap infak anda menjadi sedekah jariah &mdash; pahalanya terus mengalir selama Al-Qur'an dihafal dan diamalkan pelajar.`,'inf.hadith':`"Apabila mati anak Adam, terputuslah amalannya kecuali tiga perkara: sedekah jariah, ilmu yang dimanfaatkan, dan anak soleh yang mendoakannya."<span>&mdash; Hadis Riwayat Muslim</span>`,'inf.p1':`Membina generasi huffaz Al-Qur'an`,'inf.p2':`Menyokong keperluan harian &amp; pendidikan pelajar`,'inf.p3':`Pahala berterusan sebagai sedekah jariah`,'inf.cap':`Ketik untuk paparan penuh &amp; imbas QR`,'inf.dl':`Muat Turun QR +`,'inf.wa':`Hubungi untuk Wakaf +`,
                'hero.eyebrow':`Pendidikan Islam Moden`,
                'hero.title':`Ilmu, Iman, Amal Menerangi Dunia <span>Membina generasi Qur'ani sejak 2022.</span>`,
                'hero.lead':`Maahad Tahfidz Darul Furqon membina generasi yang kuat dalam Al-Qur'an, matang dalam ilmu, santun dalam adab, dan siap memberi manfaat bagi umat.`,
                'hero.cta1':`Kenali Kami +`,'hero.cta2':`Lihat Program +`,'hero.label':`Halaqah Al-Qur'an &amp; Pembinaan Adab`,
                'pillar1.h':`Pendidikan Bersepadu`,'pillar1.p':`Gabungan ilmu dunia dan ukhrawi secara seimbang.`,
                'pillar2.h':`Akhlak &amp; Kepimpinan`,'pillar2.p':`Membangun peribadi mulia dan kesediaan memimpin.`,
                'pillar3.h':`Persekitaran Islami`,'pillar3.p':`Suasana belajar yang kondusif dan berakar nilai Islam.`,
                'pillar4.h':`Komuniti &amp; Kerjasama`,'pillar4.p':`Kolaborasi bersama ibu bapa dan komuniti.`,
                'pillar5.h':`Pembangunan Holistik`,'pillar5.p':`Menguatkan potensi intelektual, ruhani, emosi, dan fizikal.`,
                'founder.caption':`Ustadz Umar Kurniawan bin Bustami<span>Pengasas</span>`,'founder.kicker':`Pengasas &amp; Perintis`,'founder.h':`Pengasas Kami <span>Peneraju Darul Furqon</span>`,'founder.role':`Pengasas Maahad Tahfidz Darul Furqon`,
                'founder.p1':`Ma'ahad Tahfidz Darul Furqon ditubuhkan pada Mac 2022 di Kampung Sungai Pinang, Pulau Indah, Selangor — dirintis Ustaz Umar Kurniawan bin Bustami atas wakaf tanah Puan Hajah Salbiah binti Haji Abdul Hamid.`,
                'founder.p2':`Bermula dengan 20 orang pelajar dan sokongan masyarakat setempat, MTDF terus berkembang membina generasi Qur'ani yang berilmu, beriman, dan berakhlak.`,
                'founder.quote':`"Didiklah anak-anak dengan Al-Qur'an, kerana padanya cahaya dunia dan akhirat."`,
                'vm.kicker':`Falsafah Kami`,'vm.h':`Visi &amp; Misi <span>Hala Tuju Darul Furqon</span>`,
                'vm.visi.label':`Visi`,'vm.visi.text':`Menjadikan Al-Qur'an dan Hadis sebagai sumber rujukan, dengan tidak meninggalkan kecanggihan yang sedia ada sehingga mampu untuk memperlihatkan para huffaz yang berdaya saing.`,
                'vm.misi.label':`Misi`,'vm.misi.text':`Melahirkan generasi Islamik, mampu berdaya saing mengikuti arus zaman semasa dengan tidak meninggalkan jati diri sebagai seorang Muslim yang bertaqwa dan berilmu.`,
                'vm.objektif.label':`Objektif`,'vm.objektif.text':`Menjadikan MTDF sebagai sebuah pusat aktiviti keagamaan bagi mewujudkan suasana agama yang harmoni dan mesra masyarakat.`,
                'vm.motto':`Beriman &middot; Berilmu &middot; Berakhlak`,
                'st.kicker':`Mengenali Darul Furqon`,'st.h':`Sejarah &amp; Perjalanan <span>Dari Sebidang Wakaf Menjadi Ma'ahad</span>`,
                'st.tab1':`Sejarah Penubuhan`,'st.tab2':`Barisan Peneraju`,'st.tab3':`Lawatan Pendidikan`,'st.tab4':`Aktiviti Riadah`,
                'st.k.role':`Pewakaf Tanah`,'st.k.badge':`Sejak Mac 2022`,
                'st.k.lead':`Perjalanan Ma'ahad Tahfidz Darul Furqon bermula daripada sebuah hasrat yang tulus &mdash; keinginan seorang ibu agar tanah miliknya menjadi tapak menyemai para penghafal Al-Qur'an.`,
                'st.k.m1.h':`Hasrat Seorang Pewakaf`,'st.k.m1.p':`Puan Hajah Salbiah binti Haji Abdul Hamid mengimpikan sebuah Ma'ahad Tahfidz dibina di atas tanah miliknya di Kampung Sungai Pinang, Pulau Indah.`,
                'st.k.m2.h':`Amanah Diperjuangkan`,'st.k.m2.p':`Hasrat itu disampaikan kepada Ustaz Umar Kurniawan, lalu beliau memulakan usaha penubuhan dengan sokongan beberapa orang sahabat.`,
                'st.k.m3.h':`Mac 2022 &mdash; MTDF Berdiri`,'st.k.m3.p':`Berbekalkan kewangan yang terhad dan hasil sumbangan orang ramai, MTDF ditubuhkan dengan seramai 20 orang pelajar.`,
                'st.k.m4.h':`Berkembang Bersama Masyarakat`,'st.k.m4.p':`Alhamdulillah, sehingga kini MTDF terus mendapat sokongan masyarakat Pulau Indah, Klang dalam mengembangkan syiar Islam.`,
                'st.p.lead':`Sebuah amanah yang digerakkan oleh barisan peneraju yang berpengalaman dalam pendidikan tahfiz dan khidmat masyarakat.`,
                'st.p.umar.role':`Pengasas`,'st.p.umar.p':`Lahir 3 April 1987 di Medan, Indonesia. Alumni Pondok Pesantren Temboro dan pengajian agama di Sumatera; berpengalaman sebagai guru tahfiz dan warden sejak 2009.`,
                'st.p.haris.role':`Pengerusi`,'st.p.haris.p':`Lahir 24 Mei 1970 di Klang, Selangor. Diploma Kejuruteraan Awam, UiTM Shah Alam; bekas Ketua Kampung Sungai Pinang (2008&ndash;2018).`,
                'st.p.nur.role':`Mudirah`,'st.p.nur.p':`Lahir 20 Ogos 1993 di Alor Setar, Kedah. Alumni Institut Pondok Pasir Tumbuh, Kelantan; berpengalaman mengajar di ma'ahad tahfiz dan sekolah agama.`,
                'st.p.note':`Carta organisasi penuh MTDF &mdash; Pengerusi, Timbalan, Bendahari, Setiausaha dan AJK &mdash; boleh dilihat dalam Profil Penuh (PDF) di bawah.`,
                'st.l.lead':`Pembelajaran diperluas melampaui bilik darjah melalui lawatan ilmu yang membina pengalaman dan wawasan pelajar.`,
                'st.l.g1':`Ladang Alam Warisan, Negeri Sembilan`,'st.l.g2':`Pondok Pesantren Temboro, Jawa Timur`,
                'st.r.lead':`Cergas jiwa dan raga &mdash; pelajar dibina melalui sukan sunnah dan riadah kebersamaan yang mengeratkan ukhuwah.`,
                'st.r.g1':`Sukan Memanah`,'st.r.g2':`Riadah Bersama Masyarakat`,
                'st.pdf.btn':`Lihat Profil Penuh (PDF) +`,'st.pdf.title':`Profil Ma'ahad Tahfidz Darul Furqon`,'st.pdf.open':`Buka di Tab Baharu`,'st.pdf.dl':`Muat Turun`,
                'st.pdf.note':`Jika dokumen tidak dipaparkan (biasa pada telefon), sila muat turun atau buka di tab baharu.`,
                'lp.kicker':`Laluan Pendidikan`,'lp.h':`Lanjutan Pengajian <span>Dari Tanah Air ke Timur Tengah</span>`,'lp.intro':`Lulusan MTDF berpeluang menyambung pengajian ke peringkat lebih tinggi, dari dalam negara hingga ke Timur Tengah.`,
                'lp.step1.tag':`Peringkat Asas`,'lp.step2.tag':`Pendalaman`,'lp.step3.tag':`Pengajian Tinggi`,'lp.step3.h':`Timur Tengah`,'lp.step3.p':`Sudan &middot; Mesir &middot; Jordan`,
                'cur.kicker':`Kurikulum Tahfiz`,'cur.h':`Jadual Harian <span>Rutin Hafazan Pelajar</span>`,
                'cur.s1.h':`Hafalan Baru`,'cur.s1.p':`Sesi malam menghafal halaman baharu, disemak guru keesokan hari.`,
                'cur.s2.h':`Juzu' Baru`,'cur.s2.p':`Mengulang juzu' yang baru dihafal bagi memantapkan hafazan.`,
                'cur.s3.h':`Juzu' Lama`,'cur.s3.p':`Mengulang juzu'-juzu' lama mengikut turutan untuk kekal mantap.`,
                'cur.subj':`Mata Pelajaran`,'cur.english':`Bahasa Inggeris`,'cur.computer':`Komputer`,'cur.quran':`Al-Quran`,'cur.solat':`Bacaan Solat`,'cur.arab':`Bahasa Arab`,'cur.melayu':`Bahasa Melayu`,
                'cur.q.kicker':`Kelas Al-Quran`,'cur.q.lead':`Pengajian Al-Quran mengikut tahap kemampuan pelajar &mdash; dari mengenal huruf sehingga menghafal.`,'cur.q.iqra.h':`Iqra'`,'cur.q.iqra.p':`Peringkat permulaan bagi pelajar yang baru belajar membaca Al-Quran.`,'cur.q.naz.h':`Nazirah`,'cur.q.naz.p':`Bagi pelajar yang sedang melancarkan bacaan Al-Quran.`,'cur.q.haf.h':`Hafazan`,'cur.q.haf.p':`Bagi pelajar yang mahir membaca Al-Quran dan dibolehkan menghafal.`,
                'cur.wk.kicker':`Aktiviti Hujung Minggu`,'cur.wk.note':`Khas pelajar asrama`,'cur.wk.memanah':`Memanah`,'cur.wk.riadah':`Riadah &amp; Sukan`,
                'cur.day.kicker':`Rutin Harian Penuh`,'cur.day.lead':`Hari pelajar disusun seimbang &mdash; ibadah, hafazan Al-Qur'an, ilmu, riadah dan rehat, dari sebelum Subuh hingga malam.`,'cur.day.fast':`Isnin &amp; Khamis &mdash; puasa sunat`,
                'cur.day.p1':`Dinihari &amp; Subuh`,'cur.day.p2':`Sesi Pagi`,'cur.day.p3':`Tengah Hari`,'cur.day.p4':`Sesi Petang`,'cur.day.p5':`Sesi Malam`,
                'cur.day.1':`Bangun, mandi, solat Tahajud &amp; mengulang hafazan sementara menanti Subuh.`,'cur.day.2':`Solat Subuh berjemaah &amp; zikir bacaan Ayatul Kihrzi.`,'cur.day.3':`Kelas Sabaq &mdash; hafazan baharu.`,
                'cur.day.4':`Solat Dhuha, khidmat &amp; sarapan.`,'cur.day.5':`Kelas Sabqi &mdash; ulangan hafazan.`,'cur.day.6':`Rehat (qailulah).`,
                'cur.day.7':`Solat Zohor berjemaah &amp; makan tengah hari.`,'cur.day.8':`Kelas Manzil &amp; kelas Fardhu Ain.`,
                'cur.day.9':`Solat Asar berjemaah &amp; zikir Ayatul Kihrzi.`,'cur.day.10':`Riadah &amp; sukan.`,'cur.day.11':`Mandi &amp; makan petang.`,
                'cur.day.12':`Solat Maghrib berjemaah &amp; kelas hafazan.`,'cur.day.13':`Solat Isyak berjemaah, bacaan Surah Al-Mulk, ta'lim &amp; musyawarah harian.`,'cur.day.14':`Kelas Muraja'ah.`,'cur.day.15':`Rehat malam.`,
                'prog.h':`Program Kami <span>Tawaran Pendidikan</span>`,
                'prog1.h':`Tahfizh Al-Qur'an`,'prog1.p':`Program hafalan intensif dengan pembinaan bacaan, adab, dan muraja'ah.`,
                'prog2.h':`Akademik Berprestasi`,'prog2.p':`Kurikulum kebangsaan dan diniyah yang disusun untuk prestasi berterusan.`,
                'prog3.h':`Diri &amp; Ko-Kurikulum`,'prog3.p':`Aktiviti sukan, kepimpinan, bahasa, dan kemahiran hidup.`,'prog.cta':`Tanya Program Lengkap +`,
                'stat1':`Pelajar Lelaki (Banin)`,'stat2':`Pelajar Perempuan (Banat)`,'stat3':`Guru Hafazan &amp; Fardhu Ain`,'stat4':`Tahun Penubuhan`,
                'keg.kicker':`Kehidupan di Darul Furqon`,'keg.h':`Kegiatan Kami <span>Belajar Di Luar Kelas</span>`,
                'keg.p1':`Pendidikan berlangsung melalui halaqah, ibadah berjemaah, lawatan ilmu, aktiviti fizikal, dan kebersamaan bersama komuniti.`,
                'keg.p2':`Setiap pengalaman dirancang untuk membina disiplin, keyakinan diri, ukhuwah, dan akhlak yang hidup dalam keseharian pelajar.`,
                'keg.cta':`Lihat Galeri Penuh +`,'keg.cap1':`Komuniti &amp; Apresiasi`,'keg.cap2':`Ibadah &amp; Ukhuwah`,'keg.cap3':`Lawatan Pendidikan`,
                'vid.kicker':`Galeri Kegiatan`,'vid.h':`Detik Bermakna <span>Membentuk Peribadi</span>`,'vid.p':`Rakaman ringkas kehidupan pelajar dalam pembelajaran, ibadah, rekreasi, dan pembinaan kebersamaan.`,
                'vid.cap1':`Halaqah &amp; Pembinaan Ilmu <span>Pembelajaran interaktif dalam suasana ukhuwah.</span>`,'vid.cap2':`Rekreasi &amp; Kecergasan <span>Membina keberanian, kesihatan, dan kerjasama pelajar.</span>`,
                'val.h':`Nilai Teras Kami <span>Pegangan Kami</span>`,'val.iman':`<strong>Iman</strong>Keyakinan`,'val.ilmu':`<strong>Ilmu</strong>Pengetahuan`,'val.akhlak':`<strong>Akhlak</strong>Peribadi`,'val.disiplin':`<strong>Disiplin</strong>Keteraturan`,'val.ikhlas':`<strong>Ikhlas</strong>Ketulusan`,'val.amanah':`<strong>Amanah</strong>Tanggungjawab`,
                'cta.kicker':`Sertai Perjalanan Bermakna`,'cta.h':`Sertai Perjalanan Bermakna <span>Bersama Darul Furqon</span>`,
                'cta.p':`Bersama Maahad Tahfidz Darul Furqon, anak-anak dibina bukan hanya untuk lulus ujian, tetapi untuk membawa cahaya ilmu, iman, dan akhlak ke masyarakat.`,
                'cta.apply':`Mohon Sekarang +`,'cta.quote':`"Ya Tuhanku, tambahkanlah kepadaku ilmu."<br><small>Surah Taha: 114</small>`,
                'con.h':`Hubungi Kami <span>Lokasi &amp; Pertanyaan</span>`,'con.p':`Untuk pertanyaan pendaftaran, lawatan kampus, atau maklumat program, hubungi pihak Maahad melalui WhatsApp atau email rasmi.`,
                'con.email1':`Email rasmi: info@darulfurqon.my`,'con.email2':`Email alternatif: tahfizdarulfurqon@gmail.com`,'con.chat':`Chat WhatsApp +`,
                'foot.tagline':`Membina pendidikan Islam yang melahirkan generasi berilmu, beriman, dan beradab.`,'foot.quick':`Pautan Pantas`,'foot.services':`Unit Layanan`,
                'foot.reg':`Pendaftaran Pelajar`,'foot.fees':`Yuran &amp; Pembayaran`,'foot.gallery':`Galeri Kegiatan`,'foot.faq':`Soalan Lazim (FAQ)`,'foot.branches':`Cawangan: Sepang &amp; Cheras`,
                'foot.copyright':`© {{ date('Y') }} Maahad Tahfidz Darul Furqon. Hak cipta terpelihara.`
            },
            en: {
                'nav.home':`Home`,'nav.about':`About Us`,'nav.founder':`Founder`,'nav.story':`History`,'nav.programmes':`Programmes`,'nav.activities':`Activities`,'nav.gallery':`Gallery`,'nav.infak':`Donate`,'nav.contact':`Contact`,'nav.apply':`Apply Now +`,
                'inf.kicker':`Endowment &middot; Donation &middot; Ongoing Charity`,'inf.h':`Support the Tahfiz Journey <span>A Charity That Keeps Flowing</span>`,'inf.lead':`MTDF was built on endowed land and community donations. Every contribution becomes sadaqah jariah &mdash; its reward keeps flowing as long as the Qur'an is memorised and practised by the students.`,'inf.hadith':`"When a person dies, their deeds end except three: an ongoing charity, beneficial knowledge, and a righteous child who prays for them."<span>&mdash; Narrated by Muslim</span>`,'inf.p1':`Nurturing a generation of Qur'an memorisers`,'inf.p2':`Supporting students' daily needs &amp; education`,'inf.p3':`Continuous reward as ongoing charity`,'inf.cap':`Tap for full view &amp; to scan the QR`,'inf.dl':`Download QR +`,'inf.wa':`Contact for Endowment +`,
                'hero.eyebrow':`Modern Islamic Education`,
                'hero.title':`Knowledge, Faith &amp; Action, Enlightening the World <span>Nurturing Qur'anic generations since 2022.</span>`,
                'hero.lead':`Maahad Tahfidz Darul Furqon nurtures a generation strong in the Qur'an, mature in knowledge, refined in character, and ready to benefit the ummah.`,
                'hero.cta1':`Discover Us +`,'hero.cta2':`View Programmes +`,'hero.label':`Qur'an Halaqah &amp; Character Building`,
                'pillar1.h':`Integrated Education`,'pillar1.p':`A balanced blend of worldly and spiritual knowledge.`,
                'pillar2.h':`Character &amp; Leadership`,'pillar2.p':`Building noble character and readiness to lead.`,
                'pillar3.h':`Islamic Environment`,'pillar3.p':`A conducive learning atmosphere rooted in Islamic values.`,
                'pillar4.h':`Community &amp; Cooperation`,'pillar4.p':`Collaboration with parents and the community.`,
                'pillar5.h':`Holistic Development`,'pillar5.p':`Strengthening intellectual, spiritual, emotional, and physical potential.`,
                'founder.caption':`Ustadz Umar Kurniawan bin Bustami<span>Founder</span>`,'founder.kicker':`Founder &amp; Pioneer`,'founder.h':`Our Founder <span>Leader of Darul Furqon</span>`,'founder.role':`Founder of Maahad Tahfidz Darul Furqon`,
                'founder.p1':`Maahad Tahfidz Darul Furqon was established in March 2022 in Kampung Sungai Pinang, Pulau Indah, Selangor — pioneered by Ustaz Umar Kurniawan bin Bustami on land endowed (waqf) by Puan Hajah Salbiah binti Haji Abdul Hamid.`,
                'founder.p2':`Beginning with 20 students and the support of the local community, MTDF continues to grow, nurturing a Qur'anic generation that is knowledgeable, faithful, and of good character.`,
                'founder.quote':`"Educate children with the Qur'an, for in it lies the light of this world and the hereafter."`,
                'vm.kicker':`Our Philosophy`,'vm.h':`Vision &amp; Mission <span>Our Direction</span>`,
                'vm.visi.label':`Vision`,'vm.visi.text':`To make the Qur'an and Hadith our primary reference, without abandoning present-day advancement, so as to showcase competitive huffaz.`,
                'vm.misi.label':`Mission`,'vm.misi.text':`To raise an Islamic generation able to compete and keep pace with the times, without abandoning its identity as a devout and knowledgeable Muslim.`,
                'vm.objektif.label':`Objective`,'vm.objektif.text':`To make MTDF a centre of religious activity in order to foster a harmonious, community-friendly religious atmosphere.`,
                'vm.motto':`Faithful &middot; Knowledgeable &middot; Virtuous`,
                'st.kicker':`Getting to Know Darul Furqon`,'st.h':`History &amp; Journey <span>From a Plot of Waqf to a Ma'ahad</span>`,
                'st.tab1':`Founding History`,'st.tab2':`Our Leadership`,'st.tab3':`Educational Visits`,'st.tab4':`Recreational Activities`,
                'st.k.role':`Land Endower (Waqif)`,'st.k.badge':`Since March 2022`,
                'st.k.lead':`The journey of Maahad Tahfidz Darul Furqon began with a sincere wish &mdash; a mother's desire for her own land to become a place that nurtures memorisers of the Qur'an.`,
                'st.k.m1.h':`A Land Endower's Wish`,'st.k.m1.p':`Puan Hajah Salbiah binti Haji Abdul Hamid dreamed of a Tahfidz Ma'ahad built on her land in Kampung Sungai Pinang, Pulau Indah.`,
                'st.k.m2.h':`The Trust Carried Forward`,'st.k.m2.p':`The wish was conveyed to Ustaz Umar Kurniawan, who then began the effort to establish it with the support of several friends.`,
                'st.k.m3.h':`March 2022 &mdash; MTDF Is Born`,'st.k.m3.p':`With limited funds and public donations, MTDF was established with a total of 20 students.`,
                'st.k.m4.h':`Growing With the Community`,'st.k.m4.p':`Alhamdulillah, to this day MTDF continues to receive the support of the Pulau Indah, Klang community in spreading the message of Islam.`,
                'st.p.lead':`A trust driven by a leadership team experienced in tahfiz education and community service.`,
                'st.p.umar.role':`Founder`,'st.p.umar.p':`Born 3 April 1987 in Medan, Indonesia. An alumnus of Pondok Pesantren Temboro and religious studies in Sumatra; experienced as a tahfiz teacher and warden since 2009.`,
                'st.p.haris.role':`Chairman`,'st.p.haris.p':`Born 24 May 1970 in Klang, Selangor. Diploma in Civil Engineering, UiTM Shah Alam; former Village Head of Kampung Sungai Pinang (2008&ndash;2018).`,
                'st.p.nur.role':`Principal (Mudirah)`,'st.p.nur.p':`Born 20 August 1993 in Alor Setar, Kedah. An alumna of Institut Pondok Pasir Tumbuh, Kelantan; experienced teaching at tahfiz ma'ahad and religious schools.`,
                'st.p.note':`The full MTDF organisation chart &mdash; Chairman, Deputy, Treasurer, Secretary and committee &mdash; can be viewed in the Full Profile (PDF) below.`,
                'st.l.lead':`Learning extends beyond the classroom through educational visits that build students' experience and horizons.`,
                'st.l.g1':`Ladang Alam Warisan, Negeri Sembilan`,'st.l.g2':`Pondok Pesantren Temboro, East Java`,
                'st.r.lead':`Active in body and soul &mdash; students are nurtured through sunnah sports and shared recreation that strengthens brotherhood.`,
                'st.r.g1':`Archery`,'st.r.g2':`Recreation With the Community`,
                'st.pdf.btn':`View Full Profile (PDF) +`,'st.pdf.title':`Maahad Tahfidz Darul Furqon Profile`,'st.pdf.open':`Open in New Tab`,'st.pdf.dl':`Download`,
                'st.pdf.note':`If the document does not display (common on phones), please download it or open it in a new tab.`,
                'lp.kicker':`Education Pathway`,'lp.h':`Continuing Studies <span>From Home to the Middle East</span>`,'lp.intro':`MTDF graduates have the opportunity to continue their studies to higher levels, from within the country to the Middle East.`,
                'lp.step1.tag':`Foundation`,'lp.step2.tag':`Deepening`,'lp.step3.tag':`Higher Studies`,'lp.step3.h':`Middle East`,'lp.step3.p':`Sudan &middot; Egypt &middot; Jordan`,
                'cur.kicker':`Tahfiz Curriculum`,'cur.h':`Daily Schedule <span>Students' Memorisation Routine</span>`,
                'cur.s1.h':`New Memorisation`,'cur.s1.p':`An evening session memorising new pages, reviewed by teachers the next morning.`,
                'cur.s2.h':`New Juz'`,'cur.s2.p':`Revising the newly memorised juz' to strengthen retention.`,
                'cur.s3.h':`Previous Juz'`,'cur.s3.p':`Revising earlier juz' in order to keep memorisation firm.`,
                'cur.subj':`Subjects`,'cur.english':`English`,'cur.computer':`Computing`,'cur.quran':`Qur'an`,'cur.solat':`Prayer Recitation`,'cur.arab':`Arabic`,'cur.melayu':`Malay`,
                'cur.q.kicker':`Al-Quran Classes`,'cur.q.lead':`Qur'an study by each student's level &mdash; from learning the letters to memorisation.`,'cur.q.iqra.h':`Iqra'`,'cur.q.iqra.p':`The beginning level for students new to reading the Qur'an.`,'cur.q.naz.h':`Nazirah`,'cur.q.naz.p':`For students working on fluency in reciting the Qur'an.`,'cur.q.haf.h':`Hafazan`,'cur.q.haf.p':`For students proficient in reciting the Qur'an and permitted to memorise.`,
                'cur.wk.kicker':`Weekend Activities`,'cur.wk.note':`For boarding students`,'cur.wk.memanah':`Archery`,'cur.wk.riadah':`Recreation &amp; Sports`,
                'cur.day.kicker':`Full Daily Routine`,'cur.day.lead':`The student's day is carefully balanced &mdash; worship, Qur'an memorisation, knowledge, recreation and rest, from before dawn until night.`,'cur.day.fast':`Mondays &amp; Thursdays &mdash; sunnah fasting`,
                'cur.day.p1':`Pre-dawn &amp; Fajr`,'cur.day.p2':`Morning`,'cur.day.p3':`Midday`,'cur.day.p4':`Afternoon`,'cur.day.p5':`Night`,
                'cur.day.1':`Wake, wash, Tahajjud prayer &amp; revise memorisation while awaiting Fajr.`,'cur.day.2':`Congregational Fajr prayer &amp; recitation of the protective verses (Ayatul Kihrzi).`,'cur.day.3':`Sabaq class &mdash; new memorisation.`,
                'cur.day.4':`Dhuha prayer, service &amp; breakfast.`,'cur.day.5':`Sabqi class &mdash; memorisation revision.`,'cur.day.6':`Rest (qailulah / midday nap).`,
                'cur.day.7':`Congregational Zuhr prayer &amp; lunch.`,'cur.day.8':`Manzil class &amp; Fardhu Ain class.`,
                'cur.day.9':`Congregational Asr prayer &amp; recitation of Ayatul Kihrzi.`,'cur.day.10':`Recreation &amp; sports.`,'cur.day.11':`Wash &amp; evening meal.`,
                'cur.day.12':`Congregational Maghrib prayer &amp; memorisation class.`,'cur.day.13':`Congregational Isha prayer, Surah Al-Mulk, ta'lim &amp; daily consultation.`,'cur.day.14':`Muraja'ah (revision) class.`,'cur.day.15':`Night rest.`,
                'prog.h':`Our Programmes <span>What We Offer</span>`,
                'prog1.h':`Qur'an Memorisation`,'prog1.p':`An intensive memorisation programme building recitation, character, and revision.`,
                'prog2.h':`Academic Excellence`,'prog2.p':`National and religious curricula designed for sustained achievement.`,
                'prog3.h':`Self &amp; Co-Curriculum`,'prog3.p':`Sports, leadership, language, and life-skills activities.`,'prog.cta':`Ask About Programmes +`,
                'stat1':`Male Students (Banin)`,'stat2':`Female Students (Banat)`,'stat3':`Tahfiz &amp; Fardhu Ain Teachers`,'stat4':`Year Established`,
                'keg.kicker':`Life at Darul Furqon`,'keg.h':`Our Activities <span>Learning Beyond The Classroom</span>`,
                'keg.p1':`Education unfolds through halaqah, congregational worship, educational visits, physical activity, and community togetherness.`,
                'keg.p2':`Every experience is designed to build discipline, self-confidence, brotherhood, and living character in students' daily lives.`,
                'keg.cta':`View Full Gallery +`,'keg.cap1':`Community &amp; Appreciation`,'keg.cap2':`Worship &amp; Brotherhood`,'keg.cap3':`Educational Visit`,
                'vid.kicker':`Activity Gallery`,'vid.h':`Meaningful Moments <span>That Shape Character</span>`,'vid.p':`Short clips of student life in learning, worship, recreation, and togetherness.`,
                'vid.cap1':`Halaqah &amp; Knowledge Building <span>Interactive learning in a spirit of brotherhood.</span>`,'vid.cap2':`Recreation &amp; Fitness <span>Building students' courage, health, and teamwork.</span>`,
                'val.h':`Our Core Values <span>What We Stand For</span>`,'val.iman':`<strong>Faith</strong>Belief`,'val.ilmu':`<strong>Knowledge</strong>Learning`,'val.akhlak':`<strong>Character</strong>Morals`,'val.disiplin':`<strong>Discipline</strong>Order`,'val.ikhlas':`<strong>Sincerity</strong>Purity`,'val.amanah':`<strong>Trust</strong>Responsibility`,
                'cta.kicker':`Join A Meaningful Journey`,'cta.h':`Join A Meaningful Journey <span>With Darul Furqon</span>`,
                'cta.p':`With Maahad Tahfidz Darul Furqon, children are nurtured not merely to pass exams, but to carry the light of knowledge, faith, and character into society.`,
                'cta.apply':`Apply Now +`,'cta.quote':`"My Lord, increase me in knowledge."<br><small>Surah Taha: 114</small>`,
                'con.h':`Contact Us <span>Location &amp; Enquiries</span>`,'con.p':`For registration enquiries, campus visits, or programme information, contact the Maahad via WhatsApp or official email.`,
                'con.email1':`Official email: info@darulfurqon.my`,'con.email2':`Alternate email: tahfizdarulfurqon@gmail.com`,'con.chat':`Chat on WhatsApp +`,
                'foot.tagline':`Building Islamic education that raises a generation of knowledge, faith, and character.`,'foot.quick':`Quick Links`,'foot.services':`Services`,
                'foot.reg':`Student Registration`,'foot.fees':`Fees &amp; Payment`,'foot.gallery':`Activity Gallery`,'foot.faq':`FAQ`,'foot.branches':`Branches: Sepang &amp; Cheras`,
                'foot.copyright':`© {{ date('Y') }} Maahad Tahfidz Darul Furqon. All rights reserved.`
            },
            ar: {
                'nav.home':`الرئيسية`,'nav.about':`عن المعهد`,'nav.founder':`المؤسس`,'nav.story':`النشأة`,'nav.programmes':`البرامج`,'nav.activities':`الأنشطة`,'nav.gallery':`المعرض`,'nav.infak':`تبرّع`,'nav.contact':`اتصل بنا`,'nav.apply':`سجّل الآن +`,
                'inf.kicker':`وقف &middot; إنفاق &middot; صدقة جارية`,'inf.h':`ادعم مسيرة التحفيظ <span>صدقة جارية لا تنقطع</span>`,'inf.lead':`أُنشئ المعهد على أرض موقوفة وتبرّعات المجتمع. كل إنفاق منك يصبح صدقة جارية &mdash; يستمر أجره ما دام القرآن يُحفظ ويُعمل به لدى الطلاب.`,'inf.hadith':`«إذا مات ابن آدم انقطع عمله إلا من ثلاث: صدقة جارية، أو علم يُنتفع به، أو ولد صالح يدعو له.»<span>&mdash; رواه مسلم</span>`,'inf.p1':`إعداد جيل من حفظة القرآن`,'inf.p2':`دعم الاحتياجات اليومية وتعليم الطلاب`,'inf.p3':`أجر مستمر كصدقة جارية`,'inf.cap':`انقر للعرض الكامل ولمسح رمز QR`,'inf.dl':`تحميل رمز QR +`,'inf.wa':`للتواصل حول الوقف +`,
                'hero.eyebrow':`تعليم إسلامي عصري`,
                'hero.title':`العلم والإيمان والعمل تُنير العالم <span>نُربّي أجيالاً قرآنية منذ 2022.</span>`,
                'hero.lead':`يُنشئ معهد تحفيظ دار الفرقان جيلاً متيناً في القرآن، ناضجاً في العلم، رفيعَ الأدب، مستعداً لنفع الأمّة.`,
                'hero.cta1':`تعرّف علينا +`,'hero.cta2':`عرض البرامج +`,'hero.label':`حلقة القرآن وبناء الأدب`,
                'pillar1.h':`تعليم متكامل`,'pillar1.p':`مزيج متوازن بين علوم الدنيا والآخرة.`,
                'pillar2.h':`الأخلاق والقيادة`,'pillar2.p':`بناء الشخصية الكريمة والاستعداد للقيادة.`,
                'pillar3.h':`بيئة إسلامية`,'pillar3.p':`أجواء تعليمية داعمة متجذّرة في قيم الإسلام.`,
                'pillar4.h':`المجتمع والتعاون`,'pillar4.p':`التعاون مع أولياء الأمور والمجتمع.`,
                'pillar5.h':`تنمية شاملة`,'pillar5.p':`تقوية القدرات العقلية والروحية والعاطفية والجسدية.`,
                'founder.caption':`الأستاذ عمر كورنياوان بن بستامي<span>المؤسس</span>`,'founder.kicker':`المؤسس والرائد`,'founder.h':`مؤسسنا <span>قائد دار الفرقان</span>`,'founder.role':`مؤسس معهد تحفيظ دار الفرقان`,
                'founder.p1':`تأسّس معهد تحفيظ دار الفرقان في مارس 2022 بقرية سونغاي بينانج، بولاو إنداه، سلانجور — على يد الأستاذ عمر كورنياوان بن بستامي، على أرض موقوفة من الحاجة صلبية بنت الحاج عبد الحميد.`,
                'founder.p2':`بدأ المعهد بعشرين طالباً وبدعم من المجتمع المحلي، ويواصل نموّه في تربية جيل قرآني عالِم مؤمن حَسَن الأخلاق.`,
                'founder.quote':`«ربّوا الأبناء بالقرآن، فإنّ فيه نور الدنيا والآخرة.»`,
                'vm.kicker':`فلسفتنا`,'vm.h':`الرؤية والرسالة <span>توجّهنا</span>`,
                'vm.visi.label':`الرؤية`,'vm.visi.text':`جعل القرآن والسنّة مرجعاً أساسياً دون التخلّي عن التقدّم القائم، حتى يتسنّى إظهار حفظة قادرين على المنافسة.`,
                'vm.misi.label':`الرسالة`,'vm.misi.text':`إعداد جيل إسلامي قادر على المنافسة يواكب العصر دون التخلّي عن هويته كمسلم تقيّ عالِم.`,
                'vm.objektif.label':`الهدف`,'vm.objektif.text':`جعل المعهد مركزاً للأنشطة الدينية لتهيئة أجواء دينية متناغمة قريبة من المجتمع.`,
                'vm.motto':`إيماناً &middot; علماً &middot; خُلُقاً`,
                'st.kicker':`تعرّف على دار الفرقان`,'st.h':`النشأة والمسيرة <span>من أرض موقوفة إلى معهد</span>`,
                'st.tab1':`تاريخ التأسيس`,'st.tab2':`فريق القيادة`,'st.tab3':`الرحلات التعليمية`,'st.tab4':`الأنشطة الترفيهية`,
                'st.k.role':`واقفة الأرض`,'st.k.badge':`منذ مارس 2022`,
                'st.k.lead':`بدأت مسيرة معهد تحفيظ دار الفرقان من رغبة صادقة &mdash; أمنية أمٍّ أن تصبح أرضها مكاناً يُنشئ حفظة كتاب الله.`,
                'st.k.m1.h':`أمنية الواقفة`,'st.k.m1.p':`حلمت الحاجة صلبية بنت الحاج عبد الحميد بمعهد تحفيظ يُبنى على أرضها في قرية سونغاي بينانج، بولاو إنداه.`,
                'st.k.m2.h':`أمانة تُحمَل`,'st.k.m2.p':`نُقلت الأمنية إلى الأستاذ عمر كورنياوان، فبدأ العمل على تأسيسه بدعم من عدد من الأصدقاء.`,
                'st.k.m3.h':`مارس 2022 &mdash; تأسيس المعهد`,'st.k.m3.p':`بإمكانات مالية محدودة وتبرّعات المحسنين، تأسّس المعهد بعشرين طالباً.`,
                'st.k.m4.h':`نموّ مع المجتمع`,'st.k.m4.p':`والحمد لله، لا يزال المعهد يحظى بدعم مجتمع بولاو إنداه، كلانج في نشر شعائر الإسلام.`,
                'st.p.lead':`أمانة يقودها فريق ذو خبرة في تعليم التحفيظ وخدمة المجتمع.`,
                'st.p.umar.role':`المؤسس`,'st.p.umar.p':`وُلد في 3 أبريل 1987 بمدان، إندونيسيا. خرّيج معهد تمبورو ودراسات دينية في سومطرة؛ وله خبرة معلّماً للتحفيظ ومشرفاً منذ 2009.`,
                'st.p.haris.role':`الرئيس`,'st.p.haris.p':`وُلد في 24 مايو 1970 بكلانج، سلانجور. دبلوم هندسة مدنية من UiTM شاه علم؛ رئيس سابق لقرية سونغاي بينانج (2008&ndash;2018).`,
                'st.p.nur.role':`المديرة`,'st.p.nur.p':`وُلدت في 20 أغسطس 1993 بألور ستار، قدح. خرّيجة معهد باسير تومبوه، كلنتان؛ ولها خبرة في التدريس بمعاهد التحفيظ والمدارس الدينية.`,
                'st.p.note':`يمكن الاطّلاع على الهيكل التنظيمي الكامل للمعهد &mdash; الرئيس والنائب وأمين الصندوق والسكرتير واللجنة &mdash; في الملف التعريفي الكامل (PDF) أدناه.`,
                'st.l.lead':`يمتدّ التعلّم خارج الفصل عبر رحلات علمية تبني خبرات الطلاب وتوسّع آفاقهم.`,
                'st.l.g1':`مزرعة عالم واريسان، نيجري سمبيلان`,'st.l.g2':`معهد تمبورو، جاوة الشرقية`,
                'st.r.lead':`نشاطٌ في الروح والبدن &mdash; يُربّى الطلاب عبر الرياضات النبوية والترفيه المشترك الذي يوثّق الأخوّة.`,
                'st.r.g1':`رياضة الرماية`,'st.r.g2':`ترفيه مع المجتمع`,
                'st.pdf.btn':`عرض الملف الكامل (PDF) +`,'st.pdf.title':`الملف التعريفي لمعهد تحفيظ دار الفرقان`,'st.pdf.open':`فتح في تبويب جديد`,'st.pdf.dl':`تحميل`,
                'st.pdf.note':`إذا لم يُعرض المستند (شائع على الهواتف)، فيرجى تحميله أو فتحه في تبويب جديد.`,
                'lp.kicker':`المسار التعليمي`,'lp.h':`مواصلة الدراسة <span>من الوطن إلى الشرق الأوسط</span>`,'lp.intro':`يحظى خريجو المعهد بفرصة مواصلة دراستهم إلى مستويات أعلى، من داخل البلاد إلى الشرق الأوسط.`,
                'lp.step1.tag':`المرحلة الأساسية`,'lp.step2.tag':`التعمّق`,'lp.step3.tag':`الدراسات العليا`,'lp.step3.h':`الشرق الأوسط`,'lp.step3.p':`السودان &middot; مصر &middot; الأردن`,
                'cur.kicker':`منهج التحفيظ`,'cur.h':`الجدول اليومي <span>روتين حفظ الطلاب</span>`,
                'cur.s1.h':`حفظ جديد`,'cur.s1.p':`جلسة مسائية لحفظ صفحات جديدة، يراجعها المعلّم في اليوم التالي.`,
                'cur.s2.h':`الجزء الجديد`,'cur.s2.p':`مراجعة الجزء المحفوظ حديثاً لترسيخ الحفظ.`,
                'cur.s3.h':`الجزء القديم`,'cur.s3.p':`مراجعة الأجزاء السابقة بالترتيب للحفاظ على متانة الحفظ.`,
                'cur.subj':`المواد الدراسية`,'cur.english':`اللغة الإنجليزية`,'cur.computer':`الحاسوب`,'cur.quran':`القرآن`,'cur.solat':`أذكار الصلاة`,'cur.arab':`اللغة العربية`,'cur.melayu':`اللغة الملايوية`,
                'cur.q.kicker':`حصص القرآن`,'cur.q.lead':`تعليم القرآن حسب مستوى كل طالب &mdash; من تعلّم الحروف حتى الحفظ.`,'cur.q.iqra.h':`اقرأ`,'cur.q.iqra.p':`المرحلة الأولى للطلاب المبتدئين في قراءة القرآن.`,'cur.q.naz.h':`النظرة`,'cur.q.naz.p':`للطلاب الذين يُتقنون تلاوة القرآن نظراً.`,'cur.q.haf.h':`التحفيظ`,'cur.q.haf.p':`للطلاب المتمكّنين من قراءة القرآن والمأذون لهم بالحفظ.`,
                'cur.wk.kicker':`أنشطة نهاية الأسبوع`,'cur.wk.note':`خاصة لطلاب السكن الداخلي`,'cur.wk.memanah':`الرماية`,'cur.wk.riadah':`الرياضة والألعاب`,
                'cur.day.kicker':`الروتين اليومي الكامل`,'cur.day.lead':`يوم الطالب متوازن بعناية &mdash; عبادة وحفظ للقرآن وعلم ورياضة وراحة، من قبل الفجر حتى الليل.`,'cur.day.fast':`الإثنين والخميس &mdash; صيام السنّة`,
                'cur.day.p1':`قبل الفجر والفجر`,'cur.day.p2':`الصباح`,'cur.day.p3':`الظهيرة`,'cur.day.p4':`العصر`,'cur.day.p5':`الليل`,
                'cur.day.1':`الاستيقاظ والاغتسال وصلاة التهجّد ومراجعة الحفظ في انتظار الفجر.`,'cur.day.2':`صلاة الفجر جماعةً وقراءة آيات الحرز.`,'cur.day.3':`حصة السبق &mdash; حفظ جديد.`,
                'cur.day.4':`صلاة الضحى والخدمة والفطور.`,'cur.day.5':`حصة السبقي &mdash; مراجعة الحفظ.`,'cur.day.6':`راحة (القيلولة).`,
                'cur.day.7':`صلاة الظهر جماعةً والغداء.`,'cur.day.8':`حصة المنزل وحصة فرض العين.`,
                'cur.day.9':`صلاة العصر جماعةً وقراءة آيات الحرز.`,'cur.day.10':`الرياضة والألعاب.`,'cur.day.11':`الاغتسال وطعام المساء.`,
                'cur.day.12':`صلاة المغرب جماعةً وحصة الحفظ.`,'cur.day.13':`صلاة العشاء جماعةً وسورة الملك والتعليم والمشاورة اليومية.`,'cur.day.14':`حصة المراجعة.`,'cur.day.15':`راحة الليل.`,
                'prog.h':`برامجنا <span>ما نقدّمه</span>`,
                'prog1.h':`تحفيظ القرآن`,'prog1.p':`برنامج حفظ مكثّف مع إتقان التلاوة والأدب والمراجعة.`,
                'prog2.h':`التميّز الأكاديمي`,'prog2.p':`مناهج وطنية ودينية مصمّمة لتحصيل مستمر.`,
                'prog3.h':`الأنشطة والمهارات`,'prog3.p':`أنشطة رياضية وقيادية ولغوية ومهارات حياتية.`,'prog.cta':`استفسر عن البرامج +`,
                'stat1':`الطلاب (البنون)`,'stat2':`الطالبات (البنات)`,'stat3':`معلّمو التحفيظ وفرض العين`,'stat4':`سنة التأسيس`,
                'keg.kicker':`الحياة في دار الفرقان`,'keg.h':`أنشطتنا <span>تعلّم خارج الفصل</span>`,
                'keg.p1':`يتحقّق التعليم عبر الحلقات والعبادة الجماعية والرحلات العلمية والأنشطة البدنية والتآلف المجتمعي.`,
                'keg.p2':`كلّ تجربة مصمّمة لبناء الانضباط والثقة والأخوّة والأخلاق الحيّة في حياة الطلاب.`,
                'keg.cta':`شاهد المعرض كاملاً +`,'keg.cap1':`المجتمع والتقدير`,'keg.cap2':`العبادة والأخوّة`,'keg.cap3':`رحلة تعليمية`,
                'vid.kicker':`معرض الأنشطة`,'vid.h':`لحظات ذات معنى <span>تصنع الشخصية</span>`,'vid.p':`مقاطع قصيرة من حياة الطلاب في التعلّم والعبادة والترفيه والتآلف.`,
                'vid.cap1':`الحلقة وبناء العلم <span>تعلّم تفاعلي في أجواء الأخوّة.</span>`,'vid.cap2':`الترفيه واللياقة <span>بناء شجاعة الطلاب وصحّتهم وتعاونهم.</span>`,
                'val.h':`قيمنا الأساسية <span>مبادئنا</span>`,'val.iman':`<strong>الإيمان</strong>اليقين`,'val.ilmu':`<strong>العلم</strong>المعرفة`,'val.akhlak':`<strong>الأخلاق</strong>السلوك`,'val.disiplin':`<strong>الانضباط</strong>النظام`,'val.ikhlas':`<strong>الإخلاص</strong>الصدق`,'val.amanah':`<strong>الأمانة</strong>المسؤولية`,
                'cta.kicker':`انضمّ إلى رحلة ذات معنى`,'cta.h':`انضمّ إلى رحلة ذات معنى <span>مع دار الفرقان</span>`,
                'cta.p':`مع معهد تحفيظ دار الفرقان، يُربّى الأبناء لا لاجتياز الامتحانات فحسب، بل لحمل نور العلم والإيمان والأخلاق إلى المجتمع.`,
                'cta.apply':`سجّل الآن +`,'cta.quote':`«رَبِّ زِدْنِي عِلْمًا»<br><small>سورة طه: ١١٤</small>`,
                'con.h':`اتصل بنا <span>الموقع والاستفسار</span>`,'con.p':`للاستفسار عن التسجيل أو زيارة الحرم أو معلومات البرامج، تواصل مع المعهد عبر واتساب أو البريد الرسمي.`,
                'con.email1':`البريد الرسمي: info@darulfurqon.my`,'con.email2':`بريد بديل: tahfizdarulfurqon@gmail.com`,'con.chat':`تواصل عبر واتساب +`,
                'foot.tagline':`نبني تعليماً إسلامياً يُخرّج جيلاً عالِماً مؤمناً ذا أدب.`,'foot.quick':`روابط سريعة`,'foot.services':`الخدمات`,
                'foot.reg':`تسجيل الطلاب`,'foot.fees':`الرسوم والدفع`,'foot.gallery':`معرض الأنشطة`,'foot.faq':`الأسئلة الشائعة`,'foot.branches':`الفروع: سيبانج وشيراس`,
                'foot.copyright':`© {{ date('Y') }} معهد تحفيظ دار الفرقان. جميع الحقوق محفوظة.`
            }
        };
        var LANGS = ['ms', 'en', 'ar'];
        function applyLang(lang) {
            if (LANGS.indexOf(lang) < 0) lang = 'ms';
            var dict = I18N[lang] || {};
            document.querySelectorAll('[data-i18n]').forEach(function (el) {
                var v = dict[el.getAttribute('data-i18n')];
                if (v != null) el.innerHTML = v;
            });
            document.documentElement.lang = lang;
            document.documentElement.setAttribute('dir', lang === 'ar' ? 'rtl' : 'ltr');
            document.querySelectorAll('.lang-btn').forEach(function (b) {
                b.classList.toggle('active', b.getAttribute('data-lang') === lang);
            });
            try { localStorage.setItem('df_lang', lang); } catch (e) {}
        }
        document.querySelectorAll('.lang-btn').forEach(function (b) {
            b.addEventListener('click', function () { applyLang(b.getAttribute('data-lang')); });
        });
        var savedLang = 'ms';
        try { savedLang = localStorage.getItem('df_lang') || 'ms'; } catch (e) {}
        applyLang(savedLang);

        // Tutup menu mobile setelah memilih pautan
        var menuToggle = document.getElementById('nav-toggle');
        var menu = document.getElementById('primary-menu');
        if (menuToggle && menu) {
            menu.querySelectorAll('a').forEach(function (link) {
                link.addEventListener('click', function () {
                    menuToggle.checked = false;
                });
            });
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') menuToggle.checked = false;
            });
        }

        var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        // Butang kembali ke atas
        var siteHeader = document.getElementById('siteHeader');
        var scrollTopBtn = document.getElementById('scrollTop');
        var onScroll = function () {
            var y = window.pageYOffset;
            if (siteHeader) siteHeader.classList.toggle('scrolled', y > 30);
            if (scrollTopBtn) scrollTopBtn.classList.toggle('show', y > 400);
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
        if (scrollTopBtn) {
            scrollTopBtn.addEventListener('click', function () {
                window.scrollTo({ top: 0, behavior: reduce ? 'auto' : 'smooth' });
            });
        }

        // Reveal bertahap saat digulir
        var reveals = document.querySelectorAll('.reveal');
        if (!reduce && 'IntersectionObserver' in window) {
            var revealObserver = new IntersectionObserver(function (entries, obs) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        obs.unobserve(entry.target);
                    }
                });
            }, { rootMargin: '0px 0px -12% 0px', threshold: 0.12 });
            reveals.forEach(function (el) { revealObserver.observe(el); });
        } else {
            reveals.forEach(function (el) { el.classList.add('is-visible'); });
        }

        // Sorot pautan navigasi mengikut seksyen aktif
        var navLinks = Array.prototype.slice.call(
            document.querySelectorAll('.nav-links a[href^="#"]')
        );
        var linkById = {};
        navLinks.forEach(function (link) {
            var id = link.getAttribute('href').slice(1);
            if (id) linkById[id] = link;
        });
        var sections = Object.keys(linkById)
            .map(function (id) { return document.getElementById(id); })
            .filter(Boolean);
        if ('IntersectionObserver' in window && sections.length) {
            var spyObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    var link = linkById[entry.target.id];
                    if (!link) return;
                    if (entry.isIntersecting) {
                        navLinks.forEach(function (l) { l.classList.remove('is-active'); });
                        link.classList.add('is-active');
                    }
                });
            }, { rootMargin: '-45% 0px -50% 0px' });
            sections.forEach(function (s) { spyObserver.observe(s); });
        }

        // Tab seksyen Sejarah
        var storyTabs = Array.prototype.slice.call(document.querySelectorAll('.story-tab'));
        var storyPanels = Array.prototype.slice.call(document.querySelectorAll('.story-panel'));
        storyTabs.forEach(function (tab) {
            tab.addEventListener('click', function () {
                var name = tab.getAttribute('data-tab');
                storyTabs.forEach(function (t) { t.classList.toggle('is-active', t === tab); });
                storyPanels.forEach(function (p) {
                    p.classList.toggle('is-active', p.getAttribute('data-panel') === name);
                });
            });
        });

        // Modal Profil PDF
        var pdfModal = document.getElementById('pdfModal');
        var pdfFrame = document.getElementById('pdfFrame');
        var openPdfBtn = document.getElementById('openProfilPdf');
        if (pdfModal && openPdfBtn) {
            var openPdf = function () {
                if (pdfFrame && pdfFrame.getAttribute('src') === 'about:blank') {
                    pdfFrame.setAttribute('src', pdfFrame.getAttribute('data-src'));
                }
                pdfModal.hidden = false;
                pdfModal.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';
            };
            var closePdf = function () {
                pdfModal.hidden = true;
                pdfModal.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            };
            openPdfBtn.addEventListener('click', openPdf);
            pdfModal.querySelectorAll('[data-close-pdf]').forEach(function (el) {
                el.addEventListener('click', closePdf);
            });
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && !pdfModal.hidden) closePdf();
            });
        }
    })();
</script>
</body>
</html>
