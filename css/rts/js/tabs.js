function TabbedPanel(controllerName, tabElement, panelElement)
{
  this.Name = controllerName;
  this.tabNumber = 0;
  this.currentHighPanel = null;
  this.currentHighTab = null;
  this.panelContainer = panelElement;
  this.tabContainer = tabElement;
  this.lowTabStyle = 'lowTab';
  this.highTabStyle = 'highTab';

  this.CreateTab = function(tabName)
  {
    var tabID = this.Name + 'Tab' + this.tabNumber;
    var panelID = this.Name + 'Panel' + this.tabNumber;
    var panel = document.createElement('div');
    panel.style.left = '0px';
    panel.style.top = '0px';
    panel.style.width = '100%';
    panel.style.height = '100%';
    panel.style.display = 'none';
    panel.tabNum = this.tabNumber;
    panel.id = panelID;

    if(this.panelContainer.insertAdjacentElement == null)
      this.panelContainer.appendChild(panel)
    else
      this.panelContainer.insertAdjacentElement("beforeEnd",panel); //Internet Explorer

    var cell = this.tabContainer.insertCell(this.tabContainer.cells.length);
    cell.id = tabID;
    cell.className = this.lowTabStyle;
    cell.tabNum = this.tabNumber;
    cell.onclick = this.OnTabClicked;
    cell.innerHTML = tabName;
    cell.panelObj = this;
    this.TabClickEl(cell);  

    this.tabNumber++;

    return panel;
  }
     
  this.OnTabClicked = function(event)
  {
    // Internet Explorer : Other
    var el = (event.target == null) ? window.event.srcElement : event.target;
    el.panelObj.TabClickEl(el);
  }

  this.TabClickEl = function (element)
  {
    if(this.currentHighTab == element)
      return;

    if(this.currentHighTab != null)
      this.currentHighTab.className = this.lowTabStyle;

    if(this.currentHighPanel != null)
      this.currentHighPanel.style.display = 'none';

    this.currentHighPanel = null;
    this.currentHighTab = null;

    if(element == null)
      return;

    this.currentHighPanel = document.getElementById(this.Name
        + 'Panel' + element.tabNum);

    if(this.currentHighPanel == null)
      return;

    this.currentHighTab = element;
    this.currentHighTab.className = this.highTabStyle;
    this.currentHighPanel.style.display = '';
  }
   
  this.TabCloseEl = function(element)
  {
    if(element == null)
      return;
    if(element == this.currentHighTab)
    {
      var i = -1;
      if(this.tabContainer.cells.length > 2)
      {
        i = element.cellIndex;
        if(i == this.tabContainer.cells.length-2)
          i = this.tabContainer.cells.length-3;
        else
          i++;
      }
             
      if(i >= 0)
        this.TabClickEl(this.tabContainer.cells[i]);
      else
        this.TabClickEl(null);
           
    }

    var panel = document.getElementById(this.Name + 'Panel' + element.tabNum);
    if(panel != null)
      this.panelContainer.removeChild(panel);
       
    this.tabContainer.deleteCell(element.cellIndex);
  }
}