<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pet FAQ Page</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background-image: url('faqsb.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 30px;
    }
    .navbar {
            width: 100%;
            background-color: #333;
            padding: 10px 20px;
            display: flex;
            justify-content: center;
            position: fixed;
            top: 0;
            z-index: 1000;
            gap: 50px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
            font-weight: bold;
        }
        .navbar a.active {
    color: #a1c4fd; /* Highlighted color for active link */
    }
        .navbar a:hover {
            color: #a1c4fd;
        }

    .faq-section {
        background: linear-gradient(to bottom, #a1c4fd, #c2e9fb);
        background-size: cover;
        background-position: center;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        color: black;
    }

    .section-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .section-header h2 {
        font-size: 28px;
        color: black;
    }

    .section-header p {
        color: black;
        font-size: 15px;
        margin-top: 10px;
    }

    .faq-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .faq-item {
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 15px;
    }

    .faq-item h3 {
        font-size: 16px;
        color: black;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: bold;
    }

    .faq-item h3:hover {
        color: black;
    }

    .faq-item p {
        color: black;
        font-size: 14px;
        line-height: 1.5;
        margin-top: 10px;
        display: none;
    }

    .icon {
        font-size: 18px;
        color: #262ded  ;
    }
</style>
</head>
<body>
<div class="navbar">
        <a href="http://localhost/online-products/home.php">Home</a>
        <a href="http://localhost/online-products/shopnow/shop.php">Shop Now</a>
        <a href="#" class="active">FAQs</a>
        <a href="http://localhost/online-products/Contact-info/contact.php">Contact Us</a>
    </div><br><br>

<!-- General Pet Questions Section -->
<section class="faq-section">
    <div class="section-header">
        <h2>General Pet Questions</h2>
        <p>Find answers to some of the most common questions about pet care and well-being.</p>
    </div>
    <div class="faq-grid">
        <div class="faq-item">
            <h3>How often should I take my pet to the vet? <span class="icon">+</span></h3>
            <p>It’s recommended to take your pet to the vet at least once a year for a check-up. Senior pets or pets with health issues may require more frequent visits.</p>
        </div>
        <div class="faq-item">
            <h3>What vaccinations do pets need? <span class="icon">+</span></h3>
            <p>Core vaccinations for dogs include rabies, distemper, and parvovirus. For cats, core vaccines include rabies, feline distemper, and calicivirus.</p>
        </div>
        <div class="faq-item">
            <h3>How do I introduce a new pet to my home? <span class="icon">+</span></h3>
            <p>Start with a quiet space, give your pet time to adjust, and introduce them slowly to family members and other pets.</p>
        </div>
        <div class="faq-item">
            <h3>What diet is best for my pet? <span class="icon">+</span></h3>
            <p>A balanced diet rich in proteins, carbohydrates, and essential vitamins is best for pets. Consult your vet for specific dietary recommendations.</p>
        </div>
    </div>
</section>

<!-- Pet Food FAQs Section -->
<section class="faq-section">
    <div class="section-header">
        <h2>Frequently Asked Questions about Pet Food</h2>
        <p>Get answers to common questions about feeding your pet and choosing the right food.</p>
    </div>
    <div class="faq-grid">
        <div class="faq-item">
            <h3>What type of food is best for my dog or cat? <span class="icon">+</span></h3>
            <p>The best food depends on your pet’s age, breed, and health needs. Dry food, wet food, and raw food are common options. Consult your vet for specific recommendations.</p>
        </div>
        <div class="faq-item">
            <h3>How much should I feed my pet? <span class="icon">+</span></h3>
            <p>The amount of food your pet needs depends on its weight, age, and activity level. Always follow the feeding guidelines on the food package and consult your vet.</p>
        </div>
        <div class="faq-item">
            <h3>Can I feed my pet homemade food? <span class="icon">+</span></h3>
            <p>Homemade diets can be healthy if they’re balanced and meet your pet’s nutritional needs. Consult a vet or pet nutritionist before starting a homemade diet.</p>
        </div>
        <div class="faq-item">
            <h3>Is it okay to give my pet treats? <span class="icon">+</span></h3>
            <p>Treats are fine in moderation and can be used as rewards for training. However, avoid overfeeding treats, as they can lead to obesity.</p>
        </div>
    </div>
</section>

<script>
    // JavaScript for toggle functionality in FAQ items
    document.querySelectorAll('.faq-item h3').forEach(item => {
        item.addEventListener('click', () => {
            const content = item.nextElementSibling;
            const icon = item.querySelector('.icon');
            if (content.style.display === 'block') {
                content.style.display = 'none';
                icon.textContent = '+';
            } else {
                content.style.display = 'block';
                icon.textContent = '-';
            }
        });
    });
</script>

</body>
</html>
