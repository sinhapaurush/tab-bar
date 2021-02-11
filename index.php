<?php
    function tab_view($array){
        $tabs = "";
        foreach ($array['icons'] as $each){
            $tabs = $tabs."<li id='tminctabsiconbtn' class='material-icons tminctabsiconbtn' onclick='blackallothertabstminc();this.style.color=\"".$array['focus']."\";".$each[1]."'>".$each[0]."</li>";
        }
        if (isset($array['bg'])){
            $background = $array['bg'];
        }else{
            $background = "#ddd";
        }
        if (isset($array['color'])){
            $tab_color = $array['color'];
        }else{
            $tab_color = "#000";
        }
        if (isset($array['position'])){
            $pos = $array['position'];
        }else{
            $pos = "bottom";
        }
        return("
            <div id='tminc-tabview'>
            <ul>{$tabs}</ul>
            </div>
            <style>
            #tminc-tabview{
                background:{$background};
                {$pos}:0;
            }
            #tminc-tabview li{
                color: {$tab_color}
            }
            </style>
            <script>
            function blackallothertabstminc() {
                elements = document.getElementsByClassName('tminctabsiconbtn');
                for (var i = 0; i < elements.length; i++) {
                    elements[i].style.color='{$tab_color}';
                }
            }
            </script>
        ");
    }
?>
