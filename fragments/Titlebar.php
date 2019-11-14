<?php


class Titlebar
{
    public function render(){
        ?>
        <div id="headerMenu">
            <img src="Titleimage.png" alt="Games of the Decade"/>
            <a href="../homepage.php"><img class="menuLink" src="homeIcon.png" alt="Home"/></a>
            <a href="../top10.php"><img class="menuLink" src="top10Icon.png" alt="Top Ten"></a>
            <a href="../top-100-tier-list.php"><img class="menuLink" src="top100.Icon.png" alt="Top One Hundred"></a>
            <a href="../submitnewgame.php"><img class="menuLink" src="submitGame.png"><img src="submit.png" alt="Submit New game"></a>
        </div>
        <?php
    }
}