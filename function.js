if ($(window).width() <= 1024) {
  $("#fullpage").removeAttr("id");
} else {
  $("#fullpage").fullpage({
    sectionSelector: ".vertical-scrolling",
    //navigation: true,
    //slidesNavigation: true,
    //controlArrows: false,
    anchors: [
      "firstSection",
      "secondSection",
      "thirdSection",
      "fourthSection",
      "fifthSection",
    ],
    menu: "#menu",

    afterLoad: function (anchorLink, index) {
      if (index == 5) {
        $("#fp-nav").hide();
      }
    },

    onLeave: function (index, nextIndex, direction) {
      if (index == 5) {
        $("#fp-nav").show();
      }
    },
  });
}
var box = document.getElementById("boxSection");
var box1 = document.getElementById("boxSection1");
var box2 = document.getElementById("boxSection2");
$("button").on("click", function () {
  if (!jQuery(this).hasClass("activated")) {
    $("button").removeClass("activated");
    jQuery(this).addClass("activated");
  } else {
    $("button").removeClass("activated");
  }

  if ($("#btnCaret").hasClass("activated")) {
    $("#caret").show(500);
    box.classList.add("activated");
  } else {
    $("#caret").hide(500);
    box.classList.remove("activated");
  }

  if ($("#btnCaret1").hasClass("activated")) {
    $("#caret1").show(500);
    box1.classList.add("activated");
  } else {
    $("#caret1").hide(500);
    box1.classList.remove("activated");
  }

  if ($("#btnCaret2").hasClass("activated")) {
    $("#caret2").show(500);
    box2.classList.add("activated");
  } else {
    $("#caret2").hide(500);
    box2.classList.remove("activated");
  }
});

if ($(window).width() <= 1024) {
  a = document.getElementById("logoPage");
  a.setAttribute("href", "#");
} else {
  a = document.getElementById("logoPage");
  a.setAttribute("href", "#firstSection");
}
