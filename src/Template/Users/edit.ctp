<h1>Edit Article</h1>
<?php
echo $this->Form->create($user);
echo $this->Form->input('username');
echo $this->Form->input('email');
echo $this->Form->input('role');
echo "Password";
echo $this->Form->password('password');
echo $this->Form->button(__('Save User'));
echo $this->Form->end();
?>
