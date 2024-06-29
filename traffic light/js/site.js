var gi,
	yi,
	seq = [],
	timer,
	sec = 0,
	cl = 0;

$(document).ready(docReady)

$(window).on('resize', onResize)
//$(window).on('load', onLoad);



function docReady() {


	//console.log('DOCUMENT READY');
}

function onLoad() {

	//console.log('DOCUMENT LOADED');
}

function onResize() {

	//console.log('DOCUMENT RESIZED');
}

function start() {
	$('#tlseq input').each(function (i) {
		if (this.value < 1 || this.value > 4) {
			alert('Input seq value can not be lower then 1 and higher then 4');
		}
		seq[this.value - 1] = this.name;
	});

	gi = parseInt($('#green').val());
	yi = parseInt($('#yellow').val());

	if (gi < 1) {
		alert('Green light interval can not be less then 1');
	}

	if (yi < 1) {
		alert('Yellow light interval can not be less then 1');
	}

	if (yi > gi) {
		alert('Yellow light interval can not be higher then Green light interval');
	}

	$('.lights').css('background-color', 'red');
	$('#' + seq[cl]).css('background-color', 'green');

	timer = setInterval(lightSeq, 1000);

	//console.log('START');
}

function lightSeq() {
	sec += 1;

	if (sec == gi) {
		$('#' + seq[cl]).css('background-color', 'yellow');

	}

	if (sec == (gi + yi)) {
		sec = 0;
		cl += 1;

		$('.lights').css('background-color', 'red');
		$('#' + seq[cl]).css('background-color', 'green');

	}
	console.log(sec, gi, yi, gi+yi);
	
}

function stop() {
	seq = [];
	sec = 0;
	cl = 0;

	$('.lights').css('background-color', 'green');

	clearInterval(timer);

	//console.log('STOP');
}
