@extends('layouts.hotel')
@section('title', 'Contact')

@section('content')

<style>
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap');

  .contact-wrap { font-family: 'Lato', sans-serif; }

  .info-bar { display: flex; justify-content: center; gap: 60px; margin-bottom: 50px; }
  .info-item { text-align: center; }
  .info-item .icon {
    width: 44px; height: 44px;
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 8px;
    font-size: 18px;
  }
  .info-item p { font-size: 11px; color: #8899aa; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 3px; }
  .info-item span { font-size: 13px; color: #ccd6e0; }

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
  }
  .divider { border: none; border-top: 1px solid #eef2f7; margin: 8px 0 24px; }
</style>

<div class="contact-wrap">

  {{-- Hero --}}
  <div class="py-24 text-center">
    <h1 class="text-6xl font-bold mb-5 text-blue-300 underline"
        style="font-family:'Playfair Display',serif; letter-spacing:6px;">
      contact
    </h1>
    </br></br>
    <!--
      <p class="text-3xl text-white mb-2" style="letter-spacing:2px;">
        Suites royales &bull; Vue mer &bull; Confort absolu
      </p>
      <p class="text-xl font-bold text-blue-400" style="letter-spacing:1px;">salut malak</p>
    -->
  </div>

  {{-- Info Bar --}}
  <div class="info-bar">
    <div class="info-item">
      <div class="icon">📍</div>
      <p>Adresse</p>
      <span>Jumeirah Beach Road, Dubaï</span>
    </div>
    <div class="info-item">
      <div class="icon">📞</div>
      <p>Téléphone</p>
      <span>+971 4 000 0000</span>
    </div>
    <div class="info-item">
      <div class="icon">✉️</div>
      <p>Email</p>
      <span>contact@hyattjumeirah.com</span>
    </div>
  </div>

  {{-- Form Card --}}
  <div style="padding: 0 24px;">
  <div class="form-card">

    <h2>Envoyez-nous un message</h2>
    <hr class="divider">

    @if(session('success'))
      <div class="success-msg">✅ {{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST">
      @csrf

      {{-- Coordonnées --}}
      <div class="form-section-title">Vos coordonnées</div>
      <div class="grid-2">
        <div class="field-group">
          <label>Prénom</label>
          <input type="text" name="prenom" required
            value="{{ old('prenom') }}" placeholder="Votre prénom">
        </div>
        <div class="field-group">
          <label>Nom</label>
          <input type="text" name="nom" required
            value="{{ old('nom') }}" placeholder="Votre nom">
        </div>
      </div>
      <div class="field-group">
        <label>Email</label>
        <input type="email" name="email" required
          value="{{ old('email') }}" placeholder="votre@email.com">
      </div>

      {{-- Message --}}
      <div class="form-section-title">Votre message</div>
      <div class="field-group">
        <label>Sujet</label>
        <select name="sujet">
          <option value="">-- Choisissez un sujet --</option>
          <option value="info">Informations générales</option>
          <option value="services">Services & Équipements</option>
          <option value="reclamation">Réclamation</option>
          <option value="autre">Autre</option>
        </select>
      </div>
      <div class="field-group">
        <label>Message</label>
        <textarea name="message" rows="5" required
          placeholder="Écrivez votre message ici...">{{ old('message') }}</textarea>
      </div>

      <button type="submit" class="btn-submit">✉ &nbsp; Envoyer le message</button>

    </form>
  </div>
  </div>

</div>

@endsection