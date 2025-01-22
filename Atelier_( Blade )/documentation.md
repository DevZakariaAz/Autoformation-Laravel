## Atelier Blade

### Introduction

#### Qu’est-ce que Blade ?

- Blade est un moteur de templates simple et puissant intégré à Laravel.
- Il transforme les templates Blade en code PHP pur pour de meilleures performances.
- Les fichiers Blade ont l’extension `.blade.php` et sont stockés dans `resources/views`.

---

### Affichage des données

#### Afficher des données dans Blade

- Utilisez `{{ }}` pour afficher des données en toute sécurité (protection XSS).
- Pour des données non échappées (avec des risques), utilisez `{!! !!}`.
  
**Exemple :**
```php
<p>{{ $user->name }}</p> <!-- Données sécurisées -->
<p>{!! $user->description !!}</p> <!-- Données non sécurisées -->
```

#### Blade et JavaScript

- Évitez les conflits avec des frameworks JS (ex. Vue.js) en utilisant `@{{ }}`.

**Exemple :**
```blade
<div id="app">
    <p>@{{ name }}</p> <!-- Pas de conflit avec Vue.js -->
</div>
```

- **JSON dans Blade** : Utilisez `@json` pour inclure des données JSON.
```blade
<script>
    var userData = @json($user);
</script>
```

- **@verbatim** : Empêche l’exécution des directives Blade.
```blade
@verbatim
    <div>{{ $user->name }}</div>
@endverbatim
```

---

### Directives Blade

- **Authentification** :
  - `@auth` : Contenu visible pour les utilisateurs connectés.
  - `@guest` : Contenu pour les visiteurs non connectés.

- **Environnement** :
  - `@production` : Pour le mode production.
  - `@env('local')` : Pour tester l’environnement.

- **Sections** :
  - `@hasSection` / `@missingSection` : Vérifie si une section existe.

- **Classes CSS dynamiques** :
  - `@class` : Ajoute des classes conditionnelles.

**Exemple :**
```blade
<p @class(['active' => $isActive])>Hello</p>
```

- **Rendu pour collections** :
  - `@each()` : Inclut une vue pour chaque élément d’une collection.

- **Commentaires** :
  - `{{-- commentaire --}}` : Non affiché dans le HTML.

- **Une seule exécution** :
  - `@once` : Pour un contenu chargé une fois.
```blade
@once
    <script src="/script.js"></script>
@endonce
```

---

### Formulaires et styles

- **Injecter des services** : Utilisez `@inject` pour appeler un service.
```blade
@inject('service', 'App\Services\MyService')
{{ $service->method() }}
```

- **Scripts et styles dynamiques** : Utilisez `@push` et `@stack` pour injecter du contenu.
```blade
@push('scripts')
    <script src="/js/custom.js"></script>
@endpush
```

---

### Références

[Documentation Laravel Blade](https://laravel.com/docs/11.x/frontend#php-and-blade)

