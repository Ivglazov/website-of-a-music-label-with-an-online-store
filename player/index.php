<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/4074b6dd70.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./styles/style.css" />
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-storage.js"></script>
    <title>Слушать</title>
  </head>
  <body>
    
    
    <div class="app">
      <div class="connect-popup">
        <div class="alert-message popup-section">
          <i class="fas fa-times"></i>
          <div></div>
        </div>
      </div>
      <nav>
        <span id="library-link">Песни</span>
        <span id="connect-link"><a href="../disco.php" style="text-decoration: none; color: #fcf9f9;">Назад</a></span>
        
        
      </nav>
      <div class="song-info">
        <img
        src="./assets/Image/TNO.jpg"
        alt=""
        />
        <div>
          <h2>Death of the Monster</h2>
          <h3>Electrotatary</h3>
        </div>
      </div>
      <div class="player">
        <div>
          <input type="range" />
          <div></div>
        </div>
        <span>Начало</span>
        <span>Конец</span>
      </div>
      <div class="player-control">
        <i class="fas fa-backward" id="backward"></i>
        <i class="fas fa-play" id="play-pause"></i>
        <i class="fas fa-forward" id="forward"></i>
      </div>
      <div class="sound-control">
        <i class="fas fa-volume-down"></i>
        <input type="range" max="100" step="1" />
        <i class="fas fa-volume-up"></i>
      </div>
      <audio src="./assets/Songs/ET/death of the monster.mp3"></audio>
    </div>
    <div class="library">
      <h2>Песни</h2>
      <div class="library-song selected" id="0">
        <img
          src="./assets/Image/TNO.jpg"
          alt=""
        />
        <div class="library-song-info">
          <h3>Death of the Monster</h3>
          <h4>The New Order</h4>
        </div>
      </div>
      <div class="library-song" id="1">
        <img
        src="./assets/Image/TNO.jpg"
        alt=""
        />
        <div class="library-song-info">
          <h3>Last days of Europe</h3>
          <h4>The New Order</h4>
        </div>
      </div>
      <div class="library-song" id="2">
        <img
        src="./assets/Image/TNO.jpg"
        alt=""
        />
        <div class="library-song-info">
          <h3>Reunification</h3>
          <h4>The New Order</h4>
        </div>
      </div>
      <div class="library-song" id="3">
        <img
        src="./assets/Image/TNO.jpg"
        alt=""
        />
        <div class="library-song-info">
          <h3>World War III</h3>
          <h4>The New Order</h4>
        </div>
      </div>
      <div class="library-song" id="4">
        <img
        src="./assets/Image/TNO.jpg"
        alt=""
        />
        <div class="library-song-info">
          <h3>The Great Trial has come</h3>
          <h4>The New Order</h4>
        </div>
      </div>
      <div class="library-song" id="5">
        <img
        src="./assets/Image/TNO.jpg"
        alt=""
        />
        <div class="library-song-info">
          <h3>The Bloody Regent</h3>
          <h4>The New Order</h4>
        </div>
      </div>
      <div class="library-song" id="6">
        <img
        src="./assets/Image/TNO.jpg"
        alt=""
        />
        <div class="library-song-info">
          <h3>God save us</h3>
          <h4>The New Order</h4>
        </div>
      </div>
      <div class="library-song" id="7">
        <img
        src="./assets/Image/TNO.jpg"
        alt=""
        />
        <div class="library-song-info">
          <h3>Sacred War</h3>
          <h4>The New Order</h4>
        </div>
      </div>
      <div class="library-song" id="8">
        <img
        src="./assets/Image/TNO.jpg"
        alt=""
        />
        <div class="library-song-info">
          <h3>Slave rebellion</h3>
          <h4>The New Order</h4>
        </div>
      </div>
      <div class="library-song" id="9">
        <img
        src="./assets/Image/TNO.jpg"
        alt=""
        />
        <div class="library-song-info">
          <h3>The last breath in this world of endless pain</h3>
          <h4>The New Order</h4>
        </div>
      </div>
    </div>
    <script>
      var firebaseConfig = {
        apiKey: "AIzaSyDrlpoAxibJjGCUbYq8rfBNK7wcjQbzpLg",
        authDomain: "audio-player-1d670.firebaseapp.com",
        projectId: "audio-player-1d670",
        storageBucket: "audio-player-1d670.appspot.com",
        messagingSenderId: "897703865464",
        appId: "1:897703865464:web:cdb889b090895c8aa9918d",
        measurementId: "G-724R4XTJZW",
        storageBucket: "gs://audio-player-1d670.appspot.com",
      };
      // Initialize Firebase
      firebase.initializeApp(firebaseConfig);
      const auth = firebase.auth();
      const db = firebase.firestore();
      const storage = firebase.storage();
      const storageRef = storage.ref();
    </script>
    <script src="./scripts/songs.js"></script>
    <script src="./scripts/app.js"></script>
    <script src="./scripts/auth.js"></script>
    <script src="./scripts/storage.js"></script>
  </body>
</html>
