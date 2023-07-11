window.sr = ScrollReveal({
    viewFactor : 0.15,
    duration   : 1000,
    distance   : "5px",
    scale      : 0.8
});

sr.reveal(".reveal", {
    origin: "top",
    duration: 1000,
    delay: 0,
    distance: "20px",
    mobile: true,
    reset: true,
    useDelay: "always",
    viewFactor: 0.2,
    viewOffset: {
        top: 0,
        right: 0,
        bottom: 0,
        left: 0
    }
}, 250);