@php
    $waNumber = '60174333652';
    $waText = rawurlencode("Assalamualaikum Maahad Tahfidz Darul Furqon, saya ingin bertanya tentang pendaftaran.");
    $wa = "https://wa.me/{$waNumber}?text={$waText}";

    $photos = [
        ['file' => 'halaqah.jpg',    'title' => "Halaqah Al-Qur'an",          'desc' => 'Bimbingan hafazan bersama asatizah'],
        ['file' => 'solat.jpg',      'title' => 'Solat Berjemaah',             'desc' => 'Mendidik disiplin ibadah pelajar'],
        ['file' => 'muraja.jpg',     'title' => "Muraja'ah & Tadarus",         'desc' => 'Mengulang hafazan dalam saf'],
        ['file' => 'komputer.jpg',   'title' => 'Kelas Komputer',              'desc' => 'Kemahiran digital pelajar'],
        ['file' => 'diniyah.jpg',    'title' => 'Pembelajaran Diniyah',        'desc' => 'Kelas ilmu pelajar'],
        ['file' => 'lawatan.jpg',    'title' => 'Lawatan Ilmu',                'desc' => 'Rihlah dan tadabbur alam'],
        ['file' => 'renang.jpg',     'title' => 'Rekreasi & Renang',           'desc' => 'Kecergasan dan keberanian'],
        ['file' => 'sukan.jpg',      'title' => 'Sukan & Ko-Kurikulum',        'desc' => 'Semangat dan kerjasama'],
        ['file' => 'jamuan.jpg',     'title' => 'Jamuan Kebersamaan',          'desc' => 'Adab makan berjemaah'],
        ['file' => 'keluarga.jpg',   'title' => 'Keluarga Besar Darul Furqon', 'desc' => 'Ukhuwah pelajar dan guru'],
        ['file' => 'tazkirah.jpg',   'title' => 'Tazkirah & Motivasi',         'desc' => 'Santapan rohani pelajar'],
        ['file' => 'santriwati.jpg', 'title' => 'Pelajar Perempuan Darul Furqon', 'desc' => "Membina generasi Qur'ani"],
        ['file' => 'campus-mtdf.jpg',   'title' => 'Kampus MTDF',              'desc' => 'Pulau Indah, Selangor'],
        ['file' => 'kelas.jpg',         'title' => 'Kelas Pengajian',          'desc' => 'Suasana pembelajaran harian'],
        ['file' => 'muraja-putri.jpg',  'title' => "Muraja'ah Pelajar Puteri", 'desc' => 'Mengulang hafazan bersama'],
        ['file' => 'perhimpunan.jpg',   'title' => 'Perhimpunan Pelajar',      'desc' => 'Kedisiplinan dan kebersamaan'],
    ];

    $videos = [
        ['file' => 'kegiatan-1', 'title' => 'Solat & Kedisiplinan',   'desc' => 'Ibadah berjemaah pelajar'],
        ['file' => 'kegiatan-2', 'title' => 'Majlis & Raikan Pelajar', 'desc' => 'Kebersamaan komuniti'],
        ['file' => 'kegiatan-3', 'title' => 'Aktiviti Kebersamaan',    'desc' => 'Ukhuwah di luar kelas'],
        ['file' => 'kegiatan-4', 'title' => 'Halaqah Petang',          'desc' => 'Tadarus bersama'],
    ];
