
window.addEventListener('DOMContentLoaded', function() {
	'use strict';

	let calcDate = document.getElementById('date'),

		couponDate = document.querySelectorAll('.coupon-date'),
		couponAmount = document.querySelectorAll('.coupon-amount'),

		quantity = document.querySelectorAll('.quantity'),
		faceValue = document.querySelectorAll('.face-value'),
		coupon = document.querySelectorAll('.coupon'),
		couponPeriod = document.getElementById('coupon-period'),
		maturityDate = document.querySelectorAll('.maturity-date'),
		latestCouponDate = document.getElementById('latest-coupon-date'),
		nearestCouponDate = document.getElementById('nearest-coupon-date'),

		test = document.getElementById('test');

		const months = [
			"января", 
			"февраля", 
			"марта", 
			"апреля", 
			"мая", 
			"июня", 
			"июня", 
			"августа", 
			"сентября", 
			"октября", 
			"ноября", 
			"декабря"
		]; 
	//Рассчитываем дату ближайшего платежа
	let msec = Date.parse(latestCouponDate.innerHTML);
	let newMsec = msec + (couponPeriod.innerHTML * 24 * 60 * 60 * 1000);
	const newDate = new Date(newMsec);
	console.log(`данные из БД: ${newDate}`);

	let dateFormat = `${newDate.getDate()} ${months[newDate.getMonth()]} ${newDate.getFullYear()}`;
	nearestCouponDate.textContent = dateFormat;

	//Проверка//
	const d = new Date('2023-07-11');
	d.setDate(d.getDate() + 91);
	document.getElementById("test").innerHTML = d;
	console.log(`тест: ${d}`);

});