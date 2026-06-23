<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japan Sightseeing Spots - Matsuri Finder</title>
    <style>
        :root {
            --primary-color: #e63946; 
            --dark-color: #1d3557;
            --light-color: #f8f9fa;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0; padding: 0;
            background-color: var(--light-color);
            color: #333;
        }
        header { background-color: var(--primary-color); color: white; text-align: center; padding: 2rem 1rem; }
        header h1 { margin: 0; font-size: 2.5rem; }
        
        nav { background-color: var(--dark-color); text-align: center; padding: 0.8rem; }
        nav a { color: white; text-decoration: none; margin: 0 15px; font-weight: bold; font-size: 1.1rem; }
        nav a:hover { color: #a8dadc; }

        .container { max-width: 1200px; margin: 2rem auto; padding: 0 1rem; }
        h2 { color: var(--dark-color); border-bottom: 3px solid var(--primary-color); padding-bottom: 0.5rem; margin-bottom: 1.5rem; }

        .spots-table {
            width: 100%; border-collapse: collapse; background: white;
            border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .spots-table th { background-color: var(--dark-color); color: white; padding: 1.2rem; text-align: left; font-size: 1.1rem; }
        .spots-table td { padding: 1.2rem; border-bottom: 1px solid #eee; font-size: 1rem; vertical-align: middle; }
        .spots-table tr:hover { background-color: #fff5f5; }
        
        /* প্র্যাকটিক্যাল ছবির জন্য সুন্দর গোলানো চারকোণা বক্স স্টিলিং */
        .pref-img { 
            width: 90px; 
            height: 65px; 
            object-fit: cover; 
            border-radius: 8px; 
            box-shadow: 0 3px 6px rgba(0,0,0,0.15);
            background-color: #e2e8f0;
            display: block;
        }
        .badge { background-color: #ffe3e3; color: var(--primary-color); padding: 0.3rem 0.6rem; border-radius: 4px; font-weight: bold; font-size: 0.9rem; display: inline-block;}
        .spot-name { color: #1d3557; font-weight: bold; font-size: 1.1rem; }
    </style>
</head>
<body>

    <header>
        <h1>🗾 Japan Best Sightseeing Spots</h1>
    </header>

    <nav>
        <a href="index.php">🏮 Matsuri Finder</a>
        <a href="spots.php" style="border-bottom: 2px solid white;">🗾 Sightseeing Spots</a>
        <a href="holidays.php">📅 Public Holidays</a>
    </nav>

    <div class="container">
        <h2>Beautiful Places to Visit in Japan (47 Prefectures)</h2>

        <table class="spots-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Prefecture</th>
                    <th>Top Beautiful Spots</th>
                    <th>Why It is Famous? (Description)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // হাই-কোয়ালিটি এবং স্থায়ী প্র্যাকটিক্যাল ইমেজ লিংকের ডেটা অ্যারে
                $tourist_data = [
                    ["Hokkaido", "Otaru Canal & Sapporo Park", "Famous for snow festivals, ski resorts, and breathtaking lavender fields.", "https://images.unsplash.com/photo-1542640244-7e672d6cef21?w=150&auto=format&fit=crop&q=60"],
                    ["Aomori", "Hirosaki Castle & Towada Lake", "Renowned for spectacular cherry blossom tunnels and Autumn leaves.", "https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?w=150&auto=format&fit=crop&q=60"],
                    ["Iwate", "Chuson-ji Temple & Geibikei", "A historic area featuring UNESCO World Heritage golden pavilion.", "https://images.unsplash.com/photo-1601042879364-f3947d3f9c16?w=150&auto=format&fit=crop&q=60"],
                    ["Miyagi", "Matsushima Bay & Fox Village", "Ranked as one of Japan's three most scenic views with pine islands.", "https://images.unsplash.com/photo-1578637387939-43c525550085?w=150&auto=format&fit=crop&q=60"],
                    ["Akita", "Kakunodate Samurai District", "Famous for preserved samurai houses and weeping cherry trees.", "https://images.unsplash.com/photo-1549693578-d683be217e58?w=150&auto=format&fit=crop&q=60"],
                    ["Yamagata", "Yamadera & Ginzan Onsen", "Stunning mountain-side temple and traditional hot spring towns.", "https://images.unsplash.com/photo-1528164344705-47542687000d?w=150&auto=format&fit=crop&q=60"],
                    ["Fukushima", "Tsuruga Castle & Ouchi-juku", "A post town from the Edo period with thatched-roof buildings.", "https://images.unsplash.com/photo-1590766940554-634a7ed41450?w=150&auto=format&fit=crop&q=60"],
                    ["Ibaraki", "Hitachi Seaside Park", "Famous for the rolling hills covered in blue nemophila flowers.", "https://images.unsplash.com/photo-1506318137071-a8e063b4bec0?w=150&auto=format&fit=crop&q=60"],
                    ["Tochigi", "Nikko Toshogu Shrine", "UNESCO World Heritage site known for its lavishly decorated shrines.", "https://images.unsplash.com/photo-1598902094254-b49042c07ef9?w=150&auto=format&fit=crop&q=60"],
                    ["Gunma", "Kusatsu Onsen", "One of Japan's top continuous hot springs with a scenic central water field.", "https://images.unsplash.com/photo-1590059904257-2eef11082697?w=150&auto=format&fit=crop&q=60"],
                    ["Saitama", "Kawagoe Little Edo", "Retains an old warehouse district that feels exactly like Tokyo's history.", "https://images.unsplash.com/photo-1596484552834-6a58f850e0a1?w=150&auto=format&fit=crop&q=60"],
                    ["Chiba", "Naritasan Shinshoji Temple", "Massive, spectacular Buddhist temple complex near Narita Airport.", "https://images.unsplash.com/photo-1610374669865-da25514b8a21?w=150&auto=format&fit=crop&q=60"],
                    ["Tokyo", "Senso-ji Temple & Shibuya", "The ultimate blend of ancient tradition and futuristic urban style.", "https://images.unsplash.com/photo-1540959733332-eab4deceeaf7?w=150&auto=format&fit=crop&q=60"],
                    ["Kanagawa", "Hakone & Kamakura Buddha", "Famous for hot springs, Mt. Fuji views, and coastal historical shrines.", "https://images.unsplash.com/photo-1528164344705-47542687000d?w=150&auto=format&fit=crop&q=60"],
                    ["Niigata", "Echigo-Yuzawa Onsen", "Famous for ski resorts, high-quality sake, and beautiful snow scenery.", "https://images.unsplash.com/photo-1543157145-f78c636d023d?w=150&auto=format&fit=crop&q=60"],
                    ["Toyama", "Tateyama Kurobe Alpine Route", "Renowned for its massive snow walls that stay frozen through early summer.", "https://images.unsplash.com/photo-1617192661845-bb742911b6d0?w=150&auto=format&fit=crop&q=60"],
                    ["Ishikawa", "Kenroku-en Garden", "One of Japan's three most beautiful landscape gardens from the feudal era.", "https://images.unsplash.com/photo-1627541243179-880fc6037da5?w=150&auto=format&fit=crop&q=60"],
                    ["Fukui", "Tojinbo Cliffs", "Stunning rugged basalt cliffs by the sea and world-class museums.", "https://images.unsplash.com/photo-1597735881932-d9664c9675d2?w=150&auto=format&fit=crop&q=60"],
                    ["Yamanashi", "Mt. Fuji & Five Lakes", "The absolute best unobstructed views of Mount Fuji reflecting on lakes.", "https://images.unsplash.com/photo-1578637387939-43c525550085?w=150&auto=format&fit=crop&q=60"],
                    ["Nagano", "Matsumoto Castle", "Historic black crow castle and the famous wild snow monkeys in hot springs.", "https://images.unsplash.com/photo-1549693578-d683be217e58?w=150&auto=format&fit=crop&q=60"],
                    ["Gifu", "Shirakawa-go Village", "Famous for its traditional steep-gabled thatched-roof farmhouses.", "https://images.unsplash.com/photo-1601042879364-f3947d3f9c16?w=150&auto=format&fit=crop&q=60"],
                    ["Shizuoka", "Miho no Matsubara", "Coastal pine forests with iconic Mt. Fuji backdrops and green tea fields.", "https://images.unsplash.com/photo-1533050487297-09b4502d652b?w=150&auto=format&fit=crop&q=60"],
                    ["Aichi", "Nagoya Castle", "Industrial powerhouse featuring magnificent samurai reconstruction history.", "https://images.unsplash.com/photo-1599930121703-a44ec10f0f4a?w=150&auto=format&fit=crop&q=60"],
                    ["Mie", "Ise Jingu Grand Shrine", "The most sacred and spiritually significant Shinto shrine complex in Japan.", "https://images.unsplash.com/photo-1571644781491-032a76f62b46?w=150&auto=format&fit=crop&q=60"],
                    ["Shiga", "Lake Biwa", "Japan's largest freshwater lake with beautiful lakeside shrines and castles.", "https://images.unsplash.com/photo-1587903823469-6f97efca9a81?w=150&auto=format&fit=crop&q=60"],
                    ["Kyoto", "Fushimi Inari & Kinkaku-ji", "The spiritual heart of old Japan with thousand orange Torii gates.", "https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?w=150&auto=format&fit=crop&q=60"],
                    ["Osaka", "Osaka Castle & Dotonbori", "Vibrant neon-lit streets, incredible local street foods, and modern towers.", "https://images.unsplash.com/photo-1590253183230-7d8b5f521f59?w=150&auto=format&fit=crop&q=60"],
                    ["Hyogo", "Himeji Castle", "The White Heron Castle, Japan's most spectacular preserved samurai fortress.", "https://images.unsplash.com/photo-1590766940554-634a7ed41450?w=150&auto=format&fit=crop&q=60"],
                    ["Nara", "Nara Park & Todai-ji", "Home to a giant bronze Buddha statue and thousands of friendly deer.", "https://images.unsplash.com/photo-1545128485-c400e7702796?w=150&auto=format&fit=crop&q=60"],
                    ["Wakayama", "Kumano Kodo & Nachi Falls", "Sacred mountain pilgrimage trails and a brilliant three-story pagoda waterfall.", "https://images.unsplash.com/photo-1524413840807-0c3cb6fa808d?w=150&auto=format&fit=crop&q=60"],
                    ["Tottori", "Tottori Sand Dunes", "Massive, unexpected coastal sand dunes by the Sea of Japan.", "https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=150&auto=format&fit=crop&q=60"],
                    ["Shimane", "Izumo Taisha Grand Shrine", "One of Japan's oldest and most important Shinto shrines for matchmaking.", "https://images.unsplash.com/photo-1569429593410-b498b3fb3387?w=150&auto=format&fit=crop&q=60"],
                    ["Okayama", "Korakuen Garden", "Beautiful landscape gardens and historic black canals lined with willows.", "https://images.unsplash.com/photo-1511739001486-6bfe10ce785f?w=150&auto=format&fit=crop&q=60"],
                    ["Hiroshima", "Itsukushima Floating Torii", "The mesmerizing red Shinto shrine gate that appears to float on the sea.", "https://images.unsplash.com/photo-1555914614-2c5e7b26939f?w=150&auto=format&fit=crop&q=60"],
                    ["Yamaguchi", "Motonosumi Inari Shrine", "123 red Torii gates stretching beautifully along ocean-facing cliffs.", "https://images.unsplash.com/photo-1621532450841-dbb7d90b21a3?w=150&auto=format&fit=crop&q=60"],
                    ["Tokushima", "Naruto Whirlpools", "Incredible naturally occurring tidal whirlpools under the Naruto bridge.", "https://images.unsplash.com/photo-1501854140801-50d01698950b?w=150&auto=format&fit=crop&q=60"],
                    ["Kagawa", "Ritsurin Garden", "An exquisite feudal lord garden filled with masterfully shaped pine trees.", "https://images.unsplash.com/photo-1518156677180-95a2893f3e9f?w=150&auto=format&fit=crop&q=60"],
                    ["Ehime", "Matsuyama Castle", "One of Japan's oldest hot spring bathhouses, inspiring anime movies.", "https://images.unsplash.com/photo-1544644181-1484b3fdfc62?w=150&auto=format&fit=crop&q=60"],
                    ["Kochi", "Katsurahama Beach", "Beautiful scenic Pacific coastline known for its historical samurai statue.", "https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?w=150&auto=format&fit=crop&q=60"],
                    ["Fukuoka", "Dazaifu Tenmangu", "Famous for street food culture (Yatai) and Hakata ramen.", "https://images.unsplash.com/photo-1573455483627-727e4876b509?w=150&auto=format&fit=crop&q=60"],
                    ["Saga", "Yoshinogari Ruins", "Massive archaeological settlement site from the ancient Yayoi Period.", "https://images.unsplash.com/photo-1526481280693-3bfa7566ee36?w=150&auto=format&fit=crop&q=60"],
                    ["Nagasaki", "Glover Garden", "Stunning harbor night views and rich history of early European trade.", "https://images.unsplash.com/photo-1576675784432-994941412b3d?w=150&auto=format&fit=crop&q=60"],
                    ["Kumamoto", "Kumamoto Castle", "One of Japan's most imposing castles alongside a massive active volcano.", "https://images.unsplash.com/photo-1596898516088-7574513702f3?w=150&auto=format&fit=crop&q=60"],
                    ["Oita", "Beppu Hot Springs", "The hot spring capital of Japan, famous for unique steaming volcanic pools.", "https://images.unsplash.com/photo-1613243555978-53e5b64c759c?w=150&auto=format&fit=crop&q=60"],
                    ["Miyazaki", "Takachiho Gorge", "A stunning, narrow basalt chasm through which a beautiful river flows.", "https://images.unsplash.com/photo-1542044896530-05d85be9b11a?w=150&auto=format&fit=crop&q=60"],
                    ["Kagoshima", "Sakurajima Volcano", "An impressive, continuously smoking active volcano sitting right in the bay.", "https://images.unsplash.com/photo-1502082553048-f009c37129b9?w=150&auto=format&fit=crop&q=60"],
                    ["Okinawa", "Churaumi Aquarium", "Tropical islands featuring vibrant coral reefs and beautiful white beaches.", "https://images.unsplash.com/photo-1534142490825-f938c5b0586e?w=150&auto=format&fit=crop&q=60"]
                ];

                // লুপ চালিয়ে নিখুঁত টেবিল তৈরি করা
                foreach ($tourist_data as $spot) {
                    echo '<tr>';
                    echo '<td><img class="pref-img" src="'.$spot[3].'" alt="'.htmlspecialchars($spot[0]).'"></td>';
                    echo '<td><span class="badge">'.htmlspecialchars($spot[0]).'</span></td>';
                    echo '<td><span class="spot-name">'.htmlspecialchars($spot[1]).'</span></td>';
                    echo '<td>'.htmlspecialchars($spot[2]).'</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>