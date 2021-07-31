 // Add something to given element placeholder
function addToPlaceholder(toAdd, el) {
    el.attr('placeholder', el.attr('placeholder') + toAdd);
    // Delay between symbols "typing" 
    return new Promise(resolve => setTimeout(resolve, 100));
}
// Cleare placeholder attribute in given element
function clearPlaceholder(el) {
    el.attr("placeholder", "");
}
// Print one phrase
function printPhrase(phrase, el) {
    return new Promise(resolve => {
        // Clear placeholder before typing next phrase
        clearPlaceholder(el);
        let letters = phrase.split('');
        // For each letter in phrase
        letters.reduce(
            (promise, letter, index) => promise.then(_ => {
                // Resolve promise when all letters are typed
                if (index === letters.length - 1) {
                    // Delay before start next phrase "typing"
                    setTimeout(resolve, 1000);
                }
                return addToPlaceholder(letter, el);
            }),
            Promise.resolve()
        );
    });
} 
// Print given phrases to element
function printPhrases(phrases, el) {
    // For each phrase
    // wait for phrase to be typed
    // before start typing next
    phrases.reduce(
        (promise, phrase) => promise.then(_ => printPhrase(phrase, el)), 
        Promise.resolve()
    );
}
// Start typing
function run() {
    let phrases = [
        "FFMC License",
        "Ayush License ",
        "TEC Certificate",
		"CDSCO License ",
		"Payment Gateway License",
		"Insurance Web Aggregator License ",
		"PSARA License",
        "Search"
    ];

    printPhrases(phrases, $('#search'));
}

run(); 

(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});

jQuery(document).ready(function($) {
        		"use strict";
        		//  TESTIMONIALS CAROUSEL HOOK
		        $('#customers-testimonials').owlCarousel({
		            loop: true,
		            center: true,
		            items: 3,
		            margin: 0,
		            autoplay: true,
		            dots:true,
		            autoplayTimeout: 8500,
		            smartSpeed: 450,
		            responsive: {
		              0: {
		                items: 1
		              },
		              768: {
		                items: 2
		              },
		              1170: {
		                items: 3
		              }
		            }
		        });
        	});
			
 $('#owl').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
   autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 3
    },
    600: {
      items: 6
    },
    1000: {
      items: 8
    }
  }
})

 $('#owl1').owlCarousel({
	rtl: true, 
  loop: true,
  margin: 10,
  nav: true,
  navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
   autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 3
    },
    600: {
      items: 6
    },
    1000: {
      items: 8
    }
  }
})
$('#services').owlCarousel({
	//rtl: true, 
  loop: true,
  margin: 10,
  nav: true,
  navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
   autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 2
    },
    600: {
      items: 2
    },
    1000: {
      items: 4
    }
  }
})
			
			