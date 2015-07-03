$('document').ready(function(){
	$('.sidebar').height($('.main-content').height());
	toolTips();
	$(".niceFileInput").niceFileInput({    
		'margin' : '14'
	});	
	selectizeRegular();
	selectizeContact();	
	$('.datepicker').pikaday({
		firstDay: 1,
        minDate: new Date('2000-01-01'),
        maxDate: new Date('2050-12-31'),
        yearRange: [2000,2050],
		format: 'DD-MM-YYYY'
	});	
	myColorPicker();	
	myIcheck();
	$("input[type='number']").stepper();
	$('.yellow-editor').texteditor();
	noUISliders();
	my_masonry_init();
});

function my_masonry_init(){
	if (document.getElementById('tile-panel')) {
		var container = document.querySelector('.row-masonry');
		var msnry = new Masonry( container, {
		  "gutter": 0,
		  itemSelector: '.col-masonry'
		});
	}
}

function selectizeRegular(){
	$('.selectize-tags').selectize({
		delimiter: ',',
		persist: false,
		create: function(input) {
			return {
				value: input,
				text: input
			}
		}
	});
	$('.selectize-single').selectize({
		create: true,
		sortField: 'text',
		dropdownParent: 'body'
	});
	$('.selectize-multiple').selectize();
}

function selectizeContact(){
	var REGEX_EMAIL = '([a-z0-9!#$%&\'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+/=?^_`{|}~-]+)*@' + '(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?)';

	$('.selectize-contact').selectize({
		theme: 'contacts',
		persist: false,
		maxItems: null,
		valueField: 'email',
		labelField: 'name',
		searchField: ['name', 'email'],
		options: [
			{email: 'brian@thirdroute.com', name: 'Brian Reavis'},
			{email: 'nikola@tesla.com', name: 'Nikola Tesla'},
			{email: 'someone@gmail.com'}
		],
		render: {
			item: function(item, escape) {
				return '<div>' +
					(item.name ? '<span class="name">' + escape(item.name) + '</span>' : '') +
					(item.email ? ' <span class="email">' + escape(item.email) + '</span>' : '') +
				'</div>';
			},
			option: function(item, escape) {
				var label = item.name || item.email;
				var caption = item.name ? item.email : null;
				return '<div>' +
					'<i class="glyphicon glyphicon-envelope"></i> ' +
					'<span>' + escape(label) + '</span>' +
					(caption ? ' <span>' + escape(caption) + '</span>' : '') +
				'</div>';
			}
		},
		create: function(input) {
			if ((new RegExp('^' + REGEX_EMAIL + '$', 'i')).test(input)) {
				return {email: input};
			}
			var match = input.match(new RegExp('^([^<]*)\<' + REGEX_EMAIL + '\>$', 'i'));
			if (match) {
				return {
					email : match[2],
					name  : $.trim(match[1])
				};
			}
			alert('Invalid email address.');
			return false;
		}
	});
}
function myIcheck(){
	$('.icheck-black input').iCheck({
		checkboxClass: 'icheckbox_flat',
		radioClass: 'iradio_flat'
	});
	$('.icheck-red input').iCheck({
		checkboxClass: 'icheckbox_flat-red',
		radioClass: 'iradio_flat-red'
	});
	$('.icheck-green input').iCheck({
		checkboxClass: 'icheckbox_flat-green',
		radioClass: 'iradio_flat-green'
	});
	$('.icheck-blue input').iCheck({
		checkboxClass: 'icheckbox_flat-blue',
		radioClass: 'iradio_flat-blue'
	});
	$('.icheck-aero input').iCheck({
		checkboxClass: 'icheckbox_flat-aero',
		radioClass: 'iradio_flat-aero'
	});
	$('.icheck-grey input').iCheck({
		checkboxClass: 'icheckbox_flat-grey',
		radioClass: 'iradio_flat-grey'
	});
	$('.icheck-orange input').iCheck({
		checkboxClass: 'icheckbox_flat-orange',
		radioClass: 'iradio_flat-orange'
	});
	$('.icheck-yellow input').iCheck({
		checkboxClass: 'icheckbox_flat-yellow',
		radioClass: 'iradio_flat-yellow'
	});
	$('.icheck-pink input').iCheck({
		checkboxClass: 'icheckbox_flat-pink',
		radioClass: 'iradio_flat-pink'
	});
	$('.icheck-purple input').iCheck({
		checkboxClass: 'icheckbox_flat-purple',
		radioClass: 'iradio_flat-purple'
	});
}

function myColorPicker(){
	$('.colorpicker').spectrum({
		color: '#f00'
	});
	$('.colorpicker-flat').spectrum({
		flat: true,
		preferredFormat: "hex",
		showInput: true
	});
	$('.colorpicker-full').spectrum({
		color: "#ECC",
		showInput: true,
		className: "full-spectrum",
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		showAlpha: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		localStorageKey: "spectrum.demo",
		move: function (color) {
			updateBorders(color);
		},
		show: function () {

		},
		beforeShow: function () {

		},
		hide: function (color) {
			updateBorders(color);
		},

		palette: [
			["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)", 
			"rgb(204, 204, 204)", "rgb(217, 217, 217)", "rgb(255, 255, 255)"],
			["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
			"rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"],
			["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)",
			"rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)",
			"rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)",
			"rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)",
			"rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)",
			"rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
			"rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
			"rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
			"rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)",
			"rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
		]
	});
}
function noUISliders(){
	$('.noUiSlider.ve').noUiSlider({
		range: [0, 100],
		start: 50,
		handles: 1,
		orientation: 'vertical',
		connect: 'lower'
	});
	$('.noUiSlider.hr').noUiSlider({
		range: [0, 100],
		start: 50,
		handles: 1,
		connect: 'lower'
	});
	$('.noUiSlider.btf').noUiSlider({
		range: [0, 100],
		start: [50, 70],
		handles: 2,
		serialization: {
			to: [$("#exTO"),$("#exFR")]
		},
		connect: 'lower'
	});
}
function toolTips(){
	$('.toolTip').tooltip({
		container: 'body'
	});
	$('.popOver').popover();
}
