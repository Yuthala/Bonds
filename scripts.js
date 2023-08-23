
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

		test = document.getElementById('test');

	// const newDate = new Date();
	// console.log(newDate);
	// newDate.setDate(newDate.getDate() + 50);
	// document.getElementById('nearest-coupon-date').innerHTML = newDate;

	let msec = Date.parse(latestCouponDate.innerHTML);
	console.log(msec);
	let newMsec = msec + (couponPeriod.innerHTML * 24 * 60 * 60 * 1000);
	console.log(newMsec);
	const newDate = new Date(newMsec);
	console.log(`данные из БД: ${newDate}`);

	//Проверка//
	const d = new Date('2023-07-11');
	d.setDate(d.getDate() + 91);
	document.getElementById("test").innerHTML = d;
	console.log(`тест: ${d}`);

});