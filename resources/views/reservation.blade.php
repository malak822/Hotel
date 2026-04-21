@extends('layouts.hotel')
@section('title', 'Réservation')

@section('content')

<style>
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap');

  .resa-wrap { font-family: 'Lato', sans-serif; }

  .form-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 48px 52px;
    max-width: 820px;
    margin: 0 auto 80px;
    box-shadow: 0 32px 80px rgba(0,0,0,0.4);
  }

  .form-card h2 {
    font-family: 'Playfair Display', serif;
    font-size: 26px;
    color: #1a2533;
    text-align: center;
    margin-bottom: 32px;
    letter-spacing: 1px;
  }

  .form-section-title {
    font-size: 12px;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #f0b429;
    font-weight: 700;
    margin-bottom: 16px;
    margin-top: 28px;
    border-left: 3px solid #f0b429;
    padding-left: 10px;
  }

  .field-group { margin-bottom: 24px; }
  .field-group label {
    display: block;
    font-size: 13px;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #4a5a6a;
    margin-bottom: 6px;
    font-weight: 700;
  }
  .field-group input,
  .field-group select,
  .field-group textarea {
    width: 100%;
    border: none;
    border-bottom: 1.5px solid #e0e7ef;
    padding: 10px 4px;
    font-size: 16px;
    color: #1a2533;
    background: transparent;
    font-family: 'Lato', sans-serif;
    transition: border-color 0.2s;
    outline: none;
  }
  .field-group input:focus,
  .field-group select:focus,
  .field-group textarea:focus { border-bottom-color: #f0b429; }
  .field-group input::placeholder,
  .field-group textarea::placeholder { color: #aab4be; font-size: 15px; }

  .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 32px; }
  .grid-3 { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 24px; }

  .radio-group, .check-group {
    display: flex; flex-wrap: wrap; gap: 12px; margin-top: 4px;
  }
  .radio-group label, .check-group label {
    display: flex; align-items: center;
    background: #f4f7fb;
    border: 1.5px solid #e0e7ef;
    border-radius: 8px;
    padding: 10px 18px;
    font-size: 14px;
    color: #3a4a5a;
    cursor: pointer;
    letter-spacing: 0;
    text-transform: none;
    font-weight: 400;
    transition: all 0.2s;
    gap: 6px;
  }
  .radio-group label:hover, .check-group label:hover {
    border-color: #f0b429;
    background: #fffbf0;
  }
  .radio-group input, .check-group input { accent-color: #f0b429; }

  .price-box {
    background: #fffbf0;
    border: 1.5px solid #f0b429;
    border-radius: 12px;
    padding: 20px 24px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 28px;
  }
  .price-box .label { font-size: 13px; color: #7a8a99; text-transform: uppercase; letter-spacing: 1px; }
  .price-box .amount { font-size: 28px; font-weight: 700; color: #1a2533; font-family: 'Playfair Display', serif; }
  .price-box .per { font-size: 12px; color: #aab4be; }

  .btn-submit {
    width: 100%;
    background: linear-gradient(135deg, #f0b429, #e09010);
    color: #1a2533;
    font-family: 'Lato', sans-serif;
    font-weight: 700;
    font-size: 15px;
    letter-spacing: 2px;
    text-transform: uppercase;
    border: none;
    padding: 18px;
    border-radius: 10px;
    cursor: pointer;
    margin-top: 32px;
    transition: transform 0.2s, box-shadow 0.2s;
    box-shadow: 0 8px 24px rgba(240,180,41,0.3);
  }
  .btn-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 32px rgba(240,180,41,0.45);
  }

  .success-msg {
    background: #edfaf3;
    border: 1px solid #6fcf97;
    color: #1a6640;
    padding: 14px 20px;
    border-radius: 10px;
    margin-bottom: 24px;
    text-align: center;
    font-size: 14px;
  }
  .divider { border: none; border-top: 1px solid #eef2f7; margin: 8px 0 24px; }
</style>

<div class="resa-wrap">

  {{-- Hero --}}
  <div class="py-24 text-center">
    <h1 class="text-6xl font-bold mb-5 text-blue-300 underline"
        style="font-family:'Playfair Display',serif; letter-spacing:6px;">
      réservation
    </h1>
    </br></br>
  </div>

  {{-- Card --}}
  <div style="padding: 0 24px;">
  <div class="form-card">

    <h2>🏨 Réserver votre chambre</h2>
    <hr class="divider">

    @if(session('success'))
      <div class="success-msg">✅ {{ session('success') }}</div>
    @endif

    <form action="{{ route('reservation.send') }}" method="POST">
      @csrf

      {{-- Coordonnées --}}
      <div class="form-section-title">Vos coordonnées</div>
      <div class="grid-2">
        <div class="field-group">
          <label>Prénom</label>
          <input type="text" name="prenom" required value="{{ old('prenom') }}" placeholder="Votre prénom">
        </div>
        <div class="field-group">
          <label>Nom</label>
          <input type="text" name="nom" required value="{{ old('nom') }}" placeholder="Votre nom">
        </div>
      </div>
      <div class="grid-2">
        <div class="field-group">
          <label>Email</label>
          <input type="email" name="email" required value="{{ old('email') }}" placeholder="votre@email.com">
        </div>
        <div class="field-group">
          <label>Téléphone</label>
          <input type="tel" name="telephone" placeholder="+213 xx xx xx xx">
        </div>
      </div>
      <div class="field-group">
        <label>Nombre de personnes</label>
        <select name="personnes">
          <option value="1">1 personne</option>
          <option value="2" selected>2 personnes</option>
          <option value="3">3 personnes</option>
          <option value="4">4 personnes</option>
          <option value="5">5 personnes et plus</option>
        </select>
      </div>

      {{-- Chambre --}}
      <div class="form-section-title">Votre chambre</div>
      <div class="field-group">
        <label>Type de chambre</label>
        <select name="type_chambre">
          <option value="">-- Choisissez --</option>
          <option value="standard">🛏️ Chambre Standard</option>
          <option value="suite">🛏️ Suite</option>
          <option value="suite_royale">👑 Suite Royale</option>
          <option value="familiale">👨‍👩‍👧 Chambre Familiale</option>
        </select>
      </div>
      <div class="field-group">
        <label>Vue souhaitée</label>
        <div class="radio-group">
          <label><input type="radio" name="vue" value="mer"> 🌊 Vue sur la mer</label>
          <label><input type="radio" name="vue" value="interieur"> 🏢 Vue intérieure</label>
          <label><input type="radio" name="vue" value="piscine"> 🏊 Vue sur la piscine</label>
        </div>
      </div>

      {{-- Restauration --}}
      <div class="form-section-title">Restauration</div>
      <div class="field-group">
        <label>Repas inclus</label>
        <div class="check-group">
          <label><input type="checkbox" name="repas[]" value="petit_dejeuner"> 🍳 Petit-déjeuner</label>
          <label><input type="checkbox" name="repas[]" value="dejeuner"> 🍽️ Déjeuner</label>
          <label><input type="checkbox" name="repas[]" value="diner"> 🌙 Dîner</label>
        </div>
      </div>

      {{-- Dates --}}
      <div class="form-section-title">Dates du séjour</div>
      <div class="grid-3">
        <div class="field-group">
          <label>Date d'arrivée</label>
          <input type="date" name="date_arrivee" required>
        </div>
        <div class="field-group">
          <label>Date de départ</label>
          <input type="date" name="date_depart" required>
        </div>
        <div class="field-group">
          <label>Nombre de nuits</label>
          <input type="number" name="nuits" min="1" max="60" placeholder="Ex: 3">
        </div>
      </div>

      {{-- Demandes spéciales --}}
      <div class="form-section-title">Demandes spéciales</div>
      <div class="field-group">
        <label>Services supplémentaires</label>
        <div class="check-group">
          <label><input type="checkbox" name="services[]" value="spa"> 💆 Spa</label>
          <label><input type="checkbox" name="services[]" value="airport"> 🚗 Navette aéroport</label>
          <label><input type="checkbox" name="services[]" value="flowers"> 💐 Décoration florale</label>
          <label><input type="checkbox" name="services[]" value="champagne"> 🍾 Champagne à l'arrivée</label>
        </div>
      </div>
      <div class="field-group">
        <label>Message / Demande particulière</label>
        <textarea name="message" rows="3" placeholder="Anniversaire, lune de miel, allergies alimentaires...">{{ old('message') }}</textarea>
      </div>

      <button type="submit" class="btn-submit">🏨 &nbsp; Confirmer la réservation</button>

    </form>
  </div>
  </div>

</div>

@endsection