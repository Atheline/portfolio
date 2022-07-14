// JavaScript Document
$(document).ready(function() {
	var idcount = 0;
	$("#customerform").submit(function(event) {
		event.preventDefault();
		idcount++;
		var Surname = $("#surname").val();
		var Name = $("#name").val();
		var Gender = $("#gender:checked").val();
		var Address = $("#address").val();
		var Email = $("#email").val();
		var Phonenumber = $("#phoneN").val();
		
		$(".tblData").fadeIn(500);
		
			$("#tblData tbody").append("<tr><td>" + idcount + "</td>" + 
			"<td>" + Surname + "</td>" + 
			"<td>" + Name + "</td>" +
			"<td>" + Gender + "</td>" +
			"<td>" + Address + "</td>" +
			"<td>" + Email + "</td>" +
			"<td>" + Phonenumber +"</td>" +
			"<td><button class='Edit'>Edit</button>" +
			"<button class='Delete'>Delete</button></td></tr>");
			
			$(".Edit").bind("click", Edit);
			$(".Delete").bind("click", Delete);
		
		function Delete() {
		var par = $(this).parent().parent();
		par.remove();
		}
		
		function Edit() {
			var par = $(this).parent().parent();
			var tdSurname = par.children("td:nth-child(2)");
			var tdName = par.children("td:nth-child(3)");
			var tdGender = par.children("td:nth-child(4)");
			var tdaddress = par.children("td:nth-child(5)");
			var tdemail = par.children("td:nth-child(6)");
			var tdphoneN = par.children("td:nth-child(7)");
			var tdButtons = par.children("td:nth-child(8)");
			
			tdSurname.html("<input type='text' value='" + tdSurname.html() + "'>");
			tdName.html("<input type='text' value='" + tdName.html() + "'>");
			tdGender.html("<input type='text' value='" + tdGender.html() + "'>");
			tdaddress.html("<input type='text' value='" + tdaddress.html() + "'>");
			tdemail.html("<input type='text' value='" + tdemail.html() + "'>");
			tdphoneN.html("<input type='text' value='" + tdphoneN.html() + "'>");
			tdButtons.html("<button class='Save'>Save</button>");
			
			$(".Save").bind("click", Save);
		}
	
		function Save() {
		var par = $(this).parent().parent();
			var tdSurname = par.children("td:nth-child(2)");
			var tdName = par.children("td:nth-child(3)");
			var tdGender = par.children("td:nth-child(4)");
			var tdaddress = par.children("td:nth-child(5)");
			var tdemail = par.children("td:nth-child(6)");
			var tdphoneN = par.children("td:nth-child(7)");
			var tdButtons = par.children("td:nth-child(8)");
		
		
		tdSurname.html(tdSurname.children("input[type='text']").val());
		tdName.html(tdName.children("input[type='text']").val());
		tdGender.html(tdGender.children("input[type='text']").val());
		tdaddress.html(tdaddress.children("input[type='text']").val());
		tdemail.html(tdemail.children("input[type='text']").val());
		tdphoneN.html(tdphoneN.children("input[type='text']").val());
		tdButtons.html("<button class='Edit'>Edit</button>" +
			"<button class='Delete'>Delete</button");
			
		$(".Edit").bind("click", Edit);
		$(".Delete").bind("click", Delete);
	}
		$(document).ready(function() {
            $("button").click(function() {
                $("#d")[0].reset()
            });
        });
		
		
	});
});
