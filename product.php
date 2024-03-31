<?php

// URL API
$url = 'https://fakestoreapi.com/products';

// Inisialisasi curl
$ch = curl_init();

// Set URL
curl_setopt($ch, CURLOPT_URL, $url);

// Set opsi untuk mengembalikan respons sebagai string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi HTTP GET
$response = curl_exec($ch);

// Cek jika ada kesalahan dalam permintaan
if ($response === false) {
    echo 'Error: ' . curl_error($ch);
} else {
    // Konversi respons JSON menjadi array
    $json = json_decode($response, true);
}

// Tutup curl
curl_close($ch);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark text-light">
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach ($json as $product) : ?>
                <div class="col-md-4 mb-3">
                    <div class="card border-warning h-100">
                        <img src="<?php echo $product['image']; ?>" class="card-img-top h-50" alt="...">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $product['title']; ?></h4>
                            <p class="card-text">Kategori: <?php echo $product['category']; ?></p>
                            <p class="card-text"><?php echo $product['description']; ?></p>
                            <p class="card-text"><small class="text-body-secondary">Harga: $<?php echo $product['price']; ?></small></p>
                            <small class="text-body-secondary">Rating: <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg><?php echo $product['rating']['rate']; ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>