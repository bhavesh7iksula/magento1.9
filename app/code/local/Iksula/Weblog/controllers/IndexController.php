<?php class Iksula_Weblog_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        echo "string";
        $this->loadLayout();  //This function read all layout files and loads them in memory
        $this->renderLayout(); //This function processes and displays all layout phtml and php files.
    }

        public function testModelAction() {
         $params = $this->getRequest()->getParams();
    $blogpost = Mage::getModel('weblog/blogpost');

           //var_dump($blogpost);
           /*echo "<pre>";
           print_r($blogpost);
           echo "</pre>";*/
    echo("Loading the blogpost with an ID of ".$params['id']);
    $blogpost->load($params['id']);

    $data = $blogpost->getData();
    var_dump($data);
    }

    public function createNewPostAction() {
    $blogpost = Mage::getModel('weblog/blogpost');
    $blogpost->setTitle('Code!');
    $blogpost->setPost('This post was created from code hhhhhhhh!');
    $blogpost->save();
    echo 'post with ID ' . $blogpost->getId() . ' created';
    
	}

	public function editFirstPostAction() {
    $blogpost = Mage::getModel('weblog/blogpost');
    $blogpost->load(7);
    $blogpost->setTitle("The First post!");
    $blogpost->save();
    echo 'post edited';
	}

	public function deleteFirstPostAction() {
    $blogpost = Mage::getModel('weblog/blogpost');
    $blogpost->load(2);
    $blogpost->delete();
    echo 'post removed';
	}

	public function showAllBlogPostsAction() {
    $posts = Mage::getModel('weblog/blogpost')->getCollection();
    //var_dump($posts);
    foreach($posts as $blogpost){
        echo '<h3>'.$blogpost->getTitle().'</h3>';
        echo nl2br($blogpost->getPost());
    	}
	}
}


?>