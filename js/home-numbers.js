function animateCounter(element, target, isPlusSign = true) {
  const duration = 3000; 
  const startTime = performance.now();
  const isFloat = target % 1 !== 0;

  function update(currentTime) {
    const elapsed = currentTime - startTime;
    const progress = Math.min(elapsed / duration, 1);
    const currentValue = isFloat
      ? (progress * target).toFixed(1)
      : Math.floor(progress * target);

    element.textContent = (isPlusSign ? "+" : "") + currentValue;

    if (progress < 1) {
      requestAnimationFrame(update);
    }
  }

  requestAnimationFrame(update);
}

document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".stat-box__number");

  counters.forEach(counter => {
    const target = parseFloat(counter.getAttribute("data-target"));
    const isPlus = !counter.textContent.includes("4.8"); // Only 4.8 should not have a plus
    animateCounter(counter, target, isPlus);
  });
});
