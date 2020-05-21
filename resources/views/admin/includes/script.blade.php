   <!-- main javascript library -->
   <script type='text/javascript' src="/js/jquery.js"></script>
   <script type="text/javascript" src="/js/waypoints.min.js"></script>
   <script type='text/javascript' src='/js/preloader-script.js'></script>
   <!-- foundation javascript -->
   <script type='text/javascript' src="/js/foundation.min.js"></script>
   <script type='text/javascript' src="/js/foundation/foundation.dropdown.js"></script>
   <!-- main edumix javascript -->
   <script type='text/javascript' src='/js/slimscroll/jquery.slimscroll.js'></script>
   <script type='text/javascript' src='/js/slicknav/jquery.slicknav.js'></script>
   <script type='text/javascript' src='/js/sliding-menu.js'></script>
   <script type='text/javascript' src='/js/scriptbreaker-multiple-accordion-1.js'></script>
   <script type="text/javascript" src="/js/number/jquery.counterup.min.js"></script>
   <script type="text/javascript" src="/js/circle-progress/jquery.circliful.js"></script>
   <script type='text/javascript' src='/js/app.js'></script>
   <!-- additional javascript -->
   <script type='text/javascript' src="/js/number-progress-bar/jquery.velocity.min.js"></script>
   <script type='text/javascript' src="/js/number-progress-bar/number-pb.js"></script>
   <script type='text/javascript' src="/js/loader/loader.js"></script>
   <script type='text/javascript' src="/js/loader/demo.js"></script>

   <script type='text/javascript' src='/js/range-slider/jquery.range2dslider.js'></script>
   <script type='text/javascript' src="/js/number-progress-bar/jquery.velocity.min.js"></script>
   <script type='text/javascript' src="/js/number-progress-bar/number-pb.js"></script>
   <script type='text/javascript' src="/js/growl/jquery.growl.js"></script>

   <script type='text/javascript' src='/js/tip/jquery.tooltipster.js'></script>


   <script>
       $(document).ready(function() {
           $('.tooltipster-top').tooltipster({
               position: "top"
           });
           $('.tooltipster-left').tooltipster({
               position: "left"
           });
           $('.tooltipster-right').tooltipster({
               position: "right"
           });
           $('.tooltipster-bottom').tooltipster({
               position: "bottom"
           });
           $('.tooltipster-fadein').tooltipster({
               animation: "fade"
           });
           $('.tooltipster-growing').tooltipster({
               animation: "grow"
           });
           $('.tooltipster-swinging').tooltipster({
               animation: "swing"
           });
           $('.tooltipster-sliding').tooltipster({
               animation: "slide"
           });
           $('.tooltipster-falling').tooltipster({
               animation: "fall"
           });


       });
   </script>

   <script type="text/javascript">
       (function() {
           (function($) {
               "use strict";

               $('.default').click(function(event) {
                   event.preventDefault();
                   event.stopPropagation();
                   return $.growl({
                       message: "The kitten is attacking!"
                   });
               });
               $('.error').click(function(event) {
                   event.preventDefault();
                   event.stopPropagation();
                   return $.growl.error({
                       message: "The kitten is attacking!"
                   });
               });
               $('.notice').click(function(event) {
                   event.preventDefault();
                   event.stopPropagation();
                   return $.growl.notice({
                       message: "The kitten is cute!"
                   });
               });
               return $('.warning').click(function(event) {
                   event.preventDefault();
                   event.stopPropagation();
                   return $.growl.warning({
                       message: "The kitten is ugly!"
                   });
               });
           });

       })(jQuery);


       //jQuery Range 2D Slider Demos
       //
       (function($) {
           "use strict";

           function randomPercentage() {
               return Math.floor(Math.random() * 100);
           }

           function randomInterval() {
               var min = Math.floor(Math.random() * 30);
               var max = min + (Math.floor(Math.random() * 40) + 70);
               return [min, max];
           }

           function randomStep() {
               return Math.floor(Math.random() * 10) + 5;
           }

           // setup
           var $basic = $('#basic');
           var interval = randomInterval();
           var basicBar = $basic.find('.number-pb').NumberProgressBar({
               style: 'basic',
               min: interval[0],
               max: interval[1]
           })
           $basic.find('.title span').text('[Min: ' + interval[0] + ', Max: ' + interval[1] + ']');

           var percentageBar = $('#percentage .number-pb').NumberProgressBar({
               style: 'percentage'
           })

           var $step = $('#step');
           var maxStep = randomStep()
           var stepBar = $('#step .number-pb').NumberProgressBar({
               style: 'step',
               max: maxStep
           })
           $step.find('.title span').text('[Max step: ' + maxStep + ']');

           // loop
           var basicLoop = function() {
               basicBar.reach(undefined, {
                   complete: percentageLoop
               });
           }

           var percentageLoop = function() {
               percentageBar.reach(undefined, {
                   complete: stepLoop
               });
           }

           var stepLoop = function() {
               stepBar.reach(undefined, {
                   complete: basicLoop
               });
           }

           // start
           basicLoop();
       })(jQuery);
       //Range Slider

       (function($) {
           "use strict";
           $('#slider4').range2DSlider({
               grid: false,
               height: 0,
               className: 'xdsoft_custom',
               showLegend: [1, 0],
               axis: [
                   [0, 0.1]
               ],
               tooltip: ['top'],
               alwShowTooltip: [true],
               allowAxisMove: ['x'],
               printLabel: function(val) {
                   return val[0].toFixed(3);
               }
           }).range2DSlider('value', [
               [0.05, 0]
           ]);
       })(jQuery);

       (function($) {
           "use strict";
           $('.slider2').range2DSlider({
               template: 'vertical',
               value: [
                   [0, 5]
               ],
               showRanges: [
                   [0, 1]
               ],
               style: 'float:left;margin-left:25px;',
               axis: [
                   [0, 1],
                   [0, 10]
               ],
               round: true,
               printLabel: function(val) {
                   return val[1] + ' yo';
               }
           });
       })(jQuery);

       (function($) {
           "use strict";
           $('#slider1').range2DSlider({
               template: 'horizontal',
               value: [
                   [5, 0],
                   [7, 0]
               ],
               onlyGridPoint: true,
               round: true,
               axis: [
                   [-3, -2, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
               ]
           });
       })(jQuery);

       (function($) {
           "use strict";
           $('#slider').range2DSlider({
                   grid: true,
                   axis: [
                       [1, 2, 5, 7, 10],
                       [2, 5, 10]
                   ],
                   projections: true,
                   showLegend: [1, 1],
                   allowAxisMove: ['both'],
                   printLabel: function(val) {
                       this.projections && this.projections[0].find('.xdsoft_projection_value_x').text(val[1].toFixed(5));
                       return val[0].toFixed(5);
                   }
               })
               .range2DSlider('value', [
                   [0, 1],
                   [3, 0],
                   [6, 6]
               ]);
           $('#slider').range2DSlider();
       })(jQuery);
   </script>


   <script>
       $(document).foundation();
   </script>