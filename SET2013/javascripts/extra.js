function showDay(day) {
	hideDays();
			switch(day){
				case 1:
				$('div[id^="day1"]').show();
				break;
				
				case 2:
				$('div[id^="day2"]').show();
				break;
				
				case 3:
				$('div[id^="day3"]').show();
				break;
				
				case 4:
				$('div[id^="day4"]').show();
				break;
				
				case 5:
				$('div[id^="day5"]').show();
				break;
			}
		}

function hideDays() {
	$('div[id^="day1"]').hide();
	$('div[id^="day2"]').hide();
	$('div[id^="day3"]').hide();
	$('div[id^="day4"]').hide();
	$('div[id^="day5"]').hide();
}