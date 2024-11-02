window.addEventListener('resize', () => {
    const orientation = window.innerHeight > window.innerWidth ? "Portrait" : "Landscape";
    console.log(`Current Orientation: ${orientation}`);
});
