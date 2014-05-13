<div class="row new-card-view">

    <div class="col-xs-12">
  
        <ul class="nav nav-pills">
            <li class="active"><a href="#status" data-toggle="tab">Status</a></li>
            <li><a href="#picture" data-toggle="tab">Picture</a></li>
        </ul>

   
        <div class="tab-content">
            <div class="tab-pane fade in active" id="status">
                <input id="statusUpdate" type="text" class="form-control card-input" placeholder="What are you up to today?">
                
                <div id="statusSubmitField" class="hidden-explicit">
                    <button class="btn btn-success pull-right" id="postStatusButton">Post</button>
                    <button class="btn btn-default pull-right" id="cancelStatusButton">Cancel</button>
                </div>
                
                <div class="clearfix"></div>
            </div>
            
            <div class="tab-pane fade" id="picture">
                
            </div>
        </div>    
    </div>

</div>