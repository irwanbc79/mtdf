@php
    $waNumber = '60174333652';
    $waText = rawurlencode("Assalamualaikum Maahad Tahfidz Darul Furqon, saya ingin bertanya tentang pendaftaran dan aktiviti maahad.");
    $wa = "https://wa.me/{$waNumber}?text={$waText}";

    $topics = [
        'all' => [
            'id' => 'all',
            'label' => 'Semua Kegiatan',
            'icon' => '🌟',
            'badge' => 'Koleksi 30 Foto',
            'desc' => 'Himpunan foto aktiviti harian, majlis ilmu, dan khidmat kemasyarakatan Maahad Tahfidz Darul Furqon.',
        ],
        'maulid-habib' => [
            'id' => 'maulid-habib',
            'label' => 'Maulid Habib Ibrahim',
            'icon' => '✨',
            'badge' => 'Majlis Khas · 10 Foto',
            'desc' => 'Gema selawat, qasidah, dan tausiyah barakah memupuk mahabbah kepada Baginda Nabi Muhammad ﷺ bersama Al-Habib Ibrahim bin Abu Bakar.',
        ],
        'maulid-masjid' => [
            'id' => 'maulid-masjid',
            'label' => 'Maulid Masjid Ar-Rahman',
            'icon' => '🕌',
            'badge' => 'Komuniti Qariah · 5 Foto + Video',
            'desc' => 'Semarak syiar selawat santri bersama jemaah Masjid Ar-Rahman & penduduk Kampung Sungai Pinang, lengkap dengan rakaman video majlis.',
        ],
        'aidilfitri' => [
            'id' => 'aidilfitri',
            'label' => 'Aidilfitri Kg. Sungai Pinang',
            'icon' => '🌙',
            'badge' => 'Ukhuwah Desa · 5 Foto',
            'desc' => 'Meraikan hari kemenangan Aidilfitri, memperkukuh tautan kasih dan silaturrahim bersama warga Kampung Sungai Pinang.',
        ],
        'perhimpunan' => [
            'id' => 'perhimpunan',
            'label' => 'Perhimpunan Pagi Isnin',
            'icon' => '🌅',
            'badge' => 'Disiplin & Sahsiah · 5 Foto',
            'desc' => 'Pembudayaan disiplin, tazkirah adab penuntut ilmu, dan amanat mingguan asatizah membina keperibadian huffaz.',
        ],
        'jemputan' => [
            'id' => 'jemputan',
            'label' => 'Jemputan Port Klang',
            'icon' => '🏢',
            'badge' => 'Khidmat Ummah · 5 Foto',
            'desc' => 'Santri membawa syiar Al-Qur\'an, bacaan doa selamat, dan majlis kesyukuran di syarikat perindustrian Pelabuhan Klang.',
        ],
    ];

    $photos = [
        // 1. Program Maulid Bersama Habib Ibrahim bin Abu Bakar (10 foto)
        [
            'cat' => 'maulid-habib',
            'cat_badge' => '✨ MAULID NABI',
            'file' => 'kegiatan/maulid-habib-ibrahim/maulid-habib-01.jpg',
            'title' => 'Kehadiran Al-Habib Ibrahim bin Abu Bakar',
            'desc' => 'Menyambut kehadiran tetamu mulia ke Maahad Tahfidz Darul Furqon',
        ],
        [
            'cat' => 'maulid-habib',
            'cat_badge' => '✨ MAULID NABI',
            'file' => 'kegiatan/maulid-habib-ibrahim/maulid-habib-02.jpg',
            'title' => 'Tausiyah & Santapan Rohani',
            'desc' => 'Peringatan tentang keagungan akhlak dan mahabbah kepada Rasulullah ﷺ',
        ],
        [
            'cat' => 'maulid-habib',
            'cat_badge' => '✨ MAULID NABI',
            'file' => 'kegiatan/maulid-habib-ibrahim/maulid-habib-03.jpg',
            'title' => 'Alunan Qasidah & Selawat',
            'desc' => 'Pelajar bersama asatizah menghidupkan majlis penuh syahdu',
        ],
        [
            'cat' => 'maulid-habib',
            'cat_badge' => '✨ MAULID NABI',
            'file' => 'kegiatan/maulid-habib-ibrahim/maulid-habib-04.jpg',
            'title' => 'Halaqah Mahabbah Habaib & Asatizah',
            'desc' => 'Tautan ukhuwah dan kemuliaan majlis ilmu di dewan maahad',
        ],
        [
            'cat' => 'maulid-habib',
            'cat_badge' => '✨ MAULID NABI',
            'file' => 'kegiatan/maulid-habib-ibrahim/maulid-habib-05.jpg',
            'title' => 'Tawajjuh & Khusyuk Pelajar',
            'desc' => 'Mendengar mutiara hikmah dengan penuh adab dan tawaduk',
        ],
        [
            'cat' => 'maulid-habib',
            'cat_badge' => '✨ MAULID NABI',
            'file' => 'kegiatan/maulid-habib-ibrahim/maulid-habib-06.jpg',
            'title' => 'Doa & Munajat Penutup',
            'desc' => 'Memohon keberkatan bagi seluruh warga MTDF dan ummah',
        ],
        [
            'cat' => 'maulid-habib',
            'cat_badge' => '✨ MAULID NABI',
            'file' => 'kegiatan/maulid-habib-ibrahim/maulid-habib-07.jpg',
            'title' => 'Ziarah & Amanat Barakah',
            'desc' => 'Amanat buat pimpinan maahad dalam mendidik generasi huffaz',
        ],
        [
            'cat' => 'maulid-habib',
            'cat_badge' => '✨ MAULID NABI',
            'file' => 'kegiatan/maulid-habib-ibrahim/maulid-habib-08.jpg',
            'title' => 'Musafahah Penuh Barakah',
            'desc' => 'Mengambil iktibar dan doa daripada para asatizah dan habaib',
        ],
        [
            'cat' => 'maulid-habib',
            'cat_badge' => '✨ MAULID NABI',
            'file' => 'kegiatan/maulid-habib-ibrahim/maulid-habib-09.jpg',
            'title' => 'Jamuan Kebersamaan Barakah',
            'desc' => 'Meraikan tetamu dan santri dalam hidangan ukhuwah',
        ],
        [
            'cat' => 'maulid-habib',
            'cat_badge' => '✨ MAULID NABI',
            'file' => 'kegiatan/maulid-habib-ibrahim/maulid-habib-10.jpg',
            'title' => 'Kenangan Bersama Tetamu Mulia',
            'desc' => 'Potret kenangan Al-Habib Ibrahim bersama pengurusan MTDF',
        ],

        // 2. Sambutan Maulid Masjid Ar-Rahman Kg. Sungai Pinang (5 foto)
        [
            'cat' => 'maulid-masjid',
            'cat_badge' => '🕌 MASJID QARIAH',
            'file' => 'kegiatan/maulid-masjid-ar-rahman/maulid-masjid-01.jpg',
            'title' => 'Pelajar MTDF di Masjid Ar-Rahman',
            'desc' => 'Menghadiri sambutan Maulidur Rasul bersama jemaah dan ahli qariah',
        ],
        [
            'cat' => 'maulid-masjid',
            'cat_badge' => '🕌 MASJID QARIAH',
            'file' => 'kegiatan/maulid-masjid-ar-rahman/maulid-masjid-02.jpg',
            'title' => 'Iringan Selawat Berjemaah',
            'desc' => 'Gema puji-pujian ke atas Baginda Rasulullah ﷺ bersama jemaah masjid',
        ],
        [
            'cat' => 'maulid-masjid',
            'cat_badge' => '🕌 MASJID QARIAH',
            'file' => 'kegiatan/maulid-masjid-ar-rahman/maulid-masjid-03.jpg',
            'title' => 'Kebersamaan Santri & Warga Kampung',
            'desc' => 'Merapatkan saf antara generasi muda tahfiz dan masyarakat setempat',
        ],
        [
            'cat' => 'maulid-masjid',
            'cat_badge' => '🕌 MASJID QARIAH',
            'file' => 'kegiatan/maulid-masjid-ar-rahman/maulid-masjid-04.jpg',
            'title' => 'Jamuan Santapan Ukhuwah',
            'desc' => 'Menjamu selera beramai-ramai selepas selesainya majlis ilmu',
        ],
        [
            'cat' => 'maulid-masjid',
            'cat_badge' => '🕌 MASJID QARIAH',
            'file' => 'kegiatan/maulid-masjid-ar-rahman/maulid-masjid-05.jpg',
            'title' => 'Keakraban Asatizah & Jawatankuasa Masjid',
            'desc' => 'Hubungan erat demi kebaikan dan syiar dakwah di Kg. Sungai Pinang',
        ],

        // 3. Sambutan Hari Raya Aidilfitri Kg. Sungai Pinang (5 foto)
        [
            'cat' => 'aidilfitri',
            'cat_badge' => '🌙 AIDILFITRI',
            'file' => 'kegiatan/aidilfitri-kampung-sungai-pinang/raya-kampung-01.jpg',
            'title' => 'Keriangan Aidilfitri Warga Tahfiz',
            'desc' => 'Pelajar berbusana raya menyambut hari kemenangan bersama',
        ],
        [
            'cat' => 'aidilfitri',
            'cat_badge' => '🌙 AIDILFITRI',
            'file' => 'kegiatan/aidilfitri-kampung-sungai-pinang/raya-kampung-02.jpg',
            'title' => 'Ziarah & Santunan Kasih Penduduk',
            'desc' => 'Mengeratkan silaturrahim dengan warga emas dan komuniti kampung',
        ],
        [
            'cat' => 'aidilfitri',
            'cat_badge' => '🌙 AIDILFITRI',
            'file' => 'kegiatan/aidilfitri-kampung-sungai-pinang/raya-kampung-03.jpg',
            'title' => 'Jamuan Raya Aneka Juadah Tradisi',
            'desc' => 'Menikmati hidangan ketupat dan juadah raya dalam suasana ceria',
        ],
        [
            'cat' => 'aidilfitri',
            'cat_badge' => '🌙 AIDILFITRI',
            'file' => 'kegiatan/aidilfitri-kampung-sungai-pinang/raya-kampung-04.jpg',
            'title' => 'Salaman & Kemaafan Syawal',
            'desc' => 'Menyemai adab kemaafan dan memuliakan sesama insan',
        ],
        [
            'cat' => 'aidilfitri',
            'cat_badge' => '🌙 AIDILFITRI',
            'file' => 'kegiatan/aidilfitri-kampung-sungai-pinang/raya-kampung-05.jpg',
            'title' => 'Potret Ukhuwah MTDF & Warga Desa',
            'desc' => 'Kenangan manis keharmonian maahad dan masyarakat Sungai Pinang',
        ],

        // 4. Perhimpunan Pagi Isnin (5 foto)
        [
            'cat' => 'perhimpunan',
            'cat_badge' => '🌅 SAHSIAH SANTRI',
            'file' => 'kegiatan/perhimpunan-isnin/perhimpunan-01.jpg',
            'title' => 'Barisan Pelajar Berbusana Putih',
            'desc' => 'Disiplin saf dan keseragaman santri memulakan minggu baharu',
        ],
        [
            'cat' => 'perhimpunan',
            'cat_badge' => '🌅 SAHSIAH SANTRI',
            'file' => 'kegiatan/perhimpunan-isnin/perhimpunan-02.jpg',
            'title' => 'Amanat & Nasihat Mingguan Asatizah',
            'desc' => 'Tazkirah adab penuntut ilmu sebelum memulakan sesi talaqqi',
        ],
        [
            'cat' => 'perhimpunan',
            'cat_badge' => '🌅 SAHSIAH SANTRI',
            'file' => 'kegiatan/perhimpunan-isnin/perhimpunan-03.jpg',
            'title' => 'Bacaan Doa & Asmaul Husna',
            'desc' => 'Memohon keberkatan dan kelapangan dada dalam menghafal Al-Qur\'an',
        ],
        [
            'cat' => 'perhimpunan',
            'cat_badge' => '🌅 SAHSIAH SANTRI',
            'file' => 'kegiatan/perhimpunan-isnin/perhimpunan-04.jpg',
            'title' => 'Pemeriksaan Kerapian & Sahsiah',
            'desc' => 'Menjaga kebersihan diri dan adab pakaian sunnah penuntut tahfiz',
        ],
        [
            'cat' => 'perhimpunan',
            'cat_badge' => '🌅 SAHSIAH SANTRI',
            'file' => 'kegiatan/perhimpunan-isnin/perhimpunan-05.jpg',
            'title' => 'Menuju ke Dewan Pengajian',
            'desc' => 'Semangat para huffaz melangkah ke halaqah talaqqi masing-masing',
        ],

        // 5. Jemputan Korporat Port Klang (5 foto)
        [
            'cat' => 'jemputan',
            'cat_badge' => '🏢 KORPORAT',
            'file' => 'kegiatan/jemputan-port-klang/jemputan-01.jpg',
            'title' => 'Kehadiran Pelajar di Premis Korporat',
            'desc' => 'Disambut mesra oleh warga kerja dan pengurusan syarikat di Port Klang',
        ],
        [
            'cat' => 'jemputan',
            'cat_badge' => '🏢 KORPORAT',
            'file' => 'kegiatan/jemputan-port-klang/jemputan-02.jpg',
            'title' => 'Alunan Ayat-Ayat Suci Al-Qur\'an',
            'desc' => 'Membuka majlis dengan bacaan kalam Ilahi yang menenangkan',
        ],
        [
            'cat' => 'jemputan',
            'cat_badge' => '🏢 KORPORAT',
            'file' => 'kegiatan/jemputan-port-klang/jemputan-03.jpg',
            'title' => 'Bacaan Doa Selamat & Kesyukuran',
            'desc' => 'Memohon kelancaran rezeki, keselamatan kerja, dan keberkatan syarikat',
        ],
        [
            'cat' => 'jemputan',
            'cat_badge' => '🏢 KORPORAT',
            'file' => 'kegiatan/jemputan-port-klang/jemputan-04.jpg',
            'title' => 'Ramah Mesra Bersama Warga Kerja',
            'desc' => 'Menghubungkan generasi tahfiz dengan pelbagai lapisan profesional',
        ],
        [
            'cat' => 'jemputan',
            'cat_badge' => '🏢 KORPORAT',
            'file' => 'kegiatan/jemputan-port-klang/jemputan-05.jpg',
            'title' => 'Tanda Penghargaan & Silaturrahim',
            'desc' => 'Membina hubungan berterusan antara pihak industri dan maahad',
        ],
    ];

    $videos = [
        [
            'cat' => 'maulid-masjid',
            'video_url' => asset('media/mtdf/kegiatan/maulid-masjid-ar-rahman/maulid-masjid-video.mp4'),
            'poster' => asset('media/mtdf/kegiatan/maulid-masjid-ar-rahman/maulid-masjid-01.jpg'),
            'badge' => 'Video Acara',
            'title' => 'Alunan Selawat Sambutan Maulidur Rasul',
            'desc' => 'Gema selawat dan qasidah santri MTDF bersama jemaah Masjid Ar-Rahman Kg. Sungai Pinang',
        ],
        [
            'cat' => 'halaqah',
            'video_url' => asset('media/mtdf/video-halaqah.mp4'),
            'poster' => asset('media/mtdf/activity-prayer.jpeg'),
            'badge' => 'Halaqah Al-Qur\'an',
            'title' => 'Sesi Talaqqi & Tasmik Harian',
            'desc' => 'Bimbingan hafazan bersama asatizah di dewan utama maahad',
        ],
        [
            'cat' => 'rihlah',
            'video_url' => asset('media/mtdf/video-swimming.mp4'),
            'poster' => asset('media/mtdf/activity-swimming.jpeg'),
            'badge' => 'Rihlah & Sukan Sunnah',
            'title' => 'Kecergasan Renang Santri MTDF',
            'desc' => 'Aktiviti riadah dan ketangkasan jasmani pelajar di hujung minggu',
        ],
    ];
