var threesixty = new ThreeSixty(document.getElementById('threesixty'), {
  image: 'image.jpeg',
  width: 230,
  height: 230,
  count: 3,
  perRow: 3,
  speed: 150,
  prev: document.getElementById('prev'),
  next: document.getElementById('next')
});

threesixty.play();