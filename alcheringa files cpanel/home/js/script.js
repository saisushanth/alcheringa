var windowHeight,
	windowWidth;

var isLandingTransition = false,
	transitionObject = null,
	currentTransitionTime = null,
	transitionDomObjects = Array();

function getRandom(start, end) {
	var range = end - start + 1;
	return ((Math.random() * range) + start);
}

function stopAnimation(type) {
	transitionDomObjects.before_trans.css({
		opacity: 0,
		top: 0
	});
	transitionDomObjects.after_trans.css({
		opacity: 0,
		top: 0
	});
	transitionDomObjects.after.css({
		opacity: (type ? 1 : 0)
	});
	isLandingTransition = false;
}

function landingAnimation(type) {
	currentTransitionTime += (type ? 1 : -1);
	if(currentTransitionTime == 10 || currentTransitionTime == -1) {
		stopAnimation(type);
	} else {
		var alpha = currentTransitionTime/10;
		var u = alpha + (getRandom(-10, 10)/100);
		var r = 0.1 + u * 0.9;
		var v = 0.9 - u * 0.9;
		var t = (alpha < 0.5) ? 0.15 + alpha + (getRandom(-10, 10)/100) : 1.15 - alpha;
		var s = type ? Math.pow(alpha, 5) : Math.pow(alpha, 2);
		
		transitionDomObjects.before_trans.css({
			opacity: (type ? v : r * 0.8),
			top: (getRandom(0, 5) > 3 ? getRandom(-3,0) * 5 : 0)
		});
        transitionDomObjects.after_trans.css({
        	opacity: (type ? r : v * 0.8),
        	top: (getRandom(0, 5) > 3 ? getRandom(-3,0) * 5 : 0)
        });
        transitionDomObjects.after.css({opacity: s});

        transitionObject = setTimeout(function() {landingAnimation(type);}, 30);
	}
}

function overLanding() {
	if(isLandingTransition) { // already in transisition, close the previous Transition
		stopAnimation(true);
		clearTimeout(transitionObject);
	}
	/* This is when the transition starts */
	isLandingTransition = true;

	currentTransitionTime = 0;
	transitionObject = setTimeout(function() {landingAnimation(true);}, 0);
}

function outLanding() {
	if(isLandingTransition) { // already in transisition, close the previous Transition
		stopAnimation(false);
		clearTimeout(transitionObject);
	}
	/* This is when the transition starts */
	isLandingTransition = true;

	currentTransitionTime = 10;
	transitionObject = setTimeout(function() {landingAnimation(false);}, 0);
}

function setLandingPositionAndSizes() {
	height = Math.max(windowHeight, 656);
	width = Math.max(windowWidth, 1366);

	/* Set the sizes of landing background to the size of body */
	$('.landing_back').css({
		'height': height+'px',
		'width' : width+'px',
		'background-size': width+'px '+height+'px'
	});

	/* Set the position of the landing button */
	$('#landing_button').css({
		'top': (height/2 - 15)+'px',
		'left': (width/2 - 100)+'px'
	});
	/* Set transition objects */
	transitionDomObjects.before = $('#landing_before');
	transitionDomObjects.before_trans = $('#landing_before_transition');
	transitionDomObjects.after = $('#landing_after');
	transitionDomObjects.after_trans = $('#landing_after_transition');

	/* Set event on hovering and out */
	$('#landing_button').hover(function (){
		overLanding();
	}, function() {
		outLanding();
	});
}

$(document).ready(function () {
	/* Viewport height and width */
	windowWidth = $(window).width();
	windowHeight = $(window).height();

	/* Set landing positions and sizes */
	setLandingPositionAndSizes();
});