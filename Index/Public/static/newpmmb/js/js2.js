        var fw = $(document).width();
		if(fw<480){
			$('.focusImgs').slide({titCell:'.focus li', mainCell:'.focus_pic', trigger:'click', delayTime:100, pnLoop:false, switchLoad:'_src', endFun:function(i){
				formatImg(document.getElementById('fpic').getElementsByTagName('img').item(i), document.getElementById('fpic').offsetWidth);
			}});
			$('.focusImgs').slide({mainCell:'.focus ul', autoPage:true, prevCell:'.navPrev', nextCell:'.navNext', effect:'left', vis:3, scroll:3, delayTime:100, pnLoop:false});
		}else if(fw<600){
			$('.focusImgs').slide({titCell:'.focus li', mainCell:'.focus_pic', trigger:'click', delayTime:100, pnLoop:false, switchLoad:'_src', endFun:function(i){
				formatImg(document.getElementById('fpic').getElementsByTagName('img').item(i), document.getElementById('fpic').offsetWidth);
			}});
			$('.focusImgs').slide({mainCell:'.focus ul', autoPage:true, prevCell:'.navPrev', nextCell:'.navNext', effect:'left', vis:5, scroll:5, delayTime:100, pnLoop:false});
		}else if(fw<720){
			$('.focusImgs').slide({titCell:'.focus li', mainCell:'.focus_pic', trigger:'click', delayTime:100, pnLoop:false, switchLoad:'_src', endFun:function(i){
				formatImg(document.getElementById('fpic').getElementsByTagName('img').item(i), document.getElementById('fpic').offsetWidth);
			}});
			$('.focusImgs').slide({mainCell:'.focus ul', autoPage:true, prevCell:'.navPrev', nextCell:'.navNext', effect:'left', vis:7, scroll:7, delayTime:100, pnLoop:false});
		}else if(fw<800){
			$('.focusImgs').slide({titCell:'.focus li', mainCell:'.focus_pic', trigger:'click', delayTime:100, pnLoop:false, switchLoad:'_src', endFun:function(i){
				formatImg(document.getElementById('fpic').getElementsByTagName('img').item(i), document.getElementById('fpic').offsetWidth);
			}});
			$('.focusImgs').slide({mainCell:'.focus ul', autoPage:true, prevCell:'.navPrev', nextCell:'.navNext', effect:'left', vis:8, scroll:8, delayTime:100, pnLoop:false});
		}else if(fw<900){
			$('.focusImgs').slide({titCell:'.focus li', mainCell:'.focus_pic', trigger:'click', delayTime:100, pnLoop:false, switchLoad:'_src', endFun:function(i){
				formatImg(document.getElementById('fpic').getElementsByTagName('img').item(i), document.getElementById('fpic').offsetWidth);
			}});
			$('.focusImgs').slide({mainCell:'.focus ul', autoPage:true, prevCell:'.navPrev', nextCell:'.navNext', effect:'left', vis:9, scroll:9, delayTime:100, pnLoop:false});
		}else{
			$('.focusImgs').slide({titCell:'.focus li', mainCell:'.focus_pic', trigger:'click', delayTime:100, pnLoop:false, switchLoad:'_src', endFun:function(i){
				if(!browser.versions.ie6){
					formatImg(document.getElementById('fpic').getElementsByTagName('img').item(i), document.getElementById('fpic').offsetWidth);
				}else{
					setTimeout(_show(i, document.getElementById('fpic').getElementsByTagName('img').item(i).src), 100);
				}
			}});
			$('.focusImgs').slide({mainCell:'.focus ul', autoPage:true, prevCell:'.navPrev', nextCell:'.navNext', effect:'left', vis:10, scroll:10, delayTime:100, pnLoop:false});
		}
		