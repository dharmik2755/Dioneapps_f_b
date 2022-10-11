$(document).ready(function() {
  $('.post-wrapper').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    nextArrow: $('.next'),
    prevArrow: $('.prev'),
    // nextArrow: false,
    // prevArrow: false,
    dots: false,
    responsive: [
      {
        breakpoint: 1440,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          nextArrow: false,
          prevArrow: false
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          nextArrow: false,
          prevArrow: false
        }
      }

    ]
  });
});

// development page in projects
  $('.projects').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    nextArrow: $('.next'),
    prevArrow: $('.prev'),
    // dots: true,
    responsive: [
      {
        breakpoint: 1440,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          nextArrow: false,
          prevArrow: false
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          nextArrow: false,
          prevArrow: false
        }
      }

    ]
  });

// development page Other services
  $('.services_use').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    nextArrow: $('.next'),
    prevArrow: $('.prev'),
    responsive: [
      {
        breakpoint: 1440,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          nextArrow: false,
          prevArrow: false
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          nextArrow: false,
          prevArrow: false
        }
      }

    ]
  });

// home page Slider 
$('.home_slider_main').slick({
  autoplay: false,
  // infinite:true,
  Speed: 4000,
  // slidesToScroll: 1,
  nextArrow: false,
  prevArrow: false,
  // fade: true,
  cssEase: 'linear'
});


// live
// const canvas = document.querySelector('canvas');
// canvas.width = window.innerWidth;
// canvas.height = window.innerHeight;

// var c = canvas.getContext('2d');


// const color = [
//   "#6600CC",
//   "#FFCC00",
//   "#9EA9F0",
//   "#CC0000",
// ]


// var maxRadius = 20;
// var minRadius = 2;
// var mouse = {
//   x: undefined,
//   y: undefined
// };

// window.addEventListener('mousemove', function(event){
//   mouse.x = event.x;
//   mouse.y = event.y;
//   console.log(mouse);
// });

// window.addEventListener('resize', function(){
//   canvas.width = window.innerWidth;
//   canvas.height = window.innerHeight;
//   init();
// })

// function Circle(x, y, dx, dy, radius){
//   this.x = x;
//   this.y = y;
//   this.dx = dx;
//   this.dy = dy;
//   this.radius = radius;
//   this.color = color[Math.floor(Math.random() * color.length)];

//   this.draw = function(){
//     c.beginPath();
//     c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
//     c.fillStyle = this.color
//     c.fill();
//     c.stroke();
//   }

//   this.update = function(){
//     this.draw();
//     if(this.x + this.radius >= canvas.width || this.x - this.radius <= 0){
//       this.dx = -this.dx;
//     }
//     if(this.y + this.radius >= canvas.height || this.y - this.radius <= 0){
//       this.dy = -this.dy;
//     }
//     this.x += this.dx;
//     this.y -= this.dy;

//     if(mouse.x - this.x < 50 && mouse.x - this.x > -50 && mouse.y - this.y < 50 && mouse.y - this.y > -50 && this.radius < maxRadius){
//       this.radius += 1;
//     }
//     else if(this.radius > minRadius){
//       this.radius -= 1;

//     }

//   }

// }

// var circleArray = [];

// function init(){
//   circleArray = [];
//   for(var i = 0; i < 200; i++){
//     var r = Math.floor(Math.random() * 3) + 1 ;
//     var x = Math.random() * (innerWidth - r*2) + r;
//     var y = Math.random() * (innerHeight - r*2) + r;
//     var dx = (Math.random() - 0.5) * 5;
//     var dy = (Math.random() - 0.5) * 5;
//     circleArray.push(new Circle(x, y, dx, dy, r));
//   }
// }

// function animate(){
//   requestAnimationFrame(animate);
//   c.clearRect(0, 0, innerWidth, innerHeight);
//   for(i = 0; i < circleArray.length ; i++){
//     circleArray[i].update();
//   }
// }

// animate();
// init();
