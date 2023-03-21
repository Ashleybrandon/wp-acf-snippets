const headerAnim = gsap.timeline({ defaults: { duration: 4, ease: "power3.inOut" }, repeat: 0 });
headerAnim
    .to("#wrap-arrow-head", {
        motionPath: {
            path: "#wrap-arrow-line",
            align: "#wrap-arrow-line",
            autoRotate: 270,
            alignOrigin: [0.5, 0.5],
        },
    })
    .from(
        "#wrap-arrow-line",
        {
            drawSVG: 10,
        },
        0
    )
    .from(
        "#masker",
        {
            duration: 2,
            drawSVG: 0,
            ease: "power4.inOut",
        },
        "-=2"
    )
    .from(
        "#steps-2",
        {
            opacity: 0,
            duration: 2,
        },
        "-=1"
    );

const newWays = gsap.timeline({ defaults: { duration: 4, ease: "power3.inOut" }, scrollTrigger: { trigger: "#new-ways" }, repeat: 0 });
newWays
    .to("#arrow", {
        motionPath: {
            path: "#motionPath",
            align: "#motionPath",
            autoRotate: 270,
            alignOrigin: [0.5, 0.5],
        },
    })
    .from(
        "#motionPath",
        {
            drawSVG: 10,
        },
        0
    )
    .from(
        "#card-1",
        {
            opacity: 0,
            duration: 2,
        },
        "-=3.3"
    )
    .from(
        ".yellow-card",
        {
            opacity: 0,
            duration: 2,
        },
        "-=3"
    )
    .from(
        ".pink-card",
        {
            opacity: 0,
            duration: 2,
        },
        "-=2.7"
    )
    .from(
        ".blue-card",
        {
            opacity: 0,
            duration: 2,
        },
        "-=2.4"
    )
    .from(
        "#contact-path",
        {
            duration: 2,
            drawSVG: 0,
            ease: "power4.inOut",
        },
        "-=1.5"
    );
