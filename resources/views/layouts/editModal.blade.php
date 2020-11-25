<!-- Modal -->
<div class="modal fade" id="exampleModalCenter{{$m}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
                             @if(($rate->sendfrom) == 1)
                                 Pounds
                            @elseif(($rate->sendfrom) == 2)
                                 Naira
                            @elseif(($rate->sendfrom) == 3)
                                 Cedes
                            @elseif(($rate->sendfrom) == 4)
                                Dollars
                            @endif
                                -
                            @if(($rate->sendto) == 1)
                                  Pounds
                             @elseif(($rate->sendto) == 2)
                                   Naira
                             @elseif(($rate->sendto) == 3)
                                  Cedes  
                             @elseif(($rate->sendto) == 4)
                                    Dollars 
                             @endif
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="/edit/rates" method="POST" >
             @method('PUT')
             @csrf
            
             <input type="hidden" name="id" value="{{$rate->id}}" >
             <div class="form-group">
               <label for="exampleInputEmail1">New Rate</label>
                <input type="number" step=0.001 class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="new_rate" value="{{$rate->c_rate}}">
                <small id="emailHelp" class="form-text text-muted"><em>Please enter a new rate not less than 0.001.</em></small>
             </div>

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>