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
    <h1>Dog Products</h1>
    <div class="product-grid">
        <div class="product-card">
        <img src="terri.jpg" alt="Dog Food"> 
        <h3>Beef Terriyaki - Dog food</h3>
        <p>₱85.00</p>
        <a href="https://shopee.ph/Beef-Teriyaki-Dog-Food-1KG-PACK-i.96195380.16440002060?sp_atk=db5457ff-d76d-444c-b05e-f927a792ec85&xptdk=db5457ff-d76d-444c-b05e-f927a792ec85"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="whoo.jpg" alt="Dog Food"> 
        <h3>Whooppy - Dog food all breed</h3>
        <p>₱73.00</p>
        <a href="https://shopee.ph/BOB-Whooppy-Dog-Food-Adult-1kg-(for-all-breeds)-with-Yucca-Extract-supports-intestinal-cleansing-and-i.4032248.18251548984?sp_atk=f4a6ac44-64e0-4b7b-903a-82ef9b649d9d&xptdk=f4a6ac44-64e0-4b7b-903a-82ef9b649d9d"> 
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
        <div class="product-card">
        <img src="ped.jpg" alt="Dog Food"> 
        <h3>Pedigree - adult mini</h3>
        <p>₱170.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="pedad.jpg" alt="Dog Food"> 
        <h3>Pedigree - Adult</h3>
        <p>₱150.00</p>
        <a href=""> 
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
        <img src="top.jpg" alt="Dog Food"> 
        <h3>Top Breed - dog meal Adult</h3>
        <p>₱89.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="top2.jpg" alt="Dog Food"> 
        <h3>Top Breed - dog meal Puppy</h3>
        <p>₱270.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        </div>
</section>
</body>
</html>
    