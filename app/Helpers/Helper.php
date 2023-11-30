<?php     

    function gender($gender){
        return $gender == 0 ? 'Nam' : 'Nữ';
    }

    function level($level){

        if ($level == 0) {
            return 'Admin';
        }
        elseif($level == 1){
            return 'Nhân viên';
        }
        else{
            return 'Khách hàng' ;
        }
    }

    function active($active = 1) : string
    {
        return $active == 1 ? 'Yes' : 'No';
    }

    function note($value = 0)
    {
        if($value == 0){
            echo '<div class="badge bg-danger">No</div>';
        }
        else{
            echo '<div class="badge bg-success">Yes</div>';
        }
    }

    function showCategories($categories , $parent_id = 0, $char = '', $select = 0)
    {
        foreach($categories as $key => $category)
        {
            $id = $category->id;
            $name = $category->categoryname;
            if($category->parent_id == $parent_id){
                if($id == $select){
                    echo "<option value='$id' selected>$char $name</option>";
                } else{
                    echo "<option value='$id'>$char $name</option>";
                }
                unset($categories[$key]);
                showCategories($categories , $category->id, $char.'--- ', $select);
            }
    
        }
    }
    