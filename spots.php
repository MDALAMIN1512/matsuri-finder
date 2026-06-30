<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sightseeing Spots - Japan Guide</title>
    <style>
        /* Beautiful 3-column grid layout for 47 spots */
        .spots-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 1.5rem;
        }
        .spot-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
            display: flex;
            flex-direction: column;
        }
        .spot-img-container {
            width: 100%;
            height: 180px;
            background-color: #eee;
        }
        .spot-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .spot-body {
            padding: 1.25rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .spot-tag {
            font-size: 0.75rem;
            font-weight: bold;
            color: #e11d48;
            background: #ffe4e6;
            padding: 0.2rem 0.5rem;
            border-radius: 4px;
            align-self: flex-start;
            margin-bottom: 0.5rem;
        }
        .spot-heading {
            font-size: 1.2rem;
            margin: 0 0 0.5rem 0;
            font-weight: bold;
            color: #111;
        }
        .spot-txt {
            font-size: 0.88rem;
            color: #444;
            margin: 0;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="top-stripe"></div>

    <div style="background-color: #e60012; color: white; text-align: center; padding: 2rem 1rem;">
        <h1 style="margin:0; font-size: 2rem;">📍 Sightseeing Spots</h1>
        <p style="margin:5px 0 0 0; opacity: 0.9; font-size:0.9rem;">Japan Guide — Explore all 47 Prefectures of Japan</p>
    </div>

    <nav>
        <div class="nav-wrap">
            <a href="index.php">Matsuri Finder</a>
            <a href="spots.php" class="active">Sightseeing Spots</a>
            <a href="holidays.php">Public Holidays</a>
        </div>
    </nav>

    <div class="container">
        <p class="intro-text" style="background:#f1f5f9; padding: 1rem; border-radius:6px; margin-bottom: 2rem;">Japan consists of 47 individual prefectures, each offering distinct cultural heritage, breathtaking local sights, and deep-rooted traditions. Explore the highlights below:</p>

        <div class="spots-grid">

            <?php
            // 47 Completely Unique, High-Quality Images for every single prefecture
            $prefectures = [
                1 => ["Hokkaido", "Hokkaido Region", "Famous for its majestic nature, world-class ski resorts in Niseko, fresh seafood, and winter snow festivals.", "https://picsum.photos/id/1015/400/250"],
                2 => ["Aomori", "Tohoku Region", "Renowned globally for high-quality apples, Hirosaki Castle's cherry blossoms, and giant paper lantern Nebuta Matsuri.", "https://picsum.photos/id/1016/400/250"],
                3 => ["Iwate", "Tohoku Region", "Home to the peaceful temples of Hiraizumi (UNESCO World Heritage Site) and rugged, beautiful Pacific coastlines.", "https://picsum.photos/id/1018/400/250"],
                4 => ["Miyagi", "Tohoku Region", "Hosts Sendai city, the stunning Pine-clad islets of Matsushima Bay, and a fantastic culinary scene.", "https://picsum.photos/id/1019/400/250"],
                5 => ["Akita", "Tohoku Region", "Famed as the birthplace of loyal Akita dogs, historic samurai districts, and calming mountain hot springs.", "https://picsum.photos/id/1021/400/250"],
                6 => ["Yamagata", "Tohoku Region", "Known for the atmospheric mountain temple Yamadera, premium cherries, and the winter monsters of Mount Zao.", "https://picsum.photos/id/1022/400/250"],
                7 => ["Fukushima", "Tohoku Region", "Features Tsuruga Castle, the historic town of Ouchi-juku, beautiful volcanic lakes, and traditional fruit orchards.", "https://picsum.photos/id/1025/400/250"],
                8 => ["Ibaraki", "Kanto Region", "Famous for the rolling scenic blue nemophila flower fields at Hitachi Seaside Park and Kairakuen Garden.", "https://picsum.photos/id/1033/400/250"],
                9 => ["Tochigi", "Kanto Region", "Home to Nikko's lavish Toshogu Shrine complex, beautiful mountain scenery, and soothing hot spring resorts.", "https://picsum.photos/id/1035/400/250"],
                10 => ["Gunma", "Kanto Region", "One of Japan's top hot spring prefectures, showcasing Kusatsu Onsen and rugged mountain hiking trails.", "https://picsum.photos/id/1036/400/250"],
                11 => ["Saitama", "Kanto Region", "Offers the historic warehouse district of Kawagoe (Little Edo) and beautiful scenic river boating in Nagatoro.", "https://picsum.photos/id/1039/400/250"],
                12 => ["Chiba", "Kanto Region", "Houses Tokyo Disney Resort, Narita Airport, and the expansive coastal landscapes of the Boso Peninsula.", "https://picsum.photos/id/1043/400/250"],
                13 => ["Tokyo", "Kanto Region", "The ultra-modern neon capital blending soaring skyscrapers with historic shrines in Asakusa.", "https://picsum.photos/id/1044/400/250"],
                14 => ["Kanagawa", "Kanto Region", "Features historical Kamakura temples, the futuristic port city of Yokohama, and relaxing hot springs in Hakone.", "https://picsum.photos/id/1045/400/250"],
                15 => ["Niigata", "Chubu Region", "Celebrated for producing premium rice, fine sake, massive winter ski snowfall, and scenic Sado Island.", "https://picsum.photos/id/1047/400/250"],
                16 => ["Toyama", "Chubu Region", "The gateway to the dramatic Tateyama Kurobe Alpine Route, offering spectacular towering walls of pure snow.", "https://picsum.photos/id/1048/400/250"],
                17 => ["Ishikawa", "Chubu Region", "Boasts Kanazawa's historic tea districts, the stunning Kenrokuen Garden, and preserved samurai architecture.", "https://picsum.photos/id/1050/400/250"],
                18 => ["Fukui", "Chubu Region", "Home to the impressive Eiheiji Zen Temple, the rugged Tojinbo Cliffs, and premier dinosaur fossil sites.", "https://picsum.photos/id/1051/400/250"],
                19 => ["Yamanashi", "Chubu Region", "Offers the iconic Fuji Five Lakes at the northern base of Mount Fuji, alongside lush local grape vineyards.", "https://picsum.photos/id/1052/400/250"],
                20 => ["Nagano", "Chubu Region", "Hosted the Winter Olympics; famous for mountain peaks, historic Zenkoji Temple, and the hot spring Snow Monkeys.", "https://picsum.photos/id/1053/400/250"],
                21 => ["Gifu", "Chubu Region", "Showcases the UNESCO thatched-roof farmhouses of Shirakawa-go and the traditional historical old town of Takayama.", "https://picsum.photos/id/1054/400/250"],
                22 => ["Shizuoka", "Chubu Region", "Provides unparalleled views of Mount Fuji, premium green tea plantations, and the sunny Izu Peninsula beaches.", "https://picsum.photos/id/1056/400/250"],
                23 => ["Aichi", "Chubu Region", "The dynamic industrial center housing Nagoya city, Nagoya Castle, and the exciting new Ghibli Park amusement.", "https://picsum.photos/id/1057/400/250"],
                24 => ["Mie", "Kansai Region", "Home to the sacred Ise Grand Shrine, the ancient Kumano Kodo pilgrimage, and pearls from Ago Bay.", "https://picsum.photos/id/1058/400/250"],
                25 => ["Shiga", "Kansai Region", "Surrounds Lake Biwa, Japan's largest freshwater lake, alongside the beautiful preserved Hikone Castle tower.", "https://picsum.photos/id/1059/400/250"],
                26 => ["Kyoto", "Kansai Region", "The legendary historic soul of Japan, brimming with thousands of golden temples, shrines, and geisha cultures.", "https://picsum.photos/id/1062/400/250"],
                27 => ["Osaka", "Kansai Region", "A massive neon-lit food paradise famous for Universal Studios Japan, Osaka Castle, and warm local hospitality.", "https://picsum.photos/id/1065/400/250"],
                28 => ["Hyogo", "Kansai Region", "Features the iconic white Himeji Castle, the stylish port streets of Kobe, and classic Arima Onsen springs.", "https://picsum.photos/id/1067/400/250"],
                29 => ["Nara", "Kansai Region", "Japan's ancient first capital filled with friendly free-roaming deer and the monumental Great Buddha temple.", "https://picsum.photos/id/1069/400/250"],
                30 => ["Wakayama", "Kansai Region", "The spiritual heartland featuring the sacred Mount Koya temple settlement and Nachi Falls waterfall.", "https://picsum.photos/id/1070/400/250"],
                31 => ["Tottori", "Chugoku Region", "Famous across Japan for its massive coastal Sand Dunes and coastal fresh snow crab seafood delicacies.", "https://picsum.photos/id/1071/400/250"],
                32 => ["Shimane", "Chugoku Region", "Houses Izumo Taisha, one of Japan's oldest and most important Shinto shrines, alongside beautiful sunsets.", "https://picsum.photos/id/1073/400/250"],
                33 => ["Okayama", "Chugoku Region", "Known as the land of sunshine, hosting the idyllic Kurashiki Bikan historical canal district and Korakuen.", "https://picsum.photos/id/1074/400/250"],
                34 => ["Hiroshima", "Chugoku Region", "Features the moving Peace Memorial Park and the iconic floating red torii gate of Itsukushima Shrine.", "https://picsum.photos/id/1076/400/250"],
                35 => ["Yamaguchi", "Chugoku Region", "Home to the striking red-tunnel Motonosumi Shrine on the oceanside and historic bridge Kintaikyo.", "https://picsum.photos/id/1080/400/250"],
                36 => ["Tokushima", "Shikoku Region", "Famous for hosting the energetic, rhythmic summer Awa Odori dance festival and the dramatic Naruto Whirlpools.", "https://picsum.photos/id/1081/400/250"],
                37 => ["Kagawa", "Shikoku Region", "The Sanuki Udon noodle capital of the world, featuring beautiful art islands like Naoshima in the Seto Sea.", "https://picsum.photos/id/1082/400/250"],
                38 => ["Ehime", "Shikoku Region", "Showcases Dogo Onsen, one of the oldest hot springs in Japan, and premium sweet local mikan citrus fruits.", "https://picsum.photos/id/111/400/250"],
                39 => ["Kochi", "Shikoku Region", "Offers rugged, dramatic Pacific coastlines at Katsurahama beach and the energetic street-dancing Yosakoi festival.", "https://picsum.photos/id/122/400/250"],
                40 => ["Fukuoka", "Kyushu Region", "A modern southern hub renowned for open-air open street food stalls (yatai) and savory tonkotsu ramen.", "https://picsum.photos/id/124/400/250"],
                41 => ["Saga", "Kyushu Region", "Deeply famous for centuries-old fine ceramic pottery traditions in Arita and the colorful Saga International Balloon Fiesta.", "https://picsum.photos/id/133/400/250"],
                42 => ["Nagasaki", "Kyushu Region", "An attractive hillside port city showcasing unique Chinese and European historical trade heritage.", "https://picsum.photos/id/141/400/250"],
                43 => ["Kumamoto", "Kyushu Region", "Features the imposing grand stone walls of Kumamoto Castle and the active volcanic landscapes of Mount Aso.", "https://picsum.photos/id/145/400/250"],
                44 => ["Oita", "Kyushu Region", "Japan's undisputed hot spring capital, offering the unique bubbling steam 'hells' of Beppu and Yufuin.", "https://picsum.photos/id/149/400/250"],
                45 => ["Miyazaki", "Kyushu Region", "Boasts beautiful tropical coastlines, the mystical Takachiho Gorge, and delicious high-end local mangoes.", "https://picsum.photos/id/152/400/250"],
                46 => ["Kagoshima", "Kyushu Region", "Overlooked by the active, smoking Sakurajima volcano island; offers unique steaming sand baths in Ibusuki.", "https://picsum.photos/id/160/400/250"],
                47 => ["Okinawa", "Okinawa Region", "A sub-tropical paradise featuring beautiful emerald coral reefs, sandy beaches, and unique Ryukyu culture.", "https://picsum.photos/id/164/400/250"]
            ];

            // Render loop for 47 individual cards with confirmed distinct source links
            foreach ($prefectures as $num => $info) {
                echo '
                <div class="spot-card">
                    <div class="spot-img-container">
                        <img src="' . $info[3] . '" alt="' . $info[0] . '">
                    </div>
                    <div class="spot-body">
                        <span class="spot-tag">' . $info[1] . '</span>
                        <h3 class="spot-heading">' . $num . '. ' . $info[0] . '</h3>
                        <p class="spot-txt">' . $info[2] . '</p>
                    </div>
                </div>';
            }
            ?>

        </div>
    </div>

</body>
</html>