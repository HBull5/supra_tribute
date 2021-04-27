// Stats DOM Vars
const counters = document.querySelectorAll(".counter");
const speed = 800;
// Audio Vars
const car = document.querySelector("#car");
const audio = new Audio("../audio/turbo.mp3");
audio.volume = 0.05;

// Stats Event Listener
window.addEventListener(
    "scroll",
    () => {
        if (window.pageYOffset > 200) {
            for (const counter of counters) {
                function updateCount() {
                    const max = parseInt(counter.getAttribute("data-max"));
                    const curr = parseFloat(counter.textContent);
                    const inc = max / speed;

                    if (curr < max) {
                        counter.textContent = (curr + inc).toFixed(2);
                        setTimeout(updateCount, 1);
                    } else {
                        counter.textContent = max;
                    }
                }

                updateCount();
            }
        }
    },
    true
);

// Audio Event Listeners
car.addEventListener(
    "mouseover",
    () => {
        audio.play();
    },
    false
);

car.addEventListener(
    "mouseout",
    () => {
        audio.pause();
        audio.load();
    },
    false
);
