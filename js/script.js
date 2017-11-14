var menu =
	{
		items: {},
		load: function (menuType, elementID)
		{
			var menuList={lunch:"lunch.json","dinner":"dinner.json","gross":"vegitarian.json"};

			var xhttp = new XMLHttpRequest();
			var scope = this;
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					menuItems = JSON.parse(xhttp.responseText);
					scope.items = menuItems;
					var populatedMenu = '<div class="container" style="overflow: hidden;padding-top:8px;padding-bottom:8px;">';
					for(var category in menuItems)
					{
						var dishes = menuItems[category].items;
						for(var dish in dishes)
						{
							populatedMenu += "<div class='menu-item container'><div class='top'>";
							populatedMenu += "<span>"+dishes[dish].name+"</span>";
							populatedMenu += "<span>$"+dishes[dish].price+"</span></div><div class='description'>";

							populatedMenu += "<span>"+dishes[dish].description+"</span>";
							//populatedMenu += dishes[dish].spicy;
							populatedMenu += "</div></div>";
						}
					}
					populatedMenu += "</div>";
					document.getElementById("lunch").innerHTML = populatedMenu;
				}
			};
			xhttp.open("GET", "menus/"+menuList[menuType], true);
			xhttp.send();
		}
	}
