<?php
/**
 * Created by: Xiao Inc.
 * User: Hsnoval_
 * Date: 12/08/2013
 * Time: TIME
 * To change this template use File | Settings | File Templates.
 */
class PostblogModel extends baseModel
{
    public function postblog($author,$blogtitle,$blogcategory,$blogcontent,$blogdate,$blogstatus,$blogcomment,$commentcount,$viewcount,$pass,$blogfeature)
    {
        global $db;
        $db->query('INSERT INTO xdata_blog(author,blogtitle,blogcategory,blogcontent,blogdate,blogstatus,blogcommentflat,commentcount,viewcount,password,blog_feature_image) VALUE ('.$author.','.$blogtitle.','.$blogcategory.','.$blogcontent.','.$blogdate.','.$blogstatus.','.$blogcomment.','.$commentcount.','.$viewcount.','.$pass.','.$blogfeature.')');
    }
}
?>