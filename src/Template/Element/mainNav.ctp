<div class="dropdown">
  <button class="dropbtn">
  Candidate Navigation
    <span class="caret"></span>
  </button>
  <ul class="dropdown-content">
<li><?= $this->Html->link(__("<i class='fas fa-home'></i>&nbsp;&nbsp;Home"), ['controller' => 'Users', 'action' => 'add'], ['escape' => false]) ?></li>
<li><?= $this->Html->link(__("<i class='fa fas fa-user-alt'></i>&nbsp;&nbsp;Profile"), ['controller' => 'Users', 'action' => 'add'], ['escape' => false]) ?></li>
<li><?= $this->Html->link(__("<i class='fa fas fa-users'></i>&nbsp;&nbsp;Employers"), ['controller' => 'Employers', 'action' => 'index'], ['escape' => false]) ?></li>
<li><?= $this->Html->link(__("<i class='fa fas fa-briefcase'></i>&nbsp;&nbsp;Positions"), ['controller' => 'Jobs', 'action' => 'index'], ['escape' => false]) ?></li>
<li><?= $this->Html->link(__("<i class='fa fas far fa-clock'></i>&nbsp;&nbsp;Schedule"), ['controller' => 'Users', 'action' => 'add'], ['escape' => false]) ?></li>
<li><?= $this->Html->link(__("<i class='fa fas fa fas fa-envelope-open-text'></i>&nbsp;&nbsp;Messages"), ['controller' => 'Users', 'action' => 'add'], ['escape' => false]) ?></li>
<li><?= $this->Html->link(__("<i class='fa fas far fa-question-circle'></i>&nbsp;&nbsp;Help"), ['controller' => 'Users', 'action' => 'add'], ['escape' => false]) ?></li>
<li><?= $this->Html->link(__("<i class='fa fas fas fa-sign-out-alt'></i>&nbsp;&nbsp;Sign Out"), ['controller' => 'Users', 'action' => 'add'], ['escape' => false]) ?></li>
</ul>
</div>

<div class="dropdown">
  <button class="dropbtn">
  Employer Navigation
    <span class="caret"></span>
  </button>
  <ul class="dropdown-content">
<li><?= $this->Html->link(__('Profile'), ['controller' => 'Users', 'action' => 'add']) ?></li>
<li><?= $this->Html->link(__('Account'), ['controller' => 'Users', 'action' => 'add']) ?></li>
<li><?= $this->Html->link(__('Positions'), ['controller' => 'Users', 'action' => 'add']) ?></li>
<li><?= $this->Html->link(__('Candidates'), ['controller' => 'Users', 'action' => 'add']) ?></li>
<li><?= $this->Html->link(__('Schedule'), ['controller' => 'Users', 'action' => 'add']) ?></li>
<li><?= $this->Html->link(__('Messages'), ['controller' => 'Users', 'action' => 'add']) ?></li>
<li><?= $this->Html->link(__('Help'), ['controller' => 'Users', 'action' => 'add']) ?></li>
<li><?= $this->Html->link(__('Sign Out'), ['controller' => 'Users', 'action' => 'add']) ?></li>
<li>
</ul>
</div>

<div class="dropdown">
<button class="dropbtn">
  Admin Navigation
    <span class="caret"></span>
  </button>
  <ul class="dropdown-content">
<li><?= $this->Html->link(__('Candidates'), ['controller' => 'Users', 'action' => 'add']) ?></li>
<li><?= $this->Html->link(__('Employers'), ['controller' => 'Users', 'action' => 'add']) ?></li> 
<li><?= $this->Html->link(__('Schedules'), ['controller' => 'Users', 'action' => 'add']) ?></li>
<li><?= $this->Html->link(__('Packages'), ['controller' => 'Users', 'action' => 'add']) ?></li> 
<li><?= $this->Html->link(__('Positions'), ['controller' => 'Users', 'action' => 'add']) ?></li>
<li><?= $this->Html->link(__('Messages'), ['controller' => 'Users', 'action' => 'add']) ?></li> 
<li><?= $this->Html->link(__('Help'), ['controller' => 'Users', 'action' => 'add']) ?></li>
<li><?= $this->Html->link(__('Sign Out'), ['controller' => 'Users', 'action' => 'add']) ?></li>
</ul>
</div>
<!-- NOTE NAV For Candidates -->
<!-- TODO NAV employers ( all employers, all position, saved position [ able to send from any employer area ] ) -->
<!-- TODO NAV schedule ( saturday, friday ) -->
<!-- TODO NAV messages ( have unread message, send to employers ) -->
<!-- TODO NAV help ( contact form to gmail account, contact form [dump database] ) -->

<!-- NOTE NAV For Employers -->
<!-- TODO NAV account ( selecting and paying for options ) -->
<!-- TODO NAV positions ( CRUD ) -->
<!-- TODO NAV candidates ( all candidates, saved candidates [ able to send from any candidate area ] ) -->
<!-- TODO NAV schedule ( saturday, friday ) NOTE no need to disable on-site viewing -->
<!-- TODO NAV messages ( have unread message, send to candidates ) -->
<!-- TODO NAV help ( contact form to gmail account, contact form [dump database] ) -->
