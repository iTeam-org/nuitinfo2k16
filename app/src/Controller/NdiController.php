<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;


/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class NdiController extends AppController
{
    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */

    public function index(){
        $session = $this->request->session();
        $this->loadModel('Users');
        
        if($session->read('user_id')){
            return $this->redirect(['controller' => 'Ndi', 'action' => 'home']);
        }
        // else if($this->request->data && $this->request->is('post')){
        //     /*Get authentification*/
        //     $user=$this->Auth->identify();
        //     if($user){
        //         /*OPEN session*/
        //         $this->set('title', 'Yes !');

        //         $session->write('user_id',$user["id"]);

        //         $session->write('connecte','oui');
        //         $fighters = $this->Fighters->getMyFighters($user["id"]);
        //         //Go to home page

        //         return $this->redirect(['controller' => 'Homes', 'action' => 'index']);
        //     }
        //     else{
        //         $this->Flash->error(__('Couldnt log in. Please, try again.'));
        //         $this->set('title', 'No !');
        //     }
        // }
        else{
            $session->write('user_id', '1234');
            return $this->redirect(['controller' => 'Ndi', 'action' => 'home']);
            $this->set('title', 'Login please');
        }
    }

    public function home(){
        $tickets = $this->loadModel("Tickets")->getTickets();
        $model = $this->loadModel("Tickets");
        $this->set('tickets', $tickets);
        $this->set('model', $model);
    }

    public function map(){
        
        $tickets = $this->loadModel("Tickets");
        $tickets_json = $tickets->getTickets();
        
        

    }

    public function addTicket(){
        $session=$this->request->session();

        $tickets=$this->loadModel("Tickets");
        
        if($this->request->data && $this->request->is('post')){
            $tickets->addTicket($session, $this->request->data);
        }

        return $this->redirect(['controller' => 'ndi', 'action' => 'home']);

    }
}
