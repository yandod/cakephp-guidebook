<p>
<?php
 $data = array(
    "北海道・東北",
    "関東" => array(
        $html->link("東京"  ,"tokyo"),
        $html->link("神奈川","kanagawa"),
        $html->link("埼玉"  ,"saitama"),
        $html->link("千葉"  ,"chiba"),
        $html->link("茨城"  ,"ibaraghi"),
        $html->link("栃木"  ,"tochighi"),
        $html->link("群馬"  ,"gunnma"),
        $html->link("山梨"  ,"yamanashi"),
    ),
    "中部",
    "近畿",
    "中国・四国",
    "九州・沖縄",
); ?>
<?php echo $html->nestedList($data); ?>
</p>