@endphp
<!DOCTYPE html>
<html lang="ms">
<head>
    <script>document.documentElement.classList.add('js');</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#062b23">
    <meta name="description" content="Galeri kegiatan Maahad Tahfidz Darul Furqon — halaqah, ibadah, akademik, lawatan, sukan, dan kebersamaan pelajar.">
    <link rel="canonical" href="https://darulfurqon.my/galeri">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32.png') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
    <title>Galeri — Maahad Tahfidz Darul Furqon</title>
    <style>
        :root {
            --emerald-980:#031f1a; --emerald-950:#062b23; --emerald-900:#08382f; --emerald-800:#0f5142;
            --gold-600:#bd8426; --gold-500:#d5a23b; --gold-400:#f0c45a;
            --cream-50:#fff9ec; --cream-100:#f8efd9; --ink:#14362f; --muted:#69756f;
            --line:rgba(14,73,59,.16); --shadow:0 24px 70px rgba(3,31,26,.2);
        }
        * { box-sizing:border-box; }
        html { scroll-behavior:smooth; }
        body {
            margin:0; color:var(--ink);
            background:
                radial-gradient(circle at 4% 12%, rgba(213,162,59,.12), transparent 24rem),
                radial-gradient(circle at 96% 40%, rgba(15,81,66,.08), transparent 28rem),
                var(--cream-50);
            font-family:Inter,ui-sans-serif,system-ui,-apple-system,"Segoe UI",sans-serif;
        }
        html[dir="rtl"] body { font-family:"Noto Naskh Arabic","Amiri","Segoe UI",Tahoma,sans-serif; }
        a { color:inherit; text-decoration:none; }
        :focus-visible { outline:3px solid var(--gold-400); outline-offset:3px; border-radius:4px; }
        .container { width:min(1180px, calc(100% - 40px)); margin:0 auto; }

        .gnav {
            position:sticky; top:0; z-index:20;
            background:linear-gradient(180deg, rgba(3,31,26,.98), rgba(6,43,35,.96));
            border-bottom:1px solid rgba(240,196,90,.22);
            backdrop-filter:saturate(1.1) blur(4px);
        }
        .gnav .container { display:flex; align-items:center; justify-content:space-between; gap:12px; padding:14px 0; flex-wrap:wrap; }
        .gnav-right { display:flex; align-items:center; gap:12px; }
        .brand { display:flex; align-items:center; gap:12px; }
        .brand-emblem {
            display:grid; width:94px; height:106px; place-items:center; padding:0; margin:-14px 0;
            background:transparent;
        }
        .brand-emblem img { width:100%; height:100%; object-fit:contain; }
        .brand b { color:rgba(255,255,255,.82); font-size:13px; line-height:1.05; font-weight:700; letter-spacing:.05em; }
        .brand small { display:block; color:var(--gold-400); font-size:20px; font-weight:900; letter-spacing:.01em; margin-top:2px; }
        .back-home {
            color:#fff; font-size:14px; font-weight:800; padding:10px 16px;
            border:1px solid rgba(240,196,90,.4); border-radius:10px; background:rgba(255,255,255,.05);
            transition:transform .2s, border-color .2s;
        }
        .back-home:hover { transform:translateY(-2px); border-color:var(--gold-400); }

        .lang-switch { display:inline-flex; gap:3px; padding:4px; border:1px solid rgba(240,196,90,.32); border-radius:999px; background:rgba(255,255,255,.06); }
        .lang-btn { display:inline-flex; align-items:center; gap:5px; padding:6px 10px; border:0; border-radius:999px; cursor:pointer; background:transparent; color:rgba(255,255,255,.74); font:inherit; font-size:12px; font-weight:800; line-height:1; transition:background .2s, color .2s; }
        .lang-btn .flag { font-size:15px; line-height:1; }
        .lang-btn:hover { color:#fff; }
        .lang-btn.active { color:#12352d; background:linear-gradient(180deg,var(--gold-400),var(--gold-500)); }

        .ghead { position:relative; overflow:hidden; padding:64px 0 40px; text-align:center; color:#fff;
            background:
                linear-gradient(135deg, rgba(3,31,26,.96), rgba(8,56,47,.96)),
                linear-gradient(135deg, var(--emerald-980), var(--emerald-800)); }
        .ghead .kicker { color:var(--gold-400); font-size:13px; font-weight:900; letter-spacing:.18em; text-transform:uppercase; }
        .ghead h1 { margin:12px 0 0; font-family:Georgia,"Times New Roman",serif; font-size:clamp(34px,4.6vw,56px); text-transform:uppercase; letter-spacing:.01em; }
        .ghead p { max-width:640px; margin:16px auto 0; color:rgba(255,255,255,.82); }
        .ghead::after { content:""; position:absolute; left:-10%; right:-10%; bottom:-70px; height:150px;
            background:var(--cream-50); border-top:8px solid var(--gold-500); border-radius:0 0 50% 50%; transform:rotate(-2deg); }

        section { padding:56px 0; }
        .sec-head { text-align:center; margin-bottom:30px; }
        .sec-head .kicker { color:var(--gold-600); font-size:13px; font-weight:900; letter-spacing:.16em; text-transform:uppercase; }
        .sec-head h2 { margin:8px 0 0; color:var(--emerald-950); font-family:Georgia,"Times New Roman",serif; font-size:clamp(28px,3vw,40px); text-transform:uppercase; }

        .masonry { columns:4; column-gap:16px; }
        @media (max-width:980px){ .masonry{ columns:3; } }
        @media (max-width:680px){ .masonry{ columns:2; } }
        @media (max-width:420px){ .masonry{ columns:1; } }
        .tile {
            position:relative; display:block; width:100%; margin:0 0 16px; break-inside:avoid;
            overflow:hidden; border-radius:14px; border:1px solid rgba(213,162,59,.28);
            background:var(--emerald-950); box-shadow:0 14px 34px rgba(3,31,26,.12); cursor:zoom-in;
        }
        .tile img { display:block; width:100%; height:auto; transition:transform .5s ease; }
        .tile:hover img { transform:scale(1.05); }
        .tile figcaption {
            position:absolute; inset:auto 0 0 0; padding:26px 16px 14px; color:#fff;
            background:linear-gradient(180deg, transparent, rgba(3,31,26,.86)); font-weight:900; font-size:15px;
            opacity:0; transform:translateY(8px); transition:opacity .3s, transform .3s;
        }
        .tile figcaption span { display:block; margin-top:3px; color:var(--gold-400); font-size:12px; font-weight:600; }
        .tile:hover figcaption, .tile:focus-visible figcaption { opacity:1; transform:none; }
        .tile::after {
            content:"⤢"; position:absolute; top:12px; right:12px; width:34px; height:34px; display:grid; place-items:center;
            color:#12352d; background:linear-gradient(180deg,var(--gold-400),var(--gold-500)); border-radius:9px;
            font-size:15px; font-weight:900; opacity:0; transform:scale(.8); transition:opacity .3s, transform .3s;
        }
        .tile:hover::after { opacity:1; transform:none; }

        .videos { background:linear-gradient(180deg, rgba(248,239,217,.5), rgba(255,249,236,.96)), var(--cream-100); }
        .video-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:18px; }
        @media (max-width:980px){ .video-grid{ grid-template-columns:repeat(2,1fr); } }
        @media (max-width:520px){ .video-grid{ grid-template-columns:1fr; } }
        .vcard { overflow:hidden; margin:0; border-radius:14px; border:1px solid rgba(213,162,59,.3); background:var(--emerald-950); box-shadow:0 16px 40px rgba(3,31,26,.14); }
        .vcard video { display:block; width:100%; aspect-ratio:3/4; object-fit:cover; background:#021814; }
        .vcard figcaption { padding:14px 16px 16px; color:#fff; font-weight:900; font-size:14px; }
        .vcard figcaption span { display:block; margin-top:4px; color:rgba(255,255,255,.62); font-size:12px; font-weight:600; }

        .gfoot { color:rgba(255,255,255,.75); background:linear-gradient(180deg,var(--emerald-950),var(--emerald-980)); padding:36px 0; text-align:center; }
        .gfoot a.cta { display:inline-flex; align-items:center; gap:8px; margin-top:6px; padding:12px 20px; color:#12352d; font-weight:900;
            background:linear-gradient(180deg,var(--gold-400),var(--gold-500)); border-radius:10px; }
        .gfoot .copyright { margin-top:20px; color:rgba(255,255,255,.5); font-size:13px; }
        .gfoot .powered-by { margin-top:6px; color:rgba(255,255,255,.5); font-size:13px; }
        .gfoot .powered-by a { color:var(--gold-400); font-weight:800; }

        .fab-stack { position:fixed; right:22px; bottom:22px; z-index:70; display:flex; flex-direction:column; gap:12px; align-items:center; }
        .fab { display:grid; place-items:center; width:54px; height:54px; border:0; border-radius:50%; cursor:pointer; box-shadow:0 12px 30px rgba(3,31,26,.32); transition:transform .2s, box-shadow .2s, opacity .25s; }
        .fab:hover { transform:translateY(-3px); box-shadow:0 16px 38px rgba(3,31,26,.4); }
        .fab svg { width:27px; height:27px; display:block; }
        .fab-wa { background:#25d366; color:#fff; }
        .fab-top { background:linear-gradient(180deg,var(--gold-400),var(--gold-500)); color:#12352d; opacity:0; visibility:hidden; transform:translateY(12px); }
        .fab-top.show { opacity:1; visibility:visible; transform:none; }
        @media (max-width:600px){ .fab-stack{ right:14px; bottom:14px; } .fab{ width:50px; height:50px; } }

        .lb { position:fixed; inset:0; z-index:60; display:none; align-items:center; justify-content:center; background:rgba(2,18,14,.92); backdrop-filter:blur(4px); padding:24px; }
        .lb.open { display:flex; }
        .lb-img { max-width:min(1100px,92vw); max-height:82vh; border-radius:12px; border:1px solid rgba(240,196,90,.35); box-shadow:0 30px 90px rgba(0,0,0,.5); object-fit:contain; }
        .lb-cap { position:absolute; left:0; right:0; bottom:22px; text-align:center; color:#fff; font-weight:900; }
        .lb-cap span { display:block; margin-top:4px; color:var(--gold-400); font-size:13px; font-weight:600; }
        .lb-btn { position:absolute; top:50%; transform:translateY(-50%); width:52px; height:52px; display:grid; place-items:center; color:#12352d; background:linear-gradient(180deg,var(--gold-400),var(--gold-500)); border:0; border-radius:50%; cursor:pointer; font-size:22px; font-weight:900; box-shadow:0 10px 24px rgba(0,0,0,.35); }
        .lb-prev { left:20px; } .lb-next { right:20px; }
        .lb-close { position:absolute; top:18px; right:20px; width:46px; height:46px; border-radius:12px; transform:none; font-size:20px; }
        .lb-count { position:absolute; top:26px; left:24px; color:rgba(255,255,255,.7); font-size:13px; font-weight:800; letter-spacing:.06em; }
        @media (max-width:600px){ .lb-btn{ width:44px; height:44px; font-size:19px; } .lb-prev{ left:8px; } .lb-next{ right:8px; } }
    </style>
</head>
<body>
    <header class="gnav">
        <div class="container">
            <a class="brand" href="{{ url('/') }}">
                <span class="brand-emblem"><img src="{{ asset('images/darul-furqon-logo-full.png') }}" alt="Logo Maahad Tahfidz Darul Furqon"></span>
                <span><b>Maahad Tahfidz</b><small>DARUL FURQON</small></span>
            </a>
            <div class="gnav-right">
                <div class="lang-switch" role="group" aria-label="Tukar bahasa / Language">
                    <button type="button" class="lang-btn" data-lang="ms" aria-label="Bahasa Melayu"><span class="flag">🇲🇾</span>BM</button>
                    <button type="button" class="lang-btn" data-lang="en" aria-label="English"><span class="flag">🇬🇧</span>EN</button>
                    <button type="button" class="lang-btn" data-lang="ar" aria-label="العربية"><span class="flag">🇸🇦</span>ع</button>
                </div>
                <a class="back-home" href="{{ url('/') }}" data-i18n="back">← Kembali ke Utama</a>
            </div>
        </div>
    </header>

    <section class="ghead">
        <div class="container">
            <div class="kicker" data-i18n="head.kicker">Galeri Kegiatan</div>
            <h1 data-i18n="head.h1">Detik Bermakna</h1>
            <p data-i18n="head.p">Rakaman kehidupan pelajar Maahad Tahfidz Darul Furqon — dari halaqah dan ibadah, akademik, hingga lawatan, sukan, dan kebersamaan.</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="sec-head">
                <div class="kicker" data-i18n="sec1.kicker">Foto Pilihan</div>
                <h2 data-i18n="sec1.h">Momen Pelajar</h2>
            </div>
            <div class="masonry">
                @foreach ($photos as $i => $p)
                    <a class="tile" href="{{ asset('media/mtdf/gallery/'.$p['file']) }}"
                       role="button" tabindex="0"
                       data-index="{{ $i }}" data-title="{{ $p['title'] }}" data-desc="{{ $p['desc'] }}"
                       aria-label="{{ $p['title'] }}">
                        <img src="{{ asset('media/mtdf/gallery/'.$p['file']) }}" alt="{{ $p['title'] }} — Maahad Tahfidz Darul Furqon" loading="lazy">
                        <figcaption>{{ $p['title'] }}<span>{{ $p['desc'] }}</span></figcaption>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="videos">
        <div class="container">
            <div class="sec-head">
                <div class="kicker" data-i18n="sec2.kicker">Video Kegiatan</div>
                <h2 data-i18n="sec2.h">Detik Bergerak</h2>
            </div>
            <div class="video-grid">
                @foreach ($videos as $v)
                    <figure class="vcard">
                        <video controls preload="metadata" playsinline poster="{{ asset('media/mtdf/gallery/'.$v['file'].'.jpg') }}">
                            <source src="{{ asset('media/mtdf/gallery/'.$v['file'].'.mp4') }}" type="video/mp4">
                            Browser anda tidak menyokong pemutaran video.
                        </video>
                        <figcaption>{{ $v['title'] }}<span>{{ $v['desc'] }}</span></figcaption>
                    </figure>
                @endforeach
            </div>
        </div>
    </section>

    <footer class="gfoot">
        <div class="container">
            <p data-i18n="foot.p">Ingin menyertai keluarga besar Maahad Tahfidz Darul Furqon?</p>
            <a class="cta" href="{{ $wa }}" target="_blank" rel="noopener" data-i18n="foot.cta">Hubungi Kami di WhatsApp +</a>
            <div class="copyright" data-i18n="foot.copyright">© {{ date('Y') }} Maahad Tahfidz Darul Furqon. Hak cipta terpelihara.</div>
            <div class="powered-by">Powered by <a href="https://morabangun.com" target="_blank" rel="noopener">morabangun.com</a></div>
        </div>
    </footer>

    <div class="fab-stack">
        <button type="button" class="fab fab-top" id="scrollTop" aria-label="Kembali ke atas" title="Ke atas">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19V5M5 12l7-7 7 7"/></svg>
        </button>
        <a class="fab fab-wa" href="{{ $wa }}" target="_blank" rel="noopener" aria-label="WhatsApp" title="WhatsApp">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38c1.45.79 3.08 1.2 4.79 1.2h.01c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm5.8 14.13c-.24.68-1.42 1.31-1.95 1.35-.5.05-.99.24-3.33-.7-2.82-1.13-4.6-4.02-4.74-4.2-.14-.18-1.13-1.5-1.13-2.86 0-1.36.71-2.03.96-2.31.25-.28.55-.35.73-.35.18 0 .37 0 .53.01.17.01.4-.06.62.48.24.56.81 1.96.88 2.1.07.14.12.31.02.49-.09.18-.14.29-.28.45-.14.16-.29.36-.42.48-.14.14-.28.29-.12.57.16.28.71 1.17 1.53 1.9 1.05.94 1.94 1.23 2.22 1.37.28.14.44.12.6-.07.18-.21.69-.8.87-1.08.18-.28.37-.23.62-.14.25.09 1.6.76 1.87.9.28.14.46.21.53.32.07.12.07.68-.17 1.36z"/></svg>
        </a>
    </div>

    <div class="lb" id="lightbox" aria-hidden="true">
        <span class="lb-count" id="lbCount"></span>
        <button class="lb-btn lb-close" id="lbClose" aria-label="Tutup">✕</button>
        <button class="lb-btn lb-prev" id="lbPrev" aria-label="Sebelumnya">‹</button>
        <img class="lb-img" id="lbImg" src="" alt="">
        <div class="lb-cap" id="lbCap"></div>
        <button class="lb-btn lb-next" id="lbNext" aria-label="Seterusnya">›</button>
    </div>

    <script>
        (function () {
            var tiles = Array.prototype.slice.call(document.querySelectorAll('.tile'));
            var vcards = Array.prototype.slice.call(document.querySelectorAll('.vcard'));

            // ---------- i18n (ms default from DOM; en/ar overrides) ----------
            document.querySelectorAll('[data-i18n]').forEach(function (el) { el.setAttribute('data-ms', el.innerHTML); });
            tiles.forEach(function (t) { t.setAttribute('data-ms-title', t.getAttribute('data-title')); t.setAttribute('data-ms-desc', t.getAttribute('data-desc')); });
            vcards.forEach(function (v) { v.querySelector('figcaption').setAttribute('data-ms', v.querySelector('figcaption').innerHTML); });

            var CHROME = {
                en: { 'back':`← Back to Home`, 'head.kicker':`Activity Gallery`, 'head.h1':`Meaningful Moments`,
                    'head.p':`Glimpses of student life at Maahad Tahfidz Darul Furqon — from halaqah and worship to academics, visits, sports, and togetherness.`,
                    'sec1.kicker':`Selected Photos`, 'sec1.h':`Student Moments`, 'sec2.kicker':`Activity Videos`, 'sec2.h':`Moments in Motion`,
                    'foot.p':`Would you like to join the Maahad Tahfidz Darul Furqon family?`, 'foot.cta':`Contact Us on WhatsApp +`,
                    'foot.copyright':`© {{ date('Y') }} Maahad Tahfidz Darul Furqon. All rights reserved.` },
                ar: { 'back':`→ العودة إلى الرئيسية`, 'head.kicker':`معرض الأنشطة`, 'head.h1':`لحظات ذات معنى`,
                    'head.p':`لمحات من حياة الطلاب في معهد تحفيظ دار الفرقان — من الحلقات والعبادة إلى الدراسة والرحلات والرياضة والتآلف.`,
                    'sec1.kicker':`صور مختارة`, 'sec1.h':`لحظات الطلاب`, 'sec2.kicker':`فيديوهات الأنشطة`, 'sec2.h':`لقطات متحركة`,
                    'foot.p':`هل ترغب في الانضمام إلى أسرة معهد تحفيظ دار الفرقان؟`, 'foot.cta':`تواصل معنا عبر واتساب +`,
                    'foot.copyright':`© {{ date('Y') }} معهد تحفيظ دار الفرقان. جميع الحقوق محفوظة.` }
            };
            var PHOTOS = {
                en: [
                    {t:`Qur'an Halaqah`,d:`Memorisation guidance with teachers`},
                    {t:`Congregational Prayer`,d:`Nurturing worship discipline`},
                    {t:`Revision & Recitation`,d:`Revising memorisation in rows`},
                    {t:`Computer Class`,d:`Students' digital skills`},
                    {t:`Religious Studies`,d:`Knowledge classes`},
                    {t:`Educational Visit`,d:`Journeys and reflection`},
                    {t:`Recreation & Swimming`,d:`Fitness and courage`},
                    {t:`Sports & Co-Curriculum`,d:`Spirit and teamwork`},
                    {t:`Communal Feast`,d:`The etiquette of eating together`},
                    {t:`The Darul Furqon Family`,d:`Brotherhood of students and teachers`},
                    {t:`Reminder & Motivation`,d:`Spiritual nourishment`},
                    {t:`Female Students`,d:`Nurturing a Qur'anic generation`},
                    {t:`MTDF Campus`,d:`Pulau Indah, Selangor`},
                    {t:`Learning Class`,d:`The daily learning atmosphere`},
                    {t:`Female Students' Revision`,d:`Revising memorisation together`},
                    {t:`Student Assembly`,d:`Discipline and togetherness`}
                ],
                ar: [
                    {t:`حلقة القرآن`,d:`توجيه الحفظ مع الأساتذة`},
                    {t:`الصلاة جماعة`,d:`غرس الانضباط في العبادة`},
                    {t:`المراجعة والتلاوة`,d:`مراجعة الحفظ في الصفوف`},
                    {t:`حصة الحاسوب`,d:`مهارات رقمية للطلاب`},
                    {t:`الدراسة الدينية`,d:`حصص العلم`},
                    {t:`رحلة علمية`,d:`رحلات وتدبّر`},
                    {t:`ترفيه وسباحة`,d:`لياقة وشجاعة`},
                    {t:`رياضة وأنشطة`,d:`حماس وتعاون`},
                    {t:`مأدبة جماعية`,d:`آداب الطعام جماعة`},
                    {t:`أسرة دار الفرقان`,d:`أخوّة الطلاب والمعلمين`},
                    {t:`تذكير وتحفيز`,d:`غذاء روحي`},
                    {t:`طالبات دار الفرقان`,d:`بناء جيل قرآني`},
                    {t:`حرم المعهد`,d:`بولاو إنداه، سلانجور`},
                    {t:`حصة الدراسة`,d:`أجواء التعلّم اليومي`},
                    {t:`مراجعة الطالبات`,d:`مراجعة الحفظ معاً`},
                    {t:`طابور الطلاب`,d:`الانضباط والتآلف`}
                ]
            };
            var VIDEOS = {
                en: [ {t:`Prayer & Discipline`,d:`Congregational worship`}, {t:`Ceremony & Celebration`,d:`Community togetherness`}, {t:`Shared Activities`,d:`Brotherhood beyond class`}, {t:`Evening Halaqah`,d:`Reciting together`} ],
                ar: [ {t:`الصلاة والانضباط`,d:`عبادة جماعية`}, {t:`حفل واحتفاء`,d:`تآلف المجتمع`}, {t:`أنشطة مشتركة`,d:`أخوّة خارج الفصل`}, {t:`حلقة المساء`,d:`تلاوة جماعية`} ]
            };
            var LANGS = ['ms', 'en', 'ar'];
            function esc(s){ return s; }
            function applyLang(lang) {
                if (LANGS.indexOf(lang) < 0) lang = 'ms';
                var C = CHROME[lang];
                document.querySelectorAll('[data-i18n]').forEach(function (el) {
                    var k = el.getAttribute('data-i18n');
                    el.innerHTML = (C && C[k] != null) ? C[k] : el.getAttribute('data-ms');
                });
                tiles.forEach(function (t, i) {
                    var p = PHOTOS[lang] && PHOTOS[lang][i];
                    var title = p ? p.t : t.getAttribute('data-ms-title');
                    var desc = p ? p.d : t.getAttribute('data-ms-desc');
                    t.setAttribute('data-title', title);
                    t.setAttribute('data-desc', desc);
                    t.querySelector('figcaption').innerHTML = title + '<span>' + desc + '</span>';
                });
                vcards.forEach(function (v, i) {
                    var vv = VIDEOS[lang] && VIDEOS[lang][i];
                    var fc = v.querySelector('figcaption');
                    fc.innerHTML = vv ? (vv.t + '<span>' + vv.d + '</span>') : fc.getAttribute('data-ms');
                });
                document.documentElement.lang = lang;
                document.documentElement.setAttribute('dir', lang === 'ar' ? 'rtl' : 'ltr');
                document.querySelectorAll('.lang-btn').forEach(function (b) { b.classList.toggle('active', b.getAttribute('data-lang') === lang); });
                try { localStorage.setItem('df_lang', lang); } catch (e) {}
            }
            document.querySelectorAll('.lang-btn').forEach(function (b) {
                b.addEventListener('click', function () { applyLang(b.getAttribute('data-lang')); });
            });
            var savedLang = 'ms';
            try { savedLang = localStorage.getItem('df_lang') || 'ms'; } catch (e) {}
            applyLang(savedLang);

            // ---------- Butang kembali ke atas ----------
            var reduceMo = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            var scrollTopBtn = document.getElementById('scrollTop');
            if (scrollTopBtn) {
                var toggleTop = function () { scrollTopBtn.classList.toggle('show', window.pageYOffset > 400); };
                window.addEventListener('scroll', toggleTop, { passive: true });
                toggleTop();
                scrollTopBtn.addEventListener('click', function () {
                    window.scrollTo({ top: 0, behavior: reduceMo ? 'auto' : 'smooth' });
                });
            }

            // ---------- Lightbox ----------
            var lb = document.getElementById('lightbox');
            var lbImg = document.getElementById('lbImg');
            var lbCap = document.getElementById('lbCap');
            var lbCount = document.getElementById('lbCount');
            var cur = 0;
            function show(i) {
                cur = (i + tiles.length) % tiles.length;
                var t = tiles[cur];
                lbImg.src = t.getAttribute('href');
                lbImg.alt = t.getAttribute('data-title');
                lbCap.innerHTML = t.getAttribute('data-title') + '<span>' + t.getAttribute('data-desc') + '</span>';
                lbCount.textContent = (cur + 1) + ' / ' + tiles.length;
            }
            function open(i) { show(i); lb.classList.add('open'); lb.setAttribute('aria-hidden', 'false'); document.body.style.overflow = 'hidden'; }
            function close() { lb.classList.remove('open'); lb.setAttribute('aria-hidden', 'true'); document.body.style.overflow = ''; }
            tiles.forEach(function (t, i) {
                t.addEventListener('click', function (e) { e.preventDefault(); open(i); });
                t.addEventListener('keydown', function (e) { if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); open(i); } });
            });
            document.getElementById('lbClose').addEventListener('click', close);
            document.getElementById('lbNext').addEventListener('click', function () { show(cur + 1); });
            document.getElementById('lbPrev').addEventListener('click', function () { show(cur - 1); });
            lb.addEventListener('click', function (e) { if (e.target === lb) close(); });
            document.addEventListener('keydown', function (e) {
                if (!lb.classList.contains('open')) return;
                if (e.key === 'Escape') close();
                else if (e.key === 'ArrowRight') show(cur + 1);
                else if (e.key === 'ArrowLeft') show(cur - 1);
            });
        })();
    </script>
</body>
</html>
