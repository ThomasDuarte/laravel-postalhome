<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrer un Colis - LaravelPost</title>
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
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 500px;
            backdrop-filter: blur(10px);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            color: #333;
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .header p {
            color: #666;
            font-size: 1rem;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            color: #555;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .form-group input {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e1e5e9;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .form-group input:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.15);
        }

        .form-group input:hover {
            border-color: #a8b3f0;
        }

        .btn-submit {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.3);
        }

        .btn-submit:active {
            transform: translateY(-1px);
        }

        .alerts {
            margin: 25px 0;
        }

        .alert {
            padding: 15px 20px;
            border-radius: 12px;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .alert-error {
            background: #fee;
            border: 1px solid #fcc;
            color: #c33;
        }

        .alert-success {
            background: #efe;
            border: 1px solid #cfc;
            color: #363;
        }

        .alert ul {
            list-style: none;
            margin: 0;
        }

        .alert li {
            padding: 5px 0;
            position: relative;
            padding-left: 20px;
        }

        .alert li:before {
            content: "⚠️";
            position: absolute;
            left: 0;
        }

        .alert-success p:before {
            content: "✅ ";
        }

        .back-link {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .back-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .back-link a:hover {
            color: #764ba2;
            transform: translateX(-5px);
        }

        .input-icon {
            position: relative;
        }

        .input-icon:before {
            content: "";
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            opacity: 0.5;
            z-index: 1;
        }

        .address-dep:before {
            content: "🏠";
        }

        .address-arr:before {
            content: "📍";
        }

        .weight:before {
            content: "⚖️";
        }

        .input-icon input {
            padding-left: 50px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 30px 20px;
                margin: 10px;
            }
            
            .header h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📦 Enregistrer un Colis</h1>
            <p>Remplissez les informations de votre envoi</p>
        </div>

        <form action="{{ url('/register') }}" method="post">
            @csrf
            
            <div class="form-group">
                <label for="address_dep">
                    <span>Adresse de départ</span>
                </label>
                <div class="input-icon address-dep">
                    <input 
                        type="text" 
                        id="address_dep"
                        name="address_dep" 
                        value="{{ old('address_dep') }}" 
                        placeholder="1 rue Dupont, 75001 Paris"
                        required
                    >
                </div>
            </div>
            
            <div class="form-group">
                <label for="address_arr">
                    <span>Adresse d'arrivée</span>
                </label>
                <div class="input-icon address-arr">
                    <input 
                        type="text" 
                        id="address_arr"
                        name="address_arr" 
                        value="{{ old('address_arr') }}" 
                        placeholder="2 rue de la Muse, 69000 Lyon"
                        required
                    >
                </div>
            </div>
            
            <div class="form-group">
                <label for="weigth">
                    <span>Poids du colis (en grammes)</span>
                </label>
                <div class="input-icon weight">
                    <input 
                        type="number" 
                        id="weigth"
                        name="weigth" 
                        value="{{ old('weigth') }}" 
                        placeholder="270"
                        min="1"
                        required
                    >
                </div>
            </div>
            
            <button type="submit" class="btn-submit">
                🚀 Enregistrer le Colis
            </button>
        </form>

        <div class="alerts">
            @if ($errors->any())
                <div class="alert alert-error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (isset($message))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        </div>

        <div class="back-link">
            <a href="{{ url('/') }}">
                <span>← Retour à l'accueil</span>
            </a>
        </div>
    </div>
</body>
</html>