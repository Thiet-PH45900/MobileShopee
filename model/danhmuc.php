<?php
    function insert_danhmuc($tenloai){
        $sql="insert into  danhmuc(tendanhmuc) values('$tenloai')";
        pdo_execute($sql);
    }

    function delete_danhmuc($id){
        $sql="DELETE FROM danhmuc WHERE id=".$_GET['id'];
        pdo_execute($sql);
    }

    function loadall_danhmuc(){
        $sql="SELECT * FROM danhmuc ORDER BY id desc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }

    function loadone_danhmuc($id){
        $sql="select * from danhmuc where id=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }

    function updatedm($id,$tenloai){
        $sql="update danhmuc set tendanhmuc= '".$tenloai."' where id=".$id;
        pdo_execute($sql);
    }
?>