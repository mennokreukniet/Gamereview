<div class="content">
    <h1>Games</h1>
    <!-- echo out the system feedback (error and success messages) -->

        <h3>All the games conveniently listed for you.</h3>
        <div>
            Every game we have information about is listed here.
            </fieldset>
            <div class="dropdown">
                <script>
                    /* When the user clicks on the button,
                    toggle between hiding and showing the dropdown content */
                        function filter() {
                           document.getElementById("dropdownfilter").classList.toggle("show");
                        }

                    // Close the dropdown if the user clicks outside of it
                    window.onclick = function(event) {
                      if (!event.target.matches('.dropbtn')) {

                   var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                     for (i = 0; i < dropdowns.length; i++) {
                         var openDropdown = dropdowns[i];
                      if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
        </script>
                <button onclick="filter()" class="icon filter dropbtn"> Filter</button>
                <div id="dropdownfilter" class="dropdown-content">
                    <a href="#">Xbox</a>
                    <a href="#">Playstation</a>
                    <a href="#">PC</a>
                </div>
            </div>
        </div>

        <div class="gamestable">
        <?php if ($this->games) { ?>
            <table class="overview-table">
                <?php foreach ($this->games as $key => $value) { ?>
                 
                        <tr> 
                            <td><img class="game_thumbnail" src="<?php echo $value->thumbnail; ?>"></td>
                            <td><?php echo $value->name; ?></td>
                            <td><a href="<?= Config::get('URL') . 'review/ShowGameInfo/' . $value->id; ?>">Review</a></td>
                        </tr>
                <?php 
                    }
                ?>      
            </table>
        <?php } else { ?>
            <div>No games yet. Add some!</div>
        <?php } ?>
        </div>
</div>