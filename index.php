<?php
    function bottomTabs($props){
        ?>
        <div id="root"></div>
        <div id="bottom_tab_navigation">
            <ul id="bottom_tab_route_list">
            <?php
                foreach ($props['screens'] as $screen){
                    $body = str_replace('"', '&quot;', $screen['screen']);
                    echo "<li onClick=\"__navRootElement_TMINCRouting(`{$body}`, `{$screen['title']}`)\">{$screen['button']}</li>";
                }
            ?>
            </ul>
        </div>
        <script src="./lib/tab-bar/tminc_web_routing.js"></script>
        <?php
    }
?>