<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suivi de colis - PostalHome</title>
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
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            backdrop-filter: blur(10px);
        }

        .header {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            padding: 30px;
            text-align: center;
            color: white;
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: 300;
        }

        .header p {
            opacity: 0.9;
            font-size: 1.1rem;
        }

        .content {
            padding: 40px;
        }

        .search-form {
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
            font-size: 1.1rem;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper input {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e1e5e9;
            border-radius: 10px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .input-wrapper input:focus {
            outline: none;
            border-color: #4facfe;
            background: white;
            box-shadow: 0 0 0 3px rgba(79, 172, 254, 0.1);
        }

        .search-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .search-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(79, 172, 254, 0.3);
        }

        .search-btn:active {
            transform: translateY(0);
        }

        .result-card {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            border-radius: 15px;
            padding: 30px;
            margin-top: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .error-card {
            background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
            border-radius: 15px;
            padding: 30px;
            margin-top: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .error-header h3 {
            color: #c53030;
            font-size: 1.8rem;
            margin-bottom: 15px;
        }

        .error-header p {
            color: #744210;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .result-header {
            text-align: center;
            margin-bottom: 25px;
        }

        .result-header h3 {
            color: #2d3748;
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .status-badge {
            display: inline-block;
            padding: 8px 20px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .status-pending {
            background: #fed7af;
            color: #c05621;
        }

        .status-in-transit {
            background: #bee3f8;
            color: #2b6cb0;
        }

        .status-delivered {
            background: #c6f6d5;
            color: #276749;
        }

        .parcel-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 25px;
        }

        .detail-item {
            background: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .detail-item .label {
            font-size: 0.9rem;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .detail-item .value {
            font-size: 1.3rem;
            font-weight: 600;
            color: #2d3748;
        }

        .back-link {
            margin-top: 30px;
            text-align: center;
        }

        .back-link a {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #4facfe;
            text-decoration: none;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .back-link a:hover {
            background: rgba(79, 172, 254, 0.1);
            transform: translateX(-5px);
        }

        .tracking-icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        @media (max-width: 768px) {
            .container {
                margin: 10px;
                border-radius: 15px;
            }
            
            .header h1 {
                font-size: 2rem;
            }
            
            .content {
                padding: 25px;
            }
            
            .parcel-details {
                grid-template-columns: 1fr;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="tracking-icon">📦</div>
            <h1>Suivi de Colis</h1>
            <p>Entrez votre numéro de suivi pour localiser votre colis</p>
        </div>

        <div class="content">
            <form action="{{ url('tracking') }}" method="post" class="search-form">
                @csrf
                <div class="form-group">
                    <label for="tracking_number">Numéro de suivi</label>
                    <div class="input-wrapper">
                        <input 
                            type="text" 
                            id="tracking_number"
                            name="tracking_number" 
                            placeholder="Entrez votre numéro de suivi (ex: 123456789)"
                            value="{{ old('tracking_number') }}"
                            required
                        >
                    </div>
                </div>
                <button type="submit" class="search-btn">
                    🔍 Rechercher mon colis
                </button>
            </form>

            @if (isset($error))
                <div class="error-card">
                    <div class="error-header">
                        <h3>❌ Colis non trouvé</h3>
                        <p>{{ $error }}</p>
                    </div>
                </div>
            @elseif (isset($parcel))
                <div class="result-card">
                    <div class="result-header">
                        <h3>✅ Colis trouvé !</h3>
                        <span class="status-badge status-{{ strtolower(str_replace(' ', '-', $parcel->status)) }}">
                            {{ $parcel->status }}
                        </span>
                    </div>
                    
                    <div class="parcel-details">
                        <div class="detail-item">
                            <div class="label">Numéro de suivi</div>
                            <div class="value">{{ $parcel->tracking_number }}</div>
                        </div>
                        <div class="detail-item">
                            <div class="label">Poids</div>
                            <div class="value">{{ $parcel->weight }}g</div>
                        </div>
                        <div class="detail-item">
                            <div class="label">Adresse de départ</div>
                            <div class="value">{{ $parcel->address_dep }}</div>
                        </div>
                        <div class="detail-item">
                            <div class="label">Adresse d'arrivée</div>
                            <div class="value">{{ $parcel->address_arr }}</div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="back-link">
                <a href="{{ url('/') }}">
                    <span>← Retour à l'accueil</span>
                </a>
            </div>
        </div>
    </div>
</body>
</html>