@php
    $waNumber = '60174333652';
    $waText = rawurlencode("Assalamualaikum Maahad Tahfidz Darul Furqon, saya ingin bertanya tentang pendaftaran.");
    $wa = "https://wa.me/{$waNumber}?text={$waText}";

    $photos = [
        ['file' => 'halaqah.jpg',    'title' => "Halaqah Al-Qur'an",          'desc' => 'Bimbingan hafazan bersama asatizah'],
        ['file' => 'solat.jpg',      'title' => 'Solat Berjemaah',             'desc' => 'Mendidik disiplin ibadah santri'],
        ['file' => 'muraja.jpg',     'title' => "Muraja'ah & Tadarus",         'desc' => 'Mengulang hafazan dalam saf'],
        ['file' => 'komputer.jpg',   'title' => 'Kelas Komputer',              'desc' => 'Kemahiran digital santri'],
        ['file' => 'diniyah.jpg',    'title' => 'Pembelajaran Diniyah',        'desc' => 'Kelas ilmu santriwati'],
        ['file' => 'lawatan.jpg',    'title' => 'Lawatan Ilmu',                'desc' => 'Rihlah dan tadabbur alam'],
        ['file' => 'renang.jpg',     'title' => 'Rekreasi & Renang',           'desc' => 'Kecergasan dan keberanian'],
        ['file' => 'sukan.jpg',      'title' => 'Sukan & Ko-Kurikulum',        'desc' => 'Semangat dan kerjasama'],
        ['file' => 'jamuan.jpg',     'title' => 'Jamuan Kebersamaan',          'desc' => 'Adab makan berjemaah'],
        ['file' => 'keluarga.jpg',   'title' => 'Keluarga Besar Darul Furqon', 'desc' => 'Ukhuwah santri dan guru'],
        ['file' => 'tazkirah.jpg',   'title' => 'Tazkirah & Motivasi',         'desc' => 'Santapan rohani santri'],
        ['file' => 'santriwati.jpg', 'title' => 'Santriwati Darul Furqon',     'desc' => 'Membina generasi Qur\'ani'],
    ];

    $videos = [
        ['file' => 'kegiatan-1', 'title' => 'Solat & Kedisiplinan',  'desc' => 'Ibadah berjemaah santri'],
        ['file' => 'kegiatan-2', 'title' => 'Majlis & Raikan Santri', 'desc' => 'Kebersamaan komuniti'],
        ['file' => 'kegiatan-3', 'title' => 'Aktiviti Kebersamaan',   'desc' => 'Ukhuwah di luar kelas'],
        ['file' => 'kegiatan-4', 'title' => 'Halaqah Petang',         'desc' => 'Tadarus bersama'],
    ];
@endphp
<!DOCTYPE html>
<html lang="ms">
<head>
    <script>document.documentElement.classList.add('js');</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#062b23">
    <meta name="description" content="Galeri kegiatan Maahad Tahfidz Darul Furqon — halaqah, ibadah, akademik, lawatan, sukan, dan kebersamaan santri.">
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
        a { color:inherit; text-decoration:none; }
        :focus-visible { outline:3px solid var(--gold-400); outline-offset:3px; border-radius:4px; }
        .container { width:min(1180px, calc(100% - 40px)); margin:0 auto; }

        .gnav {
            position:sticky; top:0; z-index:20;
            background:linear-gradient(180deg, rgba(3,31,26,.98), rgba(6,43,35,.96));
            border-bottom:1px solid rgba(240,196,90,.22);
            backdrop-filter:saturate(1.1) blur(4px);
        }
        .gnav .container { display:flex; align-items:center; justify-content:space-between; gap:16px; padding:14px 0; }
        .brand { display:flex; align-items:center; gap:12px; }
        .brand-emblem {
            display:grid; width:56px; height:56px; place-items:center; padding:6px;
            border:1px solid rgba(240,196,90,.55); border-radius:15px; background:rgba(255,249,236,.96);
        }
        .brand-emblem img { width:100%; height:100%; object-fit:contain; }
        .brand b { color:#fff; font-size:16px; line-height:1.1; }
        .brand small { display:block; color:var(--gold-400); font-size:12px; font-weight:700; letter-spacing:.06em; }
        .back-home {
            color:#fff; font-size:14px; font-weight:800; padding:10px 16px;
            border:1px solid rgba(240,196,90,.4); border-radius:10px; background:rgba(255,255,255,.05);
            transition:transform .2s, border-color .2s;
        }
        .back-home:hover { transform:translateY(-2px); border-color:var(--gold-400); }

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

        /* Masonry photo grid */
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

        /* Lightbox */
        .lb { position:fixed; inset:0; z-index:60; display:none; align-items:center; justify-content:center;
            background:rgba(2,18,14,.92); backdrop-filter:blur(4px); padding:24px; }
        .lb.open { display:flex; }
        .lb-img { max-width:min(1100px,92vw); max-height:82vh; border-radius:12px; border:1px solid rgba(240,196,90,.35);
            box-shadow:0 30px 90px rgba(0,0,0,.5); object-fit:contain; }
        .lb-cap { position:absolute; left:0; right:0; bottom:22px; text-align:center; color:#fff; font-weight:900; }
        .lb-cap span { display:block; margin-top:4px; color:var(--gold-400); font-size:13px; font-weight:600; }
        .lb-btn { position:absolute; top:50%; transform:translateY(-50%); width:52px; height:52px; display:grid; place-items:center;
            color:#12352d; background:linear-gradient(180deg,var(--gold-400),var(--gold-500)); border:0; border-radius:50%; cursor:pointer;
            font-size:22px; font-weight:900; box-shadow:0 10px 24px rgba(0,0,0,.35); }
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
                <span class="brand-emblem"><img src="{{ asset('images/darul-furqon-logo.png') }}" alt="Logo Maahad Tahfidz Darul Furqon"></span>
                <span><b>Maahad Tahfidz</b><small>DARUL FURQON</small></span>
            </a>
            <a class="back-home" href="{{ url('/') }}">← Kembali ke Utama</a>
        </div>
    </header>

    <section class="ghead">
        <div class="container">
            <div class="kicker">Galeri Kegiatan</div>
            <h1>Detik Bermakna</h1>
            <p>Rakaman kehidupan santri Maahad Tahfidz Darul Furqon — dari halaqah dan ibadah, akademik, hingga lawatan, sukan, dan kebersamaan.</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="sec-head">
                <div class="kicker">Foto Pilihan</div>
                <h2>Momen Santri</h2>
            </div>
            <div class="masonry">
                @foreach ($photos as $i => $p)
                    <a class="tile" href="{{ asset('media/mtdf/gallery/'.$p['file']) }}"
                       role="button" tabindex="0"
                       data-index="{{ $i }}" data-title="{{ $p['title'] }}" data-desc="{{ $p['desc'] }}"
                       aria-label="Buka foto: {{ $p['title'] }}">
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
                <div class="kicker">Video Kegiatan</div>
                <h2>Detik Bergerak</h2>
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
            <p>Ingin menyertai keluarga besar Maahad Tahfidz Darul Furqon?</p>
            <a class="cta" href="{{ $wa }}" target="_blank" rel="noopener">Hubungi Kami di WhatsApp +</a>
            <div class="copyright">© {{ date('Y') }} Maahad Tahfidz Darul Furqon. Hak cipta terpelihara.</div>
        </div>
    </footer>

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
                t.addEventListener('keydown', function (e) {
                    if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); open(i); }
                });
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
