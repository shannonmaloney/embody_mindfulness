// Original code found online as a tutorial on HTML5 spray painting. Online page is not available anymore
// Modified version by Enrico Glerean 2013

/* ------------------
| START / STOP / SETUP
------------------ */

function spraycan() {
	
	
	/* ------------------
	| PREP
	------------------ */
	
	var ac = arguments.callee;
	ac.stopped = false;
	ac.movingCP = false;
	var colours = ['ff0000', 'ffff80', '80ff80', '00ff80', '80ffff', '0080ff', 'ff80c0', 'ff80ff', 'ff0000', 'ffff00', '80ff00', '00ff40', '00ffff', '8080c0', 'ff00ff', '804040', 'ff8040', '00ff00', '008080', '004080', '8080ff', '800040', 'ff0080', '800000', 'ff8000', '008000', '008040', '0000ff', '0000a0', '000040', '400040', '400080', '000000', '808000', '808040', '808080', '408080', 'c0c0c0', 'ffffff'];
	ac.currColour = colours[0];
	var ie = navigator.appVersion.match('MSIE');
	
	
	/* ------------------
	| TOOLS HOLDER
	------------------ */
	var tools = document.createElement('div');
	with($(tools)) {
		hide();
		css({
			border: 'solid 6px #aaa',
			borderRadius: 10,
			MozBorderRadius: 10,
			webkitBorderRadius: 10,
			background: '#eee',
			position: 'absolute',
			left: -200,
			top: -200,
			zIndex: 100000,
			padding: '8px 8px 14px 8px',
			fontFamily: 'Trebuchet MS',
			fontSize: 13,
			width: '0px',
			height: '0px'
			
		});
		if (ie) css('width', '125px');
		html("<strong>Colour</strong>");
		mousedown(function() {
			ac.movingCP = true;
			$(document).bind('mousemove', moveCP);
		});
		mouseup(function() {
			ac.movingCP = false;
			$(document).unbind('mousemove', moveCP);
		});
		addEventListener('touchstart', function(e){ 
			ac.movingCP = false;
		});
		addEventListener('touchend', function(e){
			ac.movingCP = true;
		});
	}
	
	/* ------------------
	| COLOUR PICKER
	------------------ */
	/* Original code not included in this application // Enrico removed
	var cp = document.createElement('table');
	with($(cp)) {
		attr('id', 'colourPicker');
		css('marginTop', 4);
		var cphtml = '';
		for(var u in colours) {
			if (!(u % 4) && u != 0) cphtml += '</tr>';
			if (!(u % 4)) cphtml += '<tr>';
			cphtml += "<td style='width: 20px; height: 20px; background: #"+colours[u]+"' id='"+colours[u]+"'></td>";
		}
		cphtml += '</tr>';
		html(cphtml);
	}
	
	$(cp).find('td').click(function(e) {
		e.stopPropagation();
		if (this.id.length == 6) //computed hex
			ac.currColour = $(this).attr('id');
		else { //computed RGB - convert
			var splitter = $(this).attr('id').split(',');
			for(var o in splitter) splitter[o] = rgbToHex(splitter[o]);
			ac.currColour = splitter.join();
		}
	});
	$(cp).find('td').css({cursor: 'pointer'});
	$(tools).append(cp);
	
        */

	/* ------------------
	| BRUSH SIZE
	------------------ */

	var br = document.createElement('br');
	var strong = document.createElement('strong');
	strong.appendChild(document.createTextNode('Brush size'));
	$(tools).append(br, strong);
	var slider = document.createElement('div');
	$(slider).css({width: '100%', height: 2, background: '#aaa', marginTop: 8, position: 'relative'});
	ac.bar = $(document.createElement('div'));
	with($(ac.bar)) {
		css({
			height: 11,
			width: 4,
			left: 25,
			cursor: 'pointer',
			top: -6,
			position: 'absolute',
			background: '#fff',
			border: 'solid 1px #aaa'
		});
		mousedown(function(e) {
			$(document).bind('mousemove', positionSlider);
		});
		mouseup(function(e) {
			positionSlider(e);
			$(document).unbind('mousemove', positionSlider);
		});
	}
	positionSlider = function(e) {
		if (parseInt($(ac.bar).css('left')) < 0)
			$(ac.bar).css('left', 0);
		else if (parseInt($(ac.bar).css('left')) > $(slider).width() - $(ac.bar).width())
			$(ac.bar).css('left', $(slider).width() - $(ac.bar).width());
		else
			$(ac.bar).css('left', e.pageX - $(slider).offset().left);
	}
	$(slider).append(ac.bar);
	$(tools).append(slider);
	
        
	/* ------------------
	| APPEND TOOLS
	------------------ */
	
	$(document.body).append(tools);
	$(tools).fadeIn('slow');
	
	
	/* ------------------
	| CLOSE/CLEAN BUTTONS
	------------------ */
	
	var buts = ['close', 'clean'];
	for(var g in buts) {
		var but = document.createElement('button');
		with($(but)) {
			css({
				zIndex: 100000,
				color: '#888',
				border: 'solid 6px #bbb',
				cursor: 'pointer',
				borderRadius: 10,
				MozBorderRadius: 10,
				webkitBorderRadius: 10,
				padding: 6,
				position: 'absolute',
				right: (70 * g) + 20,
				top: -200
			});
			addClass('spraycanBut');
			mouseover(function() { $(this).css('textDecoration', 'underline'); });
			mouseout(function() { $(this).css('textDecoration', 'none'); });
			text(buts[g]);
			click(buts[g] == 'close' ? function() { ac.stop(); } : function() { $('.spraycan').remove(); });
			hide();
		}
		$(document.body).append(but);
		$(but).fadeIn('slow');
	}
	
	
	/* ------------------
	| START EVENTS
	------------------ */
	
	$("#pbox").mousedown(function(e) {
		strokelength.push(0);
		if (!ac.stopped) { draw(e); $("#pbox").bind('mousemove', draw); }
		arrMD.push(e.timeStamp);
	});
	$("#pbox").mouseup(function(e) {
		if (!ac.stopped) $("#pbox").bind('mousemove', draw); $("#pbox").unbind('mousemove', draw);
		arrMU.push(e.timeStamp);
	});
	var pbox = document.getElementById("pbox");
	pbox.addEventListener('touchstart', function(e){
	    e.preventDefault();
	    strokelength.push(0);
	    if (!ac.stopped) { draw(e); $("#pbox").bind('touchmove', draw); }
	        arrMD.push(e.timeStamp);
    });
    pbox.addEventListener('touchend', function(e){
	    e.preventDefault();
	    if (!ac.stopped) $("#pbox").bind('touchmove', draw); $("#pbox").unbind('touchmove', draw);
	        arrMU.push(e.timeStamp);
    });
	
	
	/* ------------------
	| STOP EVENTS - IE won't let me remove everything in one chain via add() etc
	------------------ */
	
	ac.stop = function() {
		ac.stopped = true;
		$(tools).remove();
		$('.spraycanBut, .spraycan').remove();
	};
	
}


