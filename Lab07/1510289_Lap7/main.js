function btnCreateTable(){

    arr = new Array();
    arr[0]=["value","value"];
    arr[1]=["value","value"];
    //var table = document.createElement("table");   
    var table=document.getElementById("create_table")
    var i, j;
    for (i=0 ;i<2;i++){
        var tr = document.createElement("tr");
        for(j =0 ;j<2;j++){
            var td = document.createElement("td");
            var txt = document.createTextNode(arr[i][j]);
            td.appendChild(txt);
            tr.appendChild(td);
        }
        table.appendChild(tr);
    }
    var att=document.createAttribute("border");
    att.value="1";
    table.setAttributeNode(att);

   // document.body.appendChild(table);
}
function btnAddRow()
{

    var tb=document.getElementById("addrow")
    //debugger
    // nRow=tb.rows.length
    // nCol=tb.rows[0].cells.length
    var i,j;
    for (i=0;i<2;i++){
        var tr=document.createElement("tr")
        for(i=0;i<2;i++){
            var td=document.createElement("td")
            var txt=document.createTextNode("value")
            td.appendChild(txt)
            td.style.color="red"
            tr.appendChild(td)
        }
        tb.appendChild(tr)
    }
   
}
function btnAddCol(){
    var tb=document.getElementById("addcol")
    var i,j;
    for (i=0;i<2;i++){
        var td=document.createElement("td")
        var txt=document.createTextNode("value")
        td.appendChild(txt)
        td.style.color="red"
        tb.rows[i].appendChild(td)
    }
}

function btnRmRow(){

    var tb=document.getElementById("toRemove")
    var n=document.getElementById("num").value
    var int_n = parseInt(n)
    if (n.trim().length==0){
        alert("Please Fill Required Field") 
        return false 
    }
    else if (isNaN(n)){
        alert("Please input a number")
        return false
    }
    else if( int_n < 0 ||  int_n > tb.rows.length -1 ){
        alert("Value is not valid")
        return false
    }
    else
        tb.deleteRow(int_n)
        return true
}
function btnRmCol(n){
    var tb=document.getElementById("toRemove")
    var n=document.getElementById("num").value

    var int_n = parseInt(n)
    nRow=tb.rows.length
    nCol=tb.rows[0].cells.length
    
    if (n.trim().length==0){
        alert("Please Fill Required Field") 
        return false 
    }
    else if (isNaN(n)){
        alert("Please input a number")
        return false
    }
    else if( int_n < 0 ||  int_n > nCol -1 ){
        alert("Value is not valid")
        return false
    }
    else
        var i;
        for (i=0;i< nRow;i++){
            tb.rows[i].deleteCell(int_n)
        }
        return true
}
function btnRmAllTable(){
    var result = confirm("Want to delete?");
    if (result) {
        var all=document.getElementsByTagName("table")
        var count=0
        while(all.length)
        {
            all[count].parentNode.removeChild(all[count])
        }
    }
    
 
}