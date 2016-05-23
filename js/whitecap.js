	/*Set Top div height to percentage of window height*/
	$(function(){
		
		resizeDiv();
		});

		window.onresize = function(event) {
		resizeDiv();
		}

		function resizeDiv() {
		vpw = $(window).width();
		vph = $(window).height();
		headerHeight = vph * .8;

		if (vph > 1001) {
			$('#head').css({'height': headerHeight });
			headerPadding = vph * .1;
			$('.u-logo > img').css({'width': 450});
			$('.fan-logo > img').css({'width': 600 });
		}else if (vph <= 1000 && vph >= 601){
			$('#head').css({'height': headerHeight });
			headerPadding = vph * .05;
			$('.u-logo > img').css({'width': 350});
			$('.fan-logo > img').css({'width': 450 });
		}else if(vph <= 600){
			if (vpw >= 551) {
				$('.u-logo > img').css({'width': 350});
				$('.fan-logo > img').css({'width': 450 });
			}
			else{
				$('.u-logo > img').css({'width': '80%'});
				$('.fan-logo > img').css({'width': '80%' });
			}	
			$('#head').css({'height': 480 });
			headerPadding = vph * .05;	
		}
		$('.u-logo').css({'padding-top': headerPadding });
		$('.fan-logo').css({'padding-top': headerPadding });

		/*set video overlay height to the height of the content wrapper*/
		overlayContentHeight = $('.vid-content-wrapper').height();
		$('.vid-overlay').css({"height": overlayContentHeight + 150});
		$('.vid-overlay-container').css({"height": overlayContentHeight + 150});
	}


	$(window).scroll(function(){
	    var wScroll = $(this).scrollTop();
	    if (wScroll > $('.fan-logo').offset().top) {
	    	if (wScroll < $('.fan-logo').offset().top + (vpw * .37)) {
		    		$('.vid-overlay').css({
			        'transform' : 'translate( -'+ (wScroll + (vpw * .37) - (vpw * .37)) +'px, 0px )'
			    });
	    	}
			
		}
/*		console.log('fan logo offset from top');
		console.log($('.fan-logo').offset().top);
		console.log('W scroll distance');
		console.log(wScroll);
		console.log('viewport width * .5');
		console.log(vpw * .5);*/
	});


	/*Pause Button*/
	var vid = document.getElementById("bgvid"),
	pauseButton = document.getElementById("vidpause");
	function vidFade() {
	    vid.classList.add("stopfade");
	}
	vid.addEventListener('ended', function() {
	    // only functional if "loop" is removed 
	     vid.pause();
		// to capture IE10
		vidFade();
	});
	pauseButton.addEventListener("click", function() {
	    vid.classList.toggle("stopfade");
		if (vid.paused) {
			vid.play();
			pauseButton.innerHTML = "Pause";
		} else {
	        vid.pause();
	        pauseButton.innerHTML = "Paused";
		}
	});

	/*Annimate overlay into view*/
	function overlayAnitamion() {
		
	}

	$(function(){
		overlayAnitamion();
    	//setInterval(overlayAnitamion, 6500);
    });
