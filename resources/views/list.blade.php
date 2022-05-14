<script>
    jQuery(function(){
        jQuery('.checkbox').click(function(){
          var thisCheckbox = jQuery(this);
          var thisCheckboxId = thisCheckbox.val();
          if(thisCheckbox.prop('checked')){
              thisCheckbox.parents('li').addClass('completed');
              window.location = '/done/'+thisCheckboxId;
          }
          else{
              thisCheckbox.parents('li').removeClass('completed');
              window.location = '/undone/'+thisCheckboxId;
          }
       });
    });
</script>

<div class="list-wrapper">
    @if( !$list->isEmpty() )
    <ul class="d-flex flex-column-reverse todo-list">
        @foreach($list as $list)
        <li @if($list->status == 1) class="completed" @endif>
            <div class="form-check"> <label class="form-check-label">
                    <input value="{{ $list->id }}" class="checkbox" type="checkbox" @if($list->status == 1) checked="checked" @endif > {{$list->text}}
                    <i class="input-helper"></i></label>
            </div>
            <a href="{{ route('delete', $list->id) }}" class="remove mdi mdi-close-circle-outline"></a>
        </li>
        @endforeach
    </ul>
    @else
        <p class="list-empty">List is empty!</p>
    @endif
</div>
