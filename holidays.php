<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japan Public Holidays - Matsuri Finder</title>
    <style>
        :root {
            --primary-color: #e63946; 
            --dark-color: #1d3557;
            --light-color: #f8f9fa;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--light-color);
            color: #333;
        }
        header {
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 2rem 1rem;
        }
        header h1 { margin: 0; font-size: 2.5rem; }
        
        nav {
            background-color: var(--dark-color);
            text-align: center;
            padding: 0.8rem;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            font-size: 1.1rem;
        }
        nav a:hover {
            color: #a8dadc;
        }

        .container {
            max-width: 1000px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        h2 {
            color: var(--dark-color);
            border-bottom: 3px solid var(--primary-color);
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .holiday-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .holiday-table th {
            background-color: var(--dark-color);
            color: white;
            padding: 1rem;
            text-align: left;
            font-size: 1.1rem;
        }
        .holiday-table td {
            padding: 1rem;
            border-bottom: 1px solid #eee;
            font-size: 1rem;
        }
        .holiday-table tr:hover {
            background-color: #fff5f5;
        }
        .badge {
            background-color: #ffe3e3;
            color: var(--primary-color);
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <header>
        <h1>🎌 Japan Public Holidays</h1>
    </header>

    <nav>
        <a href="index.php">🏮 Matsuri Finder</a>
        <a href="holidays.php" style="color: #f1faee; border-bottom: 2px solid white;">📅 Public Holidays</a>
    </nav>

    <div class="container">
        <h2>2026 National Holidays (祝日)</h2>

        <table class="holiday-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Holiday Name (English)</th>
                    <th>Japanese Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>January 01</strong></td>
                    <td>New Year's Day</td>
                    <td><span class="badge">元日 (Ganjitsu)</span></td>
                    <td>National holiday celebrating the beginning of the new year.</td>
                </tr>
                <tr>
                    <td><strong>January 12</strong></td>
                    <td>Coming of Age Day</td>
                    <td><span class="badge">成人の日 (Seijin no Hi)</span></td>
                    <td>Celebration for youth reaching maturity. (2nd Monday of January)</td>
                </tr>
                <tr>
                    <td><strong>February 11</strong></td>
                    <td>National Foundation Day</td>
                    <td><span class="badge">建国記念の日 (Kenkoku Kinen no Hi)</span></td>
                    <td>A day to reflect on the establishment of the nation.</td>
                </tr>
                <tr>
                    <td><strong>February 23</strong></td>
                    <td>Emperor's Birthday</td>
                    <td><span class="badge">天皇誕生日 (Tennō Tanjōbi)</span></td>
                    <td>National holiday celebrating the birthday of the reigning Emperor.</td>
                </tr>
                <tr>
                    <td><strong>March 20</strong></td>
                    <td>Vernal Equinox Day</td>
                    <td><span class="badge">春分の日 (Shunbun no Hi)</span></td>
                    <td>A day to appreciate nature and the arrival of spring.</td>
                </tr>
                <tr>
                    <td><strong>April 29</strong></td>
                    <td>Showa Day</td>
                    <td><span class="badge">昭和の日 (Shōwa no Hi)</span></td>
                    <td>Honoring the birthday of the late Emperor Showa. (Start of Golden Week)</td>
                </tr>
                <tr>
                    <td><strong>May 03</strong></td>
                    <td>Constitution Memorial Day</td>
                    <td><span class="badge">憲法記念日 (Kenpō Kinenbi)</span></td>
                    <td>Commemorating the enforcement of the Japanese Constitution.</td>
                </tr>
                <tr>
                    <td><strong>May 04</strong></td>
                    <td>Greenery Day</td>
                    <td><span class="badge">みどりの日 (Midori no Hi)</span></td>
                    <td>A day to commune with nature and be thankful for blessings.</td>
                </tr>
                <tr>
                    <td><strong>May 05</strong></td>
                    <td>Children's Day</td>
                    <td><span class="badge">こどもの日 (Kodomo no Hi)</span></td>
                    <td>A day to respect children's personalities and celebrate their happiness.</td>
                </tr>
                <tr>
                    <td><strong>July 20</strong></td>
                    <td>Marine Day</td>
                    <td><span class="badge">海の日 (Umi no Hi)</span></td>
                    <td>Gratitude for the blessings of the ocean and maritime prosperity.</td>
                </tr>
                <tr>
                    <td><strong>August 11</strong></td>
                    <td>Mountain Day</td>
                    <td><span class="badge">山の日 (Yama no Hi)</span></td>
                    <td>An opportunity to appreciate mountains and connect with nature.</td>
                </tr>
                <tr>
                    <td><strong>September 21</strong></td>
                    <td>Respect for the Aged Day</td>
                    <td><span class="badge">敬老の日 (Keirō no Hi)</span></td>
                    <td>Honoring and respecting elderly citizens. (3rd Monday of September)</td>
                </tr>
                <tr>
                    <td><strong>September 23</strong></td>
                    <td>Autumnal Equinox Day</td>
                    <td><span class="badge">秋分の日 (Shūbun no Hi)</span></td>
                    <td>A day to respect ancestors and remember those who passed away.</td>
                </tr>
                <tr>
                    <td><strong>October 12</strong></td>
                    <td>Sports Day</td>
                    <td><span class="badge">スポーツの日 (Supōtsu no Hi)</span></td>
                    <td>Enjoying sports and cultivating a healthy mind and body.</td>
                </tr>
                <tr>
                    <td><strong>November 03</strong></td>
                    <td>Culture Day</td>
                    <td><span class="badge">文化の日 (Bunka no Hi)</span></td>
                    <td>Promoting culture, the arts, and academic endeavors.</td>
                </tr>
                <tr>
                    <td><strong>November 23</strong></td>
                    <td>Labor Thanksgiving Day</td>
                    <td><span class="badge">勤労感謝の日 (Kinrō Kansha no Hi)</span></td>
                    <td>Commending labor, celebrating production, and giving mutual thanks.</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>