const body = document.querySelector("body");
const navbar = document.querySelector(".navbar");
const menu = document.querySelector(".menu-list");
const menuBtn = document.querySelector(".menu-btn");
const cancelBtn = document.querySelector(".cancel-btn");

menuBtn.onclick = () => {
  menu.classList.add("active");
  menuBtn.classList.add("hide");
  cancelBtn.classList.add("show");
  body.classList.add("disabledScroll");
}

cancelBtn.onclick = () => {
  menu.classList.remove("active");
  menuBtn.classList.remove("hide");
  cancelBtn.classList.remove("show");
  body.classList.remove("disabledScroll");
}

const siteLogo = document.querySelector('.logo a');

const navLinks = document.querySelectorAll('.menu-list li');

const playSongBtn = document.querySelector('.play-song-btn');

navLinks.forEach(item => {
  item.addEventListener('click', function () {
    navLinks.forEach(menuItem => menuItem.classList.remove('active-menu-list'));

    this.classList.add('active-menu-list');
  });
});

playSongBtn.onclick = () => {
  removeActiveClass();
}

siteLogo.onclick = () => {
  removeActiveClass();
};

function removeActiveClass() {
  navLinks.forEach(menuItem => menuItem.classList.remove('active-menu-list'));
}

window.onscroll = () => {
  this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");

  if (document.body.scrollTop > 75 || document.documentElement.scrollTop > 75) {
    moveTopBtn.style.display = "block";
  } else {
    moveTopBtn.style.display = "none";
  }
}

const playSong = document.getElementById("song");
var icon = document.getElementById("icon");

icon.addEventListener("click", playMusic);

function playMusic() {
  if (playSong.paused) {
    playSong.play();
    icon.src = "./assets/Image/pause.png";
  } else {
    playSong.pause();
    icon.src = "./assets/Image/play.png";
  }
}

var moveTopBtn = document.getElementById("moveTopBtn");

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
  removeActiveClass();
}

var loader = document.getElementById("loading");
function preLoader() {
  loader.style.display = "none";
}

const buttons = document.querySelectorAll(".btn");

const photo = document.getElementById("banner");
const song = document.getElementById("song");
const songName = document.getElementById("songName");
const songBy = document.getElementById("songBy");
const aboutSong = document.getElementById("aboutSong");
const title = document.getElementById("title");
const download = document.getElementById("download");

buttons[0].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/TNO.jpg";
  song.src = "./assets/Songs/ET/death of the monster.mp3";
  songName.innerText = "Death of the Monster";
  songBy.innerText = "Electrotatary";
  title.innerText = "Death of the Monster";
  download.href = "./assets/Songs/ET/death of the monster.mp3";
  aboutSong.innerText = "Music has the power to uplift your mood and also makes you feel the warmth of emotions in the most memorable ways.Weaving magic once again, Label Day One announces the launch of 'khoya sa' by singer, songwriter & composer, KASYAP who is ready to twirl up emotions and make you feel the jitters of love at first sight. ";
});

buttons[1].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/TNO.jpg";
  song.src = "./assets/Songs/ET/last days of europe.mp3";
  songName.innerText = "Last Days of Europe";
  songBy.innerText = "Electrotatary";
  title.innerText = "Last Days of Europe";
  download.href = "./assets/Songs/ET/last days of europe.mp3";
  aboutSong.innerText = "Music has the power to uplift your mood and also makes you feel the warmth of emotions in the most memorable ways.Weaving magic once again, Label Day One announces the launch of 'khoya sa' by singer, songwriter & composer, KASYAP who is ready to twirl up emotions and make you feel the jitters of love at first sight. ";
});

buttons[2].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/TNO.jpg";
  song.src = "./assets/Songs/ET/reunification.mp3";
  songName.innerText = "Reunification";
  songBy.innerText = "Electrotatary";
  title.innerText = "Reunification";
  download.href = "./assets/Songs/ET/reunification.mp3";
  aboutSong.innerText = "Music has the power to uplift your mood and also makes you feel the warmth of emotions in the most memorable ways.Weaving magic once again, Label Day One announces the launch of 'khoya sa' by singer, songwriter & composer, KASYAP who is ready to twirl up emotions and make you feel the jitters of love at first sight. ";
});

