const car = document.querySelector('#car');
const audio = new Audio('../audio/turbo.mp3');
audio.volume = 0.05;

car.addEventListener(
	'mouseover',
	() => {
		audio.play();
	},
	false
);

car.addEventListener(
	'mouseout',
	() => {
		audio.pause();
		audio.load();
	},
	false
);
