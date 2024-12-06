<!DOCTYPE html>
<html>
<head>
    <title>Shop now</title>
<style>
body {
        background-image: url('dogb.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 30px;
    }
.products h1{
    text-align: center;
}

.product-grid {
    display: flex;
    justify-content: center;
    gap: 10px; /* Less gap between product cards */
    flex-wrap: wrap; /* Allow wrapping to fit smaller screens */
}
.product-card {
    background: linear-gradient(to bottom, #a1c4fd, #c2e9fb);
    padding: 15px; /* Smaller padding for compact style */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 180px; /* Smaller width for compact look */
    height: 295px; /* Adjust height */
    text-align: center;
}
.product-card img {
    width: 150px; /* Fixed width */
    height: 160px; /* Fixed height */
    object-fit: cover; /* Ensures the image scales to fill the dimensions without distortion */
    border-radius: 8px;
}
.product-card h3 {
    font-size: 16px; /* Smaller font size for compact look */
    margin: 8px 0;
}
.product-card p {
    color: black;
    font-weight: bold;
    font-size: 14px; /* Smaller font size */
    margin: 5px 0;
}
.product-card button {
    width: 60%; /* Adjust button width */
    padding: 8px;
    border: none;
    border-radius: 5px;
    background-color: #5992d9;
    color: #fff;
    cursor: pointer;
    font-size: 14px; /* Smaller font size for compact style */
    transition: 0.3s;
}
.product-card button:hover {
    background-color: #fff;
    color: #5992d9;
    border: 2px solid #5992d9;
}
</style>
</head>
<body>
<section class="products">
    <h1>Best Sellers Products</h1>
    <div class="product-grid">
        <div class="product-card">
        <img src="ped.jpg" alt="Dog Food"> 
        <h3>Pedigree - adult mini</h3>
        <p>₱370.00</p>
        <a href="https://shopee.ph/Pedigree-Mini-Adult-Dog-Dry-Food-1.3kg-i.60092874.17916801317?sp_atk=12afd909-d4f8-40dc-9d37-717a536f565f&xptdk=12afd909-d4f8-40dc-9d37-717a536f565f"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="pedad.jpg" alt="Dog Food"> 
        <h3>Pedigree - Adult</h3>
        <p>₱150.00</p>
        <a href="https://shopee.ph/Pedigree-1KG-Repacked-Adult-Puppy-and-Mini-i.17406413.26464435576?sp_atk=3665999e-c4c5-431d-98b5-fa0ee0082490&xptdk=3665999e-c4c5-431d-98b5-fa0ee0082490"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="pedpup.jpg" alt="Dog Food"> 
        <h3>Pedigree - Puppy</h3>
        <p>₱176.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="aoo.jpg" alt="Dog Food"> 
        <h3>Aozi - Pure natural organic food for Adult</h3>
        <p>₱580.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="aoo2.jpg" alt="Dog Food"> 
        <h3>Aozi - for Puppy</h3>
        <p>₱600.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="prin.jpg" alt="Dog Food"> 
        <h3>Princess cat food</h3>
        <p>₱158.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="spe.jpg" alt="Dog Food"> 
        <h3>Special cat - Chicken & Turkey</h3>
        <p>₱285.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="lamb.jpg" alt="Dog Food"> 
        <h3>Special Dog - specialty lamb and rice for Adult</h3>
        <p>₱135.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="rice.jpg" alt="Dog Food"> 
        <h3>Special Dog - specialty lamb and rice for Puppy</h3>
        <p>₱140.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        </div>
</section>
</body>
</html>