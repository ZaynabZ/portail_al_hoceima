<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<div class="form-group">
		              	   			<div class="range-slider" id="price_slider">
		              					<span>
											<input id="min_price" name="min_price" type="number" value="0" min="0" max="120000"/>	-
											<input id="max_price" name="max_price" type="number" value="5000" min="0" max="120000"/>
										</span>
											<input name="range_min_price" value="1000" min="0" max="120000" step="500" type="range"/>
											<input name="range_max_price" value="50000" min="0" max="120000" step="500" type="range"/>
											</svg>
									</div>
		                    	</div>
		                    	<div class="form-group">
		                			<input type="submit" value="Search" class="btn btn-primary py-3 px-5">
		                    	</div>

<script>
	(function() {

  var parent = document.querySelector(".range-slider");
  if(!parent) return;

  var
    rangeS = parent.querySelectorAll("input[type=range]"),
    numberS = parent.querySelectorAll("input[type=number]");

  rangeS.forEach(function(el) {
    el.oninput = function() {
      var slide1 = parseFloat(rangeS[0].value),
        	slide2 = parseFloat(rangeS[1].value);

      if (slide1 > slide2) {
				[slide1, slide2] = [slide2, slide1];
         var tmp = slide2;
         slide2 = slide1;
         slide1 = tmp;
      }

      numberS[0].value = slide1;
      numberS[1].value = slide2;
    }
  });

  numberS.forEach(function(el) {
    el.oninput = function() {
			var number1 = parseFloat(numberS[0].value),
					number2 = parseFloat(numberS[1].value);
			
      if (number1 > number2) {
        var tmp = number1;
        numberS[0].value = number2;
        numberS[1].value = tmp;
      }

      rangeS[0].value = number1;
      rangeS[1].value = number2;

    }
  });

})();
</script>
</body>
</html>