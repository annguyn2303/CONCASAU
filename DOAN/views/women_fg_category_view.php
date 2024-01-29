<?php
   
    if($name=="all")
    {
        foreach($women_fg_List as $wfl)
        {
            echo "
                    <div class='card col-6 col-lg-3 float-left border-0'>
                    <img src='".$wfl->getproduct_thumbnail()."' class='card-img-top img-product-thumbnail' alt='San pham'>
                    <div class='card-body'>
                        <h5 class='card-title'>".$wfl->getproduct_name()."</h5>
                        <p class='card-text'>Giá: ".number_format($wfl->getproduct_price(), 0, ',', '.')."</p>
                        <a href='details.php?productid=".$wfl->getproduct_id()."' class='stretched-link'></a>
                    </div>
                    </div>
                "; 
            }
    }
    else{
        $arr_sort= array();
        $arr_id= array();
        $a=0;
        foreach($women_fg_List as $wfl)
        {
            $num=($wfl->getproduct_price());
            $arr_sort[$a]=(double)$num;
            $a++;
        }
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
        if($minmax==1){
            rsort( $arr_price);
        }
        else{
            if(!$minmax==null)
            {
                sort($arr_price);
            }
        }
        $index_id=0;
        for($i=0;$i<count($arr_price);$i++){
            foreach($women_fg_List as $wfl)
            {
                if($arr_price[$i]==$wfl->getproduct_price()){
                    $arr_id[$index_id]=$wfl->getproduct_id();
                    $index_id++;
                }
            }
        }
            for($j=0;$j<count($arr_id);$j++){
                    foreach($women_fg_List as $wfl)
                    {
                        if($wfl->getproduct_id()==$arr_id[$j])
                        { 
                            echo "
                                    <div class='card col-6 col-lg-3 float-left border-0'>
                                    <img src='".$wfl->getproduct_thumbnail()."' class='card-img-top img-product-thumbnail' alt='San pham'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>".$wfl->getproduct_name()."</h5>
                                        <p class='card-text'>Giá: ".number_format($wfl->getproduct_price(), 0, ',', '.')."</p>
                                        <a href='details.php?productid=".$wfl->getproduct_id()."' class='stretched-link'></a>
                                    </div>
                                    </div>
                                "; 
                        }
                    }
            }
        }
?>
