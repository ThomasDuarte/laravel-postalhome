<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Postalhome - Leader du Colis en France</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
        }

        .hero-section {
            text-align: center;
            padding: 60px 20px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        .logo-container {
            margin-bottom: 30px;
        }

        .logo-container img {
            width: 250px;
            max-width: 100%;
            height: auto;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .logo-container img:hover {
            transform: scale(1.05);
        }

        .hero-title {
            color: white;
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-subtitle {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.3rem;
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .stats-section {
            background: white;
            border-radius: 25px;
            padding: 40px;
            margin-bottom: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .stats-icon {
            font-size: 4rem;
            margin-bottom: 20px;
            display: block;
        }

        .stats-title {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .stats-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #667eea;
            margin-bottom: 10px;
        }

        .stats-description {
            color: #666;
            font-size: 1.1rem;
            line-height: 1.5;
        }

        .cta-section {
            background: white;
            border-radius: 25px;
            padding: 50px 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .cta-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 30px;
        }

        .cta-card {
            background: white;
            border-radius: 25px;
            padding: 40px 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 400px;
        }

        .cta-card:hover {
            transform: translateY(-5px);
        }

        .cta-card.primary {
            background: white;
            border: 2px solid rgba(102, 126, 234, 0.2);
        }

        .cta-card.secondary {
            background: white;
            border: 2px solid rgba(79, 172, 254, 0.2);
        }

        .cta-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .cta-button-container {
            margin-top: auto;
            padding-top: 20px;
        }

        .cta-icon {
            font-size: 3.5rem;
            margin-bottom: 20px;
            display: block;
        }

        .cta-title {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .cta-description {
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 35px;
            line-height: 1.6;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-primary {
            display: inline-block;
            padding: 18px 35px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 15px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
            width: 100%;
            max-width: 250px;
        }

        .btn-secondary {
            display: inline-block;
            padding: 18px 35px;
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
            text-decoration: none;
            border-radius: 15px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px rgba(79, 172, 254, 0.3);
            width: 100%;
            max-width: 250px;
        }

        .btn-primary:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.4);
            text-decoration: none;
            color: white;
        }

        .btn-secondary:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(79, 172, 254, 0.4);
            text-decoration: none;
            color: white;
        }

        .btn-primary:active,
        .btn-secondary:active {
            transform: translateY(-2px);
        }

        .buttons-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            display: block;
        }

        .feature-title {
            font-size: 1.3rem;
            color: #333;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .feature-description {
            color: #666;
            line-height: 1.5;
        }

        .status-indicator {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-top: 10px;
        }

        .status-active {
            background: #e8f5e8;
            color: #2d7d2d;
            border: 2px solid #4caf50;
        }

        .status-empty {
            background: #fff3e0;
            color: #f57c00;
            border: 2px solid #ff9800;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .container {
                padding: 30px 15px;
            }
            
            .stats-section {
                padding: 30px 25px;
            }
            
            .cta-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .cta-card {
                padding: 35px 25px;
                min-height: 350px;
            }
            
            .cta-button-container {
                padding-top: 15px;
            }
            
            .feature-card {
                padding: 25px 20px;
            }
            
            .btn-primary,
            .btn-secondary {
                padding: 16px 30px;
                font-size: 1rem;
                max-width: 220px;
            }
        }

        @media (max-width: 480px) {
            .hero-section {
                padding: 40px 15px;
            }
            
            .logo-container img {
                width: 200px;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .cta-card {
                padding: 30px 20px;
                min-height: 320px;
            }
            
            .btn-primary,
            .btn-secondary {
                padding: 15px 25px;
                font-size: 0.95rem;
                max-width: 200px;
            }
        }
    </style>
</head>
<body>
    <div class="hero-section">
        <div class="logo-container">
            <img src="/img/postalhome.webp" alt="Logo Postalhome" />
        </div>
        <h1 class="hero-title">🏠 Postalhome</h1>
        <p class="hero-subtitle">
            Le leader du colis en France. Expédiez vos colis en toute simplicité et sécurité.
        </p>
    </div>

    <div class="container">
        <div class="stats-section">
            <span class="stats-icon">📦</span>
            <h2 class="stats-title">État des Expéditions</h2>
            
            @if ($nbParcels > 0)
                <div class="stats-number">{{ $nbParcels }}</div>
                <p class="stats-description">
                    {{ $nbParcels === 1 ? 'colis est actuellement' : 'colis sont actuellement' }} en traitement
                </p>
                <span class="status-indicator status-active">
                    🟢 Service Actif
                </span>
            @else
                <div class="stats-number">0</div>
                <p class="stats-description">
                    Aucun colis en traitement actuellement
                </p>
                <span class="status-indicator status-empty">
                    🟡 En Attente
                </span>
            @endif
        </div>

        <div class="cta-grid">
            <div class="cta-card primary">
                <div class="cta-content">
                    <span class="cta-icon">📮</span>
                    <h2 class="cta-title">Expédier un Colis</h2>
                    <p class="cta-description">
                        Enregistrez votre nouveau colis en quelques clics. 
                        Service rapide, sécurisé et suivi en temps réel.
                    </p>
                </div>
                <div class="cta-button-container">
                    <a href="{{ url('/register') }}" class="btn-primary">
                        Enregistrer un Colis
                    </a>
                </div>
            </div>
            
            <div class="cta-card secondary">
                <div class="cta-content">
                    <span class="cta-icon">🔍</span>
                    <h2 class="cta-title">Suivre un Colis</h2>
                    <p class="cta-description">
                        Localisez votre colis en temps réel grâce à votre numéro de suivi. 
                        Statut et position mis à jour instantanément.
                    </p>
                </div>
                <div class="cta-button-container">
                    <a href="{{ url('/tracking') }}" class="btn-secondary">
                        Suivre mon Colis
                    </a>
                </div>
            </div>
        </div>
        
        <div class="features">
            <div class="feature-card">
                <span class="feature-icon">🚚</span>
                <h3 class="feature-title">Livraison Rapide</h3>
                <p class="feature-description">
                    Expédition en 24h et livraison express partout en France
                </p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">🔒</span>
                <h3 class="feature-title">Sécurisé</h3>
                <p class="feature-description">
                    Vos colis sont assurés et suivis à chaque étape du transport
                </p>
            </div>
            
            <div class="feature-card">
                <span class="feature-icon">💰</span>
                <h3 class="feature-title">Prix Compétitifs</h3>
                <p class="feature-description">
                    Les meilleurs tarifs du marché avec un service premium
                </p>
            </div>
        </div>
    </div>
</body>
</html>
