<script>
function showResults(str) {
  if (str.length == 0) {
    document.getElementById("search-result").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("search-result").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "fa-data/search.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>
<div id="third-submenu">
    <a href="index.php?page=employee&subpage=users">FA DATA LIST</a> |
    <a href="index.php?page=employee&subpage=users&action=create">Add Data</a> |
   
    Search <input type="text" id="search" name="search" onkeyup="showResults(this.value)">
</div>

<div id="subcontent">
    <?php
      switch($action){
               
               
      
             
                default:
                    require_once 'fa-data/fa_data.php';
                break; 
            }
    ?>
  </div>
