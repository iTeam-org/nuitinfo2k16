        <?php
          echo $this->Html->css('bootstrap.min.css');
          echo $this->Html->css('style.css');
          echo $this->Html->css('font-awesome.css');
          echo $this->Html->meta(['link' => 'https://fonts.googleapis.com/css?family=Oswald', 'rel' => 'stylesheet']);
        ?>
        <div class='list'>
            <?php foreach($tickets as $ticket) { ?>
            <div class='item col-lg-3 col-md-4 col-sm-6 col-sm-offset-0 col-xs-4 col-xs-offset-4 <?php echo "$model->getClass()" ?>'>
                <div class='thumbnail'>
                    <img src='https://dummyimage.com/240x240' alt=''/>
                    <h3><?php echo $ticket->title; ?></h3>
                    <div class="vote">
                        <div class="row">
                            <div class="col-xs-offset-1 col-xs-3">
                                <p style="color:green;">
                                    <?php $vert = $model->getPositiveVotes($ticket->id); echo"$vert";
                                    ?>
                                </p>
                            </div>
                            <div class="col-xs-4">
                                <a href="#">
                                    <i class="fa fa-caret-up fa-3x" aria-hidden="true" style="color:green;"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-caret-down fa-3x" aria-hidden="true" style="color:red;"></i>
                                </a>
                            </div>
                            <div class="col-xs-3 ">
                               <p style="color:red;"><?php $rouge = $model->getNegativeVotes($ticket->id); echo"$rouge"; ?></p>
                           </div>
                       </div>
                   </div>
                    <p><?php $msg = $model->getLastComment($ticket->id); echo"$msg";; ?></p>
               </div>
            </div>
<<<<<<< HEAD
       </div>
       <div>
          <?php
            echo $this->Form->create(null,['url' => ['controller' => 'Ndi', 'action' => 'add_ticket']]);
                echo $this->Form->input('title');
                echo $this->Form->input('message');
                echo $this->Form->button('Ajouter ticket',['class' => 'btn btn-sm-btn-info']);
            echo $this->Form->end();
          ?>
=======
            <?php } ?>
>>>>>>> affichage_tickets
       </div>