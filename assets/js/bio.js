var data = new Array();
function getdata()
{
  
    var database = firebase.database();
    var ref = database.ref().child("bios");
    var a = 0;
    var n = 0;
    ref.once("value").then(function(snapshot){
      snapshot.forEach(function(snap){
        data[n] = snap.val().bio;
        //document.getElementById("c_table").append(data[n]);
        //myText = document.createElement("br");
        //document.getElementById("c_table").appendChild(myText);
        //document.getElementById("c_table").innerHTML += data[n] + "\n";
        n = n + 1;
      });
    }).then(value => { 
      var area = document.getElementById('try');
        //area.innerHTML = "<p id = '0'></p>  <button id = 'b1'>Copy</button>"
        for(var j = 0; j < data.length; j++){
             area.innerHTML += "<textarea class = 'js-captionArea' readonly='readonly'></textarea><button class = 'js-CopyBtn'>Copy</button>&emsp; &emsp; &emsp;";
             //console.log("thakkar")
        }

        var copyTextarea = Array.prototype.slice.call(document.querySelectorAll('.js-captionArea'));
        copyTextarea.forEach((e)=>{
          e.style.width="400px"
          e.style.height="100px"
          e.value = data[a];
          a = a+1;
        })
        var copyTextareaBtn = Array.prototype.slice.call(document.querySelectorAll('.js-CopyBtn'));
        copyTextareaBtn.forEach(function(btn, idx){
  
          btn.addEventListener("click", function(){
    
            // Get the textarea who's index matches the index of the button
          copyTextarea[idx].select();

          try {
            var msg = document.execCommand('copy') ? 'successful' : 'unsuccessful';
            console.log('Copying text command was ' + msg);
          } catch (err) {
            console.log('Whoops, unable to copy');
          } 
      
          });
    
          });
        //console.log(copyTextarea);
        console.log(data);
    })
    
    
   // DRAW THE HTML TABLE
  /*var perrow = 3, // 3 items per row
      html = "<table><tr>";

  // Loop through array and add table cells
  for (var i=0; i<data.length; i++) {
    html += "<td>" + data[i] + "</td>";
    // Break into next row
    var next = i+1;
    if (next%perrow==0 && next!=data.length) {
      html += "</tr><tr>";
    }
  }
  html += "</tr></table>";

  // ATTACH HTML TO CONTAINER
  document.getElementById("container").innerHTML = html;

    /*ref.on('value',function(snapshot){
      document.getElementById("category").innerHTML = snapshot.val();
    });*/ 
}
getdata();





