$(function(){
  /********************
    smart menu
  ********************/
  $('.smart_menu a').click(function(){
    $('.slide_menu').slideToggle();
    return false;
  });
  $(window).resize(function(){
    var win = $(window).width();
    var wid = 720;
    if(win > wid){
      $('.slide_menu').show();
    } else {
      $('.slide_menu').hide();
    }
  });

  /********************
    hover bottom
  ********************/
  $('.reporter_image').hover(
    function(){
      $('.reporter_desc', this).animate({
        top: "10px"
      }, 250);
    },
    function(){
      $('.reporter_desc', this).animate({
        top: "255px"
      }, 250);
    }
  );

  /********************
    slideshow
  ********************/
  var img = $('.slide_photo').children('img'),
  num = img.length, //画像の数をカウント
  count = 0, //現在の表示してる枚数目のカウント
  interval = 5000;

  img.eq(0).addClass('show'); //showクラスを付与
  setTimeout(slide, interval); //slide関数をタイマーセット

  function slide(){
    img.eq(count).removeClass('show'); //現在表示している画像からshowを削除
    count++;

    //カウンターが数よりも多ければリセット
    if(count >= num){
      count = 0;
    }
    img.eq(count).addClass('show'); //次の画像にshowクラスを付与
    setTimeout(slide, interval); //タイマーセット
  }

  /********************
    tabmenu
  ********************/
  $('.tab_menu li').click(function(){
    var num = $('.tab_menu li').index(this);
    $('.content_wrap').hide();
    $('.content_wrap').eq(num).fadeIn();
    $('.tab_menu li').removeClass('select');
    $(this).addClass('select');
  });

  /********************
    scroll_btn
  ********************/
  var top_btn = $('.backtop_btn');
  top_btn.hide(); //ボタンを非表示

  //一定数スクロールしたらフェードイン、フェードアウトする
  $(window).scroll(function(){
    if($(this).scrollTop() > 100){
      top_btn.fadeIn();
    } else {
      top_btn.fadeOut();
    }
  });

  //画像のオンオフ切り替え
  top_btn.hover(
    function(){
      $('.backtop_btn a img').attr('src', $('.backtop_btn a img').attr('src').replace('_off', '_on'));
    },
    function(){
      $('.backtop_btn a img').attr('src', $('.backtop_btn a img').attr('src').replace('_on', '_off'));
    }
  );

  //クリックしたら一番上にスクロールする
  top_btn.click(function(){
    $('body,html').animate({
      scrollTop: 0
    }, 500);
    return false;
  });

  /********************
    オーバーレイ
  ********************/
  $('.section_photo').hover(
    function(){
      $(this).find('.section_photo_info').fadeIn();
    },
    function(){
      $('.section_photo_info').fadeOut();
    }
  );
});