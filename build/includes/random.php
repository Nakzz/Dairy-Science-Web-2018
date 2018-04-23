<?php


function aleatorio(){
    $videos = array(
        "dairymgt_video_1.",
        "dairymgt_video_2.",
        "dairymgt_video_3.",
        "dairymgt_video_4.",
        "dairymgt_video_5.",
        "dairymgt_video_6.",
        "dairymgt_video_7.",
        "dairymgt_video_8.",
        "dairymgt_video_9.",
        "dairymgt_video_10."
        );
    return $videos[array_rand($videos, 1)]; ;
}


function texto(){
    $texto = array(
        "Decision-making focused <br> on scientific research",
        "Model-based decision <br> support tools",
        "Improving cost-efficiency <br> and profitability",
        "Environmental stewardship in <br> dairy farms",
        "Helping dairy farms <br> improve economic performance"
        );
    return $texto[array_rand($texto, 1)]; ;
}

?>
