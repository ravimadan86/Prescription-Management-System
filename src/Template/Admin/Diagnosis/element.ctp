<div class="col-sm-6">
    <div class="form-group">
        <label class="name">Name<span class="required" aria-required="true"></span></label>
        <div class="inputs">
            <?php echo $this->Form->input('name', ['class' => 'form-control', 'value' => $diagnosi->name, 'id' => 'diagnosisName', 'label' => false, 'required' => true, 'type' =>'text']); ?>
        </div>
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group">
        <label class="name">Instructions<span class="required" aria-required="true"></span></label>
        <div class="inputs">
            <?php echo $this->Form->input('instructions', ['class' => 'form-control', 'value' => $diagnosi->instructions, 'label' => false, 'required' => true, 'type' =>'text']); ?>
        </div>
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group">
        <div class="inputs">
            <?php echo $this->Form->input('medicines._ids', ['options' => $medicines, 'default' => isset($default_medicines)?$default_medicines:'', 'class' => 'tokenize-sortable-demo1']); ?>
        </div>
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group">
        <div class="inputs">
            <?php  echo $this->Form->input('tests._ids', ['options' => $tests, 'default' => isset($default_tests)?$default_tests:'', 'class' => 'tokenize-sortable-demo1']); ?>
        </div>
    </div>
</div>




