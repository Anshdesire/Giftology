<div class="image-wrapper">

    <?php foreach($reminders as $reminder): ?>
        <div class="event">
                <a href="<?= $this->Html->url(array('controller' => 'products',
                                                    'action' => 'view_products',
                                                    'receiver_id' => $reminder['Reminder']['friend_fb_id'],
                                                    'receiver_name' => $reminder['Reminder']['friend_name'],
                                                    'receiver_birthday' => $reminder['Reminder']['friend_birthday'],
                                                    'receiver_location' => $reminder['Reminder']['current_location'],
                                                    'friend_birthyear' => $reminder['Reminder']['friend_birthyear'],
                                                    'receiver_sex' => $reminder['Reminder']['sex'],
                                                    'ocasion' => isset($ocasion) ? $ocasion : null)); ?>">
                <div class="event suggested">
                        <div class="image-container">
                                <div class="frame-wrapper">
                                        <div class="shadow-wrapper">
                                                <div class="frame">
                                                        <img src="https://graph.facebook.com/<?= $reminder['Reminder']['friend_fb_id']; ?>/picture?type=normal"/>
                                                        <?php if (!isset($no_calendar)): ?>
                                                            <div class="calendar">
                                                                    <p><?= date('d', strtotime($reminder['Reminder']['friend_birthday'])); ?></p>
                                                            </div>
                                                        <?php endif; ?>
                                                        
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <p class="name"><?= $reminder['Reminder']['friend_name']; ?>
                        </p>
                </div>
                </a>
        </div>
    <?php endforeach; ?>	
</div>