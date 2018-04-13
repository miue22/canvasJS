var chart = new CanvasJS.Chart("chartContainer", {
		theme: "light1", // "light2", "dark1", "dark2"
		
		animationEnabled: false, // change to true		

		title:{
			text: "Noname"
		},
		data: [
			{
				// Change type to "bar", "area", "spline", "pie",etc.
				type: "column",
				dataPoints: [
			
				]

			}
		]
	});

chart.render();


/* chart 이름 변경 */
$("#btn1").on("click", function(){
	chart.options.title.text = $("#title").val();
	chart.render();
});


/* chart 테마 변경 */
$(".theme .dropdown-item").on("click", function(event){
	if($(event.target).hasClass('disabled')){ //disabled인건 실행 ㄴㄴ
		//console.log("disabled");
		return;
	}

	//console.log(event.target.innerHTML);
	chart.options.theme = event.target.innerHTML
	chart.render();

	//기존 요소 활성화 및 선택된 요소 disable처리
	$(".dropdown-item, .disabled").removeClass("disabled");
	$(event.target).addClass("disabled");
});


/* chart 타입 변경 */
$(".type .dropdown-item").on("click", function(event){
	if($(event.target).hasClass('disabled')){ //disabled인건 실행 ㄴㄴ
		//console.log("disabled");
		return;
	}

	//console.log(event.target.innerHTML);
	chart.options.data[0].type = event.target.innerHTML
	chart.render();

	//기존 요소 활성화 및 선택된 요소 disable처리
	$(".dropdown-item, .disabled").removeClass("disabled");
	$(event.target).addClass("disabled");
});

/* 항목 추가 */
$(".contentWrapper .creater button").on("click", function(){
	var name = $(".contentWrapper .creater input");

	if(!name.val()){
		alert("값을 입력해주세요");
		return;
	}

	inner = '<div class="row">'
				+ '<div class="col-sm-4 title"><div class="content-label">'+name.val()+'</div></div>'
				+ '<div class="col-sm-4"><input type="text" class="form-control content-data" onfocusout="updateData(event)"/></div>'
				+ '<div class="col-sm-4"><button type="button" class="btn btn-secondary remove-content-btn" onClick="removeData(event)">삭제</button></div>'
		+ '</div>';

	$(".contentWrapper .data-list").append(inner); //항목 UI 렌더링

	chart.options.data[0].dataPoints.push({label: name.val(), y: 0}); //차트에 데이터 삽입

	chart.render();

	name.val('');
});


/* 항목 값 변경 */
//$(".content-data").on("blur", function(event){
function updateData(event){
	var value = Number(event.target.value);
	var label = $(event.target).parent().parent().children(".title").children().html(); //어떤 값을 수정하고자 하는가

	var idx = chart.options.data[0].dataPoints.findIndex(function (n) { //변경하려는 항목의 인덱스 도출
			    return n.label == label;
			})

	console.log(value, label, idx);

	chart.options.data[0].dataPoints[idx].y = value; //차트 데이터에서 해당 인덱스 값 수정

	chart.render();
}
//});

/* 항목 삭제 */
function removeData(event){
//$(".remove-content-btn").on("click", function(event){
	var label = $(event.target).parent().parent().children(".title").children().html(); //어떤 버튼이 눌렸는가

	var idx = chart.options.data[0].dataPoints.findIndex(function (n) { //삭제하려는 항목의 인덱스 도출
			    return n.label == label;
			})

	$(event.target).parent().parent().html('');
	chart.options.data[0].dataPoints.splice(idx, 1); //차트 데이터에서 해당 인덱스 삭제 

	chart.render();
//});
}