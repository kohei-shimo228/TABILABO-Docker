<?php
    $categories=get_the_category();
    if($categories):
        foreach($categories as $cat):
            switch($cat->slug){
                case 'activity':
                    echo '<div class="p-articletype"><div class="p-articletype--ACTIVITY">ACTIVITY</div></div>';
                    break;

                case 'culture':
                    echo '<div class="p-articletype"><div class="p-articletype--CULTURE">CULTURE</div></div>';
                    break;

                case 'issue':
                    echo '<div class="p-articletype"><div class="p-articletype--ISSUE">ISSUE</div></div>';
                    break;
                            
                case 'item':
                    echo '<div class="p-articletype"><div class="p-articletype--ITEM">ITEM</div></div>';
                    break;            
                            
                case 'love':
                    echo '<div class="p-articletype"><div class="p-articletype--LOVE">LOVE</div></div>';
                    break;            
                            
                case 'pr':
                    echo '<div class="p-articletype"><div class="p-articletype--PR">PR</div></div>';
                    break;            

                case 'well-being':
                    echo '<div class="p-articletype"><div class="p-articletype--WELL-BEING">WELL-BEING</div></div>';
                    break;
            
            }
        endforeach;
    endif;
?>