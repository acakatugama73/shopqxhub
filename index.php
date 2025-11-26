<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tony's Authentic Pizzeria - Fresh Italian Pizza | ShopQXHub</title>
    <meta name="description" content="Experience authentic Italian pizza at Tony's Pizzeria. Family recipes passed down through generations, fresh ingredients, wood-fired ovens. Click here to continue exploring our delicious menu and rich history since 1952.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-container-8x9z {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            color: #333;
        }

        .header-section-4k7m {
            background: linear-gradient(135deg, #d32f2f, #8b0000);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .nav-wrapper-2p9q {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-text-5r3w {
            font-size: 2rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .navigation-menu-7t8u {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-1m6n {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-link-1m6n:hover {
            color: #ffeb3b;
        }

        .hero-banner-9x4c {
            background: url('https://images.pexels.com/photos/315755/pexels-photo-315755.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
        }

        .hero-overlay-3z8v {
            background: rgba(0,0,0,0.6);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .hero-content-6b2n {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-4w9x {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.8);
        }

        .hero-subtitle-8k5m {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.8);
        }

        .cta-button-7p3q {
            background: #ff5722;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-7p3q:hover {
            background: #e64a19;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        .content-section-2m8k {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title-9r4w {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            color: #d32f2f;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        .story-grid-5x7n {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-bottom: 4rem;
        }

        .story-card-3q9m {
            background: #fff;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .story-card-3q9m:hover {
            transform: translateY(-5px);
        }

        .card-image-8w2p {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 1.5rem;
        }

        .card-title-6k4r {
            font-size: 1.8rem;
            color: #d32f2f;
            margin-bottom: 1rem;
        }

        .card-text-1z9x {
            color: #666;
            line-height: 1.8;
        }

        .history-timeline-4m7k {
            background: linear-gradient(135deg, #f5f5f5, #e8e8e8);
            padding: 4rem 2rem;
            margin: 4rem 0;
        }

        .timeline-container-8p3w {
            max-width: 1000px;
            margin: 0 auto;
        }

        .timeline-item-2r6q {
            display: flex;
            margin-bottom: 3rem;
            align-items: center;
        }

        .timeline-year-9x5m {
            background: #d32f2f;
            color: white;
            padding: 1rem;
            border-radius: 50%;
            font-weight: bold;
            font-size: 1.2rem;
            min-width: 80px;
            text-align: center;
            margin-right: 2rem;
        }

        .timeline-content-7k2n {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            flex: 1;
        }

        .specialties-grid-5w8p {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin: 4rem 0;
        }

        .specialty-card-3m9r {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .specialty-card-3m9r:hover {
            transform: scale(1.05);
        }

        .specialty-icon-6q4k {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .reviews-section-8x2m {
            background: #f9f9f9;
            padding: 4rem 2rem;
            margin: 4rem 0;
        }

        .reviews-grid-4p7w {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .review-card-9k3x {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            position: relative;
        }

        .review-stars-2w6m {
            color: #ffc107;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .review-text-7r4n {
            font-style: italic;
            margin-bottom: 1.5rem;
            color: #555;
        }

        .reviewer-name-5x8q {
            font-weight: bold;
            color: #d32f2f;
        }

        .contact-info-3z9p {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: white;
            padding: 4rem 2rem;
            text-align: center;
        }

        .contact-grid-6m2k {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .contact-item-8w5r {
            padding: 2rem;
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .phone-link-4q7m {
            color: #ffeb3b;
            text-decoration: none;
            font-size: 1.3rem;
            font-weight: bold;
        }

        .phone-link-4q7m:hover {
            color: white;
        }

        .footer-section-9p3x {
            background: #1a1a1a;
            color: white;
            padding: 3rem 2rem 1rem;
            text-align: center;
        }

        .footer-links-2k8w {
            margin-bottom: 2rem;
        }

        .footer-link-7m4q {
            color: #ccc;
            text-decoration: none;
            margin: 0 1rem;
            cursor: pointer;
        }

        .footer-link-7m4q:hover {
            color: white;
        }

        .modal-overlay-5r9k {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-8x3p {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 3rem;
            border-radius: 15px;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-6w2m {
            position: absolute;
            top: 1rem;
            right: 1.5rem;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .modal-close-6w2m:hover {
            color: #333;
        }

        .continue-link-4z7n {
            background: #4caf50;
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
            margin: 1rem 0;
            transition: all 0.3s ease;
        }

        .continue-link-4z7n:hover {
            background: #45a049;
            transform: translateY(-2px);
        }

        .ingredients-showcase-3m8r {
            background: url('https://images.pexels.com/photos/1435904/pexels-photo-1435904.jpeg') center/cover;
            padding: 6rem 2rem;
            position: relative;
            color: white;
            text-align: center;
        }

        .ingredients-overlay-7k4w {
            background: rgba(0,0,0,0.7);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .ingredients-content-2p9x {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
        }

        @media (max-width: 768px) {
            .navigation-menu-7t8u {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero-title-4w9x {
                font-size: 2.5rem;
            }
            
            .timeline-item-2r6q {
                flex-direction: column;
                text-align: center;
            }
            
            .timeline-year-9x5m {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%36%31%31%65%33%33%30%33%65%63%68%6F%32%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%36%31%31%65%33%33%30%33%65%63%68%6F%32%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%36%31%31%65%33%33%30%33%65%63%68%6F%32%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>

    <div class="main-container-8x9z">
        <!-- Header -->
        <header class="header-section-4k7m">
            <nav class="nav-wrapper-2p9q">
                <div class="logo-text-5r3w">Tony's Pizzeria</div>
                <ul class="navigation-menu-7t8u">
                    <li><a href="#about-us-9k2m" class="nav-link-1m6n">About Us</a></li>
                    <li><a href="#our-story-4x7p" class="nav-link-1m6n">Our Story</a></li>
                    <li><a href="#specialties-8w3q" class="nav-link-1m6n">Specialties</a></li>
                    <li><a href="#ingredients-2m9r" class="nav-link-1m6n">Ingredients</a></li>
                    <li><a href="#reviews-5k8x" class="nav-link-1m6n">Reviews</a></li>
                    <li><a href="#contact-7p4w" class="nav-link-1m6n">Contact</a></li>
                </ul>
            </nav>
        </header>

        <!-- Hero Section -->
        <section class="hero-banner-9x4c">
            <div class="hero-overlay-3z8v"></div>
            <div class="hero-content-6b2n">
                <h1 class="hero-title-4w9x">Authentic Italian Pizza Since 1952</h1>
                <p class="hero-subtitle-8k5m">Family recipes, fresh ingredients, unforgettable taste</p>
                <a href="#about-us-9k2m" class="cta-button-7p3q">Click Here to Continue</a>
            </div>
        </section>

        <!-- About Us Section -->
        <section id="about-us-9k2m" class="content-section-2m8k">
            <h2 class="section-title-9r4w">Welcome to Tony's Family</h2>
            <div class="story-grid-5x7n">
                <div class="story-card-3q9m">
                    <img src="https://images.pexels.com/photos/1566837/pexels-photo-1566837.jpeg" alt="Traditional Pizza Making" class="card-image-8w2p">
                    <h3 class="card-title-6k4r">Traditional Methods</h3>
                    <p class="card-text-1z9x">Our wood-fired ovens have been burning continuously since 1952, maintaining the perfect temperature for authentic Neapolitan-style pizza. Each pizza is hand-stretched and cooked at exactly 900°F for that perfect crispy yet chewy crust that has made us famous throughout the neighborhood.</p>
                </div>
                <div class="story-card-3q9m">
                    <img src="https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg" alt="Fresh Ingredients" class="card-image-8w2p">
                    <h3 class="card-title-6k4r">Farm Fresh Daily</h3>
                    <p class="card-text-1z9x">Every morning at 5 AM, we receive fresh deliveries from local farms within 50 miles of our kitchen. Our tomatoes are vine-ripened, our basil is picked daily, and our mozzarella is made fresh every morning using traditional Italian techniques passed down through four generations of the Marcelli family.</p>
                </div>
                <div class="story-card-3q9m">
                    <img src="https://images.pexels.com/photos/1260968/pexels-photo-1260968.jpeg" alt="Family Tradition" class="card-image-8w2p">
                    <h3 class="card-title-6k4r">Four Generations Strong</h3>
                    <p class="card-text-1z9x">What started as Giuseppe Marcelli's dream in 1952 has grown into a beloved community institution. Today, his great-grandchildren still roll dough using the same marble table Giuseppe brought from Naples, ensuring every pizza carries the authentic taste of old-world Italy right here in our neighborhood.</p>
                </div>
            </div>
        </section>

        <!-- History Timeline -->
        <section id="our-story-4x7p" class="history-timeline-4m7k">
            <div class="timeline-container-8p3w">
                <h2 class="section-title-9r4w">Our Rich History</h2>
                <div class="timeline-item-2r6q">
                    <div class="timeline-year-9x5m">1952</div>
                    <div class="timeline-content-7k2n">
                        <h3>The Beginning</h3>
                        <p>Giuseppe Marcelli arrives from Naples with nothing but his grandmother's pizza recipes and a dream. He opens the first Tony's Pizzeria in a small 400-square-foot storefront, serving just six varieties of pizza to curious neighbors who had never tasted authentic Italian pizza before.</p>
                    </div>
                </div>
                <div class="timeline-item-2r6q">
                    <div class="timeline-year-9x5m">1967</div>
                    <div class="timeline-content-7k2n">
                        <h3>Community Favorite</h3>
                        <p>After fifteen years of word-of-mouth growth, Tony's becomes the unofficial gathering place for the neighborhood. Giuseppe's son Antonio joins the business, bringing new energy while respecting the traditional recipes. The famous "Nonna's Special" pizza is created during this era and remains our most popular item today.</p>
                    </div>
                </div>
                <div class="timeline-item-2r6q">
                    <div class="timeline-year-9x5m">1983</div>
                    <div class="timeline-content-7k2n">
                        <h3>Expansion and Recognition</h3>
                        <p>The restaurant expands to include a full dining room and outdoor seating. Local food critics begin taking notice, with the City Tribune naming Tony's "Best Hidden Gem" three years running. Despite the recognition, the family maintains their commitment to personal service and authentic preparation methods.</p>
                    </div>
                </div>
                <div class="timeline-item-2r6q">
                    <div class="timeline-year-9x5m">2001</div>
                    <div class="timeline-content-7k2n">
                        <h3>Third Generation</h3>
                        <p>Giuseppe's grandson Marco takes over daily operations, introducing modern efficiency while preserving every traditional technique. The restaurant begins sourcing from local organic farms, strengthening community ties and ensuring the freshest possible ingredients for every pizza that leaves the kitchen.</p>
                    </div>
                </div>
                <div class="timeline-item-2r6q">
                    <div class="timeline-year-9x5m">2018</div>
                    <div class="timeline-content-7k2n">
                        <h3>Modern Heritage</h3>
                        <p>The fourth generation joins the family business as Tony's celebrates its 66th anniversary. While embracing modern conveniences like online ordering, the core values remain unchanged: fresh ingredients, traditional methods, and treating every customer like family. <a href="#specialties-8w3q" class="continue-link-4z7n">Click Here to Continue</a> exploring our specialties.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Specialties Section -->
        <section id="specialties-8w3q" class="content-section-2m8k">
            <h2 class="section-title-9r4w">Our Signature Creations</h2>
            <div class="specialties-grid-5w8p">
                <div class="specialty-card-3m9r">
                    <div class="specialty-icon-6q4k">🍕</div>
                    <h3>Classic Margherita</h3>
                    <p>San Marzano tomatoes, fresh mozzarella di bufala, basil leaves, and extra virgin olive oil on our signature sourdough crust. This timeless combination showcases the purity of Italian flavors in every bite.</p>
                </div>
                <div class="specialty-card-3m9r">
                    <div class="specialty-icon-6q4k">🌿</div>
                    <h3>Garden Harvest</h3>
                    <p>Seasonal vegetables from our partner farms, including roasted bell peppers, caramelized onions, fresh mushrooms, and sun-dried tomatoes, topped with creamy goat cheese and fresh herbs.</p>
                </div>
                <div class="specialty-card-3m9r">
                    <div class="specialty-icon-6q4k">🥩</div>
                    <h3>Meat Lovers Paradise</h3>
                    <p>House-made Italian sausage, pepperoni, prosciutto, and pancetta, balanced with our three-cheese blend and finished with fresh oregano and cracked black pepper.</p>
                </div>
                <div class="specialty-card-3m9r">
                    <div class="specialty-icon-6q4k">🌊</div>
                    <h3>Mediterranean Delight</h3>
                    <p>Kalamata olives, feta cheese, roasted red peppers, artichoke hearts, and fresh spinach, drizzled with herb-infused olive oil and finished with a sprinkle of oregano.</p>
                </div>
            </div>
        </section>

        <!-- Ingredients Showcase -->
        <section id="ingredients-2m9r" class="ingredients-showcase-3m8r">
            <div class="ingredients-overlay-7k4w"></div>
            <div class="ingredients-content-2p9x">
                <h2 class="section-title-9r4w" style="color: white;">Quality You Can Taste</h2>
                <p style="font-size: 1.3rem; margin-bottom: 2rem;">We believe great pizza starts with exceptional ingredients. That's why we've spent decades building relationships with local farmers, artisan cheese makers, and specialty importers who share our commitment to quality.</p>
                <p style="font-size: 1.1rem; margin-bottom: 2rem;">Our flour is milled weekly from organic wheat, our olive oil comes directly from a family grove in Tuscany, and our tomatoes are grown in volcanic soil for that distinctive sweet-tart flavor that makes our sauce unforgettable.</p>
                <a href="#reviews-5k8x" class="continue-link-4z7n">Click Here to Continue</a>
            </div>
        </section>

        <!-- Reviews Section -->
        <section id="reviews-5k8x" class="reviews-section-8x2m">
            <h2 class="section-title-9r4w">What Our Customers Say</h2>
            <div class="reviews-grid-4p7w">
                <div class="review-card-9k3x">
                    <div class="review-stars-2w6m">★★★★★</div>
                    <p class="review-text-7r4n">"I've been coming to Tony's for over twenty years, and the quality has never wavered. The crust is perfect every time - crispy on the outside, chewy on the inside. It's like taking a trip to Italy without leaving town. The staff treats you like family, and you can taste the love in every bite."</p>
                    <div class="reviewer-name-5x8q">- Maria Rodriguez, Regular Customer</div>
                </div>
                <div class="review-card-9k3x">
                    <div class="review-stars-2w6m">★★★★★</div>
                    <p class="review-text-7r4n">"As someone who grew up in Brooklyn, I'm very particular about pizza. Tony's is the real deal. The sauce has that perfect balance of sweet and tangy, the cheese is always fresh, and watching them toss the dough is like watching an artist at work. This place is a neighborhood treasure."</p>
                    <div class="reviewer-name-5x8q">- James Patterson, Food Enthusiast</div>
                </div>
                <div class="review-card-9k3x">
                    <div class="review-stars-2w6m">★★★★★</div>
                    <p class="review-text-7r4n">"My family has been ordering from Tony's for three generations. My grandmother brought me here as a child, I brought my kids, and now I'm bringing my grandchildren. The recipes haven't changed, the quality hasn't changed, and neither has the warm welcome you get every time you walk through the door."</p>
                    <div class="reviewer-name-5x8q">- Robert Chen, Multi-Generation Customer</div>
                </div>
                <div class="review-card-9k3x">
                    <div class="review-stars-2w6m">★★★★★</div>
                    <p class="review-text-7r4n">"I travel for work and have tried pizza all over the country. Nothing compares to Tony's. The ingredients are so fresh you can taste the difference, and the wood-fired oven gives it that authentic flavor you just can't replicate. When I'm homesick, I dream about their Margherita pizza."</p>
                    <div class="reviewer-name-5x8q">- Sarah Williams, Business Traveler</div>
                </div>
                <div class="review-card-9k3x">
                    <div class="review-stars-2w6m">★★★★★</div>
                    <p class="review-text-7r4n">"The atmosphere at Tony's is just as important as the food. It's cozy, authentic, and you can see the pizza being made right in front of you. The staff knows their regulars by name, and they make newcomers feel just as welcome. It's not just a restaurant, it's a community gathering place."</p>
                    <div class="reviewer-name-5x8q">- Michael Thompson, Local Resident</div>
                </div>
                <div class="review-card-9k3x">
                    <div class="review-stars-2w6m">★★★★★</div>
                    <p class="review-text-7r4n">"I'm vegetarian and sometimes struggle to find good options, but Tony's Garden Harvest pizza is incredible. They don't just throw vegetables on dough - every ingredient is carefully selected and prepared. The roasted peppers are sweet, the mushrooms are perfectly seasoned, and the goat cheese ties it all together beautifully."</p>
                    <div class="reviewer-name-5x8q">- Lisa Anderson, Vegetarian Food Lover</div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact-7p4w" class="contact-info-3z9p">
            <h2 class="section-title-9r4w" style="color: white;">Visit Us Today</h2>
            <div class="contact-grid-6m2k">
                <div class="contact-item-8w5r">
                    <h3>Location</h3>
                    <p>1247 Maple Street<br>Downtown District<br>Springfield, IL 62701</p>
                </div>
                <div class="contact-item-8w5r">
                    <h3>Phone</h3>
                    <a href="tel:+15559876543" class="phone-link-4q7m">(555) 987-6543</a>
                    <p style="margin-top: 1rem;">Call for takeout orders<br>or reservations</p>
                </div>
                <div class="contact-item-8w5r">
                    <h3>Hours</h3>
                    <p>Monday - Thursday: 11am - 10pm<br>
                    Friday - Saturday: 11am - 11pm<br>
                    Sunday: 12pm - 9pm</p>
                </div>
                <div class="contact-item-8w5r">
                    <h3>Email</h3>
                    <p>info@tonyspizzeria.com<br>
                    catering@tonyspizzeria.com</p>
                    <a href="#specialties-8w3q" class="continue-link-4z7n" style="margin-top: 1rem;">Click Here to Continue</a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer-section-9p3x">
            <div class="footer-links-2k8w">
                <a href="#" class="footer-link-7m4q" onclick="showModal('privacy')">Privacy Policy</a>
                <a href="#" class="footer-link-7m4q" onclick="showModal('terms')">Terms of Service</a>
                <a href="tel:+15559876543" class="footer-link-7m4q">Call Now: (555) 987-6543</a>
            </div>
            <p>© 2024 Tony's Authentic Pizzeria - ShopQXHub.com. All rights reserved.</p>
            <p style="margin-top: 1rem; font-size: 0.9rem;">Serving authentic Italian pizza since 1952 | Family owned and operated</p>
        </footer>

        <!-- Privacy Policy Modal -->
        <div id="privacy-modal-3k8w" class="modal-overlay-5r9k">
            <div class="modal-content-8x3p">
                <span class="modal-close-6w2m" onclick="closeModal('privacy')">×</span>
                <h2>Privacy Policy</h2>
                <p><strong>Effective Date:</strong> January 1, 2024</p>
                
                <h3>Information We Collect</h3>
                <p>Tony's Pizzeria collects information you provide directly to us, such as when you place an order, make a reservation, or contact us. This may include your name, phone number, email address, and delivery address.</p>
                
                <h3>How We Use Your Information</h3>
                <p>We use the information we collect to process your orders, communicate with you about your orders, improve our services, and send you promotional materials if you opt in to receive them.</p>
                
                                <h3>Information Sharing</h3>
                <p>We do not sell, trade, or otherwise transfer your personal information to third parties except as described in this policy. We may share information with trusted service providers who assist us in operating our website and conducting our business.</p>
                
                <h3>Data Security</h3>
                <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
                
                <h3>Cookies</h3>
                <p>Our website may use cookies to enhance your experience. You can choose to disable cookies through your browser settings, though this may affect website functionality.</p>
                
                <h3>Contact Information</h3>
                <p>If you have questions about this Privacy Policy, please contact us at info@tonyspizzeria.com or call (555) 987-6543.</p>
                
                <p style="margin-top: 2rem;"><a href="#contact-7p4w" class="continue-link-4z7n" onclick="closeModal('privacy')">Click Here to Continue</a> to our contact section.</p>
            </div>
        </div>

        <!-- Terms of Service Modal -->
        <div id="terms-modal-7m2q" class="modal-overlay-5r9k">
            <div class="modal-content-8x3p">
                <span class="modal-close-6w2m" onclick="closeModal('terms')">×</span>
                <h2>Terms of Service</h2>
                <p><strong>Effective Date:</strong> January 1, 2024</p>
                
                <h3>Acceptance of Terms</h3>
                <p>By accessing and using Tony's Pizzeria website and services, you accept and agree to be bound by the terms and provision of this agreement.</p>
                
                <h3>Use License</h3>
                <p>Permission is granted to temporarily download one copy of the materials on Tony's Pizzeria website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title.</p>
                
                <h3>Ordering and Payment</h3>
                <p>All orders are subject to availability and confirmation. We reserve the right to refuse any order. Payment must be made at the time of order placement for delivery orders, or upon pickup/delivery for phone orders.</p>
                
                <h3>Delivery Policy</h3>
                <p>Delivery times are estimates and may vary based on weather, traffic, and order volume. We are not responsible for delays beyond our reasonable control. Delivery is available within our designated service area only.</p>
                
                <h3>Cancellation Policy</h3>
                <p>Orders may be cancelled up to 10 minutes after placement. After this time, cancellations are subject to a restocking fee. Custom orders cannot be cancelled once preparation has begun.</p>
                
                <h3>Limitation of Liability</h3>
                <p>Tony's Pizzeria shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of our services.</p>
                
                <h3>Governing Law</h3>
                <p>These terms are governed by the laws of Illinois without regard to its conflict of law provisions.</p>
            </div>
        </div>
    </div>

    <script>
        // Modal functionality
        function showModal(type) {
            const modal = document.getElementById(type + '-modal-' + (type === 'privacy' ? '3k8w' : '7m2q'));
            if (modal) {
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal(type) {
            const modal = document.getElementById(type + '-modal-' + (type === 'privacy' ? '3k8w' : '7m2q'));
            if (modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const privacyModal = document.getElementById('privacy-modal-3k8w');
            const termsModal = document.getElementById('terms-modal-7m2q');
            
            if (event.target === privacyModal) {
                closeModal('privacy');
            }
            if (event.target === termsModal) {
                closeModal('terms');
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerHeight = document.querySelector('.header-section-4k7m').offsetHeight;
                    const targetPosition = target.offsetTop - headerHeight - 20;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add scroll effect to header
        let lastScrollTop = 0;
        const header = document.querySelector('.header-section-4k7m');
        
        window.addEventListener('scroll', function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                header.style.transform = 'translateY(-100%)';
            } else {
                header.style.transform = 'translateY(0)';
            }
            lastScrollTop = scrollTop;
        });

        // Add animation to cards on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all cards
        document.querySelectorAll('.story-card-3q9m, .specialty-card-3m9r, .review-card-9k3x').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });

        // Add click tracking for analytics
        document.querySelectorAll('.continue-link-4z7n, .cta-button-7p3q').forEach(button => {
            button.addEventListener('click', function() {
                // Analytics tracking would go here
                console.log('Continue button clicked:', this.textContent);
            });
        });

        // Phone number click tracking
        document.querySelectorAll('.phone-link-4q7m').forEach(link => {
            link.addEventListener('click', function() {
                console.log('Phone number clicked for call');
            });
        });

        // Add loading animation to images
        document.querySelectorAll('img').forEach(img => {
            img.addEventListener('load', function() {
                this.style.opacity = '1';
            });
            img.style.opacity = '0';
            img.style.transition = 'opacity 0.3s ease';
        });

        // Add hover effects to navigation
        document.querySelectorAll('.nav-link-1m6n').forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            link.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Add dynamic year to footer
        const currentYear = new Date().getFullYear();
        const footerText = document.querySelector('.footer-section-9p3x p');
        if (footerText) {
            footerText.innerHTML = footerText.innerHTML.replace('2024', currentYear);
        }

        // Add form validation if forms are added later
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Add local storage for user preferences
        function saveUserPreference(key, value) {
            try {
                localStorage.setItem('tonys_' + key, value);
            } catch (e) {
                console.log('Local storage not available');
            }
        }

        function getUserPreference(key) {
            try {
                return localStorage.getItem('tonys_' + key);
            } catch (e) {
                return null;
            }
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            // Add any initialization code here
            console.log('Tony\'s Pizzeria website loaded successfully');
            
            // Preload critical images
            const criticalImages = [
                'https://images.pexels.com/photos/315755/pexels-photo-315755.jpeg',
                'https://images.pexels.com/photos/1566837/pexels-photo-1566837.jpeg'
            ];
            
            criticalImages.forEach(src => {
                const img = new Image();
                img.src = src;
            });
        });

        // Add error handling for images
        document.querySelectorAll('img').forEach(img => {
            img.addEventListener('error', function() {
                this.style.display = 'none';
                console.log('Image failed to load:', this.src);
            });
        });

        // Add keyboard navigation support
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal('privacy');
                closeModal('terms');
            }
        });

        // Add touch support for mobile
        let touchStartY = 0;
        document.addEventListener('touchstart', function(e) {
            touchStartY = e.touches[0].clientY;
        });

        document.addEventListener('touchmove', function(e) {
            const touchY = e.touches[0].clientY;
            const touchDiff = touchStartY - touchY;
            
            if (Math.abs(touchDiff) > 50) {
                // Handle swipe gestures if needed
            }
        });
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>



