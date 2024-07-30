<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOPSIS Results</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mx-auto mt-5">
        <h1 class="text-center text-2xl font-bold mb-5">SPK Pemilihan Klinik Kecantikan Metode Topsis</h1>
        <div class="mb-5">
            <h2 class="text-xl font-bold">Alternatif</h2>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Harga</th>
                        <th class="px-4 py-2">Jarak</th>
                        <th class="px-4 py-2">Layanan</th>
                        <th class="px-4 py-2">Testimoni</th>
                        <th class="px-4 py-2">Teknologi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kliniks as $klinik)
                    <tr>
                        <td class="border px-4 py-2">{{ $klinik->name }}</td>
                        <td class="border px-4 py-2">{{ $klinik->harga }}</td>
                        <td class="border px-4 py-2">{{ $klinik->jarak }}</td>
                        <td class="border px-4 py-2">{{ $klinik->layanan }}</td>
                        <td class="border px-4 py-2">{{ $klinik->testimoni }}</td>
                        <td class="border px-4 py-2">{{ $klinik->teknologi }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mb-5">
            <h2 class="text-xl font-bold">Normalisasi Matriks Keputusan</h2>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Harga</th>
                        <th class="px-4 py-2">Jarak</th>
                        <th class="px-4 py-2">Layanan</th>
                        <th class="px-4 py-2">Testimoni</th>
                        <th class="px-4 py-2">Teknologi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($normalized as $klinik)
                    <tr>
                        <td class="border px-4 py-2">{{ $klinik['name'] }}</td>
                        <td class="border px-4 py-2">{{ $klinik['harga'] }}</td>
                        <td class="border px-4 py-2">{{ $klinik['jarak'] }}</td>
                        <td class="border px-4 py-2">{{ $klinik['layanan'] }}</td>
                        <td class="border px-4 py-2">{{ $klinik['testimoni'] }}</td>
                        <td class="border px-4 py-2">{{ $klinik['teknologi'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mb-5">
            <h2 class="text-xl font-bold">Normalisasi Terbobot</h2>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Harga</th>
                        <th class="px-4 py-2">Jarak</th>
                        <th class="px-4 py-2">Layanan</th>
                        <th class="px-4 py-2">Testimoni</th>
                        <th class="px-4 py-2">Teknologi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($weighted as $klinik)
                    <tr>
                        <td class="border px-4 py-2">{{ $klinik['name'] }}</td>
                        <td class="border px-4 py-2">{{ $klinik['harga'] }}</td>
                        <td class="border px-4 py-2">{{ $klinik['jarak'] }}</td>
                        <td class="border px-4 py-2">{{ $klinik['layanan'] }}</td>
                        <td class="border px-4 py-2">{{ $klinik['testimoni'] }}</td>
                        <td class="border px-4 py-2">{{ $klinik['teknologi'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mb-5">
            <h2 class="text-xl font-bold">Solusi Ideal</h2>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Kriteria</th>
                        <th class="px-4 py-2">Ideal Positif</th>
                        <th class="px-4 py-2">Ideal Negatif</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">Harga</td>
                        <td class="border px-4 py-2">{{ $idealPositive['harga'] }}</td>
                        <td class="border px-4 py-2">{{ $idealNegative['harga'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Jarak</td>
                        <td class="border px-4 py-2">{{ $idealPositive['jarak'] }}</td>
                        <td class="border px-4 py-2">{{ $idealNegative['jarak'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Layanan</td>
                        <td class="border px-4 py-2">{{ $idealPositive['layanan'] }}</td>
                        <td class="border px-4 py-2">{{ $idealNegative['layanan'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Testimoni</td>
                        <td class="border px-4 py-2">{{ $idealPositive['testimoni'] }}</td>
                        <td class="border px-4 py-2">{{ $idealNegative['testimoni'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Teknologi</td>
                        <td class="border px-4 py-2">{{ $idealPositive['teknologi'] }}</td>
                        <td class="border px-4 py-2">{{ $idealNegative['teknologi'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mb-5">
            <h2 class="text-xl font-bold">Jarak dan Skor</h2>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">D+</th>
                        <th class="px-4 py-2">D-</th>
                        <th class="px-4 py-2">Score</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($distances as $klinik)
                    <tr>
                        <td class="border px-4 py-2">{{ $klinik['name'] }}</td>
                        <td class="border px-4 py-2">{{ $klinik['dPlus'] }}</td>
                        <td class="border px-4 py-2">{{ $klinik['dMin'] }}</td>
                        <td class="border px-4 py-2">{{ $klinik['score'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mb-5">
            <h2 class="text-xl font-bold">Ranking</h2>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Rank</th>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Score</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ranked as $index => $klinik)
                    <tr>
                        <td class="border px-4 py-2">{{ $index + 1 }}</td>
                        <td class="border px-4 py-2">{{ $klinik['name'] }}</td>
                        <td class="border px-4 py-2">{{ $klinik['score'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
