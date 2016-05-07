var cloudTranslate = $(window).width() - $('.env-cloud').width() - 100;
var balTranslate = $(window).width() - $('.env-balloon-inner').width();

$('.env-cloud').velocity(
  {
    translateX: cloudTranslate + "px"
  },
  {
    duration: 40000,
    loop: true
  },
  {
    easing: "linear"
  }
);

$('.env-cloud-2').velocity(
  {
    translateX: cloudTranslate + "px"
  },
  {
    duration: 56000,
    loop: true
  },
  {
    easing: "linear"
  }
);

$('.env-cloud-1').velocity(
  {
    translateX: -cloudTranslate + "px"
  },
  {
    duration: 65000,
    loop: true
  },
  {
    easing: "linear"
  }
);

$('.env-balloon').velocity(
  {
    left: balTranslate + "px"
  },
  {
    duration: 50000,
    loop: true
  },
  {
    easing: "linear"
  }
);

$('.env-balloon-inner').velocity(
  {
    translateY: "100px"
  },
  {
    duration: 10000,
    loop: true
  },
  {
    easing: "linear"
  }
);
