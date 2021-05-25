$(document).ready(function () {
  /************** index page **********/
  /*navbar next section */

    let hightNavbar = $(".navbar").innerHeight();
    $(".navbar").next().css({
        paddingTop: hightNavbar + "px",
      });
    $(window).resize(function () {
      let hightNavbar = $(".navbar").innerHeight();
      $(".navbar").next().css({
          paddingTop: hightNavbar + "px",
        });
    });


  /*navbar background color */
  if ($("title").text() == "index") {
    let myWindowScroll = $(window).scrollTop();
    if (myWindowScroll >= 200) {
      $(".navbar").css("background-color", "#07294d");
    } else {
      $(".navbar").css("background-color", "#24202031");
    }
    $(window).scroll(function () {
      myWindowScroll = $(window).scrollTop();
      if (myWindowScroll >= 200) {
        $(".navbar").css("background-color", "#07294d");
      } else {
        $(".navbar").css("background-color", "#24202031");
      }
    });
  }
  /*footer section */
  if ($("title").text() == "index") {
    $(".overly-image-footer ,.overly-footer ").css({
      height: "70%",
    });
    $(".section-footer").css({
      marginTop: "150px",
    });
  }

  /*section slider majors page*/
  $(".container-slider-majors").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    rtl: true,
    nextArrow: $(".section-major i.next"),
    prevArrow: $(".section-major i.prev"),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
  /*section company slider page index*/
  $(".container-slider-company").slick({
    centerMode: true,
    autoplay: true,
    centerPadding: "0px",
    slidesToShow: 3,
    rtl: true,
    nextArrow: $(".section-company .next"),
    prevArrow: $(".section-company .prev"),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  /************** login page **********/
  if ($("title").text() !== "index") {
    let navbarHeight = $(".navbar").innerHeight();
    $(".navbar")
      .next()
      .css({
        paddingTop: navbarHeight + "px",
      });
  }

  /**************** majors ******/
  $(".page-majors .title-college h4").on("click", function () {
    $(this).parent().siblings().slideToggle(400);
    $(this).find("i").toggleClass("toggleCl");
    if ($(this).find("i").hasClass("toggleCl")) {
      $(this).find("i").removeClass("fa fa-minus");
      $(this).find("i").addClass("fa fa-chevron-down");
    } else {
      $(this).find("i").removeClass("fa fa-chevron-down");
      $(this).find("i").addClass("fa fa-minus");
    }
  });

  $(".page-majors .hideOrShowAll-majors select ").change(function () {
    if ($(this).find("option:selected").hasClass("showAll-majors")) {
      $(".page-majors .allMajors").slideDown(400);
      $(".page-majors .title-college h4 i").addClass("toggleCl");
    } else {
      $(".page-majors .allMajors").slideUp(400);
      $(".page-majors .title-college h4 i").removeClass("toggleCl");
    }
    if ($(".page-majors .title-college h4 i").hasClass("toggleCl")) {
      $(".page-majors .title-college h4 i").removeClass("fa fa-minus");
      $(".page-majors .title-college h4 i").addClass("fa fa-chevron-down");
    } else {
      $(".page-majors .title-college h4 i").removeClass("fa fa-chevron-down");
      $(".page-majors .title-college h4 i").addClass("fa fa-minus");
    }
  });

  /******* page profile******/

  $(".section-type-info .select-show-info").on("click", function () {
    let data_info_profile = $(this).data("info-profil");
    $(this).addClass("activity");
    $(this).siblings().removeClass("activity");

    $(".description-info" + " ." + data_info_profile).fadeIn( 50,function () {
      $(".description-info" + " ." + data_info_profile)
        .siblings().fadeOut(50);
    });
  });
//all training
  $(".page-profile-company .training .description-training .title-desc-training h6").on("click", function () {
    $(this).parent().parent().siblings().slideToggle(400);
    $(this).find("i").toggleClass("toggleCl");
    if ($(this).find("i").hasClass("toggleCl")) {
      $(this).find("i").removeClass("fa fa-minus");
      $(this).find("i").addClass("fa fa-chevron-down");
    } else {
      $(this).find("i").removeClass("fa fa-chevron-down");
      $(this).find("i").addClass("fa fa-minus");
    }
  });

  $(".page-profile-company .my-training .header-my-training .form-check").change(function () {
    if ($(this).find("input:checked").hasClass("showAll-training")) {
      $(".page-profile-company .all-training .my-training .training .all-training-profile").slideDown(400);
      $(".page-profile-company .training .description-training .title-desc-training h6 i").addClass("toggleCl");
    } else {
      $(".page-profile-company .all-training .my-training .training .all-training-profile").slideUp(400);
      $(".page-profile-company .training .description-training .title-desc-training h6 i").removeClass("toggleCl");
    }
    if ( $(".page-profile-company .training .description-training .title-desc-training h6 i").hasClass("toggleCl")) {
      $(".page-profile-company .training .description-training .title-desc-training h6 i").removeClass("fa fa-minus");
      $(".page-profile-company .training .description-training .title-desc-training h6 i").addClass("fa fa-chevron-down");
    } else {
      $(".page-profile-company .training .description-training .title-desc-training h6 i").removeClass("fa fa-chevron-down");
      $(".page-profile-company .training .description-training .title-desc-training h6 i").addClass("fa fa-minus");
    }

  });

  //select option edit-delete-show training
  $(".page-profile-company .description-info .all-training  .title-options .show-options").on("click" , function(){
    $(this).next("ul").slideToggle(200);
  })


  //all requeste
  $(".page-profile-company .all-request-post .all-request .request-training .title-training-request h6").on("click", function () {
    $(this).parent().siblings().slideToggle(400);
    $(this).find("i").toggleClass("toggleCl");
    if ($(this).find("i").hasClass("toggleCl")) {
      $(this).find("i").removeClass("fa fa-minus");
      $(this).find("i").addClass("fa fa-chevron-down");
    } else {
      $(this).find("i").removeClass("fa fa-chevron-down");
      $(this).find("i").addClass("fa fa-minus");
    }
  });

  $(".page-profile-company .all-request-post .header-request .form-check").change(function () {
    if ($(this).find("input:checked").hasClass("showAll-requests")) {
      $(".page-profile-company .all-request-post .all-request .requests-students").slideDown(400);
      $(".page-profile-company .all-request-post .all-request .request-training .title-training-request h6 i").addClass("toggleCl");
    } else {
      $(".page-profile-company .all-request-post .all-request .requests-students").slideUp(400);
      $(".page-profile-company .all-request-post .all-request .request-training .title-training-request h6 i").removeClass("toggleCl");
    }
    if ( $(".page-profile-company .all-request-post .all-request .request-training .title-training-request h6 i").hasClass("toggleCl")) {
      $(".page-profile-company .all-request-post .all-request .request-training .title-training-request h6 i").removeClass("fa fa-minus");
      $(".page-profile-company .all-request-post .all-request .request-training .title-training-request h6 i").addClass("fa fa-chevron-down");
    } else {
      $(".page-profile-company .all-request-post .all-request .request-training .title-training-request h6 i").removeClass("fa fa-chevron-down");
      $(".page-profile-company .all-request-post .all-request .request-training .title-training-request h6 i").addClass("fa fa-minus");
    }

  });

  /****** page description training********/
  $(".right-post .section-right-desc-post .open-request").on("click" , function(){
    console.log("ss");
    $(".right-post .send-request").slideDown(200);
  });


  /****** page show Training********/
  $('.page-findTraining .title-filter').on('click' , function(){
    $(this).next().slideToggle(300);
    if($(this).find("i").hasClass('icon-show-filter')){
      $(this).find('i').toggleClass('icon-show-filter');
      $(this).find('i').toggleClass('fa-chevron-down');
      $(this).find('i').toggleClass('fa-chevron-up');

    }else{
      $(this).find('i').toggleClass('icon-show-filter');
      $(this).find('i').toggleClass('fa-chevron-down');
      $(this).find('i').toggleClass('fa-chevron-up');
    }

  });

  $('.section-filter .toggle-show-more-filter').on('click' , function(){
    if($(this).find('div').hasClass("check-toggle")){
      $(this).find('div').toggleClass('check-toggle');
      $('.section-filter .filter-mask').toggleClass('mask');
    }else{

    }

  })

  $('.btn-login-student').on('click' , function(){
    console.log('student');
    $('.login-company').hide();
    $('.login-student').show();
  });
  $('.btn-login-company').on('click' , function(){
    console.log('company');
    $('.login-company').show();
    $('.login-student').hide();
  });

});

