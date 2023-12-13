<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyPrinter - Test</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="card mt-4 px-0 rounded shadow border-0">
            <div class="card-header bg-primary py-3 d-flex align-items-center justify-content-between">
                <h2 class="card-title text-light mb-3">Les États-Unis</h2>
                  <a href="{{ route('accueil.index') }}" class="btn btn-light">Voir Plus</a>
            </div>
            <div class="card-body">
                  <div class="card-text">
                    <p> Les États-Unis (prononcé : /etaz‿yni/), en forme longue les États-Unis d'Amériqueb, également appelés informellement les USA ou moins exactement l'Amérique ou encore les States (en anglais : United States, United States of America, US, USA, America), sont un État transcontinental dont la majorité du territoire se situe en Amérique du Nord.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
