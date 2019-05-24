TweenMax.to(".logo", 1, {
	width: "140",
	transform: "rotate(0deg)",
	onComplete: secondAnimation,
});

function secondAnimation() {
	TweenMax.to("input.user-input.1", 0.2, {
		display: "block",
		width: "100%",
		backgroundColor: "#ffffff",
		boxShadow: "1px 1px 5px #00000036",
		onComplete: thirdAnimation,
	});
}

function thirdAnimation() {
	TweenMax.to("input.user-input.2", 0.2, {
		display: "block",
		backgroundColor: "#ffffff",
		width: "100%",
		boxShadow: "1px 1px 5px #00000036",
		onComplete: FourthAnimation,
	});
}

function FourthAnimation() {
	TweenMax.to("input.input-4", 0.5, {
		display: "inline",
		width: "27%",
		//onComplete:FiveAnimation,
	});
	TweenMax.to(".fixed-animation-line", 0.1, {
		width: "100%",
		display: "inline",
		width: "100%",
		onComplete: lastAnimation,
	});
	TweenMax.to(".fixed-title", 0.2, {
		fontSize: "13",
		display: "flex",
		//onComplete:lastAnimation,
	});
}

function lastAnimation() {
	TweenMax.to(".fixed-animation-line", 0.1, {
		backgroundColor: "rgba(255, 255, 255, 0)",
	});
}