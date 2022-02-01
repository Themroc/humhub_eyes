humhub.module('eyes', function(module, require, $) {
	var init= function () {
		console.log('eyes module activated');
		document.addEventListener("mousemove", (e) => {
			const eyes= document.querySelectorAll(".eye");
			[].forEach.call(eyes, function (eye) {
				let ox= eye.getBoundingClientRect().left + 15;
				let oy= eye.getBoundingClientRect().top + 15;
				let rad= Math.atan2(e.pageX - ox, e.pageY - oy);
				let rot= rad * (180 / Math.PI) * -1 + 180;
				eye.style.transform = `rotate(${rot}deg)`;
			});
		});
	};

	module.export({
		init: init,
	});
});
