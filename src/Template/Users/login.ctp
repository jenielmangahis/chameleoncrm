<div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style="background-image:url('<?= $this->Url->build("/webroot/images/adminc/bg.jpg"); ?>')">
    <div class="pos-a centerXY">
        <div class="bgc-white bdrs-50p pos-r" style="width:200px;height:189px"><h2>C</h2></div>
    </div>
</div>
<div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
    <h4 class="fw-300 c-grey-900 mB-40">Login to start your session</h4>    
    <?= $this->Flash->render() ?>
    <?= $this->Form->create() ?>    
        <div class="form-group">
            <label class="text-normal text-dark">Email</label>
            <input type="email" required="" name="username" class="form-control" placeholder="youremail@domain.com">
        </div>
        <div class="form-group">
            <label class="text-normal text-dark">Password</label>
            <input type="password" required="" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <div class="peers ai-c jc-sb fxw-nw">
                <div class="peer">
                    <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                        <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                        <label for="inputCall1" class="peers peer-greed js-sb ai-c"><span class="peer peer-greed">Remember Me</span></label>
                    </div>
                </div>
                <div class="peer">                    
                    <button class="btn btn-primary">Login</button> | 
                    <a href="<?= $this->Url->build('/register'); ?>">Register</a>
                </div>
            </div>
        </div>
    <?= $this->Form->end() ?>
</div>