buttons[3].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/TNO.jpg";
  song.src = "./assets/Songs/ET/world war 3.mp3";
  songName.innerText = "World War III";
  songBy.innerText = "Electrotatary";
  title.innerText = "World War III";
  download.href = "./assets/Songs/ET/world war 3.mp3";
  aboutSong.innerText = "Music has the power to uplift your mood and also makes you feel the warmth of emotions in the most memorable ways.Weaving magic once again, Label Day One announces the launch of 'khoya sa' by singer, songwriter & composer, KASYAP who is ready to twirl up emotions and make you feel the jitters of love at first sight. ";
});

buttons[4].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/TNO.jpg";
  song.src = "./assets/Songs/ET/the great trial has come.mp3";
  songName.innerText = "The Great Trial has come";
  songBy.innerText = "Electrotatary";
  title.innerText = "The Great Trial has come";
  download.href = "./assets/Songs/ET/the great trial has come.mp3";
  aboutSong.innerText = "Music has the power to uplift your mood and also makes you feel the warmth of emotions in the most memorable ways.Weaving magic once again, Label Day One announces the launch of 'khoya sa' by singer, songwriter & composer, KASYAP who is ready to twirl up emotions and make you feel the jitters of love at first sight. ";
});

buttons[5].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/TNO.jpg";
  song.src = "./assets/Songs/ET/the bloody regent.mp3";
  songName.innerText = "The Bloody Regent";
  songBy.innerText = "Electrotatary";
  title.innerText = "The Bloody Regent";
  download.href = "./assets/Songs/ET/the bloody regent.mp3";
  aboutSong.innerText = "Music has the power to uplift your mood and also makes you feel the warmth of emotions in the most memorable ways.Weaving magic once again, Label Day One announces the launch of 'khoya sa' by singer, songwriter & composer, KASYAP who is ready to twirl up emotions and make you feel the jitters of love at first sight. ";
});

buttons[6].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/TNO.jpg";
  song.src = "./assets/Songs/ET/god save us.mp3";
  songName.innerText = "God save us";
  songBy.innerText = "Electrotatary";
  title.innerText = "God save us";
  download.href = "./assets/Songs/ET/god save us.mp3";
  aboutSong.innerText = "Music has the power to uplift your mood and also makes you feel the warmth of emotions in the most memorable ways.Weaving magic once again, Label Day One announces the launch of 'khoya sa' by singer, songwriter & composer, KASYAP who is ready to twirl up emotions and make you feel the jitters of love at first sight. ";
});

buttons[7].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/TNO.jpg";
  song.src = "./assets/Songs/ET/sacred war.mp3";
  songName.innerText = "Sacred War";
  songBy.innerText = "Electrotatary";
  title.innerText = "Sacred War";
  download.href = "./assets/Songs/ET/sacred war.mp3";
  aboutSong.innerText = "Music has the power to uplift your mood and also makes you feel the warmth of emotions in the most memorable ways.Weaving magic once again, Label Day One announces the launch of 'khoya sa' by singer, songwriter & composer, KASYAP who is ready to twirl up emotions and make you feel the jitters of love at first sight. ";
});

buttons[8].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/TNO.jpg";
  song.src = "./assets/Songs/ET/slave rebellion.mp3";
  songName.innerText = "Slave rebellion";
  songBy.innerText = "Electrotatary";
  title.innerText = "Slave rebellion";
  download.href = "./assets/Songs/ET/slave rebellion.mp3";
  aboutSong.innerText = "Music has the power to uplift your mood and also makes you feel the warmth of emotions in the most memorable ways.Weaving magic once again, Label Day One announces the launch of 'khoya sa' by singer, songwriter & composer, KASYAP who is ready to twirl up emotions and make you feel the jitters of love at first sight. ";
});


buttons[9].addEventListener("click", () => {
  icon.src = "./assets/Image/play.png";
  photo.src = "./assets/Image/TNO.jpg";
  song.src = "./assets/Songs/ET/the last breath in this world of endless pain.mp3";
  songName.innerText = "The last breath in this world of endless pain";
  songBy.innerText = "Electrotatary";
  title.innerText = "The last breath in this world of endless pain";
  download.href = "./assets/Songs/ET/the last breath in this world of endless pain.mp3";
  aboutSong.innerText = "Music has the power to uplift your mood and also makes you feel the warmth of emotions in the most memorable ways.Weaving magic once again, Label Day One announces the launch of 'khoya sa' by singer, songwriter & composer, KASYAP who is ready to twirl up emotions and make you feel the jitters of love at first sight. ";
});






