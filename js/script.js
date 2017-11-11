var menu =
	{
		load: function (menuType, elementID)
		{
			var menuList={lunch:"lunch.json","dinner":"dinner.json","gross":"vegitarian.json"};

			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					menuItems = JSON.parse(xhttp.responseText);
					var populatedMenu = "";
					for(var item in menuItems)
					{
						populatedMenu += "<div class='item'>";
						populatedMenu += menuItems[item].name;
						populatedMenu += menuItems[item].description;
						populatedMenu += menuItems[item].price;
						populatedMenu += menuItems[item].spicy;
						populatedMenu += "</div>";

					}
					document.getElementById(elementID).innerHTML = populatedMenu;
				}
			};
			xhttp.open("GET", "menus/"+menuList[menuType], true);
			xhttp.send();
		}
	}
