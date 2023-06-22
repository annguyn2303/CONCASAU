<?php
    if($name=="all")
    {
        foreach($makeupList as $ml)
        {
            echo"
                <div class='card col-6 col-lg-3 float-left border-0'>
                <img src='".$ml->getproduct_thumbnail()."' class='card-img-top img-product-thumbnail' alt='San pham'>
                <div class='card-body'>
                    <h5 class='card-title'>".$ml->getproduct_name()."</h5>
                    <p class='card-text'>Gia: ".number_format($ml->getproduct_price(), 0, ',', '.')."</p>
                    <a href='details.php?productid=".$ml->getproduct_id()."' class='stretched-link'></a>
                </div>
                </div>
                "; 
            }
    }
    else{
        $arr_sort= array();
        $arr_id= array();
        $a=0;
        // add price to array
        foreach($makeupList as $ml)
        {
            $num=($ml->getproduct_price());
            $arr_sort[$a]=(double)$num;
            $a++;
        }
        //
        $arr_price= array();
        $index_arr_price=0;
        if(!$price==null)
        {
            for($j=0;$j<count($price);$j++)
            {
                switch($price[$j]){
                case '<2':
                    for($i=0;$i<count($arr_sort);$i++)
                    {
                        if($arr_sort[$i]<2000000)
                        {
                            $arr_price[$index_arr_price]=$arr_sort[$i];
                            $index_arr_price++;
                        }
                    }
                    break; 
                case '2-5':
                    for($i=0;$i<count($arr_sort);$i++)
                    {
                        if(2000000<=$arr_sort[$i]&&$arr_sort[$i]<5000000)
                        {
                            $arr_price[$index_arr_price]=$arr_sort[$i];
                            $index_arr_price++;
                        }
                    } 
                    break; 
                case '5-10':
                    for($i=0;$i<count($arr_sort);$i++)
                    {
                        if(5000000<=$arr_sort[$i]&&$arr_sort[$i]<=10000000)
                        {
                            $arr_price[$index_arr_price]=$arr_sort[$i];
                            $index_arr_price++;
                        }
                    } 
                    break; 
                case '>10':
                    for($i=0;$i<count($arr_sort);$i++)
                    {
                        if($arr_sort[$i]>10000000)
                        {
                            $arr_price[$index_arr_price]=$arr_sort[$i];
                            $index_arr_price++;
                        }
                    } 
                break;
                }
            }
        }
        else{
            $arr_price=$arr_sort;
        }
        // sort price
        if($minmax==1){
            rsort( $arr_price);
        }
        else{
            if(!$minmax==null)
            {
                sort($arr_price);
            }
        }
        //id product
        $index_id=0;
        for($i=0;$i<count($arr_price);$i++){
            foreach($makeupList as $ml)
            {
                if($arr_price[$i]==$ml->getproduct_price()){
                    $arr_id[$index_id]=$ml->getproduct_id();
                    $index_id++;
                }
            }
        }

        //print product
            for($j=0;$j<count($arr_id);$j++){
                    foreach($makeupList as $ml)
                    {
                        if($ml->getproduct_id()==$arr_id[$j])
                        { 
                            echo"
                                <div class='card col-6 col-lg-3 float-left border-0'>
                                <img src='".$ml->getproduct_thumbnail()."' class='card-img-top img-product-thumbnail' alt='San pham'>
                                <div class='card-body'>
                                    <h5 class='card-title'>".$ml->getproduct_name()."</h5>
                                    <p class='card-text'>Gia: ".number_format($ml->getproduct_price(), 0, ',', '.')."</p>
                                    <a href='details.php?productid=".$ml->getproduct_id()."' class='stretched-link'></a>
                                </div>
                                </div>
                            "; 
                        }
                    }
                }
            
        }
            
        
    
?>