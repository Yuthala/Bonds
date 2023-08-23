
window.addEventListener('DOMContentLoaded', function() {
	'use strict';

	let calcDate = document.getElementById('date'),

		couponDate = document.querySelectorAll('.coupon-date'),
		couponAmount = document.querySelectorAll('.coupon-amount'),

		quantity = document.querySelectorAll('.quantity'),
		faceValue = document.querySelectorAll('.face-value'),
		couponPercentage = document.querySelectorAll('.coupon'),
		couponPeriod = document.querySelectorAll('.coupon-period')[0],
		maturityDate = document.querySelectorAll('.maturity-date'),
		latestCouponDate = document.getElementById('latest-coupon-date');

	// const newDate = new Date();
	// console.log(newDate);
	// newDate.setDate(newDate.getDate() + 50);
	// document.getElementById('nearest-coupon-date').innerHTML = newDate;

	let msec = Date.parse(latestCouponDate.innerHTML);
	console.log(msec);
	let newMsec = msec + ()
	const newDate = new Date(msec);
	console.log(newDate);
})