

// price 横スクロールで矢印消す
const priceTable = document.querySelector(".js-price__table");
console.log(priceTable)
const priceButtonNext = document.querySelector('.js-price-button-next');
console.log(priceButtonNext)

const disappearArrow = () => {
	priceButtonNext.classList.add('u-opacity0');
};
const appearArrow = () => {
	priceButtonNext.classList.remove('u-opacity0');
}

priceTable.addEventListener("scroll",()=>{
	const offsetX = priceTable.scrollLeft;
	disappearArrow()
	if(offsetX === 0){
		appearArrow();
	}
});
