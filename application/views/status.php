<?php $this->load->view('layouts/header');?>

<div class="btl-form">
  <div class="btn-formtop">
	<Select id="bottle-count" class="select-box">
		<Option value="0">Select Bottles</Option>
		<Option value="1">1 Bottle</Option>
		<Option value="2">2 Bottles</Option>
		<Option value="3">3 Bottles</Option>
		<Option value="4">4 Bottles</Option>
		<Option value="5">5 Bottles</Option>
		<Option value="6">6 Bottles</Option>
  </Select>
  </div>
  <div class="btl-formdet">
    <h4>Target Revenue  <span>12 Million</span></h4>
    <h4>Current Revenue <span id="current-revenue"><?php echo $revenue.' Million'; ?></span></h4>
    <h4>Pending Revenue <span id="pending-revenue">12 Million</span></h4>
</div>
</div>

<div class="botlecan">
  <div class="botles">
    <div class="botlebox">
      <img src="./assets/images/empty.png" alt="coke">
      <div id="bottle1" class="filbotle"></div>
    </div>
    <div class="botlebox">
      <img src="./assets/images/empty.png" alt="coke">
      <div id="bottle2" class="filbotle"></div>
    </div>
    <div class="botlebox">
      <img src="./assets/images/empty.png" alt="coke">
      <div id="bottle3" class="filbotle"></div>
    </div>
    <div class="botlebox">
      <img src="./assets/images/empty.png" alt="coke">
      <div id="bottle4" class="filbotle"></div>
    </div>
    <div class="botlebox">
      <img src="./assets/images/empty.png" alt="coke">
      <div id="bottle5" class="filbotle"></div>
    </div>
    <div class="botlebox">
      <img src="./assets/images/empty.png" alt="coke">
      <div id="bottle6" class="filbotle"></div>
    </div>
  </div>
</div>

<?php $this->load->view('layouts/footer'); ?>



