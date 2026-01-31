<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heavenly Bakes | Premium Cake Boutique</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,900&family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">

    <style>
        :root { --accent: #ff4d7d; --dark: #0f172a; --footer: #111827; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #fdf8f9; overflow-x: hidden; }
        .playfair { font-family: 'Playfair Display', serif; }

        /* Navigation */
        .custom-nav {
            position: fixed;
            top: 0; width: 100%; z-index: 1000;
            padding: 15px 0;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        /* Hero Section */
        .hero-section {
            height: 70vh;
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), 
                        url('https://images.unsplash.com/photo-1588195538326-c5b1e9f80a1b?auto=format&fit=crop&w=1920&q=80');
            background-size: cover; background-position: center;
            display: flex; align-items: center; color: white; text-align: center;
        }

        /* Category Filter Bar */
        .filter-scroll {
            display: flex; overflow-x: auto; white-space: nowrap;
            padding: 10px 0; scrollbar-width: none;
        }
        .filter-scroll::-webkit-scrollbar { display: none; }
        .filter-btn {
            border: none; background: white; padding: 10px 25px;
            border-radius: 50px; margin-right: 10px; font-weight: 700;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: 0.3s;
        }
        .filter-btn.active { background: var(--accent); color: white; }

        /* Cake Card */
        .cake-card {
            background: white; border-radius: 25px; border: none;
            transition: 0.4s; height: 100%; overflow: hidden;
        }
        .cake-card:hover { transform: translateY(-10px); box-shadow: 0 30px 60px rgba(255, 77, 125, 0.15); }
        .img-wrap { height: 260px; overflow: hidden; }
        .img-wrap img { width: 100%; height: 100%; object-fit: cover; transition: 0.5s; }
        .cake-card:hover .img-wrap img { transform: scale(1.1); }

        /* Footer */
        footer { background: var(--footer); color: #9ca3af; padding: 60px 0 30px; }
        .footer-link { color: #9ca3af; text-decoration: none; display: block; margin-bottom: 8px; transition: 0.3s; }
        .footer-link:hover { color: var(--accent); transform: translateX(5px); }
    </style>
</head>
<body>

<nav class="custom-nav">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="#" class="navbar-brand fw-bolder playfair text-dark fs-3">Sweet<span class="text-danger">Delights</span></a>
        <div class="d-none d-lg-flex gap-4">
            <a href="#" class="text-dark text-decoration-none fw-bold">Home</a>
            <a href="#menu" class="text-dark text-decoration-none fw-bold">Categories</a>
            <a href="https://wa.me/8801848072525?text=আমি একটা custom cake অর্ডার করতে চাই।" target="_blank" class="text-danger text-decoration-none fw-bold"><i class="fas fa-magic"></i> Custom Order</a>
        </div>
        <a href="https://wa.me/8801848072525" class="btn btn-danger rounded-pill px-4 btn-sm fw-bold">Order Now</a>
    </div>
</nav>

<section class="hero-section">
    <div class="container" data-aos="fade-up">
        <h1 class="display-3 fw-bold playfair">Artisanal Cakes <br> <span class="text-danger italic">Delivered to You</span></h1>
        <p class="lead mb-4">Dhaka's #1 Destination for Custom & Signature Celebrations.</p>
    </div>
</section>

<section class="py-5" id="menu">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="playfair fw-bold mb-3">Category Wise Display</h2>
            <div class="filter-scroll justify-content-md-center">
                <button class="filter-btn active" onclick="filterCakes('all', this)">All Collections</button>
                <button class="filter-btn" onclick="filterCakes('wedding', this)">Wedding</button>
                <button class="filter-btn" onclick="filterCakes('birthday', this)">Birthday</button>
                <button class="filter-btn" onclick="filterCakes('chocolate', this)">Chocolate</button>
                <button class="filter-btn" onclick="filterCakes('pastry', this)">Pastries</button>
            </div>
        </div>

        <div class="row g-4" id="cake-grid">
            </div>
    </div>
</section>

<footer>
    <div class="container text-center text-md-start">
        <div class="row g-4">
            <div class="col-md-4">
                <h4 class="playfair text-white">SweetDelights</h4>
                <p>Premium handcrafted cakes for every occasion. Experience the art of baking.</p>
            </div>
            <div class="col-md-4">
                <h5 class="text-white">Quick Links</h5>
                <a href="#menu" class="footer-link">Menu</a>
                <a href="https://wa.me/8801848072525?text=আমি একটা custom cake অর্ডার করতে চাই।" target="_blank" class="footer-link">Custom Cake Order</a>
                <a href="tel:+8801848072525" class="footer-link">Call: +8801848072525</a>
            </div>
            <div class="col-md-4">
                <h5 class="text-white">Socials</h5>
                <div class="d-flex gap-3 justify-content-center justify-content-md-start">
                    <a href="#" class="text-white fs-4"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-white fs-4"><i class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/8801848072525" class="text-white fs-4"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <hr class="mt-5 opacity-10">
        <p class="text-center small mb-0">© 2026 Sweet Delights Demo. Built for Client Presentation.</p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init({ once: true });

    // MANUAL PRODUCT DATA (Category-wise)
    const cakeData = [
        { name: "White Orchid Wedding", bn: "হোয়াইট অর্কিড ওয়েডিং", price: "180", cat: "wedding", img: "https://tastytreatbd.com/images/thumbnails/435/537/detailed/177/800x800_vanilla_cake.jpg.png?auto=format&w=600" },
        { name: "Triple Choco Lava", bn: "ট্রিপল চকো লাভা", price: "45", cat: "chocolate", img: "https://images.unsplash.com/photo-1606312619070-d48b4c652a52?auto=format&w=600" },
        { name: "Rainbow Birthday", bn: "রেইনবো বার্থডে", price: "55", cat: "birthday", img: "https://images.unsplash.com/photo-1558301211-0d8c8ddee6ec?auto=format&w=600" },
        { name: "Gold Leaf Truffle", bn: "গোল্ড লিফ ট্রাফল", price: "95", cat: "chocolate", img: "https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&w=600" },
        { name: "Luxury Macarons", bn: "লাক্সারি ম্যাকারনস", price: "25", cat: "pastry", img: "https://images.unsplash.com/photo-1559181567-c3190ca9959b?auto=format&w=600" },
        { name: "Rose Petal Wedding", bn: "রোজ পেটাল ওয়েডিং", price: "220", cat: "wedding", img: "https://tastytreatbd.com/images/thumbnails/270/270/detailed/172/Premium_Red_Velvet_Cake_-_1_kg_2ai1-1u.jpg.png?auto=format&w=600" }
    ];

    function renderCakes(filter = 'all') {
        let html = '';
        const items = filter === 'all' ? cakeData : cakeData.filter(c => c.cat === filter);
        
        items.forEach(c => {
            html += `
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <div class="cake-card shadow-sm">
                        <div class="img-wrap"><img src="${c.img}" alt="${c.name}"></div>
                        <div class="p-4">
                            <h5 class="fw-bold mb-1">${c.name}</h5>
                            <p class="text-muted small mb-3">${c.bn}</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fs-4 fw-bold text-danger">$${c.price}</span>
                                <span class="badge bg-success-subtle text-success">Order Now</span>
                            </div>
                            <button class="btn btn-dark w-100 rounded-pill py-2" onclick="sendOrder('${c.name}', '${c.img}')">
                                <i class="fab fa-whatsapp me-2"></i> Order on WhatsApp
                            </button>
                        </div>
                    </div>
                </div>`;
        });
        $('#cake-grid').html(html || '<div class="col-12 text-center py-5"><h4>No cakes in this category yet!</h4></div>');
    }

    function sendOrder(name, url) {
        const msg = `Hello! I want to order this cake:%0A%0A*Name:* ${name}%0A*Link:* ${url}`;
        window.open(`https://wa.me/8801848072525?text=${msg}`, '_blank');
    }

    function filterCakes(cat, btn) {
        $('.filter-btn').removeClass('active');
        $(btn).addClass('active');
        renderCakes(cat);
    }

    $(document).ready(() => renderCakes());
</script>

</body>
</html>