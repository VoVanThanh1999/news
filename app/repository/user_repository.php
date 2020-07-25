
<?php
include_once '../app/init.php';

class user_repository
{

    private $mysql;

    public function __construct()
    {
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }

    function Register(users $users)
    {}

    function getById($id)
    {
       
        $query = " SELECT * FROM users WHERE id = " . $id . " ";
        $result = $this->mysql->query($query);
        $user;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = new users($row['id'], $row['name'], $row['email'],$row['pass_word'], $row['gender'], $row['date_of_birth']);
            }
        }
        if (isset($user)) {
            return $user;
        }
        return null;
    }

    function deleteById($id)
    {}

    function saveOrUpdate(users $p)
    {
        $flag = true;
        if ($p->getId() == null) {
            $query = "INSERT INTO post (category_id, title, intro,content,images,tag,description,slug,active)
 VALUES ('" . $p->category_id . "', '" . $p->title . "', '" . $p->intro . "','" . $p->content . "','" . $p->images . "','" . $p->tag . "','" . $p->description . "','" . $p->slug . "',0)";
            $result = $this->mysql->query($query);
            $flag = $result;
        } else {
            $query = "  UPDATE post
                        SET title=?, intro=?, content=?,images=?,tag=?,description=?,slug=?,active=?
                        WHERE id=? ";
            $stmt = $this->mysql->prepare($query);
            $id = $p->id;
            $title = $p->title;
            $intro = $p->intro;
            $content = $p->content;
            $images = $p->images;
            $tag = $p->tag;
            $description = $p->description;
            $slug = $p->slug;
            $active = $p->active;
            $stmt->bind_param("ssdssssss", $title, $intro, $content, $images, $tag, $description, $slug, $active, $id);
            $stmt->execute();
            if ($stmt->error) {
                $flag = false;
            } else {
                $flag = true;
            }
            $stmt->close();
        }
        return $flag;
    }
}