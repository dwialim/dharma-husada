function filterArray(array,num,prefix){
	var arrStr = $.grep(array, function(v,i) {
		if(prefix==='first'){
			if(i<num){
				return v.indexOf('1');
			}
		}else{
			if(i>=num){
				return v.indexOf('1');
			}
		}
	})
	return arrStr
}

(() => {
	var maxWord = 20;
	$(".content").each(function(){
		var myStr = $(this).html()
		var id = $(this).data('id')
		if(myStr.split(' ').length > maxWord){
			var arrStr = myStr.split(' ')

			var newStr = filterArray(arrStr,maxWord,`first`)
			var removedStr = filterArray(arrStr,maxWord,'second')

			newStr = newStr.join(' ')
			removedStr = removedStr.join(' ')

			$(this).empty().html(newStr+'...')
			$(this).data('first',newStr+'...')
			$(this).data('second',' '+removedStr)
		}
	})
})()