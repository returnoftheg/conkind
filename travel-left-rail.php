         <div class="panel panel-default">
           <div class="panel-heading">Search</div>
           <div class="panel-body">
             <form>
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="search ...">
                  <span class="input-group-btn">
                    <button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-search"></span>          
                    </button>
                  </span>
               </div>  
             </form>
           </div>
         </div>  <!-- end search panel -->

         <?php $cont = array();
         $country = array();
         include 'travel-data.php';
         $cont=$continents;
         $country=$countries;
         sort($cont);
         sort($country);?>

         <div class="panel panel-info">
           <div class="panel-heading">Continents</div>
           <ul class="list-group">

               <?php
               for ($i=0; $i<6;$i++){
                   echo "<li class='list-group-item'><a href='#'>".$cont[$i]."</a></li>";
               } ?>
           </ul>
         </div>  <!-- end continents panel -->  
         <div class="panel panel-info">
           <div class="panel-heading">Popular Countries</div>
           <ul class="list-group">               

               <?php
               for ($i=0; $i<8;$i++){
                   echo "<li class='list-group-item'><a href='#'>".$country[$i]."</a></li>";
               } ?>
           </ul>
         </div>  <!-- end countries panel -->  
         <div class="panel panel-info">
