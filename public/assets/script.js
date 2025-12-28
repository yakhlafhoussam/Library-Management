let pageselect = document.querySelector("#page").dataset.name;
let user;
let email;
let msg;

if (pageselect == "/signup") {
    console.log(pageselect);
    if (document.querySelector('#error').innerHTML != '') {
        if (document.querySelector('#error').innerHTML != 'Good') {
            gsap.to(document.querySelector("#toast0"), {
                x: 330,
                duration: 0.25,
                onComplete: () => {
                    gsap.to(document.querySelector("#toast0"), {
                        delay: 2,
                        duration: 2,
                        opacity: 0,
                        onComplete: () => {
                            gsap.to(document.querySelector("#toast0"), {
                                duration: 0,
                                x: -330,
                                opacity: 1,
                            });
                        }
                    });
                }
            });
        } else {
            gsap.to(document.querySelector("#toast"), {
                x: 330,
                duration: 0.25,
                onComplete: () => {
                    gsap.to(document.querySelector("#toast"), {
                        delay: 2,
                        duration: 2,
                        opacity: 0,
                        onComplete: () => {
                            gsap.to(document.querySelector("#toast"), {
                                duration: 0,
                                x: -330,
                                opacity: 1,
                            });
                        }
                    });
                }
            });
            document.querySelector("#send").style.display = "none";
            let input = document.querySelectorAll(".trunoff");
            input = Array.from(input);
            for (let index = 0; index < input.length; index++) {
                input[index].disabled = "true";
            }
            setTimeout(() => {
                document.querySelector("#tologin").click();
            }, 3000);
        }
    }
} else if (pageselect == "/login") {
    console.log(pageselect);
    if (document.querySelector('#error').innerHTML != '') {
        gsap.to(document.querySelector("#toast0"), {
            x: 330,
            duration: 0.25,
            onComplete: () => {
                gsap.to(document.querySelector("#toast0"), {
                    delay: 2,
                    duration: 2,
                    opacity: 0,
                    onComplete: () => {
                        gsap.to(document.querySelector("#toast0"), {
                            duration: 0,
                            x: -330,
                            opacity: 1,
                        });
                    }
                });
            }
        });
    }
} else if (pageselect == "/newbook") {
    console.log(pageselect);
    if (document.querySelector('#error').innerHTML != '') {
        if (document.querySelector('#error').innerHTML != 'Good') {
            gsap.to(document.querySelector("#toast0"), {
                x: 330,
                duration: 0.25,
                onComplete: () => {
                    gsap.to(document.querySelector("#toast0"), {
                        delay: 2,
                        duration: 2,
                        opacity: 0,
                        onComplete: () => {
                            gsap.to(document.querySelector("#toast0"), {
                                duration: 0,
                                x: -330,
                                opacity: 1,
                            });
                        }
                    });
                }
            });
        } else {
            gsap.to(document.querySelector("#toast"), {
                x: 350,
                duration: 0.25,
                onComplete: () => {
                    gsap.to(document.querySelector("#toast"), {
                        delay: 2,
                        duration: 2,
                        opacity: 0,
                        onComplete: () => {
                            gsap.to(document.querySelector("#toast"), {
                                duration: 0,
                                x: -330,
                                opacity: 1,
                            });
                        }
                    });
                }
            });
            document.querySelector("#send").style.display = "none";
            let input = document.querySelectorAll(".trunoff");
            input = Array.from(input);
            for (let index = 0; index < input.length; index++) {
                input[index].disabled = "true";
            }
            setTimeout(() => {
                document.querySelector("#home").click();
            }, 3000);
        }
    }
} else if (pageselect == "/explore") {
    console.log(pageselect);
    if (document.querySelector('#error').innerHTML != '') {
        gsap.to(document.querySelector("#toast0"), {
            x: 330,
            duration: 0.25,
            onComplete: () => {
                gsap.to(document.querySelector("#toast0"), {
                    delay: 2,
                    duration: 2,
                    opacity: 0,
                    onComplete: () => {
                        gsap.to(document.querySelector("#toast0"), {
                            duration: 0,
                            x: -330,
                            opacity: 1,
                        });
                    }
                });
            }
        });
    }
}