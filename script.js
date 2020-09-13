$(function () {

  // #で始まるアンカーをクリックした場合に処理
  $('header a[href^=#]').click(function(){
    // 移動先を50px上にずらす
    var adjust = 50;
    // スクロールの速度
    var speed = 400; // ミリ秒
    // アンカーの値取得
    var href= $(this).attr("href");
    // 移動先を取得
    var target = $(href == "#" || href == "" ? 'html' : href);
    // 移動先を調整
    var position = target.offset().top - adjust;
    // スムーススクロール
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });

  //上スクロールでheaderが消える//
  //下スクロールでheaderが出てくる//
  var headerHeight = $('header').outerHeight(),
		startPos = 0;
	$(window).on('load scroll', function() {
		var scrollPos = $(this).scrollTop();
		if ( scrollPos > startPos && scrollPos > headerHeight ) {
			$('header').css('top', '-' + headerHeight + 'px');
		} else {
			$('header').css('top', '0');
		}
		startPos = scrollPos;
	});

});