/* ------------------
| MOVE TOOLS
------------------ */

function moveCP(e) {
	spraycan.movingCP = true;
	var cp = $('#colourPicker');
	cp.css('left', e.pageX);
	cp.css('top', e.pageY); 
}


/* ------------------
| UTILITY - REG>hex conversion for FF, which returns computed colours as RGB not hex
------------------ */

function rgbToHex(hex) {
	if (hex == null) return '00';
	hex = parseInt(hex);
	if (hex == 0 || isNaN(hex)) return '00';
	hex = Math.max(0,hex); hex = Math.min(hex,255); hex=Math.round(hex);
	return '0123456789ABCDEF'.charAt((hex-hex%16)/16)
	  + '0123456789ABCDEF'.charAt(hex%16);
}


/* ------------------
| DRAW FUNC
------------------ */

function draw(e){
	if (spraycan.movingCP) return;
	var groupHolder = document.createElement('div');
	var divIdName = 'brushstroke'+currentstroke+'Div';
	currentstroke = currentstroke + 1;
	strokelength[strokelength.length - 1] = strokelength[strokelength.length - 1] + 1;
	if (e.type == "touchmove") {
		var xd=e.originalEvent.touches[0].pageX -xp;
		var yd=e.originalEvent.touches[0].pageY -yp; 		
	} else if (e.type == "touchstart"){
		var xd=e.touches[0].pageX -xp;
		var yd=e.touches[0].pageY -yp;
	} else {
		var xd = e.pageX - xp;
		var yd = e.pageY - yp;	
	}
	arrXD.push(xd);
    arrYD.push(yd);
    arrTimeD.push(e.timeStamp);
	for(var j=0; j<1; j++) {
		var div = document.createElement('div');
		var brushDiam = Math.round((parseInt(spraycan.bar.css('left')) / spraycan.bar.parent().width()) * 100);
		brushDiam=10;
		
		with($(div)) {
			css({
				position: 'absolute',
				zIndex: 99999,
				borderRadius: brushDiam,
				MozBorderRadius: brushDiam,
				webkitBorderRadius: brushDiam,
				border: 'solid 1px #'+spraycan.currColour,
				background: '#'+spraycan.currColour,
				width: brushDiam + ((j * 5) * 2),
				height: brushDiam + ((j * 5) * 2),
				left: (xd - (brushDiam / 2)) - (j * 5),
				top: (yd - (brushDiam / 2)) - (j * 5),
				//opacity: 1 - (j * .3),
				opacity: .2,
				//filter: 'alpha(opacity='+(100 - (j * 20))+')'
				filter: 'alpha(opacity='+(20)+')'
			});
			addClass('spraycan');
			
		}
		div.setAttribute('id', divIdName);
		$(groupHolder).append(div);
	}
	$("#pbox").append(groupHolder);
	
}

//Global variables which store the length of each stroke, for undoing purposes
var strokelength = [];
var currentstroke = 0;

/* ------------------
| UNDO FUNC
------------------ */

function undo(e){
    for(var i=1; i <= strokelength[strokelength.length - 1]; i++){
        var stroke = document.getElementById('brushstroke'+(currentstroke - i)+'Div')
        stroke.parentNode.removeChild(stroke);
        arrYD.pop();
        arrXD.pop();
        arrTimeD.pop();
    }  
    currentstroke = currentstroke - strokelength[strokelength.length - 1];
    if (strokelength.length > 1) strokelength.pop();
}