@endphp
<!DOCTYPE html>
<html lang="ms">
<head>
    <script>document.documentElement.classList.add('js');</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#062b23">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="description" content="Galeri foto &amp; video aktiviti Maahad Tahfidz Darul Furqon — majlis Maulidur Rasul, Aidilfitri bersama qariah, perhimpunan pelajar, jemputan korporat, dan kehidupan tahfiz di Pulau Indah, Selangor.">
    <meta name="keywords" content="galeri darul furqon, maulidur rasul habib ibrahim, aktiviti tahfiz selangor, perhimpunan pelajar, pulau indah klang">
    <link rel="canonical" href="https://darulfurqon.my/galeri">
    <link rel="sitemap" type="application/xml" title="Sitemap" href="https://darulfurqon.my/sitemap.xml">

    <!-- Open Graph -->
    <meta property="og:site_name" content="Maahad Tahfidz Darul Furqon">
    <meta property="og:locale" content="ms_MY">
    <meta property="og:title" content="Galeri Aktiviti &amp; Momen Santri — Maahad Tahfidz Darul Furqon">
    <meta property="og:description" content="Koleksi foto dan video aktiviti rasmi, majlis Maulidur Rasul, ukhuwah komuniti, dan sahsiah pelajar di Maahad Tahfidz Darul Furqon.">
    <meta property="og:url" content="https://darulfurqon.my/galeri">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('media/mtdf/kegiatan/maulid-habib-ibrahim/maulid-habib-01.jpg') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Galeri Aktiviti &amp; Momen Santri — Maahad Tahfidz Darul Furqon">
    <meta name="twitter:description" content="Foto &amp; video aktiviti Maulidur Rasul, perhimpunan, dan khidmat komuniti pelajar Darul Furqon.">
    <meta name="twitter:image" content="{{ asset('media/mtdf/kegiatan/maulid-habib-ibrahim/maulid-habib-01.jpg') }}">

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32.png') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
    <title>Galeri Aktiviti &amp; Program — Maahad Tahfidz Darul Furqon</title>

    <!-- BreadcrumbList Schema -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@@type": "ListItem",
                "position": 1,
                "name": "Utama",
                "item": "https://darulfurqon.my/"
            },
            {
                "@@type": "ListItem",
                "position": 2,
                "name": "Galeri Aktiviti",
                "item": "https://darulfurqon.my/galeri"
            }
        ]
    }
    </script>
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
            display:grid; width:116px; height:110px; place-items:center; padding:0; margin:-8px 0;
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

        .ghead { position:relative; overflow:hidden; padding:68px 0 105px; text-align:center; color:#fff;
            background:
                linear-gradient(135deg, rgba(3,31,26,.96), rgba(8,56,47,.96)),
                linear-gradient(135deg, var(--emerald-980), var(--emerald-800)); }
        .ghead .container { position:relative; z-index:2; }
        .ghead .kicker { color:var(--gold-400); font-size:13px; font-weight:900; letter-spacing:.18em; text-transform:uppercase; }
        .ghead h1 { margin:12px 0 0; font-family:Georgia,"Times New Roman",serif; font-size:clamp(34px,4.6vw,56px); text-transform:uppercase; letter-spacing:.01em; }
        .ghead p { max-width:720px; margin:16px auto 0; color:rgba(255,255,255,.9); font-size:16px; line-height:1.65; }
        .ghead::after { content:""; position:absolute; left:-10%; right:-10%; bottom:-85px; height:150px; z-index:1; pointer-events:none;
            background:var(--cream-50); border-top:8px solid var(--gold-500); border-radius:0 0 50% 50%; transform:rotate(-2deg); }
        @media (max-width:680px){
            .ghead { padding:52px 0 92px; }
            .ghead p { font-size:14.5px; padding:0 10px; }
        }

        section { padding:48px 0; }
        .sec-head { text-align:center; margin-bottom:28px; }
        .sec-head .kicker { color:var(--gold-600); font-size:13px; font-weight:900; letter-spacing:.16em; text-transform:uppercase; }
        .sec-head h2 { margin:8px 0 0; color:var(--emerald-950); font-family:Georgia,"Times New Roman",serif; font-size:clamp(28px,3vw,40px); text-transform:uppercase; }

        /* ---------- Filter Tabs Bar ---------- */
        .filter-section { padding-top:20px; padding-bottom:10px; }
        .filter-nav {
            display:flex; flex-wrap:wrap; justify-content:center; gap:10px; margin:0 auto; max-width:980px;
        }
        .filter-btn {
            display:inline-flex; align-items:center; gap:8px; padding:10px 18px; border-radius:999px;
            border:1.5px solid rgba(213,162,59,.35); background:rgba(255,255,255,.8); color:var(--emerald-950);
            font-size:13.5px; font-weight:700; cursor:pointer; box-shadow:0 4px 14px rgba(3,31,26,.06);
            transition:all .25s ease;
        }
        .filter-btn:hover {
            transform:translateY(-2px); border-color:var(--gold-500); background:#fff;
            box-shadow:0 8px 20px rgba(213,162,59,.2);
        }
        .filter-btn.active {
            color:#12352d; background:linear-gradient(135deg,var(--gold-400),var(--gold-500));
            border-color:var(--gold-500); font-weight:900; box-shadow:0 8px 24px rgba(213,162,59,.4);
        }
        .filter-btn .f-badge {
            font-size:11px; padding:2px 8px; border-radius:999px; background:rgba(0,0,0,.08);
            font-weight:800;
        }
        .filter-btn.active .f-badge {
            background:rgba(18,53,45,.18); color:#0d2b23;
        }

        /* Topic Summary Card */
        .topic-summary {
            max-width:880px; margin:22px auto 0; padding:16px 24px; border-radius:14px;
            background:linear-gradient(135deg, rgba(6,43,35,.04), rgba(213,162,59,.08));
            border:1px solid rgba(213,162,59,.28); text-align:center; transition:opacity .3s;
        }
        .topic-summary h3 { margin:0; color:var(--emerald-950); font-size:17px; font-weight:800; }
        .topic-summary p { margin:6px 0 0; color:var(--muted); font-size:14px; line-height:1.5; }

        /* ---------- Masonry Gallery ---------- */
        .masonry { columns:4; column-gap:18px; margin-top:28px; }
        @media (max-width:1024px){ .masonry{ columns:3; } }
        @media (max-width:720px){ .masonry{ columns:2; column-gap:14px; } }
        @media (max-width:480px){ .masonry{ columns:1; } }

        .tile {
            position:relative; display:block; width:100%; margin:0 0 18px; break-inside:avoid;
            overflow:hidden; border-radius:14px; border:1px solid rgba(213,162,59,.28);
            background:var(--emerald-950); box-shadow:0 14px 34px rgba(3,31,26,.12); cursor:zoom-in;
            transition:transform .3s ease, box-shadow .3s ease;
        }
        .tile.hidden { display:none !important; }
        .tile:hover { transform:translateY(-4px); box-shadow:0 20px 45px rgba(3,31,26,.22); }
        .tile img { display:block; width:100%; height:auto; transition:transform .5s cubic-bezier(.2,.8,.2,1); }
        .tile:hover img { transform:scale(1.05); }

        .tile-tag {
            position:absolute; top:12px; left:12px; z-index:2;
            padding:4px 10px; border-radius:8px; font-size:10.5px; font-weight:900;
            letter-spacing:.05em; text-transform:uppercase;
            background:rgba(3,31,26,.88); color:var(--gold-400);
            border:1px solid rgba(240,196,90,.4); backdrop-filter:blur(4px);
            box-shadow:0 4px 12px rgba(0,0,0,.3);
        }

        .tile figcaption {
            position:absolute; inset:auto 0 0 0; padding:32px 16px 14px; color:#fff;
            background:linear-gradient(180deg, transparent, rgba(3,31,26,.92));
            font-weight:900; font-size:14.5px; line-height:1.3;
            opacity:0; transform:translateY(8px); transition:opacity .3s, transform .3s;
        }
        .tile figcaption span { display:block; margin-top:4px; color:var(--gold-400); font-size:12px; font-weight:600; line-height:1.4; }
        .tile:hover figcaption, .tile:focus-visible figcaption { opacity:1; transform:none; }

        .tile::after {
            content:"⤢"; position:absolute; top:12px; right:12px; width:34px; height:34px; display:grid; place-items:center;
            color:#12352d; background:linear-gradient(180deg,var(--gold-400),var(--gold-500)); border-radius:9px;
            font-size:15px; font-weight:900; opacity:0; transform:scale(.8); transition:opacity .3s, transform .3s;
            box-shadow:0 4px 12px rgba(0,0,0,.3);
        }
        .tile:hover::after { opacity:1; transform:none; }

        /* ---------- Video Section ---------- */
        .videos {
            background:linear-gradient(180deg, rgba(248,239,217,.5), rgba(255,249,236,.96)), var(--cream-100);
            border-top:1px solid rgba(213,162,59,.2); border-bottom:1px solid rgba(213,162,59,.2);
        }
        .video-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:22px; margin-top:20px; }
        @media (max-width:980px){ .video-grid{ grid-template-columns:repeat(2,1fr); } }
        @media (max-width:620px){ .video-grid{ grid-template-columns:1fr; } }

        .vcard {
            overflow:hidden; margin:0; border-radius:14px; border:1px solid rgba(213,162,59,.3);
            background:var(--emerald-950); box-shadow:0 16px 40px rgba(3,31,26,.14);
            display:flex; flex-direction:column;
        }
        .vcard-media { position:relative; width:100%; aspect-ratio:16/9; background:#021814; }
        .vcard video { display:block; width:100%; height:100%; object-fit:cover; }
        .vcard-tag {
            position:absolute; top:10px; left:10px; z-index:2;
            padding:4px 10px; border-radius:6px; font-size:10px; font-weight:900;
            background:rgba(3,31,26,.85); color:var(--gold-400); border:1px solid rgba(240,196,90,.3);
        }
        .vcard figcaption { padding:16px 18px; color:#fff; font-weight:900; font-size:15px; flex-grow:1; }
        .vcard figcaption span { display:block; margin-top:5px; color:rgba(255,255,255,.72); font-size:12.5px; font-weight:500; line-height:1.45; }

        /* ---------- Footer ---------- */
        .gfoot { color:rgba(255,255,255,.75); background:linear-gradient(180deg,var(--emerald-950),var(--emerald-980)); padding:40px 0; text-align:center; }
        .gfoot p { font-size:16px; margin:0 0 16px; }
        .gfoot a.cta {
            display:inline-flex; align-items:center; gap:8px; padding:13px 24px; color:#12352d; font-weight:900;
            background:linear-gradient(180deg,var(--gold-400),var(--gold-500)); border-radius:10px;
            box-shadow:0 8px 24px rgba(213,162,59,.35); transition:transform .2s;
        }
        .gfoot a.cta:hover { transform:translateY(-2px); }
        .gfoot .copyright { margin-top:24px; color:rgba(255,255,255,.5); font-size:13px; }
        .gfoot .powered-by { margin-top:6px; color:rgba(255,255,255,.5); font-size:13px; }
        .gfoot .powered-by a { color:var(--gold-400); font-weight:800; }

        /* ---------- FAB Stack ---------- */
        .fab-stack { position:fixed; right:22px; bottom:22px; z-index:70; display:flex; flex-direction:column; gap:12px; align-items:center; }
        .fab { display:grid; place-items:center; width:54px; height:54px; border:0; border-radius:50%; cursor:pointer; box-shadow:0 12px 30px rgba(3,31,26,.32); transition:transform .2s, box-shadow .2s, opacity .25s; }
        .fab:hover { transform:translateY(-3px); box-shadow:0 16px 38px rgba(3,31,26,.4); }
        .fab svg { width:27px; height:27px; display:block; }
        .fab-wa { background:#25d366; color:#fff; }
        .fab-top { background:linear-gradient(180deg,var(--gold-400),var(--gold-500)); color:#12352d; opacity:0; visibility:hidden; transform:translateY(12px); }
        .fab-top.show { opacity:1; visibility:visible; transform:none; }
        @media (max-width:600px){ .fab-stack{ right:14px; bottom:14px; } .fab{ width:50px; height:50px; } }

        /* ---------- Lightbox ---------- */
        .lb { position:fixed; inset:0; z-index:60; display:none; align-items:center; justify-content:center; background:rgba(2,18,14,.94); backdrop-filter:blur(6px); padding:24px; }
        .lb.open { display:flex; }
        .lb-img { max-width:min(1100px,92vw); max-height:80vh; border-radius:12px; border:1px solid rgba(240,196,90,.35); box-shadow:0 30px 90px rgba(0,0,0,.6); object-fit:contain; }
        .lb-cap { position:absolute; left:20px; right:20px; bottom:20px; text-align:center; color:#fff; font-weight:900; font-size:16px; }
        .lb-cap span { display:block; margin-top:4px; color:var(--gold-400); font-size:13.5px; font-weight:600; }
        .lb-btn { position:absolute; top:50%; transform:translateY(-50%); width:52px; height:52px; display:grid; place-items:center; color:#12352d; background:linear-gradient(180deg,var(--gold-400),var(--gold-500)); border:0; border-radius:50%; cursor:pointer; font-size:22px; font-weight:900; box-shadow:0 10px 24px rgba(0,0,0,.35); }
        .lb-prev { left:20px; } .lb-next { right:20px; }
        .lb-close { position:absolute; top:18px; right:20px; width:46px; height:46px; border-radius:12px; transform:none; font-size:20px; }
        .lb-count { position:absolute; top:24px; left:24px; color:var(--gold-400); font-size:13.5px; font-weight:800; letter-spacing:.08em; background:rgba(3,31,26,.8); padding:6px 14px; border-radius:999px; border:1px solid rgba(240,196,90,.3); }
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
            <div class="kicker" data-i18n="head.kicker">Galeri Kegiatan &amp; Program</div>
            <h1 data-i18n="head.h1">Detik Bermakna Santri</h1>
            <p data-i18n="head.p">Rakaman kehidupan pelajar Maahad Tahfidz Darul Furqon — majlis Maulidur Rasul bersama tetamu mulia, ukhuwah Aidilfitri desa, perhimpunan disiplin mingguan, dan khidmat doa selamat komuniti.</p>
        </div>
    </section>

    <!-- Filter Topik Kegiatan -->
    <section class="filter-section">
        <div class="container">
            <div class="filter-nav" role="tablist" aria-label="Pilih topik kegiatan">
                @foreach ($topics as $tid => $top)
                    <button type="button" class="filter-btn {{ $tid === 'all' ? 'active' : '' }}"
                            data-cat="{{ $tid }}" role="tab"
                            aria-selected="{{ $tid === 'all' ? 'true' : 'false' }}">
                        <span>{{ $top['icon'] }}</span>
                        <span data-i18n="top.{{ $tid }}.label">{{ $top['label'] }}</span>
                        <span class="f-badge">{{ $top['badge'] }}</span>
                    </button>
                @endforeach
            </div>

            <!-- Ringkasan Topik Aktif -->
            <div class="topic-summary" id="topicSummary">
                <h3 id="topicTitle" data-i18n="top.all.label">Semua Kegiatan</h3>
                <p id="topicDesc" data-i18n="top.all.desc">Himpunan foto aktiviti harian, majlis ilmu, dan khidmat kemasyarakatan Maahad Tahfidz Darul Furqon.</p>
            </div>
        </div>
    </section>

    <!-- Galeri Foto Masonry -->
    <section style="padding-top:10px;">
        <div class="container">
            <div class="masonry" id="galleryGrid">
                @foreach ($photos as $i => $p)
                    <a class="tile" href="{{ asset('media/mtdf/'.$p['file']) }}"
                       role="button" tabindex="0"
                       data-index="{{ $i }}"
                       data-category="{{ $p['cat'] }}"
                       data-title="{{ $p['title'] }}"
                       data-desc="{{ $p['desc'] }}"
                       aria-label="{{ $p['title'] }}">
                        <span class="tile-tag">{{ $p['cat_badge'] }}</span>
                        <img src="{{ asset('media/mtdf/'.$p['file']) }}" alt="{{ $p['title'] }} — Maahad Tahfidz Darul Furqon" loading="lazy">
                        <figcaption>
                            {{ $p['title'] }}
                            <span>{{ $p['desc'] }}</span>
                        </figcaption>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Video Showcase -->
    <section class="videos">
        <div class="container">
            <div class="sec-head">
                <div class="kicker" data-i18n="sec2.kicker">Rakaman Video Kegiatan</div>
                <h2 data-i18n="sec2.h">Detik Bergerak &amp; Syiar</h2>
            </div>
            <div class="video-grid">
                @foreach ($videos as $v)
                    <figure class="vcard" data-category="{{ $v['cat'] }}">
                        <div class="vcard-media">
                            <span class="vcard-tag">{{ $v['badge'] }}</span>
                            <video controls preload="metadata" playsinline poster="{{ $v['poster'] }}">
                                <source src="{{ $v['video_url'] }}" type="video/mp4">
                                Pelayar anda tidak menyokong pemain video ini.
                            </video>
                        </div>
                        <figcaption>
                            {{ $v['title'] }}
                            <span>{{ $v['desc'] }}</span>
                        </figcaption>
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

    <!-- Lightbox Modal -->
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
            var filterBtns = Array.prototype.slice.call(document.querySelectorAll('.filter-btn'));
            var topicTitle = document.getElementById('topicTitle');
            var topicDesc = document.getElementById('topicDesc');
            var currentCategory = 'all';

            // ---------- i18n Dictionary (BM, EN, AR) ----------
            document.querySelectorAll('[data-i18n]').forEach(function (el) { el.setAttribute('data-ms', el.innerHTML); });
            tiles.forEach(function (t) {
                t.setAttribute('data-ms-title', t.getAttribute('data-title'));
                t.setAttribute('data-ms-desc', t.getAttribute('data-desc'));
            });

            var CHROME = {
                en: {
                    'back': '← Back to Home',
                    'head.kicker': 'Activity & Program Gallery',
                    'head.h1': 'Meaningful Student Moments',
                    'head.p': 'Moments of student life at Maahad Tahfidz Darul Furqon — blessed Maulid celebrations with esteemed guests, Eid kinship with villagers, weekly discipline assemblies, and corporate prayer sessions.',
                    'sec2.kicker': 'Activity Video Recordings',
                    'sec2.h': 'Moments in Motion',
                    'foot.p': 'Would you like to join the Maahad Tahfidz Darul Furqon family?',
                    'foot.cta': 'Contact Us on WhatsApp +',
                    'foot.copyright': "© {{ date('Y') }} Maahad Tahfidz Darul Furqon. All rights reserved.",
                    'top.all.label': 'All Activities',
                    'top.all.desc': 'A comprehensive collection of daily activities, religious gatherings, and community service at Maahad Tahfidz Darul Furqon.',
                    'top.maulid-habib.label': 'Maulid with Habib Ibrahim',
                    'top.maulid-habib.desc': 'Echoes of salawat, qasidah, and blessed advice cultivating love for Prophet Muhammad ﷺ with Al-Habib Ibrahim bin Abu Bakar.',
                    'top.maulid-masjid.label': 'Maulid with Ar-Rahman Mosque',
                    'top.maulid-masjid.desc': 'Vibrant celebrations of salawat with the mosque congregation and Kampung Sungai Pinang villagers, including video coverage.',
                    'top.aidilfitri.label': 'Eid al-Fitr with Village Community',
                    'top.aidilfitri.desc': 'Celebrating Eid al-Fitr, fostering warmth and kinship with the Kampung Sungai Pinang community.',
                    'top.perhimpunan.label': 'Monday Morning Assembly',
                    'top.perhimpunan.desc': 'Nurturing student discipline, adab reminders, and weekly guidance shaping the character of young huffaz.',
                    'top.jemputan.label': 'Port Klang Corporate Invitation',
                    'top.jemputan.desc': 'Students bringing Qur\'anic blessings, safety prayers, and tahlil to industrial companies in Port Klang.'
                },
                ar: {
                    'back': '→ العودة إلى الرئيسية',
                    'head.kicker': 'معرض الأنشطة والبرامج',
                    'head.h1': 'لحظات مباركة للطلاب',
                    'head.p': 'لمحات من حياة طلاب معهد تحفيظ دار الفرقان — احتفالات المولد النبوي المباركة، بهجة عيد الفطر مع أهل القرية، طابور الصباح الأسبوعي، وأدعية البركة المجتمعية.',
                    'sec2.kicker': 'التسجيلات المرئية للأنشطة',
                    'sec2.h': 'لقطات حية ومتحركة',
                    'foot.p': 'هل ترغب في الانضمام إلى أسرة معهد تحفيظ دار الفرقان؟',
                    'foot.cta': 'تواصل معنا عبر واتساب +',
                    'foot.copyright': "© {{ date('Y') }} معهد تحفيظ دار الفرقان. جميع الحقوق محفوظة.",
                    'top.all.label': 'جميع الأنشطة',
                    'top.all.desc': 'مجموعة شاملة للأنشطة اليومية والمجالس المباركة وخدمة المجتمع في معهد تحفيظ دار الفرقان.',
                    'top.maulid-habib.label': 'المولد مع الحبيب إبراهيم',
                    'top.maulid-habib.desc': 'أصداء الصلاة على النبي والقصائد والمواعظ المباركة لغرس محبة النبي ﷺ مع الحبيب إبراهيم بن أبي بكر.',
                    'top.maulid-masjid.label': 'المولد بمسجد الرحمن',
                    'top.maulid-masjid.desc': 'إحياء سنن المولد النبوي مع جماعة مسجد الرحمن وأهالي قرية سونغاي بينانغ مع تسجيل مرئي للمجلس.',
                    'top.aidilfitri.label': 'عيد الفطر مع أهل القرية',
                    'top.aidilfitri.desc': 'الاحتفال بعيد الفطر المبارك وتعزيز أواصر المودة وصلة الرحم مع سكان قرية سونغاي بينانغ.',
                    'top.perhimpunan.label': 'طابور صباح الاثنين',
                    'top.perhimpunan.desc': 'غرس الانضباط والتذكير بآداب طالب العلم والتوجيهات الأسبوعية لبناء شخصية حفظة كتاب الله.',
                    'top.jemputan.label': 'دعوة شركات بورت كلانج',
                    'top.jemputan.desc': 'الطلاب يحملون بركات القرآن وأدعية السلامة والتبرك في مؤسسات ميناء كلانج الصناعية.'
                }
            };

            var TOPIC_DETAILS = {
                ms: {
                    'all': { t: 'Semua Kegiatan', d: 'Himpunan foto aktiviti harian, majlis ilmu, dan khidmat kemasyarakatan Maahad Tahfidz Darul Furqon.' },
                    'maulid-habib': { t: 'Maulid Bersama Habib Ibrahim', d: 'Gema selawat, qasidah, dan tausiyah barakah memupuk mahabbah kepada Baginda Nabi Muhammad ﷺ bersama Al-Habib Ibrahim bin Abu Bakar.' },
                    'maulid-masjid': { t: 'Maulid Masjid Ar-Rahman', d: 'Semarak syiar selawat santri bersama jemaah Masjid Ar-Rahman & penduduk Kampung Sungai Pinang, lengkap dengan rakaman video majlis.' },
                    'aidilfitri': { t: 'Aidilfitri Kg. Sungai Pinang', d: 'Meraikan hari kemenangan Aidilfitri, memperkukuh tautan kasih dan silaturrahim bersama warga Kampung Sungai Pinang.' },
                    'perhimpunan': { t: 'Perhimpunan Pagi Isnin', d: 'Pembudayaan disiplin, tazkirah adab penuntut ilmu, dan amanat mingguan asatizah membina keperibadian huffaz.' },
                    'jemputan': { t: 'Jemputan Port Klang', d: 'Santri membawa syiar Al-Qur\'an, bacaan doa selamat, dan majlis kesyukuran di syarikat perindustrian Pelabuhan Klang.' }
                },
                en: {
                    'all': { t: 'All Activities', d: 'A comprehensive collection of daily activities, religious gatherings, and community service at Maahad Tahfidz Darul Furqon.' },
                    'maulid-habib': { t: 'Maulid with Habib Ibrahim', d: 'Echoes of salawat, qasidah, and blessed advice cultivating love for Prophet Muhammad ﷺ with Al-Habib Ibrahim bin Abu Bakar.' },
                    'maulid-masjid': { t: 'Maulid with Ar-Rahman Mosque', d: 'Vibrant celebrations of salawat with the mosque congregation and Kampung Sungai Pinang villagers, including video coverage.' },
                    'aidilfitri': { t: 'Eid al-Fitr with Village Community', d: 'Celebrating Eid al-Fitr, fostering warmth and kinship with the Kampung Sungai Pinang community.' },
                    'perhimpunan': { t: 'Monday Morning Assembly', d: 'Nurturing student discipline, adab reminders, and weekly guidance shaping the character of young huffaz.' },
                    'jemputan': { t: 'Port Klang Corporate Invitation', d: 'Students bringing Qur\'anic blessings, safety prayers, and tahlil to industrial companies in Port Klang.' }
                },
                ar: {
                    'all': { t: 'جميع الأنشطة', d: 'مجموعة شاملة للأنشطة اليومية والمجالس المباركة وخدمة المجتمع في معهد تحفيظ دار الفرقان.' },
                    'maulid-habib': { t: 'المولد مع الحبيب إبراهيم', d: 'أصداء الصلاة على النبي والقصائد والمواعظ المباركة لغرس محبة النبي ﷺ مع الحبيب إبراهيم بن أبي بكر.' },
                    'maulid-masjid': { t: 'المولد بمسجد الرحمن', d: 'إحياء سنن المولد النبوي مع جماعة مسجد الرحمن وأهالي قرية سونغاي بينانغ مع تسجيل مرئي للمجلس.' },
                    'aidilfitri': { t: 'عيد الفطر مع أهل القرية', d: 'الاحتفال بعيد الفطر المبارك وتعزيز أواصر المودة وصلة الرحم مع سكان قرية سونغاي بينانغ.' },
                    'perhimpunan': { t: 'طابور صباح الاثنين', d: 'غرس الانضباط والتذكير بآداب طالب العلم والتوجيهات الأسبوعية لبناء شخصية حفظة كتاب الله.' },
                    'jemputan': { t: 'دعوة شركات بورت كلانج', d: 'الطلاب يحملون بركات القرآن وأدعية السلامة والتبرك في مؤسسات ميناء كلانج الصناعية.' }
                }
            };

            var currentLang = 'ms';

            function updateTopicSummary(cat) {
                var langDict = TOPIC_DETAILS[currentLang] || TOPIC_DETAILS['ms'];
                var data = langDict[cat] || langDict['all'];
                if (topicTitle && topicDesc) {
                    topicTitle.textContent = data.t;
                    topicDesc.textContent = data.d;
                }
            }

            function applyFilter(cat) {
                currentCategory = cat;
                filterBtns.forEach(function (b) {
                    var isActive = b.getAttribute('data-cat') === cat;
                    b.classList.toggle('active', isActive);
                    b.setAttribute('aria-selected', isActive ? 'true' : 'false');
                });

                tiles.forEach(function (t) {
                    var itemCat = t.getAttribute('data-category');
                    if (cat === 'all' || itemCat === cat) {
                        t.classList.remove('hidden');
                    } else {
                        t.classList.add('hidden');
                    }
                });

                updateTopicSummary(cat);
            }

            filterBtns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    var cat = btn.getAttribute('data-cat');
                    applyFilter(cat);
                });
            });

            // ---------- i18n Language Switcher ----------
            var LANGS = ['ms', 'en', 'ar'];
            function applyLang(lang) {
                if (LANGS.indexOf(lang) < 0) lang = 'ms';
                currentLang = lang;
                var C = CHROME[lang];

                document.querySelectorAll('[data-i18n]').forEach(function (el) {
                    var k = el.getAttribute('data-i18n');
                    if (C && C[k] != null) {
                        el.innerHTML = C[k];
                    } else if (el.hasAttribute('data-ms')) {
                        el.innerHTML = el.getAttribute('data-ms');
                    }
                });

                document.documentElement.lang = lang;
                document.documentElement.setAttribute('dir', lang === 'ar' ? 'rtl' : 'ltr');
                document.querySelectorAll('.lang-btn').forEach(function (b) {
                    b.classList.toggle('active', b.getAttribute('data-lang') === lang);
                });

                updateTopicSummary(currentCategory);
                try { localStorage.setItem('df_lang', lang); } catch (e) {}
            }

            document.querySelectorAll('.lang-btn').forEach(function (b) {
                b.addEventListener('click', function () { applyLang(b.getAttribute('data-lang')); });
            });

            var savedLang = 'ms';
            try { savedLang = localStorage.getItem('df_lang') || 'ms'; } catch (e) {}
            applyLang(savedLang);

            // ---------- Back to Top Button ----------
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

            // ---------- Lightbox (Works with Active Filter) ----------
            var lb = document.getElementById('lightbox');
            var lbImg = document.getElementById('lbImg');
            var lbCap = document.getElementById('lbCap');
            var lbCount = document.getElementById('lbCount');
            var activeTiles = [];
            var curIdx = 0;

            function getVisibleTiles() {
                return tiles.filter(function (t) { return !t.classList.contains('hidden'); });
            }

            function showLb(idx) {
                activeTiles = getVisibleTiles();
                if (activeTiles.length === 0) return;
                curIdx = (idx + activeTiles.length) % activeTiles.length;
                var t = activeTiles[curIdx];
                lbImg.src = t.getAttribute('href');
                lbImg.alt = t.getAttribute('data-title');
                lbCap.innerHTML = t.getAttribute('data-title') + '<span>' + t.getAttribute('data-desc') + '</span>';
                lbCount.textContent = (curIdx + 1) + ' / ' + activeTiles.length;
            }

            function openLb(tileEl) {
                activeTiles = getVisibleTiles();
                var idx = activeTiles.indexOf(tileEl);
                if (idx < 0) idx = 0;
                showLb(idx);
                lb.classList.add('open');
                lb.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';
            }

            function closeLb() {
                lb.classList.remove('open');
                lb.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            }

            tiles.forEach(function (t) {
                t.addEventListener('click', function (e) {
                    e.preventDefault();
                    openLb(t);
                });
                t.addEventListener('keydown', function (e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        openLb(t);
                    }
                });
            });

            document.getElementById('lbClose').addEventListener('click', closeLb);
            document.getElementById('lbNext').addEventListener('click', function () { showLb(curIdx + 1); });
            document.getElementById('lbPrev').addEventListener('click', function () { showLb(curIdx - 1); });
            lb.addEventListener('click', function (e) { if (e.target === lb) closeLb(); });
            document.addEventListener('keydown', function (e) {
                if (!lb.classList.contains('open')) return;
                if (e.key === 'Escape') closeLb();
                else if (e.key === 'ArrowRight') showLb(curIdx + 1);
                else if (e.key === 'ArrowLeft') showLb(curIdx - 1);
            });
        })();
    </script>
</body>
</html>
