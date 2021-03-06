var menu =
    {
        items: {},
        loadTop:function (menuType, elementID)
        {
            var menuList={lunch:"lunch.json","dinner":"dinner.json","gross":"vegetarian.json","sushi":"sushi.json"};
            var xhttp = new XMLHttpRequest();
            var scope = this;
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    menuItems = JSON.parse(xhttp.responseText);
                    scope.items = menuItems;
                    var populatedMenu = '<div class="" style="overflow: hidden;padding-top:8px;">';
                    populatedMenu += "<div class='category'><h4>Popular Items</h4>"
                    for(var category in menuItems)
                    {
                        var dishes = menuItems[category].items;
                        for(var dish in dishes)
                        {
                            console.log(dishes[dish]);
                            if(dishes[dish].top)
                            {
                                populatedMenu += "<div class='menu-item container'><div class='top'>";
                                populatedMenu += "<span>"+dishes[dish].name+"</span>";
                                populatedMenu += "</div>";
                                if(dishes[dish].description)
                                {
                                    populatedMenu += "<div class='description'><span>"+dishes[dish].description+"</span></div>";
                                }
                                if(dishes[dish].list)
                                {
                                    populatedMenu += scope.makeList(dishes[dish].list);
                                }
                                populatedMenu += "</div>";
                            }

                        }
                    }
                    populatedMenu += "</div>";
                    document.getElementById(elementID).innerHTML = populatedMenu;
                }
            };
            xhttp.open("GET", "menus/"+menuList[menuType], true);
            xhttp.send();
        },
        load: function (menuType, elementID)
        {
            var menuList={lunch:"lunch.json","dinner":"dinner.json","gross":"vegetarian.json","sushi":"sushi.json"};

            var xhttp = new XMLHttpRequest();
            var scope = this;
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    menuItems = JSON.parse(xhttp.responseText);
                    scope.items = menuItems;
                    var populatedMenu = '<div class="" style="overflow: hidden;padding-top:8px;padding-bottom:8px;">';
                    for(var category in menuItems)
                    {
                        var dishes = menuItems[category].items;
                        populatedMenu += "<div class='category'><h3 class='menuTitle'>"+menuItems[category].category+"</h3>"
                        if(menuItems[category].description)
                        {
                            populatedMenu += "<h5>"+menuItems[category].description+"</h5></div>"
                        }
                        for(var dish in dishes)
                        {
                            populatedMenu += "<div class='menu-item container'><div class='top'>";
                            populatedMenu += "<span class='dishName'>"+dishes[dish].name+"</span>";
                            if(dishes[dish].price)
                            {
                                populatedMenu += "<span class='price'>$"+dishes[dish].price+"</span>";
                            }
                            populatedMenu += "</div>";
                            if(dishes[dish].description)
                            {
                                populatedMenu += "<div class='description'><p>"+dishes[dish].description+"</p></div>";
                            }
                            if(dishes[dish].list)
                            {
                                populatedMenu += scope.makeList(dishes[dish].list);
                            }

                            if(dishes[dish].table)
                            {
                                populatedMenu += scope.makeTable(dishes[dish].table);
                            }
                            //populatedMenu += dishes[dish].spicy;
                            populatedMenu += "</div>";
                        }
                    }
                    populatedMenu += "</div>";
                    document.getElementById(elementID).innerHTML = populatedMenu;
                }
            };
            xhttp.open("GET", "menus/"+menuList[menuType], true);
            xhttp.send();
        },
        makeTable:function (elem){
            var output = "<table><thead><tr>";
            for(var i =0; i < elem.columnNames.length;i++)
            {
                output+="<th>"+elem.columnNames[i]+"</th>";
            }
            output+="</tr></thead>"
            for(var i =0; i < elem.rows.length;i++)
            {
                output+="<tr>"
                for(var j =0; j < elem.rows[i].length;j++)
                {
                    output+="<td>"+elem.rows[i][j]+"</td>";
                }
                output+="</tr>"
            }
            output+="</table>";
            return output;
        },
        makeList:function (elem){
            var output = "<ol class='list'>";
            for(var i =0; i < elem.length;i++)
            {
                output+="<li>"+elem[i]+"</li>";
            }
            output+="</ol>";
            return output;
        }
    }
