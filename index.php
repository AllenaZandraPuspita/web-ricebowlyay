<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rice Bowl YAY!</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Pacifico&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background: #fff5f0;
      color: #333;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    header {
      background: linear-gradient(135deg, #ff512f, #dd2476); /* merah-oranye hot */
      padding: 40px 20px;
      text-align: center;
      color: white;
    }
    header h1 { 
      margin: 0; 
      font-size: 2.7rem;
      font-family: 'Pacifico', cursive;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.25);
    }
    header p {
      margin-top: 12px;
      font-size: 1.2rem;
      font-weight: 500;
    }

    .about {
      width: 90%;
      max-width: 1000px;
      margin: 30px auto;
      text-align: center;
      background: white;
      padding: 35px;
      border-radius: 18px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    }
    .about h2 {
      color: #ff2e00;
      font-size: 2rem;
      margin-bottom: 18px;
    }
    .about p {
      font-size: 1rem;
      line-height: 1.6;
      margin-bottom: 12px;
    }

    .container {
      flex: 1;
      width: 90%;
      max-width: 1200px;
      margin: 35px auto;
      display: flex;
      gap: 30px;
    }

    .menu {
      flex: 2;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 22px;
    }

    .card {
      background: white;
      border-radius: 18px;
      box-shadow: 0 5px 14px rgba(0,0,0,0.18);
      padding: 22px;
      text-align: center;
      transition: 0.3s;
    }
    .card:hover { transform: translateY(-7px) scale(1.02); }
    .card img {
      max-width: 100%;
      height: 210px;
      object-fit: cover;
      border-radius: 14px;
    }
    .card h3 { 
      margin: 15px 0 10px; 
      color: #ff2e00; 
      font-weight: 600;
    }
    .price { 
      font-size: 18px; 
      font-weight: bold; 
      margin: 10px 0; 
      color: #444;
    }
    .btn {
      display: inline-block;
      padding: 12px 20px;
      margin-top: 12px;
      background: linear-gradient(135deg, #ff512f, #dd2476);
      color: white;
      border-radius: 12px;
      text-decoration: none;
      cursor: pointer;
      transition: all 0.3s ease;
      font-weight: 500;
      border: none;
      box-shadow: 0 3px 10px rgba(255,80,50,0.4);
    }
    .btn:hover { 
      background: linear-gradient(135deg, #dd2476, #ff512f);
      transform: scale(1.07);
    }

    .cart {
      flex: 1;
      background: white;
      border-radius: 18px;
      box-shadow: 0 5px 14px rgba(0,0,0,0.18);
      padding: 22px;
      height: fit-content;
    }
    .cart h2 { 
      margin-top: 0; 
      color: #ff2e00; 
      font-weight: 600;
    }
    .cart ul { list-style: none; padding: 0; margin: 0; }
    .cart ul li {
      display: flex;
      justify-content: space-between;
      margin-bottom: 8px;
      font-size: 0.95rem;
    }
    .total { 
      margin-top: 15px; 
      font-weight: bold; 
      font-size: 1rem;
      color: #333;
    }

    .closing {
      width: 90%;
      max-width: 900px;
      margin: 40px auto;
      text-align: center;
      font-size: 1.05rem;
      background: #fff0ed;
      padding: 20px;
      border-radius: 14px;
      border: 2px dashed #ff2e00;
      color: #cc1a00;
    }

    footer {
      margin-top: auto;
      text-align: center;
      padding: 18px;
      background: linear-gradient(135deg, #ff512f, #dd2476);
      color: white;
      font-size: 0.95rem;
    }
    footer a { color: white; text-decoration: none; }
  </style>
</head>
<body>
  <header>
    <h1>Rice Bowl YAY!</h1>
    <p>🔥 Rice Bowl Ayam Crispy dengan Sensasi Pedas Juara 🔥</p>
  </header>

  <!-- Tentang Kami -->
  <section class="about">
    <h2>Tentang Rice Bowl YAY!</h2>
    <p>Selamat datang di <strong>Rice Bowl YAY!</strong> 🎉 Hadir dengan ayam crispy super gurih & sambal khas pedas yang bikin keringetan tapi nagih!</p>
    <p>Pilihan sambal: <em>Sambal Matah</em> segar & <em>Sambal Bawang</em> pedas gurih. Ditambah <strong>es teh dingin</strong> yang nyegerin, pas banget buat nemenin pedasnya. 🌶️🥤</p>
    <p><strong>Harga ramah, rasa mewah</strong> – cocok buat anak muda, mahasiswa, & pekerja yang butuh makan cepat, enak, dan HOT! 🔥</p>
    <p>Ikuti kami di Instagram 👉 <a href="https://instagram.com/akun_instagram_kamu" target="_blank" style="color:#ff2e00; font-weight:bold;"><i class="fab fa-instagram"></i> @ricebowlyay</a></p>
  </section>

  <div class="container">
    <!-- Menu -->
    <div class="menu">
      <div class="card">
        <img src="images/matah.jpg" alt="Rice Bowl Sambal Matah">
        <h3>Ayam Crispy Sambal Matah</h3>
        <p class="price">Rp 10.000</p>
        <button class="btn add-to-cart" data-name="Ayam Crispy Sambal Matah" data-price="10000">Tambah ke Keranjang</button>
      </div>
      <div class="card">
        <img src="images/bawang.jpg" alt="Rice Bowl Sambal Bawang">
        <h3>Ayam Crispy Sambal Bawang</h3>
        <p class="price">Rp 10.000</p>
        <button class="btn add-to-cart" data-name="Ayam Crispy Sambal Bawang" data-price="10000">Tambah ke Keranjang</button>
      </div>
      <div class="card">
        <img src="images/esteh.jpg" alt="Es Teh Segar">
        <h3>Es Teh Segar</h3>
        <p class="price">Rp 3.000</p>
        <button class="btn add-to-cart" data-name="Es Teh Segar" data-price="3000">Tambah ke Keranjang</button>
      </div>
    </div>

    <!-- Keranjang -->
    <div class="cart">
      <h2>Keranjang Belanja</h2>
      <ul id="cart-items"></ul>
      <p class="total">Total: Rp <span id="cart-total">0</span></p>
      <a id="checkout-btn" href="#" target="_blank" class="btn">Checkout via WhatsApp</a>
    </div>
  </div>

  <!-- Closing Statement -->
  <section class="closing">
    <p>🔥 Pedasnya bikin nagih, crispy-nya bikin happy. Yuk order sekarang sebelum kehabisan! 🔥</p>
  </section>

  <footer>
    <p>&copy; 2025 Rice Bowl YAY! | Dibuat dengan ❤️ & 🌶️ untuk pecinta pedas</p>
    <p>
      <a href="https://instagram.com/akun_instagram_kamu" target="_blank">
        <i class="fab fa-instagram"></i> @ricebowlyay
      </a>
    </p>
  </footer>

  <script>
    const cart = [];
    const cartItemsEl = document.getElementById("cart-items");
    const cartTotalEl = document.getElementById("cart-total");
    const checkoutBtn = document.getElementById("checkout-btn");

    function updateCart() {
      cartItemsEl.innerHTML = "";
      let total = 0;
      cart.forEach(item => {
        const li = document.createElement("li");
        li.textContent = `${item.name} x${item.qty}`;
        const span = document.createElement("span");
        span.textContent = "Rp " + (item.price * item.qty).toLocaleString();
        li.appendChild(span);
        cartItemsEl.appendChild(li);
        total += item.price * item.qty;
      });
      cartTotalEl.textContent = total.toLocaleString();

      // Link WhatsApp
      let message = "Halo, saya mau pesan:%0A";
      cart.forEach(item => {
        message += `- ${item.name} x${item.qty} (Rp ${(item.price*item.qty).toLocaleString()})%0A`;
      });
      message += `%0ATotal: Rp ${total.toLocaleString()}`;
      checkoutBtn.href = `https://wa.me/6282219924770?text=${message}`;
    }

    document.querySelectorAll(".add-to-cart").forEach(btn => {
      btn.addEventListener("click", () => {
        const name = btn.dataset.name;
        const price = parseInt(btn.dataset.price);
        const item = cart.find(i => i.name === name);
        if (item) {
          item.qty++;
        } else {
          cart.push({name, price, qty: 1});
        }
        updateCart();
      });
    });
  </script>
</body>
</html>
