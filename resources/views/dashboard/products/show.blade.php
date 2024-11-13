<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f8f8;
        }
        
        .container {
            max-width: 1000px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .product-image {
            max-width: 100%;
            border-radius: 8px;
        }

        .product-details-wrapper {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }

        .product-details {
            flex: 1;
        }

        .product-name {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .action-buttons {
            margin-top: 20px;
        }

        .btn-buy, .btn-back {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 10px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
        }

        .btn-back {
            background-color: #6c757d;
        }

        .quantity-input {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .quantity-input button {
            width: 30px;
            height: 30px;
            border: none;
            background-color: #007bff;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
        }

        .quantity-input input {
            width: 60px;
            text-align: center;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="product-details-wrapper">
            <!-- Product Image -->
            <div class="product-image-wrapper col-md-6">
                <img src="{{ $product->image ?? asset('img/placeholder.jpeg') }}" alt="Product Image" class="product-image" loading="lazy">
            </div>

            <!-- Product Details -->
            <div class="product-details col-md-6">
                <h1 class="product-name">{{ $product->name }}</h1>
                <p class="product-price" id="product-price">{{ formatRupiah($product->price) }}</p>
                <p class="product-category"><strong>Kategori:</strong> {{ $product->category->name ?? 'Tidak ada kategori' }}</p>
                
                <!-- Quantity Input -->
                <div class="quantity-input">
                    <button id="decrease-quantity">-</button>
                    <input type="number" id="quantity" name="quantity" value="1" min="1">
                    <button id="increase-quantity">+</button>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons">
                    <a href="#" id="btn-buy" class="btn-buy" target="_blank">Beli</a>
                    <a href="{{ url()->previous() }}" class="btn-back">Kembali</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('increase-quantity').addEventListener('click', function() {
            var quantityInput = document.getElementById('quantity');
            quantityInput.value = parseInt(quantityInput.value) + 1;
            updateTotalPrice();
        });

        document.getElementById('decrease-quantity').addEventListener('click', function() {
            var quantityInput = document.getElementById('quantity');
            if (quantityInput.value > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
                updateTotalPrice();
            }
        });

        document.getElementById('quantity').addEventListener('input', function() {
            updateTotalPrice();
        });

        function updateTotalPrice() {
            var quantity = document.getElementById('quantity').value;
            var price = {{ $product->price }};
            var totalPrice = price * quantity;
            document.getElementById('product-price').innerText = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(totalPrice);
        }

        document.getElementById('btn-buy').addEventListener('click', function() {
            var quantity = document.getElementById('quantity').value;
            var message = `Saya menemukan produk anda di platform Greenloop. Saya ingin membeli ${quantity} buah produk ${'{{ $product->name }}'}.`;
            var whatsappUrl = `{{ $product->url }}?text=${encodeURIComponent(message)}`;
            this.href = whatsappUrl;
        });
    </script>
</body>
</html>