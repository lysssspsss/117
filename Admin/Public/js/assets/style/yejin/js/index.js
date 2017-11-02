/**
 * index
 */
define(function(require) {
	var $ = require('jquery');
	var base = require('base');
	var com = require('./common_pjax');
	return function() {
		com.init();
		//my js

		require('slide');
		require('img-loaded');
		$('.banner').imagesLoaded(function() {
			//alert('加载完成');

			$('.banner').slide({

				effect: 'fade',
				interval: 6e3,
				callback: function(e, l, i) {
					$(l).eq(i).find('._wz').addClass('on').end().find('.more_btn').addClass('on').end().siblings().find('.on').removeClass('on')

				}
			});
			setTimeout(function() {
				$('.banner .loading').hide();
			}, 1000)



		})

		$('.i-part2 ._left ._bd ._imgs').slide();


		require('tab');
		$('.i-part2 .map_tab').tab();
		//$('.i-part1 ._right').tab(); 

		//首页地图

		$('.map_con ._tab').each(function(index, element) {
			$(this).find('li').on('click', function() {
				var show_index = $(this).index(),
					$point_list = $(this).parents('._tab').siblings('._img').find('._point');
				$(this).addClass('cur').siblings().removeClass('cur');
				$point_list.find('.js_point').hide().eq(show_index).show();
			})

		});
		$('.map_tab .map_con ._dot').hover(function() {
			$(this).addClass('on')
		}, function() {
			$(this).removeClass('on')
		})
		var num = 100;
		$('.map_tab .map_con ._dot').each(function(index, element) {
			$(this).css('z-index', num--)
		});



		$.post("/ext/ajax_index.jsp", {
			flag: "topNews",
			cno: '511'
		}, function(data) {
			$("#topNews").html(data);
		});
		$.post("/ext/ajax_index.jsp", {
			flag: "lastNews",
			cno: '511'
		}, function(data) {
			$("#lastNews").html(data);
		});
		$.post("/ext/ajax_index.jsp", {
			flag: "gonggaoList",
			cno: '270'
		}, function(data) {
			$("#gonggaoList").html(data);
		});
		var elements_auo = "";
		var elements_cuo = "";
		var elements_zno = "";
		var auo_price = "";
		var cuo_price = "";
		var zno_price = "";
		var jinshu_str = "";

		var str_jinshu = "";
		try {
			elements_auo = hq_str_AU0.split(",");
			auo_price = elements_auo[5];
			elements_cuo = hq_str_CU0.split(",");
			cuo_price = elements_cuo[5];
			elements_zno = hq_str_ZN0.split(",");
			zno_price = elements_zno[5];
		} catch (e) {

		}

		if (auo_price != '') {
			str_jinshu = "<a href='/invest/gu-shi-xing-qing.jsp#price'><span>金 " + auo_price + "元</span></a><a href='/invest/gu-shi-xing-qing.jsp#price'><span>铜 " + cuo_price + "元</span></a><a href='/invest/gu-shi-xing-qing.jsp#price'><span>锌 " + zno_price + "元</span></a>";
			$(".jinshu").html(str_jinshu);
		}

	}



})