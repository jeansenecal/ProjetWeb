//var interval;
//var minutes = 0;
//var seconds = 10;

function countdown(element, countDownDate) {
	// Fetch the display element
	var el = document.getElementById(element);

	// Set the timer
	var interval = setInterval(function() {

	// Get todays date and time
	var now = new Date().getTime();

	// Find the distance between now an the count down date
	var distance = countDownDate - now;

	// Time calculations for days, hours, minutes and seconds
	var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

	if(days > 0){
		// Display the result in the element with id="demo"
		el.innerHTML = days + "d " + hours + "h ";
	}
	else{
		if(hours > 0){
			// Display the result in the element with id="demo"
			el.innerHTML = hours + "h " + minutes + "m ";
		}
		else{
			// Display the result in the element with id="demo"
			el.innerHTML = minutes + "m ";
		}

	}


	// If the count down is finished, write some text
	if (distance < 0) {
		clearInterval(interval);
		el.innerHTML = "Live";
		}
	}, 1000);
}
//var start1 = document.getElementById('timer1');
//var start2 = document.getElementById('timer2');


var countDownDate1 = new Date("Jan 8, 2018 11:19:00").getTime();
var countDownDate2 = new Date("Jan 8, 2018 22:37:25").getTime();
var countDownDate3 = new Date("Jan 9, 2018 10:37:25").getTime();
var countDownDate4 = new Date("Jan 10, 2018 11:37:25").getTime();
countdown('timer1', countDownDate1);
countdown('timer2', countDownDate2);
countdown('timer3', countDownDate3);
countdown('timer4', countDownDate4);